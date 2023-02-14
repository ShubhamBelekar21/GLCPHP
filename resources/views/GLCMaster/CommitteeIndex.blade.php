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

    </style>
@stop


<div class="" style="margin: 50px; padding:10px;" id="TableOut">

    <div class="">
        <div class="row">
            <div class="col-md-8">
                <h5 class="text-primary nav-link active">Committee Details</h5>
            </div>

            <div class="col-md-3" style="float: right; margin: 20px;">
                <a class="bttn" href="{{ URL::to('/CreateCommittee') }}"
                   style="color:white;">
                    <b class="">Create</b> </a>
            </div>
        </div>
    </div>

    <div class="table-responsive card" style="padding:10px;">
        <table id="dt" class="table table-bordered" style=" border: 1px solid black; color: black; font-size: medium;
        width:100%; text-align: center;">
            <thead>
            <tr>
{{--                <th id="pi" scope="col">Sr No.</th>--}}
                <th id="pi" scope="col">Type of committee</th>
{{--                <th scope="col">ShortDescription</th>--}}
{{--                <th scope="col">Objective</th>--}}
                <th scope="col">Events</th>
                <th scope="col">Professor Incharge</th>
                <th scope="col">Student Contact</th>
                <th scope="col">Logo</th>
                <th scope="col">Picture 1</th>
                <th scope="col">Picture 2</th>
                <th scope="col">IsActive</th>

                <th scope="col">Action</th>
            </tr>
            <tr>
                <th scope="row"></th>
{{--                <th></th>--}}
{{--                <th></th>--}}
{{--                <th></th>--}}
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($CommitteeList as $item)
                <tr>
{{--                    <td id="pi" scope="row">{{ $item->SrNo }}</td>--}}
                    <td id="pi" scope="row">{{ $item->Typeofcommittee}}</td>
{{--                    <td>{{ $item->ShortDescription}}</td>--}}
{{--                    <td>{{ $item->Objective }}</td>--}}
                    <td>{{ $item->Events }}</td>
                    <td>{{ $item->ProfessorIncharge }}</td>
                    <td>{{ $item->StudentContact1 }}</td>
                    <td><img src="{{$item->Logo}}" height="100" width="100"></td>
                    <td><img src="{{$item->Picture1}}" height="100" width="100"></td>
                    <td><img src="{{$item->Picture2}}" height="100" width="100"></td>
                    <td>{{ $item->IsActive }}</td>
                    <td>
                        <a class="text-primary" href="{{ URL::to('EditCommittee',array($item->SrNo,$item->Typeofcommittee))}}">Edit</a>
                        <a class="text-primary" href="{{ URL::to('ViewCommittee',array($item->SrNo))}}">| View |</a>

                        @if( $item-> IsActive == '1' )
                            <a class="text-primary"  href="#" onclick="changestatus('{{$item->SrNo}}','0')">DeActive</a>
                        @Else
                            <a class="text-primary"  href="#" onclick="changestatus('{{$item->SrNo}}','1')">Active</a>
                        @endif
                    </td>
                </tr>
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
        function changestatus(SrNo, IsActive) {
            debugger;

            if (IsActive == 1) {
                var msg = "Are You Sure You Want To Activate User?";
            } else {
                var msg = "Are You Sure You Want To DeActivate User? ";
            }
            if (confirm(msg)) {
                $.ajax({
                    url: "{{URL::to('/CommitteeStatusChange')}}/" + SrNo + "/" + IsActive,
                    type: 'GET',
                    datatype: "json",
                    traditional: true,
                    success: function (data) {
                        debugger;
                        window.location.href = '/CommitteeIndex2';
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


