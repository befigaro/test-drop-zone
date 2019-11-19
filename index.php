<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dropzone.js Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
</head>
<body>
  
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form action="upload.php" enctype="multipart/form-data" class="dropzone" id="image-upload">
        <div>
          <h3>Select Files</h3>
        </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
  Dropzone.options.imageUpload = {
    maxFilesize:1,
    acceptedFiles: ".jpeg,.jpg,.png,.gif"
  };
</script>
</body>
</html>