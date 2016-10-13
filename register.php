<?php
	include "connect.php";
	session_start();

	$name= $_POST["registerUser"];
	$pass= $_POST["registerPass"];
	$conf=$_POST["confirmPass"];
	$email = $_POST['registerEmail'];
	$group = $_POST['workGroup'];

	
	if (strcmp($conf,$pass) == 0)
	{
		if ($result = mysqli_prepare($conn, "SELECT * FROM users WHERE Username = ? ")) 
		{
			mysqli_stmt_bind_param($result, "s", $Username);
			$Username = $name;
			mysqli_stmt_execute($result);
			$result = mysqli_stmt_get_result($result);
			if (mysqli_num_rows($result) > 0)
			{
				header('Location: ' . $_SERVER['HTTP_REFERER']);
				mysqli_close($conn);
				die();
			}
		}
		if ($result = mysqli_prepare($conn, "SELECT * FROM users WHERE Email = ? ")) 
		{
			mysqli_stmt_bind_param($result, "s", $Email);

			$Email = $email;

			mysqli_stmt_execute($result);

			$result = mysqli_stmt_get_result($result);
		
			if (mysqli_num_rows($result) > 0)
			{
				header('Location: ' . $_SERVER['HTTP_REFERER']);
				mysqli_close($conn);
				die();
			}
		}
		
		//new page 
		$number = mt_rand(10000,1000000);
		$_SESSION["message"] = "Good day\nYou have requested to register for this website.\nPlease insert this number in order to finilise your registration. <h1>".$number."</h1>";
		$_SESSION["To"] = $email;
		$_SESSION["confirmNumber"] = $number;
		
		$_SESSION["username"] = $name;
		$_SESSION["pass"] = $pass;
		$_SESSION["email"] = $email;
		$_SESSION["Title"] = $group;
		
		header("location:send.php");
		
	}
	else
	{	
		
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
?>


