<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="{{ asset('assets/selectize-bootstrap-4-style-master/dist/css/selectize.bootstrap4.css') }}"
          rel="stylesheet">
</head>

<style>
    @import url('https://fonts.googleapis.com/css?family=Lato:400,700,900');

    * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    body {
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
    }

    .mwb-form-main-wrapper {
        font-family: 'Lato', sans-serif;
        line-height: 1.5;
        padding: 20px;
    }


    .mwb-form-main-container {
        background-color: #fff;
        box-shadow: 1px 2px 10px rgba(0, 0, 0, .11);
        color: #7b7878;
        margin: 100px auto;
        max-width: 800px;
        box-shadow: 13px 13px 20px #787878, -13px -13px 20px #787878;
        border-radius: 20px;
    }

    .mwb-form-main-container form {
        padding: 20px;
    }

    .mwb-form-main-container h1 {
        background-color: #26A69A;
        color: #ffffff;
        font-size: 30px;
        font-weight: 500;
        margin: 0 0 10px 0;
        padding: 22px 15px;
        text-align: center;
    }

    .mwb-form-group {
        font-size: 14px;
        margin-bottom: 30px;
        position: relative;
    }

    .mwb-form-text-label {
        left: 10px;
        position: absolute;
        top: 12px;
        transition: 0.2s linear all;
    }

    .mwb-form-group.focus-input .mwb-form-text-label {
        background-color: #ffffff;
        padding: 0 2px;
        top: -11px;
        transition: 0.2s linear all;
    }

    .mwb-form-control {
        background-color: #ffffff;
        border-radius: 4px;
        border: 2px solid #dddddd;
        font-size: 14px;
        padding: 13px;
        width: 100%;
    }

    .mwb-form-submit-btn {
        background-color: #26A69A;
        border-radius: 4px;
        border: none;
        color: #ffffff;
        cursor: pointer;
        display: inline-block;
        font-size: 14px;
        min-width: 200px;
        padding: 16px 10px;
    }

    .mwb-form-radio {
        display: inline-block;
        margin-right: 15px;
        position: relative;
    }

    .mwb-form-radio input[type="radio"] ~ label {
        padding-left: 10px;
        cursor: pointer;
    }

    .mwb-form-radio input[type="radio"] {
        margin: 0;
        cursor: pointer;
        width: 20px;
        height: 20px;
        opacity: 0;
    }

    .mwb-form-radio input[type="radio"] + label::before {
        background-color: #dddddd;
        border-radius: 50%;
        content: "";
        cursor: pointer;
        height: 20px;
        left: 0;
        position: absolute;
        top: 6px;
        width: 20px;
    }

    .mwb-form-radio input[type="radio"] + label::after {
        background-color: #26A69A;
        border-radius: 50%;
        content: "";
        height: 10px;
        left: 5px;
        opacity: 0;
        position: absolute;
        top: 11px;
        transform: scale(0);
        transition: 0.3s linear all;
        visibility: hidden;
        width: 10px;
    }

    .mwb-form-radio input[type="radio"]:checked + label::after {
        opacity: 1;
        transform: scale(1);
        transition: 0.3s linear all;
        visibility: visible;
    }

    .mwb-form-error {
        color: #f52626;
        display: none;
        font-size: 12px;
        padding-top: 2px;
    }
</style>

<body>
<div class="mwb-form-main-wrapper">
    <div class="mwb-form-main-container">
        <div class="row">
            <div class="" style="margin: 10px; text-align: center;">
                <h2 class="text-primary">Create New Categories Here</h2>
            </div>

        </div>
        {{Form::open(array('action' => array('App\Http\Controllers\GLCMasterController@PostCSRStatesticsForMember'),'method' => 'post' ))}}
        <div class="mwb-form-group">
            <input type="text" class="mwb-form-control" value="" id="Category" name="Category" required>
            <label for="name" class="mwb-form-text-label">Enter Category</label>
        </div>

        <div class="mwb-form-group">
            <input type="text" class="mwb-form-control" id="Headers" name="Headers" required>
            <label for="name" class="mwb-form-text-label">Enter Headers</label>
        </div>

        <div class="mwb-form-group">
            <input type="text" class="mwb-form-control" id="Values" name="Values" required>
            <label for="text" class="mwb-form-text-label">Enter Values</label>
        </div>

        <div class="" style="padding-top:15px; text-align: center;">
            <input type="Submit" id="submit" value='Submit' class='btn btn-success'>

            <input type="button" onClick="history.go(-1); return false;" class="btn btn-primary" value="Go Back"
                   style="margin-left:100px"/>
        </div>
        {{ Form::close() }}
        </form>
    </div>
</div>

<script>
    jQuery(document).ready(function ($) {
        $(".mwb-form-control").focus(function () {
            var tmpThis = $(this).val();
            if (tmpThis == '') {
                $(this).parent(".mwb-form-group").addClass("focus-input");
            } else if (tmpThis != '') {
                $(this).parent(".mwb-form-group").addClass("focus-input");
            }
        });
        $(".mwb-form-control").blur(function () {
            var tmpThis = $(this).val();
            if (tmpThis == '') {
                $(this).parent(".mwb-form-group").removeClass("focus-input");
                $(this).siblings('.mwb-form-error').slideDown("3000");
            } else if (tmpThis != '') {
                $(this).parent(".mwb-form-group").addClass("focus-input");
                $(this).siblings('.mwb-form-error').slideUp("3000");

            }
        });

    });
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

    $(document).ready(function () {

        $('#submit').click(function () {
            debugger
            // Get the selected file
            var Category1 = $("#Category").val();
            var Headers1 = $("#Headers").val();
            var Values1 = $("#Values").val();
            debugger;

            var formModel = {
                Category: Category1,
                Headers: Headers1,
                Values: Values1,
            }
            // AJAX request
            $.ajax({
                url: "{{route('PostCSRStatesticsForMember')}}",
                method: 'post',
                data: formModel,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function (response) {
                    debugger;
                    window.location.href = '/CSRStatesticsIndexForMember';
                }
            });
        });
    });
</script>

</body>
</html>
