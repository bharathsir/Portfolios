
<?php

session_start();


$email=$_SESSION['email'];
include_once('dbcon1.php');
$select="select *from admint where email='$email'";
$get=mysqli_query($con,$select);


?>




<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<?php

$output=mysqli_fetch_array($get);


?>
  <title> Admin - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header"align="center" ><h2 class="text-success"><?php  echo $output[1]?></h2></div>
      <div class="card-body">
        <div align="center"><img src="images/<?php  echo $output[4]?>" alt="" height="150" width="180"a /></div>
		<h2 align="center">Registration is Completed </h2>
		
        <div class="text-center">
          <a class="d-block small mt-3" href="adminlogin.php">Login Page</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
