<?php
	session_start();
	require "connect.php";
	
	$name = $_SESSION["username"];
	$pass =$_SESSION["pass"];
	$email =$_SESSION["email"];
	$Title =$_SESSION["Title"];
	if (strcmp($_POST["value"],$_SESSION["confirmNumber"]) == 0)
	{
		if ($result = mysqli_prepare($conn, "INSERT INTO users VALUES(?,?,?,?)")) 
		{
			mysqli_stmt_bind_param($result, "ssss",$Username,$Password,$Title,$Email);
			$Username = $name;
			$Password = $pass;
			$Email = $email;
			$Title= "Admin";
			mysqli_stmt_execute($result);
			
			header('Location: index.php');
			mysqli_close($conn);
			die();
		}
	}
			
	header("Location: step2.html");
	mysqli_close($conn);
	die();