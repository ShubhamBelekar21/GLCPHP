
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<div class="container" style=" border: 1px solid darkblue; margin: 10px auto; font-family: 'Times New Roman'; font-weight: bold;
 width: 70%;">
    <h2>Upload New News Here:- </h2>

    <form name="form" method="post" action="UploadData" enctype="multipart/form-data">


        <div class="col-md-12">

            <div class="form-group col-md-6">
                <label for="NTitle">News Title:</label>
                <input type="text" class="form-control" id="NTitle" placeholder="Enter News Title" name="NewsTitle">
            </div>

            <div class="form-group col-md-6">
                <label for="SDiscription">Short Discription:</label>
                <input type="text" class="form-control" id="SDiscription" placeholder="Enter Short Discription"
                       name="ShortDiscription">
            </div>

            <div class="form-group col-md-6">
                <label for="Description">Discription:</label>
                <input type="text" class="form-control" id="Discription" placeholder="Enter Discription"
                       name="Discription">
            </div>

            <div class="form-group col-md-6">
                <label for="Description">News Image:</label>
                <input type="text" class="form-control" id="NImage" placeholder="Enter News Image "
                       name="NewsImage">
            </div>

            <div class="form-group col-md-6">
                <label for="Description">News Date:</label>
                <input type="Date" class="form-control" id="NDate" placeholder="" name="News Date">
            </div>

            <div class="form-group col-md-6">
                <label for="Description">PDF Url:</label>
                <input type="text" class="form-control" id="PUrl" placeholder="Enter PDF URL" name="PDF Url">
            </div>

            <div class="form-group col-md-6">
                <label for="Description">Publish Date:</label>
                <input type="Date" class="form-control" id="PDate" placeholder="Enter PDF URL" name="Publish Date">
            </div>

            <div class="form-group col-md-6">
                <label for="Description">Upload PDF:</label>
                Browse..<input type="file" id="upload_cv" name="my_file" accept=".doc,.docx,.pdf"
                               onchange="validate_file();">

            </div>

            <div class="form-group">
            </div>

            <div class="form-group">
                <span class="text-warning">Upload only .doc, .docx and .pdf file.</span>
            </div>

        </div>
        <input type="submit" name="submit" value="Upload" style="background-color: #04AA6D;border: none;color: white;padding: 16px 32px;
        text-decoration: none;margin: 4px 2px;cursor: pointer;"/>
    </form>
</div>
