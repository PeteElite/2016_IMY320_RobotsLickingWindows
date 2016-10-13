<!doctype html>
<html lang="en" dir="ltr" style = "height: 100%">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
      <script src="./jquery-2.1.3.min.js"></script>
      <title>SPCA Homepage</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
     <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
    
    
    <style>
  .navbar{
    margin-bottom:0px;
  }
    .navbar-inner{
    min-height: 0px;
  }
  .navbar-brand, .navbar-nav li a {
    line-height: 60px;
    height: 60px;
    padding-top: 0;
  }
  </style>
  
  </head>
  <body  style = "height: 100%; ">
    <div class="row">
      <div class="large-12 columns">


<div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium" >
  <button class="menu-icon" type="button" data-toggle></button>
  <div class="title-bar-title">Menu</div>
</div>

<div class="top-bar" id="main-menu" style = "background-color:black">
  <div class="top-bar-left" >
    <ul class="dropdown menu" data-dropdown-menu style = "color: white;background-color:black">
      <li class="menu-text">SPCA</li>
    </ul>
  </div>
  <div class="top-bar-right" >
    <ul class="menu" data-responsive-menu="drilldown medium-dropdown" style = "background-color:black">
     	<li><a href="index.php"><span style = "color: white">Home</span></a></li>
	<li ><a href="about.php"><span style = "color: white">About Us</span></a></li>
	<li><a href="contact.php"><span style = "color: white">Contact Us</span></a></li>
	<?php
		session_start();
		if (isset($_SESSION["username"]))
		{
			echo '<li><a href="files.php"> <span style = "color:white">Files</span></a></li>';
			echo '<li><a href="Calender.php"> <span style = "color:white">Calendar</span></a></li>';
			echo '<li><a href="logout.php"> <span style = "color:white">Logout</span></a></li>';
		}
	?>
    </ul>
  </div>
</div>



<?php
	if (isset($_SESSION["username"]) == false)
		header("location:index.php");
	$username = $_SESSION["username"];


	$files2 = scandir('Documents/all', 1);
	$myOutput = "<div style='width:40%;border: solid 1px black;Margin:10px;padding:10px'> <h2> Files to download </h2>";
	for ( $a=0; $a < count($files2); $a++)
	{
		$temp = $files2[$a];
		if (!((strcmp("..",$files2[$a]) == 0) || (strcmp(".",$files2[$a]) == 0)))
		{
			
			$myOutput.= "<form action='download.php' method='POST'> <input type='submit' value='$temp' name='down' ></form>"; 
			
		}
	}
	echo $myOutput . "</div>";
//~ 	if (strcmp($_SESSION["Title"],"Admin") == 0)
	echo '<div style=""><form action="upload.php" method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload"> <br>
    <input type="submit" value="Upload file" name="submit">
</form></div>';







?>


    <script>
      $(document).ready(function() {
        $(document).foundation();
      })
    </script>

  </body>
</html>