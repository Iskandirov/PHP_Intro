

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/upload.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body>
 
<div class="container">
  <div class="card" style="width:400px">
    <img class="card-img-top" id ="user-icon" src="img_avatar1.png" alt="Card image" accept="image/gif, image/jpeg, image/png" style="width:100%">
    <div class="card-body">
      <form  method="post" enctype="multipart/form-data" action="phpupload.php"></form>
      <input type="submit" id="linkSelectFile" class="btn btn-primary" value="Upload photo" name="submit"> 
      <input type="file" id="inputImageUpload" style="display:none" >
    </form>
    </div>
  </div>
</div>

<div id="progressUpload" class="progress">
    <div>
            <i class="fa fa-spinner fa-pulse" style="font-size: 50pt"></i>
            <span class="sr-only">Loading...</span>
    </div>   
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="js/upload.js"></script>

</body>
</html>






