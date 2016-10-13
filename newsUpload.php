<?php
include "connect.php";
		session_start();
		if (!isset($_SESSION["username"]))
		{
			header("location:index.php");
			die();
		}	
if ($_FILES["fileToUpload"]["name"] == Null)
{
	$Title = $_POST["NEWS_Heading"];
	$mess = $_POST["NEWS_Artical"];
		if($result = mysqli_query($conn, "INSERT INTO news (Username,News_title,News_Article,News_picture,News_Date)VALUES('". $_SESSION["username"]. "','". $Title ."','".$mess."','',now())"))
		{
			header("location:news.php");
			mysqli_close($conn);
			die();
		}
	header("location:news.php");
	die();
}
$target_dir = "Pictures/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$Title = $_POST["NEWS_Heading"];
$mess = $_POST["NEWS_Artical"];


   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	$pic = basename( $_FILES["fileToUpload"]["name"]);
	if($result = mysqli_query($conn, "INSERT INTO news (Username,News_title,News_Article,News_picture,News_Date)VALUES('". $_SESSION["username"]. "','". $Title ."','".$mess."','".$pic."',now())"))
		{
			header("location:news.php");
			mysqli_close($conn);
			die();
		}
	header("location:news.php");
    } else {
        echo "Sorry, there was an error uploading your file.";
        sleep(200);
       header("location:news.php");
    }
?>
