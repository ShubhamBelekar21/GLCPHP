@extends('layouts.webapp',['LayoutAntiRaggingPDF'=>$LayoutAntiRaggingPDF,'LayoutNagarisanadPDF'=>$LayoutNagarisanadPDF,
'LayoutAdmissionPDF'=>$LayoutAdmissionPDF,'LayoutAdmission1PDF'=>$LayoutAdmission1PDF,'LayoutAdmission2PDF'=>$LayoutAdmission2PDF,
'LayoutAdmission3PDF'=>$LayoutAdmission3PDF,'LayoutAdmission4PDF'=>$LayoutAdmission4PDF,'LayoutExamRulesPDF'=>$LayoutExamRulesPDF])
@section('page-css')
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
        padding-top: 30px;

    }
    .center{
        text-align: center;
    }
    .center1{
        font-size: 20px;
        padding-top: 50px;
    }
    .center3{
        font-size: 20px;
        padding-top: 20px;
    }

</style>
@stop
@section('content')

<section id="middle">
    <div class="" style="margin: 50px; padding:10px;" id="TableOut">
    <div class="container">
        <div class="row">


            <div class="col-sm-12 wow fadeInDown">
                        <div class="feature-wrap bottom-right">
<div class="center1">
    <center><h1><b>PUBLICATIONS</b></h1></center>
</div>
                    <div class="center1">
                        <center><img src="Images/publications.jpg" class="" alt="" width="300" height="250"></center>
                    </div>
                            <div class="center1">
                                <center><h3><b>THE ANNUAL GLC MAGAZINE</b></h3></center>
                            </div>
                            <div class="heading">
                        <p>A lot has changed in the halls of India's oldest and most prestigious law college over its 150 years of existence, with the exception of one constant - its annual magazine. The literary achievements of Government Law College students, recorded in its Annual Magazine since its earliest days, stand as a testimony to the institution's rich heritage, illustriousness, stature and excellence and its pioneering bearing on the field of legal education in India.</p><p>

                            A perusal of the archives of 'MéLAWnge', as it later came to be known, will throw up the names of a galaxy of legal luminaries. Most of the country's foremost legal practitioners and scholars, who completed their education at this esteemed institution, have at some point in their student careers, contributed to this publication. The first Indian Chief Justice of the Bombay High Court, Mr. M. C. Chagla, the country's foremost legal stalwart, Mr. Nani Palkhivala, respected Senior Counsel, Mr. Fali Nariman, and current Attorney General of India, Mr. Goolam E. Vahanvati, to name a few, comprise part of the long list of distinguished alumni whose writings have been documented for posterity in the pages of GLC's Annual Magazine.</p><p>

                            Never willing to rest solely on its laurels and tales of past glory however, GLC's Annual Magazine has evolved over the years, from its nascent form as a simple paperback booklet, to a full blown colour magazine in recent years, so aptly renamed 'MéLAWnge'. As its name would suggest, MéLAWnge is "a mixture of often incongruous elements", a balance between articles showcasing the legal acumen of budding lawyers as well as their fictional flights of fancy. MéLAWnge is circulated amongst Supreme Court and High Court Judges, all law firms in Bombay, the prominent law firms in Delhi, various corporate houses, law colleges all over India and the top 40 international law schools.
                        </p>
                                <p>
                            The publication is deeply indebted to its many well wishers amongst the legal fraternity of Bombay and across the country, who, with inimitable generosity, pledge their undying support to it, year after year.</p><p>

                            You may visit the Magazine Committee's website for more information about this publication: <a href="http://www.glcmag.com/" target="blank">www.glcmag.com</a></p>
                    </div>
                </div>
            </div>


            </div>

        </div><!--/.row-->
    </div><!--/.container-->
    </div>
</section><!--/#middle-->
@endsection
@section('selectize-script')
    <script src="https://www.jquery-az.com/jquery/js/jquery-treeview/logger.js"></script>
    <script src="https://www.jquery-az.com/jquery/js/jquery-treeview/treeview.js"></script>
    <script type="text/javascript" language="javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
    <script src="{{ asset('assets/Selectize/jquery-1.10.2.js') }}"></script>
    <script
        src="{{ asset('assets/selectize-bootstrap-4-style-master/dist/js/selectize/standalone/selectize.min.js') }}"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    @endsection





