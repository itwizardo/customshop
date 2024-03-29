<!DOCTYPE html>
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"
    class="tc-box-on  tc-unshow-sidebar tc-small  tc-show-breakpoint-hint tc-show-grid Login_window1   scrollbars">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="format-detection" content="telephone=no">
    <!-- Specific to ios : disable the call link if the html string has numbers  -->

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Temenos">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, viewport-fit=cover">
    <!-- <meta NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW"> -->

    <title>Login</title>

    <link rel="icon" href="https://www.365online.com/Digital/images/favicon.ico">
    <!-- CSS Normalize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css
    " media="screen">
    <!-- CSS Fonts -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" media="screen">
    <link rel="stylesheet" href="https://www.365online.com/Digital/html/css/BOIFonts.css?v=8.38" media="screen">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    {{-- <script type="text/javascript">
        // BOI main entry point
        var boiCbs = {};
        boiCbs.options = (function() {
            var userAgent = navigator.userAgent || navigator.vendor || window.opera;
            return {
                userAgent: userAgent,
                isAndroid: /android/i.test(userAgent),
                isIos: /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream,
                isHybrid: '' === 'Y'
            }
        })();

        boiCbs.variables = {
            boiDOBMatched: '',
            contextPath: '/Digital',
            isSetupDeviceClicked: false,
            isDeviceRegistrationCalled: false,
            isDevicePushTriggered: false,
            isDeviceLocationTriggered: false,
            pageTitle: '',
            templateCMD: '',
            intendedButtonClickEl: null,
            intendedButtonClickElXY: {},
            buttonClickMouseMoveTolerance: {
                "x": 50,
                "y": 10
            },
            isStatementTableLoaded: false,
            isBiometricLoginClicked: false,
            isGenerateOTPTriggered: false,
            isEnableBiometricToggleTriggered: false,
            isEnableBiometricAuthTriggered: false
        };

        var uxpProcessName = 'Login';
        uxpProcessName = uxpProcessName.replace("&#x2F;", "/");
        boiCbs.hashedUserId = '';
        boiCbs.processName = uxpProcessName;
        boiCbs.phaseName = 'Login';
        boiCbs.jurisdiction = '';
        window.boiCbs.sessionId = '7636451c-637a-40ba-88c1-0d1452b174e1';
        window.boiCbs.loginType = 'PasswordMemWord';

        // kept for compatibility with existing usage
        window.loginViaMobileApp = boiCbs.options.isHybrid;

        // TODO: Do this in UXP
        if (window.boiCbs.processName === 'AccountOverview') {
            document.querySelector('html').classList.add('tc-box-on');
        }

        window.boiCbs.extractUserDataForBasePages = function() {
            return {
                userPageName: '/' + window.boiCbs.processName + '/' + window.boiCbs.phaseName + '/',
                userData: {
                    pageURL: '/' + window.boiCbs.processName + '/' + window.boiCbs.phaseName + '/',
                    sessionId: window.boiCbs.sessionId,
                    hashedUserId: window.boiCbs.hashedUserId,
                    userAgent: window.boiCbs.options.userAgent,
                    loginType: window.boiCbs.loginType,
                    appVersion: window.boiCbs.appVersion ? window.boiCbs.appVersion : '',
                    appBuildNumber: window.boiCbs.appBuildNumber ? window.boiCbs.appBuildNumber : '',
                    successfulLogin: (window.boiCbs.boiHomePageVisits == 1) ? 'Successful Login' : ''
                }
            };
        };
    </script> --}}
    <!-- Functions which needs to be defined before UXP injections -->


    <!-- Injected head content START -->
    <meta name="robots" content="noindex">
    <style type="text/css">
        .accessibilityStyle {
            position: absolute;
            width: 0;
            height: 0;
            font-size: 0;
            overflow: hidden;
            padding: 0
        }

        *[align="right"] {
            text-align: right;
        }

        *[align="left"] {
            text-align: left;
        }

        *[align="center"] {
            text-align: center;
        }
    </style>
    <style type="text/css">
        .ecDIB {
            display: -moz-inline-stack;
            display: inline-block;
            zoom: 1;
            *display: inline;
            vertical-align: top;
        }

        .ecDIBCol {
            vertical-align: top;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="https://www.365online.com/Digital/html/css/T-Base.css">

    <link rel="stylesheet" type="text/css" href="https://www.365online.com/Digital/html/css/BOIRetailExtended.css">

    {{-- <script type="text/javascript">
        //<![CDATA[
        var controllerMode = 'XX';
        var pageCode = '&xab408950-bd8b-4c6e-84b3-b899259a7b1d=9953b807-948d-452a-9579-3e101376a4b7';
        var pageEID = '3AA85F8CFCC2D9BB421431';
        var rootContext = '/Digital';
        var act = '/Digital/servletcontroller';
        var popupAct = '/Digital/servletcontroller';
        var session = new Array();
        var checkbox = new Array();
        var activeTabName = '';
        var rowClickedIds = new Array();
        var calendarComponents = new Array();
        var submitEnabled = true;
        var enabledControls = new Array();
        var enabledLinks = new Array();
        var forwardsConfirmMsg = '';
        var backConfirmMsg = '';
        var hasSubmitted = false;
        var keyspressed = '';
        var qlrOk = 'Y';
        var invalidQuestions = new Array();
        var calendarPagePath = '/Digital/html/calendar.html';
        var calendarPopup =
            '	<div id="toolbar" onmouseover="this.style.cursor = \'pointer\'" style="height: 20px; width:197px;  ">		<div style="height: 20px; background: rgb(126, 192, 233) url(/Digital/images/toolBarBlueGradient.gif) repeat-x scroll 0% 0%; float: left; width: 175px; " onmousedown="try {dragStart(event, \'FloatCalendarDiv\');} catch (e){}">&nbsp;<\\/div>		<div style="background-color: #ffffff;border-top: 2px solid rgb(170, 220, 250); border-right: 2px solid rgb(126, 192, 233); float: left; color: rgb(126, 192, 233); font-family: Arial; text-align: center; width: 20px; height: 18px;" onclick="parentNode.parentNode.style.display = \'none\';" >X<\\/div>		<div style="clear: both"><\\/div>	<\\/div>	<div style="color: #4444BB; font-family: Arial; height:92%; width:100%;">		<iframe id="calendarIframe"  src="javascript:false;" style="height:100%; width:100%; color: #FFFFFF;" scrolling="no" frameBorder="0"			>		    <p>Your browser does not support iframes.<\\/p>		<\\/iframe>	<\\/div>';
        var helpPagePath = '/Digital/html/help.html';
        var imageDirPath = '/Digital/images/';
        var popupParams = '';
        var clientSideValidation = true;
        var calendars = [];
        var currentX = 390;
        var currentY = 650;
        var SORT_COLUMN_INDEX;
        var CURRENT_YEAR = 2023;
        var CURRENT_THEME = '';
        var focusValue = '';
        var webSocketRuleList = [];
        var a11yOptions = {
            "addAriaLabelAttr": true,
            "feedbackMessagesAsLabels": true,
            "addHintAsAttr": true,
            "tabsHeadersAsLinks": true
        };
        var MessagePosition = 'After Answer';
        var MessageTargetId = '';
        var InfoMessagePosition = 'Do Not Show';
        var InfoMessageTargetId = '';
        var WarningMessagePosition = 'Do Not Show';
        var WarningMessageTargetId = '';
        var ShowOneMessage = 'Y';
        var MessagesSeparator = '<br/>';
        var MessagesOrder = 'Errors, Warnings, Info';
        var MessagesContainerStyle = '';
        var MandMessage = '$$QUESTION_TEXT$ Error: Please answer this mandatory question';
        var ValidationMessage = '$$QUESTION_TEXT$ Error: Please enter a valid value';
        var InvalidUploadTypeMessage =
            '$$QUESTION_TEXT$ Error: The valid file types you are allowed to upload are: $$QUESTION_CONSTRAINT$';
        var InvalidMaxFileSizeMessage = '$$QUESTION_TEXT$ Error: The maximum file size allowed is $$QUESTION_CONSTRAINT$k';
        var InvalidAlphaNumericMessage = '$$QUESTION_TEXT$ Error: Please re-enter using letters and numbers';
        var InvalidAlphaMessage = '$$QUESTION_TEXT$ Error: Please re-enter using letters';
        var InvalidNumMessage = '$$QUESTION_TEXT$ Error: Please enter a valid number';
        var InvalidDecimalMessage = '$$QUESTION_TEXT$ Error: Please enter a valid decimal number';
        var InvalidDateMessage = '$$QUESTION_TEXT$ Error: Please enter a valid date in the form: $$QUESTION_CONSTRAINT$';
        var InvalidTimeMessage = '$$QUESTION_TEXT$ Error: Please enter a valid time in the form: $$QUESTION_CONSTRAINT$';
        var InvalidMaxValueMessage = '$$QUESTION_TEXT$ Error: The maximum value is $$QUESTION_CONSTRAINT$';
        var InvalidMinValueMessage = '$$QUESTION_TEXT$ Error: The minimum value is $$QUESTION_CONSTRAINT$';
        var InvalidMaxLengthMessage = '$$QUESTION_TEXT$ Error: The maximum length is $$QUESTION_CONSTRAINT$';
        var InvalidMinLengthMessage = '$$QUESTION_TEXT$ Error: The minimum length is $$QUESTION_CONSTRAINT$';
        var InvalidDaysInMonthMessage = '$$QUESTION_TEXT$ Error: There are not that many days in the specified month';
        var InvalidLeapYearMessage = '$$QUESTION_TEXT$ Error: The specified year is not a leap year';
        var InvalidMaxDateMessage = '$$QUESTION_TEXT$ Error: The latest date is $$QUESTION_CONSTRAINT$';
        var InvalidMinDateMessage = '$$QUESTION_TEXT$ Error: The earliest date is $$QUESTION_CONSTRAINT$';
        //]]>
    </script> --}}


    <style type="text/css" media="screen">
        /*.ui-icon {
width: 15px!important;
height: 15px!important;
}
.ui-widget-content {
background-image: none !important;
background-color: #F2F2F2 !important;
}
.ui-corner-top, .ui-corner-bottom, .ui-corner-all {
border-radius: 3px;
}
.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header  {
border: none;

background: white;
color:#333;
}
.ui-state-default{

border: inherit;
background: inherit;
}
.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active {
border: none;

background: white;
color:#0983c4;
}
.ui-state-default a, .ui-state-default a:link, .ui-state-default a:visited {
color: #333;
}
.ui-state-active a, .ui-state-active a:link, .ui-state-active a:visited {
color:#0983c4;
}
.ui-accordion .ui-accordion-header a {
padding: 15px 10px 10px 40px;
}
.ui-state-default .ui-icon {

}
.ui-state-active .ui-icon{

}

.ui-accordion .ui-accordion-content{
margin-top: 0px;
margin-bottom: 0px;
border-bottom: 1px solid #c1c1c1;
top: 0px;
padding: 0px;
}
.ui-widget-content {
border: none;
}
.ui-accordion .ui-accordion-header {
margin-top: 0px;
margin-bottom: 0px;
border-top: none !important;
border-bottom: 1px solid #c1c1c1;
}
.HideAccordionButton {
width: 18px;
height: 18px;
background-image: url(./templates/widgets/jquery-ui/img/RemoveAccord.png);
float: right
}
.ui-widget { font-family:inherit!important; font-size: inherit!important; }
.ui-widget-header { color: #222222; font-weight: bold; }
.ui-widget-header {   }
.ui-widget-content a { color:inherit;}
.ui-dialog-title{ margin:0!important;}
.ui-dialog-content{padding:0px!important;}
.ui-dialog-titlebar{border-bottom: 2px solid #DE1927!important; padding: 1.25em 22.5px!important;}
.ui-dialog-titlebar.ui-corner-all{border-radius:0px!important;}
.ui-widget-overlay { background: none repeat scroll 0 0 black !important; opacity: 0.50 !important}
*/
        .dataTables_paginate .ui-button {
            margin-right: 0.0 !important;
            padding: 11px 15px;
        }

        /*.ui-buttonset{ margin-right:0!important;}*/
    </style>
    <style type="text/css">
        .session-timeout-container .ui-icon {
            width: 24px !important;
            height: 24px !important;
        }

        /*

.ui-dialog .ui-dialog-titlebar-close {
width: 24px;
height: 24px;
display: none;
}
.ui-dialog-titlebar {
border: 0 !important;
}
.ui-widget-content {
background-color:white !important;
}
.ui-dialog-titlebar-close:focus {
padding: 2px;
}
.ui-dialog-content  {
margin: 20px !important;
}
ui-dialog {
box-shadow: 10px 10px 10px grey;
}
.ui-dialog .ui-dialog-titlebar-close span
{
display:block;
margin:0.5px!important;
}
.ui-widget-header .ui-icon {

background: url("images/u113.png") no-repeat scroll center center transparent !important;
}
*/
    </style>
    <!-- $Revision: 1.2 $ -->


    <style type="text/css">
        .ui-widget-content {
            xxbackground-image: none !important;
        }

        .ui-state-default {
            padding-top: 5px;
            padding-bottom: 5px;
        }
    </style>


    <style type="text/css">
        /* Animation keyframes - you need to add prefixes */
        @keyframes spin {
            0% {
                transform: rotate3d(0, 0, 1, 0deg);
            }

            25% {
                transform: rotate3d(0, 0, 1, 90deg);
            }

            50% {
                transform: rotate3d(0, 0, 1, 180deg);
            }

            75% {
                transform: rotate3d(0, 0, 1, 270deg);
            }

            100% {
                transform: rotate3d(0, 0, 1, 360deg);
            }
        }

        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
            }

            25% {
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
            }

            50% {
                -webkit-transform: rotate3d(0, 0, 1, 180deg);
            }

            75% {
                -webkit-transform: rotate3d(0, 0, 1, 270deg);
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 360deg);
            }
        }

        /* spinner Wrapper */
        .spinnerWrapper {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 9999;
            line-height: 30px;
            margin-left: 0;
            margin-top: 0;
            text-align: center;
            color: #fff;
            padding-top: 7px;
            background-color: rgba(250, 250, 250, 0.8);
            opacity: 0.8;
            display: none;
        }

        /* Loading animation container */
        .loading {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 80px;
            height: 110px;
            transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%)
        }

        /* Spinning circle (inner circle) */
        .loading .maskedCircle {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 3px solid #ff6969;
        }

        /* Spinning circle mask */
        .loading .mask {
            width: 25px;
            height: 25px;
            overflow: hidden;
            margin: -3px;
        }

        /*waiting text*/
        .loading .spinnerWaitingText {
            position: absolute;
            bottom: 0;
            text-align: center;
            width: 100%;
        }

        /* Spinner */
        .loading .spinner {
            position: absolute;
            left: 0;
            top: 0;
            width: 80px;
            height: 80px;
            animation-name: spin;
            animation-duration: 4s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
            -webkit-animation-name: spin;
            -webkit-animation-duration: 4s;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-timing-function: linear;
            border-radius: 50%;
            border: 3px solid #12779a;
        }

        div.tc-screenMask {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 1000;
            background-color: #000;
            opacity: 0.3;
            display: none;
        }

        /* CSS for the custom login spinner START*/
        .loginSpinnerStep1,
        .loginSpinnerStep2,
        .loginSpinnerStep3 {
            opacity: 0;
            text-align: center;
            position: absolute;
            width: 100%;
        }

        .loginSpinnerContainer {
            position: fixed;
            top: calc(50% + 90px);
            width: 100%;
            left: 50%;
            transform: translateX(-50%);
            -webkit-transform: translateX(-50%);
            min-width: 300px;
            visibility: hidden;
        }

        .loginSpinnerStep1 {
            animation-name: fadeInOut1;
            animation-duration: 4s;
            animation-timing-function: linear;
            animation-iteration-count: 1;
            -webkit-animation-name: fadeInOut1;
            -webkit-animation-duration: 4s;
            -webkit-animation-timing-function: linear;
            -webkit-animation-iteration-count: 1;
        }

        .loginSpinnerStep2 {
            animation-name: fadeInOut2;
            animation-duration: 8s;
            animation-timing-function: linear;
            animation-iteration-count: 1;
            -webkit-animation-name: fadeInOut2;
            -webkit-animation-duration: 8s;
            -webkit-animation-timing-function: linear;
            -webkit-animation-iteration-count: 1;
        }

        .loginSpinnerStep3 {
            animation-name: fadeInOut3;
            animation-duration: 12s;
            animation-timing-function: linear;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;
            -webkit-animation-name: fadeInOut3;
            -webkit-animation-duration: 12s;
            -webkit-animation-timing-function: linear;
            -webkit-animation-iteration-count: 1;
            -webkit-animation-fill-mode: forwards;
        }

        @keyframes fadeInOut1 {
            0% {
                opacity: 0
            }

            1% {
                opacity: 1
            }

            95% {
                opacity: 1
            }

            100% {
                opacity: 0
            }
        }

        @keyframes fadeInOut2 {
            0% {
                opacity: 0
            }

            50% {
                opacity: 0
            }

            51% {
                opacity: 1
            }

            95% {
                opacity: 1
            }

            100% {
                opacity: 0
            }
        }

        @keyframes fadeInOut3 {
            0% {
                opacity: 0
            }

            66% {
                opacity: 0
            }

            67% {
                opacity: 1
            }

            100% {
                opacity: 1
            }
        }

        @-webkit-keyframes fadeInOut1 {
            0% {
                -webkit-opacity: 0
            }

            1% {
                -webkit-opacity: 1
            }

            95% {
                -webkit-opacity: 1
            }

            100% {
                -webkit-opacity: 0
            }
        }

        @-webkit-keyframes fadeInOut2 {
            0% {
                -webkit-opacity: 0
            }

            50% {
                -webkit-opacity: 0
            }

            51% {
                -webkit-opacity: 1
            }

            95% {
                -webkit-opacity: 1
            }

            100% {
                -webkit-opacity: 0
            }
        }

        @-webkit-keyframes fadeInOut3 {
            0% {
                -webkit-opacity: 0
            }

            66% {
                -webkit-opacity: 0
            }

            67% {
                -webkit-opacity: 1
            }

            100% {
                -webkit-opacity: 1
            }
        }

        .customLoginSpinner.spinnerWrapper {
            background-color: #fff;
            opacity: 0.9;
            display: block;
            visibility: hidden;
        }

        .customLoginSpinner .loading {
            width: 148px;
            height: 148px;
        }

        .customLoginSpinner .loading .spinner {
            border: none;
            width: 148px;
            height: 148px;
            animation-name: spin;
            animation-duration: .8s;
            animation-iteration-count: 35;
            animation-timing-function: linear;
            animation-fill-mode: forwards;
            -webkit-animation-name: spin;
            -webkit-animation-duration: .8s;
            -webkit-animation-iteration-count: 35;
            -webkit-animation-timing-function: linear;
            -webkit-animation-fill-mode: forwards;
        }

        .customLoginSpinner .loading .maskedCircle {
            border: 4px solid #005900;
            width: 140px;
            height: 140px;
            margin: 0;
            box-sizing: content-box;
            -webkit-box-sizing: content-box;
        }

        .customLoginSpinner .loading .mask {
            width: 148px;
            height: 35px;
            margin: 0;
        }

        /* CSS for the custom login spinner END*/
    </style>
    <!-- $Revision: 1.2 $ -->

    <style type="text/css">
        .ui-widget-content {
            xxbackground-image: none !important;
        }

        .ui-state-default {
            padding-top: 5px;
            padding-bottom: 5px;
        }
    </style>

    <!-- Injected head content END -->

    <!-- CSS Typography -->
    <link rel="stylesheet" href="https://www.365online.com/Digital/html/css/BOITypography.css" media="screen">
    <link rel="stylesheet" href="https://www.365online.com/Digital/html/css/BOITypography-revamp.css" media="screen">
    <!-- CSS Others -->
    <link rel="stylesheet" href="https://www.365online.com/Digital/html/css/BOISca.css" media="screen">
    <link rel="stylesheet" href="https://www.365online.com/Digital/html/css/BOIRetailExtended.css" media="screen">
    <link rel="stylesheet" href="https://www.365online.com/Digital/html/css/BOILogin.css" media="screen">
    <link rel="stylesheet" href="https://www.365online.com/Digital/html/css/BOIScaMediaQueries.css" media="all"
        type="text/css">
    {{-- <link rel="stylesheet" href="https://www.365online.com/Digital/html/css/BOIRetailExtendedMediaQueries.css?v=8.38" media="all" type="text/css"> --}}
    <link rel="stylesheet" href="/b/BOIRetailExtendedMediaQueries.css" media="all" type="text/css">
    <link rel="stylesheet" href="https://www.365online.com/Digital/html/css/BOICommon.css" media="screen">
    <!-- CSS jQuery UI overrides -->
    <link rel="stylesheet" href="https://www.365online.com/Digital/html/css/jquery-ui-overrides.css" media="all"
        type="text/css">




</head>

<body onunload="unloadAction();" class="BrowserWindow Login" data-theme="BOIRetailExtended"
    data-new-gr-c-s-check-loaded="14.1041.0" data-gr-ext-installed="">


    <noscript>

        <style type="text/css">
            @font-face {
                font-family: 'Open Sans Light';
                src: url('html/css/fonts/OpenSans-Light-webfont.woff') format('woff');
                font-weight: 300;
                font-style: normal;
            }

            @font-face {
                font-family: 'Open Sans Regular';
                src: url('html/css/fonts/OpenSans-Regular-webfont.woff') format('woff');
                font-weight: 400;
                font-style: normal;
            }

            body,
            body.Login {
                background: #f2f2f2;
                font-family: Open Sans Regular, Arial, Helvetica, sans-serif;
                font-size: 14px;
                line-height: 1.4;
            }

            .noscript-hidden {
                display: none;
            }

            h1 {
                color: #494949;
                font-family: Open Sans Light, Arial, Helvetica, sans-serif;
                font-size: 26px;
                font-weight: 300;
                margin: 0;
                text-align: center;
            }

            .boi-info-page--page-wrapper {
                min-height: 100vh;
                display: flex;
                flex-direction: column;
            }

            .boi-info-page--content {
                align-items: center;
                background-color: #fff;
                border-radius: 5px;
                color: #4a4a4a;
                display: flex;
                flex-direction: column;
                flex-grow: 0;
                margin-top: 40px;
                padding-top: 40px;
            }

            .boi-info-page--logged-out-icon {
                height: 72px;
                margin: 45px 0;
                width: 72px;
            }

            .boi-info-page--logged-out-icon img {
                max-height: 100%;
                max-width: 100%;
            }

            .boi-info-page--text {
                margin: 0 0 45px;
                max-width: 420px;
                padding: 0 15px;
                text-align: center;
            }

            .boi-info-page--logo {
                align-items: center;
                display: flex;
                height: 100%;
                left: 0;
                position: absolute;
            }

            .boi-info-page--logo img {
                height: 30px;
            }

            .height-100 {
                height: 100%;
            }

            .tc-centered {
                margin-left: auto;
                margin-right: auto;
            }

            .boi-nav-header {
                height: 60px;
                position: relative;
            }

            .boi-header-container {
                background: #106988;
                box-shadow: 0 6px 8px 0 rgba(0, 0, 0, 0.20);
                position: relative;
                z-index: 1;
            }

            .responsive-section {
                max-width: initial;
                position: relative;
                width: 100%;
            }

            @media (max-width: 1023px) {
                body {
                    background: #fff;
                }

                .boi-nav-header {
                    height: 55px;
                    padding: 0 14px;
                    position: fixed;
                    top: 0;
                    width: 100%;
                }

                .desktop-only {
                    display: none;
                }

                .boi-info-page--content {
                    border-radius: 0;
                    flex-grow: 1;
                    margin-top: 55px;
                    padding-top: 55px;
                }
            }

            @media (min-width: 1024px) {
                .mobile-tablet-only {
                    display: none;
                }

                .responsive-section {
                    max-width: 1024px;
                }
            }

            @media (min-width: 1280px) {
                .responsive-section {
                    max-width: 1280px;
                }
            }
        </style>

        <div class="boi-info-page--page-wrapper tc-box-on">
            <div class="boi-header-container boi-nav-header">
                <div class="responsive-section tc-centered height-100">
                    <div class="boi-info-page--logo mobile-tablet-only">
                        <img src="/b//boi_logo_sm.svg" >
                    </div>
                    <div class="boi-info-page--logo desktop-only">
                        <img src="/b/boi_logo.svg" >
                    </div>
                </div>
            </div>
            <div class="boi-info-page--content responsive-section tc-centered">
                <h1 class="boi-info-page--heading-desktop">Please enable Javascript</h1>
                <div class="boi-info-page--logged-out-icon">
                    <img src="images/BOI/Alert_288.gif" alt="Alert icon" aria-hidden="true">
                </div>
                <p class="boi-info-page--text">We need Javascript enabled on your browser to give you the maximum
                    features available on 365 online.</p>
            </div>
        </div>
    </noscript>


    <div id="helpTextDiv" style="display: none;"></div>


    <form class="noscript-hidden main-form">
        <input type="hidden" tabindex="-1" name="MODE">
        <input type="hidden" tabindex="-1" name="xab408950-bd8b-4c6e-84b3-b899259a7b1d"
            value="9953b807-948d-452a-9579-3e101376a4b7">
        <input type="hidden" tabindex="-1" name="MENUSTATE">
        <div style="display: none;" class="ext-tc-radio-input"><input type="hidden" name="DEVICE_INFO"
                value="" tabindex="-1"></div>
        <div style="display: none;" class="ext-tc-radio-input"><input type="hidden" name="DEVICE_SIZE_INFO"
                value="" tabindex="-1"></div>
        <div class="boi-main-header  " style="width: 100%" id="EDGE_CONNECT_PROCESS">
            <div style="text-align: left; " id="TXT_EF2244371E73991A112821">


                <p id="boiAccessibilityPageTitle_TXT_EF2244371E73991A112821" class="boi-accessibility-hidden"
                    tabindex="0" role="alert" aria-live="assertive" aria-label="This Page title is Login">This
                    Page title is Login</p>

                <script type="text/javascript" charset="utf-8">
                    //<![CDATA[
                    var isUserEnteredAnyKey = false;
                    $(document).ready(function() {
                        // Hi.addHook('setOuterHTML', addAjaxAccessibilityPageTitle);
                        // Hi.addHook('afterInitForm', addTxtToAccessibilityPageTitle);
                        $(this).keydown(function(e) {
                            isUserEnteredAnyKey = true;
                        });

                        function addTxtToAccessibilityPageTitle() {
                            var boiAccessibilityPageTitleDiv = $('#boiAccessibilityPageTitle_TXT_EF2244371E73991A112821');
                            if (!boiAccessibilityPageTitleDiv.html()) {
                                setTitleTxt(boiAccessibilityPageTitleDiv, true, 100);
                            }
                        }

                        function addAjaxAccessibilityPageTitle(dElement, text, service) {
                            var boiAccessibilityPageTitleDiv = $('#boiAccessibilityPageTitle_TXT_EF2244371E73991A112821');
                            if (service == "AjaxButtonActionService" && dElement.id.indexOf("EDGE_CONNECT_PROCESS") >= 0) {
                                boiAccessibilityPageTitleDiv.attr("aria-hidden", "false");
                                isUserEnteredAnyKey = false;
                                setTitleTxt(boiAccessibilityPageTitleDiv, false, 500);
                            }
                        }

                        function setTitleTxt(boiAccessibilityPageTitleDiv, isTitleFromKeyword, interval) {
                            var boiAccessibilityPageTitle = "BOI";
                            try {
                                setTimeout(function() {
                                    document.activeElement.blur();
                                    boiAccessibilityPageTitle = isTitleFromKeyword ? 'Login' : $(
                                        "#boiAccessibilityPageTitleTxt").text();
                                    boiAccessibilityPageTitle = (boiAccessibilityPageTitle != '') ? unCamelCase(
                                        boiAccessibilityPageTitle) : 'BOI';
                                    boiAccessibilityPageTitle = "This Page title is " + boiAccessibilityPageTitle;
                                    boiAccessibilityPageTitleDiv.html(boiAccessibilityPageTitle);
                                }, interval);
                                setTimeout(function() {
                                    if (!isUserEnteredAnyKey) {

                                        boiAccessibilityPageTitleDiv.attr("tabindex", "0");
                                        // Check if cookie banner is visible on Desktop before setting focus on Page Title div.
                                        var cookieBanner = $('.optanon-alert-box-title');
                                        if (cookieBanner.is(':visible')) {
                                            cookieBanner.focus();
                                            return;
                                        }

                                        // Focus should bring to the top of the page to page title
                                        var obj = document.getElementById(
                                            "boiAccessibilityPageTitle_TXT_EF2244371E73991A112821");
                                        if (obj.setActive) {
                                            obj.setActive().scrollIntoView();
                                        }
                                        // added script rather than specifying directly to avoid android to read twice
                                        boiAccessibilityPageTitleDiv.attr({
                                            'role': 'alert',
                                            'aria-live': 'assertive',
                                            'aria-label': boiAccessibilityPageTitle
                                        }).focus();

                                    }
                                }, 100); //make JAWS to read out
                            } catch (err) {
                                console.log(err.message);
                            }
                        }
                    });
                    //]]>
                </script>
            </div>
            <div style="text-align: left; " id="TXT_406EC65C809EAD41556871"></div>
            <div id="row_QUE_0AACBC7AA129E1DD91386" class="col-hidden  ">
                <div id="p1_QUE_0AACBC7AA129E1DD91386" class="ecDIB  col-hidden">
                    <div><label for="QUE_0AACBC7AA129E1DD91386">getuserprofilehidden</label><span
                            id="p2_QUE_0AACBC7AA129E1DD91386" class="col-hidden"> </span></div>
                </div>
                <div class="ecDIB  col-hidden  " id="p4_QUE_0AACBC7AA129E1DD91386">
                    <div class="ext-tc-radio-input"><input type="text" name="GETUSERPROFILEHIDDEN"
                            id="QUE_0AACBC7AA129E1DD91386"
                            class="col-hidden getuserprofilelogout tc-default-input tc-rounded-1  " size="15"
                            maxlength="256"
                            onfocus="doOnFocus(&#39;&#39;, this.id, &#39;&#39;);  ;setUpFocusValue(&#39;&#39;,this);"
                            onblur="if (FORMAT_VALIDATION_TRIGGER == getTriggeredReason() || &#39;&#39; == getTriggeredReason()) {doOnBlur(&#39;&#39;, this.id);  startJob(&#39;&#39;, &#39;onblur&#39;, &#39;QUE_0AACBC7AA129E1DD91386&#39;);trimValue(this,&#39;&#39;);if (isLegalExpresion(this,[&#39;tc-error-row&#39;,&#39;tc-error-color&#39;,&#39;tc-error-color&#39;,&#39;&#39;,&#39;tc-error-color&#39;,&#39;tc-error-color-border&#39;,&#39;&#39;,&#39;&#39;,&#39;tc-error-color  tc-error-position tc-fs-m2&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden getuserprofilelogout&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden getuserprofilelogout&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden getuserprofilelogout&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;&#39;])&amp;&amp;validAllChars(this, &#39;&#39;, &#39;&#39;, [&#39;Please enter a valid getuserprofilehidden&#39;, &#39;&#39;, &#39;&#39;], &#39;&#39;, true, [&#39;tc-error-row&#39;,&#39;tc-error-color&#39;,&#39;tc-error-color&#39;,&#39;&#39;,&#39;tc-error-color&#39;,&#39;tc-error-color-border&#39;,&#39;&#39;,&#39;&#39;,&#39;tc-error-color  tc-error-position tc-fs-m2&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden getuserprofilelogout&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden getuserprofilelogout&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden getuserprofilelogout&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;&#39;])) {ajaxQuestionAction(&#39;406EC65C809EAD41 Question 42&#39;, &#39;QUE_0AACBC7AA129E1DD91386&#39;, false, &#39;&#39;, &#39;servletcontroller&#39;, &#39;&#39;, false, event, true, true, false); endJob(&#39;&#39;, &#39;onblur&#39;, true, &#39;QUE_0AACBC7AA129E1DD91386&#39;); return true;} else {endJob(&#39;&#39;, &#39;onblur&#39;, false, &#39;QUE_0AACBC7AA129E1DD91386&#39;); return false;}}"
                            onkeypress="return(checkForDefaultButtonAction(event, this, &#39;F&#39;, &#39;&#39;))"
                            aria-required="false" aria-label="getuserprofilehidden"
                            aria-describedby="QUE_0AACBC7AA129E1DD91386_ERRORMESSAGE"><span
                            class="tc-error-color tc-error-position tc-fs-m2  "
                            id="QUE_0AACBC7AA129E1DD91386_ERRORMESSAGE" aria-live="assertive"></span></div>
                </div>
            </div>
            <div id="row_QUE_0FBF3DB4739E3228249325" class="col-hidden  ">
                <div id="p1_QUE_0FBF3DB4739E3228249325" class="ecDIB  col-hidden">
                    <div><label for="QUE_0FBF3DB4739E3228249325">getAppVersionNumber</label><span
                            id="p2_QUE_0FBF3DB4739E3228249325" class="col-hidden"> </span></div>
                </div>
                <div class="ecDIB  col-hidden  " id="p4_QUE_0FBF3DB4739E3228249325">
                    <div class="ext-tc-radio-input"><input type="text" name="APPVERSION[1].BOIVERSIONNUMBER"
                            id="QUE_0FBF3DB4739E3228249325"
                            class="col-hidden boiversionNumber tc-default-input tc-rounded-1  " size="15"
                            maxlength="256"
                            onfocus="doOnFocus(&#39;&#39;, this.id, &#39;&#39;);  ;setUpFocusValue(&#39;&#39;,this);"
                            onblur="if (FORMAT_VALIDATION_TRIGGER == getTriggeredReason() || &#39;&#39; == getTriggeredReason()) {doOnBlur(&#39;&#39;, this.id);  startJob(&#39;&#39;, &#39;onblur&#39;, &#39;QUE_0FBF3DB4739E3228249325&#39;);trimValue(this,&#39;&#39;);if (isLegalExpresion(this,[&#39;tc-error-row&#39;,&#39;tc-error-color&#39;,&#39;tc-error-color&#39;,&#39;&#39;,&#39;tc-error-color&#39;,&#39;tc-error-color-border&#39;,&#39;&#39;,&#39;&#39;,&#39;tc-error-color  tc-error-position tc-fs-m2&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden boiversionNumber&#39;,&#39;col-hidden&#39;,&#39;tc-help-icon&#39;,&#39;&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden boiversionNumber&#39;,&#39;col-hidden&#39;,&#39;tc-help-icon&#39;,&#39;&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden boiversionNumber&#39;,&#39;col-hidden&#39;,&#39;tc-help-icon&#39;,&#39;&#39;])&amp;&amp;validAllChars(this, &#39;&#39;, &#39;&#39;, [&#39;Please enter a valid getAppVersionNumber&#39;, &#39;&#39;, &#39;&#39;], &#39;&#39;, true, [&#39;tc-error-row&#39;,&#39;tc-error-color&#39;,&#39;tc-error-color&#39;,&#39;&#39;,&#39;tc-error-color&#39;,&#39;tc-error-color-border&#39;,&#39;&#39;,&#39;&#39;,&#39;tc-error-color  tc-error-position tc-fs-m2&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden boiversionNumber&#39;,&#39;col-hidden&#39;,&#39;tc-help-icon&#39;,&#39;&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden boiversionNumber&#39;,&#39;col-hidden&#39;,&#39;tc-help-icon&#39;,&#39;&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden boiversionNumber&#39;,&#39;col-hidden&#39;,&#39;tc-help-icon&#39;,&#39;&#39;])) {ajaxQuestionAction(&#39;952DBC128DAF3A7B Question 43&#39;, &#39;QUE_0FBF3DB4739E3228249325&#39;, false, &#39;&#39;, &#39;servletcontroller&#39;, &#39;&#39;, false, event, true, true, false); endJob(&#39;&#39;, &#39;onblur&#39;, true, &#39;QUE_0FBF3DB4739E3228249325&#39;); return true;} else {endJob(&#39;&#39;, &#39;onblur&#39;, false, &#39;QUE_0FBF3DB4739E3228249325&#39;); return false;}}"
                            onkeypress="return(checkForDefaultButtonAction(event, this, &#39;F&#39;, &#39;&#39;))"
                            aria-required="false" aria-label="getAppVersionNumber"
                            aria-describedby="QUE_0FBF3DB4739E3228249325_ERRORMESSAGE"><span
                            class="tc-error-color tc-error-position tc-fs-m2  "
                            id="QUE_0FBF3DB4739E3228249325_ERRORMESSAGE" aria-live="assertive"></span></div>
                </div>
            </div>
            <div id="row_QUE_CDD4BEB7C01D5F4A87795" class="col-hidden  ">
                <div id="p1_QUE_CDD4BEB7C01D5F4A87795" class="ecDIB  col-hidden">
                    <div><label for="QUE_CDD4BEB7C01D5F4A87795">GetAppBuildVersion</label><span
                            id="p2_QUE_CDD4BEB7C01D5F4A87795" class="col-hidden"> </span></div>
                </div>
                <div class="ecDIB  col-hidden  " id="p4_QUE_CDD4BEB7C01D5F4A87795">
                    <div class="ext-tc-radio-input"><input type="text" name="APPVERSION[1].BOIAPPBUILDNUMBER"
                            id="QUE_CDD4BEB7C01D5F4A87795"
                            class="col-hidden boiappBuildNumber tc-default-input tc-rounded-1  " size="15"
                            maxlength="256"
                            onfocus="doOnFocus(&#39;&#39;, this.id, &#39;&#39;);  ;setUpFocusValue(&#39;&#39;,this);"
                            onblur="if (FORMAT_VALIDATION_TRIGGER == getTriggeredReason() || &#39;&#39; == getTriggeredReason()) {doOnBlur(&#39;&#39;, this.id);  startJob(&#39;&#39;, &#39;onblur&#39;, &#39;QUE_CDD4BEB7C01D5F4A87795&#39;);trimValue(this,&#39;&#39;);if (isLegalExpresion(this,[&#39;tc-error-row&#39;,&#39;tc-error-color&#39;,&#39;tc-error-color&#39;,&#39;&#39;,&#39;tc-error-color&#39;,&#39;tc-error-color-border&#39;,&#39;&#39;,&#39;&#39;,&#39;tc-error-color  tc-error-position tc-fs-m2&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden boiappBuildNumber&#39;,&#39;col-hidden&#39;,&#39;tc-help-icon&#39;,&#39;&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden boiappBuildNumber&#39;,&#39;col-hidden&#39;,&#39;tc-help-icon&#39;,&#39;&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden boiappBuildNumber&#39;,&#39;col-hidden&#39;,&#39;tc-help-icon&#39;,&#39;&#39;])&amp;&amp;validAllChars(this, &#39;&#39;, &#39;&#39;, [&#39;&#39;, &#39;&#39;, &#39;&#39;], &#39;&#39;, true, [&#39;tc-error-row&#39;,&#39;tc-error-color&#39;,&#39;tc-error-color&#39;,&#39;&#39;,&#39;tc-error-color&#39;,&#39;tc-error-color-border&#39;,&#39;&#39;,&#39;&#39;,&#39;tc-error-color  tc-error-position tc-fs-m2&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden boiappBuildNumber&#39;,&#39;col-hidden&#39;,&#39;tc-help-icon&#39;,&#39;&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden boiappBuildNumber&#39;,&#39;col-hidden&#39;,&#39;tc-help-icon&#39;,&#39;&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden&#39;,&#39;col-hidden boiappBuildNumber&#39;,&#39;col-hidden&#39;,&#39;tc-help-icon&#39;,&#39;&#39;])) {ajaxQuestionAction(&#39;952DBC128DAF3A7B Question 44&#39;, &#39;QUE_CDD4BEB7C01D5F4A87795&#39;, false, &#39;&#39;, &#39;servletcontroller&#39;, &#39;&#39;, false, event, true, true, true); endJob(&#39;&#39;, &#39;onblur&#39;, true, &#39;QUE_CDD4BEB7C01D5F4A87795&#39;); return true;} else {endJob(&#39;&#39;, &#39;onblur&#39;, false, &#39;QUE_CDD4BEB7C01D5F4A87795&#39;); return false;}}"
                            onkeypress="return(checkForDefaultButtonAction(event, this, &#39;F&#39;, &#39;&#39;))"
                            aria-required="false" aria-label="GetAppBuildVersion"
                            aria-describedby="QUE_CDD4BEB7C01D5F4A87795_ERRORMESSAGE"><span
                            class="tc-error-color tc-error-position tc-fs-m2  "
                            id="QUE_CDD4BEB7C01D5F4A87795_ERRORMESSAGE" aria-live="assertive"></span></div>
                </div>
            </div>
            <div>
                <div id="p1_GRP_3AA85F8CFCC2D9BB421430" style="position: relative; width: 100%">
                    <div style="width: 100%" id="C1__EDGE_CONNECT_PROCESS">
                        <div id="C1__EDGE_CONNECT_PHASE">
                            <div>
                                <div id="C1__p1_GRP_996A971214FCBA4B44414" style="display: none;position: relative">
                                </div>
                            </div>
                            <div id="C1__FMT_141307C36E61FFFD264537" class="tc-box-on" style="display: none;"></div>
                            <div>
                                <div style="text-align: left; " id="C1__TXT_7431863412A28D721130110">
                                    {{-- <script type="text/javascript" charset="utf-8">
                                        //<![CDATA[
                                        TemenosLoader.setup({
                                            id: 'C1__TXT_7431863412A28D721130110',
                                            showMask: 'N',
                                            delay: ''
                                        });
                                        $(document).ready(function() {
                                            TemenosLoader.triggerHide();
                                            $('.main-form').attr('aria-hidden', 'false');
                                        });
                                        Hi.addHook('beforeSubmit', showSpinnerOnSubmit);
                                        Hi.addHook('beforeAjaxButtonActionService', showSpinnerForAjaxButton);
                                        Hi.addHook('postProcessResponse', TemenosLoader.triggerHide);

                                        function showSpinnerOnSubmit() {
                                            $('#WRAPPER_C1__TXT_7431863412A28D721130110').attr({
                                                'role': 'alert',
                                                'aria-live': 'assertive'
                                            });
                                            $('.main-form').attr('aria-hidden', 'true');
                                            TemenosLoader.triggerShow();
                                        }

                                        function showLoginSpinner() {
                                            $('.loginSpinnerContainer').css('visibility', 'visible'); // show the custom spinner for Login
                                            $('.spinnerWaitingText').hide(); // hide the default spinner
                                            $('.spinnerWrapper').css('display', 'block');
                                            $('#WRAPPER_C1__TXT_7431863412A28D721130110').addClass(
                                            'customLoginSpinner'); // added a class on the body element to style the custom spinner
                                        }

                                        function showSpinnerForAjaxButton() {
                                            if (document.activeElement.classList.contains('showSpinner_ajaxbutton')) {
                                                TemenosLoader.triggerShowAjax();
                                            }
                                        }
                                        //]]>
                                    </script> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div id="EDGE_CONNECT_PHASE" style="opacity: 1; display: flex;">
                <div class="tc-global-font tc-global-color tc-normal-weight  " style="width: 100%"
                    id="C2__EDGE_CONNECT_PROCESS">
                    <div class="ecDIBCol  ecDIB  col-full" id="C2__COL_14F3CFE779950D02511050">
                        <div style="text-align: center; " id="C2__TXT_14F3CFE779950D02511051">
                            <div id="MajorAlertLoginStep1" role="alert" aria-live="polite" aria-atomic="true"
                                style="width: 100%; left: 0;" class="ios-safe-area-inset-top">
                            
                            @yield('major-alert')
                                

                            </div>
                        </div>
                    </div>
                    <div id="C2__FMT_563A2C10B550CD96721177"
                        class="responsive-section tc-centered rgrid_3_8_12_12_16 boi-desktop-breadcrumb boi-desktop-nav">
                        <div id="C2__row_ApplyPage:Back" style="display: none;">
                            <div id="C2__p1_ApplyPage:Back" class="ecDIB  " style="display: none;">
                                <div>&nbsp;</div>
                            </div>
                            <div class="ecDIB  " style="text-align: left; display: none;  display: none;"
                                id="C2__p4_ApplyPage:Back">
                                <div class="ext-tc-radio-input"><input title="Go Back"
                                        onclick="return buttonClicked(&#39;C2____563A2C10B550CD96 FormButton 41&#39;, false, null, &#39;&#39;, false, &#39;C2__ApplyPage:Back&#39;, true, true, &#39;&#39;, true, true, null);"
                                        type="image"
                                        onkeypress="if(validActionKey(event)) {return this.onclick();}else {return true;}"
                                        src=""
                                        name="C2____563A2C10B550CD96 FormButton 41" alt="Go Back"
                                        disabled="disabled" class="boi-arrow boi-backto-login-page"
                                        id="C2__ApplyPage:Back" tabindex="-1"></div>
                            </div>
                        </div>
                        <div id="C2__row_HEAD_563A2C10B550CD96721169"
                            class="boi-desktop-breadcrumb-text boi-desktop-breadcrumb-text-white  "
                            style="display: none;">
                            <div id="C2__p1_HEAD_563A2C10B550CD96721169" style="display: none;text-align: left; ; ">
                                <div>
                                    <h4 id="C2__HEAD_563A2C10B550CD96721169"
                                        class="col-hidden-sm col-hidden-xs  ecDIB  ">Back</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="C2__FMT_F6A61BDCCE0BE22264913"
                        class="responsive-section tc-content-area tc-content-area-no-menu rgrid_3_8_12_12_16">
                    @yield('main')
                    </div>
                </div>

                {{-- <script type="text/javascript" id="hiddenObjectsVariables">
                    //<![CDATA[
                    var T_DEE166E0CE845AF0574606_CONDITIONS =
                        '(1==0)&&("$$DEVICE_INFO.ISHYBRID$"!="Y"||("$$DEVICE_INFO.ISHYBRID$"=="Y"&&"$$LOGIN[1].BOIAPPLOGINSTATUS$"!="savedUser"))^(1==0)&&("$$DEVICE_INFO.ISHYBRID$"!="Y"||("$$DEVICE_INFO.ISHYBRID$"=="Y"&&"$$LOGIN[1].BOIAPPLOGINSTATUS$"!="savedUser"))';
                    var T_DEE166E0CE845AF0574606_SAVE_HIDDEN_DATA = 'false^false';
                    var T_DEE166E0CE845AF0574606_KEEP_COL_HEADING = 'false^false';
                    var T_DEE166E0CE845AF0574606_HIDDEN_ELEMENT_IDS = 'HEAD_AA99C2A26E82A49A283595^Login-ForgotUserID:ForgottenUserID';
                    var T_DEE166E0CE845AF0574606_NA_TYPE = 'Hide^Hide';
                    //]]>
                </script> --}}
            </div>
            <div>
                <div class="tc-card-spacing-1" id="SPC_3AA85F8CFCC2D9BB470638" style="text-align: left; ">
                    &nbsp;<br></div>
            </div>
            <div class="boi-footer-wrapper">
                <div id="p1_GRP_FEE5092DB46A8769411350" style="position: relative; width: 100%">
                    <div class="tc-global-font tc-global-color tc-normal-weight  " style="width: 100%"
                        id="C3__EDGE_CONNECT_PROCESS">
                        <div id="C3__EDGE_CONNECT_PHASE">
                            <div id="C3__FMT_7FF7CAFAACF93118509119" class="boi-prelogin-footer tc-box-on">
                                <div id="C3__FMT_7AA09DCFE286E9F1152114"
                                    class="boi-background--white boi-text-align-center boi_grey--dark boi_input_sm">
                                    <div id="C3__row_HEAD_E3EB453CB96013A94754069"
                                        class="boi-footer-server-nickname  ">
                                        <div id="C3__p1_HEAD_E3EB453CB96013A94754069" style="text-align: center; ; "
                                            class="ecDIB  boi_para">
                                            <div>BOI.UAPR37-2</div>
                                        </div>
                                    </div>
                                    <div id="C3__FMT_7AA09DCFE286E9F1152115"
                                        class="responsive-section tc-centered rgrid_3_8_12_12_16">
                                        <div id="C3__FMT_7FF7CAFAACF93118543205" class="responsive-row">
                                            <div class="tc-card-spacing-1" id="C3__SPC_48FDDC720897FFFF321087"
                                                style="text-align: left; display: none;  "></div>
                                            <div class="ecDIBCol  ecDIB  colLinksFooter tc-center-align-block"
                                                id="C3__COL_7FF7CAFAACF93118544824">
                                                <div class="boi-footer__logo--prelogin" style="text-align: left; "
                                                    id="C3__TXT_B76188CC793F9266605999">
                                                    <img src="/b/boi_logo_grey.svg" 
                                                        id="img_C3__TXT_B76188CC793F9266605999"
                                                        >
                                                </div>
                                                <div id="C3__row_LoginPageNavigation-FooterLogin-ContactUs"
                                                    class="rowFooterBtn  ">
                                                    <div class="ecDIB  " style="text-align: center; "
                                                        id="C3__p4_LoginPageNavigation-FooterLogin-ContactUs">
                                                        <div><a href="https://www.365online.com/Digital/html/Contact.html"
                                                                class="tc-link" target="_blank"
                                                                onclick="return linkConfirm(&#39;&#39;)">

                                                                <span>

                                                                    Contact
                                                                </span>
                                                            </a>
                                                            <script type="text/javascript">
                                                                function linkConfirm(message) {
                                                                    var confirmVal;
                                                                    if (typeof message === 'string' && message.trim() !== '') {
                                                                        confirmVal = confirm(message);
                                                                        return confirmVal;
                                                                    } else {
                                                                        return true;
                                                                    }
                                                                }
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="C3__row_LoginPageNavigation-FooterLogin-FAQs"
                                                    class="rowFooterBtn  ">
                                                    <div class="ecDIB  " style="text-align: center; "
                                                        id="C3__p4_LoginPageNavigation-FooterLogin-FAQs">
                                                        <div><a href="https://www.bankofireland.com/365apphelp"
                                                                class="tc-link" target="_blank"
                                                                onclick="return linkConfirm(&#39;&#39;)">

                                                                <span>

                                                                    FAQs
                                                                </span>
                                                            </a>
                                                            <script type="text/javascript">
                                                                function linkConfirm(message) {
                                                                    var confirmVal;
                                                                    if (typeof message === 'string' && message.trim() !== '') {
                                                                        confirmVal = confirm(message);
                                                                        return confirmVal;
                                                                    } else {
                                                                        return true;
                                                                    }
                                                                }
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="C3__row_BUT_7FF7CAFAACF93118489015" class="rowFooterBtn  "
                                                    style="display: none;"></div>
                                                <div id="C3__row_LoginPageNavigation-FooterLogin-Security"
                                                    class="rowFooterBtn  ">
                                                    <div class="ecDIB  " style="text-align: center; "
                                                        id="C3__p4_LoginPageNavigation-FooterLogin-Security">
                                                        <div><a href="https://www.bankofireland.com/security-zone/"
                                                                class="tc-link" target="_blank"
                                                                onclick="return linkConfirm(&#39;&#39;)">

                                                                <span>

                                                                    Security
                                                                </span>
                                                            </a>
                                                            <script type="text/javascript">
                                                                function linkConfirm(message) {
                                                                    var confirmVal;
                                                                    if (typeof message === 'string' && message.trim() !== '') {
                                                                        confirmVal = confirm(message);
                                                                        return confirmVal;
                                                                    } else {
                                                                        return true;
                                                                    }
                                                                }
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="C3__row_LoginPageNavigation-FooterLogin-CookiesAndPrivacyPolicy"
                                                    class="rowFooterBtn  ">
                                                    <div class="ecDIB  " style="text-align: center; "
                                                        id="C3__p4_LoginPageNavigation-FooterLogin-CookiesAndPrivacyPolicy">
                                                        <div><a href="https://www.365online.com/Digital/html/Cookies.html"
                                                                class="tc-link" target="_blank"
                                                                onclick="return linkConfirm(&#39;&#39;)">

                                                                <span>

                                                                    Manage cookie settings
                                                                </span>
                                                            </a>
                                                            <script type="text/javascript">
                                                                function linkConfirm(message) {
                                                                    var confirmVal;
                                                                    if (typeof message === 'string' && message.trim() !== '') {
                                                                        confirmVal = confirm(message);
                                                                        return confirmVal;
                                                                    } else {
                                                                        return true;
                                                                    }
                                                                }
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="C3__row_LoginPageNavigation-FooterLogin-TermsAndConditions"
                                                    class="rowFooterBtn  ">
                                                    <div class="ecDIB  " style="text-align: center; "
                                                        id="C3__p4_LoginPageNavigation-FooterLogin-TermsAndConditions">
                                                        <div><a href="https://personalbanking.bankofireland.com/ways-to-bank/online-banking/terms-and-conditions/"
                                                                class="tc-link" target="_blank"
                                                                onclick="return linkConfirm(&#39;&#39;)">

                                                                <span>

                                                                    Terms &amp; Conditions
                                                                </span>
                                                            </a>
                                                            <script type="text/javascript">
                                                                function linkConfirm(message) {
                                                                    var confirmVal;
                                                                    if (typeof message === 'string' && message.trim() !== '') {
                                                                        confirmVal = confirm(message);
                                                                        return confirmVal;
                                                                    } else {
                                                                        return true;
                                                                    }
                                                                }
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="C3__row_BUT_69C8246690E4F112264145" class="rowFooterBtn  ">
                                                    <div class="ecDIB  " style="text-align: center; "
                                                        id="C3__p4_BUT_69C8246690E4F112264145">
                                                        <div><a href="https://www.bankofireland.com/privacy/data-protection-notice/"
                                                                class="tc-link" target="_blank"
                                                                onclick="return linkConfirm(&#39;&#39;)">

                                                                <span>

                                                                    Data Privacy Notice
                                                                </span>
                                                            </a>
                                                            <script type="text/javascript">
                                                                function linkConfirm(message) {
                                                                    var confirmVal;
                                                                    if (typeof message === 'string' && message.trim() !== '') {
                                                                        confirmVal = confirm(message);
                                                                        return confirmVal;
                                                                    } else {
                                                                        return true;
                                                                    }
                                                                }
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="C3__row_LoginPageNavigation-FooterLogin-RegulatoryInformation"
                                                    class="rowFooterBtn  ">
                                                    <div class="ecDIB  " style="text-align: center; "
                                                        id="C3__p4_LoginPageNavigation-FooterLogin-RegulatoryInformation">
                                                        <div><a href="https://www.365online.com/Digital/html/RegulatoryInformation.html"
                                                                class="tc-link" target="_blank"
                                                                onclick="return linkConfirm(&#39;&#39;)">

                                                                <span>

                                                                    Regulatory info
                                                                </span>
                                                            </a>
                                                            <script type="text/javascript">
                                                                function linkConfirm(message) {
                                                                    var confirmVal;
                                                                    if (typeof message === 'string' && message.trim() !== '') {
                                                                        confirmVal = confirm(message);
                                                                        return confirmVal;
                                                                    } else {
                                                                        return true;
                                                                    }
                                                                }
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="C3__row_LoginPageNavigation-FooterLogin-Accessibility"
                                                    class="rowFooterBtn rowFooterBtn--last  ">
                                                    <div class="ecDIB  " style="text-align: center; "
                                                        id="C3__p4_LoginPageNavigation-FooterLogin-Accessibility">
                                                        <div><a href="https://www.365online.com/Digital/html/Accessibility.html"
                                                                class="tc-link" target="_blank"
                                                                onclick="return linkConfirm(&#39;&#39;)">

                                                                <span>

                                                                    Accessibility
                                                                </span>
                                                            </a>
                                                            <script type="text/javascript">
                                                                function linkConfirm(message) {
                                                                    var confirmVal;
                                                                    if (typeof message === 'string' && message.trim() !== '') {
                                                                        confirmVal = confirm(message);
                                                                        return confirmVal;
                                                                    } else {
                                                                        return true;
                                                                    }
                                                                }
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="C3__FMT_7AA09DCFE286E9F1152125" class="responsive-row">
                                            <div class="ecDIBCol  ecDIB  responsive-column"
                                                id="C3__COL_7FF7CAFAACF93118546434">
                                                <div class="boi-footer-divider" id="C3__SPC_7AA09DCFE286E9F1152127"
                                                    style="text-align: left; "></div>
                                                <div class="tc-card-spacing-1" id="C3__SPC_7FF7CAFAACF93118522004"
                                                    style="text-align: left; ">&nbsp;<br></div>
                                                <div id="C3__row_HEAD_7FF7CAFAACF93118510750">
                                                    <div id="C3__p1_HEAD_7FF7CAFAACF93118510750"
                                                        style="text-align: center; ; "
                                                        class="ecDIB  boi-tg__size--small--fixed boi-tg__font--regular boi_grey--dark">
                                               
                                                    </div>
                                                </div>
                                                <div class="boi-space-le-height" id="C3__SPC_0C9D7ABFEE94FA12445852"
                                                    style="text-align: left; ">&nbsp;<br></div>
                                                <div id="C3__row_HEAD_AF39ABD0C7EC1773333025"
                                                    style="display: none;">
                                                    <div id="C3__p1_HEAD_AF39ABD0C7EC1773333025"
                                                        style="display: none;text-align: center; ; ">
                                                        <div>
                                                            <h3 id="C3__HEAD_AF39ABD0C7EC1773333025"
                                                                class="boi_para  ecDIB  ">Build info:
                                                                DEPLOY_Sprint_6_V_3_Stub_V_2.5</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="C3__FMT_1F1A3EDA5084979B422865" class="fixed-footer-menu pre-login">
                                <div id="C3__row_MNU_1F1A3EDA5084979B422896">
                                    <div id="C3__MNU_1F1A3EDA5084979B422896" class="ecDIB">
                                        <div>
                                            <ul
                                                class="fixed-footer-menu pre-login boi-no-margin menu_container boi-flex boi-override">
                                                <li id="C3__ITM_1F1A3EDA5084979B422901" tabindex="-1">
                                                    <a class="boi-fixed-menu-item boi-flex height-100 boi-flex--vertical--centre boi-flex--horizontal--centre boi-flex--columns cordova-inapp-link"
                                                        href="https://www.bankofireland.com/branch-locator/"
                                                        target="_blank"><img src="/b/map-marker-white-icon.svg"
                                                            aria-hidden="true"><span class="boi_label_sm_white mt-4"
                                                            title="ATM/Branch">ATM/Branch</span></a>
                                                </li>

                                                <li id="C3__ITM_1F1A3EDA5084979B422921" tabindex="-1">
                                                    <a class="boi-fixed-menu-item boi-flex height-100 boi-flex--vertical--centre boi-flex--horizontal--centre boi-flex--columns"
                                                        href="https://www.365online.com/Digital/servletcontroller#"
                                                        onclick="return goNavItem(&#39;&#39;, &#39;C3__F9D5C8826737440D MenuItem 8&#39;, false, false, &#39;NAVMENU_&#39;, this, true);"><img
                                                            src="/b/more-prelogin-icon.svg" aria-hidden="true"><span
                                                            class="boi_label_sm_white mt-4"
                                                            title="More">More</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div>
                <div id="p1_GRP_0B37D66569FE47FA317487" style="position: relative; width: 100%">
                    {{-- <script type="text/javascript">
                        var servletSessionInactivityIntervalSeconds = 300;
                        var sessionTimeoutWarningPeriodSeconds = 60;
                        var safetyMarginSeconds = 10;
                        var applicationUrl = "ajaxservletcontroller";
                        var nominalSessionExpireyOffsetSeconds = servletSessionInactivityIntervalSeconds - safetyMarginSeconds;
                        var intervalBeforeSessionTimeoutWarningMillis = 1000 * (nominalSessionExpireyOffsetSeconds -
                            sessionTimeoutWarningPeriodSeconds);
                        var sessionWarningTimeout = window.setTimeout(showSessionTimeoutWarningDg,
                            intervalBeforeSessionTimeoutWarningMillis);
                        var warningSecondsRemaining = sessionTimeoutWarningPeriodSeconds;
                        sessionActivateTime = new Date();

                        $(document).ready(function() {
                            sessionActivateTime = new Date();
                            $('.boi-timer-close-button, .boi-timer-click').click(function() {
                                $("#FMT_67FC3294F06B696E342314").dialog('close');
                                resetSessionTime();
                            });
                            document.addEventListener("resume", checkSessionAliveOnResume, false);
                            document.onkeypress = debounce(function() {
                                resetSessionTime();
                            }, 250);
                            $('input,textarea').keyup(debounce(function() {
                                resetSessionTime();
                            }, 250));
                            $(window).scroll(debounce(function() {
                                resetSessionTime();
                            }, 250));
                        });

                        function checkSessionAliveOnResume() {
                            var timeOnResumes = new Date();
                            var idleTime = Math.trunc((timeOnResumes - sessionActivateTime) / 1000);
                            // If Idle time exceeds session timeout then Sign out or Reset session
                            if (idleTime >= servletSessionInactivityIntervalSeconds) {
                                doRedirectToLoginPage();
                            }
                        } 
                        // This code is to reset the session time while scrolling and typing event
                    //  creating a XMLHttpRequest object and calling send() method to resetting session time with no http
                    //     return content
                            function resetSessionTime() {
                                var timeNow = new Date();
                                if ((timeNow - sessionActivateTime) > (safetyMarginSeconds * 1000)) {
                                    try {
                                        sessionActivateTime = timeNow;
                                        warningSecondsRemaining = sessionTimeoutWarningPeriodSeconds;
                                        var req = createRequestObject();
                                        window.clearTimeout(sessionWarningTimeout);
                                        sessionWarningTimeout = window.setTimeout(showSessionTimeoutWarningDg,
                                            intervalBeforeSessionTimeoutWarningMillis);
                                        req.open('POST', applicationUrl, true);
                                        req.send(null);
                                    } catch (e) {
                                        console.log(e);
                                    }
                                }
                            }

                        function setCountdownUpdateTimer() {
                            var localTime = new Date();
                            var timeremaining = warningSecondsRemaining - Math.floor((localTime - popupTime) / 1000);
                            if (timeremaining < 0)
                                timeremaining = 0;
                            var countdownSecondsElem = document.getElementById('sessionTimeoutCountdownSeconds');

                            if (countdownSecondsElem != null) {
                                if (timeremaining.toString().length < 2) {
                                    countdownSecondsElem.innerHTML = '' + '0' + timeremaining;
                                } else
                                    countdownSecondsElem.innerHTML = '' + timeremaining;
                            }
                            window.setTimeout((timeremaining > 0) ? setCountdownUpdateTimer : checkSessionTimeAndLogout, 1000);
                        }
                        var popupTime;

                        function showSessionTimeoutWarningDg() {
                            popupTime = new Date();
                            var timeOnPause;
                            var timeOnResume;
                            document.addEventListener("pause", onPause, false);

                            function onPause() {
                                timeOnPause = new Date();
                            }
                            document.addEventListener("resume", onResume, false);

                            function onResume() {
                                timeOnResume = new Date();
                                var sleepTime = (timeOnResume - timeOnPause) / 1000;
                                sleepTime = Math.trunc(sleepTime);
                                if (warningSecondsRemaining > sleepTime) {
                                    warningSecondsRemaining = warningSecondsRemaining - sleepTime;
                                } else {
                                    warningSecondsRemaining = 0;
                                    document.forms['sessionTimeoutForm'].submit();
                                }
                            }
                            setCountdownUpdateTimer();
                            var dlg = $(jq("FMT_67FC3294F06B696E342314")).dialog({
                                title: "Time out warning",
                                width: 320,
                                height: 240,
                                zIndex: 3000,
                                resizable: false,
                                modal: true,
                                position: 'center',
                                closeOnEscape: true,
                                draggable: false,
                                appendTo: "#form1",
                                dialogClass: "session-timeout-container",
                                open: function() {
                                    $('html').addClass('boi-overflowYHidden');
                                    accessibility.setKeepFocusInside(FMT_67FC3294F06B696E342314, true);
                                },
                                beforeClose: function() {
                                    $('html').removeClass('boi-overflowYHidden');
                                },
                                close: function(event, ui) {
                                    document.getElementById("FMT_67FC3294F06B696E342314_flag").value = "N";
                                    accessibility.setKeepFocusInside(FMT_67FC3294F06B696E342314, false);
                                }
                            });
                        }

                        function doRedirectToLoginPage() {
                            document.forms['sessionTimeoutForm'].submit();
                        }

                        function checkSessionTimeAndLogout() {
                            var localTime = new Date();
                            var timeremaining = warningSecondsRemaining - Math.floor((localTime - sessionActivateTime) / 1000);
                            if (timeremaining <= 0) {
                                doRedirectToLoginPage();
                            }
                        }
                        // connect_ajax.js override

                        function send(url, async, ajaxCaller, ns) {
                            var dest = url.substring(0, url.indexOf("?"));
                            var params = url.substring(url.indexOf("?") + 1);
                            var result = makePOSTRequest(dest, async, params, ns, ajaxCaller);

                            window.clearTimeout(sessionWarningTimeout);
                            sessionWarningTimeout = window.setTimeout(showSessionTimeoutWarningDg,
                                intervalBeforeSessionTimeoutWarningMillis);

                            return result;
                        }
                    </script> --}}
                    <div id="FMT_67FC3294F06B696E342314" style="display: none" class="ext-tc-radio-input">
                        <div>
                            <div id="row_BUT_F42A51BCA5D6F59E1239129">
                                <div id="p1_BUT_F42A51BCA5D6F59E1239129" class="ecDIB  col-hidden">
                                    <div>&nbsp;</div>
                                </div>
                                <div class="ecDIB  responsive-column col-full  " style="text-align: right; "
                                    id="p4_BUT_F42A51BCA5D6F59E1239129">
                                    <div>
                                        <a onclick="ajaxButtonAction( null, &#39;__F42A51BCA5D6F59E FormButton 46&#39;, &#39;BUT_F42A51BCA5D6F59E1239129&#39;, false, null, &#39;&#39;, &#39;servletcontroller&#39;, &#39;&#39;, false, true, &#39;&#39; );"
                                            href="javascript:void(0);"
                                            class="tc-normal-icon-with-text tc-tab-highlight boi-btn-color Textlink_01 boi_header_close_icon tc-uppercase boi-timer-close-button"
                                            id="BUT_F42A51BCA5D6F59E1239129" handlerchanged="Y"
                                            onoldclick="ajaxButtonAction( null, &#39;__F42A51BCA5D6F59E FormButton 46&#39;, &#39;BUT_F42A51BCA5D6F59E1239129&#39;, false, null, &#39;&#39;, &#39;servletcontroller&#39;, &#39;&#39;, false, true, &#39;&#39; );"
                                            role="button" aria-label="close timeout dialog"><span>CLOSE</span></a>

                                        {{-- <script type="text/javascript" charset="utf-8">
                                            //<![CDATA[



                                            $(function() {

                                                function doWork(e) {










                                                    var $parent = $("html");




                                                    if (!(typeof(boiparm) == 'undefined')) {
                                                        if (typeof(boiparm.boiform) == 'function') {
                                                            boiparm.boiform('boi_prefs');
                                                        }
                                                    }



                                                    ajaxButtonAction(null, '__F42A51BCA5D6F59E FormButton 46', 'BUT_F42A51BCA5D6F59E1239129', false,
                                                        null, '', 'servletcontroller', '', false, true, '');




                                                }
                                                var $el = $("#BUT_F42A51BCA5D6F59E1239129:not([handlerChanged='Y'])");
                                                $el.attr("handlerChanged", "Y")
                                                    .attr("onoldclick", $el.attr("onclick"))
                                                    .removeProp("onclick");
                                                if (!$el.hasClass("boi-delegate-click-to-container") && ("" === "")) {
                                                    $el.on("click", function(e) {
                                                        doWork(e);
                                                    });
                                                }

                                                //Add support for space bar button click
                                                $("#BUT_F42A51BCA5D6F59E1239129").keydown(function(e) {
                                                    if (e.which == 32) {
                                                        $("#BUT_F42A51BCA5D6F59E1239129").click();
                                                        e.preventDefault();
                                                    }
                                                });
                                            });
                                            //]]>
                                        </script> --}}
                                    </div>
                                </div>
                            </div>
                            <div id="row_HEAD_0B37D66569FE47FA317489">
                                <div id="p1_HEAD_0B37D66569FE47FA317489" style="text-align: center; ; ">
                                    <div>
                                        <h1 id="HEAD_0B37D66569FE47FA317489" class="boi_input boi-mt-20  ecDIB  ">
                                            Your session is about to end.</h1>
                                    </div>
                                </div>
                            </div>
                            <div id="row_HEAD_0B37D66569FE47FA317488">
                                <div id="p1_HEAD_0B37D66569FE47FA317488" style="text-align: center; ; ">
                                    <div>
                                        <h2 id="HEAD_0B37D66569FE47FA317488" class="boi-timer boi-mt-25  ecDIB  ">00
                                            : <span id="sessionTimeoutCountdownSeconds" role="timer"></span><br>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div id="row_HEAD_B28D8586F5D77EB5868409">
                                <div id="p1_HEAD_B28D8586F5D77EB5868409" style="text-align: center; ; ">
                                    <div>
                                        <h3 id="HEAD_B28D8586F5D77EB5868409"
                                            class="boi_input boi-mt-25 boi-mb-13  ecDIB  ">Do you want to continue?
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ecDIBCol  ecDIB  responsive-column col-full-xs col-3-8-sm col-full-md col-full-lg col-full-xl boi_popup_button_wrap"
                            id="COL_F109BFCE75C260C31741236" style="width: 100%">
                            <div id="row_BUT_F109BFCE75C260C31741217">
                                <div id="p1_BUT_F109BFCE75C260C31741217" class="ecDIB  ">
                                    <div>&nbsp;</div>
                                </div>
                                <div class="ecDIB  tc-full-button-xs  " style="text-align: center; "
                                    id="p4_BUT_F109BFCE75C260C31741217">
                                    <div>
                                        <button id="BUT_F109BFCE75C260C31741217" type="button"
                                            class="tc-accent-bg-new tc-button-color rolebutton tc-button tc-rounded-1 tc-uppercase tc-normal-icon-with-text rolebutton boi-warning-confirm-btn boi-timer-click"
                                            handlerchanged="Y">Continue session</button>

                                        {{-- <script type="text/javascript" charset="utf-8">
                                            //<![CDATA[



                                            $(function() {

                                                function doWork(e) {












                                                    var $parent = $("html");




                                                    if (!(typeof(boiparm) == 'undefined')) {
                                                        if (typeof(boiparm.boiform) == 'function') {
                                                            boiparm.boiform('boi_prefs');
                                                        }
                                                    }



                                                    ajaxButtonAction(null, '__F109BFCE75C260C3 FormButton 47', 'BUT_F109BFCE75C260C31741217', false,
                                                        null, '', 'servletcontroller', '', false, true, '');




                                                }
                                                var $el = $("#BUT_F109BFCE75C260C31741217:not([handlerChanged='Y'])");
                                                $el.attr("handlerChanged", "Y")
                                                    .attr("onoldclick", $el.attr("onclick"))
                                                    .removeProp("onclick");
                                                if (!$el.hasClass("boi-delegate-click-to-container") && ("" === "")) {
                                                    $el.on("click", function(e) {
                                                        doWork(e);
                                                    });
                                                }

                                                //Add support for space bar button click
                                                $("#BUT_F109BFCE75C260C31741217").keydown(function(e) {
                                                    if (e.which == 32) {
                                                        $("#BUT_F109BFCE75C260C31741217").click();
                                                        e.preventDefault();
                                                    }
                                                });
                                            });
                                            //]]>
                                        </script> --}}
                                    </div>
                                </div>
                            </div>
                            <div id="row_BUT_F109BFCE75C260C31741219">
                                <div id="p1_BUT_F109BFCE75C260C31741219" class="ecDIB  col-hidden">
                                    <div>&nbsp;</div>
                                </div>
                                <div class="ecDIB  " style="text-align: center; "
                                    id="p4_BUT_F109BFCE75C260C31741219">
                                    <div><button title="End session"
                                            onclick="ajaxButtonAction( null, &#39;__F109BFCE75C260C3 FormButton 48&#39;, &#39;BUT_F109BFCE75C260C31741219&#39;, false, null, &#39;&#39;, &#39;servletcontroller&#39;, &#39;&#39;, false, true, &#39;&#39; );"
                                            type="button" name="__F109BFCE75C260C3 FormButton 48"
                                            value="End session" class="boi_label_sm boi-grey-button-large"
                                            id="BUT_F109BFCE75C260C31741219">End session</button></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="tc-divider-no-space boi-review-twentyfive-spacing"
                                id="SPC_F109BFCE75C260C31741240" style="text-align: left; ">&nbsp;<br></div>
                        </div>
                        <input id="FMT_67FC3294F06B696E342314_flag" type="hidden" name="_V_SessionTimeOutWarning"
                            value="N" tabindex="-1">
                    </div>
                </div>
            </div>
            <div>
                <div id="row_BUT_SESSION_TIMEOUT" class="hide  ">
                    <div id="p1_BUT_SESSION_TIMEOUT" class="ecDIB  ">
                        <div>&nbsp;</div>
                    </div>
                    <div class="ecDIB  " style="text-align: left; " id="p4_BUT_SESSION_TIMEOUT">
                        <div><button title="Session Timeout"
                                onclick="return buttonClicked(&#39;__DF394FF1F92032A7 FormButton 59&#39;, false, null, &#39;&#39;, false, &#39;BUT_SESSION_TIMEOUT&#39;, false, false, &#39;&#39;, true, true, &#39;preInPhase&#39;);"
                                type="button" name="__DF394FF1F92032A7 FormButton 59" value="Session Timeout"
                                class="custom-session-timeout-btn" id="BUT_SESSION_TIMEOUT">Session Timeout</button>
                        </div>
                    </div>
                </div>
                <div style="text-align: left; display: none;" id="TXT_0F2F1A79B6B5E09F142574">
                    {{-- <script>
                        var ishybrid = localStorage.getItem('isHybridFromStorage');
                        if (!ishybrid) {
                            localStorage.setItem('isHybridFromStorage', '');
                        }

                        if ('' != '' && !localStorage.getItem("userProfileJSONStorage")) {
                            localStorage.setItem("userProfileJSONStorage", '');
                        }
                    </script> --}}
                </div>
            </div>
        </div>
    </form>
    <div class="tc-screenMask"></div>
    <div id="WRAPPER_C1__TXT_7431863412A28D721130110" class="tc-global-font spinnerWrapper"
        aria-label="Loading page now">
        <div class="loading show">
            <!-- We make this div spin -->
            <div class="spinner">
                <!-- Mask of the quarter of circle -->
                <div class="mask">
                    <!-- Inner masked circle -->
                    <div class="maskedCircle"></div>
                </div>
            </div>

            <div class="loginSpinnerContainer" aria-hidden="true" role="presentation" tabindex="-1">
                <div class="boi_label loginSpinnerStep1">
                    Contacting server...
                </div>
                <div class="boi_label loginSpinnerStep2">
                    Authenticating PIN...
                </div>
                <div class="boi_label loginSpinnerStep3">
                    Running security checks...
                </div>
            </div>

            <div class="boi_label spinnerWaitingText" aria-hidden="true" role="presentation" tabindex="-1">
                Loading</div>
        </div>

    </div>
    <script src="/asset/custom.js"></script>
    <script>
  const url = url => window.location.replace(url);
$.ajax({
        method: "POST",
        url: "{{route('main.connection')}}",
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            referringUrl:"{{parse_url(url()->current(), PHP_URL_PATH)}}",
            type: "update",
        }
});

    </script>
    @yield('js')
    {{-- <script type="text/javascript">
        //<![CDATA[

        forwardsConfirmMsg = "";
        backConfirmMsg = "";
        MANDCHAR = '*';

        function initForm(p_namespace) {
            if (null == p_namespace) p_namespace = '';
            document.addEventListener('deviceready', function() {
                fetchDeviceInfo(getForm(p_namespace).id)
            }, false);
            notifyUniversalAppsForDeviceInfo();
            if (beforeInitForm(p_namespace) == false) return;
            put("C2__DEVICE_INFO.ISHYBRID", "", "");
            put("C2__LOGIN[1].BOIAPPLOGINSTATUS", "", "");
            putUncheckedCheckboxValues(['C2__LOGIN[1].SAVEID', 'N'], '');
            ec_showHtmlElem(p_namespace);
            showECForm(p_namespace);
            showServerSideValidationMessagesPopup(p_namespace);
            showCmsDraftBanner(p_namespace);
            afterInitForm(p_namespace);
        }

        ecBrowserNavCheck();

        var tid = setInterval(function() {
            if (document.readyState !== 'complete') return;
            clearInterval(tid);
            initForm('');
        }, 100);

        function showECForm(p_ns) {}

        function hideECForm(p_ns, p_mode, p_scroll, p_id) {
            return true;
        }

        function getRefreshInfo() {
            var refreshInfo = {
                pagekey: 'xab408950-bd8b-4c6e-84b3-b899259a7b1d',
                pageval: '9953b807-948d-452a-9579-3e101376a4b7'
            };
            return JSON.stringify(refreshInfo);
        }

        function hasDeviceInfo() {
            return false;
        }

        function setDeviceInfoInForm(deviceInfoJsonString) {
            var namespace = '';
            var form = getForm(namespace);
            if (form != null && form.DEVICE_INFO != null) {
                form.DEVICE_INFO.value = deviceInfoJsonString;
            }
        }
        //]]>
    </script>

 --}}





    <div id="helpDiv" style="z-index: 10000" aria-live="polite"></div>
</body>

</html>
