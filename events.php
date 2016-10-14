 <html>
 
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
 <div class="top-bar" id="main-menu" >
  <div class="top-bar-left" >
  
    <ul class="dropdown menu" data-dropdown-menu >
  <li style="color:#2199e8; background-color:#2199e8"></li>
    <li class="menu-text"></li>
    <li class="menu-text"><img style="padding:0px;" height="30px" width="100px" src="Pictures/logo.png" alt="probs"/></li>
    </ul>
  </div>
  <div class="top-bar-right"style="padding-top:6px;" >
    <ul class="menu" data-responsive-menu="drilldown medium-dropdown">
     <li class="barItem"><a href="index.php" class="active"><span >Home</span></a></li>
  <li class="barItem"><a href="about.php"><span>About Us</span></a></li>
  <li class="barItem"><a href="contact.php"><span >Contact Us</span></a></li>
  <?php
    
    if (!isset($_SESSION["username"])) {

      echo '<li class="barItem"><a data-open= "exampleModal1"> <span>Login/Register</span></a></li>';
    }

    else
    {
      echo '<li class="barItem"><a href="news.php"> <span>News</span></a></li>';
      echo '<li class="barItem"><a href="files.php"> <span >Files</span></a></li>';
      echo '<li class="barItem"><a href="logout.php"> <span>Logout</span></a></li>';
    }
  ?>

    </ul>
  </div>
</div>

<?php
//PETERS EVENT PAGE
$ID =  $_GET["ID"];

$username   = "appsoxkb_nitrolx";
$password   = "appdev123";
$hostname = "localhost";
$databaseName = "appsoxkb_IMY320";

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

$query="SELECT * FROM Events WHERE ID = ".$ID."";

$result = mysqli_query($connect, $query); 
echo"<div class=\"row\">";

echo"<br><br><div class=\"small- columns\" style=\"background-color:#2199e8;align:centre;\">";
while($row = mysqli_fetch_array($result))
{
	echo "<h1 style=\"text-align:center;color:white;\"> Event:  $row[1]</h1><br>";
   echo"<p style=\"text-align:left;color:white;\">Event ID: $row[0] <br> Name: $row[1] <br> Location: $row[2] <br> Date: $row[3] <br> Description: $row[4]<br><p>";
}
echo"</div></div>";

?>
<div class="row">
<div class="small-6-columns">
<br><BR><a class="button" style="width:100%;" href="index.php"> Back </a>
</div></div>
 <footer >
    <div style="background-color:#2199e8;" class="small-12 large-12 columns"><img style="padding:0px;" height="30px" width="100px"src="Pictures/logo.png" alt="probs"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tel: 012 358 9999 &nbsp;&nbsp;&nbsp;&nbsp;  Address: Petroleum St, Pretoria, 0127</p></div>
  </footer>
</html>