@extends('layouts.webapp',['LayoutAntiRaggingPDF'=>$LayoutAntiRaggingPDF,'LayoutNagarisanadPDF'=>$LayoutNagarisanadPDF,
'LayoutAdmissionPDF'=>$LayoutAdmissionPDF,'LayoutAdmission1PDF'=>$LayoutAdmission1PDF,'LayoutAdmission2PDF'=>$LayoutAdmission2PDF,
'LayoutAdmission3PDF'=>$LayoutAdmission3PDF,'LayoutAdmission4PDF'=>$LayoutAdmission4PDF,'LayoutExamRulesPDF'=>$LayoutExamRulesPDF])@section('page-css')
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
{{--@section('page-css')--}}
<link href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<style>

    .bttn {
        font-size: 20px;
        padding: 10px 20px;
        background-image: linear-gradient(315deg, black 0%, black 74%);
        color: white;
        line-height: 50px;
        border: none;
        margin-top: -50px;
    }

    .bttn:hover {
        color: White;
        background-image: linear-gradient(315deg, black 0%, black 74%);
    }

    .bttn span {
        position: relative;
        display: block;
        width: 100%;
        height: 100%;
    }

    .bttn:before,
    .bttn:after {
        position: absolute;
        content: "";
        right: 0;
        top: 0;
        box-shadow: 4px 4px 6px 0 rgba(255, 255, 255, .9), -4px -4px 6px 0 rgba(116, 125, 136, .2), inset -4px -4px 6px 0 rgba(255, 255, 255, .9), inset 4px 4px 6px 0 rgba(116, 125, 136, .3);
        transition: all 0.3s ease;
    }

    .bttn:before {
        height: 0%;
        width: .1px;
    }

    .bttn:after {
        width: 0%;
        height: .1px;
    }

    .bttn:hover:before {
        height: 100%;
    }

    .bttn:hover:after {
        width: 100%;
    }

    .bttn span:before,
    .bttn span:after {
        position: absolute;
        content: "";
        left: 0;
        bottom: 0;
        box-shadow: 4px 4px 6px 0 rgba(255, 255, 255, .9), -4px -4px 6px 0 rgba(116, 125, 136, .2), inset -4px -4px 6px 0 rgba(255, 255, 255, .9), inset 4px 4px 6px 0 rgba(116, 125, 136, .3);
        transition: all 0.3s ease;
    }

    .bttn span:before {
        width: .1px;
        height: 0%;
    }

    .bttn span:after {
        width: 0%;
        height: .1px;
    }

    .bttn span:hover:before {
        height: 50%;
    }

    .bttn span:hover:after {
        width: 100%;
    }

    th {
        font-size: 15px;
        color: black;
    }

    td {
        font-weight: bold;
        color: black;
    }

    td, th {
        border: 1px solid black;

    }

    h5 {
        font-family: Optima, sans-serif;
        font-variant: small-caps;
        font-weight: 600;
        font-size: 35px;
        border-radius: 25px;
        margin-top: 20px;
    }

    #TableOut {
        box-shadow: 13px 13px 20px #787878, -13px -13px 20px #787878;
        border-radius: 20px;
    }

    table {
        word-wrap: break-word;
    }

    table th, table td {
        overflow: hidden;
    }

    .heading {
        font-family: "Times New Roman";
        font-size: 25px;

    }
    .center{
        text-align: center;
    }
    .center1{
        font-size: 20px;
        padding-top: 50px;
    }
    .center2{

        /*padding-top: 10px;*/
    }
</style>
@stop
@section('content')

<section id="middle">
    <div class="" style="margin: 25px; padding:2px;" id="TableOut">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 wow fadeInDown">
                <div class="feature-wrap bottom-right">

{{--                    <h1>VISION AND MISSION</h1>--}}
                    <div class="center2">
{{--                        <img src="Images/vision.png" class="pull-left img-thumbnail img-responsive" alt="width=100; height=100;">--}}
                        <center> <img src="Images/vision.png" alt="" width="170px" height="170px"></center>
{{--                        <h2><u>Introduction</u></h2>--}}
                    </div>
                    <div class="center2">
                        <center>

                            <h3><p> <span style="font-weight:bold"></span>To rationalize & advance teaching learning process in Law & Ascertain role of legal
                                education.</p></h3></center>
                            <center><h3><p> <span style="font-weight:bold"></span> To develop amongst the students a research scholar and Endeavor to build their character to
                                human values.</p></h3></center>
                                <center><h3><p> <span style="font-weight:bold"></span> To serve nation by developing various skill amongst through legal services, advocacy and law
                                reforms.
                            </p></h3></center>
                        <div class="center2">
                        <center> <img src="Images/mission.png" alt="" width="170px" height="170px"></center>
                        </div>
                        <center><h3><p><span style="font-weight:bold"></span>To provide quality legal education, legal research & preparing Specialized systematic teaching and training in the field of law.</p></h3></center>
                            <center><h3><p><span style="font-weight:bold"></span> To provide legal expertise to all sections of society especially vulnerable groups so that justice can be restored society.</p></h3></center>
                                <center><h3><p><span style="font-weight:bold"></span> To cherish our constitutional values & expand its horizons to such and extend that it is reflected in conduct of every Indian Citizen.</p></h3></center>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
{{--                <div class="button button2" style="padding-top:15px; text-align: center;">--}}

{{--                    <input type="button" onClick="history.go(-1); return false;" class="button button2" value="Go Back"--}}
{{--                           style="margin-left:100px;height: 5%;width: 5%"/>--}}
{{--                </div>--}}


            </div>

        </div>
    </div>

</section>
@endsection
