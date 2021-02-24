<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
    <form method="GET" action="deletefile.php">
    <div id="form-delete">
    <h3 class="text-center text-info">Delete</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="myname" id="username" class="form-control" required>
                            </div>
                            
                            
                            <div class="form-group">
    
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Delete">
        </div>  
    </form>
</center>
</body>
</html>
