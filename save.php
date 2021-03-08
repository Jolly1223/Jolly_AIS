<?php
include_once'Login_transition.php';

$userN = $_GET["myname"];
$passW = $_GET["myPass"];
$emailE = $_GET["myEmail"];

 $sql = "INSERT INTO Users_db (Username, Password, Email)
 VALUES ('".$userN."', '".$passW."','".$emailE."')";
 
if ($conn->query($sql) === TRUE) {
  header("location: display.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>