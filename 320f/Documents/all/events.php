<?php
//PETERS EVENT PAGE
$ID =  $_GET["ID"];

$username   = "root";
$password   = "";
$hostname = "localhost";
$databaseName = "320";

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

$query="SELECT * FROM Events WHERE ID = ".$ID."";

$result = mysqli_query($connect, $query); 

while($row = mysqli_fetch_array($result))
{
	echo "<h1> Event:  $row[1]</h1><br>";
   echo"<p>Event ID: $row[0] <br> Name: $row[1] <br> Location: $row[2] <br> Date: $row[3] <br> Description: $row[4]<br><p>";
}


?>