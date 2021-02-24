<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



if(isset($_POST["submit"])){
    
$userN = $_POST["myname"];
$passW = $_POST["myPass"];
$emailE = $_POST["myEmail"];

$UserID = $_GET["UserID"];
$sql = "UPDATE Users_db SET Username = '".$userN."', Password = '".$passW."', Email = '".$emailE."' WHERE UserID = '".$UserID."'";

    if ($conn->query($sql) === TRUE) {
        header("location: display.php");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel= "stylesheet" href = "style.css">
   
</head>
<body>
    <center>
    <form method="post" >
    <div id="login">

<div class="container">
    <div id="login-row" class="row justify-content-center align-items-center">
        <div id="login-column" class="col-md-6">
            <div id="login-box" class="col-md-12">
                <form id="login-form" class="form" action="" method="post">
                    <h3 class="text-center text-info">UPDATE</h3>
                    <div class="form-group">
                        <label for="username" class="text-info">New Username:</label><br>
                        <input type="text" name="myname" id="username" placeholder="Enter New username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password" class="text-info">New Password:</label><br>
                        <input type="password" name="myPass" id="password" placeholder="Enter New Password" class="form-control"required>
                    </div>
                    <div class="form-group">
                        <label for="username" class="text-info">New Email:</label><br>
                        <input type="text" name="myEmail" id="username" placeholder="Enter New Email" class="form-control"required>
                    </div>
                    <div class="form-group">

                        <input type="submit" name="submit" class="btn btn-info btn-md" value="Update">
                   
                    
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</form>



</center>
</body>
</html>

