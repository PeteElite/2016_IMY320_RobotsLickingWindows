<?php
$target_dir = "Documents/all/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

if(isset($_POST["submit"])) {
       $uploadOk = 1;
}
else
	header("location:files.php");

   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	header("location:files.php");
    } else {
        echo "Sorry, there was an error uploading your file.";
        sleep(200);
        header("location:files.php");
    }
?>
