@php
$url = url()->current();
@endphp
<!DOCTYPE html>
<!-- saved from url=(0151){{ $url }} -->
<html lang="en-IE" style="filter: hue-rotate(4deg);">

<head id="head">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
        Pay Customs Charge | Customs Online | An Post
    </title>
    <meta name="description" content="Pay your customs charge from Irish Revenue through An Post. Pay online here. ">


    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Strata3 - http://www.strata3.com/">

    <meta itemprop="name" content="Pay Customs Charge">
    <meta itemprop="description" content="Pay your customs charge from Irish Revenue through An Post. Pay online here. ">
    <meta itemprop="image" content="#build/images/logos/logo.png">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@AnPost">
    <meta name="twitter:title" content="Pay Customs Charge">
    <meta name="twitter:description" content="">
    <meta name="twitter:creator" content="AnPost">
    <meta name="twitter:image" content="#getattachment/b90f0953-ffc8-48ff-a367-67d40a81e790/Post-Parcels/Receiving/Pay-Customs-Charge">

    <meta property="og:title" content="Pay Customs Charge">
    <meta property="og:locale" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="#Post-Parcels/Receiving/Pay-Customs-Charge">
    <meta property="og:image" content="#getattachment/b90f0953-ffc8-48ff-a367-67d40a81e790/Post-Parcels/Receiving/Pay-Customs-Charge">
    <meta property="og:description" content="Pay your customs charge from Irish Revenue through An Post. Pay online here. ">
    <meta property="og:site_name" content="">
    <meta property="fb:admins" content="">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ $url }}#build/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ $url }}#build/images/apple-touch-icon-152x152.png">

    <link rel="canonical" href="{{ $url }}#Post-Parcels/Receiving/Pay-Customs-Charge">
    <link rel="alternate" hreflang="x-default" href="{{ $url }}#Post-Parcels/Receiving/Pay-Customs-Charge">
    <link rel="alternate" hreflang="en-ie" href="{{ $url }}#Post-Parcels/Receiving/Pay-Customs-Charge">
    <link rel="alternate" hreflang="ga-ie" href="{{ $url }}#Post-Parcels/Receiving/Pay-Customs-Charge?lang=ga-ie">


    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link rel="preload" as="style" href="/asset/css.css">
    <link rel="stylesheet" onload="this.onload=null;this.removeAttribute(&#39;media&#39;);" href="/asset/css.css">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    </noscript>

    <!-- BROWSER : Firefox 116 -->
    <!-- BEGIN : core Common StyleSheets -->
    <link rel="stylesheet" href="/asset/common-deferred.min.css" as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;">
    <noscript>
        <link rel="stylesheet" href="/build/css/common-deferred.min.css?v=141">
    </noscript>
    <link rel="stylesheet" href="/asset/core.min.css">
    <!-- END   : core Common StyleSheets -->

    <!-- BEGIN : Module StyleSheets -->
    <!-- Module Name : F14PayCustomsCharges-->
    <!-- Module Name : M18AccordionContainer-->
    <!-- Module Name : M13CTAPanel-->
    <!-- Module Name : TemporaryRedirect-->
    <!-- Module Name : Categorised_FAQ_Schema-->
    <!-- Module Name : Categorised_FAQ-->
    <link rel="stylesheet" href="/asset/f14.min.css" as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;">
    <noscript>
        <link rel="stylesheet" href="/build/css/f14.min.css?v=141">
    </noscript>
    <link rel="stylesheet" href="/asset/f15.min.css" as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;">
    <noscript>
        <link rel="stylesheet" href="/build/css/f15.min.css?v=141">
    </noscript>
    <link rel="stylesheet" href="/asset/f16.min.css" as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;">
    <noscript>
        <link rel="stylesheet" href="/build/css/f16.min.css?v=141">
    </noscript>
    <link rel="stylesheet" href="/asset/f17.min.css" as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;">
    <noscript>
        <link rel="stylesheet" href="/build/css/f17.min.css?v=141">
    </noscript>
    <link rel="stylesheet" href="/asset/m18.min.css" as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;">
    <noscript>
        <link rel="stylesheet" href="/build/css/m18.min.css?v=141">
    </noscript>
    <link rel="stylesheet" href="/asset/m13.min.css" as="style" onload="this.onload=null;this.rel=&#39;stylesheet&#39;">
    <noscript>
        <link rel="stylesheet" href="/build/css/m13.min.css?v=141">
    </noscript>
    <!-- END   : Module StyleSheets -->

    @yield('css')


    <meta data-jc="82" data-jc-version="r20230822">
    <style>
        .webpush-window-body {
            height: 100%;
            min-height: 100%;
            padding: 0;
            margin: 0;
        }

        #webpush-window {
            position: absolute;
            text-align: center;
            width: 100%;
            left: 0;
            top: 50%;
            opacity: 0;
        }

        #webpush-window-image {
            height: 128px;
            margin-bottom: 10px;
        }

        #webpush-window-title {
            font-size: 22px;
            padding: 0 5px;
        }

        #webpush-window-text {
            color: #333333;
            margin-top: 15px;
            padding: 0 5px;
            line-height: 22px;
        }

        #webpush-custom-prompt {
            position: fixed;
            z-index: 9999999;
            width: 320px;
            max-width: 100%;
            padding: 10px;
            top: 0;
            left: 50%;
            margin-left: -170px;
            background-color: rgb(231, 232, 233);
            box-shadow: 0px 0px 6px #888888;
            color: #000000;
            font-family: 'Trebuchet MS', Helvetica, sans-serif;
        }

        #webpush-custom-prompt-image {
            width: 64px;
            position: absolute;
            top: 15px;
            left: 15px;
        }

        #webpush-custom-prompt-title {
            margin-left: 90px;
            margin-top: 4px;
            font-size: 13px;
            font-weight: bold;
            line-height: 18px;
        }

        #webpush-custom-prompt-text {
            font-size: 10px;
            margin-left: 90px;
            margin-top: 5px;
            line-height: 15px;
        }

        #webpush-custom-prompt-buttons {
            padding-top: 10px;
            padding-right: 10px;
            padding-bottom: 10px;
            float: right;
        }

        #webpush-custom-prompt-button1 {
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffffff), color-stop(1, #f6f6f6));
            background: -moz-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
            background: -webkit-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
            background: -o-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
            background: -ms-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
            background: linear-gradient(to bottom, #ffffff 5%, #f6f6f6 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f6f6f6', GradientType=0);
            background-color: #ffffff;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            border: 1px solid #dcdcdc;
            display: inline-block;
            color: #666666;
            font-size: 12px;
            padding: 4px 24px;
            margin-right: 6px;
            cursor: default;
        }

        #webpush-custom-prompt-button2 {
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #33bdef), color-stop(1, #019ad2));
            background: -moz-linear-gradient(top, #33bdef 5%, #019ad2 100%);
            background: -webkit-linear-gradient(top, #33bdef 5%, #019ad2 100%);
            background: -o-linear-gradient(top, #33bdef 5%, #019ad2 100%);
            background: -ms-linear-gradient(top, #33bdef 5%, #019ad2 100%);
            background: linear-gradient(to bottom, #33bdef 5%, #019ad2 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#33bdef', endColorstr='#019ad2', GradientType=0);
            background-color: #33bdef;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            border: 1px solid #057fd0;
            display: inline-block;
            color: #ffffff;
            font-size: 12px;
            padding: 4px 24px;
            cursor: default;
        }

        #webpush-notification-center-open.webpush-notification-center-position-left {
            left: 16px;
        }

        #webpush-notification-center-open.webpush-notification-center-position-right {
            right: 16px;
        }

        #webpush-notification-center {
            position: fixed;
            z-index: 9999999;
            font-family: 'Trebuchet MS', Helvetica, sans-serif;
            display: none;
            overflow-y: auto;
        }

        #webpush-notification-center.webpush-notification-center-layout-panel {
            top: 0;
            bottom: 0;
            width: 300px;
            max-width: 90%;
        }

        #webpush-notification-center.webpush-notification-center-layout-popup {
            top: 20px;
            height: 400px;
            width: 300px;
            max-width: 90%;
            margin-right: 20px;
            margin-left: 20px;
        }

        #webpush-notification-center.webpush-notification-center-position-left {
            left: 0;
        }

        #webpush-notification-center.webpush-notification-center-position-right {
            right: 0;
        }

        #webpush-notification-center.webpush-notification-center-color-light {
            background: #ffffff;
            box-shadow: 0px 0px 6px #888888;
            color: #666666;
        }

        #webpush-notification-center.webpush-notification-center-color-dark {
            background: #555555;
            box-shadow: 0px 0px 6px #888888;
            color: #ffffff;
        }

        #webpush-notification-center-header {
            height: 40px;
            border-bottom: 1px solid #d9d9d9;
            position: relative;
        }

        #webpush-notification-center-subscription {
            padding: 0 50px 0 8px;
        }

        #webpush-notification-center-subscription-switch-container {
            float: left;
            padding-top: 15px;
        }

        #webpush-notification-center-subscription-status {
            float: left;
            font-size: 12px;
            line-height: 40px;
            letter-spacing: 0.1em;
        }

        #webpush-notification-center-subscription .webpush-onoffswitch {
            display: inline-block;
            margin-right: 16px;
            margin-left: 8px;
        }

        #webpush-notification-center-icon {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 20px;
            height: 20px;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: 20px 20px;
        }

        #webpush-notification-center-title {
            font-size: 13px;
            line-height: 40px;
            letter-spacing: 0.1em;
            text-align: center;
        }

        #webpush-notification-center-close {
            position: absolute;
            top: 14px;
            right: 8px;
            height: 12px;
            width: 12px;
            font-size: 12px;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: 12px 12px;
            cursor: pointer;
        }

        #webpush-notification-center-list {
            overflow-x: hidden;
            overflow-y: auto;
            position: absolute;
            top: 41px;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .webpush-notification-center-item {
            padding: 8px 8px;
            position: relative;
            font-size: 12px;
            min-height: 48px;
            cursor: pointer;
        }

        .webpush-notification-center-color-light .webpush-notification-center-item {
            border-bottom: 1px solid #f3f3f3;
        }

        .webpush-notification-center-color-dark .webpush-notification-center-item {
            border-bottom: 1px solid #808080;
        }

        .webpush-notification-center-color-light .webpush-notification-center-item:hover {
            background-color: #f3f3f3;
        }

        .webpush-notification-center-color-dark .webpush-notification-center-item:hover {
            background-color: #808080;
        }

        .webpush-notification-center-item-image {
            width: 48px;
            height: 48px;
            float: left;
        }

        .webpush-notification-center-item-title {
            padding-left: 58px;
            font-weight: bold;
        }

        .webpush-notification-center-item-title p {
            margin: 0px;
        }

        .webpush-notification-center-item-text {
            padding-left: 58px;
            margin-top: 4px;
        }

        .webpush-notification-center-item-text p {
            margin: 0px;
        }

        .webpush-notification-center-item-date {
            padding-left: 58px;
            margin-top: 3px;
            font-size: 11px;
            color: #b7b7b7;
        }

        .webpush-notification-center-item-webinbox-card {
            padding: 0;
        }

        .webpush-notification-center-item-webinbox-card .webpush-notification-center-item-image {
            width: 100%;
            height: auto;
            float: none;
            margin: 0px;
            padding: 0px;
        }

        .webpush-notification-center-item-webinbox-card .webpush-notification-center-item-title {
            padding: 5px 7px;
            font-weight: bold;
        }

        .webpush-notification-center-item-webinbox-card .webpush-notification-center-item-text-container {
            padding: 0px 7px 5px 7px;
            margin: 0px;
        }

        .webpush-notification-center-item-webinbox-card .webpush-notification-center-item-text {
            padding: 5px 0px 0px 0px;
            margin-top: 0px;
        }

        .webpush-notification-center-item-webinbox-card .webpush-notification-center-item-date {
            display: none;
        }

        #webpush-notification-center-loader {
            text-align: center;
            padding: 8px;
            height: 15px;
        }

        #webpush-notification-center-title-loader {
            text-align: center;
            padding-top: 14px;
            height: 40px;
        }

        #webpush-notification-center-placeholder {
            font-size: 12px;
            line-height: 30px;
            padding: 5px 16px;
        }

        #webpush-notification-center-load-more {
            font-size: 12px;
            line-height: 30px;
            text-align: center;
            cursor: pointer;
        }

        .webpush-notification-center-color-light #webpush-notification-center-load-more {
            border-bottom: 1px solid #f3f3f3;
        }

        .webpush-notification-center-color-dark #webpush-notification-center-load-more {
            border-bottom: 1px solid #808080;
        }

        .webpush-notification-center-color-light #webpush-notification-center-load-more:hover {
            background-color: #f3f3f3;
        }

        .webpush-notification-center-color-dark #webpush-notification-center-load-more:hover {
            background-color: #808080;
        }

        #webpush-notification-center-open {
            position: fixed;
            z-index: 9999999;
            top: 20px;
            height: 60px;
            width: 60px;
            border-radius: 50%;
            cursor: pointer;
            text-align: center;
            line-height: 60px;
            background-size: 30px 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.16), 0 2px 4px rgba(0, 0, 0, 0.2);
            transition: 0.7s ease;
        }

        #webpush-notification-center-open:hover {
            box-shadow: 0 7px 14px rgba(0, 0, 0, 0.16), 0 5px 10px rgba(0, 0, 0, 0.2);
            transition: 0.7s ease;
            transform-origin: center;
        }

        #webpush-notification-center-open[badge-count]:after {
            position: absolute;
            right: -3px;
            top: -3px;
            content: attr(badge-count);
            font-size: 12px;
            padding: 5px;
            border-radius: 50%;
            line-height: 12px;
            color: #ffffff;
            background: #ed1c25;
            text-align: center;
            min-width: 12px;
            font-weight: bold;
        }

        #webpush-notification-center-open.webpush-notification-center-color-light {
            background-color: #1d87c8;
        }

        #webpush-notification-center-open.webpush-notification-center-color-light:hover {
            background-color: #2298e1;
        }

        #webpush-notification-center-open.webpush-notification-center-color-dark {
            background-color: #555555;
        }

        #webpush-notification-center-open.webpush-notification-center-color-dark:hover {
            background-color: #5a606e;
        }

        #webpush-notification-center-open.webpush-notification-center-color-custom {
            background-color: #1d87c8;
        }

        #webpush-notification-center-open.webpush-notification-center-color-custom:hover {
            background-color: #2298e1;
        }

        #webpush-local-notification-stack {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999999;
            margin-left: 20px;
        }

        .webpush-local-notification {
            background: #ffffff;
            max-width: 370px;
            width: 100%;
            min-width: 250px;
            box-shadow: 0px 0px 6px #888888;
            position: relative;
            -webkit-transition: opacity 0.2s ease-in-out;
            -moz-transition: opacity 0.2s ease-in-out;
            -ms-transition: opacity 0.2s ease-in-out;
            -o-transition: opacity 0.2s ease-in-out;
            transition: opacity 0.2s ease-in-out;
            font-family: 'Trebuchet MS', Helvetica, sans-serif;
            color: #666666;
            margin-bottom: 10px;
            min-height: 80px;
            cursor: default;
        }

        .webpush-local-notification-close {
            position: absolute;
            top: 8px;
            right: 8px;
            cursor: pointer;
        }

        .webpush-local-notification-image {
            width: 80px;
            height: 80px;
            float: left;
        }

        .webpush-local-notification-title {
            padding-left: 95px;
            padding-top: 10px;
            padding-right: 35px;
            font-size: 14px;
            line-height: 20px;
            color: #444444;
        }

        .webpush-local-notification-text {
            padding-left: 95px;
            padding-top: 8px;
            padding-right: 10px;
            padding-bottom: 10px;
            font-size: 13px;
            line-height: 18px;
        }

        .webpush-onoffswitch-container {
            line-height: 10px;
        }

        .webpush-onoffswitch {
            position: relative;
            width: 30px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
        }

        .webpush-onoffswitch-checkbox {
            display: none;
        }

        .webpush-onoffswitch-label {
            display: block;
            overflow: hidden;
            cursor: pointer;
            height: 10px;
            padding: 0;
            line-height: 10px;
            border-radius: 16px;
            background-color: rgba(158, 158, 158, 0.5);
        }

        .webpush-onoffswitch-label:before {
            content: '';
            display: block;
            width: 16px;
            margin: -3px;
            background-color: rgb(158, 158, 158);
            position: absolute;
            top: 0;
            bottom: 0;
            right: 18px;
            border-radius: 16px;
        }

        .webpush-onoffswitch-checkbox:checked+.webpush-onoffswitch-label {
            background-color: rgba(47, 169, 214, 0.5);
        }

        .webpush-onoffswitch-checkbox:checked+.webpush-onoffswitch-label .webpush-onoffswitch-inner {
            margin-left: 0;
        }

        .webpush-onoffswitch-checkbox:checked+.webpush-onoffswitch-label:before {
            right: 0;
            background-color: rgb(47, 169, 214);
            box-shadow: none;
        }

        .webpush-onoffswitch-tooltip {
            display: none;
            position: absolute;
            min-width: 50px;
            max-width: 200px;
            min-height: 16px;
            max-height: 200px;
            background: rgba(0, 0, 0, .8);
            color: #fff;
            padding: 8px;
            border-radius: 2px;
            z-index: 3000;
            line-height: 16px;
            font-size: 12px;
            opacity: 0.9;
            -webkit-transition: opacity 75ms linear;
            -moz-transition: opacity 75ms linear;
            -ms-transition: opacity 75ms linear;
            transition: opacity 75ms linear;
            top: 32px;
            left: 15px;
        }

        .webpush-reset {
            animation: none;
            animation-delay: 0s;
            animation-direction: normal;
            animation-duration: 0s;
            animation-fill-mode: none;
            animation-iteration-count: 1;
            animation-name: none;
            animation-play-state: running;
            animation-timing-function: ease;
            backface-visibility: visible;
            background: 0;
            background-attachment: scroll;
            background-clip: border-box;
            background-color: transparent;
            background-image: none;
            background-origin: padding-box;
            background-position: 0 0;
            background-position-x: 0;
            background-position-y: 0;
            background-repeat: repeat;
            background-size: auto auto;
            border: 0;
            border-style: none;
            border-width: medium;
            border-color: inherit;
            border-bottom: 0;
            border-bottom-color: inherit;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            border-bottom-style: none;
            border-bottom-width: medium;
            border-collapse: separate;
            border-image: none;
            border-left: 0;
            border-left-color: inherit;
            border-left-style: none;
            border-left-width: medium;
            border-radius: 0;
            border-right: 0;
            border-right-color: inherit;
            border-right-style: none;
            border-right-width: medium;
            border-spacing: 0;
            border-top: 0;
            border-top-color: inherit;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-top-style: none;
            border-top-width: medium;
            bottom: auto;
            box-shadow: none;
            box-sizing: content-box;
            caption-side: top;
            clear: none;
            clip: auto;
            color: inherit;
            columns: auto;
            column-count: auto;
            column-fill: balance;
            column-gap: normal;
            column-rule: medium none currentColor;
            column-rule-color: currentColor;
            column-rule-style: none;
            column-rule-width: 0;
            column-span: 1;
            column-width: auto;
            content: normal;
            counter-increment: none;
            counter-reset: none;
            cursor: auto;
            direction: ltr;
            display: inline;
            empty-cells: show;
            float: none;
            /*font: normal;*/
            font-family: inherit;
            font-size: medium;
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            height: auto;
            hyphens: none;
            left: auto;
            letter-spacing: normal;
            line-height: normal;
            list-style: none;
            list-style-image: none;
            list-style-position: outside;
            list-style-type: disc;
            margin: 0;
            margin-bottom: 0;
            margin-left: 0;
            margin-right: 0;
            margin-top: 0;
            max-height: none;
            max-width: none;
            min-height: 0;
            min-width: 0;
            opacity: 1;
            orphans: 0;
            outline: 0;
            outline-color: invert;
            outline-style: none;
            outline-width: medium;
            overflow: visible;
            overflow-x: visible;
            overflow-y: visible;
            padding: 0;
            padding-bottom: 0;
            padding-left: 0;
            padding-right: 0;
            padding-top: 0;
            page-break-after: auto;
            page-break-before: auto;
            page-break-inside: auto;
            perspective: none;
            perspective-origin: 50% 50%;
            position: static;
            right: auto;
            tab-size: 8;
            table-layout: auto;
            text-align: inherit;
            text-align-last: auto;
            text-decoration: none;
            text-decoration-line: none;
            text-decoration-style: solid;
            text-indent: 0;
            text-shadow: none;
            text-transform: none;
            top: auto;
            transform: none;
            transform-style: flat;
            transition: none;
            transition-delay: 0s;
            transition-duration: 0s;
            transition-property: none;
            transition-timing-function: ease;
            unicode-bidi: normal;
            vertical-align: baseline;
            visibility: visible;
            white-space: normal;
            widows: 0;
            width: auto;
            word-spacing: normal;
            z-index: auto;
        }

        .webpush-loader {
            display: inline-block;
            position: relative;
            vertical-align: middle;
            width: 48px;
            height: 16px;
        }

        .webpush-loader div {
            position: absolute;
            top: 3px;
            left: 21px;
            width: 4px;
            height: 4px;
            background-color: #666666;
            -webkit-border-radius: 2px;
            border-radius: 2px;
            background-clip: padding-box;
            -webkit-animation: growDot 1s linear .15s infinite;
            -moz-animation: growDot 1s linear .15s infinite;
            -ms-animation: growDot 1s linear .15s infinite;
            -o-animation: growDot 1s linear .15s infinite;
            animation: growDot 1s linear .15s infinite;
        }

        .webpush-loader div:before {
            content: '';
            position: absolute;
            top: 0;
            left: -15px;
            width: 4px;
            height: 4px;
            background-color: #666666;
            -webkit-border-radius: 2px;
            border-radius: 2px;
            background-clip: padding-box;
            -webkit-animation: growDot 1s linear 0s infinite;
            -moz-animation: growDot 1s linear 0s infinite;
            -ms-animation: growDot 1s linear 0s infinite;
            -o-animation: growDot 1s linear 0s infinite;
            animation: growDot 1s linear 0s infinite;
        }

        .webpush-loader div:after {
            content: '';
            position: absolute;
            top: 0;
            left: 15px;
            width: 4px;
            height: 4px;
            background-color: #666666;
            -webkit-border-radius: 2px;
            border-radius: 2px;
            background-clip: padding-box;
            -webkit-animation: growDot 1s linear .3s infinite;
            -moz-animation: growDot 1s linear .3s infinite;
            -ms-animation: growDot 1s linear .3s infinite;
            -o-animation: growDot 1s linear .3s infinite;
            animation: growDot 1s linear .3s infinite;
        }

        @-webkit-keyframes growDot {
            0% {
                -ms-filter: 'progid:DXImageTransform.Microsoft.Alpha(Opacity=70)';
                filter: alpha(opacity=70);
                opacity: 0.7;
                -webkit-box-shadow: 0px 0px 0px 0px #666666;
                box-shadow: 0px 0px 0px 0px #666666;
            }

            25% {
                -ms-filter: 'progid:DXImageTransform.Microsoft.Alpha(Opacity=100)';
                filter: alpha(opacity=100);
                opacity: 1;
                -webkit-box-shadow: 0px 0px 0px 2px #666666;
                box-shadow: 0px 0px 0px 2px #666666;
            }

            50% {
                -ms-filter: 'progid:DXImageTransform.Microsoft.Alpha(Opacity=70)';
                filter: alpha(opacity=70);
                opacity: 0.7;
                -webkit-box-shadow: 0px 0px 0px 0px #666666;
                box-shadow: 0px 0px 0px 0px #666666;
            }

            100% {
                -ms-filter: 'progid:DXImageTransform.Microsoft.Alpha(Opacity=60)';
                filter: alpha(opacity=60);
                opacity: 0.6;
                -webkit-box-shadow: 0px 0px 0px 0px #666666;
                box-shadow: 0px 0px 0px 0px #666666;
            }
        }

        @keyframes growDot {
            0% {
                -ms-filter: 'progid:DXImageTransform.Microsoft.Alpha(Opacity=70)';
                filter: alpha(opacity=70);
                opacity: 0.7;
                -webkit-box-shadow: 0px 0px 0px 0px #666666;
                box-shadow: 0px 0px 0px 0px #666666;
            }

            25% {
                -ms-filter: 'progid:DXImageTransform.Microsoft.Alpha(Opacity=100)';
                filter: alpha(opacity=100);
                opacity: 1;
                -webkit-box-shadow: 0px 0px 0px 2px #666666;
                box-shadow: 0px 0px 0px 2px #666666;
            }

            50% {
                -ms-filter: 'progid:DXImageTransform.Microsoft.Alpha(Opacity=70)';
                filter: alpha(opacity=70);
                opacity: 0.7;
                -webkit-box-shadow: 0px 0px 0px 0px #666666;
                box-shadow: 0px 0px 0px 0px #666666;
            }

            100% {
                -ms-filter: 'progid:DXImageTransform.Microsoft.Alpha(Opacity=60)';
                filter: alpha(opacity=60);
                opacity: 0.6;
                -webkit-box-shadow: 0px 0px 0px 0px #666666;
                box-shadow: 0px 0px 0px 0px #666666;
            }
        }

        .webpush-balloon {
            background-repeat: no-repeat;
            background-position: center center;
            background-size: 100% 100%;
        }

        .webpush-balloon-light,
        .webpush-balloon-dark,
        .webpush-balloon-custom {
            background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+Cjxzdmcgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDE1MCAxNTAiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgc3R5bGU9ImZpbGwtcnVsZTpldmVub2RkO2NsaXAtcnVsZTpldmVub2RkO3N0cm9rZS1saW5lam9pbjpyb3VuZDtzdHJva2UtbWl0ZXJsaW1pdDoxLjQxNDIxOyI+CiAgICA8ZyBpZD0iWE1MSURfNDZfIiB0cmFuc2Zvcm09Im1hdHJpeCgxLjEyOTEyLDAsMCwxLjEyOTEyLDQ3OS43ODgsLTI0Mi4yODIpIj4KICAgICAgICA8cGF0aCBkPSJNLTM1OCwzNDFDLTM1MSwzNDEgLTM0Ni4yLDMzNSAtMzQ2LjIsMzI4TC0zNzAuMywzMjhDLTM3MC4zLDMzNSAtMzY0LDM0MSAtMzU4LDM0MVoiIHN0eWxlPSJmaWxsOndoaXRlO2ZpbGwtcnVsZTpub256ZXJvOyIvPgogICAgPC9nPgogICAgPGcgaWQ9IlhNTElEXzQ3XyIgdHJhbnNmb3JtPSJtYXRyaXgoMS4xMjkxMiwwLDAsMS4xMjkxMiw0NzkuNzg4LC0yNDIuMjgyKSI+CiAgICAgICAgPHBhdGggZD0iTS0zMTguOSwzMDUuOEMtMzE4LjYsMzA1LjggLTMxOCwzMDUuNiAtMzE4LDMwNS4zTC0zMTgsMjczLjhDLTMxOCwyNTQuNyAtMzMyLDIzOC43IC0zNDksMjM0LjdMLTM0OSwyMjkuOEMtMzQ5LDIyNSAtMzUzLjEsMjIxIC0zNTgsMjIxQy0zNjIuOSwyMjEgLTM2NywyMjUgLTM2NywyMjkuOEwtMzY3LDIzNC42Qy0zODUsMjM4LjYgLTM5OCwyNTQuNiAtMzk4LDI3My43TC0zOTgsMzA1LjJDLTM5OCwzMDUuNSAtMzk3LjksMzA1LjcgLTM5Ny42LDMwNS43TC00MTAsMzE3TC00MTAsMzI0TC0zMDcsMzI0TC0zMDcsMzE3TC0zMTguOSwzMDUuOFoiIHN0eWxlPSJmaWxsOndoaXRlO2ZpbGwtcnVsZTpub256ZXJvOyIvPgogICAgPC9nPgo8L3N2Zz4K');
        }

        .webpush-clearfix {
            clear: both;
        }

        .webpush-swal2-title p {
            margin: 0;
        }
    </style>
    <style>
        @-webkit-keyframes webpush-swal2-show {
            0% {
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }

            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }

            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes webpush-swal2-show {
            0% {
                -webkit-transform: scale(.7);
                transform: scale(.7)
            }

            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }

            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @-webkit-keyframes webpush-swal2-hide {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }

            100% {
                -webkit-transform: scale(.5);
                transform: scale(.5);
                opacity: 0
            }
        }

        @keyframes webpush-swal2-hide {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }

            100% {
                -webkit-transform: scale(.5);
                transform: scale(.5);
                opacity: 0
            }
        }

        @-webkit-keyframes webpush-swal2-animate-success-line-tip {
            0% {
                top: 1.1875em;
                left: .0625em;
                width: 0
            }

            54% {
                top: 1.0625em;
                left: .125em;
                width: 0
            }

            70% {
                top: 2.1875em;
                left: -.375em;
                width: 3.125em
            }

            84% {
                top: 3em;
                left: 1.3125em;
                width: 1.0625em
            }

            100% {
                top: 2.8125em;
                left: .875em;
                width: 1.5625em
            }
        }

        @keyframes webpush-swal2-animate-success-line-tip {
            0% {
                top: 1.1875em;
                left: .0625em;
                width: 0
            }

            54% {
                top: 1.0625em;
                left: .125em;
                width: 0
            }

            70% {
                top: 2.1875em;
                left: -.375em;
                width: 3.125em
            }

            84% {
                top: 3em;
                left: 1.3125em;
                width: 1.0625em
            }

            100% {
                top: 2.8125em;
                left: .875em;
                width: 1.5625em
            }
        }

        @-webkit-keyframes webpush-swal2-animate-success-line-long {
            0% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            65% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            84% {
                top: 2.1875em;
                right: 0;
                width: 3.4375em
            }

            100% {
                top: 2.375em;
                right: .5em;
                width: 2.9375em
            }
        }

        @keyframes webpush-swal2-animate-success-line-long {
            0% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            65% {
                top: 3.375em;
                right: 2.875em;
                width: 0
            }

            84% {
                top: 2.1875em;
                right: 0;
                width: 3.4375em
            }

            100% {
                top: 2.375em;
                right: .5em;
                width: 2.9375em
            }
        }

        @-webkit-keyframes webpush-swal2-rotate-success-circular-line {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }

            100% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }

        @keyframes webpush-swal2-rotate-success-circular-line {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }

            100% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }

        @-webkit-keyframes webpush-swal2-animate-error-x-mark {
            0% {
                margin-top: 1.625em;
                -webkit-transform: scale(.4);
                transform: scale(.4);
                opacity: 0
            }

            50% {
                margin-top: 1.625em;
                -webkit-transform: scale(.4);
                transform: scale(.4);
                opacity: 0
            }

            80% {
                margin-top: -.375em;
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }

            100% {
                margin-top: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }
        }

        @keyframes webpush-swal2-animate-error-x-mark {
            0% {
                margin-top: 1.625em;
                -webkit-transform: scale(.4);
                transform: scale(.4);
                opacity: 0
            }

            50% {
                margin-top: 1.625em;
                -webkit-transform: scale(.4);
                transform: scale(.4);
                opacity: 0
            }

            80% {
                margin-top: -.375em;
                -webkit-transform: scale(1.15);
                transform: scale(1.15)
            }

            100% {
                margin-top: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 1
            }
        }

        @-webkit-keyframes webpush-swal2-animate-error-icon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }

            100% {
                -webkit-transform: rotateX(0);
                transform: rotateX(0);
                opacity: 1
            }
        }

        @keyframes webpush-swal2-animate-error-icon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }

            100% {
                -webkit-transform: rotateX(0);
                transform: rotateX(0);
                opacity: 1
            }
        }

        body.webpush-swal2-toast-shown.webpush-swal2-has-input>.webpush-swal2-container>.webpush-swal2-toast {
            flex-direction: column;
            align-items: stretch
        }

        body.webpush-swal2-toast-shown.webpush-swal2-has-input>.webpush-swal2-container>.webpush-swal2-toast .webpush-swal2-actions {
            flex: 1;
            align-self: stretch;
            justify-content: flex-end;
            height: 2.2em
        }

        body.webpush-swal2-toast-shown.webpush-swal2-has-input>.webpush-swal2-container>.webpush-swal2-toast .webpush-swal2-loading {
            justify-content: center
        }

        body.webpush-swal2-toast-shown.webpush-swal2-has-input>.webpush-swal2-container>.webpush-swal2-toast .webpush-swal2-input {
            height: 2em;
            margin: .3125em auto;
            font-size: 1em
        }

        body.webpush-swal2-toast-shown.webpush-swal2-has-input>.webpush-swal2-container>.webpush-swal2-toast .webpush-swal2-validationerror {
            font-size: 1em
        }

        body.webpush-swal2-toast-shown>.webpush-swal2-container {
            position: fixed;
            background-color: transparent
        }

        body.webpush-swal2-toast-shown>.webpush-swal2-container.webpush-swal2-shown {
            background-color: transparent
        }

        body.webpush-swal2-toast-shown>.webpush-swal2-container.webpush-swal2-top {
            top: 0;
            right: auto;
            bottom: auto;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        body.webpush-swal2-toast-shown>.webpush-swal2-container.webpush-swal2-top-end,
        body.webpush-swal2-toast-shown>.webpush-swal2-container.webpush-swal2-top-right {
            top: 0;
            right: 0;
            bottom: auto;
            left: auto
        }

        body.webpush-swal2-toast-shown>.webpush-swal2-container.webpush-swal2-top-left,
        body.webpush-swal2-toast-shown>.webpush-swal2-container.webpush-swal2-top-start {
            top: 0;
            right: auto;
            bottom: auto;
            left: 0
        }

        body.webpush-swal2-toast-shown>.webpush-swal2-container.webpush-swal2-center-left,
        body.webpush-swal2-toast-shown>.webpush-swal2-container.webpush-swal2-center-start {
            top: 50%;
            right: auto;
            bottom: auto;
            left: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        body.webpush-swal2-toast-shown>.webpush-swal2-container.webpush-swal2-center {
            top: 50%;
            right: auto;
            bottom: auto;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        body.webpush-swal2-toast-shown>.webpush-swal2-container.webpush-swal2-center-end,
        body.webpush-swal2-toast-shown>.webpush-swal2-container.webpush-swal2-center-right {
            top: 50%;
            right: 0;
            bottom: auto;
            left: auto;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        body.webpush-swal2-toast-shown>.webpush-swal2-container.webpush-swal2-bottom-left,
        body.webpush-swal2-toast-shown>.webpush-swal2-container.webpush-swal2-bottom-start {
            top: auto;
            right: auto;
            bottom: 0;
            left: 0
        }

        body.webpush-swal2-toast-shown>.webpush-swal2-container.webpush-swal2-bottom {
            top: auto;
            right: auto;
            bottom: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        body.webpush-swal2-toast-shown>.webpush-swal2-container.webpush-swal2-bottom-end,
        body.webpush-swal2-toast-shown>.webpush-swal2-container.webpush-swal2-bottom-right {
            top: auto;
            right: 0;
            bottom: 0;
            left: auto
        }

        .webpush-swal2-popup.webpush-swal2-toast {
            flex-direction: row;
            align-items: center;
            width: auto;
            padding: .625em;
            box-shadow: 0 0 .625em #d9d9d9;
            overflow-y: hidden
        }

        .webpush-swal2-popup.webpush-swal2-toast .webpush-swal2-header {
            flex-direction: row
        }

        .webpush-swal2-popup.webpush-swal2-toast .webpush-swal2-title {
            justify-content: flex-start;
            margin: 0 .6em;
            font-size: 1em
        }

        .webpush-swal2-popup.webpush-swal2-toast .webpush-swal2-close {
            position: initial
        }

        .webpush-swal2-popup.webpush-swal2-toast .webpush-swal2-content {
            justify-content: flex-start;
            font-size: 1em
        }

        .webpush-swal2-popup.webpush-swal2-toast .webpush-swal2-icon {
            width: 2em;
            min-width: 2em;
            height: 2em;
            margin: 0
        }

        .webpush-swal2-popup.webpush-swal2-toast .webpush-swal2-icon-text {
            font-size: 2em;
            font-weight: 700;
            line-height: 1em
        }

        .webpush-swal2-popup.webpush-swal2-toast .webpush-swal2-icon.webpush-swal2-success .webpush-swal2-success-ring {
            width: 2em;
            height: 2em
        }

        .webpush-swal2-popup.webpush-swal2-toast .webpush-swal2-icon.webpush-swal2-error [class^=webpush-swal2-x-mark-line] {
            top: .875em;
            width: 1.375em
        }

        .webpush-swal2-popup.webpush-swal2-toast .webpush-swal2-icon.webpush-swal2-error [class^=webpush-swal2-x-mark-line][class$=left] {
            left: .3125em
        }

        .webpush-swal2-popup.webpush-swal2-toast .webpush-swal2-icon.webpush-swal2-error [class^=webpush-swal2-x-mark-line][class$=right] {
            right: .3125em
        }

        .webpush-swal2-popup.webpush-swal2-toast .webpush-swal2-actions {
            height: auto;
            margin: 0 .3125em
        }

        .webpush-swal2-popup.webpush-swal2-toast .webpush-swal2-styled {
            margin: 0 .3125em;
            padding: .3125em .625em;
            font-size: 1em
        }

        .webpush-swal2-popup.webpush-swal2-toast .webpush-swal2-styled:focus {
            box-shadow: 0 0 0 .0625em #fff, 0 0 0 .125em rgba(50, 100, 150, .4)
        }

        .webpush-swal2-popup.webpush-swal2-toast .webpush-swal2-success {
            border-color: #a5dc86
        }

        .webpush-swal2-popup.webpush-swal2-toast .webpush-swal2-success [class^=webpush-swal2-success-circular-line] {
            position: absolute;
            width: 2em;
            height: 2.8125em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            border-radius: 50%
        }

        .webpush-swal2-popup.webpush-swal2-toast .webpush-swal2-success [class^=webpush-swal2-success-circular-line][class$=left] {
            top: -.25em;
            left: -.9375em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 2em 2em;
            transform-origin: 2em 2em;
            border-radius: 4em 0 0 4em
        }

        .webpush-swal2-popup.webpush-swal2-toast .webpush-swal2-success [class^=webpush-swal2-success-circular-line][class$=right] {
            top: -.25em;
            left: .9375em;
            -webkit-transform-origin: 0 2em;
            transform-origin: 0 2em;
            border-radius: 0 4em 4em 0
        }

        .webpush-swal2-popup.webpush-swal2-toast .webpush-swal2-success .webpush-swal2-success-ring {
            width: 2em;
            height: 2em
        }

        .webpush-swal2-popup.webpush-swal2-toast .webpush-swal2-success .webpush-swal2-success-fix {
            top: 0;
            left: .4375em;
            width: .4375em;
            height: 2.6875em
        }

        .webpush-swal2-popup.webpush-swal2-toast .webpush-swal2-success [class^=webpush-swal2-success-line] {
            height: .3125em
        }

        .webpush-swal2-popup.webpush-swal2-toast .webpush-swal2-success [class^=webpush-swal2-success-line][class$=tip] {
            top: 1.125em;
            left: .1875em;
            width: .75em
        }

        .webpush-swal2-popup.webpush-swal2-toast .webpush-swal2-success [class^=webpush-swal2-success-line][class$=long] {
            top: .9375em;
            right: .1875em;
            width: 1.375em
        }

        .webpush-swal2-popup.webpush-swal2-toast.webpush-swal2-show {
            -webkit-animation: showSweetToast .5s;
            animation: showSweetToast .5s
        }

        .webpush-swal2-popup.webpush-swal2-toast.webpush-swal2-hide {
            -webkit-animation: hideSweetToast .2s forwards;
            animation: hideSweetToast .2s forwards
        }

        .webpush-swal2-popup.webpush-swal2-toast .webpush-swal2-animate-success-icon .webpush-swal2-success-line-tip {
            -webkit-animation: animate-toast-success-tip .75s;
            animation: animate-toast-success-tip .75s
        }

        .webpush-swal2-popup.webpush-swal2-toast .webpush-swal2-animate-success-icon .webpush-swal2-success-line-long {
            -webkit-animation: animate-toast-success-long .75s;
            animation: animate-toast-success-long .75s
        }

        @-webkit-keyframes showSweetToast {
            0% {
                -webkit-transform: translateY(-.625em) rotateZ(2deg);
                transform: translateY(-.625em) rotateZ(2deg);
                opacity: 0
            }

            33% {
                -webkit-transform: translateY(0) rotateZ(-2deg);
                transform: translateY(0) rotateZ(-2deg);
                opacity: .5
            }

            66% {
                -webkit-transform: translateY(.3125em) rotateZ(2deg);
                transform: translateY(.3125em) rotateZ(2deg);
                opacity: .7
            }

            100% {
                -webkit-transform: translateY(0) rotateZ(0);
                transform: translateY(0) rotateZ(0);
                opacity: 1
            }
        }

        @keyframes showSweetToast {
            0% {
                -webkit-transform: translateY(-.625em) rotateZ(2deg);
                transform: translateY(-.625em) rotateZ(2deg);
                opacity: 0
            }

            33% {
                -webkit-transform: translateY(0) rotateZ(-2deg);
                transform: translateY(0) rotateZ(-2deg);
                opacity: .5
            }

            66% {
                -webkit-transform: translateY(.3125em) rotateZ(2deg);
                transform: translateY(.3125em) rotateZ(2deg);
                opacity: .7
            }

            100% {
                -webkit-transform: translateY(0) rotateZ(0);
                transform: translateY(0) rotateZ(0);
                opacity: 1
            }
        }

        @-webkit-keyframes hideSweetToast {
            0% {
                opacity: 1
            }

            33% {
                opacity: .5
            }

            100% {
                -webkit-transform: rotateZ(1deg);
                transform: rotateZ(1deg);
                opacity: 0
            }
        }

        @keyframes hideSweetToast {
            0% {
                opacity: 1
            }

            33% {
                opacity: .5
            }

            100% {
                -webkit-transform: rotateZ(1deg);
                transform: rotateZ(1deg);
                opacity: 0
            }
        }

        @-webkit-keyframes animate-toast-success-tip {
            0% {
                top: .5625em;
                left: .0625em;
                width: 0
            }

            54% {
                top: .125em;
                left: .125em;
                width: 0
            }

            70% {
                top: .625em;
                left: -.25em;
                width: 1.625em
            }

            84% {
                top: 1.0625em;
                left: .75em;
                width: .5em
            }

            100% {
                top: 1.125em;
                left: .1875em;
                width: .75em
            }
        }

        @keyframes animate-toast-success-tip {
            0% {
                top: .5625em;
                left: .0625em;
                width: 0
            }

            54% {
                top: .125em;
                left: .125em;
                width: 0
            }

            70% {
                top: .625em;
                left: -.25em;
                width: 1.625em
            }

            84% {
                top: 1.0625em;
                left: .75em;
                width: .5em
            }

            100% {
                top: 1.125em;
                left: .1875em;
                width: .75em
            }
        }

        @-webkit-keyframes animate-toast-success-long {
            0% {
                top: 1.625em;
                right: 1.375em;
                width: 0
            }

            65% {
                top: 1.25em;
                right: .9375em;
                width: 0
            }

            84% {
                top: .9375em;
                right: 0;
                width: 1.125em
            }

            100% {
                top: .9375em;
                right: .1875em;
                width: 1.375em
            }
        }

        @keyframes animate-toast-success-long {
            0% {
                top: 1.625em;
                right: 1.375em;
                width: 0
            }

            65% {
                top: 1.25em;
                right: .9375em;
                width: 0
            }

            84% {
                top: .9375em;
                right: 0;
                width: 1.125em
            }

            100% {
                top: .9375em;
                right: .1875em;
                width: 1.375em
            }
        }

        body.webpush-swal2-shown:not(.webpush-swal2-no-backdrop):not(.webpush-swal2-toast-shown),
        html.webpush-swal2-shown:not(.webpush-swal2-no-backdrop):not(.webpush-swal2-toast-shown) {
            height: auto;
            overflow-y: hidden
        }

        body.webpush-swal2-no-backdrop .webpush-swal2-shown {
            top: auto;
            right: auto;
            bottom: auto;
            left: auto;
            background-color: transparent
        }

        body.webpush-swal2-no-backdrop .webpush-swal2-shown>.webpush-swal2-modal {
            box-shadow: 0 0 10px rgba(0, 0, 0, .4)
        }

        body.webpush-swal2-no-backdrop .webpush-swal2-shown.webpush-swal2-top {
            top: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        body.webpush-swal2-no-backdrop .webpush-swal2-shown.webpush-swal2-top-left,
        body.webpush-swal2-no-backdrop .webpush-swal2-shown.webpush-swal2-top-start {
            top: 0;
            left: 0
        }

        body.webpush-swal2-no-backdrop .webpush-swal2-shown.webpush-swal2-top-end,
        body.webpush-swal2-no-backdrop .webpush-swal2-shown.webpush-swal2-top-right {
            top: 0;
            right: 0
        }

        body.webpush-swal2-no-backdrop .webpush-swal2-shown.webpush-swal2-center {
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        body.webpush-swal2-no-backdrop .webpush-swal2-shown.webpush-swal2-center-left,
        body.webpush-swal2-no-backdrop .webpush-swal2-shown.webpush-swal2-center-start {
            top: 50%;
            left: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        body.webpush-swal2-no-backdrop .webpush-swal2-shown.webpush-swal2-center-end,
        body.webpush-swal2-no-backdrop .webpush-swal2-shown.webpush-swal2-center-right {
            top: 50%;
            right: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        body.webpush-swal2-no-backdrop .webpush-swal2-shown.webpush-swal2-bottom {
            bottom: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        body.webpush-swal2-no-backdrop .webpush-swal2-shown.webpush-swal2-bottom-left,
        body.webpush-swal2-no-backdrop .webpush-swal2-shown.webpush-swal2-bottom-start {
            bottom: 0;
            left: 0
        }

        body.webpush-swal2-no-backdrop .webpush-swal2-shown.webpush-swal2-bottom-end,
        body.webpush-swal2-no-backdrop .webpush-swal2-shown.webpush-swal2-bottom-right {
            right: 0;
            bottom: 0
        }

        .webpush-swal2-container {
            display: flex;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            padding: 10px;
            background-color: transparent;
            z-index: 1060;
            overflow-x: hidden;
            -webkit-overflow-scrolling: touch
        }

        .webpush-swal2-container.webpush-swal2-top {
            align-items: flex-start
        }

        .webpush-swal2-container.webpush-swal2-top-left,
        .webpush-swal2-container.webpush-swal2-top-start {
            align-items: flex-start;
            justify-content: flex-start
        }

        .webpush-swal2-container.webpush-swal2-top-end,
        .webpush-swal2-container.webpush-swal2-top-right {
            align-items: flex-start;
            justify-content: flex-end
        }

        .webpush-swal2-container.webpush-swal2-center {
            align-items: center
        }

        .webpush-swal2-container.webpush-swal2-center-left,
        .webpush-swal2-container.webpush-swal2-center-start {
            align-items: center;
            justify-content: flex-start
        }

        .webpush-swal2-container.webpush-swal2-center-end,
        .webpush-swal2-container.webpush-swal2-center-right {
            align-items: center;
            justify-content: flex-end
        }

        .webpush-swal2-container.webpush-swal2-bottom {
            align-items: flex-end
        }

        .webpush-swal2-container.webpush-swal2-bottom-left,
        .webpush-swal2-container.webpush-swal2-bottom-start {
            align-items: flex-end;
            justify-content: flex-start
        }

        .webpush-swal2-container.webpush-swal2-bottom-end,
        .webpush-swal2-container.webpush-swal2-bottom-right {
            align-items: flex-end;
            justify-content: flex-end
        }

        .webpush-swal2-container.webpush-swal2-grow-fullscreen>.webpush-swal2-modal {
            display: flex !important;
            flex: 1;
            align-self: stretch;
            justify-content: center
        }

        .webpush-swal2-container.webpush-swal2-grow-row>.webpush-swal2-modal {
            display: flex !important;
            flex: 1;
            align-content: center;
            justify-content: center
        }

        .webpush-swal2-container.webpush-swal2-grow-column {
            flex: 1;
            flex-direction: column
        }

        .webpush-swal2-container.webpush-swal2-grow-column.webpush-swal2-bottom,
        .webpush-swal2-container.webpush-swal2-grow-column.webpush-swal2-center,
        .webpush-swal2-container.webpush-swal2-grow-column.webpush-swal2-top {
            align-items: center
        }

        .webpush-swal2-container.webpush-swal2-grow-column.webpush-swal2-bottom-left,
        .webpush-swal2-container.webpush-swal2-grow-column.webpush-swal2-bottom-start,
        .webpush-swal2-container.webpush-swal2-grow-column.webpush-swal2-center-left,
        .webpush-swal2-container.webpush-swal2-grow-column.webpush-swal2-center-start,
        .webpush-swal2-container.webpush-swal2-grow-column.webpush-swal2-top-left,
        .webpush-swal2-container.webpush-swal2-grow-column.webpush-swal2-top-start {
            align-items: flex-start
        }

        .webpush-swal2-container.webpush-swal2-grow-column.webpush-swal2-bottom-end,
        .webpush-swal2-container.webpush-swal2-grow-column.webpush-swal2-bottom-right,
        .webpush-swal2-container.webpush-swal2-grow-column.webpush-swal2-center-end,
        .webpush-swal2-container.webpush-swal2-grow-column.webpush-swal2-center-right,
        .webpush-swal2-container.webpush-swal2-grow-column.webpush-swal2-top-end,
        .webpush-swal2-container.webpush-swal2-grow-column.webpush-swal2-top-right {
            align-items: flex-end
        }

        .webpush-swal2-container.webpush-swal2-grow-column>.webpush-swal2-modal {
            display: flex !important;
            flex: 1;
            align-content: center;
            justify-content: center
        }

        .webpush-swal2-container:not(.webpush-swal2-top):not(.webpush-swal2-top-start):not(.webpush-swal2-top-end):not(.webpush-swal2-top-left):not(.webpush-swal2-top-right):not(.webpush-swal2-center-start):not(.webpush-swal2-center-end):not(.webpush-swal2-center-left):not(.webpush-swal2-center-right):not(.webpush-swal2-bottom):not(.webpush-swal2-bottom-start):not(.webpush-swal2-bottom-end):not(.webpush-swal2-bottom-left):not(.webpush-swal2-bottom-right)>.webpush-swal2-modal {
            margin: auto
        }

        @media all and (-ms-high-contrast:none),
        (-ms-high-contrast:active) {
            .webpush-swal2-container .webpush-swal2-modal {
                margin: 0 !important
            }
        }

        .webpush-swal2-container.webpush-swal2-fade {
            transition: background-color .1s
        }

        .webpush-swal2-container.webpush-swal2-shown {
            background-color: rgba(0, 0, 0, .4)
        }

        .webpush-swal2-popup {
            display: none;
            position: relative;
            flex-direction: column;
            justify-content: center;
            width: 32em;
            max-width: 100%;
            padding: 1.25em;
            border-radius: .3125em;
            background: #fff;
            font-family: inherit;
            font-size: 1rem;
            box-sizing: border-box
        }

        .webpush-swal2-popup:focus {
            outline: 0
        }

        .webpush-swal2-popup.webpush-swal2-loading {
            overflow-y: hidden
        }

        .webpush-swal2-popup .webpush-swal2-header {
            display: flex;
            flex-direction: column;
            align-items: center
        }

        .webpush-swal2-popup .webpush-swal2-title {
            display: block;
            position: relative;
            max-width: 100%;
            margin: 0 0 .4em;
            padding: 0;
            color: #595959;
            font-size: 1.875em;
            font-weight: 600;
            text-align: center;
            text-transform: none;
            word-wrap: break-word
        }

        .webpush-swal2-popup .webpush-swal2-actions {
            align-items: center;
            justify-content: center;
            margin: 1.25em auto 0
        }

        .webpush-swal2-popup .webpush-swal2-actions:not(.webpush-swal2-loading) .webpush-swal2-styled[disabled] {
            opacity: .4
        }

        .webpush-swal2-popup .webpush-swal2-actions:not(.webpush-swal2-loading) .webpush-swal2-styled:hover {
            background-image: linear-gradient(rgba(0, 0, 0, .1), rgba(0, 0, 0, .1))
        }

        .webpush-swal2-popup .webpush-swal2-actions:not(.webpush-swal2-loading) .webpush-swal2-styled:active {
            background-image: linear-gradient(rgba(0, 0, 0, .2), rgba(0, 0, 0, .2))
        }

        .webpush-swal2-popup .webpush-swal2-actions.webpush-swal2-loading .webpush-swal2-styled.webpush-swal2-confirm {
            width: 2.5em;
            height: 2.5em;
            margin: .46875em;
            padding: 0;
            border: .25em solid transparent;
            border-radius: 100%;
            border-color: transparent;
            background-color: transparent !important;
            color: transparent;
            cursor: default;
            box-sizing: border-box;
            -webkit-animation: webpush-swal2-rotate-loading 1.5s linear 0s infinite normal;
            animation: webpush-swal2-rotate-loading 1.5s linear 0s infinite normal;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .webpush-swal2-popup .webpush-swal2-actions.webpush-swal2-loading .webpush-swal2-styled.webpush-swal2-cancel {
            margin-right: 30px;
            margin-left: 30px
        }

        .webpush-swal2-popup .webpush-swal2-actions.webpush-swal2-loading :not(.webpush-swal2-styled).webpush-swal2-confirm::after {
            display: inline-block;
            width: 15px;
            height: 15px;
            margin-left: 5px;
            border: 3px solid #999;
            border-radius: 50%;
            border-right-color: transparent;
            box-shadow: 1px 1px 1px #fff;
            content: '';
            -webkit-animation: webpush-swal2-rotate-loading 1.5s linear 0s infinite normal;
            animation: webpush-swal2-rotate-loading 1.5s linear 0s infinite normal
        }

        .webpush-swal2-popup .webpush-swal2-styled {
            min-width: auto;
            height: auto;
            margin: 0 .3125em;
            padding: .625em 2em;
            font-weight: 500;
            box-shadow: none
        }

        .webpush-swal2-popup .webpush-swal2-styled:not([disabled]) {
            cursor: pointer
        }

        .webpush-swal2-popup .webpush-swal2-styled.webpush-swal2-confirm {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #3085d6;
            color: #fff;
            font-size: 1.0625em
        }

        .webpush-swal2-popup .webpush-swal2-styled.webpush-swal2-cancel {
            border: 0;
            border-radius: .25em;
            background: initial;
            background-color: #aaa;
            color: #fff;
            font-size: 1.0625em
        }

        .webpush-swal2-popup .webpush-swal2-styled:focus {
            outline: 0;
            box-shadow: 0 0 0 2px #fff, 0 0 0 4px rgba(50, 100, 150, .4)
        }

        .webpush-swal2-popup .webpush-swal2-styled::-moz-focus-inner {
            border: 0
        }

        .webpush-swal2-popup .webpush-swal2-footer {
            justify-content: center;
            margin: 1.25em 0 0;
            padding-top: 1em;
            border-top: 1px solid #eee;
            color: #545454;
            font-size: 1em
        }

        .webpush-swal2-popup .webpush-swal2-image {
            max-width: 100%;
            margin: 1.25em auto
        }

        .webpush-swal2-popup .webpush-swal2-close {
            min-width: auto;
            height: auto;
            position: absolute;
            top: 0;
            right: 0;
            justify-content: center;
            width: 1.2em;
            height: 1.2em;
            padding: 0;
            transition: color .1s ease-out;
            border: none;
            border-radius: 0;
            background: 0 0;
            color: #ccc;
            font-family: serif;
            font-size: 2.5em;
            line-height: 1.2;
            cursor: pointer;
            overflow: hidden
        }

        .webpush-swal2-popup .webpush-swal2-close:hover {
            -webkit-transform: none;
            transform: none;
            color: #f27474
        }

        .webpush-swal2-popup>.webpush-swal2-checkbox,
        .webpush-swal2-popup>.webpush-swal2-file,
        .webpush-swal2-popup>.webpush-swal2-input,
        .webpush-swal2-popup>.webpush-swal2-radio,
        .webpush-swal2-popup>.webpush-swal2-select,
        .webpush-swal2-popup>.webpush-swal2-textarea {
            display: none
        }

        .webpush-swal2-popup .webpush-swal2-content {
            justify-content: center;
            margin: 0;
            padding: 0;
            color: #545454;
            font-size: 1.125em;
            font-weight: 300;
            line-height: normal;
            word-wrap: break-word
        }

        .webpush-swal2-popup #webpush-swal2-content {
            text-align: center
        }

        .webpush-swal2-popup .webpush-swal2-checkbox,
        .webpush-swal2-popup .webpush-swal2-file,
        .webpush-swal2-popup .webpush-swal2-input,
        .webpush-swal2-popup .webpush-swal2-radio,
        .webpush-swal2-popup .webpush-swal2-select,
        .webpush-swal2-popup .webpush-swal2-textarea {
            margin: 1em auto
        }

        .webpush-swal2-popup .webpush-swal2-file,
        .webpush-swal2-popup .webpush-swal2-input,
        .webpush-swal2-popup .webpush-swal2-textarea {
            width: 100%;
            transition: border-color .3s, box-shadow .3s;
            border: 1px solid #d9d9d9;
            border-radius: .1875em;
            font-size: 1.125em;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06);
            box-sizing: border-box
        }

        .webpush-swal2-popup .webpush-swal2-file.webpush-swal2-inputerror,
        .webpush-swal2-popup .webpush-swal2-input.webpush-swal2-inputerror,
        .webpush-swal2-popup .webpush-swal2-textarea.webpush-swal2-inputerror {
            border-color: #f27474 !important;
            box-shadow: 0 0 2px #f27474 !important
        }

        .webpush-swal2-popup .webpush-swal2-file:focus,
        .webpush-swal2-popup .webpush-swal2-input:focus,
        .webpush-swal2-popup .webpush-swal2-textarea:focus {
            border: 1px solid #b4dbed;
            outline: 0;
            box-shadow: 0 0 3px #c4e6f5
        }

        .webpush-swal2-popup .webpush-swal2-file::-webkit-input-placeholder,
        .webpush-swal2-popup .webpush-swal2-input::-webkit-input-placeholder,
        .webpush-swal2-popup .webpush-swal2-textarea::-webkit-input-placeholder {
            color: #ccc
        }

        .webpush-swal2-popup .webpush-swal2-file:-ms-input-placeholder,
        .webpush-swal2-popup .webpush-swal2-input:-ms-input-placeholder,
        .webpush-swal2-popup .webpush-swal2-textarea:-ms-input-placeholder {
            color: #ccc
        }

        .webpush-swal2-popup .webpush-swal2-file::-ms-input-placeholder,
        .webpush-swal2-popup .webpush-swal2-input::-ms-input-placeholder,
        .webpush-swal2-popup .webpush-swal2-textarea::-ms-input-placeholder {
            color: #ccc
        }

        .webpush-swal2-popup .webpush-swal2-file::placeholder,
        .webpush-swal2-popup .webpush-swal2-input::placeholder,
        .webpush-swal2-popup .webpush-swal2-textarea::placeholder {
            color: #ccc
        }

        .webpush-swal2-popup .webpush-swal2-range input {
            width: 80%
        }

        .webpush-swal2-popup .webpush-swal2-range output {
            width: 20%;
            font-weight: 600;
            text-align: center
        }

        .webpush-swal2-popup .webpush-swal2-range input,
        .webpush-swal2-popup .webpush-swal2-range output {
            height: 2.625em;
            margin: 1em auto;
            padding: 0;
            font-size: 1.125em;
            line-height: 2.625em
        }

        .webpush-swal2-popup .webpush-swal2-input {
            height: 2.625em;
            padding: .75em
        }

        .webpush-swal2-popup .webpush-swal2-input[type=number] {
            max-width: 10em
        }

        .webpush-swal2-popup .webpush-swal2-file {
            font-size: 1.125em
        }

        .webpush-swal2-popup .webpush-swal2-textarea {
            height: 6.75em;
            padding: .75em
        }

        .webpush-swal2-popup .webpush-swal2-select {
            min-width: 50%;
            max-width: 100%;
            padding: .375em .625em;
            color: #545454;
            font-size: 1.125em
        }

        .webpush-swal2-popup .webpush-swal2-checkbox,
        .webpush-swal2-popup .webpush-swal2-radio {
            align-items: center;
            justify-content: center
        }

        .webpush-swal2-popup .webpush-swal2-checkbox label,
        .webpush-swal2-popup .webpush-swal2-radio label {
            margin: 0 .6em;
            font-size: 1.125em
        }

        .webpush-swal2-popup .webpush-swal2-checkbox input,
        .webpush-swal2-popup .webpush-swal2-radio input {
            margin: 0 .4em
        }

        .webpush-swal2-popup .webpush-swal2-validationerror {
            display: none;
            align-items: center;
            justify-content: center;
            padding: .625em;
            background: #f0f0f0;
            color: #666;
            font-size: 1em;
            font-weight: 300;
            overflow: hidden
        }

        .webpush-swal2-popup .webpush-swal2-validationerror::before {
            display: inline-block;
            width: 1.5em;
            height: 1.5em;
            margin: 0 .625em;
            border-radius: 50%;
            background-color: #f27474;
            color: #fff;
            font-weight: 600;
            line-height: 1.5em;
            text-align: center;
            content: '!';
            zoom: normal
        }

        @supports (-ms-accelerator:true) {
            .webpush-swal2-range input {
                width: 100% !important
            }

            .webpush-swal2-range output {
                display: none
            }
        }

        @media all and (-ms-high-contrast:none),
        (-ms-high-contrast:active) {
            .webpush-swal2-range input {
                width: 100% !important
            }

            .webpush-swal2-range output {
                display: none
            }
        }

        @-moz-document url-prefix() {
            .webpush-swal2-close:focus {
                outline: 2px solid rgba(50, 100, 150, .4)
            }
        }

        .webpush-swal2-icon {
            position: relative;
            justify-content: center;
            width: 5em;
            height: 5em;
            margin: 1.25em auto 1.875em;
            border: .25em solid transparent;
            border-radius: 50%;
            line-height: 5em;
            cursor: default;
            box-sizing: content-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            zoom: normal
        }

        .webpush-swal2-icon-text {
            font-size: 3.75em
        }

        .webpush-swal2-icon.webpush-swal2-error {
            border-color: #f27474
        }

        .webpush-swal2-icon.webpush-swal2-error .webpush-swal2-x-mark {
            position: relative;
            flex-grow: 1
        }

        .webpush-swal2-icon.webpush-swal2-error [class^=webpush-swal2-x-mark-line] {
            display: block;
            position: absolute;
            top: 2.3125em;
            width: 2.9375em;
            height: .3125em;
            border-radius: .125em;
            background-color: #f27474
        }

        .webpush-swal2-icon.webpush-swal2-error [class^=webpush-swal2-x-mark-line][class$=left] {
            left: 1.0625em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg)
        }

        .webpush-swal2-icon.webpush-swal2-error [class^=webpush-swal2-x-mark-line][class$=right] {
            right: 1em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        .webpush-swal2-icon.webpush-swal2-warning {
            border-color: #facea8;
            color: #f8bb86
        }

        .webpush-swal2-icon.webpush-swal2-info {
            border-color: #9de0f6;
            color: #3fc3ee
        }

        .webpush-swal2-icon.webpush-swal2-question {
            border-color: #c9dae1;
            color: #87adbd
        }

        .webpush-swal2-icon.webpush-swal2-success {
            border-color: #a5dc86
        }

        .webpush-swal2-icon.webpush-swal2-success [class^=webpush-swal2-success-circular-line] {
            position: absolute;
            width: 3.75em;
            height: 7.5em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            border-radius: 50%
        }

        .webpush-swal2-icon.webpush-swal2-success [class^=webpush-swal2-success-circular-line][class$=left] {
            top: -.4375em;
            left: -2.0635em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 3.75em 3.75em;
            transform-origin: 3.75em 3.75em;
            border-radius: 7.5em 0 0 7.5em
        }

        .webpush-swal2-icon.webpush-swal2-success [class^=webpush-swal2-success-circular-line][class$=right] {
            top: -.6875em;
            left: 1.875em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 0 3.75em;
            transform-origin: 0 3.75em;
            border-radius: 0 7.5em 7.5em 0
        }

        .webpush-swal2-icon.webpush-swal2-success .webpush-swal2-success-ring {
            position: absolute;
            top: -.25em;
            left: -.25em;
            width: 100%;
            height: 100%;
            border: .25em solid rgba(165, 220, 134, .3);
            border-radius: 50%;
            z-index: 2;
            box-sizing: content-box
        }

        .webpush-swal2-icon.webpush-swal2-success .webpush-swal2-success-fix {
            position: absolute;
            top: .5em;
            left: 1.625em;
            width: .4375em;
            height: 5.625em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            z-index: 1
        }

        .webpush-swal2-icon.webpush-swal2-success [class^=webpush-swal2-success-line] {
            display: block;
            position: absolute;
            height: .3125em;
            border-radius: .125em;
            background-color: #a5dc86;
            z-index: 2
        }

        .webpush-swal2-icon.webpush-swal2-success [class^=webpush-swal2-success-line][class$=tip] {
            top: 2.875em;
            left: .875em;
            width: 1.5625em;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg)
        }

        .webpush-swal2-icon.webpush-swal2-success [class^=webpush-swal2-success-line][class$=long] {
            top: 2.375em;
            right: .5em;
            width: 2.9375em;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        .webpush-swal2-progresssteps {
            align-items: center;
            margin: 0 0 1.25em;
            padding: 0;
            font-weight: 600
        }

        .webpush-swal2-progresssteps li {
            display: inline-block;
            position: relative
        }

        .webpush-swal2-progresssteps .webpush-swal2-progresscircle {
            width: 2em;
            height: 2em;
            border-radius: 2em;
            background: #3085d6;
            color: #fff;
            line-height: 2em;
            text-align: center;
            z-index: 20
        }

        .webpush-swal2-progresssteps .webpush-swal2-progresscircle:first-child {
            margin-left: 0
        }

        .webpush-swal2-progresssteps .webpush-swal2-progresscircle:last-child {
            margin-right: 0
        }

        .webpush-swal2-progresssteps .webpush-swal2-progresscircle.webpush-swal2-activeprogressstep {
            background: #3085d6
        }

        .webpush-swal2-progresssteps .webpush-swal2-progresscircle.webpush-swal2-activeprogressstep~.webpush-swal2-progresscircle {
            background: #add8e6
        }

        .webpush-swal2-progresssteps .webpush-swal2-progresscircle.webpush-swal2-activeprogressstep~.webpush-swal2-progressline {
            background: #add8e6
        }

        .webpush-swal2-progresssteps .webpush-swal2-progressline {
            width: 2.5em;
            height: .4em;
            margin: 0 -1px;
            background: #3085d6;
            z-index: 10
        }

        [class^=webpush-swal2] {
            -webkit-tap-highlight-color: transparent
        }

        .webpush-swal2-show {
            -webkit-animation: webpush-swal2-show .3s;
            animation: webpush-swal2-show .3s
        }

        .webpush-swal2-show.webpush-swal2-noanimation {
            -webkit-animation: none;
            animation: none
        }

        .webpush-swal2-hide {
            -webkit-animation: webpush-swal2-hide .15s forwards;
            animation: webpush-swal2-hide .15s forwards
        }

        .webpush-swal2-hide.webpush-swal2-noanimation {
            -webkit-animation: none;
            animation: none
        }

        [dir=rtl] .webpush-swal2-close {
            right: auto;
            left: 0
        }

        .webpush-swal2-animate-success-icon .webpush-swal2-success-line-tip {
            -webkit-animation: webpush-swal2-animate-success-line-tip .75s;
            animation: webpush-swal2-animate-success-line-tip .75s
        }

        .webpush-swal2-animate-success-icon .webpush-swal2-success-line-long {
            -webkit-animation: webpush-swal2-animate-success-line-long .75s;
            animation: webpush-swal2-animate-success-line-long .75s
        }

        .webpush-swal2-animate-success-icon .webpush-swal2-success-circular-line-right {
            -webkit-animation: webpush-swal2-rotate-success-circular-line 4.25s ease-in;
            animation: webpush-swal2-rotate-success-circular-line 4.25s ease-in
        }

        .webpush-swal2-animate-error-icon {
            -webkit-animation: webpush-swal2-animate-error-icon .5s;
            animation: webpush-swal2-animate-error-icon .5s
        }

        .webpush-swal2-animate-error-icon .webpush-swal2-x-mark {
            -webkit-animation: webpush-swal2-animate-error-x-mark .5s;
            animation: webpush-swal2-animate-error-x-mark .5s
        }

        @-webkit-keyframes webpush-swal2-rotate-loading {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        @keyframes webpush-swal2-rotate-loading {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        .webpush-scroll-content.webpush-swal2-modal {
            max-height: 100% !important;
            min-height: initial !important;
        }

        .webpush-scroll-content .webpush-swal2-content {
            max-height: 25vh !important;
            overflow: auto !important;
        }
    </style>

    <link href="{{ $url }}#build/Images/favicon.ico" type="image/x-icon" rel="shortcut icon">
    <link href="{{ $url }}#build/Images/favicon.ico" type="image/x-icon" rel="icon">
    <meta http-equiv="origin-trial" content="AymqwRC7u88Y4JPvfIF2F37QKylC04248hLCdJAsh8xgOfe/dVJPV3XS3wLFca1ZMVOtnBfVjaCMTVudWM//5g4AAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjk1MTY3OTk5LCJpc1RoaXJkUGFydHkiOnRydWV9">
    <meta http-equiv="origin-trial" content="AymqwRC7u88Y4JPvfIF2F37QKylC04248hLCdJAsh8xgOfe/dVJPV3XS3wLFca1ZMVOtnBfVjaCMTVudWM//5g4AAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjk1MTY3OTk5LCJpc1RoaXJkUGFydHkiOnRydWV9">
    <style id="onetrust-style">
        #onetrust-banner-sdk {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%
        }

        #onetrust-banner-sdk .onetrust-vendors-list-handler {
            cursor: pointer;
            color: #1f96db;
            font-size: inherit;
            font-weight: bold;
            text-decoration: none;
            margin-left: 5px
        }

        #onetrust-banner-sdk .onetrust-vendors-list-handler:hover {
            color: #1f96db
        }

        #onetrust-banner-sdk:focus {
            outline: 2px solid #000;
            outline-offset: -2px
        }

        #onetrust-banner-sdk a:focus {
            outline: 2px solid #000
        }

        #onetrust-banner-sdk #onetrust-accept-btn-handler,
        #onetrust-banner-sdk #onetrust-reject-all-handler,
        #onetrust-banner-sdk #onetrust-pc-btn-handler {
            outline-offset: 1px
        }

        #onetrust-banner-sdk.ot-bnr-w-logo .ot-bnr-logo {
            height: 64px;
            width: 64px
        }

        #onetrust-banner-sdk .ot-close-icon,
        #onetrust-pc-sdk .ot-close-icon,
        #ot-sync-ntfy .ot-close-icon {
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            height: 12px;
            width: 12px
        }

        #onetrust-banner-sdk .powered-by-logo,
        #onetrust-banner-sdk .ot-pc-footer-logo a,
        #onetrust-pc-sdk .powered-by-logo,
        #onetrust-pc-sdk .ot-pc-footer-logo a,
        #ot-sync-ntfy .powered-by-logo,
        #ot-sync-ntfy .ot-pc-footer-logo a {
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            height: 25px;
            width: 152px;
            display: block;
            text-decoration: none;
            font-size: 0.75em
        }

        #onetrust-banner-sdk .powered-by-logo:hover,
        #onetrust-banner-sdk .ot-pc-footer-logo a:hover,
        #onetrust-pc-sdk .powered-by-logo:hover,
        #onetrust-pc-sdk .ot-pc-footer-logo a:hover,
        #ot-sync-ntfy .powered-by-logo:hover,
        #ot-sync-ntfy .ot-pc-footer-logo a:hover {
            color: #565656
        }

        #onetrust-banner-sdk h3 *,
        #onetrust-banner-sdk h4 *,
        #onetrust-banner-sdk h6 *,
        #onetrust-banner-sdk button *,
        #onetrust-banner-sdk a[data-parent-id] *,
        #onetrust-pc-sdk h3 *,
        #onetrust-pc-sdk h4 *,
        #onetrust-pc-sdk h6 *,
        #onetrust-pc-sdk button *,
        #onetrust-pc-sdk a[data-parent-id] *,
        #ot-sync-ntfy h3 *,
        #ot-sync-ntfy h4 *,
        #ot-sync-ntfy h6 *,
        #ot-sync-ntfy button *,
        #ot-sync-ntfy a[data-parent-id] * {
            font-size: inherit;
            font-weight: inherit;
            color: inherit
        }

        #onetrust-banner-sdk .ot-hide,
        #onetrust-pc-sdk .ot-hide,
        #ot-sync-ntfy .ot-hide {
            display: none !important
        }

        #onetrust-banner-sdk button.ot-link-btn:hover,
        #onetrust-pc-sdk button.ot-link-btn:hover,
        #ot-sync-ntfy button.ot-link-btn:hover {
            text-decoration: underline;
            opacity: 1
        }

        #onetrust-pc-sdk .ot-sdk-row .ot-sdk-column {
            padding: 0
        }

        #onetrust-pc-sdk .ot-sdk-container {
            padding-right: 0
        }

        #onetrust-pc-sdk .ot-sdk-row {
            flex-direction: initial;
            width: 100%
        }

        #onetrust-pc-sdk [type="checkbox"]:checked,
        #onetrust-pc-sdk [type="checkbox"]:not(:checked) {
            pointer-events: initial
        }

        #onetrust-pc-sdk [type="checkbox"]:disabled+label::before,
        #onetrust-pc-sdk [type="checkbox"]:disabled+label:after,
        #onetrust-pc-sdk [type="checkbox"]:disabled+label {
            pointer-events: none;
            opacity: 0.7
        }

        #onetrust-pc-sdk #vendor-list-content {
            transform: translate3d(0, 0, 0)
        }

        #onetrust-pc-sdk li input[type="checkbox"] {
            z-index: 1
        }

        #onetrust-pc-sdk li .ot-checkbox label {
            z-index: 2
        }

        #onetrust-pc-sdk li .ot-checkbox input[type="checkbox"] {
            height: auto;
            width: auto
        }

        #onetrust-pc-sdk li .host-title a,
        #onetrust-pc-sdk li .ot-host-name a,
        #onetrust-pc-sdk li .accordion-text,
        #onetrust-pc-sdk li .ot-acc-txt {
            z-index: 2;
            position: relative
        }

        #onetrust-pc-sdk input {
            margin: 3px 0.1ex
        }

        #onetrust-pc-sdk .pc-logo,
        #onetrust-pc-sdk .ot-pc-logo {
            height: 60px;
            width: 180px;
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
            display: inline-flex;
            justify-content: center;
            align-items: center
        }

        #onetrust-pc-sdk .pc-logo img,
        #onetrust-pc-sdk .ot-pc-logo img {
            max-height: 100%;
            max-width: 100%
        }

        #onetrust-pc-sdk .screen-reader-only,
        #onetrust-pc-sdk .ot-scrn-rdr,
        .ot-sdk-cookie-policy .screen-reader-only,
        .ot-sdk-cookie-policy .ot-scrn-rdr {
            border: 0;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px
        }

        #onetrust-pc-sdk.ot-fade-in,
        .onetrust-pc-dark-filter.ot-fade-in,
        #onetrust-banner-sdk.ot-fade-in {
            animation-name: onetrust-fade-in;
            animation-duration: 400ms;
            animation-timing-function: ease-in-out
        }

        #onetrust-pc-sdk.ot-hide {
            display: none !important
        }

        .onetrust-pc-dark-filter.ot-hide {
            display: none !important
        }

        #ot-sdk-btn.ot-sdk-show-settings,
        #ot-sdk-btn.optanon-show-settings {
            color: #68b631;
            border: 1px solid #68b631;
            height: auto;
            white-space: normal;
            word-wrap: break-word;
            padding: 0.8em 2em;
            font-size: 0.8em;
            line-height: 1.2;
            cursor: pointer;
            -moz-transition: 0.1s ease;
            -o-transition: 0.1s ease;
            -webkit-transition: 1s ease;
            transition: 0.1s ease
        }

        #ot-sdk-btn.ot-sdk-show-settings:hover,
        #ot-sdk-btn.optanon-show-settings:hover {
            color: #fff;
            background-color: #68b631
        }

        .onetrust-pc-dark-filter {
            background: rgba(0, 0, 0, 0.5);
            z-index: 2147483646;
            width: 100%;
            height: 100%;
            overflow: hidden;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0
        }

        @keyframes onetrust-fade-in {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        .ot-cookie-label {
            text-decoration: underline
        }

        @media only screen and (min-width: 426px) and (max-width: 896px) and (orientation: landscape) {
            #onetrust-pc-sdk p {
                font-size: 0.75em
            }
        }

        #onetrust-banner-sdk .banner-option-input:focus+label {
            outline: 1px solid #000;
            outline-style: auto
        }

        .category-vendors-list-handler+a:focus,
        .category-vendors-list-handler+a:focus-visible {
            outline: 2px solid #000
        }

        #onetrust-pc-sdk .ot-userid-title {
            margin-top: 10px
        }

        #onetrust-pc-sdk .ot-userid-title>span,
        #onetrust-pc-sdk .ot-userid-timestamp>span {
            font-weight: 700
        }

        #onetrust-pc-sdk .ot-userid-desc {
            font-style: italic
        }

        #onetrust-pc-sdk .ot-host-desc a {
            pointer-events: initial
        }

        #onetrust-pc-sdk .ot-ven-hdr>p a {
            position: relative;
            z-index: 2;
            pointer-events: initial
        }

        #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-vnd-info a,
        #onetrust-pc-sdk .ot-vs-list .ot-vnd-item .ot-vnd-info a {
            margin-right: auto
        }

        #onetrust-pc-sdk .ot-pc-footer-logo img {
            width: 136px;
            height: 16px
        }

        #onetrust-banner-sdk .ot-optout-signal,
        #onetrust-pc-sdk .ot-optout-signal {
            border: 1px solid #32ae88;
            border-radius: 3px;
            padding: 5px;
            margin-bottom: 10px;
            background-color: #f9fffa;
            font-size: 0.85rem;
            line-height: 2
        }

        #onetrust-banner-sdk .ot-optout-signal .ot-optout-icon,
        #onetrust-pc-sdk .ot-optout-signal .ot-optout-icon {
            display: inline;
            margin-right: 5px
        }

        #onetrust-banner-sdk .ot-optout-signal svg,
        #onetrust-pc-sdk .ot-optout-signal svg {
            height: 20px;
            width: 30px;
            transform: scale(0.5)
        }

        #onetrust-banner-sdk .ot-optout-signal svg path,
        #onetrust-pc-sdk .ot-optout-signal svg path {
            fill: #32ae88
        }

        #onetrust-banner-sdk,
        #onetrust-pc-sdk,
        #ot-sdk-cookie-policy,
        #ot-sync-ntfy {
            font-size: 16px
        }

        #onetrust-banner-sdk *,
        #onetrust-banner-sdk ::after,
        #onetrust-banner-sdk ::before,
        #onetrust-pc-sdk *,
        #onetrust-pc-sdk ::after,
        #onetrust-pc-sdk ::before,
        #ot-sdk-cookie-policy *,
        #ot-sdk-cookie-policy ::after,
        #ot-sdk-cookie-policy ::before,
        #ot-sync-ntfy *,
        #ot-sync-ntfy ::after,
        #ot-sync-ntfy ::before {
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box
        }

        #onetrust-banner-sdk div,
        #onetrust-banner-sdk span,
        #onetrust-banner-sdk h1,
        #onetrust-banner-sdk h2,
        #onetrust-banner-sdk h3,
        #onetrust-banner-sdk h4,
        #onetrust-banner-sdk h5,
        #onetrust-banner-sdk h6,
        #onetrust-banner-sdk p,
        #onetrust-banner-sdk img,
        #onetrust-banner-sdk svg,
        #onetrust-banner-sdk button,
        #onetrust-banner-sdk section,
        #onetrust-banner-sdk a,
        #onetrust-banner-sdk label,
        #onetrust-banner-sdk input,
        #onetrust-banner-sdk ul,
        #onetrust-banner-sdk li,
        #onetrust-banner-sdk nav,
        #onetrust-banner-sdk table,
        #onetrust-banner-sdk thead,
        #onetrust-banner-sdk tr,
        #onetrust-banner-sdk td,
        #onetrust-banner-sdk tbody,
        #onetrust-banner-sdk .ot-main-content,
        #onetrust-banner-sdk .ot-toggle,
        #onetrust-banner-sdk #ot-content,
        #onetrust-banner-sdk #ot-pc-content,
        #onetrust-banner-sdk .checkbox,
        #onetrust-pc-sdk div,
        #onetrust-pc-sdk span,
        #onetrust-pc-sdk h1,
        #onetrust-pc-sdk h2,
        #onetrust-pc-sdk h3,
        #onetrust-pc-sdk h4,
        #onetrust-pc-sdk h5,
        #onetrust-pc-sdk h6,
        #onetrust-pc-sdk p,
        #onetrust-pc-sdk img,
        #onetrust-pc-sdk svg,
        #onetrust-pc-sdk button,
        #onetrust-pc-sdk section,
        #onetrust-pc-sdk a,
        #onetrust-pc-sdk label,
        #onetrust-pc-sdk input,
        #onetrust-pc-sdk ul,
        #onetrust-pc-sdk li,
        #onetrust-pc-sdk nav,
        #onetrust-pc-sdk table,
        #onetrust-pc-sdk thead,
        #onetrust-pc-sdk tr,
        #onetrust-pc-sdk td,
        #onetrust-pc-sdk tbody,
        #onetrust-pc-sdk .ot-main-content,
        #onetrust-pc-sdk .ot-toggle,
        #onetrust-pc-sdk #ot-content,
        #onetrust-pc-sdk #ot-pc-content,
        #onetrust-pc-sdk .checkbox,
        #ot-sdk-cookie-policy div,
        #ot-sdk-cookie-policy span,
        #ot-sdk-cookie-policy h1,
        #ot-sdk-cookie-policy h2,
        #ot-sdk-cookie-policy h3,
        #ot-sdk-cookie-policy h4,
        #ot-sdk-cookie-policy h5,
        #ot-sdk-cookie-policy h6,
        #ot-sdk-cookie-policy p,
        #ot-sdk-cookie-policy img,
        #ot-sdk-cookie-policy svg,
        #ot-sdk-cookie-policy button,
        #ot-sdk-cookie-policy section,
        #ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy label,
        #ot-sdk-cookie-policy input,
        #ot-sdk-cookie-policy ul,
        #ot-sdk-cookie-policy li,
        #ot-sdk-cookie-policy nav,
        #ot-sdk-cookie-policy table,
        #ot-sdk-cookie-policy thead,
        #ot-sdk-cookie-policy tr,
        #ot-sdk-cookie-policy td,
        #ot-sdk-cookie-policy tbody,
        #ot-sdk-cookie-policy .ot-main-content,
        #ot-sdk-cookie-policy .ot-toggle,
        #ot-sdk-cookie-policy #ot-content,
        #ot-sdk-cookie-policy #ot-pc-content,
        #ot-sdk-cookie-policy .checkbox,
        #ot-sync-ntfy div,
        #ot-sync-ntfy span,
        #ot-sync-ntfy h1,
        #ot-sync-ntfy h2,
        #ot-sync-ntfy h3,
        #ot-sync-ntfy h4,
        #ot-sync-ntfy h5,
        #ot-sync-ntfy h6,
        #ot-sync-ntfy p,
        #ot-sync-ntfy img,
        #ot-sync-ntfy svg,
        #ot-sync-ntfy button,
        #ot-sync-ntfy section,
        #ot-sync-ntfy a,
        #ot-sync-ntfy label,
        #ot-sync-ntfy input,
        #ot-sync-ntfy ul,
        #ot-sync-ntfy li,
        #ot-sync-ntfy nav,
        #ot-sync-ntfy table,
        #ot-sync-ntfy thead,
        #ot-sync-ntfy tr,
        #ot-sync-ntfy td,
        #ot-sync-ntfy tbody,
        #ot-sync-ntfy .ot-main-content,
        #ot-sync-ntfy .ot-toggle,
        #ot-sync-ntfy #ot-content,
        #ot-sync-ntfy #ot-pc-content,
        #ot-sync-ntfy .checkbox {
            font-family: inherit;
            font-weight: normal;
            -webkit-font-smoothing: auto;
            letter-spacing: normal;
            line-height: normal;
            padding: 0;
            margin: 0;
            height: auto;
            min-height: 0;
            max-height: none;
            width: auto;
            min-width: 0;
            max-width: none;
            border-radius: 0;
            border: none;
            clear: none;
            float: none;
            position: static;
            bottom: auto;
            left: auto;
            right: auto;
            top: auto;
            text-align: left;
            text-decoration: none;
            text-indent: 0;
            text-shadow: none;
            text-transform: none;
            white-space: normal;
            background: none;
            overflow: visible;
            vertical-align: baseline;
            visibility: visible;
            z-index: auto;
            box-shadow: none
        }

        #onetrust-banner-sdk label:before,
        #onetrust-banner-sdk label:after,
        #onetrust-banner-sdk .checkbox:after,
        #onetrust-banner-sdk .checkbox:before,
        #onetrust-pc-sdk label:before,
        #onetrust-pc-sdk label:after,
        #onetrust-pc-sdk .checkbox:after,
        #onetrust-pc-sdk .checkbox:before,
        #ot-sdk-cookie-policy label:before,
        #ot-sdk-cookie-policy label:after,
        #ot-sdk-cookie-policy .checkbox:after,
        #ot-sdk-cookie-policy .checkbox:before,
        #ot-sync-ntfy label:before,
        #ot-sync-ntfy label:after,
        #ot-sync-ntfy .checkbox:after,
        #ot-sync-ntfy .checkbox:before {
            content: "";
            content: none
        }

        #onetrust-banner-sdk .ot-sdk-container,
        #onetrust-pc-sdk .ot-sdk-container,
        #ot-sdk-cookie-policy .ot-sdk-container {
            position: relative;
            width: 100%;
            max-width: 100%;
            margin: 0 auto;
            padding: 0 20px;
            box-sizing: border-box
        }

        #onetrust-banner-sdk .ot-sdk-column,
        #onetrust-banner-sdk .ot-sdk-columns,
        #onetrust-pc-sdk .ot-sdk-column,
        #onetrust-pc-sdk .ot-sdk-columns,
        #ot-sdk-cookie-policy .ot-sdk-column,
        #ot-sdk-cookie-policy .ot-sdk-columns {
            width: 100%;
            float: left;
            box-sizing: border-box;
            padding: 0;
            display: initial
        }

        @media (min-width: 400px) {

            #onetrust-banner-sdk .ot-sdk-container,
            #onetrust-pc-sdk .ot-sdk-container,
            #ot-sdk-cookie-policy .ot-sdk-container {
                width: 90%;
                padding: 0
            }
        }

        @media (min-width: 550px) {

            #onetrust-banner-sdk .ot-sdk-container,
            #onetrust-pc-sdk .ot-sdk-container,
            #ot-sdk-cookie-policy .ot-sdk-container {
                width: 100%
            }

            #onetrust-banner-sdk .ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-columns {
                margin-left: 4%
            }

            #onetrust-banner-sdk .ot-sdk-column:first-child,
            #onetrust-banner-sdk .ot-sdk-columns:first-child,
            #onetrust-pc-sdk .ot-sdk-column:first-child,
            #onetrust-pc-sdk .ot-sdk-columns:first-child,
            #ot-sdk-cookie-policy .ot-sdk-column:first-child,
            #ot-sdk-cookie-policy .ot-sdk-columns:first-child {
                margin-left: 0
            }

            #onetrust-banner-sdk .ot-sdk-two.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-two.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-two.ot-sdk-columns {
                width: 13.3333333333%
            }

            #onetrust-banner-sdk .ot-sdk-three.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-three.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-three.ot-sdk-columns {
                width: 22%
            }

            #onetrust-banner-sdk .ot-sdk-four.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-four.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-four.ot-sdk-columns {
                width: 30.6666666667%
            }

            #onetrust-banner-sdk .ot-sdk-eight.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-eight.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-eight.ot-sdk-columns {
                width: 65.3333333333%
            }

            #onetrust-banner-sdk .ot-sdk-nine.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-nine.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-nine.ot-sdk-columns {
                width: 74%
            }

            #onetrust-banner-sdk .ot-sdk-ten.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-ten.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-ten.ot-sdk-columns {
                width: 82.6666666667%
            }

            #onetrust-banner-sdk .ot-sdk-eleven.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-eleven.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-eleven.ot-sdk-columns {
                width: 91.3333333333%
            }

            #onetrust-banner-sdk .ot-sdk-twelve.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-twelve.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-twelve.ot-sdk-columns {
                width: 100%;
                margin-left: 0
            }
        }

        #onetrust-banner-sdk h1,
        #onetrust-banner-sdk h2,
        #onetrust-banner-sdk h3,
        #onetrust-banner-sdk h4,
        #onetrust-banner-sdk h5,
        #onetrust-banner-sdk h6,
        #onetrust-pc-sdk h1,
        #onetrust-pc-sdk h2,
        #onetrust-pc-sdk h3,
        #onetrust-pc-sdk h4,
        #onetrust-pc-sdk h5,
        #onetrust-pc-sdk h6,
        #ot-sdk-cookie-policy h1,
        #ot-sdk-cookie-policy h2,
        #ot-sdk-cookie-policy h3,
        #ot-sdk-cookie-policy h4,
        #ot-sdk-cookie-policy h5,
        #ot-sdk-cookie-policy h6 {
            margin-top: 0;
            font-weight: 600;
            font-family: inherit
        }

        #onetrust-banner-sdk h1,
        #onetrust-pc-sdk h1,
        #ot-sdk-cookie-policy h1 {
            font-size: 1.5rem;
            line-height: 1.2
        }

        #onetrust-banner-sdk h2,
        #onetrust-pc-sdk h2,
        #ot-sdk-cookie-policy h2 {
            font-size: 1.5rem;
            line-height: 1.25
        }

        #onetrust-banner-sdk h3,
        #onetrust-pc-sdk h3,
        #ot-sdk-cookie-policy h3 {
            font-size: 1.5rem;
            line-height: 1.3
        }

        #onetrust-banner-sdk h4,
        #onetrust-pc-sdk h4,
        #ot-sdk-cookie-policy h4 {
            font-size: 1.5rem;
            line-height: 1.35
        }

        #onetrust-banner-sdk h5,
        #onetrust-pc-sdk h5,
        #ot-sdk-cookie-policy h5 {
            font-size: 1.5rem;
            line-height: 1.5
        }

        #onetrust-banner-sdk h6,
        #onetrust-pc-sdk h6,
        #ot-sdk-cookie-policy h6 {
            font-size: 1.5rem;
            line-height: 1.6
        }

        @media (min-width: 550px) {

            #onetrust-banner-sdk h1,
            #onetrust-pc-sdk h1,
            #ot-sdk-cookie-policy h1 {
                font-size: 1.5rem
            }

            #onetrust-banner-sdk h2,
            #onetrust-pc-sdk h2,
            #ot-sdk-cookie-policy h2 {
                font-size: 1.5rem
            }

            #onetrust-banner-sdk h3,
            #onetrust-pc-sdk h3,
            #ot-sdk-cookie-policy h3 {
                font-size: 1.5rem
            }

            #onetrust-banner-sdk h4,
            #onetrust-pc-sdk h4,
            #ot-sdk-cookie-policy h4 {
                font-size: 1.5rem
            }

            #onetrust-banner-sdk h5,
            #onetrust-pc-sdk h5,
            #ot-sdk-cookie-policy h5 {
                font-size: 1.5rem
            }

            #onetrust-banner-sdk h6,
            #onetrust-pc-sdk h6,
            #ot-sdk-cookie-policy h6 {
                font-size: 1.5rem
            }
        }

        #onetrust-banner-sdk p,
        #onetrust-pc-sdk p,
        #ot-sdk-cookie-policy p {
            margin: 0 0 1em 0;
            font-family: inherit;
            line-height: normal
        }

        #onetrust-banner-sdk a,
        #onetrust-pc-sdk a,
        #ot-sdk-cookie-policy a {
            color: #565656;
            text-decoration: underline
        }

        #onetrust-banner-sdk a:hover,
        #onetrust-pc-sdk a:hover,
        #ot-sdk-cookie-policy a:hover {
            color: #565656;
            text-decoration: none
        }

        #onetrust-banner-sdk .ot-sdk-button,
        #onetrust-banner-sdk button,
        #onetrust-pc-sdk .ot-sdk-button,
        #onetrust-pc-sdk button,
        #ot-sdk-cookie-policy .ot-sdk-button,
        #ot-sdk-cookie-policy button {
            margin-bottom: 1rem;
            font-family: inherit
        }

        #onetrust-banner-sdk .ot-sdk-button,
        #onetrust-banner-sdk button,
        #onetrust-pc-sdk .ot-sdk-button,
        #onetrust-pc-sdk button,
        #ot-sdk-cookie-policy .ot-sdk-button,
        #ot-sdk-cookie-policy button {
            display: inline-block;
            height: 38px;
            padding: 0 30px;
            color: #555;
            text-align: center;
            font-size: 0.9em;
            font-weight: 400;
            line-height: 38px;
            letter-spacing: 0.01em;
            text-decoration: none;
            white-space: nowrap;
            background-color: transparent;
            border-radius: 2px;
            border: 1px solid #bbb;
            cursor: pointer;
            box-sizing: border-box
        }

        #onetrust-banner-sdk .ot-sdk-button:hover,
        #onetrust-banner-sdk :not(.ot-leg-btn-container)>button:not(.ot-link-btn):hover,
        #onetrust-banner-sdk :not(.ot-leg-btn-container)>button:not(.ot-link-btn):focus,
        #onetrust-pc-sdk .ot-sdk-button:hover,
        #onetrust-pc-sdk :not(.ot-leg-btn-container)>button:not(.ot-link-btn):hover,
        #onetrust-pc-sdk :not(.ot-leg-btn-container)>button:not(.ot-link-btn):focus,
        #ot-sdk-cookie-policy .ot-sdk-button:hover,
        #ot-sdk-cookie-policy :not(.ot-leg-btn-container)>button:not(.ot-link-btn):hover,
        #ot-sdk-cookie-policy :not(.ot-leg-btn-container)>button:not(.ot-link-btn):focus {
            color: #333;
            border-color: #888;
            opacity: 0.7
        }

        #onetrust-banner-sdk .ot-sdk-button:focus,
        #onetrust-banner-sdk :not(.ot-leg-btn-container)>button:focus,
        #onetrust-pc-sdk .ot-sdk-button:focus,
        #onetrust-pc-sdk :not(.ot-leg-btn-container)>button:focus,
        #ot-sdk-cookie-policy .ot-sdk-button:focus,
        #ot-sdk-cookie-policy :not(.ot-leg-btn-container)>button:focus {
            outline: 2px solid #000
        }

        #onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary,
        #onetrust-banner-sdk button.ot-sdk-button-primary,
        #onetrust-banner-sdk input[type="submit"].ot-sdk-button-primary,
        #onetrust-banner-sdk input[type="reset"].ot-sdk-button-primary,
        #onetrust-banner-sdk input[type="button"].ot-sdk-button-primary,
        #onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary,
        #onetrust-pc-sdk button.ot-sdk-button-primary,
        #onetrust-pc-sdk input[type="submit"].ot-sdk-button-primary,
        #onetrust-pc-sdk input[type="reset"].ot-sdk-button-primary,
        #onetrust-pc-sdk input[type="button"].ot-sdk-button-primary,
        #ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary,
        #ot-sdk-cookie-policy button.ot-sdk-button-primary,
        #ot-sdk-cookie-policy input[type="submit"].ot-sdk-button-primary,
        #ot-sdk-cookie-policy input[type="reset"].ot-sdk-button-primary,
        #ot-sdk-cookie-policy input[type="button"].ot-sdk-button-primary {
            color: #fff;
            background-color: #33c3f0;
            border-color: #33c3f0
        }

        #onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary:hover,
        #onetrust-banner-sdk button.ot-sdk-button-primary:hover,
        #onetrust-banner-sdk input[type="submit"].ot-sdk-button-primary:hover,
        #onetrust-banner-sdk input[type="reset"].ot-sdk-button-primary:hover,
        #onetrust-banner-sdk input[type="button"].ot-sdk-button-primary:hover,
        #onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary:focus,
        #onetrust-banner-sdk button.ot-sdk-button-primary:focus,
        #onetrust-banner-sdk input[type="submit"].ot-sdk-button-primary:focus,
        #onetrust-banner-sdk input[type="reset"].ot-sdk-button-primary:focus,
        #onetrust-banner-sdk input[type="button"].ot-sdk-button-primary:focus,
        #onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary:hover,
        #onetrust-pc-sdk button.ot-sdk-button-primary:hover,
        #onetrust-pc-sdk input[type="submit"].ot-sdk-button-primary:hover,
        #onetrust-pc-sdk input[type="reset"].ot-sdk-button-primary:hover,
        #onetrust-pc-sdk input[type="button"].ot-sdk-button-primary:hover,
        #onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary:focus,
        #onetrust-pc-sdk button.ot-sdk-button-primary:focus,
        #onetrust-pc-sdk input[type="submit"].ot-sdk-button-primary:focus,
        #onetrust-pc-sdk input[type="reset"].ot-sdk-button-primary:focus,
        #onetrust-pc-sdk input[type="button"].ot-sdk-button-primary:focus,
        #ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary:hover,
        #ot-sdk-cookie-policy button.ot-sdk-button-primary:hover,
        #ot-sdk-cookie-policy input[type="submit"].ot-sdk-button-primary:hover,
        #ot-sdk-cookie-policy input[type="reset"].ot-sdk-button-primary:hover,
        #ot-sdk-cookie-policy input[type="button"].ot-sdk-button-primary:hover,
        #ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary:focus,
        #ot-sdk-cookie-policy button.ot-sdk-button-primary:focus,
        #ot-sdk-cookie-policy input[type="submit"].ot-sdk-button-primary:focus,
        #ot-sdk-cookie-policy input[type="reset"].ot-sdk-button-primary:focus,
        #ot-sdk-cookie-policy input[type="button"].ot-sdk-button-primary:focus {
            color: #fff;
            background-color: #1eaedb;
            border-color: #1eaedb
        }

        #onetrust-banner-sdk input[type="text"],
        #onetrust-pc-sdk input[type="text"],
        #ot-sdk-cookie-policy input[type="text"] {
            height: 38px;
            padding: 6px 10px;
            background-color: #fff;
            border: 1px solid #d1d1d1;
            border-radius: 4px;
            box-shadow: none;
            box-sizing: border-box
        }

        #onetrust-banner-sdk input[type="text"],
        #onetrust-pc-sdk input[type="text"],
        #ot-sdk-cookie-policy input[type="text"] {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none
        }

        #onetrust-banner-sdk input[type="text"]:focus,
        #onetrust-pc-sdk input[type="text"]:focus,
        #ot-sdk-cookie-policy input[type="text"]:focus {
            border: 1px solid #000;
            outline: 0
        }

        #onetrust-banner-sdk label,
        #onetrust-pc-sdk label,
        #ot-sdk-cookie-policy label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600
        }

        #onetrust-banner-sdk input[type="checkbox"],
        #onetrust-pc-sdk input[type="checkbox"],
        #ot-sdk-cookie-policy input[type="checkbox"] {
            display: inline
        }

        #onetrust-banner-sdk ul,
        #onetrust-pc-sdk ul,
        #ot-sdk-cookie-policy ul {
            list-style: circle inside
        }

        #onetrust-banner-sdk ul,
        #onetrust-pc-sdk ul,
        #ot-sdk-cookie-policy ul {
            padding-left: 0;
            margin-top: 0
        }

        #onetrust-banner-sdk ul ul,
        #onetrust-pc-sdk ul ul,
        #ot-sdk-cookie-policy ul ul {
            margin: 1.5rem 0 1.5rem 3rem;
            font-size: 90%
        }

        #onetrust-banner-sdk li,
        #onetrust-pc-sdk li,
        #ot-sdk-cookie-policy li {
            margin-bottom: 1rem
        }

        #onetrust-banner-sdk th,
        #onetrust-banner-sdk td,
        #onetrust-pc-sdk th,
        #onetrust-pc-sdk td,
        #ot-sdk-cookie-policy th,
        #ot-sdk-cookie-policy td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #e1e1e1
        }

        #onetrust-banner-sdk button,
        #onetrust-pc-sdk button,
        #ot-sdk-cookie-policy button {
            margin-bottom: 1rem;
            font-family: inherit
        }

        #onetrust-banner-sdk .ot-sdk-container:after,
        #onetrust-banner-sdk .ot-sdk-row:after,
        #onetrust-pc-sdk .ot-sdk-container:after,
        #onetrust-pc-sdk .ot-sdk-row:after,
        #ot-sdk-cookie-policy .ot-sdk-container:after,
        #ot-sdk-cookie-policy .ot-sdk-row:after {
            content: "";
            display: table;
            clear: both
        }

        #onetrust-banner-sdk .ot-sdk-row,
        #onetrust-pc-sdk .ot-sdk-row,
        #ot-sdk-cookie-policy .ot-sdk-row {
            margin: 0;
            max-width: none;
            display: block
        }

        #onetrust-banner-sdk {
            box-shadow: 0 0 18px rgba(0, 0, 0, .2)
        }

        #onetrust-banner-sdk.otFlat {
            position: fixed;
            z-index: 2147483645;
            bottom: 0;
            right: 0;
            left: 0;
            background-color: #fff;
            max-height: 90%;
            overflow-x: hidden;
            overflow-y: auto
        }

        #onetrust-banner-sdk.otFlat.top {
            top: 0px;
            bottom: auto
        }

        #onetrust-banner-sdk.otRelFont {
            font-size: 1rem
        }

        #onetrust-banner-sdk>.ot-sdk-container {
            overflow: hidden
        }

        #onetrust-banner-sdk::-webkit-scrollbar {
            width: 11px
        }

        #onetrust-banner-sdk::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background: #c1c1c1
        }

        #onetrust-banner-sdk {
            scrollbar-arrow-color: #c1c1c1;
            scrollbar-darkshadow-color: #c1c1c1;
            scrollbar-face-color: #c1c1c1;
            scrollbar-shadow-color: #c1c1c1
        }

        #onetrust-banner-sdk #onetrust-policy {
            margin: 1.25em 0 .625em 2em;
            overflow: hidden
        }

        #onetrust-banner-sdk #onetrust-policy .ot-gv-list-handler {
            float: left;
            font-size: .82em;
            padding: 0;
            margin-bottom: 0;
            border: 0;
            line-height: normal;
            height: auto;
            width: auto
        }

        #onetrust-banner-sdk #onetrust-policy-title {
            font-size: 1.2em;
            line-height: 1.3;
            margin-bottom: 10px
        }

        #onetrust-banner-sdk #onetrust-policy-text {
            clear: both;
            text-align: left;
            font-size: .88em;
            line-height: 1.4
        }

        #onetrust-banner-sdk #onetrust-policy-text * {
            font-size: inherit;
            line-height: inherit
        }

        #onetrust-banner-sdk #onetrust-policy-text a {
            font-weight: bold;
            margin-left: 5px
        }

        #onetrust-banner-sdk #onetrust-policy-title,
        #onetrust-banner-sdk #onetrust-policy-text {
            color: dimgray;
            float: left
        }

        #onetrust-banner-sdk #onetrust-button-group-parent {
            min-height: 1px;
            text-align: center
        }

        #onetrust-banner-sdk #onetrust-button-group {
            display: inline-block
        }

        #onetrust-banner-sdk #onetrust-accept-btn-handler,
        #onetrust-banner-sdk #onetrust-reject-all-handler,
        #onetrust-banner-sdk #onetrust-pc-btn-handler {
            background-color: #68b631;
            color: #fff;
            border-color: #68b631;
            margin-right: 1em;
            min-width: 125px;
            height: auto;
            white-space: normal;
            word-break: break-word;
            word-wrap: break-word;
            padding: 12px 10px;
            line-height: 1.2;
            font-size: .813em;
            font-weight: 600
        }

        #onetrust-banner-sdk #onetrust-pc-btn-handler.cookie-setting-link {
            background-color: #fff;
            border: none;
            color: #68b631;
            text-decoration: underline;
            padding-left: 0;
            padding-right: 0
        }

        #onetrust-banner-sdk .onetrust-close-btn-ui {
            width: 44px;
            height: 44px;
            background-size: 12px;
            border: none;
            position: relative;
            margin: auto;
            padding: 0
        }

        #onetrust-banner-sdk .banner_logo {
            display: none
        }

        #onetrust-banner-sdk.ot-bnr-w-logo .ot-bnr-logo {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 0px
        }

        #onetrust-banner-sdk.ot-bnr-w-logo #onetrust-policy {
            margin-left: 65px
        }

        #onetrust-banner-sdk .ot-b-addl-desc {
            clear: both;
            float: left;
            display: block
        }

        #onetrust-banner-sdk #banner-options {
            float: left;
            display: table;
            margin-right: 0;
            margin-left: 1em;
            width: calc(100% - 1em)
        }

        #onetrust-banner-sdk .banner-option-input {
            cursor: pointer;
            width: auto;
            height: auto;
            border: none;
            padding: 0;
            padding-right: 3px;
            margin: 0 0 10px;
            font-size: .82em;
            line-height: 1.4
        }

        #onetrust-banner-sdk .banner-option-input * {
            pointer-events: none;
            font-size: inherit;
            line-height: inherit
        }

        #onetrust-banner-sdk .banner-option-input[aria-expanded=true]~.banner-option-details {
            display: block;
            height: auto
        }

        #onetrust-banner-sdk .banner-option-input[aria-expanded=true] .ot-arrow-container {
            transform: rotate(90deg)
        }

        #onetrust-banner-sdk .banner-option {
            margin-bottom: 12px;
            margin-left: 0;
            border: none;
            float: left;
            padding: 0
        }

        #onetrust-banner-sdk .banner-option:first-child {
            padding-left: 2px
        }

        #onetrust-banner-sdk .banner-option:not(:first-child) {
            padding: 0;
            border: none
        }

        #onetrust-banner-sdk .banner-option-header {
            cursor: pointer;
            display: inline-block
        }

        #onetrust-banner-sdk .banner-option-header :first-child {
            color: dimgray;
            font-weight: bold;
            float: left
        }

        #onetrust-banner-sdk .banner-option-header .ot-arrow-container {
            display: inline-block;
            border-top: 6px solid transparent;
            border-bottom: 6px solid transparent;
            border-left: 6px solid dimgray;
            margin-left: 10px;
            vertical-align: middle
        }

        #onetrust-banner-sdk .banner-option-details {
            display: none;
            font-size: .83em;
            line-height: 1.5;
            padding: 10px 0px 5px 10px;
            margin-right: 10px;
            height: 0px
        }

        #onetrust-banner-sdk .banner-option-details * {
            font-size: inherit;
            line-height: inherit;
            color: dimgray
        }

        #onetrust-banner-sdk .ot-arrow-container,
        #onetrust-banner-sdk .banner-option-details {
            transition: all 300ms ease-in 0s;
            -webkit-transition: all 300ms ease-in 0s;
            -moz-transition: all 300ms ease-in 0s;
            -o-transition: all 300ms ease-in 0s
        }

        #onetrust-banner-sdk .ot-dpd-container {
            float: left
        }

        #onetrust-banner-sdk .ot-dpd-title {
            margin-bottom: 10px
        }

        #onetrust-banner-sdk .ot-dpd-title,
        #onetrust-banner-sdk .ot-dpd-desc {
            font-size: .88em;
            line-height: 1.4;
            color: dimgray
        }

        #onetrust-banner-sdk .ot-dpd-title *,
        #onetrust-banner-sdk .ot-dpd-desc * {
            font-size: inherit;
            line-height: inherit
        }

        #onetrust-banner-sdk.ot-iab-2 #onetrust-policy-text * {
            margin-bottom: 0
        }

        #onetrust-banner-sdk.ot-iab-2 .onetrust-vendors-list-handler {
            display: block;
            margin-left: 0;
            margin-top: 5px;
            clear: both;
            margin-bottom: 0;
            padding: 0;
            border: 0;
            height: auto;
            width: auto
        }

        #onetrust-banner-sdk.ot-iab-2 #onetrust-button-group button {
            display: block
        }

        #onetrust-banner-sdk.ot-close-btn-link {
            padding-top: 25px
        }

        #onetrust-banner-sdk.ot-close-btn-link #onetrust-close-btn-container {
            top: 15px;
            transform: none;
            right: 15px
        }

        #onetrust-banner-sdk.ot-close-btn-link #onetrust-close-btn-container button {
            padding: 0;
            white-space: pre-wrap;
            border: none;
            height: auto;
            line-height: 1.5;
            text-decoration: underline;
            font-size: .69em
        }

        #onetrust-banner-sdk #onetrust-policy-text,
        #onetrust-banner-sdk .ot-dpd-desc,
        #onetrust-banner-sdk .ot-b-addl-desc {
            font-size: .813em;
            line-height: 1.5
        }

        #onetrust-banner-sdk .ot-dpd-desc {
            margin-bottom: 10px
        }

        #onetrust-banner-sdk .ot-dpd-desc>.ot-b-addl-desc {
            margin-top: 10px;
            margin-bottom: 10px;
            font-size: 1em
        }

        @media only screen and (max-width: 425px) {
            #onetrust-banner-sdk #onetrust-close-btn-container {
                position: absolute;
                top: 6px;
                right: 2px
            }

            #onetrust-banner-sdk #onetrust-policy {
                margin-left: 0;
                margin-top: 3em
            }

            #onetrust-banner-sdk #onetrust-button-group {
                display: block
            }

            #onetrust-banner-sdk #onetrust-accept-btn-handler,
            #onetrust-banner-sdk #onetrust-reject-all-handler,
            #onetrust-banner-sdk #onetrust-pc-btn-handler {
                width: 100%
            }

            #onetrust-banner-sdk .onetrust-close-btn-ui {
                top: auto;
                transform: none
            }

            #onetrust-banner-sdk #onetrust-policy-title {
                display: inline;
                float: none
            }

            #onetrust-banner-sdk #banner-options {
                margin: 0;
                padding: 0;
                width: 100%
            }
        }

        @media only screen and (min-width: 426px)and (max-width: 896px) {
            #onetrust-banner-sdk #onetrust-close-btn-container {
                position: absolute;
                top: 0;
                right: 0
            }

            #onetrust-banner-sdk #onetrust-policy {
                margin-left: 1em;
                margin-right: 1em
            }

            #onetrust-banner-sdk .onetrust-close-btn-ui {
                top: 10px;
                right: 10px
            }

            #onetrust-banner-sdk:not(.ot-iab-2) #onetrust-group-container {
                width: 95%
            }

            #onetrust-banner-sdk.ot-iab-2 #onetrust-group-container {
                width: 100%
            }

            #onetrust-banner-sdk.ot-bnr-w-logo #onetrust-button-group-parent {
                padding-left: 50px
            }

            #onetrust-banner-sdk #onetrust-button-group-parent {
                width: 100%;
                position: relative;
                margin-left: 0
            }

            #onetrust-banner-sdk #onetrust-button-group button {
                display: inline-block
            }

            #onetrust-banner-sdk #onetrust-button-group {
                margin-right: 0;
                text-align: center
            }

            #onetrust-banner-sdk .has-reject-all-button #onetrust-pc-btn-handler {
                float: left
            }

            #onetrust-banner-sdk .has-reject-all-button #onetrust-reject-all-handler,
            #onetrust-banner-sdk .has-reject-all-button #onetrust-accept-btn-handler {
                float: right
            }

            #onetrust-banner-sdk .has-reject-all-button #onetrust-button-group {
                width: calc(100% - 2em);
                margin-right: 0
            }

            #onetrust-banner-sdk .has-reject-all-button #onetrust-pc-btn-handler.cookie-setting-link {
                padding-left: 0px;
                text-align: left
            }

            #onetrust-banner-sdk.ot-buttons-fw .ot-sdk-three button {
                width: 100%;
                text-align: center
            }

            #onetrust-banner-sdk.ot-buttons-fw #onetrust-button-group-parent button {
                float: none
            }

            #onetrust-banner-sdk.ot-buttons-fw #onetrust-pc-btn-handler.cookie-setting-link {
                text-align: center
            }
        }

        @media only screen and (min-width: 550px) {
            #onetrust-banner-sdk .banner-option:not(:first-child) {
                border-left: 1px solid #d8d8d8;
                padding-left: 25px
            }
        }

        @media only screen and (min-width: 425px)and (max-width: 550px) {

            #onetrust-banner-sdk.ot-iab-2 #onetrust-button-group,
            #onetrust-banner-sdk.ot-iab-2 #onetrust-policy,
            #onetrust-banner-sdk.ot-iab-2 .banner-option {
                width: 100%
            }
        }

        @media only screen and (min-width: 769px) {
            #onetrust-banner-sdk #onetrust-button-group {
                margin-right: 30%
            }

            #onetrust-banner-sdk #banner-options {
                margin-left: 2em;
                margin-right: 5em;
                margin-bottom: 1.25em;
                width: calc(100% - 7em)
            }
        }

        @media only screen and (min-width: 897px)and (max-width: 1023px) {
            #onetrust-banner-sdk.vertical-align-content #onetrust-button-group-parent {
                position: absolute;
                top: 50%;
                left: 75%;
                transform: translateY(-50%)
            }

            #onetrust-banner-sdk #onetrust-close-btn-container {
                top: 50%;
                margin: auto;
                transform: translate(-50%, -50%);
                position: absolute;
                padding: 0;
                right: 0
            }

            #onetrust-banner-sdk #onetrust-close-btn-container button {
                position: relative;
                margin: 0;
                right: -22px;
                top: 2px
            }
        }

        @media only screen and (min-width: 1024px) {
            #onetrust-banner-sdk #onetrust-close-btn-container {
                top: 50%;
                margin: auto;
                transform: translate(-50%, -50%);
                position: absolute;
                right: 0
            }

            #onetrust-banner-sdk #onetrust-close-btn-container button {
                right: -12px
            }

            #onetrust-banner-sdk #onetrust-policy {
                margin-left: 2em
            }

            #onetrust-banner-sdk.vertical-align-content #onetrust-button-group-parent {
                position: absolute;
                top: 50%;
                left: 60%;
                transform: translateY(-50%)
            }

            #onetrust-banner-sdk .ot-optout-signal {
                width: 50%
            }

            #onetrust-banner-sdk.ot-iab-2 #onetrust-policy-title {
                width: 50%
            }

            #onetrust-banner-sdk.ot-iab-2 #onetrust-policy-text,
            #onetrust-banner-sdk.ot-iab-2 :not(.ot-dpd-desc)>.ot-b-addl-desc {
                margin-bottom: 1em;
                width: 50%;
                border-right: 1px solid #d8d8d8;
                padding-right: 1rem
            }

            #onetrust-banner-sdk.ot-iab-2 #onetrust-policy-text {
                margin-bottom: 0;
                padding-bottom: 1em
            }

            #onetrust-banner-sdk.ot-iab-2 :not(.ot-dpd-desc)>.ot-b-addl-desc {
                margin-bottom: 0;
                padding-bottom: 1em
            }

            #onetrust-banner-sdk.ot-iab-2 .ot-dpd-container {
                width: 45%;
                padding-left: 1rem;
                display: inline-block;
                float: none
            }

            #onetrust-banner-sdk.ot-iab-2 .ot-dpd-title {
                line-height: 1.7
            }

            #onetrust-banner-sdk.ot-iab-2 #onetrust-button-group-parent {
                left: auto;
                right: 4%;
                margin-left: 0
            }

            #onetrust-banner-sdk.ot-iab-2 #onetrust-button-group button {
                display: block
            }

            #onetrust-banner-sdk:not(.ot-iab-2) #onetrust-button-group-parent {
                margin: auto;
                width: 30%
            }

            #onetrust-banner-sdk:not(.ot-iab-2) #onetrust-group-container {
                width: 60%
            }

            #onetrust-banner-sdk #onetrust-button-group {
                margin-right: auto
            }

            #onetrust-banner-sdk #onetrust-accept-btn-handler,
            #onetrust-banner-sdk #onetrust-reject-all-handler,
            #onetrust-banner-sdk #onetrust-pc-btn-handler {
                margin-top: 1em
            }
        }

        @media only screen and (min-width: 890px) {
            #onetrust-banner-sdk.ot-buttons-fw:not(.ot-iab-2) #onetrust-button-group-parent {
                padding-left: 3%;
                padding-right: 4%;
                margin-left: 0
            }

            #onetrust-banner-sdk.ot-buttons-fw:not(.ot-iab-2) #onetrust-button-group {
                margin-right: 0;
                margin-top: 1.25em;
                width: 100%
            }

            #onetrust-banner-sdk.ot-buttons-fw:not(.ot-iab-2) #onetrust-button-group button {
                width: 100%;
                margin-bottom: 5px;
                margin-top: 5px
            }

            #onetrust-banner-sdk.ot-buttons-fw:not(.ot-iab-2) #onetrust-button-group button:last-of-type {
                margin-bottom: 20px
            }
        }

        @media only screen and (min-width: 1280px) {
            #onetrust-banner-sdk:not(.ot-iab-2) #onetrust-group-container {
                width: 55%
            }

            #onetrust-banner-sdk:not(.ot-iab-2) #onetrust-button-group-parent {
                width: 44%;
                padding-left: 2%;
                padding-right: 2%
            }

            #onetrust-banner-sdk:not(.ot-iab-2).vertical-align-content #onetrust-button-group-parent {
                position: absolute;
                left: 55%
            }
        }

        #onetrust-consent-sdk #onetrust-banner-sdk {
            background-color: #FFFFFF;
        }

        #onetrust-consent-sdk #onetrust-policy-title,
        #onetrust-consent-sdk #onetrust-policy-text,
        #onetrust-consent-sdk .ot-b-addl-desc,
        #onetrust-consent-sdk .ot-dpd-desc,
        #onetrust-consent-sdk .ot-dpd-title,
        #onetrust-consent-sdk #onetrust-policy-text *:not(.onetrust-vendors-list-handler),
        #onetrust-consent-sdk .ot-dpd-desc *:not(.onetrust-vendors-list-handler),
        #onetrust-consent-sdk #onetrust-banner-sdk #banner-options *,
        #onetrust-banner-sdk .ot-cat-header,
        #onetrust-banner-sdk .ot-optout-signal {
            color: #000000;
        }

        #onetrust-consent-sdk #onetrust-banner-sdk .banner-option-details {
            background-color: #E9E9E9;
        }

        #onetrust-consent-sdk #onetrust-banner-sdk a[href],
        #onetrust-consent-sdk #onetrust-banner-sdk a[href] font,
        #onetrust-consent-sdk #onetrust-banner-sdk .ot-link-btn {
            color: #008755;
        }

        #onetrust-consent-sdk #onetrust-accept-btn-handler,
        #onetrust-banner-sdk #onetrust-reject-all-handler {
            background-color: #008755;
            border-color: #008755;
            color: #ffffff;
        }

        #onetrust-consent-sdk #onetrust-banner-sdk *:focus,
        #onetrust-consent-sdk #onetrust-banner-sdk:focus {
            outline-color: #000000;
            outline-width: 1px;
        }

        #onetrust-consent-sdk #onetrust-pc-btn-handler,
        #onetrust-consent-sdk #onetrust-pc-btn-handler.cookie-setting-link {
            color: #000000;
            border-color: #000000;
            background-color:
                #FFFFFF;
        }

        @font-face {
            font-family: 'AnPostSansRegular';
            src: url("#build/webfonts/AnPostSans-Regular.woff2") format("woff2"), url("#build/webfonts/AnPostSans-Regular.woff") format("woff");
            font-weight: normal;
        }

        @font-face {
            font-family: 'AnPostSansBold';
            src: url("#build/webfonts/AnPostSans-Bold.woff2") format("woff2"), url("#build/webfonts/AnPostSans-Bold.woff") format("woff");
            font-weight: bold;
        }

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap');


        #onetrust-consent-sdk h1,
        #onetrust-consent-sdk h2,
        #onetrust-consent-sdk h3,
        #onetrust-consent-sdk h4,
        #onetrust-consent-sdk h5,
        #onetrust-consent-sdk h6 {
            font-family: 'AnPostSansBold', sans-serif !important;
        }

        #onetrust-consent-sdk #onetrust-accept-btn-handler {
            font-size: 14px !important;
            padding: 20px 17px !important;
            min-width: 170px !important;
            min-height: 60px !important;
            border-radius: 5px !important;
        }

        #onetrust-consent-sdk #onetrust-pc-btn-handler {
            border-color: #008755 !important;
            font-size: 14px !important;
            padding: 20px 17px !important;
            min-width: 170px !important;
            min-height: 60px !important;
            border-radius: 5px !important;
        }

        .ot-sdk-show-settings {
            background-color: transparent;
            height: auto !important;
            width: auto !important;
            color: #ffffff !important;
            border: none !important;
            font-size: 13px !important;
            line-height: 20px !important;
            padding: 5px !important;
        }

        .ot-sdk-show-settings:hover {
            background-color: transparent !important;
        }

        @media only screen and (min-width: 1170px) {
            .ot-sdk-show-settings {
                font-size: 14px !important;
                line-height: 20px !important;
                padding: 0 !important;
            }
        }

        #onetrust-pc-sdk.otPcCenter {
            position: fixed;
            margin: 0 auto;
            top: 5%;
            bottom: 10%;
            right: 0;
            left: 0;
            width: 40%;
            max-width: 575px;
            min-width: 575px;
            border-radius: 2.5px;
            z-index: 2147483647;
            background-color: #fff;
            -webkit-box-shadow: 0px 2px 10px -3px #999;
            -moz-box-shadow: 0px 2px 10px -3px #999;
            box-shadow: 0px 2px 10px -3px #999
        }

        #onetrust-pc-sdk.otRelFont {
            font-size: 1rem
        }

        #onetrust-pc-sdk.otPcCenter[dir=rtl] {
            right: 0;
            left: 0
        }

        #onetrust-pc-sdk.ot-sdk-container {
            padding: 0
        }

        #onetrust-pc-sdk #pc-title,
        #onetrust-pc-sdk #manage-cookies-text,
        #onetrust-pc-sdk .category-header,
        #onetrust-pc-sdk #vendors-list-title,
        #onetrust-pc-sdk #select-all-text-container p,
        #onetrust-pc-sdk .vendor-info .vendor-title,
        #onetrust-pc-sdk .ot-always-active {
            font-weight: bold;
            color: dimgray
        }

        #onetrust-pc-sdk .category-header {
            float: left;
            width: calc(100% - 65px)
        }

        #onetrust-pc-sdk .category-item p {
            clear: both;
            float: left;
            margin-top: 10px;
            margin-bottom: 5px;
            line-height: 1.4;
            font-size: .82em;
            color: dimgray
        }

        #onetrust-pc-sdk .pc-close-button {
            height: 44px;
            width: 44px;
            background-size: 10px
        }

        #onetrust-pc-sdk #pc-title {
            float: left;
            font-size: 1.2em;
            line-height: 1.3;
            margin-bottom: 10px;
            width: 100%
        }

        #onetrust-pc-sdk #pc-policy-text {
            clear: both;
            width: 100%;
            font-size: .82em;
            line-height: 1.4
        }

        #onetrust-pc-sdk #pc-policy-text a {
            font-size: 1em;
            line-height: 1.2;
            margin-right: 8px
        }

        #onetrust-pc-sdk #pc-policy-text button {
            margin-right: 8px
        }

        #onetrust-pc-sdk #pc-policy-text * {
            font-size: inherit
        }

        #onetrust-pc-sdk #pc-policy-text ul li {
            padding: 10px 0px
        }

        #onetrust-pc-sdk #vdr-lst-dsc {
            font-size: .812em;
            line-height: 1.5;
            padding: 10px 15px 5px 15px
        }

        #onetrust-pc-sdk a {
            color: #656565;
            cursor: pointer
        }

        #onetrust-pc-sdk a:hover {
            color: #3860be
        }

        #onetrust-pc-sdk label {
            margin-bottom: 0
        }

        #onetrust-pc-sdk .ot-link-btn {
            padding: 0;
            margin-bottom: 0;
            border: 0;
            font-weight: normal;
            line-height: normal;
            width: auto;
            height: auto
        }

        #onetrust-pc-sdk button {
            max-width: 394px;
            padding: 12px 30px;
            line-height: 1;
            word-break: break-word;
            word-wrap: break-word;
            white-space: normal;
            font-weight: bold;
            height: auto
        }

        #onetrust-pc-sdk #ot-content {
            position: absolute;
            overflow-y: scroll;
            padding-left: 0px;
            padding-right: 30px;
            top: 20px;
            bottom: 20px;
            margin: 0 3px 0 50px;
            width: calc(100% - 83px)
        }

        #onetrust-pc-sdk #cookie-preferences .ot-always-active {
            float: right;
            clear: none;
            color: #3860be;
            margin: 0;
            font-size: .9em;
            line-height: 1.3
        }

        #onetrust-pc-sdk #ot-content::-webkit-scrollbar-track,
        #onetrust-pc-sdk .ot-group-options::-webkit-scrollbar-track,
        #onetrust-pc-sdk #vendor-list-content::-webkit-scrollbar-track {
            margin-right: 20px
        }

        #onetrust-pc-sdk #ot-content::-webkit-scrollbar,
        #onetrust-pc-sdk .ot-group-options::-webkit-scrollbar,
        #onetrust-pc-sdk #vendor-list-content::-webkit-scrollbar {
            width: 11px
        }

        #onetrust-pc-sdk #ot-content::-webkit-scrollbar-thumb,
        #onetrust-pc-sdk .ot-group-options::-webkit-scrollbar-thumb,
        #onetrust-pc-sdk #vendor-list-content::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background: #d8d8d8
        }

        #onetrust-pc-sdk input[type=checkbox]:focus+.accordion-header {
            outline-style: solid;
            outline-width: 1px
        }

        #onetrust-pc-sdk #ot-content,
        #onetrust-pc-sdk #vendor-list-content,
        #onetrust-pc-sdk .ot-group-options {
            scrollbar-arrow-color: #d8d8d8;
            scrollbar-darkshadow-color: #d8d8d8;
            scrollbar-face-color: #d8d8d8;
            scrollbar-shadow-color: #d8d8d8
        }

        #onetrust-pc-sdk #accept-recommended-container {
            margin-bottom: 10px
        }

        #onetrust-pc-sdk #accept-recommended-container button {
            float: left;
            outline-offset: -1px
        }

        #onetrust-pc-sdk .save-preference-btn-handler {
            float: left
        }

        #onetrust-pc-sdk .ot-pc-refuse-all-handler {
            float: left;
            margin-right: 10px
        }

        #onetrust-pc-sdk #privacy-notice-link {
            text-decoration: underline
        }

        #onetrust-pc-sdk .cookie-subgroups-container {
            display: inline-block;
            clear: both;
            width: 100%;
            margin-bottom: 10px
        }

        #onetrust-pc-sdk .cookie-subgroup-toggle {
            float: right
        }

        #onetrust-pc-sdk .cookie-subgroup-toggle.ot-always-active-subgroup {
            width: auto
        }

        #onetrust-pc-sdk ul.cookie-subgroups {
            margin: 0;
            font-size: initial
        }

        #onetrust-pc-sdk ul.cookie-subgroups li p,
        #onetrust-pc-sdk ul.cookie-subgroups li h5 {
            font-size: .7em;
            line-height: 1.4;
            color: dimgray
        }

        #onetrust-pc-sdk ul.cookie-subgroups .ot-switch {
            min-height: auto
        }

        #onetrust-pc-sdk ul.cookie-subgroups .ot-switch-nob {
            top: 0
        }

        #onetrust-pc-sdk ul.cookie-subgroups .accordion-header {
            display: inline-block;
            width: 100%
        }

        #onetrust-pc-sdk ul.cookie-subgroups .accordion-text {
            margin: 0
        }

        #onetrust-pc-sdk ul.cookie-subgroups li {
            padding: 0;
            border: none
        }

        #onetrust-pc-sdk ul.cookie-subgroups li h5 {
            position: relative;
            top: 5px;
            font-weight: bold;
            margin-bottom: 0;
            float: left
        }

        #onetrust-pc-sdk li.cookie-subgroup {
            margin-left: 20px;
            overflow: auto
        }

        #onetrust-pc-sdk li.cookie-subgroup>h5 {
            width: calc(100% - 70px)
        }

        #onetrust-pc-sdk .category-item p>ul,
        #onetrust-pc-sdk li.cookie-subgroup p>ul {
            margin: 0px;
            list-style: disc;
            margin-left: 15px;
            font-size: inherit
        }

        #onetrust-pc-sdk .category-item p>ul li,
        #onetrust-pc-sdk li.cookie-subgroup p>ul li {
            font-size: inherit;
            padding-top: 10px;
            padding-left: 0px;
            padding-right: 0px;
            border: none
        }

        #onetrust-pc-sdk .category-item p>ul li:last-child,
        #onetrust-pc-sdk li.cookie-subgroup p>ul li:last-child {
            padding-bottom: 10px
        }

        #onetrust-pc-sdk .ot-switch.ot-hide-tgl {
            visibility: hidden
        }

        #onetrust-pc-sdk .ot-switch.ot-hide-tgl * {
            visibility: hidden
        }

        #onetrust-pc-sdk .pc-logo {
            height: 40px;
            width: 120px;
            margin-bottom: 10px
        }

        #onetrust-pc-sdk .ot-pc-footer-logo {
            height: 25px;
            width: 138px;
            float: right;
            margin-top: 31px
        }

        #onetrust-pc-sdk.otPcCenter[dir=rtl] .ot-pc-footer-logo {
            direction: rtl
        }

        #onetrust-pc-sdk .ot-toggle-group,
        #onetrust-pc-sdk .ot-toggle,
        #onetrust-pc-sdk .ot-arrow-container {
            display: inline-block
        }

        #onetrust-pc-sdk .ot-toggle-group {
            width: 70px;
            float: right
        }

        #onetrust-pc-sdk .ot-toggle {
            padding: 0;
            font-size: 100%
        }

        #onetrust-pc-sdk .ot-arrow {
            width: 10px;
            margin-left: 15px
        }

        #onetrust-pc-sdk button.ot-pill {
            border-radius: 20px;
            font-size: .75em;
            text-align: center;
            background-color: #3860be;
            border-color: #3860be;
            font-weight: 600;
            box-shadow: 0 0 10px 1px #cce1ff;
            width: 180px;
            color: #fff;
            height: auto;
            white-space: normal;
            word-break: break-word;
            word-wrap: break-word;
            padding: 10px;
            line-height: 1.2;
            letter-spacing: .05em
        }

        #onetrust-pc-sdk button.ot-pill:first-child {
            margin-top: 10px
        }

        #onetrust-pc-sdk .ot-arrow-container {
            margin-top: 1.2px
        }

        #onetrust-pc-sdk .ot-arrow-container svg {
            -webkit-transition: all 300ms ease-in 0s;
            -moz-transition: all 300ms ease-in 0s;
            -o-transition: all 300ms ease-in 0s;
            transition: all 300ms ease-in 0s;
            height: 10px;
            width: 10px
        }

        #onetrust-pc-sdk input:checked~.accordion-header .ot-arrow {
            transform: rotate(90deg);
            -o-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            -webkit-transform: rotate(90deg)
        }

        #onetrust-pc-sdk .ot-arrow {
            width: 10px;
            margin-left: 15px;
            transition: all 300ms ease-in 0s;
            -webkit-transition: all 300ms ease-in 0s;
            -moz-transition: all 300ms ease-in 0s;
            -o-transition: all 300ms ease-in 0s
        }

        #onetrust-pc-sdk .category-vendors-list-container {
            margin-bottom: 0
        }

        #onetrust-pc-sdk .category-host-list-container {
            margin-top: 10px
        }

        #onetrust-pc-sdk .category-vendors-list-handler,
        #onetrust-pc-sdk .category-vendors-list-handler+a,
        #onetrust-pc-sdk .category-host-list-handler {
            clear: both;
            color: #3860be;
            margin-left: 0;
            font-size: .75em;
            text-decoration: none;
            float: left
        }

        #onetrust-pc-sdk .category-vendors-list-handler:hover,
        #onetrust-pc-sdk .category-vendors-list-handler+a:hover,
        #onetrust-pc-sdk .category-host-list-handler:hover {
            color: #1883fd
        }

        #onetrust-pc-sdk .category-vendors-list-handler+a {
            clear: none
        }

        #onetrust-pc-sdk .category-vendors-list-handler+a::after {
            content: "";
            height: 15px;
            width: 15px;
            background-repeat: no-repeat;
            margin-left: 5px;
            float: right;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 511.626 511.627'%3E%3Cg fill='%231276CE'%3E%3Cpath d='M392.857 292.354h-18.274c-2.669 0-4.859.855-6.563 2.573-1.718 1.708-2.573 3.897-2.573 6.563v91.361c0 12.563-4.47 23.315-13.415 32.262-8.945 8.945-19.701 13.414-32.264 13.414H82.224c-12.562 0-23.317-4.469-32.264-13.414-8.945-8.946-13.417-19.698-13.417-32.262V155.31c0-12.562 4.471-23.313 13.417-32.259 8.947-8.947 19.702-13.418 32.264-13.418h200.994c2.669 0 4.859-.859 6.57-2.57 1.711-1.713 2.566-3.9 2.566-6.567V82.221c0-2.662-.855-4.853-2.566-6.563-1.711-1.713-3.901-2.568-6.57-2.568H82.224c-22.648 0-42.016 8.042-58.102 24.125C8.042 113.297 0 132.665 0 155.313v237.542c0 22.647 8.042 42.018 24.123 58.095 16.086 16.084 35.454 24.13 58.102 24.13h237.543c22.647 0 42.017-8.046 58.101-24.13 16.085-16.077 24.127-35.447 24.127-58.095v-91.358c0-2.669-.856-4.859-2.574-6.57-1.713-1.718-3.903-2.573-6.565-2.573z'/%3E%3Cpath d='M506.199 41.971c-3.617-3.617-7.905-5.424-12.85-5.424H347.171c-4.948 0-9.233 1.807-12.847 5.424-3.617 3.615-5.428 7.898-5.428 12.847s1.811 9.233 5.428 12.85l50.247 50.248-186.147 186.151c-1.906 1.903-2.856 4.093-2.856 6.563 0 2.479.953 4.668 2.856 6.571l32.548 32.544c1.903 1.903 4.093 2.852 6.567 2.852s4.665-.948 6.567-2.852l186.148-186.148 50.251 50.248c3.614 3.617 7.898 5.426 12.847 5.426s9.233-1.809 12.851-5.426c3.617-3.616 5.424-7.898 5.424-12.847V54.818c-.001-4.952-1.814-9.232-5.428-12.847z'/%3E%3C/g%3E%3C/svg%3E")
        }

        #onetrust-pc-sdk .back-btn-handler {
            font-size: 1em;
            text-decoration: none;
            font-weight: bold;
            color: #2e3644;
            display: table-cell;
            vertical-align: middle
        }

        #onetrust-pc-sdk .back-btn-handler p {
            display: inline-block;
            word-break: break-word;
            word-wrap: break-word;
            margin-bottom: 0;
            max-width: 70px;
            vertical-align: middle;
            color: #656565;
            font-size: .8em;
            font-weight: bold
        }

        #onetrust-pc-sdk .back-btn-handler p:hover {
            opacity: .6
        }

        #onetrust-pc-sdk #vendors-list-title {
            margin: 30px 0 15px 20px;
            font-size: 1em;
            text-align: left
        }

        #onetrust-pc-sdk #vendors-list-header {
            margin: 20px 0 0 30px;
            height: auto;
            width: auto
        }

        #onetrust-pc-sdk #vendors-list-header input::placeholder {
            color: #d4d4d4;
            font-style: italic
        }

        #onetrust-pc-sdk #vendor-search-handler {
            height: 31px;
            width: 380px;
            border-radius: 50px;
            font-size: .8em;
            padding: 0 35px 0 15px;
            float: left;
            margin: 6px 12px 0 50px
        }

        #onetrust-pc-sdk #vendor-list-content {
            position: relative;
            overflow-y: scroll;
            padding-left: 0px;
            top: 60px;
            bottom: 75px;
            margin-right: 7px;
            margin-left: 40px;
            max-width: 90%;
            min-width: 90%;
            height: calc(100% - 265px)
        }

        #onetrust-pc-sdk #vendor-list-content .ot-sdk-column {
            padding-right: 22px;
            padding-left: 10px
        }

        #onetrust-pc-sdk #vendor-list-content.no-results {
            height: calc(100% - 300px)
        }

        #onetrust-pc-sdk #vendors-list {
            height: calc(100% - 12px);
            width: 100%;
            bottom: 0px
        }

        #onetrust-pc-sdk #vendors-list .ot-toggle-group {
            top: 10px;
            width: 50px;
            right: 12px;
            position: absolute
        }

        #onetrust-pc-sdk #vendors-list .ot-checkbox {
            height: auto
        }

        #onetrust-pc-sdk #vendors-list .ot-arrow-container {
            float: right;
            position: relative
        }

        #onetrust-pc-sdk .category-vendors-list-container {
            overflow: hidden
        }

        #onetrust-pc-sdk #select-all-container {
            position: relative;
            height: auto;
            width: 100%;
            display: block;
            top: 43px;
            margin-bottom: 10px;
            padding-bottom: 4px;
            color: dimgray
        }

        #onetrust-pc-sdk #select-all-container p {
            font-size: .75em;
            color: #6b6b6b;
            margin: 0;
            display: inline-block
        }

        #onetrust-pc-sdk #select-all-container .ot-checkbox {
            height: auto;
            float: right;
            width: 160px;
            max-width: 160px;
            margin-right: 90px
        }

        #onetrust-pc-sdk.ot-sdk-not-webkit #select-all-container .ot-checkbox {
            margin-right: 99px
        }

        #onetrust-pc-sdk #ot-back-arrow {
            height: 12px;
            width: 20px;
            display: inline-block;
            vertical-align: middle
        }

        #onetrust-pc-sdk #search-container {
            width: 100%;
            left: 0;
            position: absolute;
            height: 45px;
            background-color: #f8f8f8
        }

        #onetrust-pc-sdk #search-container>svg {
            width: 30px;
            height: 30px;
            position: relative;
            float: left;
            right: 42px;
            top: 6px
        }

        #onetrust-pc-sdk #filter-btn-handler {
            border-radius: 17px;
            display: inline-block;
            position: relative;
            width: 32px;
            height: 32px;
            margin-top: 6px;
            right: 25px;
            -moz-transition: .1s ease;
            -o-transition: .1s ease;
            -webkit-transition: 1s ease;
            transition: .1s ease
        }

        #onetrust-pc-sdk #filter-btn-handler span {
            margin-bottom: 0;
            line-height: 1.2;
            font-size: 1em;
            color: #2e3644;
            max-width: 100px;
            vertical-align: middle
        }

        #onetrust-pc-sdk #filter-icon {
            width: 12px;
            height: 30px;
            margin: 3px 10px 0 10px;
            display: block;
            position: static;
            right: auto;
            top: auto
        }

        #onetrust-pc-sdk #filter-btn-handler:hover {
            background-color: #3860be
        }

        #onetrust-pc-sdk #filter-btn-handler:hover #filter-icon-path {
            fill: #fff
        }

        #onetrust-pc-sdk .vendor-privacy-notice {
            color: #3860be;
            text-decoration: none;
            font-weight: 100;
            display: block;
            padding-top: 10px;
            transform: translate(0, 1%);
            -o-transform: translate(0, 1%);
            -ms-transform: translate(0, 1%);
            -webkit-transform: translate(0, 1%);
            position: relative;
            z-index: 2
        }

        #onetrust-pc-sdk .vendor-privacy-notice * {
            font-size: inherit
        }

        #onetrust-pc-sdk .vendor-privacy-notice:hover {
            text-decoration: underline
        }

        #onetrust-pc-sdk .vendor-title {
            width: 130px;
            max-width: 130px;
            vertical-align: middle
        }

        #onetrust-pc-sdk .vendor-info {
            width: 120px;
            height: auto;
            float: left;
            word-break: break-word;
            word-wrap: break-word;
            vertical-align: middle;
            padding-left: 3px;
            padding-bottom: 3px
        }

        #onetrust-pc-sdk .vendor-purposes {
            transform: translate(150%, 150%);
            -o-transform: translate(150%, 150%);
            -ms-transform: translate(150%, 150%);
            -webkit-transform: translate(150%, 150%);
            vertical-align: bottom;
            height: auto;
            float: left;
            text-align: center
        }

        #onetrust-pc-sdk .vendor-purposes p {
            margin-bottom: 0;
            font-weight: 500;
            float: left;
            word-break: break-word;
            word-wrap: break-word
        }

        #onetrust-pc-sdk .vendor-purposes p,
        #onetrust-pc-sdk .vendor-privacy-notice {
            letter-spacing: .03em;
            font-size: .7em;
            font-weight: 400
        }

        #onetrust-pc-sdk .vendor-options {
            min-height: 100px;
            border-radius: 2px;
            background-color: #f8f8f8
        }

        #onetrust-pc-sdk .vendor-options:first-child {
            border-top: none
        }

        #onetrust-pc-sdk .vendor-option:first-of-type {
            border-top: none
        }

        #onetrust-pc-sdk .vendor-option {
            min-height: 30px;
            display: table;
            width: 100%;
            border-top: 1px solid #e2e2e2
        }

        #onetrust-pc-sdk .vendor-option a {
            display: table-cell;
            vertical-align: middle;
            width: 120px
        }

        #onetrust-pc-sdk .vendor-option a span {
            font-size: .75em;
            color: #3860be;
            width: 100px
        }

        #onetrust-pc-sdk .vendor-option a svg {
            width: 18px;
            vertical-align: bottom
        }

        #onetrust-pc-sdk .vendor-option p {
            display: table-cell;
            vertical-align: middle;
            word-break: break-word;
            word-wrap: break-word;
            margin: 0;
            padding: 0 0 0 15px;
            width: 150px;
            font-size: .75em;
            line-height: 1.4;
            color: #2e3644
        }

        #onetrust-pc-sdk #vendors-list-container .accordion-header {
            overflow: hidden;
            cursor: pointer
        }

        #onetrust-pc-sdk .vendor-options {
            border-radius: 2px
        }

        #onetrust-pc-sdk .vendor-options p {
            font-size: .69em;
            text-align: left;
            display: table-cell;
            vertical-align: middle;
            word-break: break-word;
            word-wrap: break-word;
            margin: 0;
            padding-left: 15px;
            color: #2e3644
        }

        #onetrust-pc-sdk #vendor-list-content.host-list-content {
            margin-left: 30px;
            margin-right: 7px
        }

        #onetrust-pc-sdk #vendor-list-content.host-list-content .ot-sdk-column {
            padding: 0px
        }

        #onetrust-pc-sdk #vendor-list-content.host-list-content+#vendor-list-save-btn {
            padding-left: 30px
        }

        #onetrust-pc-sdk .hosts-list #vendors-list-header {
            margin-left: 0px
        }

        #onetrust-pc-sdk .hosts-list .back-btn-handler {
            padding-left: 12px
        }

        #onetrust-pc-sdk .hosts-list #vendors-list-title {
            margin-left: 30px
        }

        #onetrust-pc-sdk .hosts-list #vendor-search-handler {
            margin-left: 30px
        }

        #onetrust-pc-sdk #hosts-list-container .ot-checkbox {
            float: right;
            position: relative;
            margin-right: 42px;
            top: 10px
        }

        #onetrust-pc-sdk #hosts-list-container .ot-checkbox input[type=checkbox] {
            width: auto;
            height: auto
        }

        #onetrust-pc-sdk #hosts-list-container .ot-checkbox label {
            height: 20px;
            width: 20px;
            padding-left: 0px
        }

        #onetrust-pc-sdk #hosts-list-container .accordion-header {
            display: inline-block;
            width: 100%
        }

        #onetrust-pc-sdk #hosts-list-container .accordion-text {
            overflow: hidden;
            width: 95%
        }

        #onetrust-pc-sdk #hosts-list-container .host-info {
            width: 85%;
            float: left
        }

        #onetrust-pc-sdk #hosts-list-container .host-title,
        #onetrust-pc-sdk #hosts-list-container .host-description {
            display: inline-block;
            width: 90%
        }

        #onetrust-pc-sdk #hosts-list-container .host-info>a {
            text-decoration: underline;
            font-size: .82em;
            position: relative;
            z-index: 2;
            float: left;
            margin-bottom: 5px
        }

        #onetrust-pc-sdk #hosts-list-container .host-title+a {
            margin-top: 5px
        }

        #onetrust-pc-sdk #hosts-list-container .host-notice {
            margin-top: 3px;
            clear: both
        }

        #onetrust-pc-sdk #hosts-list-container .host-title,
        #onetrust-pc-sdk #hosts-list-container .host-title a,
        #onetrust-pc-sdk #hosts-list-container .host-description,
        #onetrust-pc-sdk #hosts-list-container .vendor-host {
            color: dimgray;
            word-break: break-word;
            word-wrap: break-word
        }

        #onetrust-pc-sdk #hosts-list-container .host-title,
        #onetrust-pc-sdk #hosts-list-container .host-title a {
            font-weight: bold;
            font-size: .82em;
            line-height: 1.3
        }

        #onetrust-pc-sdk #hosts-list-container .host-title a,
        #onetrust-pc-sdk #hosts-list-container .cookie-name-container a {
            font-size: 1em
        }

        #onetrust-pc-sdk #hosts-list-container .host-notice span {
            color: #3860be;
            font-size: .72em;
            font-weight: normal;
            display: inline-block
        }

        #onetrust-pc-sdk #hosts-list-container .host-notice span * {
            font-size: inherit
        }

        #onetrust-pc-sdk #hosts-list-container .host-description,
        #onetrust-pc-sdk #hosts-list-container .vendor-host {
            font-size: .688em;
            line-height: 1.4;
            font-weight: normal
        }

        #onetrust-pc-sdk #hosts-list-container .host-description {
            margin-top: 10px
        }

        #onetrust-pc-sdk #hosts-list-container .host-item {
            padding: 10px 0px;
            overflow: auto
        }

        #onetrust-pc-sdk #hosts-list-container .host-item:first-of-type {
            border-top: 1px solid #e2e2e2
        }

        #onetrust-pc-sdk #hosts-list-container input:checked~.accordion-header .ot-arrow-container {
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-top: 6px solid #737373;
            margin-top: 6px
        }

        #onetrust-pc-sdk #hosts-list-container .ot-arrow-container {
            float: none;
            display: inline-block;
            vertical-align: middle;
            border-top: 6px solid transparent;
            border-bottom: 6px solid transparent;
            border-left: 6px solid #737373;
            margin-left: 10px
        }

        #onetrust-pc-sdk #hosts-list-container .host-option-group {
            margin: 0;
            font-size: inherit;
            display: inline-block;
            width: 100%
        }

        #onetrust-pc-sdk #hosts-list-container .host-option-group li>div div {
            font-size: .8em;
            padding: 5px 0
        }

        #onetrust-pc-sdk #hosts-list-container .host-option-group li>div div:nth-child(1) {
            width: 30%;
            float: left
        }

        #onetrust-pc-sdk #hosts-list-container .host-option-group li>div div:nth-child(2) {
            width: 70%;
            float: left;
            word-break: break-word;
            word-wrap: break-word
        }

        #onetrust-pc-sdk #hosts-list-container .vendor-host {
            border: none;
            display: inline-block;
            width: calc(100% - 10px);
            padding: 10px;
            margin-bottom: 10px;
            background-color: #f8f8f8
        }

        #onetrust-pc-sdk .vendor-option-purpose {
            border-top: 1px solid #e9e9e9;
            border-bottom: 1px solid #e9e9e9;
            margin-bottom: 10px;
            min-height: 30px;
            max-height: 50px;
            width: 100%;
            display: table
        }

        #onetrust-pc-sdk .vendor-option-purpose:first-child,
        #onetrust-pc-sdk .vendor-option-purpose:first-of-type {
            border-top: none
        }

        #onetrust-pc-sdk .vendor-option-purpose p {
            font-weight: bold
        }

        #onetrust-pc-sdk .vendor-consent-group {
            display: inline-block;
            width: calc(100% - 15px);
            margin-bottom: 10px
        }

        #onetrust-pc-sdk .ot-ven-disc {
            padding-bottom: 10px
        }

        #onetrust-pc-sdk .ot-ven-disc:not(:first-child) {
            border-top: 1px solid #ddd !important
        }

        #onetrust-pc-sdk .ot-ven-disc:nth-child(n+3) p {
            display: inline-block
        }

        #onetrust-pc-sdk .ot-ven-disc:nth-child(n+3) p:nth-of-type(odd) {
            width: 30%
        }

        #onetrust-pc-sdk .ot-ven-disc:nth-child(n+3) p:nth-of-type(even) {
            width: 50%;
            word-break: break-word;
            word-wrap: break-word
        }

        #onetrust-pc-sdk .ot-ven-disc p {
            padding-top: 10px;
            display: block
        }

        #onetrust-pc-sdk .ot-ven-disc .disc-pur-cont {
            display: inline
        }

        #onetrust-pc-sdk .ot-ven-disc .disc-pur {
            position: relative;
            width: 50% !important;
            word-break: break-word;
            word-wrap: break-word;
            left: calc(30% + 17px)
        }

        #onetrust-pc-sdk .ot-ven-disc .disc-pur:nth-child(-n+1) {
            position: static
        }

        #onetrust-pc-sdk .legitimate-interest-group .consent-category {
            float: left
        }

        #onetrust-pc-sdk .vendor-opt-out-handler {
            text-decoration: none;
            float: right;
            color: #3860be;
            position: relative
        }

        #onetrust-pc-sdk .vendor-opt-out-handler span {
            font-size: .69em;
            line-height: 1.4
        }

        #onetrust-pc-sdk .vendor-opt-out-handler svg {
            width: 15px;
            height: 15px;
            vertical-align: middle
        }

        #onetrust-pc-sdk #no-results {
            text-align: center;
            margin-top: 30px;
            max-width: 93%
        }

        #onetrust-pc-sdk #no-results p {
            font-size: 1em;
            color: #2e3644;
            word-break: break-word;
            word-wrap: break-word
        }

        #onetrust-pc-sdk #no-results p span {
            font-weight: bold
        }

        #onetrust-pc-sdk #ot-filter-modal {
            width: 100%;
            height: auto;
            display: none;
            -moz-transition: .2s ease;
            -o-transition: .2s ease;
            -webkit-transition: 2s ease;
            transition: .2s ease;
            overflow: hidden;
            opacity: 1;
            right: 0
        }

        #onetrust-pc-sdk #ot-filter-modal .ot-pill {
            width: 130px;
            float: right;
            margin-top: 10px
        }

        #onetrust-pc-sdk #ot-options {
            z-index: 2147483646;
            background-color: #fff;
            position: absolute;
            height: auto;
            max-width: 325px;
            max-height: 450px;
            left: 195px;
            margin-top: 14px;
            margin-bottom: 20px;
            padding-right: 10px;
            border-radius: 3px;
            -webkit-box-shadow: 0px 0px 12px 2px #c7c5c7;
            -moz-box-shadow: 0px 0px 12px 2px #c7c5c7;
            box-shadow: 0px 0px 12px 2px #c7c5c7
        }

        #onetrust-pc-sdk .ot-group-options {
            max-height: 325px;
            overflow-y: auto;
            width: 100%
        }

        #onetrust-pc-sdk #ot-triangle {
            border: 12px solid transparent;
            display: none;
            position: absolute;
            z-index: 2147483647;
            right: 100px;
            top: 48px;
            transform: rotate(45deg);
            -o-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            background-color: #fff;
            -webkit-box-shadow: -3px -3px 5px -2px #c7c5c7;
            -moz-box-shadow: -3px -3px 5px -2px #c7c5c7;
            box-shadow: -3px -3px 5px -2px #c7c5c7
        }

        #onetrust-pc-sdk .ot-group-option {
            margin-bottom: 25px;
            margin-left: 15px;
            width: 75%
        }

        #onetrust-pc-sdk .ot-group-option p {
            display: inline-block;
            margin: 0;
            font-size: .9em;
            color: #2e3644
        }

        #onetrust-pc-sdk .ot-checkbox input[type=checkbox] {
            opacity: 0;
            margin: 0;
            position: absolute
        }

        #onetrust-pc-sdk .ot-checkbox label {
            position: relative;
            display: inline-block;
            padding-left: 30px;
            cursor: pointer;
            font-weight: 500
        }

        #onetrust-pc-sdk .ot-checkbox label span {
            font-size: .85em;
            color: dimgray
        }

        #onetrust-pc-sdk .ot-checkbox input:checked~label::before {
            background-color: #3860be
        }

        #onetrust-pc-sdk .ot-checkbox label::before,
        #onetrust-pc-sdk .ot-checkbox label::after {
            position: absolute;
            content: "";
            display: inline-block;
            border-radius: 3px
        }

        #onetrust-pc-sdk .ot-checkbox label::before {
            height: 18px;
            width: 18px;
            border: 1px solid #3860be;
            left: 0px;
            top: 2px
        }

        #onetrust-pc-sdk .ot-checkbox label::after {
            height: 5px;
            width: 9px;
            border-left: 3px solid;
            border-bottom: 3px solid;
            transform: rotate(-45deg);
            -o-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
            left: 4px;
            top: 7px
        }

        #onetrust-pc-sdk .ot-checkbox input[type=checkbox]+label::after {
            content: none;
            color: #fff
        }

        #onetrust-pc-sdk .ot-checkbox input[type=checkbox]:checked+label::after {
            content: ""
        }

        #onetrust-pc-sdk .ot-checkbox input[type=checkbox]:focus+label::before {
            outline-style: solid;
            outline-width: 2px;
            outline-style: auto
        }

        #onetrust-pc-sdk #select-all-text-container {
            height: auto;
            float: left;
            width: 83%
        }

        #onetrust-pc-sdk #select-all-text-container p * {
            font-size: inherit
        }

        #onetrust-pc-sdk #select-all-vendors-input-container,
        #onetrust-pc-sdk #select-all-hosts-input-container {
            width: 21px;
            height: auto;
            float: right
        }

        #onetrust-pc-sdk #select-all-vendors-input-container label,
        #onetrust-pc-sdk #select-all-hosts-input-container label {
            float: left;
            padding-left: 0
        }

        #onetrust-pc-sdk #select-all-vendors-input-container .ot-group-option-box,
        #onetrust-pc-sdk #select-all-hosts-input-container .ot-group-option-box {
            margin: 0
        }

        #onetrust-pc-sdk .label-text {
            display: none
        }

        #onetrust-pc-sdk #vendors-list-container:first-child {
            border-top: 1px solid #e2e2e2
        }

        #onetrust-pc-sdk ul {
            list-style: none;
            padding: 0
        }

        #onetrust-pc-sdk ul li {
            position: relative;
            margin: 0;
            padding: 15px 15px 15px 10px;
            border-bottom: 1px solid #e2e2e2
        }

        #onetrust-pc-sdk ul li h3 {
            font-size: .75em;
            color: #656565;
            margin: 0;
            display: inline-block;
            width: 70%;
            height: auto;
            word-break: break-word;
            word-wrap: break-word
        }

        #onetrust-pc-sdk ul li p {
            margin: 0;
            font-size: .7em
        }

        #onetrust-pc-sdk ul li input[type=checkbox] {
            position: absolute;
            cursor: pointer;
            width: 100%;
            height: 100%;
            opacity: 0;
            margin: 0;
            top: 0;
            left: 0
        }

        #onetrust-pc-sdk ul li input[type=checkbox]:not(:checked)~.accordion-text {
            margin-top: 0;
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            width: 100%;
            transition: .25s ease-out;
            display: none
        }

        #onetrust-pc-sdk ul li input[type=checkbox]:checked~.accordion-text {
            transition: .1s ease-in;
            margin-top: 10px;
            width: 100%;
            display: block
        }

        #onetrust-pc-sdk .category-vendors-list-container {
            margin-bottom: 0;
            width: 100%
        }

        #onetrust-pc-sdk .category-vendors-list-handler,
        #onetrust-pc-sdk .category-vendors-list-handler+a {
            margin-left: 0;
            margin-top: 10px
        }

        #onetrust-pc-sdk .vendor-option .op-out-group {
            float: right;
            margin-right: 10px
        }

        #onetrust-pc-sdk #select-all-vendors-input-container.line-through label::after,
        #onetrust-pc-sdk #select-all-vendors-leg-input-container.line-through label::after,
        #onetrust-pc-sdk #select-all-hosts-input-container.line-through label::after {
            height: auto;
            border-left: 0;
            transform: none;
            -o-transform: none;
            -ms-transform: none;
            -webkit-transform: none;
            left: 5px;
            top: 10.5px
        }

        #onetrust-pc-sdk #vendor-list-save-btn {
            position: relative;
            top: 38px;
            max-width: 90%;
            padding-left: 50px;
            padding-right: 50px
        }

        #onetrust-pc-sdk #manage-cookies-text {
            float: left;
            font-size: 1.2em;
            width: 100%
        }

        #onetrust-pc-sdk .button-theme {
            background-color: #68b631;
            color: #fff;
            border-color: #68b631;
            font-size: .75em;
            letter-spacing: .08em;
            margin-top: 19px
        }

        #onetrust-pc-sdk .button-theme:hover,
        #onetrust-pc-sdk .button-theme:focus {
            color: #fff;
            border-color: #68b631
        }

        #onetrust-pc-sdk #cookie-preferences {
            margin-top: 10px
        }

        #onetrust-pc-sdk #cookie-preferences h4 {
            font-size: .9em;
            line-height: 1.3;
            max-width: 90%;
            vertical-align: middle
        }

        #onetrust-pc-sdk .accordion-text .ot-switch,
        #onetrust-pc-sdk .ot-accordion-layout.category-item .ot-switch {
            position: relative;
            float: right;
            width: 45px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none
        }

        #onetrust-pc-sdk .accordion-text .switch-checkbox,
        #onetrust-pc-sdk .ot-accordion-layout.category-item .switch-checkbox {
            opacity: 0
        }

        #onetrust-pc-sdk .accordion-text .ot-switch-label,
        #onetrust-pc-sdk .ot-accordion-layout.category-item .ot-switch-label {
            display: block;
            overflow: hidden;
            cursor: pointer;
            border: 1px solid #ddd;
            border-radius: 20px;
            background-color: #f2f1f1
        }

        #onetrust-pc-sdk .accordion-text .ot-switch-inner,
        #onetrust-pc-sdk .ot-accordion-layout.category-item .ot-switch-inner {
            display: block;
            width: 200%;
            margin-left: -100%;
            transition: margin .2s ease-in 0s;
            -moz-transition: margin .2s ease-in 0s;
            -o-transition: margin .2s ease-in 0s;
            -webkit-transition: margin .2s ease-in 0s
        }

        #onetrust-pc-sdk .category-item {
            line-height: 1.1;
            margin-top: 10px;
            display: inline-block;
            width: 100%
        }

        #onetrust-pc-sdk .category-item .ot-switch-nob {
            width: 17px;
            height: 17px;
            right: 20px
        }

        #onetrust-pc-sdk .category-item .ot-switch.ot-toggle input {
            display: block;
            position: absolute
        }

        #onetrust-pc-sdk .category-item .ot-switch.ot-toggle input:focus+.ot-switch-label {
            outline-style: solid !important;
            outline-width: 1px !important
        }

        #onetrust-pc-sdk .switch-checkbox.category-switch-handler {
            margin: 0;
            width: 0
        }

        #onetrust-pc-sdk .save-preference-btn-container {
            margin-top: 20px;
            position: relative
        }

        #onetrust-pc-sdk #close-pc-btn-handler.ot-close-icon,
        #onetrust-pc-sdk #vendor-close-pc-btn-handler.ot-close-icon {
            position: absolute;
            top: 15px;
            right: 0;
            z-index: 2;
            padding: 0;
            background-color: transparent;
            border: none
        }

        #onetrust-pc-sdk #close-pc-btn-handler.ot-close-icon:hover,
        #onetrust-pc-sdk #vendor-close-pc-btn-handler.ot-close-icon:hover {
            opacity: .7
        }

        #onetrust-pc-sdk #close-pc-btn-handler.ot-close-icon svg,
        #onetrust-pc-sdk #vendor-close-pc-btn-handler.ot-close-icon svg {
            display: block;
            height: 10px;
            width: 10px
        }

        #onetrust-pc-sdk .ot-switch-inner:before,
        #onetrust-pc-sdk .ot-switch-inner:after {
            display: block;
            width: 50%;
            height: 23px
        }

        #onetrust-pc-sdk .ot-switch-inner:before {
            content: "";
            background-color: #d5e9ff
        }

        #onetrust-pc-sdk .ot-switch-nob {
            display: block;
            margin: 2px;
            background: #7d7d7d;
            position: absolute;
            bottom: 0;
            border: 2px solid #7d7d7d;
            border-radius: 20px;
            transition: all .2s ease-in 0s;
            -moz-transition: all .2s ease-in 0s;
            -o-transition: all .2s ease-in 0s;
            -webkit-transition: all .2s ease-in 0s
        }

        #onetrust-pc-sdk .switch-checkbox:checked+.ot-switch-label {
            transition: all .2s ease-in 0s;
            -moz-transition: all .2s ease-in 0s;
            -o-transition: all .2s ease-in 0s;
            -webkit-transition: all .2s ease-in 0s;
            border: 1px solid #3860be
        }

        #onetrust-pc-sdk .switch-checkbox:checked+.ot-switch-label .ot-switch-inner {
            margin-left: 0
        }

        #onetrust-pc-sdk .switch-checkbox:checked+.ot-switch-label .ot-switch-nob {
            right: 0px;
            background-color: #3860be;
            border-color: #3860be
        }

        #onetrust-pc-sdk #clear-filters-handler {
            float: right;
            max-width: 200px;
            margin-bottom: 30px;
            text-decoration: none
        }

        #onetrust-pc-sdk #clear-filters-handler p {
            float: right;
            font-weight: bold;
            color: #3860be;
            font-size: .9em;
            margin: 0
        }

        #onetrust-pc-sdk #clear-filters-handler p:hover {
            color: #2285f7
        }

        #onetrust-pc-sdk #clear-filters-container {
            width: 100%;
            height: auto;
            margin-top: 20px;
            float: right
        }

        #onetrust-pc-sdk .category-switch-handler:not(:checked),
        #onetrust-pc-sdk .category-switch-handler:checked {
            position: initial;
            pointer-events: initial
        }

        #onetrust-pc-sdk .ot-accordion-layout.category-item {
            position: relative;
            border-radius: 2px;
            margin: 0;
            padding: 0;
            border: 1px solid #e9e9e9;
            border-top: none;
            width: calc(100% - 2px);
            float: left
        }

        #onetrust-pc-sdk .ot-accordion-layout.category-item:first-of-type {
            margin-top: 10px;
            border-top: 1px solid #e9e9e9
        }

        #onetrust-pc-sdk .ot-accordion-layout.category-item>input[type=checkbox] {
            position: absolute;
            cursor: pointer;
            width: 100%;
            height: 100%;
            opacity: 0;
            margin: 0;
            top: 0;
            left: 0;
            z-index: 1
        }

        #onetrust-pc-sdk .ot-accordion-layout.category-item input[type=checkbox]:not(:checked)~.accordion-text {
            margin-top: 0;
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            width: 100%;
            transition: .25s ease-out
        }

        #onetrust-pc-sdk .ot-accordion-layout.category-item input[type=checkbox]:checked~.accordion-text {
            transition: .1s ease-in;
            margin-top: 10px;
            width: 100%;
            overflow: auto
        }

        #onetrust-pc-sdk .ot-accordion-layout.category-item input[type=checkbox]:checked~.ot-accordion-pc-container {
            width: auto;
            margin-top: 0px;
            padding-bottom: 10px
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-accordion-group-pc-container {
            padding-left: 20px;
            padding-right: 15px;
            width: calc(100% - 35px);
            font-size: .82em;
            margin-bottom: 10px
        }

        #onetrust-pc-sdk .ot-accordion-layout .accordion-header {
            padding-top: 11.5px;
            padding-bottom: 11.5px;
            padding-left: 20px;
            padding-right: 15px;
            width: calc(100% - 35px);
            display: inline-block
        }

        #onetrust-pc-sdk .ot-accordion-layout .accordion-text {
            width: 100%;
            padding: 0px
        }

        #onetrust-pc-sdk .ot-accordion-layout .cookie-subgroups-container {
            padding-left: 20px;
            padding-right: 15px;
            padding-bottom: 7.5px;
            margin: 0;
            width: calc(100% - 35px)
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-accordion-pc-container,
        #onetrust-pc-sdk .ot-accordion-layout .ot-switch.ot-toggle {
            z-index: 1;
            position: relative
        }

        #onetrust-pc-sdk .ot-accordion-layout .category-header+.ot-arrow-container {
            float: right;
            position: relative
        }

        #onetrust-pc-sdk .ot-accordion-layout .category-header+.ot-arrow-container .ot-arrow {
            width: 15px;
            height: 20px;
            margin-left: 5px;
            color: dimgray
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-always-active-group>.ot-arrow-container {
            top: -2px
        }

        #onetrust-pc-sdk .ot-accordion-layout .category-header {
            float: none;
            font-size: .9em;
            color: #2e3644;
            margin: 0;
            display: inline-block;
            height: auto;
            word-wrap: break-word
        }

        #onetrust-pc-sdk .ot-accordion-layout .category-vendors-list-container,
        #onetrust-pc-sdk .ot-accordion-layout .category-host-list-container {
            width: calc(100% - 20px);
            display: inline-block;
            margin-top: 0px;
            padding: 10px 0px 10px 20px
        }

        #onetrust-pc-sdk.ot-leg-opt-out .ot-toggle-group {
            width: 45px
        }

        #onetrust-pc-sdk.ot-leg-opt-out #manage-cookies-text {
            padding-bottom: 10px
        }

        #onetrust-pc-sdk.ot-leg-opt-out .leg-int-header {
            color: #77808e;
            overflow: hidden;
            padding-top: 7.5px;
            padding-bottom: 7.5px;
            width: calc(100% - 2px);
            border-top-left-radius: 3px;
            border-top-right-radius: 3px
        }

        #onetrust-pc-sdk.ot-leg-opt-out .leg-int-header span:first-child {
            max-width: 80px
        }

        #onetrust-pc-sdk.ot-leg-opt-out .leg-int-header span:last-child {
            padding-right: 10px;
            max-width: 95px;
            text-align: center
        }

        #onetrust-pc-sdk.ot-leg-opt-out .leg-int-title {
            float: right;
            font-size: .813em
        }

        #onetrust-pc-sdk.ot-leg-opt-out .leg-int-header.ot-leg-border-color {
            background-color: #f8f8f8;
            border: 1px solid #e9e9e9
        }

        #onetrust-pc-sdk.ot-leg-opt-out .leg-int-header.ot-leg-border-color span:first-child {
            text-align: left;
            width: 80px
        }

        #onetrust-pc-sdk.ot-leg-opt-out li.cookie-subgroup>h5,
        #onetrust-pc-sdk.ot-leg-opt-out .category-header {
            width: calc(100% - 125px)
        }

        #onetrust-pc-sdk.ot-leg-opt-out li.cookie-subgroup>h5+.cookie-subgroup-toggle {
            padding-left: 13px
        }

        #onetrust-pc-sdk.ot-leg-opt-out .ot-accordion-pc-container .ot-accordion-group-pc-container {
            margin-bottom: 5px
        }

        #onetrust-pc-sdk.ot-leg-opt-out .ot-accordion-pc-container .cookie-subgroups-container {
            border-top: 1px solid #e9e9e9
        }

        #onetrust-pc-sdk.ot-leg-opt-out .ot-accordion-pc-container ul.cookie-subgroups li {
            margin-top: 5px;
            margin-bottom: 5px
        }

        #onetrust-pc-sdk.ot-leg-opt-out .ot-accordion-pc-container li.cookie-subgroup>h5+.cookie-subgroup-toggle {
            padding-right: 20px
        }

        #onetrust-pc-sdk.ot-leg-opt-out .accordion-header .ot-arrow-container+.ot-switch.ot-toggle,
        #onetrust-pc-sdk.ot-leg-opt-out .accordion-text h4+.ot-switch.ot-toggle {
            padding-left: 13px
        }

        #onetrust-pc-sdk.ot-leg-opt-out #select-all-text-container {
            text-align: right
        }

        #onetrust-pc-sdk.ot-leg-opt-out .hosts-list #select-all-container .ot-checkbox {
            margin-right: 80px;
            right: 0
        }

        #onetrust-pc-sdk.ot-leg-opt-out .hosts-list #select-all-text-container {
            width: 94%
        }

        #onetrust-pc-sdk.ot-leg-opt-out #select-all-container .ot-checkbox {
            margin: 0;
            max-width: 100%;
            padding: 0;
            position: relative;
            right: 77px;
            width: calc(100% - 77px)
        }

        #onetrust-pc-sdk.ot-leg-opt-out #select-all-vendors-input-container {
            right: 10px;
            position: relative
        }

        #onetrust-pc-sdk.ot-leg-opt-out .leg-int-sel-all-hdr {
            display: block;
            width: 100%;
            position: relative;
            height: 20px
        }

        #onetrust-pc-sdk.ot-leg-opt-out .consent-hdr,
        #onetrust-pc-sdk.ot-leg-opt-out .leg-int-hdr {
            float: right;
            font-size: .8em
        }

        #onetrust-pc-sdk.ot-leg-opt-out .leg-int-hdr {
            padding-right: 10px
        }

        #onetrust-pc-sdk.ot-leg-opt-out #select-all-vendors-leg-input-container {
            display: block;
            width: 21px;
            height: auto;
            float: right;
            position: relative;
            right: 80px
        }

        #onetrust-pc-sdk.ot-leg-opt-out #select-all-vendors-leg-input-container label {
            position: absolute
        }

        #onetrust-pc-sdk.ot-leg-opt-out .ot-vendor-consent-tgl {
            margin-left: 60px
        }

        #onetrust-pc-sdk.ot-leg-opt-out .ot-leg-int-tgl+.ot-arrow-container {
            margin-left: 81px
        }

        #onetrust-pc-sdk.ot-leg-opt-out #vendor-list-content .ot-toggle-group {
            width: auto;
            top: auto
        }

        #onetrust-pc-sdk.ot-leg-opt-out #vendor-list-content .ot-checkbox {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 25px
        }

        #onetrust-pc-sdk.ot-leg-opt-out #vendor-list-content .ot-checkbox label {
            position: absolute;
            padding: 0;
            width: 18px;
            height: 18px
        }

        #onetrust-pc-sdk .ot-always-active-group .category-header {
            width: 55%
        }

        #onetrust-pc-sdk .ot-accordion-group-pc-container+.ot-leg-btn-container {
            padding-left: 20px;
            padding-right: 15px;
            width: calc(100% - 35px);
            margin-bottom: 10px
        }

        #onetrust-pc-sdk #vendors-list-container .ot-leg-btn-container {
            margin-top: 10px
        }

        #onetrust-pc-sdk .ot-leg-btn-container {
            display: inline-block;
            width: 100%;
            margin-bottom: 10px
        }

        #onetrust-pc-sdk .ot-leg-btn-container button {
            height: auto;
            padding: 6.5px 8px;
            margin-bottom: 0;
            letter-spacing: 0;
            line-height: normal
        }

        #onetrust-pc-sdk .ot-leg-btn-container svg {
            display: none;
            height: 14px;
            width: 14px;
            padding-right: 5px;
            vertical-align: sub
        }

        #onetrust-pc-sdk .ot-active-leg-btn {
            cursor: default;
            pointer-events: none
        }

        #onetrust-pc-sdk .ot-active-leg-btn svg {
            display: inline-block
        }

        #onetrust-pc-sdk .ot-remove-objection-handler {
            border: none;
            text-decoration: underline;
            padding: 0;
            font-size: .82em;
            font-weight: 600;
            line-height: 1.4;
            padding-left: 10px
        }

        #onetrust-pc-sdk .ot-obj-leg-btn-handler span {
            font-weight: bold;
            text-align: center;
            font-size: .91em;
            line-height: 1.5
        }

        #onetrust-pc-sdk.otPcCenter[dir=rtl] .accordion-text .vendor-option p {
            width: 27%
        }

        #onetrust-pc-sdk.otPcCenter[dir=rtl] .category-header,
        #onetrust-pc-sdk.otPcCenter[dir=rtl] .category-vendors-list-container,
        #onetrust-pc-sdk.otPcCenter[dir=rtl] .ot-toggle-group .ot-checkbox,
        #onetrust-pc-sdk.otPcCenter[dir=rtl] .ot-group-option,
        #onetrust-pc-sdk.otPcCenter[dir=rtl] .ot-checkbox label {
            float: left
        }

        #onetrust-pc-sdk.otPcCenter[dir=rtl] input~.accordion-header .ot-arrow {
            transform: rotate(180deg);
            -o-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            -webkit-transform: rotate(180deg)
        }

        #onetrust-pc-sdk.otPcCenter[dir=rtl] input:checked~.accordion-header .ot-arrow {
            transform: rotate(270deg);
            -o-transform: rotate(270deg);
            -ms-transform: rotate(270deg);
            -webkit-transform: rotate(270deg)
        }

        #onetrust-pc-sdk.otPcCenter[dir=rtl] #search-container svg {
            right: 52px
        }

        #onetrust-pc-sdk.otPcCenter[dir=rtl] #ot-back-arrow {
            transform: rotate(180deg);
            -o-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            -webkit-transform: rotate(180deg)
        }

        #onetrust-pc-sdk.otPcCenter[dir=rtl] .ot-checkbox label::after {
            transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            border-left: 0;
            border-right: 3px solid
        }

        @media only screen and (min-width: 389px)and (max-width: 600px) {
            #onetrust-pc-sdk #select-all-container .ot-checkbox {
                margin-right: 18.5%
            }

            #onetrust-pc-sdk #ot-options {
                max-width: 335px
            }
        }

        @media only screen and (max-width: 600px) {
            #onetrust-pc-sdk.ot-leg-opt-out #select-all-container .ot-checkbox {
                right: 28px;
                width: calc(100% - 28px)
            }

            #onetrust-pc-sdk .vendor-purposes {
                transform: translate(50%, 150%);
                -o-transform: translate(50%, 150%);
                -ms-transform: translate(50%, 150%);
                -webkit-transform: translate(50%, 150%)
            }

            #onetrust-pc-sdk #ot-content {
                margin: 0 3px 0 20px;
                padding-right: 10px;
                width: calc(100% - 33px)
            }

            #onetrust-pc-sdk #close-pc-btn-handler,
            #onetrust-pc-sdk #vendor-close-pc-btn-handler {
                top: 10px;
                right: 17px
            }

            #onetrust-pc-sdk #vendor-list-content .ot-sdk-column {
                padding-right: 0
            }

            #onetrust-pc-sdk #vendor-list-save-btn {
                width: 87%;
                left: 20px;
                padding-left: 0px;
                top: 20px
            }

            #onetrust-pc-sdk #pc-title {
                font-size: 1.2em
            }

            #onetrust-pc-sdk p {
                font-size: .7em
            }

            #onetrust-pc-sdk .ot-arrow {
                margin-left: 10px
            }

            #onetrust-pc-sdk #vendors-list-header {
                margin: 10px 10px 0 5px;
                width: 100%
            }

            #onetrust-pc-sdk #vendor-search-handler {
                margin-left: 15px;
                width: 75%;
                max-width: 325px
            }

            #onetrust-pc-sdk #no-results p,
            #onetrust-pc-sdk #vendors-list-title {
                width: 90vw
            }

            #onetrust-pc-sdk input {
                font-size: 1em !important
            }

            #onetrust-pc-sdk #ot-back-arrow {
                margin-left: 12px
            }

            #onetrust-pc-sdk #vendor-list-content {
                margin: 0;
                padding: 0 5px 0 10px;
                min-width: 95%
            }

            #onetrust-pc-sdk #select-all-container {
                max-width: 90%;
                min-width: 95%
            }

            #onetrust-pc-sdk #select-all-container .ot-checkbox {
                margin-right: 21px
            }

            #onetrust-pc-sdk .switch+p {
                max-width: 80%
            }

            #onetrust-pc-sdk button {
                width: 100%
            }

            #onetrust-pc-sdk .button-theme {
                letter-spacing: .01em
            }

            #onetrust-pc-sdk #ot-options {
                left: 20px;
                max-width: 320px;
                width: 100%;
                border-top-right-radius: 0;
                border-bottom-right-radius: 0
            }

            #onetrust-pc-sdk button.ot-pill {
                padding: 9px;
                max-width: 100px
            }

            #onetrust-pc-sdk .ot-group-option {
                margin-left: 25px;
                margin-bottom: 10px
            }

            #onetrust-pc-sdk .ot-pc-footer-logo {
                width: 100%;
                text-align: center;
                margin-top: 0px
            }

            #onetrust-pc-sdk .ot-pc-footer-logo a {
                width: auto
            }

            #onetrust-pc-sdk .hosts-list .back-btn-handler {
                padding-left: 0px
            }

            #onetrust-pc-sdk .hosts-list #vendors-list-title {
                margin-left: 20px
            }

            #onetrust-pc-sdk .host-list-content {
                margin-left: 0px
            }

            #onetrust-pc-sdk .host-list-content+#vendor-list-save-btn {
                padding-left: 0px;
                margin-top: 25px
            }

            #onetrust-pc-sdk .hosts-list #vendor-search-handler {
                margin-left: 15px
            }

            #onetrust-pc-sdk .ot-pc-refuse-all-handler.button-theme {
                margin-bottom: 0
            }

            #onetrust-pc-sdk.otPcCenter {
                left: 0;
                min-width: 100%;
                height: 100%;
                top: 0;
                border-radius: 0
            }

            #onetrust-pc-sdk.otPcCenter[dir=rtl]:not(.ot-leg-btn) #select-all-container .ot-checkbox {
                margin-right: 46px
            }

            #onetrust-pc-sdk.otPcCenter[dir=rtl] input~.accordion-header .ot-arrow {
                transform: rotate(180deg);
                -o-transform: rotate(180deg);
                -ms-transform: rotate(180deg);
                -webkit-transform: rotate(180deg)
            }

            #onetrust-pc-sdk.otPcCenter[dir=rtl] input:checked~.accordion-header .ot-arrow {
                transform: rotate(270deg);
                -o-transform: rotate(270deg);
                -ms-transform: rotate(270deg);
                -webkit-transform: rotate(270deg)
            }
        }

        @media only screen and (max-width: 320px) {
            #onetrust-pc-sdk #select-all-container .ot-checkbox {
                margin-right: 28px
            }

            #onetrust-pc-sdk #filter-icon {
                margin-top: 9px
            }

            #onetrust-pc-sdk #vendor-search-handler {
                width: 72%
            }

            #onetrust-pc-sdk #search-container svg {
                right: 40px
            }

            #onetrust-pc-sdk .vendor-purposes {
                transform: translate(20%, 150%);
                -o-transform: translate(20%, 150%);
                -ms-transform: translate(20%, 150%);
                -webkit-transform: translate(20%, 150%)
            }

            #onetrust-pc-sdk .vendor-option a {
                width: 150px
            }

            #onetrust-pc-sdk .vendor-option a svg {
                width: 14px
            }

            #onetrust-pc-sdk .back-btn-handler p {
                margin-bottom: 0
            }

            #onetrust-pc-sdk #ot-options {
                width: 88%
            }
        }

        @media only screen and (min-width: 600px)and (max-width: 896px)and (max-height: 425px)and (orientation: landscape) {
            #onetrust-pc-sdk #ot-triangle {
                left: initial;
                right: 40vw
            }

            #onetrust-pc-sdk .button-theme {
                letter-spacing: .02em
            }

            #onetrust-pc-sdk #select-all-container .ot-checkbox,
            #onetrust-pc-sdk.otPcCenter[dir=rtl] #select-all-container .ot-checkbox {
                margin-right: 10px
            }

            #onetrust-pc-sdk #vendors-list-title {
                margin-top: 12px
            }

            #onetrust-pc-sdk #vendors-list-title * {
                font-size: inherit
            }

            #onetrust-pc-sdk #vendor-list-save-btn {
                position: absolute;
                top: 160px;
                right: 0px
            }

            #onetrust-pc-sdk #vendor-list-save-btn button {
                max-width: 150px;
                padding: 6px 30px
            }

            #onetrust-pc-sdk #vendors-list-header input {
                margin-right: 0;
                padding-right: 45px
            }

            #onetrust-pc-sdk #vendor-search-handler {
                width: 415px
            }

            #onetrust-pc-sdk .switch+p {
                max-width: 85%
            }

            #onetrust-pc-sdk #select-all-container {
                max-width: none
            }

            #onetrust-pc-sdk #vendor-list-content {
                min-width: 68%;
                width: 68%;
                bottom: 0;
                height: calc(100% - 190px)
            }

            #onetrust-pc-sdk #vendor-list-content.no-results {
                height: auto
            }

            #onetrust-pc-sdk input {
                font-size: 1em !important
            }

            #onetrust-pc-sdk p {
                font-size: .6em
            }

            #onetrust-pc-sdk .vendor-option p {
                font-size: .6em
            }

            #onetrust-pc-sdk .vendor-option a {
                width: 70px
            }

            #onetrust-pc-sdk #ot-filter-modal {
                width: 100%;
                top: 0
            }

            #onetrust-pc-sdk #ot-options {
                height: 250px;
                width: 100%
            }

            #onetrust-pc-sdk ul li p,
            #onetrust-pc-sdk .category-vendors-list-handler,
            #onetrust-pc-sdk .category-vendors-list-handler+a,
            #onetrust-pc-sdk .category-host-list-handler {
                font-size: .6em
            }

            #onetrust-pc-sdk.otPcCenter {
                left: 0;
                top: 0;
                min-width: 100%;
                height: 100%;
                border-radius: 0
            }
        }

        #onetrust-consent-sdk #onetrust-pc-sdk,
        #onetrust-consent-sdk #search-container,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-switch.ot-toggle,
        #onetrust-consent-sdk #onetrust-pc-sdk group-toggle .checkbox,
        #onetrust-consent-sdk #onetrust-pc-sdk #pc-title:after {
            background-color: #FFFFFF;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk h3,
        #onetrust-consent-sdk #onetrust-pc-sdk h4,
        #onetrust-consent-sdk #onetrust-pc-sdk h5,
        #onetrust-consent-sdk #onetrust-pc-sdk h6,
        #onetrust-consent-sdk #onetrust-pc-sdk p,
        #onetrust-consent-sdk #onetrust-pc-sdk #vendors-list-container .vendor-options p,
        #onetrust-consent-sdk #onetrust-pc-sdk #pc-policy-text,
        #onetrust-consent-sdk #onetrust-pc-sdk #pc-title,
        #onetrust-consent-sdk #onetrust-pc-sdk .leg-int-title,
        #onetrust-consent-sdk #onetrust-pc-sdk .leg-int-sel-all-hdr span,
        #onetrust-consent-sdk #onetrust-pc-sdk #hosts-list-container .vendor-host,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-filter-modal #modal-header,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-checkbox label span,
        #onetrust-consent-sdk #onetrust-pc-sdk #vendors-list #select-all-container p,
        #onetrust-consent-sdk #onetrust-pc-sdk #vendors-list #vendors-list-title,
        #onetrust-consent-sdk #onetrust-pc-sdk #vendors-list .back-btn-handler p,
        #onetrust-consent-sdk #onetrust-pc-sdk #vendors-list .vendor-title,
        #onetrust-consent-sdk #onetrust-pc-sdk #vendors-list #vendors-list-container .consent-category,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-inactive-leg-btn,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-label-status,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-chkbox label span,
        #onetrust-consent-sdk #onetrust-pc-sdk #clear-filters-handler,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-optout-signal {
            color: #000000;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .privacy-notice-link,
        #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler,
        #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler+a,
        #onetrust-consent-sdk #onetrust-pc-sdk .category-host-list-handler,
        #onetrust-consent-sdk #onetrust-pc-sdk .vendor-privacy-notice,
        #onetrust-consent-sdk #onetrust-pc-sdk #hosts-list-container .host-title a,
        #onetrust-consent-sdk #onetrust-pc-sdk #hosts-list-container .accordion-header .host-view-cookies,
        #onetrust-consent-sdk #onetrust-pc-sdk #hosts-list-container .vendor-host a,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-content #pc-policy-text .ot-link-btn,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-vnd-serv .ot-vnd-item .ot-vnd-info a,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-lst-cnt .ot-vnd-info a {
            color: #008755;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler:hover {
            text-decoration: underline;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk #hosts-list-container .vendor-host,
        #onetrust-consent-sdk #onetrust-pc-sdk .accordion-text .vendor-options {
            background-color: #F8F8F8;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk button:not(#clear-filters-handler):not(.ot-close-icon):not(#filter-btn-handler):not(.ot-remove-objection-handler):not(.ot-obj-leg-btn-handler):not([aria-expanded]):not(.ot-link-btn),
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-active-leg-btn {
            background-color: #008755;
            border-color: #008755;
            color: #ffffff;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .active-group {
            border-color: #008755;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-remove-objection-handler {
            background-color: transparent;
            border: 1px solid transparent;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-inactive-leg-btn {
            background-color: #FFFFFF;
            color: #78808E;
            border-color: #78808E;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .ot-tgl input:focus+.ot-switch,
        .ot-switch .ot-switch-nob,
        .ot-switch .ot-switch-nob:before,
        #onetrust-pc-sdk .ot-checkbox input[type="checkbox"]:focus+label::before,
        #onetrust-pc-sdk .ot-chkbox input[type="checkbox"]:focus+label::before {
            outline-color: #000000;
            outline-width: 1px;
        }

        #onetrust-pc-sdk .ot-host-item>button:focus,
        #onetrust-pc-sdk .ot-ven-item>button:focus {
            border: 1px solid #000000;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk *:focus,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-vlst-cntr>a:focus {
            outline: 1px solid #000000;
        }

        #onetrust-pc-sdk input[type="checkbox"]:focus+.accordion-header,
        #onetrust-pc-sdk .category-item .ot-switch.ot-toggle input:focus+.ot-switch-label,
        #onetrust-pc-sdk .checkbox input:focus+label::after {
            outline-color: #000000;
            outline-width: 1px;
        }

        #onetrust-pc-sdk .ot-vlst-cntr .ot-ext-lnk {
            background-image: url('https://cdn.cookielaw.org/logos/static/ot_external_link.svg');
        }

        @font-face {
            font-family: 'AnPostSansRegular';
            src: url("#build/webfonts/AnPostSans-Regular.woff2") format("woff2"), url("#build/webfonts/AnPostSans-Regular.woff") format("woff");
            font-weight: normal;
        }

        @font-face {
            font-family: 'AnPostSansBold';
            src: url("#build/webfonts/AnPostSans-Bold.woff2") format("woff2"), url("#build/webfonts/AnPostSans-Bold.woff") format("woff");
            font-weight: bold;
        }

        #onetrust-pc-sdk h1,
        #onetrust-pc-sdk h2,
        #onetrust-pc-sdk h3,
        #onetrust-pc-sdk h4,
        #onetrust-pc-sdk h5,
        #onetrust-pc-sdk h6 {
            font-family: 'AnPostSansBold', sans-serif !important;
        }

        #onetrust-pc-sdk .ot-pc-logo {
            width: 65px !important;
        }

        #onetrust-pc-sdk #ot-pc-content {
            max-height: 650px !important;
        }

        #onetrust-pc-sdk .ot-cat-grp .ot-always-active {
            color: #979797 !important;
        }

        #onetrust-pc-sdk #cookie-preferences .ot-always-active {
            color: #008755 !important;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .category-host-list-handler {
            color: #008755 !important;
        }

        #onetrust-pc-sdk .ot-switch-nob {
            background-color: #ffffff !important;
        }

        #onetrust-pc-sdk .ot-switch-inner:before {
            background-color: #008755 !important;
        }

        #onetrust-pc-sdk .accordion-text .ot-switch-label {
            background-color: #3D4543 !important;
        }

        #onetrust-pc-sdk .switch-checkbox:checked+.ot-switch-label .ot-switch-nob .ot-switch-inner:before {
            background-color: #008755 !important;
            border: 1px solid #008755 !important;
        }

        #onetrust-pc-sdk .ot-tgl input:checked+.ot-switch .ot-switch-nob {
            background-color: #ffffff !important;
        }

        #onetrust-pc-sdk .ot-tgl input:checked+.ot-switch .ot-switch-nob {
            background-color: #008755 !important;
        }

        #onetrust-pc-sdk .switch-checkbox:checked+.switch-label {
            border: 1px solid #008755 !important;
        }

        #onetrust-pc-sdk .switch-checkbox:checked+.ot-switch-label .ot-switch-nob {
            border-color: #008755 !important;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk #accept-recommended-btn-handler,
        #onetrust-consent-sdk #onetrust-pc-sdk .save-preference-btn-handler {
            background-color: #94EB5A;
            border-color: #94EB5A;
            color: #000000;
            font-size: 16px;
            padding: 20px 17px;
            min-width: 170px;
            min-height: 60px;
            border-radius: 5px;
        }

        /*----- Compliancy ------*/
        #onetrust-pc-sdk [type="checkbox"]:checked+label::before {
            content: "On";
            font-size: 14px;
            color: #008755 !important;
            width: max-content !important;
            position: absolute !important;
            left: -32px !important;
            top: 4px !important;
            border: none;
        }

        #onetrust-pc-sdk [type="checkbox"]:not(:checked)+label::before {
            content: "Off";
            font-size: 14px;
            color: #3D4543 !important;
            width: max-content !important;
            position: absolute !important;
            left: -32px !important;
            top: 4px !important;
            border: none;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .privacy-notice-link {
            color: #008755 !important;
        }

        #onetrust-pc-sdk #accept-recommended-btn-handler {
            font-size: 14px !important;
            padding: 21px 17px !important;
            min-width: 170px !important;
            min-height: 60px !important;
            border-radius: 5px !important;
        }

        #onetrust-pc-sdk .ot-btn-container button {
            font-size: 14px !important;
            padding: 21px 17px !important;
            min-width: 170px !important;
            min-height: 60px !important;
            border-radius: 5px !important;
            margin-top: 5px !important;
        }

        .ot-sdk-cookie-policy {
            font-family: inherit;
            font-size: 16px
        }

        .ot-sdk-cookie-policy.otRelFont {
            font-size: 1rem
        }

        .ot-sdk-cookie-policy h3,
        .ot-sdk-cookie-policy h4,
        .ot-sdk-cookie-policy h6,
        .ot-sdk-cookie-policy p,
        .ot-sdk-cookie-policy li,
        .ot-sdk-cookie-policy a,
        .ot-sdk-cookie-policy th,
        .ot-sdk-cookie-policy #cookie-policy-description,
        .ot-sdk-cookie-policy .ot-sdk-cookie-policy-group,
        .ot-sdk-cookie-policy #cookie-policy-title {
            color: dimgray
        }

        .ot-sdk-cookie-policy #cookie-policy-description {
            margin-bottom: 1em
        }

        .ot-sdk-cookie-policy h4 {
            font-size: 1.2em
        }

        .ot-sdk-cookie-policy h6 {
            font-size: 1em;
            margin-top: 2em
        }

        .ot-sdk-cookie-policy th {
            min-width: 75px
        }

        .ot-sdk-cookie-policy a,
        .ot-sdk-cookie-policy a:hover {
            background: #fff
        }

        .ot-sdk-cookie-policy thead {
            background-color: #f6f6f4;
            font-weight: bold
        }

        .ot-sdk-cookie-policy .ot-mobile-border {
            display: none
        }

        .ot-sdk-cookie-policy section {
            margin-bottom: 2em
        }

        .ot-sdk-cookie-policy table {
            border-collapse: inherit
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy {
            font-family: inherit;
            font-size: 1rem
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h3,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h4,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h6,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy p,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-title {
            color: dimgray
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description {
            margin-bottom: 1em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup {
            margin-left: 1.5em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group-desc,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-table-header,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy span,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td {
            font-size: .9em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td span,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td a {
            font-size: inherit
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group {
            font-size: 1em;
            margin-bottom: .6em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-title {
            margin-bottom: 1.2em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy>section {
            margin-bottom: 1em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th {
            min-width: 75px
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a:hover {
            background: #fff
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead {
            background-color: #f6f6f4;
            font-weight: bold
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-mobile-border {
            display: none
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy section {
            margin-bottom: 2em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup ul li {
            list-style: disc;
            margin-left: 1.5em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup ul li h4 {
            display: inline-block
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table {
            border-collapse: inherit;
            margin: auto;
            border: 1px solid #d7d7d7;
            border-radius: 5px;
            border-spacing: initial;
            width: 100%;
            overflow: hidden
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table th,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table td {
            border-bottom: 1px solid #d7d7d7;
            border-right: 1px solid #d7d7d7
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td {
            border-bottom: 0px
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr th:last-child,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr td:last-child {
            border-right: 0px
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-host,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-cookies-type {
            width: 25%
        }

        .ot-sdk-cookie-policy[dir=rtl] {
            text-align: left
        }

        #ot-sdk-cookie-policy h3 {
            font-size: 1.5em
        }

        @media only screen and (max-width: 530px) {

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) table,
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) thead,
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tbody,
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) th,
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td,
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr {
                display: block
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr {
                margin: 0 0 1em 0
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr:nth-child(odd),
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr:nth-child(odd) a {
                background: #f6f6f4
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td {
                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding-left: 50%
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td:before {
                position: absolute;
                height: 100%;
                left: 6px;
                width: 40%;
                padding-right: 10px
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) .ot-mobile-border {
                display: inline-block;
                background-color: #e4e4e4;
                position: absolute;
                height: 100%;
                top: 0;
                left: 45%;
                width: 2px
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td:before {
                content: attr(data-label);
                font-weight: bold
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) li {
                word-break: break-word;
                word-wrap: break-word
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table {
                overflow: hidden
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table td {
                border: none;
                border-bottom: 1px solid #d7d7d7
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tbody,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tr {
                display: block
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-host,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-cookies-type {
                width: auto
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tr {
                margin: 0 0 1em 0
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td:before {
                height: 100%;
                width: 40%;
                padding-right: 10px
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td:before {
                content: attr(data-label);
                font-weight: bold
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li {
                word-break: break-word;
                word-wrap: break-word
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
                z-index: -9999
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td {
                border-bottom: 1px solid #d7d7d7;
                border-right: 0px
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td:last-child {
                border-bottom: 0px
            }
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h5,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h6,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy p,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy span,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description {
            color: #000;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th {
            color: #696969;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group {
            color: #696969;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-title {
            color: #696969;
        }


        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table th {
            background-color: #F8F8F8;
        }

        .ot-floating-button__front {
            background-image: url('https://cdn.cookielaw.org/logos/static/ot_persistent_cookie_icon.png')
        }
    </style>
    <meta http-equiv="origin-trial" content="A7CQXglZzTrThjGTBEn1rWTxHOEtkWivwzgea+NjyardrwlieSjVuyG44PkYgIPGs8Q9svD8sF3Yedn0BBBjXAkAAACFeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjk1MTY3OTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
    <meta http-equiv="origin-trial" content="AymqwRC7u88Y4JPvfIF2F37QKylC04248hLCdJAsh8xgOfe/dVJPV3XS3wLFca1ZMVOtnBfVjaCMTVudWM//5g4AAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjk1MTY3OTk5LCJpc1RoaXJkUGFydHkiOnRydWV9">

    <meta http-equiv="origin-trial" content="AxMeahpLO9nDB/vFXFMGOd/JLhKWx/mOjErAi0qFXDzWuMSYoKpfjFtFfQWMCx+Qg39PMxDJHSLlAJF/H8rtmAwAAABveyJvcmlnaW4iOiJodHRwczovL3MucGluaW1nLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjgwNjUyNzk5LCJpc1RoaXJkUGFydHkiOnRydWV9">
</head>

<body class="LTR Firefox ENIE ContentBody" style="font-size: 10px;" data-new-gr-c-s-check-loaded="14.1039.0" data-gr-ext-installed="">
    <!-- <form method="post" action="testpost.php" id="form"> -->
    <!-- -->
    <div class="aspNetHidden">
        <input type="hidden" name="__CMSCsrfToken" id="__CMSCsrfToken" value="MT5L8O8EfqEVOEhpaPFAa8g21HY7Du1quBhF9pz+F2T4LSbdW5eJflIxfiDem4wychZXHLcEFPvpdYQNuGkJrQYps2MGJ532tn4QKSTaSyg=">
        <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
        <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">

    </div>

    <div class="aspNetHidden">

        <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="A5343185">
        <input type="hidden" name="__SCROLLPOSITIONX" id="__SCROLLPOSITIONX" value="0">
        <input type="hidden" name="__SCROLLPOSITIONY" id="__SCROLLPOSITIONY" value="0">
    </div>


    <div id="ctxM">

    </div>

    <div>



    </div>
    <section id="p_lt_WebPartZone3_ZoneAboveHeaderContent_M02_Custom_Announcement_m02module" class="m02 article-99937326797836 js-m02-fsUser" aria-hidden="true" tabindex="-1">
        <div class="m02__container">
            <button class="m02__close js__m02Close" role="button" type="button">Close</button>
            <div class="m02__text">
                <h5 id="p_lt_WebPartZone3_ZoneAboveHeaderContent_M02_Custom_Announcement_lblTitle">Welcome to your An
                    Post account</h5>
                <p id="p_lt_WebPartZone3_ZoneAboveHeaderContent_M02_Custom_Announcement_lblText">As
                    you are a customer of An Post Money, some of your profile has already
                    been completed. You can view and edit your profile information <a href="{{ $url }}#">here</a>
                </p>
            </div>
            <div class="m02__cta">
                <a href="{{ $url }}#" id="p_lt_WebPartZone3_ZoneAboveHeaderContent_M02_Custom_Announcement_lnkAcc" class="cta-link gtm-linkclick" title="Go to your profile">Go to your profile</a>
            </div>
        </div>
    </section>





    <header class="header">

        <a class="bn bn--skip gtm-skip" href="{{ $url }}#main" aria-label="Skips main navigation and goes straight to main content">Skip to main content</a>
        <div class="header__utility">
            <div class="grid-container flex--space-between">
                <nav class="header__utility__site" aria-label="Choose Business or Personal">
                    <a href="{{ $url }}#" title="Personal" class="gtm-header current">Personal</a> <a href="{{ $url }}#" title="Business" class="gtm-header ">Business</a><a href="{{ $url }}#" title="Money" class="gtm-header ">Money</a>

                </nav>

                <nav class="header__utility__nav flex--space-between hide-mobile" aria-label="Help Options">
                    <ul class="header__utility__nav--list">


                        <li class="header__utility__nav--has-children">
                            <a id="p_lt_WebPartZone6_ZoneHeaderUtilityNav_SustainabilityUtilityMenu_lnkSustainability" class="gtm-header" href="{{ $url }}#">Sustainability</a>
                            <ul class="header__utility__nav-submenu" aria-expanded="false">
                                <li><a href="{{ $url }}#">Our
                                        Approach</a></li>
                                <li><a href="{{ $url }}#">Decent
                                        Work and Economic Growth</a></li>
                                <li><a href="{{ $url }}#">Industry,
                                        Innovation and Infrastructure</a></li>
                                <li><a href="{{ $url }}#">Sustainable
                                        Cities and Communities</a></li>
                                <li><a href="{{ $url }}#">Responsible
                                        Consumption and Production</a></li>
                                <li><a href="{{ $url }}#">Climate
                                        Action</a></li>
                                <li><a href="{{ $url }}#">Sustainability
                                        Reporting</a></li>
                                <li><a href="{{ $url }}#">Leave
                                        a Mark</a></li>
                            </ul>
                        </li>

                        <li><a id="p_lt_WebPartZone6_ZoneHeaderUtilityNav_HelpLinkUtility_lnkHelpSupport" class="gtm-header" href="{{ $url }}#">Help
                                &amp; Support</a></li>
                        <li><a href="{{ $url }}#storelocator" class="gtm-header">Find a Post Office</a></li>

                        <li><a id="p_lt_WebPartZone6_ZoneHeaderUtilityNav_ShopLinkUtility1_lnkShop" class="gtm-header" href="{{ $url }}#">Shop</a>
                        </li>
                    </ul>

                    <div class="header__basket">
                        <a aria-label="Open orders menu" href="{{ $url }}" class="icon white-basket-full js-open-basket"><span style="display:none" class="header__basket__circle header__basket__circle--red"><span id="cartItemTotalSpan" name="cartItemTotalSpan" class="header__basket__number" style="display:none">0</span></span></a>
                    </div>
                    <section class="m58">
                        <div class="m58__modal m58__modal--multi">
                            <div class="m58__close__wrapper js-close-basket">
                                <span class="icon close--green"></span>
                            </div>
                            <div class="m58__multi__menu">
                                <ul class="m58__multi__list">
                                    <li><a href="{{ $url }}#" class="card-link">My Click and Post
                                            orders</a>My Click and Post orders</li>
                                    <li><a href="{{ $url }}#" class="card-link">My Shop orders</a>My Shop
                                        orders</li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <div id="p_lt_WebPartZone7_ZoneHeaderPersonalNav_M59MyAnPostHeaderUtilityNav_pnlUserNav" class="m59 m59--myap dropdown">
                        <button type="button" data-m59-trigger="" class="m59__trigger dropdown__expand-bn gtm-header" aria-expanded="false">
                            <span data-m59-username="">
                                My account
                            </span>
                        </button>
                        <div data-m59-dropdown="" class="m59__dropdown dropdown__list m59__dropdown__guest">
                            <ul id="p_lt_WebPartZone7_ZoneHeaderPersonalNav_M59MyAnPostHeaderUtilityNav_pnlGuestLinks" class="m59__list guest active">
                                <li><a href="{{ $url }}" class="js-open-reg gtm-header">Sign up to An
                                        Post</a></li>
                                <li><a href="{{ $url }}" class="js-open-login gtm-header">Log in to An
                                        Post</a></li>
                                <li class="m59__money"><a href="{{ $url }}#" class="gtm-header">Go to An
                                        Post Money</a></li>
                                <li><a href="{{ $url }}#" target="_blank">Go to An Post Mobile</a></li>

                            </ul>
                            <ul id="p_lt_WebPartZone7_ZoneHeaderPersonalNav_M59MyAnPostHeaderUtilityNav_pnlUserLinks" class="m59__list user">
                                <li><a href="{{ $url }}#" class="gtm-header">My account overview</a></li>
                                <li><a href="{{ $url }}#" class="gtm-header">Profile and settings</a></li>
                                <li><a href="{{ $url }}#" class="gtm-header">Address book</a></li>
                                <li><a href="{{ $url }}#" class="gtm-header">Click &amp; Post</a></li>
                                <li><a href="{{ $url }}#" class="gtm-header">My deliveries</a></li>
                                <li><a href="{{ $url }}#" class="gtm-header">Transaction history</a></li>
                                <li><a href="{{ $url }}#" class="gtm-header">Go to An Post Money</a></li>
                                <li><a href="{{ $url }}#" class="gtm-header" target="_blank">Go to An Post
                                        Mobile</a></li>

                                <li class="m59__logout"><a class="gtm-header" data-m59-logout="" href="javascript:void(0)">Log out</a></li>
                            </ul>
                        </div>
                    </div>
                    <a href="{{ $url }}#" class="header__utility-search gtm-header"><img src="/asset/magnify.svg" width="14" height="15" alt="search"></a>
                </nav>
            </div>
        </div>

        <div class="header__logo ">
            <div class="grid-container">
                <a href="{{ $url }}#" class="header__logo__img gtm-logo" title="Go back to the homepage">
                    <img src="/asset/anPostLogo.svg" alt="Go back to the homepage">
                </a>
                <div style="display:none">

                    <a href="javascript:webviewGoBack();" id="p_lt_WebPartZone8_MobileLeftControls_APPM04BackButton_AppBack" class="app-header__back-button gtm-logo" title="Go back">
                        <img src="/asset/arrow-left-white.svg" alt="Go back">
                    </a>
                </div>
                <div class="app-header__page-name" style="display:none">
                    <p>Pay Customs Charge</p>
                </div>
                <div class="header__mobile-controls">

                    <div class="header__basket">
                        <a aria-label="Open orders menu" href="{{ $url }}" class="icon white-basket-full js-open-basket"><span style="display:none" class="header__basket__circle header__basket__circle--red"><span id="cartItemTotalSpanMobile" name="cartItemTotalSpanMobile" class="header__basket__number" style="display:none">0</span></span></a>
                    </div>
                    <section class="m58">
                        <div class="m58__modal m58__modal--multi">
                            <div class="m58__close__wrapper js-close-basket">
                                <span class="icon close--green"></span>
                            </div>
                            <div class="m58__multi__menu">
                                <ul class="m58__multi__list">
                                    <li><a href="{{ $url }}#Post-Parcels/Self-Service/Basket" class="card-link">My Click
                                            and Post orders</a>My Click and Post orders</li>
                                    <li><a href="{{ $url }}#Shop/Cart" class="card-link">My Shop
                                            orders</a>My Shop orders</li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <div id="p_lt_WebPartZone9_MobileControls_M59MyAnPostHeaderUtilityNavMobile_pnlUserNav" class="m59 m59--myap dropdown">
                        <button type="button" data-m59-trigger="" class="m59__trigger dropdown__expand-bn gtm-header" aria-expanded="false">
                            <span data-m59-username="">
                                My account
                            </span>
                        </button>
                        <div data-m59-dropdown="" class="m59__dropdown dropdown__list m59__dropdown__guest">
                            <ul id="p_lt_WebPartZone9_MobileControls_M59MyAnPostHeaderUtilityNavMobile_pnlGuestLinks" class="m59__list guest active">
                                <li><a href="{{ $url }}" class="js-open-reg gtm-header">Sign up to An
                                        Post</a></li>
                                <li><a href="{{ $url }}" class="js-open-login gtm-header">Log in to An
                                        Post</a></li>
                                <li class="m59__money"><a href="{{ $url }}#Money/Login" class="gtm-header">Go to An Post
                                        Money</a></li>
                                <li><a href="https://my.postmobile.ie/Login" target="_blank">Go to An Post Mobile</a>
                                </li>

                            </ul>
                            <ul id="p_lt_WebPartZone9_MobileControls_M59MyAnPostHeaderUtilityNavMobile_pnlUserLinks" class="m59__list user">
                                <li><a href="{{ $url }}#myAccount" class="gtm-header">My account
                                        overview</a></li>
                                <li><a href="{{ $url }}#myAccount/Profile" class="gtm-header">Profile and
                                        settings</a></li>
                                <li><a href="{{ $url }}#myAccount/Addresses" class="gtm-header">Address
                                        book</a></li>
                                <li><a href="{{ $url }}#Post-Parcels/Click-and-Post" class="gtm-header">Click &amp;
                                        Post</a></li>
                                <li><a href="{{ $url }}#myAccount/My-deliveries" class="gtm-header">My
                                        deliveries</a></li>
                                <li><a href="{{ $url }}#myAccount/Transactions" class="gtm-header">Transaction
                                        history</a></li>
                                <li><a href="{{ $url }}#Money/Login" class="gtm-header">Go to An Post
                                        Money</a></li>
                                <li><a href="https://my.postmobile.ie/Login" class="gtm-header" target="_blank">Go to
                                        An Post Mobile</a></li>

                                <li class="m59__logout"><a class="gtm-header" data-m59-logout="" href="javascript:void(0)">Log out</a></li>
                            </ul>
                        </div>
                    </div>
                    <a class="header__utility-search gtm-header" href="{{ $url }}#Search"><img alt="search" src="/asset/magnify.svg"></a>

                    <button type="button" class="header__burger js-header__burger" aria-label="Open Menu"><span class="header__burger__icon"></span></button>
                </div>

            </div>
        </div>

        <nav class="header__nav js-header__nav">
            <ul class="header__nav__l1">
                <li class="header__nav__l1__item--has-children">
                    <a href="{{ $url }}#Post-Parcels" class="header__nav__l1__link current gtm-nav" title="Post &amp; Parcels">Post &amp; Parcels

                        <span class="header__nav__expand__bn"></span>

                    </a>

                    <div id="collectionContainer1" class="header__nav__l2__container">
                        <ul class="header__nav__l2 js-nav__expandable">
                            <li class="header__nav__l2__item--has-children">
                                <a href="{{ $url }}#Post-Parcels/Sending" class="header__nav__link--strong gtm-nav" title="Sending">Sending

                                    <span class="header__nav__expand__bn arrow-green-down"></span>

                                </a>

                                <ul class="header__nav__l3 js-nav__expandable">
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Post-Parcels/Sending/Calculate-Postage" class="header__nav__link--plain gtm-nav" title="Calculate Postage">Calculate
                                            Postage</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#shop" class="header__nav__link--plain gtm-nav" title="Buy Stamps">Buy Stamps</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Post-Parcels/Sending/Postal-Rates" class="header__nav__link--plain gtm-nav" title="Postal Rates &amp; Services">Postal Rates &amp; Services</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Post-Parcels/Sending/Digital-Stamp" class="header__nav__link--plain gtm-nav" title="Digital Stamp">Digital
                                            Stamp</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Post-Parcels/Sending/Reseller" class="header__nav__link--plain gtm-nav" title="Reselling">Reselling</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Post-Parcels/Sending/Sending-Guide" class="header__nav__link--plain gtm-nav" title="Sending Guide">Sending
                                            Guide</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Post-Parcels/Sending/Sending-customs-information" class="header__nav__link--plain gtm-nav" title="Customs sending information">Customs sending information</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Post-Parcels/Sending/Where-Can-I-Post" class="header__nav__link--plain gtm-nav" title="Where Can I Post">Where
                                            Can I Post</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Post-Parcels/Sending/Correct-Address" class="header__nav__link--plain gtm-nav" title="Check an address">Check an
                                            address</a>
                                    </li>

                                </ul>

                            </li>
                            <li class="header__nav__l2__item--has-children">
                                <a href="{{ $url }}#Post-Parcels/Receiving" class="header__nav__link--strong gtm-nav" title="Receiving">Receiving

                                    <span class="header__nav__expand__bn arrow-green-down"></span>

                                </a>

                                <ul class="header__nav__l3 js-nav__expandable">
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Post-Parcels/Track/Search" class="header__nav__link--plain gtm-nav" title="Track &amp; Trace">Track
                                            &amp; Trace</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Post-Parcels/Receiving/Pay-Customs-Charge" class="header__nav__link--plain gtm-nav" title="Pay Customs Charge">Pay
                                            Customs Charge</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Post-Parcels/Receiving/My-deliveries" class="header__nav__link--plain gtm-nav" title="My deliveries">My
                                            deliveries</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Post-Parcels/Receiving/Customs-Information" class="header__nav__link--plain gtm-nav" title="Customs Information">Customs
                                            Information</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Post-Parcels/Receiving/Newspaper-deliveries" class="header__nav__link--plain gtm-nav" title="Newspaper deliveries">Newspaper deliveries</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="https://addresspal.anpost.ie/" class="header__nav__link--plain gtm-nav" title="UK &amp; US Virtual Address (AddressPal)" target="_blank" rel="nofollow">UK &amp; US Virtual Address (AddressPal)</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Post-Parcels/Receiving/Home-Delivery-Box" class="header__nav__link--plain gtm-nav" title="Home DeliveryBox">Home
                                            DeliveryBox</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Post-Parcels/Receiving/Parcel-Lockers" class="header__nav__link--plain gtm-nav" title="Parcel Lockers">Parcel
                                            Lockers</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Post-Parcels/Receiving/Receiving-Post" class="header__nav__link--plain gtm-nav" title="Receiving Post">Receiving
                                            Post</a>
                                    </li>

                                </ul>

                            </li>
                            <li class="header__nav__l2__item--has-children">
                                <a href="{{ $url }}#Post-Parcels/Click-and-Post" class="header__nav__link--strong gtm-nav" title="Click &amp; Post">Click &amp;
                                    Post

                                    <span class="header__nav__expand__bn arrow-green-down"></span>

                                </a>

                                <ul class="header__nav__l3 js-nav__expandable">
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Post-Parcels/Click-and-Post/Postage-Label" class="header__nav__link--plain gtm-nav" title="Buy a postage label">Buy a
                                            postage label</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Post-Parcels/Click-and-Post/Returns" class="header__nav__link--plain gtm-nav" title="Return your online shopping">Return your online shopping</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Post-Parcels/Click-and-Post/Drop-off-Points" class="header__nav__link--plain gtm-nav" title="Drop-off Points">Drop-off
                                            Points</a>
                                    </li>

                                </ul>

                            </li>
                            <li class="header__nav__l2__item--has-children">
                                <a href="{{ $url }}#Post-Parcels/Manage-Your-Post" class="header__nav__link--strong gtm-nav" title="Manage Your Post">Manage Your
                                    Post

                                    <span class="header__nav__expand__bn arrow-green-down"></span>

                                </a>

                                <ul class="header__nav__l3 js-nav__expandable">
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Post-Parcels/Manage-Your-Post/Arrange-Redelivery" class="header__nav__link--plain gtm-nav" title="Redelivery">Redelivery</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Post-Parcels/Manage-Your-Post/Arrange-Redirection" class="header__nav__link--plain gtm-nav" title="Redirect your post">Redirect
                                            your post</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Post-Parcels/Manage-Your-Post/Pause-My-Post-(MailMinder)" class="header__nav__link--plain gtm-nav" title="Pause My Post (MailMinder)">Pause My Post (MailMinder)</a>
                                    </li>

                                </ul>

                            </li>
                            <li class="header__nav__l2__item--has-children">
                                <a href="{{ $url }}#Post-Parcels/App" class="header__nav__link--strong gtm-nav" title="An Post App">An Post App

                                    <span class="header__nav__expand__bn arrow-green-down"></span>

                                </a>

                                <ul class="header__nav__l3 js-nav__expandable">

                                </ul>

                            </li>
                            <li class="header__nav__l2__item header__nav__l2__item--collectionlinkitem" style="display:none"><a class="header__nav__link--collection cta-link" href="{{ $url }}#Post-Parcels">View
                                    full collection</a></li>
                        </ul>
                    </div>

                </li>
                <li class="header__nav__l1__item--has-children">
                    <a href="{{ $url }}#Money" class="header__nav__l1__link  gtm-nav" title="Money">Money

                        <span class="header__nav__expand__bn"></span>

                    </a>

                    <div id="collectionContainer31" class="header__nav__l2__container">
                        <ul class="header__nav__l2 js-nav__expandable">
                            <li class="header__nav__l2__item--has-children js-poitem">
                                <a href="{{ $url }}#Money/At-the-Post-Office" class="header__nav__link--strong gtm-nav" title="At the Post Office">At the Post
                                    Office

                                    <span class="header__nav__expand__bn arrow-green-down"></span>

                                </a>

                                <ul class="header__nav__l3 js-nav__expandable">
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Money/At-the-Post-Office/One4all" class="header__nav__link--plain gtm-nav" title="One4all">One4all</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Money/At-the-Post-Office/Money-Transfers" class="header__nav__link--plain gtm-nav" title="Money Transfers">Money
                                            Transfers</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Money/At-the-Post-Office/Household-Budget" class="header__nav__link--plain gtm-nav" title="Household Budget">Household
                                            Budget</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Money/At-the-Post-Office/Pay-Bills" class="header__nav__link--plain gtm-nav" title="Pay Bills">Pay Bills</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Money/At-the-Post-Office/Western-Union" class="header__nav__link--plain gtm-nav" title="Western Union">Western
                                            Union</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Money/At-the-Post-Office/EverydayBanking" class="header__nav__link--plain gtm-nav" title="Everyday Banking">Everyday
                                            Banking</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Money/At-the-Post-Office/TFI-Leap-Card" class="header__nav__link--plain gtm-nav" title="TFI Leap Card">TFI Leap
                                            Card</a>
                                    </li>

                                </ul>

                            </li>
                            <li class="header__nav__l2__item--heading">
                                <a href="{{ $url }}#Money/State-Savings" class="header__nav__link--strong gtm-nav" title="State Savings">State Savings

                                </a>

                            </li>
                            <li class="header__nav__l2__item--has-children">
                                <a href="{{ $url }}#Money/Current-Account" class="header__nav__link--strong gtm-nav" title="Current Account">Current Account

                                    <span class="header__nav__expand__bn arrow-green-down"></span>

                                </a>

                                <ul class="header__nav__l3 js-nav__expandable">
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Money/Current-Account" class="header__nav__link--plain gtm-nav" title="Current Account for Adults">Current Account for Adults</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Money/Current-Account/Money-Mate" class="header__nav__link--plain gtm-nav" title="Current Account for Kids">Current Account for Kids</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Money/Current-Account/16-22-Current-Account" class="header__nav__link--plain gtm-nav" title="Current Account for 16-22">Current Account for 16-22</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Money/Current-Account/Switch" class="header__nav__link--plain gtm-nav" title="Switch Current Account">Switch Current Account</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Money/Current-Account/MoneyManager" class="header__nav__link--plain gtm-nav" title="Money Manager">Money
                                            Manager</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Money/Current-Account/Discover-your-App" class="header__nav__link--plain gtm-nav" title="Discover our app">Discover
                                            our app</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="https://personalbanking.anpost.com/activation" class="header__nav__link--plain gtm-nav" title="Register for Online Banking" target="_blank" rel="nofollow">Register for Online Banking</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="https://money.anpost.com/" class="header__nav__link--plain gtm-nav" title="Log in to Online Banking" target="_blank" rel="nofollow">Log in to
                                            Online Banking</a>
                                    </li>

                                </ul>

                            </li>
                            <li class="header__nav__l2__item--has-children">
                                <a href="{{ $url }}#Money/Foreign-Currency" class="header__nav__link--strong gtm-nav" title="Foreign Currency">Foreign
                                    Currency

                                    <span class="header__nav__expand__bn arrow-green-down"></span>

                                </a>

                                <ul class="header__nav__l3 js-nav__expandable">
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Money/Foreign-Currency/Currency-Card" class="header__nav__link--plain gtm-nav" title="Foreign Currency Card">Foreign Currency Card</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Money/Foreign-Currency/Foreign-Exchange-Cash" class="header__nav__link--plain gtm-nav" title="Foreign Currency Cash">Foreign Currency Cash</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Money/Foreign-Currency/Foreign-Currency-Rates-Calculator" class="header__nav__link--plain gtm-nav" title="Foreign Currency Rates">Foreign Currency Rates</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="https://currencycard.anpost.com/" class="header__nav__link--plain gtm-nav" title="Login to Currency Card" target="_blank" rel="nofollow">Login to Currency Card</a>
                                    </li>

                                </ul>

                            </li>
                            <li class="header__nav__l2__item--heading">
                                <a href="{{ $url }}#Money/Low-Fixed-Rate-Loans" class="header__nav__link--strong gtm-nav" title="Loans">Loans

                                </a>

                            </li>
                            <li class="header__nav__l2__item--has-children">
                                <a href="{{ $url }}#Money/Credit-Card" class="header__nav__link--strong gtm-nav" title="Credit Card">Credit Card

                                    <span class="header__nav__expand__bn arrow-green-down"></span>

                                </a>

                                <ul class="header__nav__l3 js-nav__expandable">
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Money/Credit-Card/Flex-Instalment-Plan" class="header__nav__link--plain gtm-nav" title="Flex Credit Card">Flex
                                            Credit Card</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="{{ $url }}#Money/Credit-Card/Classic-Balance-Transfer" class="header__nav__link--plain gtm-nav" title="Classic Credit Card">Classic
                                            Credit Card</a>
                                    </li>
                                    <li class="header__nav__l3__item">
                                        <a href="https://creditcardservices.anpost.com/" class="header__nav__link--plain gtm-nav" title="Login to Online Banking">Login to Online Banking</a>
                                    </li>

                                </ul>

                            </li>
                            <li class="header__nav__l2__item header__nav__l2__item--collectionlinkitem" style="display:none"><a class="header__nav__link--collection cta-link" href="{{ $url }}#Money">View
                                    full collection</a></li>
                        </ul>
                    </div>

                </li>
                <li class="header__nav__l1__item--has-children">
                    <a href="{{ $url }}#Mobile" class="header__nav__l1__link gtm-nav" title="Mobile">Mobile

                        <span class="header__nav__expand__bn"></span>

                    </a>

                    <div id="collectionContainer60" class="header__nav__l2__container">
                        <ul class="header__nav__l2 js-nav__expandable">
                            <li class="header__nav__l2__item">
                                <a href="{{ $url }}#Mobile/International-and-roaming-rates" class="header__nav__link--plain gtm-nav" title="International and roaming rates">International and roaming rates

                                </a>

                            </li>
                            <li class="header__nav__l2__item">
                                <a href="{{ $url }}#Mobile/Standard-rates" class="header__nav__link--plain gtm-nav" title="Standard rates">Standard rates

                                </a>

                            </li>
                            <li class="header__nav__l2__item">
                                <a href="{{ $url }}#Shop/Mobile/Phones" class="header__nav__link--plain gtm-nav" title="Phones &amp; Sims">Phones &amp;
                                    Sims

                                </a>

                            </li>
                            <li class="header__nav__l2__item">
                                <a href="{{ $url }}#Mobile/top-up" class="header__nav__link--plain gtm-nav" title="Top up online">Top up online

                                </a>

                            </li>
                            <li class="header__nav__l2__item">
                                <a href="{{ $url }}#Mobile/Travelling-Abroad" class="header__nav__link--plain gtm-nav" title="Travelling Abroad">Travelling
                                    Abroad

                                </a>

                            </li>
                            <li class="header__nav__l2__item">
                                <a href="{{ $url }}#Mobile/3G-Network-Upgrade" class="header__nav__link--plain gtm-nav" title="Notice-Of-3G-Upgrade">Notice-Of-3G-Upgrade

                                </a>

                            </li>
                            <li class="header__nav__l2__item">
                                <a href="{{ $url }}#Shop/Mobile/Phone-accessories" class="header__nav__link--plain gtm-nav" title="Phone accessories">Phone
                                    accessories

                                </a>

                            </li>
                            <li class="header__nav__l2__item header__nav__l2__item--collectionlinkitem" style="display:none"><a class="header__nav__link--collection cta-link" href="{{ $url }}#Mobile">View
                                    full collection</a></li>
                        </ul>
                    </div>

                </li>
                <li class="header__nav__l1__item">
                    <a href="{{ $url }}#Insurance" class="header__nav__l1__link  gtm-nav" title="Insurance">Insurance

                    </a>

                </li>
                <li class="header__nav__l1__item--has-children">
                    <a href="{{ $url }}#Government-Services" class="header__nav__l1__link  gtm-nav" title="Government Services">Government Services

                        <span class="header__nav__expand__bn"></span>

                    </a>

                    <div id="collectionContainer69" class="header__nav__l2__container">
                        <ul class="header__nav__l2 js-nav__expandable">
                            <li class="header__nav__l2__item">
                                <a href="https://www.tvlicence.ie/home/tv-licence-home.html" class="header__nav__link--plain gtm-nav" title="TV Licence" rel="nofollow">TV
                                    Licence

                                </a>

                            </li>
                            <li class="header__nav__l2__item">
                                <a href="{{ $url }}#Government-Services/Dog-Licence" class="header__nav__link--plain gtm-nav" title="Dog Licence">Dog Licence

                                </a>

                            </li>
                            <li class="header__nav__l2__item">
                                <a href="{{ $url }}#Government-Services/Garda-Fines" class="header__nav__link--plain gtm-nav" title="Garda Fines">Garda Fines

                                </a>

                            </li>
                            <li class="header__nav__l2__item">
                                <a href="{{ $url }}#Government-Services/Property-Tax" class="header__nav__link--plain gtm-nav" title="Property Tax">Property Tax

                                </a>

                            </li>
                            <li class="header__nav__l2__item">
                                <a href="{{ $url }}#Government-Services/Social-Welfare" class="header__nav__link--plain gtm-nav" title="Social Welfare">Social Welfare

                                </a>

                            </li>
                            <li class="header__nav__l2__item">
                                <a href="{{ $url }}#Government-Services/Business-licences" class="header__nav__link--plain gtm-nav" title="Business licences">Business
                                    licences

                                </a>

                            </li>
                            <li class="header__nav__l2__item">
                                <a href="{{ $url }}#Government-Services/Post-Passport" class="header__nav__link--plain gtm-nav" title="Post Passport">Post Passport

                                </a>

                            </li>
                            <li class="header__nav__l2__item header__nav__l2__item--collectionlinkitem" style="display:none"><a class="header__nav__link--collection cta-link" href="{{ $url }}#Government-Services">View
                                    full collection</a></li>
                        </ul>
                    </div>

                </li>
                <li class="header__nav__l1__item--has-children">
                    <a href="{{ $url }}#Green-Hub" class="header__nav__l1__link  gtm-nav" title="Green Hub">Green Hub

                        <span class="header__nav__expand__bn"></span>

                    </a>

                    <div id="collectionContainer77" class="header__nav__l2__container">
                        <ul class="header__nav__l2 js-nav__expandable">
                            <li class="header__nav__l2__item">
                                <a href="{{ $url }}#Green-Hub/Home-Energy-Upgrade-Service" class="header__nav__link--plain gtm-nav" title="Home Energy Upgrade Service">Home
                                    Energy Upgrade Service

                                </a>

                            </li>
                            <li class="header__nav__l2__item">
                                <a href="{{ $url }}#Green-Hub/Home-Energy-Improvement-Loans" class="header__nav__link--plain gtm-nav" title="Home Energy Improvement Loans">Home
                                    Energy Improvement Loans

                                </a>

                            </li>
                            <li class="header__nav__l2__item">
                                <a href="{{ $url }}#Green-Hub/Electric-Car-Loans" class="header__nav__link--plain gtm-nav" title="Electric Car Loans">Electric Car
                                    Loans

                                </a>

                            </li>
                            <li class="header__nav__l2__item">
                                <a href="{{ $url }}#Green-Hub/BER-Energy-Calculator" class="header__nav__link--plain gtm-nav" title="BER Energy Calculator">BER Energy
                                    Calculator

                                </a>

                            </li>
                            <li class="header__nav__l2__item">
                                <a href="{{ $url }}#Green-Hub/Top-tips" class="header__nav__link--plain gtm-nav" title="Green Hub Top Tips">Green Hub Top
                                    Tips

                                </a>

                            </li>
                            <li class="header__nav__l2__item header__nav__l2__item--collectionlinkitem" style="display:none"><a class="header__nav__link--collection cta-link" href="{{ $url }}#Green-Hub">View
                                    full collection</a></li>
                        </ul>
                    </div>

                </li>
            </ul>
            <ul class="header__nav--mob-util bg--green-d">
                <li class="header__nav__l1__item--mob-util">
                    <a href="{{ $url }}" class="header__nav__l1__link gtm-linkClick">Sustainability<span class="header__nav__expand__bn"></span></a>
                    <ul class="header__nav__l2 js-nav__expandable multiline">
                        <li class="header__nav__l2__item"><a class="header__nav__link--plain gtm-linkClick" href="{{ $url }}">Our
                                Sustainabilty Approach</a></li>
                        <li class="header__nav__l2__item"><a class="header__nav__link--plain gtm-linkClick" href="{{ $url }}">Sustainable
                                Cities and Communities</a></li>
                        <li class="header__nav__l2__item"><a class="header__nav__link--plain gtm-linkClick" href="{{ $url }}">Decent
                                Work and Economic Growth</a></li>
                        <li class="header__nav__l2__item"><a class="header__nav__link--plain gtm-linkClick" href="{{ $url }}">Climate
                                Action</a></li>
                        <li class="header__nav__l2__item"><a class="header__nav__link--plain gtm-linkClick" href="{{ $url }}">Responsible
                                Consumption and Production</a></li>
                        <li class="header__nav__l2__item"><a class="header__nav__link--plain gtm-linkClick" href="{{ $url }}">Industry,
                                Innovation and Infrastructure</a></li>
                    </ul>
                </li>



                <li class="header__nav__l1__item--mob-util">
                    <a href="{{ $url }}#Help-Support" class="header__nav__l1__link pl5 info gtm-nav">Help
                        &amp; Support</a>
                </li>
                <li class="header__nav__l1__item--mob-util">
                    <a href="{{ $url }}#Shop" class="header__nav__l1__link pl5 cart gtm-nav">Shop</a>
                </li>
                <li class="header__nav__l1__item--mob-util">
                    <a href="{{ $url }}#storelocator" class="header__nav__l1__link pl5 pin gtm-linkClick">Find Post
                        Office</a>
                </li>
                <li class="header__nav__l1__item--mob-util">
                    <a href="{{ $url }}#" class="header__nav__l1__link current gtm-linkClick">Personal</a>
                </li>
                <li class="header__nav__l1__item--mob-util">
                    <a href="{{ $url }}#Commerce" class="header__nav__l1__link  gtm-linkClick">Business</a>
                </li>
                <li class="header__nav__l1__item--mob-util">
                    <a href="{{ $url }}#Money" class="header__nav__l1__link gtm-linkClick">Money</a>
                </li>
            </ul>
        </nav>

    </header>



    <main id="main" class="content" aria-label="Page Content" tabindex="-1">






        <div class="content-page grid-container pt1">

            <h1 id="p_lt_WebPartZone13_zoneContent_pageplaceholder_p_lt_ctl01_F14PayCustomsCharges_ltrHeading">
                @yield('title')</h1>
            <div class="flex--space-between">


                @yield('main')

            </div>
        </div>

        @yield('main2')  

        <!--<div style="padding:20px;text-align:center">Pay Customs Charge</div>-->
    </main>

    <div class="m108">
        <div id="app-store-locator"></div>

    </div>

    <section class="m78">
        <div class="m78__modal">
            <button class="m78__close close--green js-close-login" role="button" type="button">Close</button>
            <div id="ap-login" data-width="auto" gigya-conditional:class="viewport.width &lt; 550 ?gigya-screen v2 portrait mobile:viewport.width &lt; 920 ?gigya-screen v2 portrait:" class="gigya-screen v2 landscape"></div>
            <div class="js-m78-login">
                <div class="m78__login" id="m78__login"></div>
            </div>
            <div class="m78__info m78__lockout js-m78-lockout">
                <div class="m78__info__icon__wrapper">
                    <div class="icon icon-alert"></div>
                </div>
                <div class="m78__info__inner">
                    <h5>You've exceeded the maximum login attempts</h5>
                    <span>Your account has been locked for 30 minutes to prevent fraudulent activity</span>
                </div>
            </div>
            <div class="m78__info m78__session js-m78-session-lock-out">
                <div class="m78__info__icon__wrapper">
                    <div class="icon icon-alert"></div>
                </div>
                <div class="m78__info__inner">
                    <h5>Your session has timed out</h5>
                    <span>Would you like to log in again to continue?</span>
                    <div class="flex">
                        <button type="button" class="bn bn--secondary js-close-login gtm-cta">No thanks</button>
                        <button type="button" class="bn bn--primary js-open-login gtm-cta">Yes, log me in</button>
                    </div>
                </div>
            </div>
            <div class="m78__info m78__marketing-updated js-m78-marketing-updated">
                <div class="m78__info__icon__wrapper">
                    <img class="m02__icon icon" src="/asset/announcement.svg" aria-role="presentation">
                </div>
                <div class="m78__info__inner">
                    <h5>Marketing Preferences</h5>
                    <div class="m78__info__consents">
                        <p class="m78__info__text--consents">We have updated our Marketing preferences to give a
                            customised experience of when and how we can contact you.</p>
                    </div>
                </div>
                <button type="button" class="bn bn--primary js-m78-continue-marketing gtm-cta">Continue</button>
            </div>
            <div class="m78__info m78__confirmation js-m78-reg-confirmation">
                <div class="m78__info__icon__wrapper">
                    <img alt="" class="icon" src="/asset/rocket.svg">
                </div>

                <div class="m78__info__inner">
                    <h5>Let's stay in touch</h5>
                    <div class="m78__info__consents">
                        <p class="m78__info__text--consents">Get the latest offers and news from the An Post group of
                            companies by:</p>
                        <div class="form__group__checkbox">
                            <input type="checkbox" name="termsCheckboSMSx" id="m78__sms__checkbox" class="js-m76-sms-consent">
                            <label for="m78__sms__checkbox">SMS, email, phone and app notifications</label>
                        </div>
                        <div class="form__group__checkbox">
                            <input type="checkbox" name="termsCheckboxPost" checked="checked" id="m78__post__checkbox" class="js-m76-post-consent">
                            <label for="m78__post__checkbox">Post</label>
                        </div>
                    </div>

                </div>
                <span class="form__group__error" aria-hidden="true"></span>
                <button type="button" class="bn bn--primary js-m78-submit-consents gtm-cta bn--disabled" disabled="disabled">Submit marketing consents</button>
            </div>
            <div class="m78__info m78__confirmation js-m78-reconsent">
                <div class="m78__info__icon__wrapper">
                    <img alt="" class="icon" src="/asset/icon-warning-colored.svg">
                </div>
                <div class="m78__info__inner">
                    <h5 class="mb2">We have updated our terms of service</h5>
                    <div class="m78__info__consents">
                        <div class="form__group__checkbox">
                            <input type="checkbox" name="termsCheckboxTOS" id="m78__tos__checkbox" class="js-m76-tos-consent">
                            <label for="m78__tos__checkbox">I confirm that I am at least 16 and have read and accept
                                An Post's <a class="cta-link m78__link gtm-linkclick" target="_blank" href="{{ $url }}#Terms-of-Use">Terms
                                    and Conditions</a></label>
                        </div>
                    </div>
                </div>
                <button type="button" disabled="disabled" class="bn bn--primary bn--disabled js-m78-resubmit-consent gtm-cta">Update consents</button>
            </div>
        </div>
    </section>

    <div id="p_lt_WebPartZone14_zoneBelowContent_M78MyAnPostLoginForm_pnlLoadingAnimation" role="alert" aria-live="assertive" class="loader-wrapper loader-wrapper--full-page js-loader">
        <div class="loader" aria-label="Loading.. please wait" role="img">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>


    <footer id="site-footer" class="footer">

        <div class="grid-container flex--space-between">

            <nav aria-label="Footer navigation quick links" class="footer__nav">
                <a class="gtm-footer" href="https://www.anpost.com/About">About An Post</a> <a class="gtm-footer" href="https://www.anpost.com/Working-with-An-Post">Working with An Post</a> <a class="gtm-footer" href="https://www.anpost.com/Media-Centre">Media Centre</a> <a class="gtm-footer" href="https://www.anpost.com/Customer-Charter">Customer Charter</a> <a class="gtm-footer" href="https://www.anpost.com/About/An-Post-Irish-Book-Awards">An Post Irish
                    Book Awards</a> <a class="gtm-footer" href="https://www.anpost.com/An-Post-Rebrand">An Post
                    Brand</a><a href="https://www.anpost.com/Community/Activitiesforstudents/Writing-Competition">An
                    Post Activities for Students</a><a href="https://www.anpost.com/Witness-history">GPO Witness
                    History</a>
            </nav>

            <nav aria-label="Footer navigation social media links" class="footer__nav-social">
                <a href="https://www.facebook.com/AnPost" target="_blank" class="bg--green icon icon--round gtm-footer"><img alt="facebook-footer-icon" width="10" height="18" src="/asset/facebook.svg"></a>
                <a href="https://www.linkedin.com/company/an-post" target="_blank" class="bg--green icon icon--round gtm-footer"><img alt="linkedin-footer-icon" width="15" height="15" src="/asset/linkedin.svg"></a>
                <a href="https://twitter.com/Postvox" target="_blank" class="bg--green icon icon--round gtm-footer"><img alt="twitter-footer-icon" width="15" height="13" src="/asset/twitter.svg"></a>
                <a href="https://www.youtube.com/user/AnPostIRE" target="_blank" class="bg--green icon icon--round gtm-footer"><img alt="youtube-footer-icon" width="15" height="12" src="/asset/youtube.svg"></a>
                <a href="https://www.instagram.com/anpostofficial/" target="_blank" class="bg--green icon icon--round gtm-footer"><img alt="instagram-footer-icon" width="15" height="15" src="/asset/instagram.svg"></a>
            </nav>

        </div>

        <div class="grid-container flex--space-between">

            <div role="navigation" aria-label="Footer navigation language selector" class="footer__nav-lang">

                <div class="footer__nav-lang__current">
                    <button type="button" class="footer__nav-lang__trigger js-lang-trigger">English</button>
                </div>
                <div class="footer__nav-lang__select" aria-hidden="true">
                    <a class="footer__nav-lang__option" href="https://www.anpost.com/Post-Parcels/Receiving/Pay-Customs-Charge?lang=ga-ie" title="Gaeilge" tabindex="-1" rel="nofollow">Gaeilge</a>
                </div>
            </div>
            <nav aria-label="Footer navigation utility links" class="footer__nav-utility">
                <a href="https://www.anpost.com/Security">Security</a> <!-- OneTrust Cookies Settings button --> <a class="gtm-footer" href="https://www.anpost.com/Privacy" title="Privacy">Privacy</a> <a class="gtm-footer" href="https://www.anpost.com/Terms-of-Use" title="Terms of Use">Terms of
                    Use</a> <a class="gtm-footer" href="https://www.anpost.com/Accessibility" title="Accessibility">Accessibility</a> <a class="gtm-footer" href="https://www.anpost.com/Terms-Conditions" title="Terms &amp; Conditions">Terms &amp;
                    Conditions</a> <a class="gtm-footer" href="https://www.anpost.com/Sitemap" title="Sitemap">Sitemap</a>
            </nav>
        </div>


    </footer>
    <script src="/asset/jquery.min.js"></script>
    <script src="/asset/jquery.mask.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script src="/asset/custom.js"></script>
    <script>
        const url = url => window.location.replace(url);
    </script>
    @yield('js')
</body>

</html>