<!-- resources/views/vendor/openpolice/nodes/1712-report-inc-staff-tools-report-department.blade.php -->
<form name="fixDeptsForm" method="get" action="?fixDepts=1">
<input type="hidden" name="fixDepts" value="1">
<input type="hidden" name="refresh" value="1">
<input type="hidden" name="cID" value="{{ $complaintRec->ComID }}">
{!! $GLOBALS['SL']->getReqHiddenInputs() !!}

<div class="nodeAnchor"><a name="reportUpload"></a></div>
<h4>Associated Department(s)</h4>
<p>
    Add or remove departments responsible for this complaint.
</p>
<div class="row mB10">
    <div class="col-md-6">
@forelse ($GLOBALS["SL"]->x["depts"] as $deptID => $d)
        <label class="finger">
            <div class="disIn mR5">
                <input type="checkbox" class="slTab ntrStp"
                    name="keepDepts[]" id="keepDept{{ $deptID }}" 
                    value="{{ $deptID }}" autocomplete="off" CHECKED >
            </div> {!! $d["deptRow"]->DeptName !!} 
            @if (isset($d["deptRow"]->DeptAddressState)
                && trim($d["deptRow"]->DeptAddressState) != '')
                , {!! $d["deptRow"]->DeptAddressState !!}
            @endif
        </label>
@empty
@endforelse
        <div id="fixDeptsAddNew" class="disNon">
            <label class="finger">
                <div class="disIn mR5">
                    <input type="checkbox" class="slTab ntrStp"
                        name="keepDeptNew" id="keepDeptNewID" 
                        value="0" autocomplete="off" CHECKED >
                </div> 
                <div id="fixDeptsAddNewName" class="disIn"></div>
            </label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-8">
                <div class="deptNameInWrap">
                    <a href="javascript:;" id="ajaxSubmitFixDepts"
                        ><i class="fa fa-search"></i></a>
                    <input type="text" autocomplete="off"
                        name="fixDeptsSearchIn" id="fixDeptsSearchInID" 
                        class="form-control form-control-lg w100 ui-autocomplete-input">
                </div>
            </div>
            <div class="col-4">
                <select name="deptStateSearch" id="deptStateSearchID" 
                    class="form-control form-control-lg">
                    <option value="">Select State</option>
                    {!! $GLOBALS["SL"]->states
                        ->stateDrop($incidentState, true) !!}
                </select>
            </div>
        </div>
        <div id="ajaxSearchFixDepts">

        </div>
    </div>
</div>

<div class="mT20 mB20">
    <input type="submit" id="stfBtn9"
        class="btn btn-lg btn-primary" style="color: #FFF;"
        onMouseOver="this.style.color='#2b3493';" 
        onMouseOut="this.style.color='#FFF';"
        value="Apply Department Changes">
</div>

</form>

<script type="text/javascript">

function loadNewFixDept(deptID, deptName) {
    if (document.getElementById('keepDeptNewID') && document.getElementById('fixDeptsAddNewName')) {
        document.getElementById('keepDeptNewID').value=deptID;
        document.getElementById('keepDeptNewID').checked=true;
        document.getElementById('fixDeptsAddNewName').innerHTML=deptName;
        document.getElementById('fixDeptsAddNew').style.display='block';
        document.getElementById('ajaxSearchFixDepts').innerHTML="";
        return true;
    }
    return false;
}

var holdSearch = false;
$(document).ready(function(){ 

    function submitAjaxSearchFixDepts() {
        document.getElementById('ajaxSearchFixDepts').innerHTML=getSpinner();
        document.getElementById("ajaxSearchFixDepts").style.display="block";
        setTimeout(function() {
            var loadUrl = "/ajax/?policeDept="+encodeURIComponent(document.getElementById("fixDeptsSearchInID").value)+"&policeState="+encodeURIComponent(document.getElementById("deptStateSearchID").value)+"&loadNewFixDept=1";
            $("#ajaxSearchFixDepts").load(loadUrl);
            return true;
        }, 800);
    }
    $(document).on("click", "#ajaxSubmitFixDepts", function() {
        return submitAjaxSearchFixDepts();
    });
    $(document).on("keyup", "#fixDeptsSearchInID", function() {
        if (!holdSearch) {
            holdSearch = true;
            submitAjaxSearchFixDepts();
            setTimeout("holdSearch=false", 2000);
        }
        return true;
    });
    
});
</script>
<style>
#ajaxSubmitFixDepts {
    position: absolute;
    top: 12px;
    left: 30px;
}
#fixDeptsSearchInID {
    padding-left: 40px;
}
</style>