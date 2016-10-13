<?php
//PETERS EVENT PAGE
$ID =  $_GET["ID"];
include  "connect.php";

$query="SELECT * FROM Events WHERE ID = ".$ID."";

$result = $conn->query($query);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc())
{
	echo "<h1> Event: ".  $row['Name'] . "</h1><br>";
   echo"<p>Event ID:". $row['ID'] ." <br> Name: ".  $row['Name'] . "<br> Location: ". $row['Location'] . "<br> Date: " . $row['Date'] ." <br> Description: ".  $row['Description'] . "<br><p>";
}
}



?>