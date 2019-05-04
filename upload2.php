<?php
session_start(); 
if($_SESSION["User"]=="out") 
{
    header('Location: '.$uri.'/ChitkaraLocalCloud/login.php');
}
if(isset($_POST["submit"])) {
$value=$_POST["radioUp"];
switch ($value) {
    case 'Software':
$target_dir = "F:\Server\htdocs\ChitkaraLocalCloud\Files\Software\soft_";
$target_file = $target_dir . strtolower(basename($_FILES["fileToUpload"]["name"]));
$uploadOk = 1;
$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        chown($target_file, $_SESSION["User"]);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
        break;
    case 'Videos':
$target_dir = "F:\Server\htdocs\ChitkaraLocalCloud\Files\Videos\mov_";
$target_file = $target_dir . strtolower(basename($_FILES["fileToUpload"]["name"]));
$uploadOk = 1;
$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($fileType != "flv" && $fileType != "avi" && $fileType != "mov"
&& $fileType != "mp4" && $fileType != "mpg" && $fileType != "wmv" && $fileType != "3gp" && $fileType != "asf" & $fileType != "rar" & $fileType != "zip" ) {
    echo "Sorry, only flv, avi, mov, mp4, mpg, wmv, 3gp, rar, zip & asf files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
        break;
    case 'Images':
$target_dir = "F:\Server\htdocs\ChitkaraLocalCloud\Files\Images\img_";
$target_file = $target_dir . strtolower(basename($_FILES["fileToUpload"]["name"]));
$uploadOk = 1;
$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg"
&& $fileType != "gif" && $fileType != "JPG" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
        # code...
        break;
    case 'Documents':
$target_dir = "F:\Server\htdocs\ChitkaraLocalCloud\Files\Documents\doc_";
$target_file = $target_dir . strtolower(basename($_FILES["fileToUpload"]["name"]));
$uploadOk = 1;
$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allowed file formats
if($fileType != "doc" && $fileType != "docx" && $fileType != "odt" && $fileType != "pdf"
&& $fileType != "rtf" && $fileType != "txt" && $fileType != "wps" ) {
    echo "Sorry, only doc, docx, odt, pdf, rtf, txt & wps files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
        break;
    case 'Audio':
$target_dir = "F:\Server\htdocs\ChitkaraLocalCloud\Files\Audio\aud_";
$target_file = $target_dir . strtolower(basename($_FILES["fileToUpload"]["name"]));
$uploadOk = 1;
$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($fileType != "mp3" && $fileType != "m4a" && $fileType != "aac"
&& $fileType != "flac" && $fileType != "ogg" && $fileType != "wma" ) {
    echo "Sorry, only mp3, m4a, aac, flac, ogg & wma files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
break;
    case 'Misc':
$target_dir = "F:\Server\htdocs\ChitkaraLocalCloud\Files\Misc\misc_";
$target_file = $target_dir . strtolower(basename($_FILES["fileToUpload"]["name"]));
$uploadOk = 1;
$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
        break;
    default:
        # code...
    echo "Sorry, please select a folder type";
        break;
}
}
?>