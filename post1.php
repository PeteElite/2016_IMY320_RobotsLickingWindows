<?php
	include "connect.php";
	session_start();
	$mess = $_POST["NEWS_Artical"];
	$Title = $_POST["NEWS_Heading"];
	
	if($result = mysqli_query($conn, "INSERT INTO News (Username,News_title,News_Article,News_picture)VALUES('". $_SESSION["username"]."','$Title','$mess','null')"))
	{
			header("Location: index.php");
			mysqli_close($conn);
			die();
	}
	else
	echo mysqli_error($conn);

?>