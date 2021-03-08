<?php

include "Login_transition.php";

$sql = "SELECT UserID, Username, Password, Email FROM Users_db";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 style=" margin-top:2%; float: left">Users</h2>
        <a class="btn btn-info" style="margin-left: 48%; margin-top:1%; text-decoration:none" href="login.php">Create account</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User Name</th>
                <th>Email</th> 
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
            if($result->num_rows > 0 ){
                while($row = $result->fetch_assoc()){
        ?>
                <tr>
                <td><?php echo $row['UserID'];?></td>
                <td><?php echo $row['Username'];?></td>
                <td><?php echo $row['Email'];?></td>
                <td><a class="btn btn-info" href="update.php?UserID=<?php echo $row['UserID']; ?>">Update</a>
                <a class="btn btn-danger" href="deletefile.php?UserID=<?php echo $row['UserID']; ?>">Delete</a></td>
    
                </tr>

        <?php        }
            }
        ?>
            
        </tbody>
    </table>
    </div>
    
</body>
</html>