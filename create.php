<?php
/*PETERS WORK u14056136*/
include  "connect.php";


$pr    = false; 
$decor = false;
$staff = false;

if (isset($_POST["pr"]))
	$pr = true;
if (isset($_POST["decor"]))
	$decor = true;
if (isset($_POST["staff"]))
	$staff = true; 


$Name = $conn->real_escape_string (htmlspecialchars($_POST["name"]));
$Location=$conn->real_escape_string (htmlspecialchars($_POST["location"]));
$Date = $conn->real_escape_string (htmlspecialchars($_POST["date"]));
$Description =$conn->real_escape_string (htmlspecialchars($_POST["des"]));



$query="INSERT INTO Events(Name,Location,Date,Description, Decor, PR, Staff) VALUES('$Name','$Location','$Date','$Description', '$decor','$pr','$staff')";

if ($conn->query($query) === TRUE) {
   // echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

//echo "<br><br> Event Added";

 header("Location: index.php");
?>
