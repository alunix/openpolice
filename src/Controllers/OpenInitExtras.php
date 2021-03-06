<?php
/**
  * OpenInitExtras is a mid-level class which handles variable
  * and lookup initializations used throughout the engine.
  *
  * OpenPolice.org
  * @package  flexyourrights/openpolice
  * @author  Morgan Lesko <rockhoppers@runbox.com>
  * @since v0.0.15
  */
namespace OpenPolice\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\OPComplaints;
use App\Models\OPDepartments;
use App\Models\OPLinksComplaintDept;
use App\Models\OPLinksComplimentDept;
use App\Models\OPPersonContact;
use App\Models\OPzVolunUserInfo;
use OpenPolice\Controllers\OpenPartners;

class OpenInitExtras extends OpenPartners
{
    /**
     * Initializing a bunch of things which are not [yet] automatically 
     * determined by the SurvLoop, nor the OpenPolice.org instance.
     *
     * @param  Illuminate\Http\Request  $request
     * @return boolean
     */
    protected function initExtra(Request $request)
    {
        // Establishing Main Navigation Organization, 
        // with Node ID# and Section Titles
        $this->loadYourContact();
        $this->v["reportUploadFolder"] = '../storage/app/up/reports/';
        $this->majorSections = [];
        if (!isset($GLOBALS["SL"]->treeID)) {
            return true;
        }
        if ($GLOBALS["SL"]->treeID == 1) {
            $this->navMenuComplaint();
        } elseif ($GLOBALS["SL"]->treeID == 5) {
            $this->navMenuCompliment();
        } elseif ($GLOBALS["SL"]->treeID == 36) {
            if ($request->has('d') && trim($request->get('d')) != '') {
                $chk = OPDepartments::where('dept_slug', 'LIKE', trim($request->get('d')))
                    ->first();
                if ($chk && isset($chk->dept_id)) {
                    $this->loadAllSessData($GLOBALS["SL"]->coreTbl, $chk->dept_id);
                }
            }
        }
        return true;
    }
    
    /**
     * Mapping the Survey Tree Nodes which wrap navigational sections.
     * for the complaint process.
     *
     * @param  Illuminate\Http\Request  $request
     * @return boolean
     */
    protected function navMenuComplaint()
    {
        $this->majorSections = [];
        $this->majorSections[] = [1,   'Your Story',      'active'];
        $this->majorSections[] = [4,   'Who\'s Involved', 'active'];
        $this->majorSections[] = [5,   'Allegations',     'active'];
        $this->majorSections[] = [6,   'Go Gold',         'disabled'];
        $this->majorSections[] = [419, 'Finish',          'active'];
        
        $this->minorSections = [ [], [], [], [], [] ];
        $this->minorSections[0][] = [157,  'Start Your Story'];
        $this->minorSections[0][] = [437,  'Legal Needs'];
        $this->minorSections[0][] = [158,  'About You'];
        $this->minorSections[0][] = [707,  'The Scene'];
        
        $this->minorSections[1][] = [140,  'Victims'];
        $this->minorSections[1][] = [141,  'Witnesses'];
        $this->minorSections[1][] = [144,  'Police Departments'];
        $this->minorSections[1][] = [142,  'Officers'];
        
        $this->minorSections[2][] = [198,  'Stops & Searches'];
        $this->minorSections[2][] = [200,  'Uses of Force'];
        $this->minorSections[2][] = [201,  'Arrests & Citations'];
        $this->minorSections[2][] = [154,  'Other'];
        
        //$this->minorSections[3][] = [196, 'GO GOLD!']; // 483
        $this->minorSections[3][] = [149,  'Stops & Searches'];
        $this->minorSections[3][] = [153,  'Arrests & Citations'];
        $this->minorSections[3][] = [151,  'Uses of Force'];
        $this->minorSections[3][] = [410,  'Injuries & Medical'];
        
        $this->minorSections[4][] = [420,  'Review Narrative'];
        $this->minorSections[4][] = [431,  'Sharing Options'];
        $this->minorSections[4][] = [156,  'Confirm Complaint'];
        $this->minorSections[4][] = [2794, 'Complaint Submitted'];
        return true;
    }
    
    /**
     * Mapping the Survey Tree Nodes which wrap navigational sections
     * for the compliment process.
     *
     * @param  Illuminate\Http\Request  $request
     * @return boolean
     */
    protected function navMenuCompliment()
    {
        $this->majorSections[] = [752, 'Your Story',      'active'];
        $this->majorSections[] = [761, 'Who\'s Involved', 'active'];
        $this->majorSections[] = [763, 'Compliments',     'active'];
        $this->majorSections[] = [764, 'Finish',          'active'];
        
        $this->minorSections = [ [], [], [], [], [] ];
        $this->minorSections[0][] = [753, 'Start Your Story'];
        $this->minorSections[0][] = [867, 'Legal & Options'];
        $this->minorSections[0][] = [877, 'When & Where'];
        $this->minorSections[0][] = [887, 'The Scene'];
        
        $this->minorSections[1][] = [762, 'About You'];
        $this->minorSections[1][] = [765, 'Police Departments'];
        $this->minorSections[1][] = [766, 'Officers'];
        
        $this->minorSections[2][] = [945, 'Compliment Officers'];
        
        $this->minorSections[3][] = [957, 'Review Narrative'];
        $this->minorSections[3][] = [961, 'Feedback'];
        $this->minorSections[3][] = [964, 'Submit Complaint'];
        return true;
    }

    /**
     * Load anything else needed after default loading of a Tree Session.
     *
     * @return boolean
     */
    protected function loadExtra()
    {
        if ($this->treeID == 1 && $this->isGold()) {
            $this->majorSections[3][2] = 'active';
        }
        if ($this->treeID == 1 || $GLOBALS["SL"]->getReportTreeID() == 1) {
            if ($this->v["user"] 
                && intVal($this->v["user"]->id) > 0 
                && isset($this->sessData->dataSets["civilians"]) 
                && isset($this->sessData->dataSets["civilians"][0])
                && (!isset($this->sessData->dataSets["civilians"][0]->civ_user_id) 
                    || intVal($this->sessData->dataSets["civilians"][0]->civ_user_id) <= 0)) {
                $this->sessData->dataSets["civilians"][0]->update([
                    'civ_user_id' => $this->v["user"]->id
                ]);
            }
            $this->chkPersonRecs();
            if (isset($this->sessData->dataSets["departments"]) 
                && sizeof($this->sessData->dataSets["departments"]) > 0) {
                foreach ($this->sessData->dataSets["departments"] as $i => $d) {
                    $this->chkDeptLinks($d->dept_id);
                }
            }
            if (isset($this->sessData->dataSets["complaints"]) 
                && !isset($this->sessData->dataSets["complaints"][0]->com_record_submitted) 
                && $this->sessData->dataSets["complaints"][0]->com_status 
                    != $GLOBALS["SL"]->def->getID('Complaint Status', 'Incomplete')) {
                $this->sessData->dataSets["complaints"][0]->com_record_submitted 
                    = $this->sessData->dataSets["complaints"][0]->created_at;
                $chk = DB::table('sl_node_saves_page')
                    ->join('sl_sess', 'sl_sess.sess_id', 
                        '=', 'sl_node_saves_page.page_save_session')
                    ->where('sl_sess.sess_tree', 1)
                    ->where('sl_sess.sess_core_id', $this->coreID)
                    ->select('sl_node_saves_page.created_at')
                    ->orderBy('sl_node_saves_page.created_at', 'desc')
                    ->first();
                if ($chk && isset($chk->created_at)) {
                    $this->sessData->dataSets["complaints"][0]
                        ->com_record_submitted = $chk->created_at;
                }
                $this->sessData->dataSets["complaints"][0]->save();
            }
            foreach ($this->eventTypeLabel as $type => $label) {
                if (!isset($this->sessData->dataSets[strtolower($type)]) 
                    || sizeof($this->sessData->dataSets[strtolower($type)]) == 0) {
                    $this->addNewEveSeq($type);
                }
            }
        }
        if ($this->treeID == 5 || $GLOBALS["SL"]->getReportTreeID() == 5) {
            if (isset($this->sessData->dataSets["complaints"])
                && (!isset($this->sessData->dataSets["complaints"][0]->com_is_compliment)
                    || intVal($this->sessData->dataSets["complaints"][0]
                        ->com_is_compliment) != 1)) {
                $this->sessData->dataSets["complaints"][0]->com_is_compliment = 1;
                $this->sessData->dataSets["complaints"][0]->save();
            }
        }
        if (session()->has('opcDeptID') 
            && intVal(session()->get('opcDeptID')) > 0) {
            if ($this->treeID == 1) {
                if (isset($this->sessData->dataSets["complaints"])
                    && intVal($this->sessData->dataSets["complaints"][0]->com_submission_progress) > 0) {
                    if (!isset($this->sessData->dataSets["links_complaint_dept"])) {
                        $this->sessData->dataSets["links_complaint_dept"] = [];
                    }
                    if (empty($this->sessData->dataSets["links_complaint_dept"])) {
                        $newDept = new OPLinksComplaintDept;
                        $newDept->lnk_com_dept_complaint_id = $this->coreID;
                        $newDept->lnk_com_dept_dept_id = intVal(session()->get('opcDeptID'));
                        $newDept->save();
                        session()->forget('opcDeptID');
                    }
                }
            } elseif ($this->treeID == 5) {
                if (isset($this->sessData->dataSets["compliments"])
                    && intVal($this->sessData->dataSets["compliments"][0]->com_submission_progress) > 0) {
                    if (!isset($this->sessData->dataSets["links_compliment_dept"])) {
                        $this->sessData->dataSets["links_compliment_dept"] = [];
                    }
                    if (empty($this->sessData->dataSets["links_compliment_dept"])) {
                        $newDept = new OPLinksComplimentDept;
                        $newDept->lnk_compli_dept_compliment_id = $this->coreID;
                        $newDept->lnk_compli_dept_dept_id = intVal(session()->get('opcDeptID'));
                        $newDept->save();
                        session()->forget('opcDeptID');
                    }
                }
            }
        }
        if ($this->treeID == 1 && session()->has('opcPartID') 
            && intVal(session()->get('opcPartID')) > 0
            && isset($this->sessData->dataSets["complaints"]) 
            && intVal($this->sessData->dataSets["complaints"][0]->com_submission_progress) > 0) {
            $this->sessData->dataSets["complaints"][0]->com_att_id = intVal(session()->get('opcPartID'));
            $this->sessData->dataSets["complaints"][0]->save();
        }
        $this->v["isPublic"] = $this->isPublic();
        
        // used to be admin initializations:
        $this->v["allowEdits"] = ($this->v["uID"] > 0
            && $this->v["user"] 
            && $this->v["user"]->hasRole('administrator|staff'));
        $this->v["management"] = ($this->v["uID"] > 0 
            && $this->v["user"] 
            && $this->v["user"]->hasRole('administrator|staff'));
        $this->v["volunOpts"] = 1;
        if ($GLOBALS["SL"]->REQ->session()->has('volunOpts')) {
            $this->v["volunOpts"] = $GLOBALS["SL"]->REQ->session()->get('volunOpts');
        }
        if ((!session()->has('opcChks') || !session()->get('opcChks') || $GLOBALS["SL"]->REQ->has('refresh'))
            && $this->treeID == 1) {
            $chk = OPComplaints::where('com_public_id', null)
                ->where('com_status', 'NOT LIKE', $GLOBALS["SL"]->def->getID('Complaint Status', 'Incomplete'))
                ->get();
            if ($chk->isNotEmpty()) {
                foreach ($chk as $i => $complaint) {
                    $complaint->update([ 'com_public_id' => $GLOBALS["SL"]->genNewCorePubID('complaints') ]);
                }
            }
            session()->put('opcChks', true);
        }
        
        // Department Research Survey
        if ($this->treeID == 36) {
            if (isset($this->sessData->dataSets['oversight']) 
                && sizeof($this->sessData->dataSets['oversight']) == 1) {
                $new = $this->sessData->newDataRecord(
                    'oversight', 
                    'over_dept_id', 
                    $this->sessData->dataSets['departments'][0]->dept_id, 
                    true
                );
                $new->over_type = 302;
                $new->save();
                $this->sessData->refreshDataSets();
            }
        }
        return true;
    }
    
    /**
     * Override current page as represented in the admin menu.
     *
     * @return string
     */
    public function initAdmMenuExtras()
    {
        if (in_array($this->treeID, [99, 46])) {
            // admin area view of complaint reports
            return '/dash/all-complete-complaints';
        }
        return '';
    }
    
    /**
     * Load additional data related to users who are logged in.
     *
     * @param   int  $uID
     * @return  array
     */
    public function initPowerUser($uID = -3)
    {
        if ($uID <= 0) {
            $uID = $this->v["uID"];
        }
        if ($uID > 0) {
            $GLOBALS["SL"]->x["yourUserInfo"] 
                = OPzVolunUserInfo::where('user_info_user_id', $uID)->first();
            if (!$GLOBALS["SL"]->x["yourUserInfo"]) {
                $GLOBALS["SL"]->x["yourUserInfo"] = new OPzVolunUserInfo;
                $GLOBALS["SL"]->x["yourUserInfo"]->user_info_user_id = $uID;
                $GLOBALS["SL"]->x["yourUserInfo"]->save();
            }
            $this->v["yourUserContact"] = [];
            if (!isset($GLOBALS["SL"]->x["yourUserInfo"]->user_info_person_contact_id) 
                || intVal($GLOBALS["SL"]->x["yourUserInfo"]->user_info_person_contact_id) <= 0) {
                $thisUser = User::select('email')->find($uID);
                $this->v["yourUserContact"] = new OPPersonContact;
                $this->v["yourUserContact"]->prsn_email = $thisUser->email;
                $this->v["yourUserContact"]->save();
                $GLOBALS["SL"]->x["yourUserInfo"]->user_info_person_contact_id 
                    = $this->v["yourUserContact"]->prsn_id;
                $GLOBALS["SL"]->x["yourUserInfo"]->save();
            } else {
                $this->v["yourUserContact"] = OPPersonContact::find(
                    $GLOBALS["SL"]->x["yourUserInfo"]->user_info_person_contact_id
                );
            }
            return [ $GLOBALS["SL"]->x["yourUserInfo"], $this->v["yourUserContact"] ];
        }
        return [
            [], 
            [] 
        ];
    }
    
    /**
     * Override the default behavior for wrapping a tree which has
     * been called through an ajax call.
     *
     * @return string
     */
    protected function ajaxContentWrapCustom($str, $nID = -3)
    {
        if ($this->treeID == 1) {
            if ($GLOBALS["SL"]->REQ->has('treeSlug') 
                && trim($GLOBALS["SL"]->REQ->get('treeSlug')) == 'complaint'
                && $GLOBALS["SL"]->REQ->has('nodeSlug') 
                && trim($GLOBALS["SL"]->REQ->get('nodeSlug')) == 'login') {
                return $this->redir('/u/complaint/when-and-where', true);
            }
        }
        return $str;
    }
    
    /**
     * Override the default data permissions for this page load.
     *
     * @return boolean
     */
    protected function tweakPageViewPerms()
    {
        if (!isset($this->sessData->dataSets["complaints"])) {
            return false;
        }
        $com = $this->sessData->dataSets["complaints"][0];
        $isPublished = $this->isPublished('complaints', $this->coreID, $com);
        $defPub = $GLOBALS["SL"]->def->getID('Privacy Types', 'Submit Publicly');
        if (isset($this->sessData->dataSets["complaints"]) 
            && $isPublished) {
            if (isset($com->com_privacy)) {
                if ($this->v["uID"] > 0 
                    && $this->v["user"] 
                    && $this->v["user"]->hasRole('administrator|staff')) {
                    
                } elseif ($com->com_privacy == $defPub 
                    && in_array($com->com_status, [200, 201, 203, 204])) {
                    if (in_array($GLOBALS["SL"]->dataPerms, ['', 'public'])) {
                        $GLOBALS["SL"]->dataPerms = 'private';
                    }
                }
            }
        }
        return true;
    }
    
    /**
     * Run anything else extra which needs to be run for this page load.
     *
     * @return boolean
     */
    protected function runPageExtra($nID = -3)
    {
//if ($GLOBALS["SL"]->REQ->has('ajax')) { echo 'runPageExtra(' . $nID . ', perms: ' . $GLOBALS["SL"]->dataPerms . '<br />'; exit; }
        if ($nID == 1362) { 
            // Loading Complaint Report: Check for oversight permissions
            if (!isset($GLOBALS["SL"]->pageView)) {
                $this->maxUserView(); // shouldn't be needed?
            }
            if ($this->chkOverUserHasCore()) {
                $GLOBALS["SL"]->dataPerms = 'sensitive';
            }
        }
        return true;
    }

    /**
     * Run anything else extra needed to clear data in between sessions.
     *
     * @return boolean
     */
    protected function loadSessionClear($coreTbl = '', $coreID = -3)
    {
        $this->allegations = [];
        return true;
    }    

}