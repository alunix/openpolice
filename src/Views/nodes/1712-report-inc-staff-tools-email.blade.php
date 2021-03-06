<!-- resources/views/vendor/openpolice/nodes/1712-report-inc-staff-tools-email.blade.php -->

Select which email template you want to send:<br />
<select name="email" id="emailID" class="form-control form-control-lg" 
    onChange="window.location='/complaint/read-{{ $complaintRec->com_public_id 
        }}?email='+this.value+'&refresh=1#emailer';" autocomplete="off">
    <option value="" > No email right now</option>
    <?php $set = '00'; ?>
    @forelse ($emailList as $i => $email)
        @if ($email->email_type != 'Blurb')
            <?php
            $currSet = substr($email->email_name, 0, 1) . '0';
            if ($set != $currSet) {
                $set = $currSet;
                echo '<option disabled ></option>';
            }
            ?>
            <option value="{{ $email->email_id }}" 
                @if ($emailID == $email->email_id) SELECTED @endif
                >{{ $email->email_name }} - {{ $email->email_type }}</option>
        @endif
    @empty 
    @endforelse
</select>

@if (intVal($emailID) > 0 && sizeof($currEmail) > 0)
    
    <div class="nodeAnchor"><a name="emailer"></a></div>
    <div class="pB20"> </div>

    <form name="complaintEmailForm" action="/dash/complaint/read-{{ 
        $complaintRec->com_id }}?view=emails&refresh=1{{ 
        (($GLOBALS['SL']->REQ->has('frame')) ? '&frame=1' : '') }}" 
        method="post" onSubmit="return chkEmaForm();" >
    <input type="hidden" id="csrfTok" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="cID" value="{{ $complaintRec->com_public_id }}">
    <input type="hidden" name="emailID" value="{{ $emailID }}">
    
    <div id="analystEmailComposer" 
        class=" @if (intVal($emailID) > 0) disBlo @else disNon @endif ">
    @if ($emailID == 12)
        @forelse ($GLOBALS["SL"]->x["depts"] as $deptID => $stuff)
            @if (!isset($stuff["overUser"]) || !isset($stuff["overUser"]->email))
                <div class="alert alert-danger mT10 fPerc133" role="alert">
                    <strong>{{ $stuff["deptRow"]->dept_name }}</strong> 
                    is <nobr>NOT OpenPolice-Compliant!</nobr><br />
                    Do not send them an email!
                </div>
            @endif
        @empty
        @endforelse
    @endif

        <div class="nFld m0">
        @forelse ($currEmail as $j => $email)
            @if ($j > 0) <div class="pT20"><hr></div> 
            @else <div class="p5"></div> 
            @endif

            Email Subject
            <input type="text" class="form-control form-control-lg w100" 
                name="emailSubj{{ $j }}" id="emailSubj{{ $j }}ID" 
                value="{{ $email['subject'] }}" autocomplete=off >
            <div class="p10"></div>

            Send To
            <select class="form-control form-control-lg w100 changeEmailTo" 
                name="emailTo{{ $j }}" id="emailTo{{ $j }}ID"
                autocomplete=off >
            @forelse ($emailsTo[$email["rec"]->email_type] as $i => $ema)
                <option value="{{ $ema[0] }}" @if ($ema[2]) SELECTED @endif 
                    >{{ $ema[1] }} ({{ $ema[0] }}) </option>
            @empty
            @endforelse
                <option value="--CUSTOM--">Type in custom email address:</option>
            </select>

            <div class="p10"></div>
            <div id="emailTo{{ $j }}CustID" class="mT5 disNon">
                <div class="row">
                    <div class="col-6">
                        Recipient Name
                        <input type="text" name="emailTo{{ $j }}CustName" 
                            id="emailTo{{ $j }}CustNameID" autocomplete=off 
                            class="form-control form-control-lg" >
                    </div>
                    <div class="col-6">
                        Recipient Email
                        <input type="text" name="emailTo{{ $j }}CustEmail" 
                            id="emailTo{{ $j }}CustEmailID" autocomplete=off
                            class="form-control form-control-lg" >
                    </div>
                </div>
            </div>
            <div class="p10"></div>

            CC (in addition to yourself)
            <input type="text" class="form-control form-control-lg w100" 
                name="emailCC{{ $j }}" id="emailCC{{ $j }}ID" 
                value="{{ $email['cc'] }}" autocomplete=off >
            <div class="p10"></div>

            BCC
            <input type="text" class="form-control form-control-lg w100" 
                name="emailBCC{{ $j }}" id="emailBCC{{ $j }}ID" 
                value="{{ $email['bcc'] }}" autocomplete=off >
            <div class="p10"></div>

            Attachment
            <select class="form-control form-control-lg w100" 
                name="attachType{{ $j }}" id="attachType{{ $j }}ID" 
                autocomplete=off >
                <option value=""
                    @if (!isset($email["attachType"]) 
                        || trim($email["attachType"]) == '') 
                        SELECTED
                    @endif >Select type ...</option>
                @foreach ($reportUploadTypes as $i => $type)
                    <option value="{{ $type[0] }}"
                        @if ($email["attachType"] == $type[0]) SELECTED @endif 
                        >{{ $type[1] }} PDF</option>
                @endforeach
            </select>
            <div class="p10"></div>

            Email Body
            <textarea name="emailBodyCust{{ $j }}" id="emailBodyCust{{ $j }}ID" 
                class="w100" style="height: 500px;" autocomplete=off 
                >{!! $email["body"] !!}</textarea>

            <script type="text/javascript">
            $(document).ready(function(){
                $("#emailBodyCust{{ $j }}ID").summernote({ height: 350 });
            });
            </script>
        @empty
        @endforelse
        </div>
        
        @if ($emailID == 12)
            @forelse ($GLOBALS["SL"]->x["depts"] as $deptID => $stuff)
                @if (!isset($stuff["overUser"]) || !isset($stuff["overUser"]->email))
                    <div class="alert alert-danger mT10 fPerc133" role="alert">
                        <strong>{{ $stuff["deptRow"]->dept_name }}</strong> 
                        is NOT OpenPolice-Compliant!<br />Do not send them an email!</div>
                @endif
            @empty
            @endforelse
        @endif
        
        <div class="mT20 mB20">
            <input type="submit" class="btn btn-lg btn-primary" 
                id="stfBtn9" onMouseOver="this.style.color='#2b3493';" 
                onMouseOut="this.style.color='#FFF';"
                style="color: #FFF;" value="Send Email">
        </div>
        
    </div>
        
    </form>

@endif

<script type="text/javascript">
function chkEmaForm() {
    for (var j=0; j < {{ sizeof($currEmail) }}; j++) {
        if (!document.getElementById('emailTo'+j+'ID') 
            || document.getElementById('emailTo'+j+'ID').value.trim() == '') {
            alert("Please provide an email address to send this message.");
            return false;
        }
    }
    return true;
}

$(document).ready(function(){
    $("#newStatusUpdate").click(function(){ 
        $("#newStatusUpdateBlock").slideToggle("fast"); 
    });
    $("#newEmails").click(function(){ 
        $("#analystEmailer").slideToggle("fast"); 
    });
    $(document).on("change", ".changeEmailTo", function() { 
        var emaInd = $(this).attr("name").replace("emailTo", "");
        if (document.getElementById("emailTo"+emaInd+"ID") && document.getElementById("emailTo"+emaInd+"ID").value == "--CUSTOM--") {
            $("#emailTo"+emaInd+"CustID").slideDown("fast");
        } else {
            $("#emailTo"+emaInd+"CustID").slideUp("fast"); 
        }
    });
});
</script>