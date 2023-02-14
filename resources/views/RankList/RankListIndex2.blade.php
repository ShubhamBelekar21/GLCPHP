@extends('layouts.app')
@section('content')

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
        .txt{
            padding-left: 750px;
        }

    </style>
@stop


<div class="" style="margin: 50px; padding:10px;" id="TableOut">

    <div class="">
        <div class="row">
            <div class="col-md-8">
                <h5 class="text-primary nav-link active">Rank List Details</h5>
            </div>

{{--            <div class="col-md-3" style="float: right; margin: 20px;">--}}
{{--                <a class="bttn" href="{{ URL::to('/CreateTender') }}"--}}
{{--                   style="color:white;">--}}
{{--                    <b class="">Create</b> </a>--}}
{{--            </div>--}}
        </div>
    </div>

    <div class="table-responsive card" style="padding:10px;">
        <table id="dt" class="table table-bordered" style=" border: 1px solid black; color: black; font-size: medium;
        width:100%; text-align: center;">
            <div class="row">
                <div class="txt col-md-8">
                    <h3 class="text-primary nav-link active">5 YEAR LAW COURSE</h3>
                </div>
            </div>
            <thead>
            <tr>
                <th id="pi" scope="col">Year</th>
                <th scope="col">Rank</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
            <tr>
                <th scope="row"></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($RankList as $item)
                @if($item->ProgramYear=='5' && $item->Year=='l')
                    <tr>
                        <td id="pi" scope="row">{{$item->Year}}</td>
                        <td>{{ $item->Rank}}</td>
                        <td>{{ $item->Name }}</td>
                        <td>
                            <a class="text-primary" href="{{ URL::to('EditRankList',array($item->SrNo))}}">Edit</a>
                            <a class="text-primary" href="{{ URL::to('ViewRankList',array($item->SrNo))}}">| View</a>
                        </td>
                    </tr>
                @endif
            @endforeach
            @foreach($RankList as $item)
                @if($item->ProgramYear=='5' && $item->Year=='ll')
                    <tr>
                        <td id="pi" scope="row">{{$item->Year}}</td>
                        <td>{{ $item->Rank}}</td>
                        <td>{{ $item->Name }}</td>
                        <td>
                            <a class="text-primary" href="{{ URL::to('EditRankList',array($item->SrNo))}}">Edit</a>
                            <a class="text-primary" href="{{ URL::to('ViewRankList',array($item->SrNo))}}">| View</a>
                        </td>
                    </tr>
                @endif
            @endforeach
            @foreach($RankList as $item)
                @if($item->ProgramYear=='5' && $item->Year=='lll')
                    <tr>
                        <td id="pi" scope="row">{{$item->Year}}</td>
                        <td>{{ $item->Rank}}</td>
                        <td>{{ $item->Name }}</td>
                        <td>
                            <a class="text-primary" href="{{ URL::to('EditRankList',array($item->SrNo))}}">Edit</a>
                            <a class="text-primary" href="{{ URL::to('ViewRankList',array($item->SrNo))}}">| View</a>
                        </td>
                    </tr>
                @endif
            @endforeach
            @foreach($RankList as $item)
                @if($item->ProgramYear=='5' && $item->Year=='lV')
                    <tr>
                        <td id="pi" scope="row">{{$item->Year}}</td>
                        <td>{{ $item->Rank}}</td>
                        <td>{{ $item->Name }}</td>
                        <td>
                            <a class="text-primary" href="{{ URL::to('EditRankList',array($item->SrNo))}}">Edit</a>
                            <a class="text-primary" href="{{ URL::to('ViewRankList',array($item->SrNo))}}">| View</a>
                        </td>
                    </tr>
                @endif
            @endforeach
            @foreach($RankList as $item)
                @if($item->ProgramYear=='5' && $item->Year=='V')
                    <tr>
                        <td id="pi" scope="row">{{$item->Year}}</td>
                        <td>{{ $item->Rank}}</td>
                        <td>{{ $item->Name }}</td>
                        <td>
                            <a class="text-primary" href="{{ URL::to('EditRankList',array($item->SrNo))}}">Edit</a>
                            <a class="text-primary" href="{{ URL::to('ViewRankList',array($item->SrNo))}}">| View</a>
                        </td>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    <br>
        <br>
        {{--        for 3 years--}}
        <table id="dt" class="table table-bordered" style=" border: 1px solid black; color: black; font-size: medium;
        width:100%; text-align: center;">
            <div class="row">
                <div class="txt col-md-8">
                    <h3 class="text-primary nav-link active">3 YEAR LAW COURSE</h3>
                </div>
            </div>
            <thead>
            <tr>
                <th id="pi" scope="col">Year</th>
                <th scope="col">Rank</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
            <tr>
                <th scope="row"></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($RankList as $item)
                @if($item->ProgramYear=='3' && $item->Year=='l')
                    <tr>
                        <td id="pi" scope="row">{{$item->Year}}</td>
                        <td>{{ $item->Rank}}</td>
                        <td>{{ $item->Name }}</td>
                        <td>
                            <a class="text-primary" href="{{ URL::to('EditRankList',array($item->SrNo))}}">Edit</a>
                            <a class="text-primary" href="{{ URL::to('ViewRankList',array($item->SrNo))}}">| View</a>
                        </td>
                    </tr>
                @endif
            @endforeach
            @foreach($RankList as $item)
                @if($item->ProgramYear=='3' && $item->Year=='ll')
                    <tr>
                        <td id="pi" scope="row">{{$item->Year}}</td>
                        <td>{{ $item->Rank}}</td>
                        <td>{{ $item->Name }}</td>
                        <td>
                            <a class="text-primary" href="{{ URL::to('EditRankList',array($item->SrNo))}}">Edit</a>
                            <a class="text-primary" href="{{ URL::to('ViewRankList',array($item->SrNo))}}">| View</a>
                        </td>
                    </tr>
                @endif
            @endforeach
            @foreach($RankList as $item)
                @if($item->ProgramYear=='3' && $item->Year=='lll')
                    <tr>
                        <td id="pi" scope="row">{{$item->Year}}</td>
                        <td>{{ $item->Rank}}</td>
                        <td>{{ $item->Name }}</td>
                        <td>
                            <a class="text-primary" href="{{ URL::to('EditRankList',array($item->SrNo))}}">Edit</a>
                            <a class="text-primary" href="{{ URL::to('ViewRankList',array($item->SrNo))}}">| View</a>
                        </td>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
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
        //     $('#dt').DataTable({
        //         responsive: true,
        //         initComplete: function () {
        //             this.api().columns().every(function () {
        //                 var column = this;
        //                 var select = $('<select style="width: 50px"><option value="">All</option></select>')
        //                     .appendTo($(column.header()).empty())
        //                     .on('change', function () {
        //                         var val = $.fn.dataTable.util.escapeRegex($(this).val());
        //                         column
        //                             .search(val ? '^' + val + '$' : '', true, false)
        //                             .draw();
        //                     });
        //                 column.data().unique().sort().each(function (d, j) {
        //                     var ce = d;
        //                     if (ce.includes("<a")) {
        //                     } else {
        //                         select.append('<option value="' + d + '">' + d + '</option>')
        //                     }
        //                 });
        //             });
        //         },
        //     });
        //     setTimeout(function () {
        //         $("div.alert").remove();
        //     }, 2000);
        // });

    </script>

    <script type="text/javascript">
        function changestatus(SrNo, IsActive) {
            debugger;

            if (IsActive == 1) {
                var msg = "Are You Sure You Want To Activate User?";
            } else {
                var msg = "Are You Sure You Want To DeActivate User? ";
            }
            if (confirm(msg)) {
                $.ajax({
                    url: "{{URL::to('/TenderStatusChange')}}/" + SrNo + "/" + IsActive,
                    type: 'GET',
                    datatype: "json",
                    traditional: true,
                    success: function (data) {
                        debugger;
                        window.location.href = '/TendersIndex';
                    },
                    error: function (ex) {
                        console.log(ex);
                    }
                });
                return true;
            } else {
                return false;
            }
        }
    </script>
@endsection


