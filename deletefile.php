<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

$userN = $_GET['myname'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "DELETE FROM Users_db WHERE Username ='".$userN."'";






if ($conn->query($sql) === TRUE) {
  header('Location: display.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>