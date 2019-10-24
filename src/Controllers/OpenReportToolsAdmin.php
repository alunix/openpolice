<?php
/**
  * OpenReportToolsAdmin is mid-level class with functions to print and process
  * administrative forms used by OpenPolice.org staff.
  *
  * OpenPolice.org
  * @package  flexyourrights/openpolice
  * @author  Morgan Lesko <wikiworldorder@protonmail.com>
  * @since v0.2.4
  */
namespace OpenPolice\Controllers;

use App\Models\User;
use App\Models\SLEmails;
use App\Models\SLEmailed;
use App\Models\OPComplaints;
use App\Models\OPDepartments;
use App\Models\OPOversight;
use App\Models\OPLinksComplaintDept;
use App\Models\OPLinksComplaintOversight;
use App\Models\OPzComplaintReviews;
use OpenPolice\Controllers\OpenReportToolsOversight;

class OpenReportToolsAdmin extends OpenReportToolsOversight
{
    /**
     * Prints a jQuery load of this complaint report within the 
     * admin dashboard.
     *
     * @param  int $nID
     * @return string
     */
    protected function printComplaintReportForAdmin($nID)
    {
        if ($this->coreID > 0) {
            $src = '/complaint/readi-' . $this->coreID 
                . '/full?ajax=1&wdg=1'
                . $GLOBALS["SL"]->getAnyReqParams();
            $GLOBALS["SL"]->pageAJAX .= '$("#admDashReportWrap")'
                . '.load("' . $src . '");';
        }
        return view(
            'vendor.openpolice.nodes.2377-admin-dash-load-complaint', 
            [
                "coreID" => $this->coreID
            ]
        )->render();
    }

    /**
     * Print OpenPolice.org staff admin tools for managing one complaint.
     *
     * @return string
     */
    protected function printComplaintAdmin()
    {
        $this->loadReportUploadTypes();
        $this->loadOversightDateLookups();
        $this->loadComplaintAdminHistory();
        $this->prepEmailComplaintData();
        $hasEmailLoaded = $this->prepAdminComplaintEmailing();
        if ($this->sendComplaintAdminEmail()) {
            $redir = '/complaint/read-' . $this->corePublicID . '?refresh=1';
            return $this->redir($redir, true);
        }
        $GLOBALS["SL"]->loadStates();
        $this->v["needsWsyiwyg"] = true;
        $this->v["incidentState"] 
            = trim($this->sessData->dataSets["Incidents"][0]->IncAddressState);
        $this->v["complaintRec"] = $this->sessData->dataSets["Complaints"][0];
        $title = $this->getCurrComplaintEngLabel() . ': Admin Toolkit';
        $tools = view(
            'vendor.openpolice.nodes.1712-report-inc-staff-tools', 
            $this->v
        )->render();
        return '<div class="pT20 pB20">' 
            . $GLOBALS["SL"]->printAccard($title, $tools, $hasEmailLoaded)
            . '</div>';
    }
    
    /**
     * Prepare everything needed for staff to select and send emails
     * to complainants from the top of their complaint report.
     *
     * @return boolean
     */
    protected function prepAdminComplaintEmailing()
    {
        $isOverCompatible = false;
        $w = '';
        if (isset($this->v["comDepts"][0])) {
            $w = $this->v["comDepts"][0]["whichOver"];
            if (isset($this->v["comDepts"][0][$w])) {
                $isOverCompatible = $this
                    ->isOverCompatible($this->v["comDepts"][0][$w]);
            }
        }
        $this->v["emailsTo"] = [
            "To Complainant" => [],
            "To Oversight"   => []
        ];
        $userID = $this->sessData->dataSets["Complaints"][0]->ComUserID;
        $complainantUser = User::find($userID);
        if ($complainantUser && isset($complainantUser->email)) {
            $name = $complainantUser->name;
            if (isset($this->sessData->dataSets["PersonContact"])) {
                $pers = $this->sessData->dataSets["PersonContact"];
                if (sizeof($pers) > 0 && isset($pers[0]->PrsnNameFirst)) {
                    $name = $pers[0]->PrsnNameFirst 
                        . ' ' . $pers[0]->PrsnNameLast;
                }
            }
            $this->v["emailsTo"]["To Complainant"][] = [
                $complainantUser->email,
                $name,
                true
            ];
        }
        if ($isOverCompatible) {
            $this->v["emailsTo"]["To Oversight"][] = [
                $this->v["comDepts"][0][$w]->OverEmail,
                $this->v["comDepts"][0][$w]->OverAgncName,
                true
            ];
        }
        $this->v["emailMap"] = [ // 'Review Status' => Email ID#
            'Submitted to Oversight'    => [7, 12], 
            'Hold: Go Gold'             => [6],
            'Pending Attorney: Needed'  => [17],
            'Pending Attorney: Hook-Up' => [18]
        ];
        $this->v["emailID"] = ($GLOBALS["SL"]->REQ->has('email') 
            ? intVal($GLOBALS["SL"]->REQ->email) : -3);
        $this->autoloadAdminComplaintEmail($isOverCompatible);
        
        $this->v["currEmail"] = [];
        if (isset($this->sessData->dataSets["LinksComplaintDept"])) {
            $depts = $this->sessData->dataSets["LinksComplaintDept"];
            if (sizeof($depts) > 0) {
                foreach ($depts as $i => $deptLnk) {
                    if (!isset($deptLnk->LnkComDeptDeptID) 
                        || intVal($deptLnk->LnkComDeptDeptID) <= 0) {
                        // "Not sure about department"
                        $deptLnk->LnkComDeptDeptID = 18124;
                        $deptLnk->save();
                        $this->sessData->dataSets["LinksComplaintDept"][$i]
                            ->LnkComDeptDeptID = 18124; 
                    }
                    $this->loadDeptStuff($deptLnk->LnkComDeptDeptID);
                    $this->v["currEmail"][] = $this->processEmail(
                        $this->v["emailID"], 
                        $deptLnk->LnkComDeptDeptID
                    );
                }
            }
        }
        $hasEmailLoaded = ($this->v["emailID"] > 0 
            && sizeof($this->v["currEmail"]) > 0);
        if ($hasEmailLoaded) {
            $this->v["needsWsyiwyg"] = true;
            foreach ($this->v["currEmail"] as $j => $email) {
                $GLOBALS["SL"]->pageAJAX .= ' $("#emailBodyCust' . $j 
                    . 'ID").summernote({ height: 350 }); ';
            }
        }
        return $hasEmailLoaded;
    }
    
    /**
     * If an email template has not already been selected, 
     * check for suggested emails for staff to send next.
     *
     * @return int
     */
    protected function autoloadAdminComplaintEmail($isOverCompatible)
    {
        if ($this->v["emailID"] <= 0) {
            switch ($this->sessData->dataSets["Complaints"][0]->ComStatus) {
                case $GLOBALS["SL"]->def
                    ->getID('Complaint Status', 'Incomplete'):
                    $this->v["emailID"] = 36; // Incomplete Complaint Check-In
                    break;
                case $GLOBALS["SL"]->def
                    ->getID('Complaint Status', 'OK to Submit to Oversight'):
                    if ($isOverCompatible) {
                        $this->v["emailID"] = 12; // Send to investigative agency
                    } else {
                        $this->v["emailID"] = 9; // How to manually submit
                    }
                    break;
                case $GLOBALS["SL"]->def
                    ->getID('Complaint Status', 'Submitted to Oversight'):
                case $GLOBALS["SL"]->def
                    ->getID('Complaint Status', 'Received by Oversight'):
                    $chk = SLEmailed::whereIn('EmailedTree', [1, 42])
                        ->where('EmailedRecID', $this->coreID)
                        ->where('EmailedEmailID', 7)
                        ->first();
                    if (!$chk || !isset($chk->created_at)) {
                        $this->v["emailID"] = 7; // Sent to investigative agency
                    }
                    break;
            }
        }
        return $this->v["emailID"];
    }
    
    /**
     * Save and process staff use of admin tools for managing one complaint.
     *
     * @return boolean
     */
    protected function saveComplaintAdmin()
    {
//if ($GLOBALS["SL"]->REQ->has('firstReview')) { echo '<pre>'; print_r($GLOBALS["SL"]->REQ->all()); echo '</pre>'; exit; }
        $hasFirstReview = ($GLOBALS["SL"]->REQ->has('firstReview') 
            && $GLOBALS["SL"]->REQ->has('n1712fld') 
            && intVal($GLOBALS["SL"]->REQ->n1712fld) > 0);
        $hasSave = $GLOBALS["SL"]->REQ->has('save');
        $hasReportUpload = ($GLOBALS["SL"]->REQ->has('reportUp') 
            && $GLOBALS["SL"]->REQ->has('reportUpType')
            && trim($GLOBALS["SL"]->REQ->reportUpType) != '');
        $hasFixDepts = $GLOBALS["SL"]->REQ->has('fixDepts');
        if ($hasFirstReview || $hasSave 
            || $hasReportUpload || $hasFixDepts) {
            $this->loadReportUploadTypes();
            $this->loadOversightDateLookups();
            $this->prepEmailComplaintData();
            if ($hasFirstReview) {
                $this->saveComplaintAdminFirstReview();
            } elseif ($hasSave) {
                $this->saveComplaintAdminStatus();
            } elseif ($hasReportUpload) {
                $this->saveComplaintAdminUpload();
            } elseif ($hasFixDepts) {
                $this->processComplaintFixDepts();
            }
            $this->clearComplaintCaches();
        } elseif ($GLOBALS["SL"]->REQ->has('refresh')
            && intVal($GLOBALS["SL"]->REQ->has('refresh')) == 2) {
            $this->clearComplaintCaches();
        }
        return true;
    }
    
    /**
     * Save and process the first pass-fail review performed by staff.
     *
     * @return boolean
     */
    protected function saveComplaintAdminFirstReview()
    {
        $newTypeVal = $GLOBALS["SL"]->def
            ->getVal('Complaint Type', $GLOBALS["SL"]->REQ->n1712fld);
        $this->logComplaintReview('First', '', $newTypeVal);
        $com = OPComplaints::find($this->coreID);
        $com->comType = intVal($GLOBALS["SL"]->REQ->n1712fld);
        $com->save();
        $this->v["firstRevDone"] = true;
        $this->v["firstReview"] = false;
        return true;
    }
    
    /**
     * Save and process a change in complaint status assigned by staff.
     *
     * @return boolean
     */
    protected function saveComplaintAdminStatus()
    {
        $status = 0;
        $evalNotes = (($GLOBALS["SL"]->REQ->has('revNote')) 
            ? trim($GLOBALS["SL"]->REQ->revNote) : '') 
            . $this->processComplaintOverDates();
        if ($GLOBALS["SL"]->REQ->has('revStatus')) {
            $status = $GLOBALS["SL"]->REQ->revStatus;
            if (in_array($GLOBALS["SL"]->REQ->revStatus, 
                ['Hold: Go Gold', 'Hold: Not Sure'])) {
                $this->sessData->dataSets["Complaints"][0]->ComStatus 
                    = $GLOBALS["SL"]->def->getID('Complaint Status', 'Hold');
            } elseif ($GLOBALS["SL"]->REQ->revStatus == 'Needs More Work') {
                $this->sessData->dataSets["Complaints"][0]->ComStatus 
                    = $GLOBALS["SL"]->def->getID('Complaint Status', 'Needs More Work');
            } elseif (in_array($GLOBALS["SL"]->REQ->revStatus, [
                'Pending Attorney: Needed', 'Pending Attorney: Hook-Up'])) {
                $this->sessData->dataSets["Complaints"][0]->ComStatus 
                    = $GLOBALS["SL"]->def->getID('Complaint Status', 'Pending Attorney');
            } elseif (in_array($GLOBALS["SL"]->REQ->revStatus, ['Attorney\'d'])) {
                $this->sessData->dataSets["Complaints"][0]->ComStatus 
                    = $GLOBALS["SL"]->def->getID('Complaint Status', 'Attorney\'d');
            } else {
                $this->sessData->dataSets["Complaints"][0]->ComStatus 
                    = $GLOBALS["SL"]->def->getID('Complaint Status', 
                        $GLOBALS["SL"]->REQ->revStatus);
            }
        }
        if ($GLOBALS["SL"]->REQ->has('revComplaintType')) {
            if ($GLOBALS["SL"]->REQ->revComplaintType 
                == $GLOBALS["SL"]->def->getID('Complaint Status', 'Incomplete')) {
                $this->sessData->dataSets["Complaints"][0]->ComStatus 
                    = $GLOBALS["SL"]->REQ->revComplaintType;
                $this->sessData->dataSets["Complaints"][0]->ComType 
                    = $GLOBALS["SL"]->def->getID('Complaint Type', 'Unreviewed');
                $status = 'Incomplete';
            } else { 
                $newTypeVal = $GLOBALS["SL"]->def->getVal('Complaint Type', 
                    $GLOBALS["SL"]->REQ->revComplaintType);
                if ($newTypeVal != 'Police Complaint') {
                    $status = $newTypeVal;
                }
                $this->sessData->dataSets["Complaints"][0]->ComType 
                    = $GLOBALS["SL"]->REQ->revComplaintType;
            }
        }
        $this->logComplaintReview('Update', $evalNotes, $status);
        $this->sessData->dataSets["Complaints"][0]->save();
        return true;
    }
    
    /**
     * Save and process a report upload done by staff.
     *
     * @return boolean
     */
    protected function saveComplaintAdminUpload()
    {
        $ret = '';
        if ($GLOBALS["SL"]->REQ->hasFile('reportToUpload')) { // file upload
            $upRow->UpUploadFile = $GLOBALS["SL"]->REQ->file('reportToUpload')
                ->getClientOriginalName();
            $extension = $GLOBALS["SL"]->REQ->file('reportToUpload')
                ->getClientOriginalExtension();
            $mimetype = $GLOBALS["SL"]->REQ->file('reportToUpload')->getMimeType();
            $size = $GLOBALS["SL"]->REQ->file('reportToUpload')->getSize();
            if (strtolower($extension) == "pdf"
                && strtolower($mimetype) == "application/pdf") {
                if (!$GLOBALS["SL"]->REQ->file('reportToUpload')->isValid()) {
                    $ret .= '<div class="txtDanger">Upload Error.' 
                        . /* $_FILES["up" . $nID . "File"]["error"] . */ '</div>';
                } else {
                    $upFold = $this->v["reportUploadFolder"];
                    $this->mkNewFolder($upFold);
                    $filename = $this->sessData->dataSets["Complaints"][0]->ComID 
                        . '-' . $GLOBALS["SL"]->REQ->reportUpType . '.pdf';
                    //if ($GLOBALS["SL"]->debugOn) { $ret .= "saving as filename: " . $upFold . $filename . "<br>"; }
                    if (file_exists($upFold . $filename)) {
                        Storage::delete($upFold . $filename);
                    }
                    $GLOBALS["SL"]->REQ->file('reportToUpload')->move($upFold, $filename);
                }
            } else {
                $ret .= '<div class="txtDanger">'
                    . 'Invalid file. Please check the format and try again.</div>';
            }
        }
        return true;
    }
    
    /**
     * Send an email send by staff, and log with this conduct report.
     *
     * @return boolean
     */
    protected function sendComplaintAdminEmail()
    {
        $emailSent = false;
        $emaInd = 0;
        while ($GLOBALS["SL"]->REQ->has('emailID') 
            && $GLOBALS["SL"]->REQ->has('emailTo' . $emaInd . '') 
            && trim($GLOBALS["SL"]->REQ->get('emailTo' . $emaInd . '')) != '') {
            $userToID = -3;
            $email = trim($GLOBALS["SL"]->REQ->get('emailTo' . $emaInd . ''));
            $chk = User::where('email', $email)
                ->first();
            if ($chk && isset($chk->id)) {
                $userToID = $chk->id;
            }
            $coreID = ((isset($this->coreID)) ? $this->coreID : -3);
            $emaTo = trim($GLOBALS["SL"]->REQ->get('emailTo' . $emaInd . ''));
            if ($emaTo == '--CUSTOM--') {
                $emaTo = trim($GLOBALS["SL"]->REQ->get('emailTo' . $emaInd . 'CustEmail'));
                //trim($GLOBALS["SL"]->REQ->get('emailTo' . $emaInd . 'CustName'))
            }
            $cc = $bcc = '';
            if (trim($GLOBALS["SL"]->REQ->get('emailCC' . $emaInd . '')) != '') {
                $cc = trim($GLOBALS["SL"]->REQ->get('emailCC' . $emaInd . ''));
            }
            if (trim($GLOBALS["SL"]->REQ->get('emailBCC' . $emaInd . '')) != '') {
                $bcc = trim($GLOBALS["SL"]->REQ->get('emailBCC' . $emaInd . ''));
            }
            $this->sendNewEmailFromCurrUser(
                trim($GLOBALS["SL"]->REQ->get('emailBodyCust' . $emaInd . '')), 
                trim($GLOBALS["SL"]->REQ->get('emailSubj' . $emaInd . '')), 
                $emaTo, 
                $GLOBALS["SL"]->REQ->get('emailID'), 
                $GLOBALS["SL"]->treeID, 
                $coreID, 
                $userToID,
                $cc,
                $bcc
            );
            if (intVal($GLOBALS["SL"]->REQ->get('emailID')) == 12) {
                $this->sessData->dataSets["Complaints"][0]->update([ 
                    "ComStatus" => $GLOBALS["SL"]->def->getID(
                        'Complaint Status', 
                        'Submitted to Oversight'
                    )
                ]);
                $deptID = $this->v["currEmail"][$emaInd]["deptID"];
                if (isset($GLOBALS["SL"]->x["depts"][$deptID]) 
                    && isset($GLOBALS["SL"]->x["depts"][$deptID]["whichOver"])) {
                    $whichOver = $GLOBALS["SL"]->x["depts"][$deptID]["whichOver"];
                    $whichRow = $GLOBALS["SL"]->x["depts"][$deptID][$whichOver];
                    if ($whichRow && isset($whichRow->OverID)) {
                        $this->logOverUpDate($coreID, $deptID, 'Submitted');
                    }
                }
                $newRev = new OPzComplaintReviews;
                $newRev->ComRevComplaint = $this->coreID;
                $newRev->ComRevUser      = $this->v["user"]->id;
                $newRev->ComRevDate      = date("Y-m-d H:i:s");
                $newRev->ComRevType      = 'Update';
                $newRev->ComRevStatus    = 'Submitted to Oversight';
                $newRev->save();
            }
            $emailSent = true;
            $emaInd++;
        }
        return $emailSent;
    }
    
    /**
     * Prepare full history of this conduct report.
     *
     * @return boolean
     */
    protected function loadComplaintAdminHistory()
    {
        $this->v["firstRevDone"] = false;
        $this->v["firstReview"] = true;
        $this->v["lastReview"] = true;
        $this->v["history"]    = [];
        $allUserNames = [];
        $reviews = OPzComplaintReviews::where('ComRevComplaint', '=', $this->coreID)
            ->where('ComRevType', 'NOT LIKE', 'Draft')
            ->orderBy('ComRevDate', 'desc')
            ->get();
        if ($reviews->isNotEmpty()) {
            foreach ($reviews as $i => $r) {
                if ($i == 0) {
                    $this->v["lastReview"] = $r;
                }
                $this->v["firstReview"] = false;
                if (!isset($allUserNames[$r->ComRevUser])) {
                    $allUserNames[$r->ComRevUser] = $this->printUserLnk($r->ComRevUser);
                }
                $desc = '<span class="slBlueDark">' . ((isset($r->ComRevNextAction) 
                    && trim($r->ComRevNextAction) == 'Complaint Received'
                    && $r->ComRevStatus == 'Submitted to Oversight') 
                        ? $r->ComRevNextAction : $r->ComRevStatus) . '</span>';
                $this->v["history"][] = [
                    "type" => 'Status', 
                    "date" => strtotime($r->ComRevDate), 
                    "desc" => $desc, 
                    "who"  => $allUserNames[$r->ComRevUser],
                    "note" => ((isset($r->ComRevNote)) ? trim($r->ComRevNote) : '')
                ];
            }
        }
        $this->v["emailList"] = SLEmails::orderBy('EmailName', 'asc')
            ->orderBy('EmailType', 'asc')
            ->get();
        $emails = SLEmailed::whereIn('EmailedTree', [1, 42])
            ->where('EmailedRecID', $this->coreID) //corePublicID
            ->orderBy('created_at', 'asc')
            ->get();
        if ($emails->isNotEmpty()) {
            foreach ($emails as $i => $e) {
                if (!isset($allUserNames[$e->EmailedFromUser])) {
                    $allUserNames[$e->EmailedFromUser] 
                        = $this->printUserLnk($e->EmailedFromUser);
                }
                $desc = '<a href="javascript:;" id="hidivBtnEma' . $e->EmailedID 
                    . '" class="hidivBtn">"' . $e->EmailedSubject . '"</a><br />sent to ' 
                    . $e->EmailedTo . '<div id="hidivEma' . $e->EmailedID 
                    . '" class="disNon p10">' . $e->EmailedBody 
                    . '</div><div style="margin-bottom: -36px;"></div>';
                $this->v["history"][] = [
                    "type" => 'Email', 
                    "date" => strtotime($e->created_at), 
                    "desc" => $desc, 
                    "who"  => $allUserNames[$e->EmailedFromUser]
                ];
            }
        }
        $this->v["history"] = $GLOBALS["SL"]
            ->sortArrByKey($this->v["history"], 'date', 'desc');
        return true;
    }

    /**
     * Process form submission to correct a complaint's associated departments.
     *
     * @return booleon
     */
    protected function processComplaintFixDepts()
    {
        if ($this->v["user"]->hasRole('administrator|databaser|staff')) {
            $evalNotes = '';
            $keepDepts = $delDepts = [];
            if ($GLOBALS["SL"]->REQ->has('keepDepts') 
                && sizeof($GLOBALS["SL"]->REQ->keepDepts) > 0) {
                $keepDepts = $GLOBALS["SL"]->REQ->keepDepts;
            }
            foreach ($GLOBALS["SL"]->x["depts"] as $deptID => $d) {
                if (!in_array($deptID, $keepDepts)) {
                    $delDepts[] = $deptID;
                    $evalNotes .= $this->fixDeptsRemove($d["deptRow"]);
                }
            }
            if ($GLOBALS["SL"]->REQ->has('keepDeptNew')) {
                $newID = intVal($GLOBALS["SL"]->REQ->keepDeptNew);
                if ($newID > 0) {
                    $deptRow = OPDepartments::where('DeptID', $newID)
                        ->select('DeptID', 'DeptName')
                        ->first();
                    if ($deptRow && isset($deptRow->DeptName)) {
                        $evalNotes .= $this->fixDeptsAdd($deptRow);
                    }
                }
            }
            $status = $this->sessData->dataSets["Complaints"][0]->ComStatus;
            $status = $GLOBALS["SL"]->def->getVal('Complaint Status', $status);
            $this->logComplaintReview('Staff', $evalNotes, $status);
            $this->fixDeptsClean();
            $redir = '/complaint/read-' . $this->corePublicID 
                . '?refresh=1' . $GLOBALS['SL']->getReqParams();
            $this->redir($redir, true);
            exit;
        }
        return false;
    }

    /**
     * Remove this department's association with this conduct report.
     *
     * @param  App\Models\OPDepartments $deptRow
     * @return string
     */
    protected function fixDeptsAdd($deptRow)
    {
        if (!isset($deptRow->DeptID) || !isset($deptRow->DeptName)) {
            return '';
        }
        $newLnk = new OPLinksComplaintDept;
        $newLnk->LnkComDeptComplaintID = $this->coreID;
        $newLnk->LnkComDeptDeptID = $deptRow->DeptID;
        $newLnk->save();
        return ', <i>' . $deptRow->DeptName . '</i> Added';
    }

    /**
     * Remove this department's association with this conduct report.
     *
     * @param  App\Models\OPDepartments $deptRow
     * @return string
     */
    protected function fixDeptsRemove($deptRow)
    {
        if (!isset($deptRow->DeptID) || !isset($deptRow->DeptName)) {
            return '';
        }
        OPLinksComplaintDept::where('LnkComDeptComplaintID', $this->coreID)
            ->where('LnkComDeptDeptID', $deptRow->DeptID)
            ->delete();
        OPLinksComplaintOversight::where('LnkComOverComplaintID', $this->coreID)
            ->where('LnkComOverDeptID', $deptRow->DeptID)
            ->delete();
        return ', <i>' . $deptRow->DeptName . '</i> Removed';
    }

    /**
     * Delete empty, useless or error-prone department and oversight records.
     *
     * @return string
     */
    protected function fixDeptsClean()
    {
        $deptIDs = [];
        $depts = OPLinksComplaintDept::where(
                'LnkComDeptComplaintID', $this->coreID)
            ->get();
        if ($depts->count() > 0) {
            foreach ($depts as $d) {
                $deptIDs[] = $d->LnkComDeptDeptID;
                $overs = OPOversight::where('OverDeptID', $d->LnkComDeptDeptID)
                    ->get();
                if ($overs->count() > 0) {
                    foreach ($overs as $over) {
                        $chk = OPLinksComplaintOversight::where(
                                'LnkComOverComplaintID', $this->coreID)
                            ->where('LnkComOverDeptID', $d->LnkComDeptDeptID)
                            ->where('LnkComOverOverID', $over->OverID)
                            ->first();
                        if (!$chk || !isset($chk->LnkComOverID)) {
                            $newLnk = new OPLinksComplaintOversight;
                            $newLnk->LnkComOverComplaintID = $this->coreID;
                            $newLnk->LnkComOverDeptID = $d->LnkComDeptDeptID;
                            $newLnk->LnkComOverOverID = $over->OverID;
                            $newLnk->save();
                        }
                    }
                }
            }
        }
        OPLinksComplaintOversight::where('LnkComOverComplaintID', $this->coreID)
            ->whereNotIn('LnkComOverDeptID', $deptIDs)
            ->delete();
        OPLinksComplaintOversight::whereNull('LnkComOverDeptID')
            ->orWhere('LnkComOverDeptID', '<=', 0)
            ->delete();
        OPLinksComplaintDept::whereNull('LnkComDeptDeptID')
            ->orWhere('LnkComDeptDeptID', '<=', 0)
            ->delete();
        return '';
    }

}
