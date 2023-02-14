<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Devanagari&display=swap" rel="stylesheet"/>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="{{ asset('assets/selectize-bootstrap-4-style-master/dist/css/bootstrap.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">


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
        background-color: #D7D6D6;
        font-family: Calibri;
        font-size: 15px;
        height: 30px;
        width: 100%;
    }

    .containerForGLCLogo {
        background-color: #EDEDF4;
        width: 100%;
        height: 200px;
    }

    @media screen and (max-width: 1500px) {

        .mainimage {
            display: none;
        }
    }

    @media screen and (max-width: 1500px) {

        .mainGlclogo {
            width: 250px;
            height: 150px;
            display: grid;
        }
    }

    /*From Here For Nav Bar*/

    body {
        margin: 0;
        font-family: Arial
    }

    .topnav {
        overflow: hidden;
        background-color: #EB8037;
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
        color: #FFFFFF;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        font-weight: Bold;
        margin: 0;
    }

    .dropdown1-content1 {
        display: none;
        position: absolute;
        background-color: #ffffff;
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
        background-color: #EB8037;
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

    @media screen and (max-width: 1536px) {

        .slider {
            max-width: 100%;
        }

    }

    .slide_viewer {
        height: 540px;
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
        background: #EB8037;
        padding: 30px;
        border-radius: 3px;
        box-sizing: border-box;
        color: #FFF;

        /*box-shadow: rgb(50 50 93 / 25%) 0px 30px 60px -12px, rgb(0 0 0 / 30%) 0px 18px 36px -18px;*/
    }

    .card:nth-child(2) {
        background: #4181ee;
    }

    .card:last-child {
        background: #EFEFEF;
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
        font-weight: bold;
    }

    .card-btn {
        all: unset;
        display: block;
        margin-left: auto;
        border: 2px solid #FFF;
        padding: 10px 15px;
        border-radius: 25px;
        font-size: 10px;
        font-weight: 600;
        transition: all 0.5s;
        cursor: pointer;
        letter-spacing: 1.2px;
        background-color: #ffffff;
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
        font-size: 20px;
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
        margin: 10px;
    }

    .ShowingButtons {
        padding: 10px 0px;
        margin: 10px;
    }

    /*Gallery*/

    .container1 {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
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


    /*!* Footer *!*/

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
        max-width: 100%;
        height: auto;
    }

    section {
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


    .wrapper {
        overflow: hidden;

    }

    @media all and (max-width: 1000px) {
        .Minister {
            float: right;
        }
    }

    @media all and (max-width: 1000px) {
        .CSRStatistics {
            width: 90%;
        }
    }

    @media all and (max-width: 1000px) {
        .MaharashtraLogo {
            display: none;
        }
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
            width: 70%;
            height: 100%;
            margin: 1%;
            background-color: #EDEDF4;
        }

        #two {
            background-color: white;
            overflow: hidden;
            width: 25%;
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
        background-color: #ffffff;
        color: #EB8037;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
    }

    #myBtn:hover {
        background-color: #EB8037;
        color: #ffffff;
        font-weight: bold;
    }

    /*NEw Scheme Css HERE*/

    /* Font */
    @import url('https://fonts.googleapis.com/css?family=Quicksand:400,700');

    /* Design */
    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    html {
        background-color: #ecf9ff;
    }

    body {
        color: #272727;
        font-family: 'Quicksand', serif;
        font-style: normal;
        font-weight: 400;
        letter-spacing: 0;
        /*padding: 1rem;*/
    }

    .main {
        max-width: 1200px;
        margin: 0 auto;
    }

    h1 {
        font-size: 44px;
        font-weight: 400;
        text-align: center;
        padding-top: 2%;
    }

    img {
        height: auto;
        max-width: 100%;
        vertical-align: middle;
    }

    .btn {
        color: #ffffff;
        padding: 0.8rem;
        font-size: 14px;
        text-transform: uppercase;
        border-radius: 4px;
        font-weight: 400;
        display: block;
        width: 100%;
        cursor: pointer;
        border: 1px solid rgba(255, 255, 255, 0.2);
        background: transparent;
    }

    .btn:hover {
        background-color: rgba(255, 255, 255, 0.12);
    }

    .cards {
        display: flex;
        flex-wrap: wrap;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .cards_item {
        display: flex;
        padding: 1rem;
    }

    @media (min-width: 40rem) {
        .cards_item {
            width: 50%;
        }
    }

    @media (min-width: 56rem) {
        .cards_item {
            width: 33.3333%;
        }
    }

    .card {
        border-radius: 0.25rem;
        box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }

    .card_content {
        padding: 1rem;
        background: linear-gradient(to bottom left, #EF8D9C 40%, #FFC39E 100%);
    }

    .card_title {
        color: #ffffff;
        font-size: 1.1rem;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: capitalize;
        margin: 0px;
    }

    .card_text {
        color: #ffffff;
        font-size: 0.875rem;
        line-height: 1.5;
        margin-bottom: 1.25rem;
        font-weight: 400;
    }

    /*New Scheme button*/

    .button {
        background-color: #EF8D9C;
        border-radius: 10px;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-left: 40%;
        cursor: pointer;
    }

    .button:hover {
        background-color: #e86b7e;
    }

    /*CSS FOR Multiple Buttons*/

    .multipleButtons {
        background-color: #E7902F;
        border: none;
        color: white;
        padding: 10px 10px;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-left: 2%;
        margin-top: 10px;
        cursor: pointer;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .multipleButtons:hover {
        background-color: #d97404;
    }

    .multipleButtonsText:hover {
        text-decoration: underline;

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
    }

    .AboutUsButton {
        border: 2px solid #ffffff;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        background-color: #263238;
    }

    .AboutUsButton:hover {
        background-color: #EB8037;
        Color: white;
    }

    /*opne model*/

    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0, 0, 0); /* Fallback color */
        background-color: rgba(0, 0, 0, 0.7); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #FFFFFF;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: left;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    /*Style For The Content Inside the model*/

    .circles {
        display: flex;
    }

    .circle-with-text {
        background-color: #ffffff;
        justify-content: center;
        align-items: center;
        border-radius: 100%;
        text-align: center;
        margin: 5px 20px;
        font-size: 15px;
        padding: 15px;
        display: flex;
        height: 180px;
        width: 180px;
        color: black;
        border: 1px solid grey;
    }

    .circle-with-text:hover {
        border: 2px solid orange;
        color: orange;
        font-weight: bold;
    }

    .ContentInModel:hover {
        color: #f26e13;
        text-decoration: underline;
    }

    .modelImage {
        width: 75px;
        height: 75px;
    }

    {{--        CSS FOR SEARCH BAR--}}

</style>

{{--        This Section Has Four Part Header, Logo Part, And NavBars And Sliders--}}

<section>
    <div class="content">

        {{--        Top Section Here--}}

        <div class="containerForInfo" style="background-color: #D7D6D6">
            <div class="row md-12">

                <div class="col-md-4" style="padding-top: 5px; font-size: 15px; margin-left: 15px; ">
                    <span><i class="fa fa-phone"></i></span>
                    <span> &nbsp; 022-22XX XX07</span><br>
                </div>

                <div class="col-md-4" style="padding-top: 5px; font-size: 15px; ">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <span> &nbsp; HelloWorld@Gmail.com</span><br>
                </div>

                <div class="col-md-2" style=" font-size: 15px; text-align:right; padding-top:0.2%;">
                    <i class="fa fa-facebook-square" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa fa-twitter" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa fa-linkedin" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                </div>

            </div>
        </div>

        {{--        Logo, Name Part Here--}}

        <div class="containerForGLCLogo " style="background-color: #EDEDF4;">
            <div class="row ml-12 row">
                <div class="mainGlclogo col-md-2 ml-5">
                    <img src="{{ asset('/images/MAHAGOVlogo.png')}}" alt="logo"
                         style="width:180px; height :170px; float:left; margin-top: 23px; "/>
                </div>

                <div class="col-md-5">
                    <p style="float:left; font-family: 'Times New Roman'; padding-top: 35px; margin-top:15px;font-size: 35px;
                                     color: #000000; font-weight:bolder;line-height :10px;"> Government of
                        Maharashtra</p>

                    <p style="float:left; clear: left; font-family: sans-serif;  font-size:20px;
                                     color: #808080;">CSR PORTAL</p>

                    <p style="float:left; clear: left; font-family: sans-serif;  font-size:25px;
                                     color: #041A8A; font-weight: bolder; text-decoration: underline;">
                        An Initiative Of Village Social Transformation Foundation (VSTF)</p>
                </div>

                <div class="mainimage col-md-2">
                    <img src="{{ asset('/images/VSTFLOGO.png') }}" alt="logo"
                         style="width:180px; height:180px;margin-top:10px; margin-left: 150%; opacity: 0.8;"/>

                </div>
            </div>
        </div>

        {{--        NavBars Here--}}

        <div class="topnav" id="myTopnav">
            <a href="#home" class="active" style="color: #FFFFFF; font-weight: bold;">Home</a>
            <div class="dropdown1">
                <button class="dropbtn1">About
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown1-content1">
                    <a href="#">Massage of Hon’ble Chief Minister</a>
                    <a href="#">Massage of Hon’ble Dy.Chief Minister</a>
                    <a href="#">About CSR portal</a>
                    <a href="#">About CSR</a>
                    <a href="#">About VSTF</a>
                    <a href="#">CSR & SDG Goals</a>
                    <a href="#">Management Team</a>
                    <a href="#">VSTF Team</a>
                </div>
            </div>
            <div class="dropdown1">
                <button class="dropbtn1">Users
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown1-content1">
                    <a href="#">Corporates</a>
                    <a href="#">Government partners</a>
                    <a href="#">PSU</a>
                    <a href="#">NGOs</a>
                </div>
            </div>
            <div class="dropdown1">
                <button class="dropbtn1"> CSR Partners
                </button>
            </div>
            <div class="dropdown1">
                <button class="dropbtn1"> Project Proposals
                </button>
            </div>
            <a href="#news" style="color: #FFFFFF;font-weight: bold;">Raised CSR Grant</a>

            <a href="#contact" style="color: #FFFFFF; font-weight: bold;">Project Area</a>
            <div class="dropdown1">
                <button class="dropbtn1"> Knowledge Bank/Media
                </button>
            </div>
            <div class="dropdown1">
                <button class="dropbtn1"> Contact Us
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown1-content1">
                    <a href="#">Feedback</a>
                    <a href="#">Inquiry</a>
                </div>
            </div>
            <div class="dropdown1">
                <button class="dropbtn1"> Useful Links
                </button>
            </div>
            <div class="dropdown1">
                <button class="dropbtn1" id="RegistrationBtn"> Registration
                </button>
            </div>
            <div class="dropdown1">
                <button class="dropbtn1"> Login
                </button>
            </div>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>

    </div><!-- End // .directional_nav -->

    {{--    Slider--}}
    <div class="wrapper" style="background-color: #EDEDF4;">
        <div class="slider" id="One">
            <div class="slide_viewer">
                <div class="slide_group">
                    <div class="slide">
                        <img src="{{ asset('/images/756512-government-law-college-014.jpg')}}" alt="logo">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('/images/download2.jpeg')}}" alt="logo">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('/images/dlsw3.jpg')}}" alt="logo">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('/images/glc-mumbai1.webp')}}" alt="logo">
                    </div>

                </div>

            </div>
            {{--            <div class="slide_buttons">--}}
            {{--            </div>--}}
        </div><!-- End // .slider -->


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        {{--        For the Notice and Events--}}

        <div class="wrapper" id="two">
            <div class="row p-2">
                <div class="card mt-1" id="news" style=" float: right; width:100%;">
                    <h5 class="card-title" style="text-align: center; color: #FDC801">
                        <i class="fa fa-envelope" aria-hidden="true" style="color:#FDC801; padding: 1px;"></i>Notice
                    </h5>
                    @foreach($Data as $item)
                        <a style="color:#ffffff;  margin-top: 1%;padding:1%; font-size: 18px; text-decoration: underline" target="_blank"
                           href="{{$item->PDFUrl}}">{{$item->ShortDescription}}</a>

                    @endforeach
                    <button class="card-btn text-center" style="color: darkblue; font-weight: Bold; margin-top: 10px"
                            onclick="location.href='https://www.glcmumbai.com/news.html';">READ MORE
                    </button>
                </div>

                <div class="card mt-1" id="events" style=" float: right; width:100%;">
                    <h5 class="card-title"
                        style="color: #052B68; font-weight: Bold; text-align: center; ">
                        Events</h5>

                    @foreach($Data1 as $item1)
                        <a class="card-content" style="color:#EB8037; margin-top: 1%;padding:1%; font-size: 18px;
                        text-decoration: underline"
                           target="_blank" href="{{$item1->PDFUrl}}">{{$item1->ShortDescription}}</a>

                    @endforeach

                    <button class="card-btn" style="background-color: darkblue; font-weight: Bold; margin-top: 10px"
                            onclick="location.href='https://www.glcmumbai.com/events.html';">READ MORE
                    </button>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
</section>

{{--        Model For Register page--}}

<!-- The Modal -->
<div id="myModal" class="modal">

    <div class="modal-content">
        <span class="close">&times;</span>
        <h1 style="text-align: center; font-weight: bold; text-decoration: underline">Register As A</h1>

        <div class="row" style="justify-content: center;">
            <div class="circles col-12 col-lg-2">
                <a href="">
                    <div class="circle-with-text">
                        <img src="{{ asset('/images/FirstImageModel.png')}}" alt="logo"
                             class="modelImage" style="">
                        We Are Government Department
                    </div>
                </a>
            </div>

            <div class="circles col-12 col-lg-2">
                <a href="">
                    <div class="circle-with-text">
                        <img src="{{ asset('/images/secondImagemodel.png')}}" alt="logo"
                             style="width: 75px; height: 75px;position: relative;">
                        I'm a Company
                    </div>
                </a>
            </div>

            <div class="circles col-12 col-lg-2">
                <a href="">
                    <div class="circle-with-text">
                        <img src="{{ asset('/images/ThirdImagemodel.png')}}" alt="logo"
                             style="width: 75px; height: 75px; position: relative;">
                        I am an Implementing Agency
                    </div>
                </a>
            </div>

            <div class="circles col-12 col-lg-2">
                <a href="">
                    <div class="circle-with-text">
                        <img src="{{ asset('/images/FourthImageInmodel.png')}}" alt="logo"
                             style="width: 75px; height: 75px; position: relative;">
                        I am an Individual
                    </div>
                </a>
            </div>

            <div class="circles col-12 col-lg-2">
                <a href="">
                    <div class="circle-with-text">
                        <img src="{{ asset('/images/FifthImagemodel.png')}}" alt="logo"
                             style="width: 75px; height: 75px; position: relative;">
                        I am a Service Provider
                    </div>
                </a>
            </div>
        </div>
        <h2 class="ContentInModel" style="text-align: center">Already A Member ? Sign In</h2>
    </div>

</div>

{{--    Marquee--}}
<section>
    <marquee onmouseover="this.stop();" onmouseout="this.start();" style="color: #ffffff; padding:5px; font-weight: bold;
     font-family: Calibri; background-color: #EB8037; padding:10px;">
        Greetings! Here you will find all the information you need about New Schemes by the Maharashtra Goverment.
        Please
        <a style="color :#ffffff;
        text-decoration:underline" href="https://www.glcmumbai.com/admission-procedure.html" target="_blank">
            Click Here
        </a> for more information and if you have any questions, you can call our official number. Thank you!!
    </marquee>
</section>

{{--    minister speaks --}}

<section>
    <div class="half-half-image-text" style="border: 1px solid #EDEDF4; background-color: #EDEDF4;">
        <div>
            <div class="container1 separator">
                <div class="line"></div>
                <h2><a target="_blank" href="https://www.glcmumbai.com/photo-gallery.html"
                       style="font-family: 'Roboto', sans-serif; font-weight: bold; text-align: center; font-size: 35px;">
                        Minister Speaks</a></h2>
                <div class="line"></div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="content" style="height: 100%;display:flex;align-items: center;padding: 35px 0px;">
                        <p style="font-size:20px; margin: 10px; text-align: center; font-family: 'Times New Roman';
                             font-weight: bold;">
                            Exclusive & Comprehensive one-stop destination to put to rest all your CSR
                            worries.
                            Corporate Social Responsibility or CSR has suddenly come in the limelight after
                            the Section 135 of
                            Companies Act, 2013 made it mandatory for every company meeting one or all three
                            criteria to spend
                            at least two percent of the average net profits of the company made during the
                            three immediately
                            preceding financial years on CSR activities.
                            Net worth of INR 5000 Million or more <br/>
                            Turnover of INR 10000 Million or more <br/>
                            Net profit of INR 50 Million or more<br/>
                            <span style="font-size: 30px; color:#EB8037;">Chief Minister of Maharashtra</span></p>

                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="Minister" style="
                         background-size:cover;border-radius: 10px; margin:10px;
                            height: 100%; min-height: 200px; justify-content: center">
                        <img src="{{ asset('/images/Eknath_Sambhaji_Shinde.png')}}" alt="logo"
                             style="height: 400px; width: 400px;">
                    </div>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="img" style="
                         background-size:cover; min-height: 200px; border-radius: 10px; margin:10px;
                            height: 100%;">
                        <img src="{{ asset('/images/cm-devendra-fadnavis.png')}}" alt="logo"
                             style="height: 500px; width: 400px;">
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="content" style="height: 100%;display:flex;align-items: center;padding: 35px 0px;">
                        <p style="font-size:20px; margin: 10px; text-align: Center; font-family: 'Times New Roman';
                             font-weight: bold;">
                            Exclusive & Comprehensive one-stop destination to put to rest all your CSR
                            worries.
                            Corporate Social Responsibility or CSR has suddenly come in the limelight after
                            the Section 135 of
                            Companies Act, 2013 made it mandatory for every company meeting one or all three
                            criteria to spend
                            at least two percent of the average net profits of the company made during the
                            three immediately
                            preceding financial years on CSR activities.
                            Net worth of INR 5000 Million or more <br/>
                            Turnover of INR 10000 Million or more <br/>
                            Net profit of INR 50 Million or more<br/>
                            <span style="font-size: 30px; color:#EB8037;"> Deputy Chief Minister of Maharashtra</span>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

{{--   Showing Calculations Here With Maharashtra's Map--}}

<section>
    <div class="half-half-image-text" style="border: 1px solid #EDEDF4; background-color: #EDEDF4;">
        <h3 style="font-family: 'Times New Roman'; font-weight:bold; margin: 1%;">CSR Maharashtra AT A GLANCE</h3>
        <div class="row">
            <div class="col-12 col-lg-7"
                 style="margin: 2%; border: 1px solid #e3e1e1; border-radius: 1%;">
                <h5 style="font-family: 'Times New Roman'; font-weight: bold; margin: 1%; ">CSR Statistics</h5>

                <div class="list-group list-group-light">
                    <a href="#"
                       class="list-group-item list-group-item-action px-3 border-0 rounded-3 mb-2 list-group-item-info"
                       style="background-color: #E7902F; width: 30%; margin: 1% 2%;">
                        <i class="fa fa-tasks fa-2x" aria-hidden="true"
                           style="color: white; float: left; margin-top: 4%;"></i>
                        <span style="color: White; float: right; font-size:18px;font-family: 'Times New Roman';
                            font-weight: bold;">
                            Total Projects</span><br/>
                        <span style="color: White; float: right; font-size:15px;font-family: 'Times New Roman';
                            font-weight: bold;">182</span>
                    </a>
                </div>

                <div class="list-group list-group-light">
                    <a href="#"
                       class="list-group-item list-group-item-action px-3 border-0 rounded-3 mb-2 list-group-item-info"
                       style="background-color: #E7902F; width: 30%; margin: 1% 2%;">
                        <i class="fa fa-user fa-2x" aria-hidden="true"
                           style="color: white; float: left; margin-top: 4%;"></i>
                        <span style="color: White; float: right; font-size:18px;font-family: 'Times New Roman';
                            font-weight: bold;">
                            Project By User Type</span><br/>
                        <span style="color: White; float: right; font-size:15px;font-family: 'Times New Roman';
                            font-weight: bold;">182</span>
                    </a>
                </div>

                <div class="list-group list-group-light">
                    <a href="#"
                       class="list-group-item list-group-item-action px-3 border-0 rounded-3 mb-2 list-group-item-info"
                       style="background-color: #E7902F; width: 30%; margin: 1% 2%;">
                        <i class="fa fa-inr fa-2x" aria-hidden="true"
                           style="color: white; float: left; margin-top: 4%;"></i>
                        <span style="color: White; float: right; font-size:18px;font-family: 'Times New Roman';
                            font-weight: bold;">
                            Total Estimated Budget</span><br/>
                        <span style="color: White; float: right; font-size:15px;font-family: 'Times New Roman';
                            font-weight: bold;">638 Cr (INR)</span>
                    </a>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="MaharashtraLogo" style="
                         background-size:cover; border-radius: 10px;
                            height: 100%; min-height: 200px; justify-content: center">
                    <img src="{{ asset('/images/Maharashtra_Map.png')}}" alt="logo"
                         style="width: auto;">
                </div>
            </div>
        </div>
    </div>
</section>

{{--   New Schemes here--}}

<section>
    <div class="half-half-image-text" style="border: 1px solid #EDEDF4; background-color: #EDEDF4;">
        <div class="main">
            <div class="container1 separator">
                <div class="line"></div>
                <h2><a target="_blank" href=""
                       style="font-family: 'Roboto', sans-serif; font-weight: bold; text-align: center; font-size: 35px;">
                        PROJECT CATEGORIES</a></h2>
                <div class="line">

                </div>
            </div>
            <ul class="cards">
                <li class="cards_item">
                    <div class="card">
                        <div class="card_image"><img src="https://picsum.photos/500/300/?image=10"></div>
                        <div class="card_content">
                            <h2 class="card_title">NEW SCHEMES HERE</h2>
                            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                            <button class="btn card_btn">Read More</button>
                        </div>
                    </div>
                </li>
                <li class="cards_item">
                    <div class="card">
                        <div class="card_image"><img src="https://picsum.photos/500/300/?image=5"></div>
                        <div class="card_content">
                            <h2 class="card_title">NEW SCHEMES HERE</h2>
                            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                            <button class="btn card_btn">Read More</button>
                        </div>
                    </div>
                </li>
                <li class="cards_item">
                    <div class="card">
                        <div class="card_image"><img src="https://picsum.photos/500/300/?image=11"></div>
                        <div class="card_content">
                            <h2 class="card_title">NEW SCHEMES HERE</h2>
                            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                            <button class="btn card_btn">Read More</button>
                        </div>
                    </div>
                </li>
            </ul>

            <ul class="cards">
                <li class="cards_item">
                    <div class="card">
                        <div class="card_image"><img src="https://picsum.photos/500/300/?image=10"></div>
                        <div class="card_content">
                            <h2 class="card_title">NEW SCHEMES HERE</h2>
                            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                            <button class="btn card_btn">Read More</button>
                        </div>
                    </div>
                </li>
                <li class="cards_item">
                    <div class="card">
                        <div class="card_image"><img src="https://picsum.photos/500/300/?image=5"></div>
                        <div class="card_content">
                            <h2 class="card_title">NEW SCHEMES HERE</h2>
                            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                            <button class="btn card_btn">Read More</button>
                        </div>
                    </div>
                </li>
                <li class="cards_item">
                    <div class="card">
                        <div class="card_image"><img src="https://picsum.photos/500/300/?image=11"></div>
                        <div class="card_content">
                            <h2 class="card_title">NEW SCHEMES HERE</h2>
                            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                            <button class="btn card_btn">Read More</button>
                        </div>
                    </div>
                </li>
            </ul>
            <button class="button">View More</button>
        </div>
    </div>
</section>

{{--    Showing Five Buttons Here--}}
<section>

    <div class="half-half-image-text" style="border: 1px solid #EDEDF4; background-color: #1F3741;">
        <h4 class="multipleButtonsText" style="color: #ffffff; margin-left: 2%;">Let Us Join Hands to Make a Better
            Society!</h4>
        <button class="multipleButtons">We are Government Department</button>
        <button class="multipleButtons">I'm a Company</button>
        <button class="multipleButtons">I'm a Non Government Organization</button>
        <button class="multipleButtons">I'm an Individual</button>
        <button class="multipleButtons">I'm a Service provider</button>

    </div>

</section>

{{--Gallery--}}
<section>
    <div class="half-half-image-text" style="border: 1px solid #EDEDF4; background-color: #EDEDF4;">
        <div class="container1 separator">
            <div class="line"></div>
            <h2><a target="_blank" href="https://www.glcmumbai.com/photo-gallery.html"
                   style="font-family: 'Roboto', sans-serif; font-weight: bold; text-align: center; font-size: 35px;">
                    Photo Gallery</a></h2>
            <div class="line"></div>
        </div>

        {{--    Photo Gallery--}}

        <div class="container1">
            <img src="https://source.unsplash.com/1300x1200/?algeria">
            <img src="https://source.unsplash.com/1300x1200/?lebanon">
            <img src="https://source.unsplash.com/1300x1200/?qatar">
            <img src="https://source.unsplash.com/1300x1200/?uae">
            <img src="https://source.unsplash.com/1300x1200/?kuwait">
            <img src="https://source.unsplash.com/1300x1200/?oman">
            <img src="https://source.unsplash.com/1300x1200/?turkey">
            <img src="https://source.unsplash.com/1300x1200/?kuwait">
            <img src="https://source.unsplash.com/1300x1200/?oman">
            <img src="https://source.unsplash.com/1300x1200/?turkey">

        </div>
    </div>
    </div>

</section>

{{--        Testimonial--}}

<section>
    <div>
        <section id="testim" class="testim" style="background-color: #EDEDF4">
            <div class="testim-cover">
                <div><h1 style="color: #F58220">PARTNER SPEAKS</h1></div>
                <div><h4 style="margin: 10px; color: #AF9F92; text-align: center;">Take a look at what partners say
                        about us!</h4></div>
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

                        <li class="dot"></li>
                    </ul>
                    <div id="testim-content" class="cont">
                        <div class="active">
                            <div class="img">
                                <img src="{{ asset('/images/Eknath_Sambhaji_Shinde.png')}}"
                                     alt=""></div>
                            <h2>HON. EKNATH SHINDE, Chief Minister, Maharashtra</h2>
                            <p>“This is a partnership that includes the village itself. Some of the best ideas and
                                thoughts in terms of what can be done in the village come from villagers themselves.
                                This Mission will ensure that they are not ignored.”</p>
                            <p>“This is a partnership that includes the village itself. Some of the best ideas and
                                thoughts in terms of what can be done in the village come from villagers themselves.
                                This Mission will ensure that they are not ignored.”</p>
                        </div>

                        <div>
                            <div class="img">
                                <img src="{{ asset('/images/cm-devendra-fadnavis.png')}}"
                                     alt=""></div>
                            <h2>HON. Devendra Fadnavis, Deputy Chief Minister of Maharashtra</h2>
                            <p>“This is a partnership that includes the village itself. Some of the best ideas and
                                thoughts in terms of what can be done in the village come from villagers themselves.
                                This Mission will ensure that they are not ignored.”</p>
                            <p>“This is a partnership that includes the village itself. Some of the best ideas and
                                thoughts in terms of what can be done in the village come from villagers themselves.
                                This Mission will ensure that they are not ignored.”</p>
                        </div>

                        <div>
                            <div class="img">
                                <img src="{{ asset('/images/Ratan_Tata.jpg')}}"
                                     alt=""></div>
                            <h2>RATAN TATA, Chairman</h2>
                            <p>“This is a partnership that includes the village itself. Some of the best ideas and
                                thoughts in terms of what can be done in the village come from villagers themselves.
                                This Mission will ensure that they are not ignored.”</p>
                            <p>“This is a partnership that includes the village itself. Some of the best ideas and
                                thoughts in terms of what can be done in the village come from villagers themselves.
                                This Mission will ensure that they are not ignored.”</p>
                        </div>

                        <div>
                            <div class="img">
                                <img src="{{ asset('/images/ABimage.jpg')}}"
                                     alt=""></div>
                            <h2>AMITABH BACHCHAN, Actor and Padma Vibhushan</h2>
                            <p>“As someone who has been involved in various campaigns- be it Swachh Bharat,
                                Hepatitis B or tiger preservation — I see a lot of connectivity in this transformative
                                vision.”</p>
                            <p>“As someone who has been involved in various campaigns- be it Swachh Bharat,
                                Hepatitis B or tiger preservation — I see a lot of connectivity in this transformative
                                vision.”</p>
                        </div>

                        <div>
                            <div class="img">
                                <img src="{{ asset('/images/AM.png')}}" alt=""></div>
                            <h2>ANAND MAHINDRA , CMD, Mahindra Group</h2>
                            <p>“We are excited by the passion that the Hon CM and his team have shown.
                                This partnership with the corporate sector could create
                                a prototype not only for Maharashtra’s villages, but all of India’s villages.“</p>
                            <p>“We are excited by the passion that the Hon CM and his team have shown.
                                This partnership with the corporate sector could create
                                a prototype not only for Maharashtra’s villages, but all of India’s villages.“</p>
                        </div>


                        <div>
                            <div class="img">
                                <img src="{{ asset('/images/sajjan-jindalhover.jpeg')}}"
                                     alt=""></div>
                            <h2>SAJJAN JINDAL , CMD, JSW Group</h2>
                            <p>"This is a fantastic initiative. I believe one plus one will make not two, but eleven.
                                I commit part of our CSR towards this initiative of 1000 villages.
                                Our entire team is very excited about this concept.”</p>
                            <p>"This is a fantastic initiative. I believe one plus one will make not two, but eleven.
                                I commit part of our CSR towards this initiative of 1000 villages.
                                Our entire team is very excited about this concept.”</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<script src="https://use.fontawesome.com/1744f3f671.js"></script>

{{-- Footer Starts Here--}}

<!-- Footer -->
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
                                <p class="QuickLinksHere"
                                   style=" text-align: justify; font-family: 'Times New Roman'; font-size: 38px; color: White;">
                                    ABOUT CSR </p>
                                <div class="text">
                                    <p style=" text-align: justify; font-family: 'Times New Roman'; font-size: 18px; color: White;">
                                        Exclusive & Comprehensive one-stop destination to put to rest all your CSR
                                        worries.</p>

                                    <p style=" text-align: justify; font-family: 'Times New Roman'; font-size: 18px; color: White;">
                                        Corporate Social Responsibility or CSR has suddenly come in the limelight after
                                        the Section 135 of
                                        Companies Act, 2013 made it mandatory for every company meeting one or all three
                                        criteria to spend
                                        at least two percent of the average net profits of the company made during the
                                        three immediately
                                        preceding financial years on CSR activities.</p>

                                    <p style=" text-align: justify; font-family: 'Times New Roman'; font-size: 18px; color: White;">
                                        Net worth of INR 5000 Million or more <br/>
                                        Turnover of INR 10000 Million or more <br/>
                                        Net profit of INR 50 Million or more<br/></p>
                                    <button class="AboutUsButton" id="FooterRegistrationButton">Registration</button>
                                    <button class="AboutUsButton">Projects</button>
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
                                        <i class="fa fa-thumb-tack " aria-hidden="true" style="color:white"></i>
                                        <a class="QuickLinksHere"
                                           style="margin-left: 5px; font-size: 18px; Color:white;"
                                           href="" target="_blank">Home</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-thumb-tack " aria-hidden="true" style="color:white"></i>
                                        <a class="QuickLinksHere"
                                           style="margin-left: 5px; font-size: 18px; Color:white;"
                                           href="" target="_blank">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-thumb-tack " aria-hidden="true" style="color:white"></i>
                                        <a class="QuickLinksHere"
                                           style="margin-left: 5px; font-size: 18px; Color:white;"
                                           href="" target="_blank">RTI</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-thumb-tack " aria-hidden="true" style="color:white"></i>
                                        <a class="QuickLinksHere"
                                           style="margin-left: 5px; font-size: 18px; Color:white;"
                                           href="" target="_blank">FAQ’s</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-thumb-tack " aria-hidden="true" style="color:white"></i>
                                        <a class="QuickLinksHere"
                                           style="margin-left: 5px; font-size: 18px; Color:white;"
                                           href="" target="_blank">Citizen Charter</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-thumb-tack " aria-hidden="true" style="color:white"></i>
                                        <a class="QuickLinksHere"
                                           style="margin-left: 5px; font-size: 18px; Color:white;"
                                           href="" target="_blank">Archives</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-thumb-tack " aria-hidden="true" style="color:white"></i>
                                        <a class="QuickLinksHere"
                                           style="margin-left: 5px; font-size: 18px; Color:white;"
                                           href="" target="_blank">Site Map</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-thumb-tack " aria-hidden="true" style="color:white"></i>
                                        <a class="QuickLinksHere"
                                           style="margin-left: 5px; font-size: 18px; Color:white;"
                                           href="" target="_blank">Contact Us</a>
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
                                    Mantralaya, Madam Cama Road,<br>
                                    Hutatma Rajguru Square,<br>
                                    Nariman Point,<br>
                                    Mumbai - 400032<br>
                                    <br>
                                    Tel: 022-22XX XX07<br>
                                    Email: HelloWorld@Gmail.com
                                </p>
                                <!-- Social Links -->
                                <div class="Visitors-Container">
                                    <div style="color: #ffffff;  font-size: 18px; float: left; margin-top: 10px;">You
                                        Are Visitor No.
                                    </div>
                                    <div class="website-counter" style="font-size: 18px;"></div>
                                </div>{{--<button id="reset">Reset</button>--}}

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
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row clearfix">

                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <div class="copyright">
                        <a href="http://technowinitinfra.com/" style="color: white;"> TECHNOWIN IT INFRA PVT. LTD.</a>
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

</footer><!-- Footer -->

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>


{{--  JS Script Starts Here--}}

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

    // Adding onClick event listener
    resetButton.addEventListener("click", () => {
        visitCount = 1;
        localStorage.setItem("page_view", 1);
        counterContainer.innerHTML = visitCount;
    });

</script>

{{--  For Model--}}


<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("RegistrationBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>


<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("FooterRegistrationButton");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>





