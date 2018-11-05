<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
<?php
$target_dir = "files/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if(isset($_POST["submit"])){
    // check file extension 

    if (strtoupper(substr($target_file, -4)) == ".pdf" || strtoupper(substr($target_file, -4)) == ".PDF") {
        echo "pdf file type .. ok </br>";
        $uploadOk = 1;
    } else {
        echo "กรุณาตรวจสอบว่าเป็นไฟล์ pdf";
        $uploadOk = 0;
        exit();
    }
/*
    // check if it is a fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false){
        echo "this is an image " . $check["mime"] . " file .. ok </br>";
        $uploadOk = 1;
    } else {
        echo "please upload image file";
        $uploadOk = 0;
        exit();
    }
*/
    // Check if file already exists
    if(file_exists($target_file)){
        echo "sorry, file already exists";
        $uploadOk = 0;
        exit();
    } else {
        echo "file existed not found .. ok </br>";
        $uploadOk = 1;
    }

    // Check if file is too big
    if($_FILES[fileToUpload]["size"] > 500000){
        echo "This file is too big";
        $uploadOk = 0;
        exit();
    } else {
        echo "File size .. ok </br>";
        $uploadOk = 1;
    }

    // is it ok to upload now 
    if($uploadOk == 0){
        echo "something happen, please try upload again.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
            echo "File " . basename($_FILES["fileToUpload"]["name"]) . "is uploaded successfully.";
        } else {
            echo "error : plase try upload file again.";
        }
    }

}

?>