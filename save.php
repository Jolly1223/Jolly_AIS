<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

$userN = $_GET["myname"];
$passW = $_GET["myPass"];
$emailE = $_GET["myEmail"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 $sql = "INSERT INTO Users_db (Username, Password, Email)
 VALUES ('".$userN."', '".$passW."','".$emailE."')";






if ($conn->query($sql) === TRUE) {
  header("location: display.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>