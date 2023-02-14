@extends('layouts.webapp',['LayoutAntiRaggingPDF'=>$LayoutAntiRaggingPDF,'LayoutNagarisanadPDF'=>$LayoutNagarisanadPDF,
'LayoutAdmissionPDF'=>$LayoutAdmissionPDF,'LayoutAdmission1PDF'=>$LayoutAdmission1PDF,'LayoutAdmission2PDF'=>$LayoutAdmission2PDF,
'LayoutAdmission3PDF'=>$LayoutAdmission3PDF,'LayoutAdmission4PDF'=>$LayoutAdmission4PDF,'LayoutExamRulesPDF'=>$LayoutExamRulesPDF])
@section('page-css')
<head>
{{--    <meta charset="UTF-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
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
    .heading1 {
        font-family: "Times New Roman";
        font-size: 30px;
        padding-top: 20px;

    }
    .center{
        text-align: center;
    }
    .center1{
        font-family: "Times New Roman";
        font-size: 20px;
        padding-top: 50px;
    }
    .center3{
        font-size: 20px;
        padding-top: 15px;
    }
    .color{
        background-color: #1ab7ea;
    }
    .list-group{
        padding-top: 15px;
    }

</style>
@stop
@section('content')
<div class="" style="margin: 50px; padding:10px;" id="TableOut">

<section>
    <div class="container">
        <div class="row">
                <div class="heading" style="justify-content: center; ">
                    <center><h1><b>The Law Review</b></h1></center>
                </div>
                    <div class="row" style="float:left; width:100%;">
                        <div class=" heading1 col-md-3">
                            <ul class="nav nav-pills nav-stacked admin-menu">
                                <li class="active"><a href="#" data-target-id="home"><i class="fa fa-home fa-fw"></i> The Law Review</a></li>
                                <li><a href="#" data-target-id="widgets"><i class="fa fa-list-alt fa-fw"></i> Current Edition</a></li>
                                <li><a href="#" data-target-id="pages"><i class="fa fa-file-o fa-fw"></i> Editorial Board
                                    </a></li>
                                <li><a href="#" data-target-id="charts"><i class="fa fa-bar-chart-o fa-fw"></i> Archives</a></li>
                                <li><a href="#" data-target-id="table"><i class="fa fa-table fa-fw"></i> Past Authors
                                    </a></li>

                            </ul>

                        </div>

                        <div class="heading1 col-md-9 well admin-content" id="home">
                            <h2><u>ABOUT THE LAW REVIEW</u></h2>
                            <div class="heading">
                            <p>
                                The Law Review, Government Law College, is the official scholarly publication of Asia’s oldest law institution- the Government Law College, Mumbai. It gives students the opportunity to explore the arena of legal research and writing, and seeks to instill in them, the ability to critique. Best known for its ability of inculcating academic discipline and the rigour for attaining legal erudition, the Law Review Committee continues to strive to render top quality publications in several areas of distinct legal sciences.
                                <br/><br/>
                                While the Government Law College started its functioning in the year 1855, The Law Review, Government Law College was founded only in the year 2000. The first group of students comprising the editorial committee was formed that year under the mentorship of Professor Kishu Daswani, who is an alumnus of the Government Law College.
                                <br/><br/>
                                The committee then went on to publish the first edition of the official journal, which was released in the academic year 2000-2001.
                                <br/><br/>
                                The Law Review, Government Law College has since then become an in house student publication, guided by its faculty advisor and <a href="vol/EDITORIALBOARD.pdf" style="color:#428bca;" data-target-id="pages">The Editorial Board</a>, which comprises of the who’s who of the legal fraternity within India. It is distributed without any charge to students of the college, Hon’ble judges of the Supreme Court and the High Court, law firms, eminent lawyers, and universities, both, in India and overseas. This has been made possible due to the constant support from law firms and counsels alike who have generously and unhesitatingly assisted financially towards its publication. This year, The Law Review has successfully released <a href="lawreview/volume10/The Law Review - Vol 10 f.pdf" target="_blank" style="color:#428bca;">Volume 10</a>, which is its latest edition.
                                <br/><br/>
                                The Law Review, Government Law College requires potential authors to submit an abstract which is then subject to critique for originality, content, legal understanding and current relevance. Authors are then asked to write their articles in conformity to the Citation Manual of Government Law College. The articles are then vetted by the student committee, and thoroughly researched, before being sent to the editors for further vetting, prior to publication.
                            </p>
                            </div>
                        </div>
                        <div class="heading col-md-9 well admin-content" id="widgets">
                            <h2><u>CURRENT EDITION</u></h2>
                            <div class="heading">
                            <p style="text-align:center;">
                                <a href="images/volume10a.jpg" rel="prettyPhoto"><img src="images/volume10a.jpg" width="200" class=" img-thumbnail img-responsive"></a>
                                <a href="images/volume10b.jpg" rel="prettyPhoto"><img src="images/volume10b.jpg" width="200" class=" img-thumbnail img-responsive"></a><br/><br/>
                                <a class="btn btn-warning" href="Upload/PDF/CurrentEdition/The Law Review - Vol 10 f.pdf" target="_blank">Download The Law Review, Volume 10 (Entire edition) </a></p>
                            <p>Volume 10 of The Law Review comprises an interesting melange of articles covering several diverse heads such as feminist jurisprudence and social justice, constitutional law, public international law, as well as finance. These articles advocate pressing research contentions and address questions of contemporary relevance including those of addressing the lacunae in the State mechanism set up for the protection of whistle blowers under The Whistle Blowers Protection Act, 2014 and its Amendment Bill of 2015; viewing the concept of privacy through a feminist lens and reviewing the impact of the privacy judgment of the Supreme Court on the rights of women in India today; giving a primer on the concept of cultural property and pitting theories of cultural nationalism and cultural internationalism against each other in varying contexts of periods of colonialism, internal unrest, international armed conflict and peacetime; extrapolating the western corporate rescue mechanism of pre-packs and assessing its viability in the Indian insolvency regime; and exploring the utility of disgorgement as a remedial measure in instances of stock market frauds.</p>
                            </div>
                                <p>
                                <b>The Law Review, Volume 10 Individual Article</b> <br/>
                                <span class="table-responsive">
                                <table class="center1 table table-bordered table-striped">
                                <tbody>
                                <tr>
                                <th> Sr. No. </th>
                                <th> Article</th>
                                <th> Author </th>
                                <th> Download</th>
                                </tr>
                                <tr>
                                <td>1</td>
                                <td>Whistle Blowing: A Hobson’s Choice? Cherry-Picking Between State Authorities and Third-Party Internet Platforms</td>
                                <td>Prakriti Bhatt</td>
                                <td><a class="btn btn-warning" href="Upload/PDF/CurrentEdition/Prakriti Bhatt.pdf" target="_blank">Download</a></td>
                                </tr>
                                <tr>
                                <td>2</td>
                                <td>Unveiling Privacy for Women in India</td>
                                <td>Priyanshi Vakharia</td>
                                <td><a class="btn btn-warning" href="Upload/PDF/CurrentEdition/Priyanshi Vakharia.pdf" target="_blank">Download</a></td>
                                </tr>

                                <tr>
                                <td>3</td>
                                <td>Insolvency Procedures — Investigating the Pre-Pack Paradigm in India</td>
                                <td>Sanjana Rao</td>
                                <td><a class="btn btn-warning" href="Upload/PDF/CurrentEdition/Sanjana Rao.pdf" target="_blank">Download</a></td>
                                </tr>

                                <tr>
                                <td>4</td>
                                <td>Deconstructing the Dichotomy in Cultural Property Law</td>
                                <td>Vedika Shah</td>
                                <td><a class="btn btn-warning" href="Upload/PDF/CurrentEdition/Vedika Shah.pdf" target="_blank">Download</a></td>
                                </tr>

                                <tr>
                                <td>5</td>
                                <td>Determining Disgorgement in Securities Law</td>
                                <td>Vidhi Shah</td>
                                <td><a class="btn btn-warning" href="Upload/PDF/CurrentEdition/Vidhi Shah.pdf" target="_blank">Download</a></td>
                                </tr>
                                </tbody>
                                </table>
                                </span>
                            </p>

                        </div>
                        <div class="center1 col-md-9 well admin-content" id="pages">
                            <div class="row">
                                <h1><u>Editorial Board </u>:-</h1>
                            </div>
                            <p>
                                <b><h3>EDITOR IN CHIEF:</h3></b>
                            <h4>Justice Dr. D. Y. Chandrachud</h4>
                                <br/>
                            <b><h3>FACULTY ADVISOR:</h3></b>
                            <h3>Prof Kishu Daswani</h3>
                                <br/>
                            <b><h3>EDITORIAL BOARD MEMBERS:</h3></b><br/>
                                <!-- Lt Gen (Retd) Satish Satpute<br/>
                                Maj Gen Nilendra Kumar<br/>
                                Mr. Aliff Fazelbhoy<br/>
                                Mr. Anand Grover<br/>
                                Mr. Burzin Somandy<br/>
                                Mr. Darius Khambatta<br/>
                                Mr. Fredun Devitre<br/>
                                Mr. H. Jayesh<br/>
                                Mr. Hamid Moochhala<br/>
                                Mr. Haresh Jagtiani<br/>
                                Mr. Himanush Kane<br/>
                                Prof. James Kraska<br/>
                                Mr. Janak Dwarkadas<br/>
                                Mr. Kranti Mohan<br/>
                                Mr. Mihir Desai<br/>
                                Mr. Milind Sathe<br/>
                                Mr. Mustafa Safiyuddin<br/>
                                Ms. Nisha Kaur Uberoi<br/>
                                Mr. Nishith Desai<br/>
                                Mr. Porus Kaka<br/>
                                Mr. Rafiq Dada<br/>
                                Mr. Rohas Nagpal<br/>
                                Mr. Shaukat Merchant<br/>
                                Mr. Shiraz Rustomjee<br/>
                                Mr. Shyam Divan<br/>
                                Mr. Somasekhar Sundarasen<br/>
                                Mr. Tehemtan Daruwalla<br/>
                                Mr. Venkatesh Dhond<br/>
                                Mr. Virendra Tulzapurkar<br/> -->

                            <h4>Mr. Aspi Chinoy</h4>
                            <h4> Mr. Bahram Vakil</h4>
                                <h4>Mr. Shyam Divan</h4>
                                    <h4> Mr. Shiraz Rustomjee</h4>
                                        <h4> Dr. Menaka Guruswamy</h4>
                                            <h4> Mr. Sumit Agrawal</h4>




                            </p>
                        </div>
                        <div class="col-md-9 well admin-content" id="charts">
                            <div class="heading1 row">
                                <h2><u>ARCHIVES</u> :-</h2>
                            </div>
                            <br/>
                            <!-- <p><a class="btn btn-info" href="lawreview/volume9/TheLawReviewVolume9.pdf" target="_blank">The Law Review, Volume 9</a></p> -->
                            <p><a class="btn btn-info" href="Upload/PDF/Archive/The Law Review, Volume 9.pdf" target="_blank">The Law Review, Volume 9</a></p>
                            <br/>
                            <p><a class="btn btn-info" href="Upload/PDF/Archive/TheLawReviewVolume8.pdf" target="_blank">The Law Review, Volume 8</a></p>
                            <br/>
                            <p><a class="btn btn-info" href="Upload/PDF/Archive/THE LAW REVIEW_Vol. 7.pdf" target="_blank">The Law Review, Volume 7</a></p><br/>
                            <p><a class="btn btn-info" href="Upload/PDF/Archive/THE LAW REVIEW_Vol.6.pdf" target="_blank">The Law Review, Volume 6</a></p>
                            <br/>
                            <p><a class="btn btn-info" href="Upload/PDF/Archive/THE LAW REVIEW_Vol. 5.pdf" target="_blank">The Law Review, Volume 5</a></p>
                            <br/>
                            <p><a class="btn btn-info" href="Upload/PDF/Archive/THE LAW REVIEW_Vol. 4.pdf" target="_blank">The Law Review, Volume 4</a></p>
                            <br/>
                            <p><a class="btn btn-info" href="Upload/PDF/Archive/THE LAW REVIEW_Vol. 3.pdf" target="_blank">The Law Review, Volume 3</a></p>
                            <br/>
                            <p><a class="btn btn-info" href="Upload/PDF/Archive/THE LAW REVIEW_Vol. 2.pdf" target="_blank">The Law Review, Volume 2</a></p>
                            <br/>
                            <p><a class="btn btn-info" href="Upload/PDF/Archive/THE LAW REVIEW_Vol. 1.pdf" target="_blank">The Law Review, Volume 1</a></p>
                            <br/><br/>
                        </div>
                        <div class="heading1 col-md-9 well admin-content" id="table">
                            <b><h3><u>PAST AUTHORS</u>:-</h3></b><br>
                            <p>
                            <div class="list-group">
                                <a class="btn btn-info" href="Upload/PDF/PastAuthors/Volume 1.pdf" target="_blank" class="list-group-item active"> Volume 1</a><br>
                                <a class="btn btn-info"href="Upload/PDF/PastAuthors/Volume 2.pdf" target="_blank" class="list-group-item list-group-item-action"> Volume 2</a><br>
                                <a class="btn btn-info"href="Upload/PDF/PastAuthors/Volume 3.pdf" target="_blank" class="list-group-item list-group-item-action"> Volume 3</a><br>
                                <a class="btn btn-info"href="Upload/PDF/PastAuthors/Volume 4.pdf" target="_blank" class="list-group-item list-group-item-action"> Volume 4</a><br>
                                <a class="btn btn-info"href="Upload/PDF/PastAuthors/Volume 5.pdf" target="_blank" class="list-group-item list-group-item-action"> Volume 5</a><br>
                                <a class="btn btn-info"href="Upload/PDF/PastAuthors/Volume 6.pdf" target="_blank" class="list-group-item list-group-item-action"> Volume 6</a><br>
                                <a class="btn btn-info"href="Upload/PDF/PastAuthors/Volume 7.pdf" target="_blank" class="list-group-item list-group-item-action"> Volume 7</a><br>
                                <a class="btn btn-info"href="Upload/PDF/PastAuthors/Volume 8.pdf" target="_blank" class="list-group-item list-group-item-action"> Volume 8</a><br>
                                <a class="btn btn-info"href="Upload/PDF/PastAuthors/The Law Review, Volume 9.pdf" target="_blank" class="list-group-item list-group-item-action"> Volume 9</a><br>
                            </div>
                            </p>
                        </div>


                    </div>


                </div>

            </div><!--/.row-->

</section><!--/#middle-->





<script src="js/jquery.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function()
    {
        var navItems = $('.admin-menu li > a');
        var navListItems = $('.admin-menu li');
        var allWells = $('.admin-content');
        var allWellsExceptFirst = $('.admin-content:not(:first)');

        allWellsExceptFirst.hide();
        navItems.click(function(e)
        {
            e.preventDefault();
            navListItems.removeClass('active');
            $(this).closest('li').addClass('active');

            allWells.hide();
            var target = $(this).attr('data-target-id');
            $('#' + target).show();
        });
    });
</script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto2.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/main.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/owl.carousel.min.js"></script>

</body>
</html>
</div>
@endsection
