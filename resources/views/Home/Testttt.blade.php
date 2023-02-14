@extends('layouts.app')
@section('content')

@section('page-css')
    <link href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
    <style>
        /*th, td {*/
        /*    white-space: nowrap;*/
        /*}*/
        #pi{
            /*width: 120px;*/
        }
        .card{
            border-radius: 10px;
            background-color: #cbd5e0;
        }
        .table{
            border-radius: 10px;
            background-color:lightyellow;
            font-size: 10px;
        }
        #example_filter input {
            border-radius: 10px;
            /*border:0px;*/
        }
    </style>
@stop

@if (session('flash_message'))
    <div class="alert alert-success">
        {{ session('flash_message') }}
    </div>
@endif




@endsection


@section('selectize-script')
    <script src="https://www.jquery-az.com/jquery/js/jquery-treeview/logger.js"></script>
    <script src="https://www.jquery-az.com/jquery/js/jquery-treeview/treeview.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
    <script src="{{ asset('assets/Selectize/jquery-1.10.2.js') }}"></script>
    <script src="{{ asset('assets/selectize-bootstrap-4-style-master/dist/js/selectize/standalone/selectize.min.js') }}"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            debugger;
            // $('#example').DataTable();
            $('#example').DataTable( {
                initComplete: function () {
                    this.api().columns().every( function () {
                        var column = this;
                        var select = $('<select><option value="">All</option></select>')
                            .appendTo( $(column.footer()).empty() )
                            .on( 'change', function () {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());
                                column
                                    .search( val ? '^'+val+'$' : '', true, false )
                                    .draw();
                            } );
                        column.data().unique().sort().each( function ( d, j ) {
                            var ce = d;
                            if (ce.includes("<a")) {
                            } else {
                                select.append('<option value="' + d + '">' + d + '</option>')
                            }
                        } );
                    } );
                },
            } );
        });

    </script>

@endsection

