<?php
	include "connect.php";
	session_start();
	$mess = $_POST["Ann_Mess"];
	$Title = $_POST["Title"];
	
	if($result = mysqli_query($conn, "INSERT INTO announcements (Ann_Mess,Ann_Title,Ann_Date,Ann_User)VALUES('$mess','$Title',now(),'". $_SESSION["username"]. "')"))
	{
			header("Location: index.php");
			mysqli_close($conn);
			die();
	}
	else
	echo mysqli_error($conn);

?>