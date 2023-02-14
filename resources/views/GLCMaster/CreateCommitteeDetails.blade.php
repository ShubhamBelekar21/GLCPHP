<!DOCTYPE html>
<html>
<head>
    <!-- Meta -->
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
                <h2 class="text-primary">Enter Committee Details</h2>
            </div>

        </div>
        {{Form::open(array('action' => array('App\Http\Controllers\GLCMasterController@PostCreateTeachingStaffFaculty'),'method' => 'post' ))}}

        <div class="mwb-form-group">
            <input type="text" class="mwb-form-control" value="" id="Typeofcommittee" name="Typeofcommittee" required>
            <label for="name" class="mwb-form-text-label">Enter Type of committee</label>
        </div>
        <div class="mwb-form-group">
            <input type="text" class="mwb-form-control" value="" id="ShortDescription" name="ShortDescription" required>
            <label for="name" class="mwb-form-text-label">Enter Description</label>
        </div>

        <div class="mwb-form-group">
            <input type="text" class="mwb-form-control" value="" id="Objective" name="Objective" required>
            <label for="name" class="mwb-form-text-label">Enter Objective</label>
        </div>
        <label><span class="required" style="color: red;">To seperate events use  #</span></label>
        <div class="mwb-form-group">

            <input type="text" class="mwb-form-control" value="" id="Events" name="Events" required>
            <label for="name" class="mwb-form-text-label">Enter Events</label>

        </div>
        <div class="mwb-form-group">
            <input type="text" class="mwb-form-control" value="" id="ProfessorIncharge" name="ProfessorIncharge" required>
            <label for="name" class="mwb-form-text-label">Enter Professor Incharge</label>
        </div>
        <div class="mwb-form-group">
            <input type="text" class="mwb-form-control" value="" id="StudentContact1" name="StudentContact1" required>
            <label for="name" class="mwb-form-text-label">Enter Student Contact</label>
        </div>

        {{--        Upload Image--}}

        <label class="" for="name">Logo <span class="required" style="color: red;">*</span></label>
        <div class="">
            <input type='file' id="file" name='file' class="form-control">
            <!-- Error -->
            <div class='alert alert-danger mt-2 d-none text-danger' id="err_file"></div>
        </div>

{{--        pic 1--}}
        <label class="" for="name">Picture 1 <span class="required" style="color: red;">*</span></label>
        <div class="">
            <input type='file' id="picture1" name='picture1' class="form-control">
            <!-- Error -->
            <div class='alert alert-danger mt-2 d-none text-danger' id="err_file"></div>
        </div>

{{--        pic 2--}}
        <label class="" for="name">Picture 2 <span class="required" style="color: red;">*</span></label>
        <div class="">
            <input type='file' id="picture2" name='picture2' class="form-control">
            <!-- Error -->
            <div class='alert alert-danger mt-2 d-none text-danger' id="err_file"></div>

        </div>



        <div class="" style="padding-top:15px; text-align: center;">
            <input type="button" id="submit" value='Submit' class='btn btn-success'>

            <input type="button" onClick="history.go(-1); return false;" class="btn btn-primary" value="Go Back"
                   style="margin-left:100px"/>
        </div>
        {{ Form::close() }}
        {{--        </form>--}}
    </div>
</div>
</body>

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

{{-- Script Of Uploading Image And Their Validation And Sending Data To Controller...--}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
    var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

    $(document).ready(function () {

        $('#submit').click(function () {
            debugger;

            // Get the selected file
            var files = $('#file')[0].files;
            var files1 = $('#picture1')[0].files;
            var files2 = $('#picture2')[0].files;
            var Typeofcommittee1 = $("#Typeofcommittee").val();
            var ShortDescription1 = $("#ShortDescription").val();
            var Objective1 = $("#Objective").val();
            var Events1 = $("#Events").val();
            var ProfessorIncharge1 = $("#ProfessorIncharge").val();
            var StudentContact1 = $("#StudentContact1").val();


            if (files.length > 0 && files1.length > 0 && files2.length > 0) {
                var fd = new FormData();

                // Append data
                fd.append('file', files[0]);
                fd.append('picture1', files1[0]);
                fd.append('picture2', files2[0]);
                fd.append('_token', CSRF_TOKEN);
                fd.append('Typeofcommittee', Typeofcommittee1);
                fd.append('ShortDescription', ShortDescription1);
                fd.append('Objective', Objective1);
                fd.append('Events', Events1);
                fd.append('ProfessorIncharge', ProfessorIncharge1);
                fd.append('StudentContact1', StudentContact1);

                // Hide alert
                $('#responseMsg').hide();

                // AJAX request
                $.ajax({
                    url: "{{route('PostCreateCommittee')}}",
                    method: 'post',
                    data: fd,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success: function (response) {
                        debugger;

                        // Hide error container
                        $('#err_file').removeClass('d-block');
                        $('#err_file').addClass('d-none');

                        if (response.success == 1) { // Uploaded successfully

                            // Response message
                            $('#responseMsg').removeClass("alert-danger");
                            $('#responseMsg').addClass("alert-success");
                            $('#responseMsg').html(response.message);
                            $('#responseMsg').show();

                            // File preview
                            $('#filepreview').show();
                            $('#filepreview img,#filepreview a').hide();
                            if (response.extension == 'jpg' || response.extension == 'jpeg' || response.extension == 'png') {

                                $('#filepreview img').attr('src', response.filepath);
                                $('#filepreview img').show();
                            } else {
                                $('#filepreview a').attr('href', response.filepath).show();
                                $('#filepreview a').show();
                            }
                        } else if (response.success == 2) { // File not uploaded

                            // Response message
                            $('#responseMsg').removeClass("alert-success");
                            $('#responseMsg').addClass("alert-danger");
                            $('#responseMsg').html(response.message);
                            $('#responseMsg').show();
                        } else {
                            // Display Error
                            $('#err_file').text(response.error);
                            $('#err_file').removeClass('d-none');
                            $('#err_file').addClass('d-block');
                        }
                        window.location.href = '/CommitteeIndex2';
                    },
                    error: function (response) {
                        console.log("error : " + JSON.stringify(response));
                    }
                });
            } else {
                alert("Please select a file.");
            }
        });
    });
</script>

</body>
</html>

