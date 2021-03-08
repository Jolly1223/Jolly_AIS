<?php
include_once'Login_transition.php';

$ID = $_GET["UserID"];


$sql = "DELETE FROM users_db WHERE UserID ='".$ID."'";


if ($conn->query($sql) === TRUE) {
  header('Location: display.php');
  echo "True";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>