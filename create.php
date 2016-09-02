<?php
/*PETERS WORK u14056136*/
$username   = "root";
$password   = "";
$servername = "localhost";
$conn       = new mysqli($servername, $username, $password, "320");

if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); } 

$Name = mysql_real_escape_string (htmlspecialchars($_POST["name"]));
$Location= mysql_real_escape_string (htmlspecialchars($_POST["location"]));
$Date = mysql_real_escape_string (htmlspecialchars($_POST["date"]));
$Description = mysql_real_escape_string (htmlspecialchars($_POST["des"]));

echo "Adding event   :   ".$Name;

$query="INSERT INTO Events(Name,Location,Date,Description) VALUES('$Name','$Location','$Date','$Description')";

if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

echo "<br><br> Event Added";

 header("Location: index.php");
?>
