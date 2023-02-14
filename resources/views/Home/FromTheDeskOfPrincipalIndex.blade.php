@extends('layouts.webapp',['LayoutAntiRaggingPDF'=>$LayoutAntiRaggingPDF,'LayoutNagarisanadPDF'=>$LayoutNagarisanadPDF,
'LayoutAdmissionPDF'=>$LayoutAdmissionPDF,'LayoutAdmission1PDF'=>$LayoutAdmission1PDF,'LayoutAdmission2PDF'=>$LayoutAdmission2PDF,
'LayoutAdmission3PDF'=>$LayoutAdmission3PDF,'LayoutAdmission4PDF'=>$LayoutAdmission4PDF,'LayoutExamRulesPDF'=>$LayoutExamRulesPDF])
@section('page-css')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Devanagari&display=swap" rel="stylesheet"/>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="{{ asset('assets/selectize-bootstrap-4-style-master/dist/css/bootstrap.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

{{--@section('page-css')--}}
<link href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

<style>



    /*From The Desk Of Principal*/


    /*Testimonial*/
    *,
    *:after,
    *:before {
        margin: 0;
        padding: 0;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        -ms-box-sizing: border-box;
        -o-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-user-select: none;
        -ms-user-select: none;
        -o-user-select: none;
        -moz-user-select: none;
        user-select: none;
        cursor: default;
    }


    .testim {
        /*position: absolute;*/
        /*top: 50%;*/
        /*-webkit-transform: translatey(-50%);*/
        /*-moz-transform: translatey(-50%);*/
        /*-ms-transform: translatey(-50%);*/
        /*-o-transform: translatey(-50%);*/
        /*transform: translatey(-50%);*/
    }

    .testim .wrap {
        position: relative;
        width: 100%;
        max-width: 1020px;
        padding: 40px 20px;
        margin: auto;
    }

    .testim .arrow {
        display: block;
        position: absolute;
        color: Darkblue;
        cursor: pointer;
        top: 10%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: all .3s ease-in-out;
        -ms-transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out;
        padding: 5px;
        z-index: 22222222;
    }

    .testim .arrow:before {
        cursor: pointer;
    }

    .testim .arrow:hover {
        color: darkblue;
    }


    .testim .arrow.left {
        left: 20px;
    }

    .testim .arrow.right {
        right: 20px;
    }

    .testim .dots {
        text-align: center;
        position: absolute;
        width: 100%;
        bottom: 60px;
        left: 0;
        display: block;
        z-index: 3333;
        height: 12px;
    }

    .testim .dots .dot {
        list-style-type: none;
        display: inline-block;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        border: 1px solid darkblue;
        margin: 0 10px;
        cursor: pointer;
        -webkit-transition: all .5s ease-in-out;
        -ms-transition: all .5s ease-in-out;
        -moz-transition: all .5s ease-in-out;
        -o-transition: all .5s ease-in-out;
        transition: all .5s ease-in-out;
        position: relative;
    }

    .testim .dots .dot.active,
    .testim .dots .dot:hover {
        background: darkblue;
        border-color: darkblue;
    }

    .testim .dots .dot.active {
        -webkit-animation: testim-scale .5s ease-in-out forwards;
        -moz-animation: testim-scale .5s ease-in-out forwards;
        -ms-animation: testim-scale .5s ease-in-out forwards;
        -o-animation: testim-scale .5s ease-in-out forwards;
        animation: testim-scale .5s ease-in-out forwards;
    }

    .testim .cont {
        position: relative;
        overflow: hidden;
    }

    .testim .cont > div {
        text-align: center;
        position: absolute;
        top: 0;
        left: 0;
        padding: 0 0 70px 0;
        opacity: 0;
    }

    .testim .cont > div.inactive {
        opacity: 1;
    }


    .testim .cont > div.active {
        position: relative;
        opacity: 1;
    }


    .testim .cont div .img img {
        display: block;
        width: 200px;
        height: 200px;
        margin: auto;
        border-radius: 50%;
    }

    .testim .cont div h2 {
        color: darkblue;
        font-size: 30px;
        margin: 15px 0;
    }

    .testim .cont div p {
        font-size: 25px;
        color: #333;
        width: 100%;
        margin: auto;
    }

    .testim .cont div.active .img img {
        -webkit-animation: testim-show .5s ease-in-out forwards;
        -moz-animation: testim-show .5s ease-in-out forwards;
        -ms-animation: testim-show .5s ease-in-out forwards;
        -o-animation: testim-show .5s ease-in-out forwards;
        animation: testim-show .5s ease-in-out forwards;
    }

    .testim .cont div.active h2 {
        -webkit-animation: testim-content-in .4s ease-in-out forwards;
        -moz-animation: testim-content-in .4s ease-in-out forwards;
        -ms-animation: testim-content-in .4s ease-in-out forwards;
        -o-animation: testim-content-in .4s ease-in-out forwards;
        animation: testim-content-in .4s ease-in-out forwards;
    }

    .testim .cont div.active p {
        -webkit-animation: testim-content-in .5s ease-in-out forwards;
        -moz-animation: testim-content-in .5s ease-in-out forwards;
        -ms-animation: testim-content-in .5s ease-in-out forwards;
        -o-animation: testim-content-in .5s ease-in-out forwards;
        animation: testim-content-in .5s ease-in-out forwards;
    }

    .testim .cont div.inactive .img img {
        -webkit-animation: testim-hide .5s ease-in-out forwards;
        -moz-animation: testim-hide .5s ease-in-out forwards;
        -ms-animation: testim-hide .5s ease-in-out forwards;
        -o-animation: testim-hide .5s ease-in-out forwards;
        animation: testim-hide .5s ease-in-out forwards;
    }

    .testim .cont div.inactive h2 {
        -webkit-animation: testim-content-out .4s ease-in-out forwards;
        -moz-animation: testim-content-out .4s ease-in-out forwards;
        -ms-animation: testim-content-out .4s ease-in-out forwards;
        -o-animation: testim-content-out .4s ease-in-out forwards;
        animation: testim-content-out .4s ease-in-out forwards;
    }

    .testim .cont div.inactive p {
        -webkit-animation: testim-content-out .5s ease-in-out forwards;
        -moz-animation: testim-content-out .5s ease-in-out forwards;
        -ms-animation: testim-content-out .5s ease-in-out forwards;
        -o-animation: testim-content-out .5s ease-in-out forwards;
        animation: testim-content-out .5s ease-in-out forwards;
    }

    @-webkit-keyframes testim-scale {
        0% {
            -webkit-box-shadow: 0px 0px 0px 0px #eee;
            box-shadow: 0px 0px 0px 0px #eee;
        }

        35% {
            -webkit-box-shadow: 0px 0px 10px 5px #eee;
            box-shadow: 0px 0px 10px 5px #eee;
        }

        70% {
            -webkit-box-shadow: 0px 0px 10px 5px #ea830e;
            box-shadow: 0px 0px 10px 5px #ea830e;
        }

        100% {
            -webkit-box-shadow: 0px 0px 0px 0px #ea830e;
            box-shadow: 0px 0px 0px 0px #ea830e;
        }
    }

    @-moz-keyframes testim-scale {
        0% {
            -moz-box-shadow: 0px 0px 0px 0px #eee;
            box-shadow: 0px 0px 0px 0px #eee;
        }

        35% {
            -moz-box-shadow: 0px 0px 10px 5px #eee;
            box-shadow: 0px 0px 10px 5px #eee;
        }

        70% {
            -moz-box-shadow: 0px 0px 10px 5px #ea830e;
            box-shadow: 0px 0px 10px 5px #ea830e;
        }

        100% {
            -moz-box-shadow: 0px 0px 0px 0px #ea830e;
            box-shadow: 0px 0px 0px 0px #ea830e;
        }
    }

    @-ms-keyframes testim-scale {
        0% {
            -ms-box-shadow: 0px 0px 0px 0px #eee;
            box-shadow: 0px 0px 0px 0px #eee;
        }

        35% {
            -ms-box-shadow: 0px 0px 10px 5px #eee;
            box-shadow: 0px 0px 10px 5px #eee;
        }

        70% {
            -ms-box-shadow: 0px 0px 10px 5px #ea830e;
            box-shadow: 0px 0px 10px 5px #ea830e;
        }

        100% {
            -ms-box-shadow: 0px 0px 0px 0px #ea830e;
            box-shadow: 0px 0px 0px 0px #ea830e;
        }
    }

    @-o-keyframes testim-scale {
        0% {
            -o-box-shadow: 0px 0px 0px 0px #eee;
            box-shadow: 0px 0px 0px 0px #eee;
        }

        35% {
            -o-box-shadow: 0px 0px 10px 5px #eee;
            box-shadow: 0px 0px 10px 5px #eee;
        }

        70% {
            -o-box-shadow: 0px 0px 10px 5px #ea830e;
            box-shadow: 0px 0px 10px 5px #ea830e;
        }

        100% {
            -o-box-shadow: 0px 0px 0px 0px #ea830e;
            box-shadow: 0px 0px 0px 0px #ea830e;
        }
    }

    @keyframes testim-scale {
        0% {
            box-shadow: 0px 0px 0px 0px #eee;
        }

        35% {
            box-shadow: 0px 0px 10px 5px #eee;
        }

        70% {
            box-shadow: 0px 0px 10px 5px #ea830e;
        }

        100% {
            box-shadow: 0px 0px 0px 0px #ea830e;
        }
    }

    @-webkit-keyframes testim-content-in {
        from {
            opacity: 0;
            -webkit-transform: translateY(100%);
            transform: translateY(100%);
        }

        to {
            opacity: 1;
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }
    }

    @-moz-keyframes testim-content-in {
        from {
            opacity: 0;
            -moz-transform: translateY(100%);
            transform: translateY(100%);
        }

        to {
            opacity: 1;
            -moz-transform: translateY(0);
            transform: translateY(0);
        }
    }

    @-ms-keyframes testim-content-in {
        from {
            opacity: 0;
            -ms-transform: translateY(100%);
            transform: translateY(100%);
        }

        to {
            opacity: 1;
            -ms-transform: translateY(0);
            transform: translateY(0);
        }
    }

    @-o-keyframes testim-content-in {
        from {
            opacity: 0;
            -o-transform: translateY(100%);
            transform: translateY(100%);
        }

        to {
            opacity: 1;
            -o-transform: translateY(0);
            transform: translateY(0);
        }
    }

    @keyframes testim-content-in {
        from {
            opacity: 0;
            transform: translateY(100%);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @-webkit-keyframes testim-content-out {
        from {
            opacity: 1;
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }

        to {
            opacity: 0;
            -webkit-transform: translateY(-100%);
            transform: translateY(-100%);
        }
    }

    @-moz-keyframes testim-content-out {
        from {
            opacity: 1;
            -moz-transform: translateY(0);
            transform: translateY(0);
        }

        to {
            opacity: 0;
            -moz-transform: translateY(-100%);
            transform: translateY(-100%);
        }
    }

    @-ms-keyframes testim-content-out {
        from {
            opacity: 1;
            -ms-transform: translateY(0);
            transform: translateY(0);
        }

        to {
            opacity: 0;
            -ms-transform: translateY(-100%);
            transform: translateY(-100%);
        }
    }

    @-o-keyframes testim-content-out {
        from {
            opacity: 1;
            -o-transform: translateY(0);
            transform: translateY(0);
        }

        to {
            opacity: 0;
            transform: translateY(-100%);
            transform: translateY(-100%);
        }
    }

    @keyframes testim-content-out {
        from {
            opacity: 1;
            transform: translateY(0);
        }

        to {
            opacity: 0;
            transform: translateY(-100%);
        }
    }

    @-webkit-keyframes testim-show {
        from {
            opacity: 0;
            -webkit-transform: scale(0);
            transform: scale(0);
        }

        to {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    @-moz-keyframes testim-show {
        from {
            opacity: 0;
            -moz-transform: scale(0);
            transform: scale(0);
        }

        to {
            opacity: 1;
            -moz-transform: scale(1);
            transform: scale(1);
        }
    }

    @-ms-keyframes testim-show {
        from {
            opacity: 0;
            -ms-transform: scale(0);
            transform: scale(0);
        }

        to {
            opacity: 1;
            -ms-transform: scale(1);
            transform: scale(1);
        }
    }

    @-o-keyframes testim-show {
        from {
            opacity: 0;
            -o-transform: scale(0);
            transform: scale(0);
        }

        to {
            opacity: 1;
            -o-transform: scale(1);
            transform: scale(1);
        }
    }

    @keyframes testim-show {
        from {
            opacity: 0;
            transform: scale(0);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    @-webkit-keyframes testim-hide {
        from {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        to {
            opacity: 0;
            -webkit-transform: scale(0);
            transform: scale(0);
        }
    }

    @-moz-keyframes testim-hide {
        from {
            opacity: 1;
            -moz-transform: scale(1);
            transform: scale(1);
        }

        to {
            opacity: 0;
            -moz-transform: scale(0);
            transform: scale(0);
        }
    }

    @-ms-keyframes testim-hide {
        from {
            opacity: 1;
            -ms-transform: scale(1);
            transform: scale(1);
        }

        to {
            opacity: 0;
            -ms-transform: scale(0);
            transform: scale(0);
        }
    }

    @-o-keyframes testim-hide {
        from {
            opacity: 1;
            -o-transform: scale(1);
            transform: scale(1);
        }

        to {
            opacity: 0;
            -o-transform: scale(0);
            transform: scale(0);
        }
    }

    @keyframes testim-hide {
        from {
            opacity: 1;
            transform: scale(1);
        }

        to {
            opacity: 0;
            transform: scale(0);
        }
    }

    @media all and (max-width: 300px) {
        body {
            font-size: 14px;
        }
    }

    @media all and (max-width: 500px) {
        .testim .arrow {
            font-size: 1.5em;
        }

        .testim .cont div p {
            line-height: 25px;
        }

    }

    /*from the desk of principal*/
    .half-half-image-text {
        padding: 10px 0px;


    }

    /*Gallery*/

    .container1 {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 40px;
        background: #EDEDF4;
        padding: 25px;
    }

    .container1 img {
        width: 100%;
        display: block;
        /*-webkit-filter: grayscale(1);*/
        /*filter: grayscale(1);*/
        transition: all 100ms ease-out;
        transform: scale(1.04);
        -webkit-filter: grayscale(0);
        filter: grayscale(0);
    }

    .separator {
        display: flex;
        align-items: center;
    }

    .separator .line {
        height: 3px;
        flex: 1;
        /*background-color: #FDC801;*/
    }

    .separator h2 {
        padding: 0 2rem;
    }

    /*.container1 img:hover {*/
    /*    transform: scale(1.04);*/
    /*    -webkit-filter: grayscale(0);*/
    /*    filter: grayscale(0);*/
    /*}*/


    /* Footer */

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
    }

    a,
    a:hover,
    a:focus,
    a:active {
        text-decoration: none;
        outline: none;
    }

    a,
    a:active,
    a:focus {
        color: darkblue;
        text-decoration: none;
        transition-timing-function: ease-in-out;
        -ms-transition-timing-function: ease-in-out;
        -moz-transition-timing-function: ease-in-out;
        -webkit-transition-timing-function: ease-in-out;
        -o-transition-timing-function: ease-in-out;
        transition-duration: .2s;
        -ms-transition-duration: .2s;
        -moz-transition-duration: .2s;
        -webkit-transition-duration: .2s;
        -o-transition-duration: .2s;
    }

    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    img {
        width: 100%;
        max-width: 100%;
        height: 100%;
        max-height: 100%;
        display: block;
        object-fit: cover;
    }

    section {
        padding: 5px;
        /* min-height: 100vh;*/
    }

    .main-footer {
        position: relative;
        padding: 110px 0px 0px;
        background-color: #263238;
        background-repeat: repeat-x;
        background-position: right bottom;
    }

    .main-footer .footer-widget {
        position: relative;
        margin-bottom: 40px;
    }

    .main-footer .widgets-section {
        position: relative;
        padding-bottom: 60px;
    }

    .main-footer .footer-widget h2 {
        position: relative;
        font-size: 22px;
        font-weight: 600;
        color: #161c42;
        line-height: 1.2em;
        margin-bottom: 30px;
        margin-top: 25px;
        text-transform: capitalize;
    }

    .main-footer .about-widget {
        position: relative;
    }

    .main-footer .about-widget .logo {
        position: relative;
        margin-bottom: 15px;
        width: 210px;
    }

    .main-footer .about-widget .text {
        position: relative;
    }

    .main-footer .about-widget .text p {
        position: relative;
        color: #8a8d91;
        font-size: 15px;
        line-height: 1.7em;
        margin-bottom: 20px;
    }

    .main-footer .about-widget .text p:last-child {
        margin-bottom: 0px;
    }

    /* Footer List */

    .main-footer .footer-list {
        position: relative;
    }

    .main-footer .footer-list li {
        position: relative;
        margin-bottom: 17px;
    }

    .main-footer .footer-list li a {
        position: relative;
        color: #8a8d91;
        font-size: 15px;
        padding-left: 15px;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .main-footer .footer-list li a:hover {
        text-decoration: underline;
        color: #ff6666;
    }

    .main-footer .footer-list li a:before {
        position: absolute;
        content: '\f105';
        left: 0px;
        top: 0px;
        color: #8a8d91;
        font-weight: 800;
        font-family: 'Font Awesome 5 Free';
    }

    /*Gallery Widget*/

    .main-footer .gallery-widget {
        position: relative;
        max-width: 350px;
    }

    .main-footer .gallery-widget .images-outer {
        position: relative;
        margin: 0px -3px;
    }

    .main-footer .gallery-widget .image-box {
        position: relative;
        float: left;
        width: 33.333%;
        padding: 0px 5px;
        margin-bottom: 10px;
    }

    .main-footer .gallery-widget .image-box img {
        position: relative;
        display: block;
        width: 100%;
        border-radius: 4px;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .main-footer .gallery-widget .image-box img:hover {
        opacity: 0.70;
    }

    /* Info List */

    .main-footer .info-list {
        position: relative;
    }

    .main-footer .info-list li {
        position: relative;
        color: #8a8d91;
        font-size: 15px;
        line-height: 1.8em;
        margin-bottom: 12px;
    }

    .main-footer .info-widget .social-links {
        position: relative;
        float: left;
        padding: 15px 0px;
    }

    .main-footer .info-widget .social-links li {
        position: relative;
        margin-right: 8px;
        display: inline-block;
    }

    .main-footer .info-widget .social-links li:last-child {
        margin-right: 0px;
    }

    .main-footer .info-widget .social-links li a {
        position: relative;
        color: #ffffff;
        width: 50px;
        height: 50px;
        line-height: 50px;
        text-align: center;
        border-radius: 50%;
        display: inline-block;
        -webkit-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .main-footer .info-widget .social-links li.google a {
        background-color: #dd4b39;
    }

    .main-footer .info-widget .social-links li.facebook a {
        background-color: #4a6fbe;
    }

    .main-footer .info-widget .social-links li.twitter a {
        background-color: #55acee;
    }

    .main-footer .info-widget .social-links li.instagram a {
        background-color: #ea4c89;
    }

    .main-footer .info-widget .social-links li.vimeo a {
        background-color: #1ab7ea;
    }

    .main-footer .footer-bottom {
        position: relative;
        padding: 20px 0px;
        border-top: 1px solid #e5e5e5;
    }

    .main-footer .footer-bottom .footer-nav {
        position: relative;
        text-align: right;
    }

    .main-footer .footer-bottom .footer-nav li {
        position: relative;
        padding-right: 10px;
        margin-right: 10px;
        line-height: 1.1em;
        display: inline-block;
        border-right: 1px solid #8a8d91;
    }

    .main-footer .footer-bottom .footer-nav li:last-child {
        padding-right: 0px;
        margin-right: 0px;
        border-right: none;
    }

    .main-footer .footer-bottom .footer-nav li a {
        position: relative;
        color: #8a8d91;
        font-size: 15px;
        -webkit-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .main-footer .footer-bottom .footer-nav li a:hover {
        color: #ff6666;
        text-decoration: underline;
    }


    .marquee {
        position: absolute;
        animation: scroll 5s linear infinite
    }
    .marquee1 {
        position: absolute;
        animation: scroll 5s linear infinite
    }

    @keyframes scroll {
        0% {
            left: 100%;
        }
        100% {
            left: -50px;
        }
    }

    .vl {
        border-left: 5px solid #FDC801;
        height: 12%;
        margin-left: 35%;
    }

    a:hover {
        text-decoration: underline
    }


    .wrapper {
        overflow: hidden;

    }

    @media all and (max-width: 1000px) {
        #One {
            background-color: gray;
            float: left;
            /*margin-right:20px;*/
            width: 100%;
            height: 100%;
        }

        #two {
            background-color: white;
            overflow: hidden;
            width: 100%;
            /*border:2px dashed #ccc;*/
            /*min-height:170px;*/
        }

        #news {
            float: left;


        }

        #events {
            float: right;
        }

    }

    @media screen and (min-width: 1001px) {
        #One {
            background-color: gray;
            float: left;
            /*margin-right:20px;*/
            /*width: 70%;*/
            width: 70% !important;
            height: 100%;
            margin: 1%;
            background-color: #EDEDF4;
        }

        #One1 {
            background-color: gray;
            float: left;
            /*margin-right:20px;*/
            /*width: 70%;*/
            width: 75%;
            /*height: 50%;*/
            /*margin: 1%;*/
            background-color: #EDEDF4;
        }

        #two {
            background-color: white;
            overflow: hidden;
            width: 25%;
            /*height: 10%;*/
            background-color: #EDEDF4;

            /*border:2px dashed #ccc;*/
            /*min-height:170px;*/
        }
    }

    /*#One {*/
    /*    background-color: gray;*/
    /*    float: left;*/
    /*    !*margin-right:20px;*!*/
    /*    width: 80%;*/
    /*    height: 100%;*/
    /*    margin: 2%;*/
    /*    !*border-right:2px solid #000;*!*/
    /*}*/

    /*#two {*/
    /*    background-color: white;*/
    /*    overflow: hidden;*/
    /*    margin: 10px;*/
    /*    width: 15%;*/
    /*    !*border:2px dashed #ccc;*!*/
    /*    !*min-height:170px;*!*/
    /*}*/

    #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: darkblue;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
    }

    #myBtn:hover {
        background-color: #FDC801;
        color: darkblue;
        font-weight: bold;
    }


    /*Style For Visitors*/

    .website-counter {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    /* Styles for website counter container */
    .website-counter {
        height: 50px;
        width: 80px;
        color: white;
        border-radius: 30px;
        font-weight: 700;
        font-size: 25px;
        margin-top: 10px;
    }

    /* Styles for reset button */
    #reset {
        margin-top: 20px;
        background-color: #008cba;
        cursor: pointer;
        font-size: 18px;
        padding: 8px 20px;
        color: white;
        border: 0;
    }

    .QuickLinksHere:Hover {
        text-decoration: underline;
    }

    .fa-facebook:hover {
        color: blue !important;
    }

    .fa-youtube:hover {
        color: #FF0000 !important;
    }

    .fa-twitter-square:hover {
        color: #1DA1F2 !important;
    }

    .fa-instagram:hover {
        color: #E1306C !important;
    }

    .fa-linkedin-square:hover {
        color: #006db0 !important;
    }

    .copyright:hover {
        text-decoration: underline;
        color: #ff6666;
    }

    /*Third Level dropdown*/

    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu > .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -6px;
        margin-left: -1px;
        -webkit-border-radius: 0 6px 6px 6px;
        -moz-border-radius: 0 6px 6px;
        border-radius: 0 6px 6px 6px;
        Width: 100%;
    }

    .dropdown-submenu:hover > .dropdown-menu {
        display: block;
    }

    .dropdown-submenu > a:after {
        display: block;
        content: " ";
        float: right;
        width: 0;
        height: 0;
        border-color: transparent;
        border-style: solid;
        border-width: 5px 0 5px 5px;
        border-left-color: #ccc;
        margin-top: 5px;
        margin-right: -10px;
    }

    .dropdown-submenu:hover > a:after {
        border-left-color: #fff;
    }

    .dropdown-submenu.pull-left {
        float: none;
    }

    .dropdown-submenu.pull-left > .dropdown-menu {
        left: -100%;
        margin-left: 10px;
        -webkit-border-radius: 6px 0 6px 6px;
        -moz-border-radius: 6px 0 6px 6px;
        border-radius: 6px 0 6px 6px;
    }

    #TableOut {
        box-shadow: 13px 13px 20px #787878, -13px -13px 20px #787878;
        border-radius: 20px;
    }
</style>
@stop
@section('content')



<section>
    <div class="" style="margin: 25px; padding:10px;" id="TableOut">
{{--    <div class="half-half-image-text" style="border: 1px solid #EDEDF4; background-color: #EDEDF4;">--}}
        <div class="half-half-image-text" style="border: 1px solid #EDEDF4;">
        <div>
            <div class="container1 separator">
                <div class="line"></div>
{{--                <h2><a target="_blank" href="https://www.glcmumbai.com/photo-gallery.html"--}}
{{--                       style="font-family: 'Roboto', sans-serif; font-weight: bold; text-align: center; font-size: 35px;">--}}
{{--                        From The Desk Of Principal</a></h2>--}}
                <h2>From The Desk Of Principal</h2>
                <div class="line"></div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="content" style="height: 100%;display:flex;align-items: center;padding: 35px 0px;">
                        @foreach($DataPrincipalPic as $item1)
                            <p style="font-size: 22px; margin: 20px; text-align: justify; font-family:Arial;
                             font-weight: bold;">{{$item1->Description}}
                            </p>
                        @endforeach
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="img" style="
                         background-size:cover; min-height: 320px;height: 100%;border-radius: 10px; margin:10px;">
                        @foreach($DataPrincipalPic as $item1)
                            <img src="{{$item1->ImageUrl}}" alt="logo">
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</section>
@endsection
