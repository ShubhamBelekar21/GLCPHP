@extends('layouts.webapp',['LayoutAntiRaggingPDF'=>$LayoutAntiRaggingPDF,'LayoutNagarisanadPDF'=>$LayoutNagarisanadPDF,
'LayoutAdmissionPDF'=>$LayoutAdmissionPDF,'LayoutAdmission1PDF'=>$LayoutAdmission1PDF,'LayoutAdmission2PDF'=>$LayoutAdmission2PDF,
'LayoutAdmission3PDF'=>$LayoutAdmission3PDF,'LayoutAdmission4PDF'=>$LayoutAdmission4PDF,'LayoutExamRulesPDF'=>$LayoutExamRulesPDF])
{{--@include('layouts.webapp')--}}
@section('page-css')
    <head>
        {{--    my links--}}
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{--    <meta charset="UTF-8">--}}
        {{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}

        {{--    <link rel="icon" type="image/ico" href="{{ asset('/images/Panvel_Municipal_Corporation.png') }}" />--}}
        {{--    <title>GLCMumbai</title>--}}
        {{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
        {{--    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">--}}
        {{--    @yield('page-css')--}}
        {{--    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"--}}
        {{--            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"--}}
        {{--            crossorigin="anonymous"></script>--}}
        {{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"--}}
        {{--            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"--}}
        {{--            crossorigin="anonymous"></script>--}}
        {{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">--}}
    </head>
    {{--@section('page-css')--}}
    {{--<link href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">--}}


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
            padding-top: 5%;
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
            padding-top: 50px;
            text-align: center;
            font-size: 50px;
            font-family: Arial;
        }
        .center1{
            font-size: 20px;
            padding-top: 10px;
            text-align: left;
            font-family:Arial;
        }
        .center2{
            font-size: 1.5rem;
            padding-top: 10px;
            text-align: left;
            font-family:Arial;
        }
        .pic{
            width:50% ;
            height: 130%;
            margin-left: auto;
            margin-right: auto;
            display: block;
            padding-left: 10%;
            padding-top: 2%;
        }
    </style>
@stop
@section('content')


    <section id="middle">
        <div class="" style="margin: 25px; padding:10px;" id="TableOut">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12 wow fadeInDown">
                        <div class="feature-wrap bottom-right">
                            <div class="center1">
                                <center><h2><b>ABOUT GOVERNMENT LAW COLLEGE, MUMBAI</b></h2></center>
                            </div>
                            <div class="row">
                                <div class="pic">
                                    <img src="Images/about-us.jpg">
                                </div>
                            </div>
                            <div class="center">
                                <center><h2><b>INTRODUCTION</b></h2></center>
                            </div>
                            <div class="row">
                                <div class="center2" style="justify-content: center; ">
                                    <p>
                                        Government Law College (GLC), established in 1855, has the distinction of being the oldest Law College in Asia, dating even prior to the University of Mumbai, and enjoys a pre-eminent reputation for excellence in the field of legal education.
                                        <br>
                                        Government Law College or GLC, as it is popularly known, continues to be an institution exclusively for the students of law. In addition to the old building, the college now has an annexe building, September 1988 onwards, which houses additional class rooms and a reference library.
                                        <br>
                                        GLC, which has a rich heritage and pedigree, is the repository of erudition in the legal firmament and has had the privilege of guidance and tutelage under eminent legal luminaries such as Dr. B. R. Ambedkar, Lokmanya Tilak, Justice M. C. Chagla, Sir Motilal Setalvad (first Attorney General of India), Sir Dinshaw Mulla, Justice Y. V. Chandrachud, Mr. Nani Palkhivala and several others who have adorned benches of the Supreme Court of India and the Bombay High Court. The students who have passed out from the portals of GLC have distinguished themselves at the Bar, the Judiciary and the Academe. From these portals, have passed the likes of five Chief Justices of the Supreme Court of India, Ms.Pratibha Devisingh Patil, former President of India, and Mr. Lal Krishna Advani, former deputy Prime Minister of India. The College takes great pride in being the alma mater of India's most prominent Supreme Court and High Court judges who have pronounced the greatest of judgments and legal doctrines that revolutionised the legal environment. Most of the top notch Counsels and Legal Practitioners who virtually built and rule the entire paradigm of India's legal profession have also passed through the portals of this great institution.
                                        <br>
                                        The College derives its strength and ethos from the highly qualified and dedicated faculty. The college has the unique and proud privilege of intimate association with prominent legal professionals of distinction as visiting faculty who regularly conduct lectures, workshops and discussions with students despite their hectic schedules and preoccupations.
                                        <br>
                                        The College has celebrated its centenary in 1955 and its sesquicentennial year in 2005 and is poised to revel in its bicentennial in 2055. Having turned 160 years, GLC continues to hold a preeminent position in the field of legal education in India and is recognised as such too by the Bar Council of India. The College remains strong and resolute in these trying times of a competitive and commercialised nature of legal education by holding on to its institutional ethos and due to the strength of its rich heritage and professional character, thus fulfilling its objectives of training not just the finest of the legal practitioners but also by nurturing professionals and thinkers in every sphere of society.
                                        <br>
                                    </p>
                                </div>


                                {{--                <div class="button button2" style="padding-top:15px; text-align: center;">--}}

                                {{--                    <input type="button" onClick="history.go(-1); return false;" class="button button2" value="Go Back"--}}
                                {{--                           style="margin-left:100px;height: 5%;width: 5%"/>--}}
                                {{--                </div>--}}


                            </div>

                        </div>
                    </div>
                </div>
            </div>
            {{--            <div class="" style="padding-top:15px; text-align: center;padding-bottom: 2%;">--}}
            {{--                <input type="button" onClick="history.go(-1); return false;" class="btn btn-success" value="Go Back"--}}
            {{--                       style="margin-left:100px;width: 15%;height: 100%;background-color:  #1E5631; font-size: 90%;"/>--}}
            {{--            </div>--}}
        </div>
    </section>
@endsection


