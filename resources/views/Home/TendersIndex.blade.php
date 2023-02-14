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
@section('page-css')
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
        font-weight: bold;
        font-size: 22px;
        color: black;
    }

    td {
        /*font-weight: bold;*/
        color: black;
        font-size:20px;
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
        padding-top: 50px;
        text-align: center;
        font-size: 50px;
    }
    .center1{
        font-size: 20px;
        padding-top: 10px;
        text-align: left;
    }
    a{
        color:#0000cc;
    }
</style>
@stop
@section('content')
<div class="" style="margin: 50px; padding:10px;" id="TableOut">

    <div class="">
        <div class="row">
            <div class="col-md-8">
                <h5 class="text-primary nav-link active">Tender</h5>
            </div>
        </div>
    </div>

    <div class="table-responsive card" style="padding:10px;">
        <table id="dt" class="table table-bordered" style=" border: 1px solid black; color: black;
        width:100%; text-align: center;">
            <thead>
            <tr>
                <th id="pi" scope="col">Tender/Quotation No</th>
                <th scope="col">Description</th>
                <th scope="col">Tender/Quotation Date</th>
                <th scope="col">PDF</th>

            </tr>
            <tr>
                <th scope="row"></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($TendersList as $item)
                <tr>
                    <td id="pi" scope="row">{{$item->TenderNo}}</td>
                    <td>{{ $item->Description}}</td>
                    <td>{{ $item->TenderDate }}</td>
                    <td><a href="{{$item->PDF}}" target="_blank">View PDF</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
{{--                <div class="row" style="float: left; margin: 20px;">--}}
{{--                    <input type="button" onClick="history.go(-1); return false;" class="bttn button2" value="Go Back"--}}
{{--                           style="margin-left:100px;height: 5%;width: 5%"/>--}}
{{--                </div>--}}
    </div>
</div>
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
    <script type="text/javascript">
        $(document).ready(function () {
            debugger;
            document.body.style.zoom = "90%";
            $('#dt').DataTable({
                responsive: true,
                initComplete: function () {
                    this.api().columns().every(function () {
                        var column = this;
                        var select = $('<select style="width: 50px"><option value="">All</option></select>')
                            .appendTo($(column.header()).empty())
                            .on('change', function () {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());
                                column
                                    .search(val ? '^' + val + '$' : '', true, false)
                                    .draw();
                            });
                        column.data().unique().sort().each(function (d, j) {
                            var ce = d;
                            if (ce.includes("<a")) {
                            } else {
                                select.append('<option value="' + d + '">' + d + '</option>')
                            }
                        });
                    });
                },
            });
            setTimeout(function () {
                $("div.alert").remove();
            }, 2000);
        });

    </script>

    <script type="text/javascript">
        // function changestatus(id, IsActive) {
        //     debugger;

        {{--    if (IsActive == 1) {--}}
        {{--        var msg = "Are You Sure You Want To Activate User?";--}}
        {{--    } else {--}}
        {{--        var msg = "Are You Sure You Want To DeActivate User? ";--}}
        {{--    }--}}
        {{--    if (confirm(msg)) {--}}
        {{--        $.ajax({--}}
        {{--            url: "{{URL::to('/AlumniStatusChange')}}/" + id + "/" + IsActive,--}}
        {{--            type: 'GET',--}}
        {{--            datatype: "json",--}}
        {{--            traditional: true,--}}
        {{--            success: function (data) {--}}
        {{--                debugger;--}}
        {{--                window.location.href = '/AlumniSectionIndex';--}}
        {{--            },--}}
        {{--            error: function (ex) {--}}
        {{--                console.log(ex);--}}
        {{--            }--}}
        {{--        });--}}
        {{--        return true;--}}
        {{--    } else {--}}
        {{--        return false;--}}
        {{--    }--}}
        {{--}--}}
    </script>
@endsection


