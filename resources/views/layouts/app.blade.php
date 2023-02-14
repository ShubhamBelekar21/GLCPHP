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
</head>
<style>
    nav li {
        font-size: 1.25rem;
        padding-right: 10px;
    }
    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu a::after {
        transform: rotate(-90deg);
        position: absolute;
        right: 6px;
        top: .8em;
    }

    .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 90%;
        margin-left: .1rem;
        margin-right: .1rem;
        color: red;
    }
    body {
        color: black;
        /*font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;*/
    }
    .dropdown-menu a:hover {
        background-color: #1E5631;
    }
</style>
<body>

{{--<nav class="navbar navbar-expand-sm p-0 m-0" style="background-color:#041A8A;--}}
<nav class="navbar navbar-expand-sm p-0 m-0" style="background-color:#1E5631;
    font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial,
    Noto Sans, Liberation Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji; ">
    <a class="navbar-brand" href="{{'Testtt'}}">
        <img src="{{ asset('/images/LOGO transparent.png') }}" alt="logo" height="60" width="60" style="margin-left: 20px;
            background-color: white;">
            {{--background-color: FDC801;">--}}
    </a>

    <ul class="navbar-nav mr-auto" >
        <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle px-1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
{{--               aria-haspopup="true" aria-expanded="false" style="color: #ffffff;">--}}
aria-haspopup="true" aria-expanded="false" style="color: #FDC801;">
                Home
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
{{--                <a class="dropdown-item" href="{{'Testtt'}}">Home</a>--}}
                <a class="dropdown-item" href="{{'NoticeSectionIndex'}}">Create Notice</a>
                <a class="dropdown-item" href="{{'EventSectionIndex'}}">Create Events</a>
                <a class="dropdown-item" href="{{'FourButtonIndex'}}">Create Buttons</a>
                <a class="dropdown-item" href="{{'MarqueeSectionIndex'}}">Create Marquee</a>
                <a class="dropdown-item" href="{{'PrincipalSectionIndex'}}">Create Principal Details</a>
                <a class="dropdown-item" href="{{'GallerySectionIndex'}}">Create Gallery </a>
                <a class="dropdown-item" href="{{'AlumniSectionIndex'}}">Create Alumni </a>
                <a class="dropdown-item" href="{{'SliderSectionIndex'}}">Create Slider</a>
{{--                <a class="dropdown-item" href="{{'CSRStatesticsIndexForMember'}}">Create Category And Headers</a>--}}
{{--                <a class="dropdown-item" href="{{'TeachingStaffFacultyIndex2'}}">Create Teaching Staff Faculty</a>--}}
{{--                <a class="dropdown-item" href="{{'TeachingStaffAdjunctIndex2'}}">Create Teaching Staff Adjunct</a>--}}
{{--                <a class="dropdown-item" href="{{'NonTeachingStaffIndex2'}}">Create Non Teaching Staff</a>--}}
{{--                <a class="dropdown-item" href="{{'CommitteeIndex2'}}">Create Committee</a>--}}
{{--                <a class="dropdown-item" href="{{'CoursesIndex2'}}">Create Courses</a>--}}
{{--                <a class="dropdown-item" href="{{'PdfMasterIndex'}}">Create PDF Master</a>--}}
{{--                <a class="dropdown-item" href="{{'TendersIndex'}}">Create Tenders</a>--}}
{{--                <a class="dropdown-item" href="{{'RankListIndex2'}}">Create RankList</a>--}}
            </div>
        </li>
{{--        about us start--}}
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle px-1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false"style="color: #FDC801;">
                About Us
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{'InfrastructureIndex2'}}">Create Infrastructure</a>
            </div>
        </li>
{{--Teaching Staff--}}
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle px-1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false"style="color: #FDC801;">
                Faculty
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{'TeachingStaffFacultyIndex2'}}">Create Teaching Staff Faculty</a>
                <a class="dropdown-item" href="{{'TeachingStaffAdjunctIndex2'}}">Create Teaching Staff Adjunct</a>
                <a class="dropdown-item" href="{{'NonTeachingStaffIndex2'}}">Create Non Teaching Staff</a>
            </div>
        </li>
{{--        student corner start --}}
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle px-1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false"style="color: #FDC801;">
                Students Corner
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{'CSRStatesticsIndexForMember'}}">Create Fee Structure</a>
                <a class="dropdown-item" href="{{'CoursesIndex2'}}">Create Courses</a>
                <a class="dropdown-item" href="{{'CommitteeIndex2'}}">Create Committee</a>
                <a class="dropdown-item" href="{{'RankListIndex2'}}">Create Rank List</a>
            </div>
        </li>
{{--        tender start--}}
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle px-1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false"style="color: #FDC801;">
                Tender
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{'TendersIndex'}}">Create Tenders</a>
            </div>
        </li>
        {{-- Alumni--}}
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle px-1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false"style="color: #FDC801;">
                Alumni
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{'AlumniIndex2'}}">Create Alumni</a>
            </div>
        </li>
        {{-- New Law Review--}}
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle px-1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false"style="color: #FDC801;">
                Publications
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{'NewLawReviewIndex2'}}">Create New LawReview</a>
            </div>
        </li>
{{-- PDF Master--}}
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle px-1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false"style="color: #FDC801;">
                Master
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{'PdfMasterIndex'}}">Create PDF Master</a>
            </div>
        </li>
{{--        Logout--}}
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle px-1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false"style="color: #FDC801;">
                LogOut
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('account.logout') }}">Logout</a>
            </div>
        </li>
    </ul>
</nav>

@yield('content')
@yield('selectize-script')
</body>
</html>
<script>
    {{--$(document).ready(function(){--}}
    {{--    $('#download').click(function(){--}}
    {{--        $.ajax({--}}
    {{--            url:  "{{URL::to('/generate-pdf')}}",--}}
    {{--            type: 'post',--}}
    {{--            success: function(response){--}}
    {{--                window.location = response;--}}
    {{--            }--}}
    {{--        });--}}
    {{--    });--}}
    {{--});--}}


    $('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
        if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
        }
        var $subMenu = $(this).next(".dropdown-menu");
        $subMenu.toggleClass('show');


        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
            $('.dropdown-submenu .show').removeClass("show");
        });


        return false;
    });
</script>
