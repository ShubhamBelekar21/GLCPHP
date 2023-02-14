<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/ico" href="{{ asset('/images/Panvel_Municipal_Corporation.png') }}" />
    <title>GLCMumbai</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    @yield('page-css')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

{{--    links from index--}}
{{--    <link rel="preconnect" href="https://fonts.googleapis.com">--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Devanagari&display=swap" rel="stylesheet"/>--}}
{{--    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"--}}
{{--          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">--}}
{{--    <link href="{{ asset('assets/selectize-bootstrap-4-style-master/dist/css/bootstrap.css') }}" rel="stylesheet">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}
{{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">--}}
{{--    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>--}}

</head>

<style>
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

    /*Footer Style Here*/

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
        /*border-radius: 4px;*/
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

    /*1st Section TopMost Part And logo Section*/
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
        height: 150px;
    }

    @media screen and (max-width: 1500px) {

        .mainimage {
            display: none;
        }
    }

.mainGlclogo {
    width: 100%;
    max-width: 100%;
    height: 100%;
    max-height: 100%;
    display: block;
    object-fit: cover;
    /*border-radius: 5px;*/
}

@media screen and (max-width: 966px)
{
    .containerForInfo{
        display: none;
    }
    .containerForGLCLogo{
        display: none;
    }
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


</style>
<body>

<section class="card">
    <div class="content">

        <div class="containerForInfo" style="background-color: #D7D6D6 ;">
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
            <div class="row ml-5">
                <div class="mainGlclogo col-md-2">
                    <img src="{{ asset('/images/LOGO transparent.png')}}" alt="logo"
                         style="width:140px; height:150px; float:left;"/>
                </div>
                <div class="col-md-6"
                     style=" font-family: 'Times New Roman'; padding-top: 15px; font-size: 25px;
                     color: #027320; font-weight:bold;text-align: center">

                    <p>
                    <h2 style="font-family:'Times New Roman'; font-weight:bold"> शासकीय विधी महाविद्यालय
                        <br/>
                        GOVERNMENT LAW COLLEGE</h2>
                    <h6 style="font-family:'Times New Roman'; font-weight:bold">MUMBAI,MAHARASHTRA</h6></p>

                </div>
                <div class="mainimage col-md-4">
                    <img src="{{ asset('/images/har-ghar-tiranga-transparent.png') }}" alt="logo"
                         style="width:250px; height:150px; margin:10px; padding-top:5px;float: right "/>

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
{{--                    @foreach($Nagarisanad as $item8)--}}
                        <a href="{{$LayoutNagarisanadPDF}}" target="_blank">Nagari Sanad</a>
{{--                    @endforeach--}}
{{--                    @foreach($AntiRagging as $item11)--}}
                        <a href="{{$LayoutAntiRaggingPDF}}" target="_blank">Anti Raging</a>
{{--                    @endforeach--}}
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
{{--                                @foreach($Admission as $item12)--}}
                                    <a href="{{$LayoutAdmissionPDF}}" target="_blank">Admission Procedure</a>
{{--                                @endforeach--}}
                            </li>
                            <li>
{{--                                @foreach($Admission1 as $item13)--}}
                                    <a href="{{$LayoutAdmission1PDF}}" target="_blank">Admission Requirements</a>
{{--                                @endforeach--}}
                            </li>
                            <li><a href="{{'CSRStatesticsIndex'}}">Fee Structure</a></li>
                            <li>
{{--                                @foreach($Admission2 as $item14)--}}
                                    <a href="{{$LayoutAdmission2PDF}}" target="_blank">Rules Regarding Discipline</a>
{{--                                @endforeach--}}
                            </li>
                            <li>
{{--                                @foreach($Admission3 as $item15)--}}
                                    <a href="{{$LayoutAdmission3PDF}}" target="_blank">Eligibilty for In-House Admissions</a>
{{--                                @endforeach--}}
                            </li>
                            <li>
{{--                                @foreach($Admission4 as $item16)--}}
                                    <a href="{{$LayoutAdmission4PDF}}" target="_blank">PGD IPR Admission Notice 2022-23</a>
{{--                                @endforeach--}}
                            </li>
                        </ul>
                    </li>
                    {{--                    end--}}

{{--                    @foreach($ExamRules as $item17)--}}
                        <a href="{{$LayoutExamRulesPDF}}" target="_blank">Examination Rules and regulations</a>
{{--                    @endforeach--}}
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

    </div>
    @yield('content')

</section>


@yield('selectize-script')


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
                                            Scholarship</a>
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
{{--                                <div class="Visitors-Container">--}}
{{--                                    <div style="color: #ffffff;  font-size: 18px; float: left; margin-top: 10px;">You--}}
{{--                                        Are Visitor No.--}}
{{--                                    </div>--}}
{{--                                    <div class="website-counter" style="font-size: 18px;"></div>--}}
{{--                                </div>--}}
{{--                                <button id="reset">Reset</button>--}}
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

</body>
</html>

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
