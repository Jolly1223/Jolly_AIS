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

$result = mysqli_query($conn,"SELECT * FROM Users_db");
if (mysqli_num_rows($result) > 0) {
    ?>
    <br>

     <center> 
     
 
     <table style="border: 1px solid black;">

     
      <tr style="border: 1px solid black;">
        <th style="border: 1px solid black;">ID</td>
        <th style="border: 1px solid black;">User Name</th>
        <th style="border: 1px solid black;">Password</th>
        <th style="border: 1px solid black;">Email</th>
      </tr>
    <?php
    $i=0;
    while($row = mysqli_fetch_array($result)) {
    ?>
    <tr>
        <td style="border: 1px solid black;"><?php echo $row["UserID"]; ?></td>
        <td style="border: 1px solid black;"><?php echo $row["Username"]; ?></td>
        <td style="border: 1px solid black;"><?php echo $row["Password"]; ?></td>
        <td style="border: 1px solid black;"><?php echo $row["Email"]; ?></td>
    </tr>
    <?php
    $i++;
    }
    ?>
    </table>

    </center>
     <?php
    }
    else{
        echo "No result found";
    }
?>
