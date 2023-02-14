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


<style>

    :root {
        --font-family: sans-serif;
        --font-size: 62.5%;
        --line-height: base-line;
        --container-width: 1366px;
    }

    body {
        font-size: 25PX;
        align-content: center;
        border-bottom-left-radius: 50% 50%;
        border-bottom-right-radius: 50% 50%
    }


    *,
    *::before,
    *::after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        list-style-type: none;
        outline: none;
    }

    img {
        width: 100%;
        max-width: 100%;
        height: 100%;
        max-height: 100%;
        display: block;
        object-fit: cover;
        border-radius: 5px;
    }

    .merktitel p {
        color: white;
        font-family: 'Arvo', serif;
        font-size: 1.5rem;
    }

    .merktext {
        padding: 1rem 1rem 3rem 1rem;
        text-align: left;
    }

    .merktext p, ul {
        font-family: 'Raleway';
    }

    .containerForInfo {
        /*background-color: #D7D6D6;*/
        font-family: Calibri;
        font-size: 15px;
        height: 30px;
        width: 100%;
    }

    .containerForGLCLogo {
        background-color: #EDEDF4;
        width: 100%;
        height: 150px;
    }

    /*@media screen and (max-width: 1045px) {*/

    /*    .mainimage {*/
    /*        display: none;*/
    /*    }*/
    /*}*/

    /*From Here For Nav Bar*/

    body {
        margin: 0;
        font-family: Arial
    }

    .topnav {
        overflow: hidden;
        /*background-color: #041A8A;*/
        /*background-color: #0422ba;*/
        background-color: #1E5631;
    }

    .topnav a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;

        text-decoration: none;
        font-size: 17px;

    }


    .topnav .icon {
        display: none;
    }

    .dropdown1 {
        float: left;
        overflow: hidden;
    }

    .dropdown1 .dropbtn1 {
        font-size: 17px;
        border: none;
        outline: none;
        color: #FDC801;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
    }

    .dropdown1-content1 {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown1-content1 a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .topnav a:hover, .dropdown1:hover .dropbtn1 {
        color: white;
    }

    .dropdown1-content1 a:hover {
        /*background-color: #041A8A;*/
        background-color: #1E5631;
        color: white;
    }

    .dropdown1:hover .dropdown1-content1 {
        display: block;
    }

    @media screen and (max-width: 1280px) {
        .topnav a:not(:first-child), .dropdown1 .dropbtn1 {
            display: none;
        }

        .topnav a.icon {
            float: right;
            display: block;
        }
    }

    @media screen and (max-width: 1280px) {
        .topnav.responsive {
            position: relative;
        }

        .topnav.responsive .icon {
            position: absolute;
            right: 0;
            top: 0;
        }

        .topnav.responsive a {
            float: none;
            display: block;
            text-align: left;
        }

        .topnav.responsive .dropdown1 {
            float: none;
        }

        .topnav.responsive .dropdown1-content1 {
            position: relative;
        }

        .topnav.responsive .dropdown1 .dropbtn1 {
            display: block;
            width: 100%;
            text-align: left;
        }
    }

    /*End HEre Nav*/

    .button5 {
        background-color: #EDEDF4;
        border: 2px solid Black;
        margin-top: 10%;
        padding: 5px;
        font-size: 20px;

    }

    /*Slider*/

    /*html, body {*/
    /*    background: #F7F5E6;*/
    /*    !*height: 100%;*!*/
    /*    margin: 0;*/
    /*    padding: 0;*/
    /*    width: 100%;*/
    /*}*/

    .slider {
        /*max-width: 50%;*/
    }

    .slide_viewer {
        height: 450px;
        overflow: hidden;
        position: relative;
    }

    .slide_group {
        height: 100%;
        position: relative;
        width: 100%;
    }

    .slide {
        display: none;
        height: 100%;
        position: absolute;
        width: 100%;
    }

    .slide:first-child {
        display: block;
    }

    .slide:nth-of-type(1) {
        /*background: pink;*/
    }

    .slide:nth-of-type(2) {
        /*background: #F4E4CD;*/
    }

    .slide:nth-of-type(3) {
        /*background: #C75534;*/
    }

    .slide:nth-of-type(4) {
        /*background: #D1D1D4;*/
    }

    .slide_buttons {
        left: 0px;
        position: absolute;
        right: 0;
        text-align: center;
        margin-left: -50%;
    }

    a.slide_btn {
        color: #474544;
        font-size: 42px;
        margin: 0 0.175em;
        padding-left: 10px;
        -webkit-transition: all 0.4s ease-in-out;
        -moz-transition: all 0.4s ease-in-out;
        -ms-transition: all 0.4s ease-in-out;
        -o-transition: all 0.4s ease-in-out;
        transition: all 0.4s ease-in-out;
    }

    .slide_btn.active, .slide_btn:hover {
        color: #428CC6;
        cursor: pointer;
    }

    .directional_nav {
        height: 340px;
        margin: 0 auto;
        max-width: 940px;
        position: relative;
        top: -340px;
    }

    .previous_btn {
        bottom: 0;
        left: 10px;
        margin: auto;
        position: absolute;
        top: 0;
    }

    .next_btn {
        bottom: 0;
        margin: auto;
        position: absolute;
        right: 10px;
        top: 0;
    }

    .previous_btn, .next_btn {
        cursor: pointer;
        height: 65px;
        opacity: 0.5;
        -webkit-transition: opacity 0.4s ease-in-out;
        -moz-transition: opacity 0.4s ease-in-out;
        -ms-transition: opacity 0.4s ease-in-out;
        -o-transition: opacity 0.4s ease-in-out;
        transition: opacity 0.4s ease-in-out;
        width: 65px;
    }

    .previous_btn:hover, .next_btn:hover {
        opacity: 1;
    }

    @media only screen and (max-width: 1536px) {
        .previous_btn {
            left: 50px;
        }

        .next_btn {
            right: 50px;
        }
    }


    /*For The notice And Events*/

    @import url('https://fonts.googleapis.com/css?family=Roboto');
    body {
        font-family: 'Roboto', sans-serif;
    }

    .wrapper {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    .card {
        max-width: 400px;
        min-height: 150px;
        background: #041A8A;
        padding: 10px;
        border-radius: 3px;
        box-sizing: border-box;
        color: #FFF;

        /*box-shadow: rgb(50 50 93 / 25%) 0px 30px 60px -12px, rgb(0 0 0 / 30%) 0px 18px 36px -18px;*/
    }

    .card:nth-child(2) {
        background: #4181ee;
    }

    .card:last-child {
        /*background: #EFEFEF;*/
        /*background: #041A8A;*/
        background: #1E5631;
        /*background: #A7E074;*/

    }

    .card-title {
        margin-top: 0;
        font-size: 26px;
        font-weight: 600;
        letter-spacing: 1.2px;
    }

    .card-content {
        font-size: 14px;
        letter-spacing: 0.5px;
        line-height: 1.5;

    }

    .card-btn {
        all: unset;
        display: block;
        margin-right: 50%;
        text-align: center;
        /*justify-content: center;*/
        border: 2px solid #FFF;
        padding: 10px 15px;
        border-radius: 25px;
        font-size: 10px;
        font-weight: 600;
        transition: all 0.5s;
        cursor: pointer;
        letter-spacing: 1.2px;
        background-color: #FDC801;
    }

    /*merquee style*/


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
        /*color: Darkblue;*/
        color: #1E5631;
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
        color: #1E5631;
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
        border: 1px solid #1E5631;
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
        background: #1E5631;
        border-color: #1E5631;
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
        /*color: darkblue;*/
        color: #1E5631;
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
        background-color: #FDC801;
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
        /*color: darkblue;*/
        color: #027320;
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
        max-width: 100%;
        height: auto;
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

    /*For responsive Vision Slider Notice*/

    @media all and (max-width: 1504px) {

        #Visionsss {
            display: none;
            width: 100%;
            /*display:none;*/
            /*min-width: 100%;*/
            background-color: green;
            /*height: 100%;*/
        }

        #WrapId {
            /*height: 100%;*/
        }

        #Visionddd {
            display: block;
            width: 45%;
            background-color: #1E5631;
            float: right;
            padding: 10px;
        }


        #idSlider {
            width: 100%;
            /*height: 100%;*/
        }

        #NoticeId {
            width: 45%;
            background-color: #1E5631;
            padding: 10px;
            float: right;
            margin-left: 2%;
            /*height: 100%;*/
        }
    }

    @media all and (min-width: 1504px) {
        #WrapId {
            height: 60%;
        }

        #Visionsss {

            display: block;
            width: 25%;
            background-color: #1E5631;
            float: right;
            padding: 10px;
        }

        #Visionddd {
            display: none;
            width: 100%;

            /*display:none;*/
            /*min-width: 100%;*/
            background-color: green;
            /*height: 100%;*/
        }


        #idSlider {
            width: 50%;
            /*height: 100%;*/
        }

        #NoticeId {
            width: 25%;
            background-color: #1E5631;
            padding: 10px;

            /*height: 100%;*/
        }
    }

    /*@media screen and (min-width: 1001px) {*/
    /*    #One {*/
    /*        background-color: gray;*/
    /*        float: left;*/
    /*        !*margin-right:20px;*!*/
    /*        !*width: 70%;*!*/
    /*        max-width: 100% !important;*/
    /*        max-height: 100%;*/
    /*        !*margin: 1%;*!*/
    /*        background-color: #EDEDF4;*/
    /*    }*/

    /*    !*#One1 {*!*/
    /*    !*    background-color: gray;*!*/
    /*    !*    float: left;*!*/
    /*    !*    !*margin-right:20px;*!*!*/
    /*    !*    !*width: 70%;*!*!*/
    /*    !*    width: 50%;*!*/

    /*    !*    height: 100%;*!*/
    /*    !*    !*margin: 1%;*!*!*/
    /*    !*    background-color: #EDEDF4;*!*/
    /*    !*}*!*/

    /*    #two {*/
    /*        background-color: white;*/
    /*        overflow: hidden;*/
    /*        width: 25%;*/
    /*        !*height: 10%;*!*/
    /*        background-color: #EDEDF4;*/

    /*        !*border:2px dashed #ccc;*!*/
    /*        !*min-height:170px;*!*/
    /*    }*/
    /*}*/

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
        /*background-color: darkblue;*/
        background-color: #1E5631;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
    }

    #myBtn:hover {
        background-color: #FDC801;
        /*color: darkblue;*/
        color: #1E5631;
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

    .fntsz {
        font-size: 140%;
        padding-left: 10px;
        padding-right: 10px;
        font-weight: normal;
        /*justify-content: center;*/
        text-align: left;
    }

    /*For fourbuttons*/

    /*For 1136 width*/
    @media all and (max-width: 1000px) {

        #mainlogoid {
            width: 20%;
            padding-left: 5%;
        }

        #nameid {
            width: 30%;
            padding-top: 2%;
            padding-right: 5%;
            font-size: 1.0rem;
        }

        #fourbtn {
            width: 50%;
            float: left;
            padding-bottom: 1%;
            padding-top: 1%;
        }

        .namez {
            font-size: 1.25rem;
            font-family: 'Times New Roman';
            font-weight: bold;
            text-align: center;
            color: #027320;

        }

        #img2 {
            display: none;
        }
    }

    @media all and (min-width: 1136px) {

        #mainlogoid {
            width: 10%;
            padding-left: 3%;
            float: left;

        }

        #nameid {
            width: 40%;
            padding-top: 25px;

        }

        #fourbtn {
            width: 40%;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        #img2 {
            width: 10%;
            float: right;
        }

        .namez {

            font-size: 1.563rem;
            color: #027320;
            font-weight: bold;
            text-align: center;
            font-family: 'Times New Roman';


        }
    }

    /*For 1920px*/

    @media all and (max-width: 1136px) and (min-width: 1000px) {

        #mainlogoid {
            width: 10%;
            padding-left: 3%;
            float: left;

        }

        #nameid {
            width: 35%;
            padding-top: 25px;
            font-size: 1.0rem;
        }

        #fourbtn {
            width: 35%;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        #img2 {
            width: 20%;
            float: right;
        }

        .namez {

            font-size: 1.563rem;
            color: #027320;
            font-weight: bold;
            text-align: center;
            font-family: 'Times New Roman';


        }
    }


</style>

<section>
    <div class="content">

        <div class="containerForInfo" style="background-color: #D7D6D6 ">
            <div class="row md-12">

                <div class="col-md-4" style="padding-top: 5px; font-size: 15px; margin-left: 15px; ">
                    <span><i class="fa fa-phone"></i></span>
                    <span> &nbsp; 022-2204 1707</span><br>
                </div>

                <div class="col-md-4" style="padding-top: 5px; font-size: 15px; ">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <span> &nbsp; principal@glcmumbai.com</span><br>
                </div>

                <div class="col-md-2" style=" font-size: 15px; text-align:right; padding-top:0.2%;">
                    <i class="fa fa-facebook-square" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa fa-twitter" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa fa-linkedin" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                </div>

            </div>
        </div>

        <div class="containerForGLCLogo" style="background-color: #EDEDF4;">
            <div class="row">
                <div class="mainGlclogo" style="" id="mainlogoid">
                    <img src="{{ asset('/images/LOGO transparent.png')}}" alt="logo"
                         style="width:100px; height:150px; "/>
                </div>
                <div class="namez" id="nameid">
                    {{--                    <p> शासकीय विधी महाविद्यालय <br/> GOVERNMENT LAW COLLEGE<br/><h5 style="font-family:'Times New Roman'; font-weight:bold">MUMBAI, MAHARASHTRA</h5></p>--}}
                    <p> शासकीय विधी महाविद्यालय <br/>
                        GOVERNMENT LAW COLLEGE <br/>
                        MUMBAI, MAHARASHTRA</p>
                </div>

                {{--                Four Button Start--}}

                <div class="row" id="fourbtn">
                    @foreach($DataButton as $item)
                        {{--                        <a   style="color:#FDC801; margin-top: 1%; padding:1%; font-size: 20px;"  target="_blank"  href="{{$item->PdfUrl}}">{{$item->DisplayText}}</a>--}}
                        <div class="col-md-6 col-md-3"
                             style=" word-wrap: break-word; text-align: center; float:right;border:1px solid green;
                             border-radius:16px;max-width:45%;margin-right:5%;max-height:45%;">
                            <BUTTON class="box box1"
                                    style="text-align: center;font-color:FDC801;  font-size: 50%; !important; width:100%;height:50% ; border:0px;">
                                <a href="{{$item->PdfUrl}}" target="_blank">
                                    {{--                                    <i class="fa fa-agreement"></i>--}}
                                    <i class='fas fa-file-contract' style='font-size:36%'></i>
                                    <img src="{{ asset('/images/new.gif')}}"
                                         style="height:auto; width:auto">{{$item->DisplayText}}
                                    <br/>
                                </a>
                            </BUTTON>
                        </div>
                    @endforeach

                </div>

                {{--                Four Button End--}}

                <div class="mainimage" style="" id="img2">
                    {{--                    <img src="{{ asset('/images/MAHAGOVlogo.png') }}" alt="logo"--}}
                    <img src="{{ asset('/images/har-ghar-tiranga-transparent.png') }}" alt="logo"
                         style=" height:130px;margin:10px; padding-top:10px; "/>

                </div>
            </div>
        </div>

        <div class="topnav" id="myTopnav">
            <a href="{{'Index'}}" class="active" style="color: #FDC801">Home</a>
            <div class="dropdown1">
                <button class="dropbtn1">About Us
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown1-content1">
                    <a href="{{'AboutUsIndex'}}">About Government Law College</a>
                    <a href="{{'FromTheDeskOfPrincipalIndex'}}">From The Desk Of Principal</a>
                    <a href="{{'VisionMissionIndex'}}">Vision and mission</a>
                    <a href="{{'InfrastructureIndex'}}">Infrastructure</a>
                    {{--                    <li class="dropdown-submenu">--}}
                    {{--                        <a tabindex="-1" href="#">Infrastructure</a>--}}
                    {{--                        <ul class="dropdown-menu">--}}
                    {{--                            <li><a tabindex="-1" href="#">Principal Office</a></li>--}}
                    {{--                            <li><a href="#">Administration Office</a></li>--}}
                    {{--                            <li><a href="#">Professor Staff Room</a></li>--}}
                    {{--                            <li><a href="#">Ladies Common Room</a></li>--}}
                    {{--                            <li><a href="#">Library</a></li>--}}
                    {{--                            <li><a href="#">ERR Room</a></li>--}}
                    {{--                            <li><a href="#">Classroom</a></li>--}}
                    {{--                            <li><a href="#">Moot Court Room</a></li>--}}
                    {{--                            <li><a href="#">Auditorium</a></li>--}}
                    {{--                            <li><a href="#">Canteen</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                </div>
            </div>
            <div class="dropdown1">
                <button class="dropbtn1">Administration
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown1-content1">
                    <a href="{{'RTIIndex'}}">RTI</a>
                    @foreach($Nagarisanad as $item8)
                        <a href="{{$item8->PDF}}" target="_blank">Nagari Sanad</a>
                    @endforeach
                    @foreach($AntiRagging as $item11)
                        <a href="{{$item11->PDF}}" target="_blank">Anti Raging</a>
                    @endforeach
                    <a href="#">Women Development Cell</a>
                </div>
            </div>
            <div class="dropdown1">
                <button class="dropbtn1"> Faculty
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown1-content1">
                    <a href="{{'TeachingStaffFacultyIndex'}}">Teaching Staff (Faculty)</a>
                    <a href="{{'TeachingStaffAdjunctIndex'}}">Teaching Staff (Adjunct)</a>
                    <a href="{{'NonTeachingStaffIndex'}}">Non-Teaching Staff</a>
                </div>
            </div>
            <div class="dropdown1">
                <button class="dropbtn1"> Students Corner
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown1-content1">
                    <a href="{{'CoursesIndex'}}">Program/Courses</a>
                    {{--                    <a href="{{'CSRStatesticsIndex'}}">Admission Rules and regulations</a>--}}
                    {{--                    @foreach($Admission as $item12)--}}
                    {{--                    <a href="{{$item12->PDF}}" target="_blank">Admission Rules and regulations</a>--}}
                    {{--                    @endforeach--}}

                    {{--                    new --}}
                    <li class="dropdown-submenu">
                        <a tabindex="-1" href="#">Admission Rules and regulations</a>
                        <ul class="dropdown-menu">
                            <li>
                                @foreach($Admission as $item12)
                                    <a href="{{$item12->PDF}}" target="_blank">Admission Procedure</a>
                                @endforeach
                            </li>
                            <li>
                                @foreach($Admission1 as $item13)
                                    <a href="{{$item13->PDF}}" target="_blank">Admission Requirements</a>
                                @endforeach
                            </li>
                            <li><a href="{{'CSRStatesticsIndex'}}">Fee Structure</a></li>
                            <li>
                                @foreach($Admission2 as $item14)
                                    <a href="{{$item14->PDF}}" target="_blank">Rules Regarding Discipline</a>
                                @endforeach
                            </li>
                            <li>
                                @foreach($Admission3 as $item15)
                                    <a href="{{$item15->PDF}}" target="_blank">Eligibilty for In-House Admissions</a>
                                @endforeach
                            </li>
                            <li>
                                @foreach($Admission4 as $item16)
                                    <a href="{{$item16->PDF}}" target="_blank">PGD IPR Admission Notice 2022-23</a>
                                @endforeach
                            </li>
                        </ul>
                    </li>
                    {{--                    end--}}

                    @foreach($ExamRules as $item17)
                        <a href="{{$item17->PDF}}" target="_blank">Examination Rules and regulations</a>
                    @endforeach
                    <a href="{{'CommitteeIndex'}}">Committee</a>
                    <a href="{{'RankListIndex'}}">Rank List</a>
                </div>
            </div>
            <a href="{{'TendersIndex2'}}" style="color: #FDC801">Tender</a>
            <div class="dropdown1">
                <button class="dropbtn1"> Library
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown1-content1">
                    <a href="#">Collection</a>
                    <a href="#">Rules and regulations</a>
                    <a href="#"> Remote access facility</a>
                    <a href="#">Web OPAC</a>
                    <a href="#">E-book and E- journals</a>
                    <a href="#">Advance Lexis Nexis</a>
                    <a href="#">Manuptra</a>
                    <a href="#">SCC Online</a>
                </div>
            </div>
            <div class="dropdown1">
                <button class="dropbtn1"> Scholarships & Awards
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown1-content1">
                    <a href="#">M.C.Chagla Memorial Academic Award</a>
                    <a href="#">Moot Court/Debating Society Award</a>
                </div>
            </div>
            <div class="dropdown1">
                <button class="dropbtn1"> Publication
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown1-content1">
                    <a href="{{'MagazineIndex'}}">Magazine</a>
                    <a href="{{'LawReviewIndex'}}">The Law Review</a>
                    <a href="{{'NewLawReviewIndex'}}">New Law Review</a>
                    <a href="#">Publication</a>
                </div>
            </div>
            <div class="dropdown1">
                <button class="dropbtn1"> IQAC/NAAC
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown1-content1">
                    <a href="#">NAAC</a>
                    <a href="#">IQAR</a>
                    <a href="#">Feedback</a>
                </div>
            </div>
            <a href="{{'AlumniIndex'}}" style="color: #FDC801">Alumni</a>
            <div class="dropdown1" style="float: right; margin-right: 5%; ">
                <button class="dropbtn1"> LogIn
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown1-content1">
                    <a href="{{'Login'}}">Member Login</a>
                </div>
            </div>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>

    </div><!-- End // .directional_nav -->

    {{--    Slider--}}
    <div class="wrapper" id="WrapId" style="background-color: #EDEDF4;margin-top: 1%;">

        {{--            vision start--}}
        <div class="" id="Visionsss" style="">
            <div class="vision  " id="events"
                 style=" float: right; width:100%;">


                <div class="row">
                    <div class="col-md-12"
                         style="color: #EDEDF4; font-weight: Bold; text-align: center;font-size:10px; ">
                        <h6 class="card-title"
                            style="color: #FDC801; font-weight: Bold; text-align: center;font-size:20px; ">

                            Vision</h6>
                        <div class="fntsz" style="">
                            <p style="">To rationalize & advance teaching learning process in Law & Ascertain role of
                                legal
                                education.
                                To develop amongst the students a research scholar and Endeavor to build their
                                character to
                                human values.
                                To serve nation by developing various skill amongst through legal services, advocacy
                                and law
                                reforms.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12"
                         style="color: #EDEDF4; font-weight: Bold; text-align: center;font-size:10px; ">
                        <h6 class="card-title"
                            style="color: #FDC801; font-weight: Bold; text-align: center;font-size:20px; ">
                            Mission</h6>
                        <div class="fntsz">
                            <p>To provide quality legal education, legal research & preparing Specialized systematic
                                teaching and training in the field of law.
                                To provide legal expertise to all sections of society especially vulnerable groups
                                so
                                that justice can be restored society.
                                To cherish our constitutional values & expand its horizons to such and extend that
                                it
                                is reflected in conduct of every Indian Citizen.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        {{--            vision end--}}
        <div class="" style="" id="idSlider">
            <div class=" slider" id="One">

                <div class="slide_viewer">
                    <div class="slide_group">

                        @foreach($SliderImages as $item3)
                            <div class="slide">
                                <img src="{{$item3->ImageUrl}}" alt="logo"
                                     style="width:100%;min-height:100%; padding : 2%;">
                            </div>

                        @endforeach

                    </div>

                </div>

            </div>
        </div>

        <!-- End // .slider -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <div class="" id="Visionddd" style="">
            <div class="vision  mt-1" id="events"
                 style=" width:100%;padding-top:4%;">

                <div class="row">
                    <div class="col-md-12"
                         style="color: #EDEDF4; font-weight: Bold; text-align: center;font-size:10px; ">
                        <h6 class="card-title"
                            style="color: #FDC801; font-weight: Bold; text-align: center;font-size:20px; ">

                            Vision</h6>
                        <div class="fntsz">
                            <p>To rationalize & advance teaching learning process in Law & Ascertain role of legal
                                education.
                                To develop amongst the students a research scholar and Endeavor to build their
                                character to
                                human values.
                                To serve nation by developing various skill amongst through legal services, advocacy
                                and law
                                reforms.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12"
                         style="color: #EDEDF4; font-weight: Bold; text-align: center;font-size:10px; ">
                        <h6 class="card-title"
                            style="color: #FDC801; font-weight: Bold; text-align: center;font-size:20px; ">
                            Mission</h6>
                        <div class="fntsz">
                            <p>To provide quality legal education, legal research & preparing Specialized systematic
                                teaching and training in the field of law.
                                To provide legal expertise to all sections of society especially vulnerable groups
                                so
                                that justice can be restored society.
                                To cherish our constitutional values & expand its horizons to such and extend that
                                it
                                is reflected in conduct of every Indian Citizen.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="" id="NoticeId" style="">
            {{--            <div class="row p-2" style="height: auto">--}}

            <div class=" mt-1" id="notice" style=" float: right;">
                <h6 class="card-title" style="text-align: center; color: #FDC801; font-size:20px;">
                    <i class="fa fa-envelope" aria-hidden="true" style="color:#FDC801; padding: 1px;"></i>Notice
                </h6>
                @foreach($Data as $item)
                    {{--                        <a style="color:#FDC801;  margin-top: 0%;padding:1%; font-size: 15px;" target="_blank"--}}
                    <a style="color:#EDEDF4;  margin-top: 0%;padding:1%; font-size: 62%;" target="_blank"
                       href="{{$item->PDFUrl}}">{{$item->ShortDescription}}<br><br></a>
                @endforeach
                <button class="card-btn text-center"
                        style="color: darkblue; font-weight: Bold; margin-top: 10px;font-size:10px;"
                        onclick="location.href='https://www.glcmumbai.com/news.html';">READ MORE
                </button>
            </div>
        </div>
    </div>
    {{--    </div>--}}
    {{--    </div>--}}
</section>

<section>
    <marquee onmouseover="this.stop();" onmouseout="this.start();"
             style="color: #FDC801; padding:5px; font-weight: bold;
             {{--font-family: Calibri; background-color: #041A8A; padding:10px;" scrollamount="14">--}}
                 font-family: Calibri; background-color: #1E5631; padding:10px;" scrollamount="14">
        Greetings! Here you will find all the information you need about New Schemes by the Maharashtra Goverment.
        Please

        @foreach($DataMarquee as $item)
            {{--            <a style="color :#ffffff; text-decoration:underline" target="_blank"--}}
            <a style="color :#ffffff; text-decoration:underline" target="_blank"
               href="{{$item->PdfUrl}}">{{$item->Text}}</a>

        @endforeach

        for more information and if you have any questions, you can call our official number. Thank you!!
    </marquee>
</section>

{{--    From The Desk Of Principal --}}

<section>
    <div class="half-half-image-text" style="border: 1px solid #EDEDF4; background-color: #EDEDF4;">
        <div>
            <div class="container1 separator">
                <div class="line"></div>
                {{--                <h2><a target="_blank" href="https://www.glcmumbai.com/photo-gallery.html"--}}
                {{--                       style="font-family: 'Roboto', sans-serif; font-weight: bold; text-align: center; font-size: 35px;">--}}
                {{--                        From The Desk Of Principal</a></h2>--}}
                <h2><a target="_blank" href="https://www.glcmumbai.com/photo-gallery.html"
                       style="font-family: 'Roboto', sans-serif; font-weight: bold; text-align: center; font-size: 35px;">
                        From The Desk Of Principal</a></h2>
                <div class="line"></div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="content" style="height: 100%;display:flex;align-items: center;padding: 35px 0px;">
                        @foreach($DataPrincipalPic as $item1)
                            <p style="font-size: 22px; margin: 20px; text-align: justify; font-family: 'Times New Roman';
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

</section>


{{--Gallery--}}
<section style="background-color: #EDEDF4">
    {{--    new--}}

    <div class="row">
        <div class="col-md-8">
            <div class="container1 separator">


                <div class="line"></div>
                <h2><a target="_blank" href="https://www.glcmumbai.com/photo-gallery.html"
                       style="font-family: 'Roboto', sans-serif; font-weight: bold; text-align: center; font-size: 35px;">
                        Photo Gallery</a></h2>
                <div class="line"></div>
            </div>
            <div class="container1">

                @foreach($DataPictureALL as $item1)

                    <img class="card-content" style="color: #052B68; margin-top: 1%;padding:1%; font-size: 22px; width: 100%;
                height: 100%;" target="_blank" src="{{$item1->ImageUrl}}"></img>
                @endforeach
            </div>
        </div>

        <div class="col-md-4 container1">
            <div class="card mt-1" id="events" style=" float: right; width:100%;height:100%;">
                <h5 class="card-title" style="color: #FDC801; font-weight: Bold; text-align: center;font-size:20px; ">
                    Events</h5>
                <marquee direction="up" scrolldelay='5' scrollamount="10"
                         style=" float: right; width:100%;height:90%; background-color:#1E5631;"
                         onmouseover="this.stop()" onmouseout="this.start()">

                    @foreach($Data1 as $item1)

                        {{--                    <div class="card mt-1 style=" id="events" style=" float: right; width:100%;background-color:#EDEDF4" display="inline-block">--}}
                        <a class="card-content" style=" margin-top: 1%;padding:1%; font-size: 15px;color: #FDC801;"
                           target="_blank" href="{{$item1->PDFUrl}}">{{$item1->ShortDescription}}</a><br><br>


                    @endforeach

                </marquee>
                <button class="card-btn" style=" font-weight: Bold; margin-top: 10px"

                        onclick="location.href='https://www.glcmumbai.com/events.html';">READ MORE

                </button>


            </div>
        </div>
    </div>
    </div>
    </div>

    {{--    new end--}}


    {{--    <div class="container1 separator">--}}
    {{--        <div class="line"></div>--}}
    {{--        <h2><a target="_blank" href="https://www.glcmumbai.com/photo-gallery.html"--}}
    {{--               style="font-family: 'Roboto', sans-serif; font-weight: bold; text-align: center; font-size: 35px;">--}}
    {{--                Photo Gallery</a></h2>--}}
    {{--        <div class="line"></div>--}}
    {{--    </div>--}}
    {{--        </div>--}}



    {{--    <div class="container1" >--}}
    {{--        @foreach($DataPictureALL as $item1)--}}
    {{--            <img class="card-content" style="color: #052B68; margin-top: 1%;padding:1%; font-size: 22px; width: 100%;--}}
    {{--                height: 100%;" target="_blank"  src="{{$item1->ImageUrl}}"></img>--}}
    {{--        @endforeach--}}

    {{--    </div>--}}

</section>

{{--        Testimonial--}}

<section>
    <div>
        {{--        <section id="testim" class="testim" style="background-color: #EDEDF4">--}}
        <section id="testim" class="testim" style="background-color: #EDEDF4">
            <div class="testim-cover">
                <div class="wrap">

                    <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                    <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>

                    <ul id="testim-dots" class="dots">
                        <li class="dot active"></li><!--
                    -->
                        <li class="dot"></li><!--
                    -->
                        <li class="dot"></li><!--
                    -->
                        <li class="dot"></li><!--
                    -->
                        <li class="dot"></li>
                    </ul>
                    <div id="testim-content" class="cont">
                        @foreach($DataAlumini as $item)

                            <div class="active">
                                <div class="img">
                                    <img src="{{$item->ImageUrl}}"
                                         alt="">
                                </div>
                                <h2>{{$item->Title}}</h2>
                                <p>{{$item->DESCRIPTION}}</p>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </section>
    </div>
</section>

<script src="https://use.fontawesome.com/1744f3f671.js"></script>

{{--    Footer Here--}}

<footer class="main-footer">
    <div class="container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!--Column-->
                <div class="big-column col-md-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-md-6">
                            <div class="footer-widget about-widget">
                                <p style=" text-align: justify; font-family: 'Times New Roman'; font-size: 38px; color: White;">
                                    ABOUT COLLEGE </p>
                                <div class="text">
                                    <p style=" text-align: justify; font-family: 'Times New Roman'; font-size: 18px; color: White;">
                                        Government Law College (GLC), established in 1855, has the distinction of
                                        being the oldest Law College in Asia, dating even prior to the University of
                                        Mumbai, and enjoys a pre-eminent reputation for excellence in the field of
                                        legal education.</p>
                                    <p style=" text-align: justify; font-family: 'Times New Roman'; font-size: 18px; font-weight: bold; color: White;">
                                        "Government Law College or GLC, as it is popularly known, continues to be an
                                        institution exclusively for the students of law. In addition to the old
                                        building, the college now has an annexe building, September 1988 onwards, which
                                        houses additional class rooms and a reference library.</p>
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-md-3">
                            <div class="footer-widget links-widget">
                                <p style=" text-align: justify; font-family: 'Times New Roman'; font-size: 38px; color: White;">
                                    Quick Links</p>
                                <ul class="">
                                    <li>
                                        <i class="fa fa-thumb-tack" aria-hidden="true" style="color:white"></i>
                                        <a style="margin-left: 5px; font-size: 18px; Color:white;"
                                           href="https://mu.ac.in/" target="_blank">Mumbai University</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-thumb-tack" aria-hidden="true" style="color:white"></i>
                                        <a style="margin-left: 5px; font-size: 18px; Color:white;"
                                           href="https://www.mahahsscboard.in/" target="_blank">Maharashtra Board</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-thumb-tack" aria-hidden="true" style="color:white"></i>
                                        <a style="margin-left: 5px; font-size: 18px; Color:white;"
                                           href="https://cetcell.mahacet.org/" target="_blank">Maharashtra CET Cell</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-thumb-tack" aria-hidden="true" style="color:white"></i>
                                        <a style="margin-left: 5px; font-size: 18px; Color:white;"
                                           href="https://cetcell.mahacet.org/" target="_blank">Maharashtra
                                            Scholership</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-thumb-tack" aria-hidden="true" style="color:white"></i>
                                        <a style="margin-left: 5px; font-size: 18px; Color:white;"
                                           href="http://www.barcouncilofindia.org/" target="_blank">Bar Counsil Of
                                            India</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-thumb-tack" aria-hidden="true" style="color:white"></i>
                                        <a style="margin-left: 5px; font-size: 18px; Color:white;"
                                           href="https://ili.ac.in/" target="_blank">The Indian Law Institute</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-thumb-tack" aria-hidden="true" style="color:white"></i>
                                        <a style="margin-left: 5px; font-size: 18px; Color:white;"
                                           href="https://www.isil-aca.org/" target="_blank">Indian Society for
                                            International Law</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-thumb-tack" aria-hidden="true" style="color:white"></i>
                                        <a style="margin-left: 5px; font-size: 18px; Color:white;"
                                           href="https://main.sci.gov.in/" target="_blank">Supreme Court Of India</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-thumb-tack" aria-hidden="true" style="color:white"></i>
                                        <a style="margin-left: 5px; font-size: 18px; Color:white;"
                                           href="https://www.maharashtra.gov.in/1125/Home" target="_blank">Maharashtra
                                            Goverment</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-thumb-tack" aria-hidden="true" style="color:white"></i>
                                        <a style="margin-left: 5px; font-size: 18px; Color:white;"
                                           href="https://dhepune.gov.in/home" target="_blank">
                                            Directorate of Higher Education, Pune
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="footer-column col-md-3">
                            <div class="footer-widget info-widget">
                                <p class="headin5_amrc col_white_amrc pt2"
                                   style=" text-align: justify; font-family: 'Times New Roman'; font-size: 30px; color: White;">
                                    Contact Us</p>
                                <p style="text-align: justify; font-family: 'Times New Roman'; font-size: 15px; color:white;">
                                    Government Law College<br>
                                    'A' Road, Churchgate,<br>
                                    Mumbai- 400 020 <br>
                                    <br>
                                    Tel: 022-2204 1707<br>
                                    Email: principal@glcmumbai.com
                                </p>
                                <!-- Social Links -->
                                <div class="Visitors-Container">
                                    <div style="color: #ffffff;  font-size: 18px; float: left; margin-top: 10px;">You
                                        Are Visitor No.
                                    </div>
                                    <div class="website-counter" style="font-size: 18px;"></div>
                                </div>{{--<button id="reset">Reset</button>--}}
                            </div>

                            <a href="https://www.facebook.com/"><i class="fa fa-facebook " aria-hidden="true"
                                                                   style="float: left; color: white; margin-right: 10px; "></i></a>

                            <a href="https://www.Youtube.com/"><i class="fa fa-youtube" aria-hidden="true"
                                                                  style="float: left; color: white; margin-right: 10px;"></i></a>

                            <a href="https://www.twitter.com/"><i class="fa fa-twitter-square" aria-hidden="true"
                                                                  style="float: left; color: white; margin-right: 10px;"></i></a>

                            <a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"
                                                                    style="float: left; color: white; margin-right: 10px;"></i></a>

                            <a href="https://www.linkedin.com/"><i class="fa fa-linkedin-square" aria-hidden="true"
                                                                   style="float: left; color: white; margin-right: 10px;"></i></a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row clearfix">

                <div class="column col-lg-6 col-md-12 col-sm-12">
                    {{--                    <div class="copyright"><span class="theme_color"--}}
                    {{--                    style="color: white; font-size: 15px;">Designed and Developed By TECHNOWIN IT INFRA PVT. LTD.</span>--}}
                    {{--                    </div>--}}
                    <div class="copyright">
                        <a href="http://technowinitinfra.com/" style="color: white; font-size: 15px;">Designed and
                            Developed By TECHNOWIN IT INFRA PVT. LTD.</a>
                    </div>
                </div>
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <ul class="footer-nav">
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

</footer>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>

<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>


<script>
    $('.slider').each(function () {
        var $this = $(this);
        var $group = $this.find('.slide_group');
        var $slides = $this.find('.slide');
        var bulletArray = [];
        var currentIndex = 0;
        var timeout;

        function move(newIndex) {
            var animateLeft, slideLeft;

            advance();

            if ($group.is(':animated') || currentIndex === newIndex) {
                return;
            }

            bulletArray[currentIndex].removeClass('active');
            bulletArray[newIndex].addClass('active');

            if (newIndex > currentIndex) {
                slideLeft = '100%';
                animateLeft = '-100%';
            } else {
                slideLeft = '-100%';
                animateLeft = '100%';
            }

            $slides.eq(newIndex).css({
                display: 'block',
                left: slideLeft
            });
            $group.animate({
                left: animateLeft
            }, function () {
                $slides.eq(currentIndex).css({
                    display: 'none'
                });
                $slides.eq(newIndex).css({
                    left: 0
                });
                $group.css({
                    left: 0
                });
                currentIndex = newIndex;
            });
        }

        function advance() {
            clearTimeout(timeout);
            timeout = setTimeout(function () {
                if (currentIndex < ($slides.length - 1)) {
                    move(currentIndex + 1);
                } else {
                    move(0);
                }
            }, 4000);
        }

        $('.next_btn').on('click', function () {
            if (currentIndex < ($slides.length - 1)) {
                move(currentIndex + 1);
            } else {
                move(0);
            }
        });

        $('.previous_btn').on('click', function () {
            if (currentIndex !== 0) {
                move(currentIndex - 1);
            } else {
                move(3);
            }
        });

        $.each($slides, function (index) {
            var $button = $('<a class="slide_btn">&bull;</a>');

            if (index === currentIndex) {
                $button.addClass('active');
            }
            $button.on('click', function () {
                move(index);
            }).appendTo('.slide_buttons');
            bulletArray.push($button);
        });

        advance();
    });
</script>

<script>
    // vars
    'use strict'
    var testim = document.getElementById("testim"),
        testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
        testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
        testimLeftArrow = document.getElementById("left-arrow"),
        testimRightArrow = document.getElementById("right-arrow"),
        testimSpeed = 4500,
        currentSlide = 0,
        currentActive = 0,
        testimTimer,
        touchStartPos,
        touchEndPos,
        touchPosDiff,
        ignoreTouch = 30;
    ;

    window.onload = function () {

        // Testim Script
        function playSlide(slide) {
            for (var k = 0; k < testimDots.length; k++) {
                testimContent[k].classList.remove("active");
                testimContent[k].classList.remove("inactive");
                testimDots[k].classList.remove("active");
            }

            if (slide < 0) {
                slide = currentSlide = testimContent.length - 1;
            }

            if (slide > testimContent.length - 1) {
                slide = currentSlide = 0;
            }

            if (currentActive != currentSlide) {
                testimContent[currentActive].classList.add("inactive");
            }
            testimContent[slide].classList.add("active");
            testimDots[slide].classList.add("active");

            currentActive = currentSlide;

            clearTimeout(testimTimer);
            testimTimer = setTimeout(function () {
                playSlide(currentSlide += 1);
            }, testimSpeed)
        }

        testimLeftArrow.addEventListener("click", function () {
            playSlide(currentSlide -= 1);
        })

        testimRightArrow.addEventListener("click", function () {
            playSlide(currentSlide += 1);
        })

        for (var l = 0; l < testimDots.length; l++) {
            testimDots[l].addEventListener("click", function () {
                playSlide(currentSlide = testimDots.indexOf(this));
            })
        }

        playSlide(currentSlide);

        // keyboard shortcuts
        document.addEventListener("keyup", function (e) {
            switch (e.keyCode) {
                case 37:
                    testimLeftArrow.click();
                    break;

                case 39:
                    testimRightArrow.click();
                    break;

                case 39:
                    testimRightArrow.click();
                    break;

                default:
                    break;
            }
        })

        testim.addEventListener("touchstart", function (e) {
            touchStartPos = e.changedTouches[0].clientX;
        })

        testim.addEventListener("touchend", function (e) {
            touchEndPos = e.changedTouches[0].clientX;

            touchPosDiff = touchStartPos - touchEndPos;

            console.log(touchPosDiff);
            console.log(touchStartPos);
            console.log(touchEndPos);


            if (touchPosDiff > 0 + ignoreTouch) {
                testimLeftArrow.click();
            } else if (touchPosDiff < 0 - ignoreTouch) {
                testimRightArrow.click();
            } else {
                return;
            }

        })
    }
</script>

<script>

    // Get the button
    let mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>


{{--    // JS For Visitors--}}

<script>

    var counterContainer = document.querySelector(".website-counter");
    var resetButton = document.querySelector("#reset");
    var visitCount = localStorage.getItem("page_view");

    // Check if page_view entry is present
    if (visitCount) {
        visitCount = Number(visitCount) + 1;
        localStorage.setItem("page_view", visitCount);
    } else {
        visitCount = 1;
        localStorage.setItem("page_view", 1);
    }
    counterContainer.innerHTML = visitCount;

    // // Adding onClick event listener
    // resetButton.addEventListener("click", () => {
    //     visitCount = 1;
    //     localStorage.setItem("page_view", 1);
    //     counterContainer.innerHTML = visitCount;
    // });

</script>


