<?php     session_start(); ?>
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
 
  <div class="top-bar" id="main-menu" >
  <div class="top-bar-left" >
  
    <ul class="dropdown menu" data-dropdown-menu >
	
	  <li class="menu-text"></li>
	  <li class="menu-text"><img style="padding:0px;" height="30px"width="100px"src="Pictures/logo.png" alt="probs"/></li>
    </ul>
  </div>
  <div class="top-bar-right"style="padding-top:6px;" >
    <ul class="menu" data-responsive-menu="drilldown medium-dropdown">
     <li class="barItem"><a href="index.php"><span >Home</span></a></li>
	<li class="barItem"><a href="about.php"><span>About Us</span></a></li>
	<li class="barItem"><a href="contact.php"><span >Contact Us</span></a></li>
	 <?php

    if (!isset($_SESSION["username"]))
      echo '<li class="barItem"><a data-open= "exampleModal1"> <span>Login/Register</span></a></li>';

    else
    {
      echo '<li class="barItem"><a href="news.php"> <span>News</span></a></li>';
      echo '<li class="barItem "><a class="active" href="files.php"> <span >Files</span></a></li>';
      echo '<li class="barItem"><a href="logout.php"> <span>Logout</span></a></li>';
    }
  ?>

    </ul>
  </div>
   
</div>
<img style="width:100%;" src="Pictures/doge.jpg">
   


<div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium" >
  <button class="menu-icon" type="button" data-toggle></button>
  <div class="title-bar-title">Menu</div>
</div>

	
<div class="row">
<div class="small-12 columns">

<?php
	if (isset($_SESSION["username"]) == false)
		
	$username = $_SESSION["username"];

	echo "<br><div style='font-size:30px;text-align:center;background-color:#2199E8;color:white;' class='active'><h1>Files</h1></div><br>";
	$files2 = scandir('Documents/all', 1);
	$myOutput = "<div style='margin-left:20px;width:40%;float:left;text-align:center;'> <span style='font-size: 24px;'>Download  </span> <br>";
	$myOutput .= "<div " ;
	
	for ( $a=0; $a < count($files2); $a++)
	{
		$temp = $files2[$a];
		if (!((strcmp("..",$files2[$a]) == 0) || (strcmp(".",$files2[$a]) == 0)))
		{

			$myOutput.= "<form action='download.php' method='POST'> <input class=\"button expand\" type='submit' value='$temp' name='down' style='width:100%;' ></form>"; 
		}
	}
	echo $myOutput . "</div></div>";
	echo '<div style="float:right">
	<div style="width:50%;float:left"> <span style="font-size: 24px;">Upload  </span> <br>
	<form action="upload.php" method="post" enctype="multipart/form-data">
	Select file to upload:
    <input class="button" type="file" name="fileToUpload" id="fileToUpload" style="height:50px;" > <br>
    <input class="button" type="submit" value="Upload" name="submit" style="height:40px;">
</form></div></div>




';

?>
</div>
</div>
    <script>
      $(document).ready(function() {
        $(document).foundation();
      })
    </script>
</div>
  </body>
  <br><Br><Br>
  <footer>

  <div style="background-color:#2199e8; float:left;"class="small-12 large-12 columns"><img style="padding:0px;" height="30px"width="100px"src="Pictures/logo.png" alt="probs"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tel: 012 358 9999 &nbsp;&nbsp;&nbsp;&nbsp;	Address: Petroleum St, Pretoria, 0127</p></div>
                       
            

</footer><!-- /.footer -->
</html>