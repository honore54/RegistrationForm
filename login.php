<?php
error_reporting(0);
$con = mysqli_connect("localhost","root","","useraccounts_db");
$sql = "SELECT *FROM useracc";
$result = mysqli_query($con,$sql);
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap.min.css">
  <title>Bootstrap Table</title>
</head>
<style>
    img{
        border-radius: 30px;
    }
   
    table{
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
    }
    button{
        margin-left: 1170px;
    }
</style>
<body>
  <div class="container">
    <h1 class="text-center">Students Registered</h1>
    <table class="table">
      <thead >
        <tr>
          <th>Username</th>
          <th>Email</th>
          <th>Date</th>
          <th>Password</th>
          <th>Image</th>
        </tr>
      </thead>
      <tbody>
        <!-- Table data goes here -->
       <?php while($info = $result->fetch_assoc()){?>
        <tr>
            <td><?php echo "{$info['username']}"; ?></td>
            <td><?php echo "{$info['email']}"; ?></td>
            <td><?php echo "{$info['date']}"; ?></td>
            <td><?php echo "{$info['password']}"; ?></td>
            <td><img src="<?php echo "{$info['image']}"; ?>" width="50px"></td>
        </tr>
        <?php } ?>
        <!-- Add more rows as needed -->
      </tbody>
    </table>
  </div>
 <form action="login.php" method="post">
 <div class="btn">
  <button type="submit" name="back" class="btn btn-primary ">Back</button>
  </div>
 </form>
  </div>
  <script src="bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
$btn = $_POST["back"];
if(isset($btn)){
    header("location:Register.php");
}
?>
