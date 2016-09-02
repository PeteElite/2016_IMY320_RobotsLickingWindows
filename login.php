<?php
	include "connect.php";
	session_start();
	$username = $_POST["loginUser"];
	$password = $_POST["loginPass"];

    if ($result = mysqli_prepare($conn, "SELECT * FROM users WHERE Username = ? AND Password = ?")) 
    {
        mysqli_stmt_bind_param($result, "ss", $Username,$Password);

        $Username = $username;
        $Password = $password;

        mysqli_stmt_execute($result);

        $result = mysqli_stmt_get_result($result);

        if (mysqli_num_rows($result) > 0)
        {
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		$_SESSION['username'] = $username; 
		$_SESSION["Title"] = mysqli_fetch_assoc($result)["Title"];
      		mysqli_close($conn);
		die();
        	
        }
        else
        {
        	
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		mysqli_close($conn);
		die();
        	
        }
    }
?>