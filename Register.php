<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","useraccounts_db");
if(isset($_POST['reg'])){
    $name = $_POST['names'];
    $email = $_POST['emails'];
    $time = $_POST['date'];
    $password = $_POST['pass'];
    $file = $_FILES['image']['name'];
    $loc = "./image/".$file;
    $loc_db = "image/".$file;
    move_uploaded_file($_FILES["image"]["tmp_name"],$loc);
    $sql = "INSERT INTO useracc(username,email,date,password,image)VALUES('$name','$email','$time','$password','$loc_db')";
    $result = mysqli_query($conn,$sql);
}
if($result){
    echo "<script>alert('Successfully Inserted')</script>";
}
else{
    echo"<script>alert('Error Occured. Try Again!')</script>";
}

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful Form</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <!-- Add some custom styles for beautiful colors -->
    <style>
        body {
            background-color: #f5f5f5;
        }
        .container {
            margin-top: 50px;
            border-radius: 10px;
            background-color: #fff;
            padding: 30px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Registration Form</h2>
        <form action="Register.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="names" class="form-control" id="username" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="emails" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date" class="form-control" id="date" placeholder="Enter the date">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="pass" class="form-control" id="password" placeholder="Enter password">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control" id="file">
            </div>
            <button type="submit" name="reg" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="text-center">
        
        <a href="login.php">Check The Registered Students</a>

    </div>

<script src="bootstrap.bundle.min.js"></script>
</body>
</html>
