<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="../uploads/upload.png" />
</head>
<body>
<div style="background-color:#7780C8;padding:15px;">
      <button type="button" name="homeButton" onclick="location.href='../index.html';">Home Page</button>
</div>

<div align="center">
<form action="" method="post" enctype="multipart/form-data">
   <br>
    <b>Select image : </b> 
    <input type="file" name="file" id="file" style="border: solid;">
    <input type="submit" value="Submit" name="submit">
</form>
</div>
<?php

if(isset($_POST["submit"])) {
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["file"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$type = $_FILES["file"]["type"];

    if($type != "image/png" && $type != "image/jpeg" ){
        echo "JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    
    if($uploadOk == 1){
        move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
        echo "File uploaded /uploads/".$_FILES["file"]["name"];
    }
}
?>
</body>
</html>
