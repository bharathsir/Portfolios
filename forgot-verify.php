


<?php
session_start();

include_once('dbcon1.php');
$email=$_SESSION['email'];
$select="select *from  admint where email='$email' ";
$result=mysqli_query($con,$select);
?>
<?php





$email=$_SESSION['email'];



include_once('dbcon1.php');

$sql="select *from  admint  where email='$email'  ";
$res=mysqli_query($con,$sql);
?>

<?php
if($email=="")
{
session_destroy();
header('location:adminlogin.php');
}


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
		$admin=mysqli_fetch_array($res)
		?>
      
  <title>Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  
  <link rel="stylesheet" href="css/bootstrap.css" />
	<script src="js/jquery.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/bootstrap.js"></script>
	
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
<style type="text/css">
.card1
{
height:150px;	
background-image:url(images/ZkwxZZKZ.png);
background-position:12px ;
opacity:1.0;

}
.card2
{
	border-color:blue;
}
.color2
{
color:black;	
}
.card_total
  {
height:450px;	
width:1050px;
box-shadow:5px 5px 15px -3px;

}
</style>
  
</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top sticky-top">
    <a class="navbar-brand mr-1" href="adminindex2.php?page=1"><h6><?php  echo $admin[1]?></h6></a>

        
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
	  
    </button>
	

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" action="search.php" method="post" enctype="multipart/form-data" >
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search by name..."  name="fullname"  >
        <div class="input-group-append">
          <button class="btn btn-primary" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
	    
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="images/<?php  echo $admin[4]?>" height="30" width="30"  class="rounded-circle" />
        </a>
		 
      </li>
    </ul>

  </nav>

  <div id="wrapper" >

    <!-- Sidebar -->
	
    	
    <ul class="sidebar navbar-nav ">
      <li class="nav-item active">
        <a class="nav-link" href="adminindex2.php?page=1">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="forgotbar.php">
          <i class="fas fa-question"></i>
          <span>Forgot Password</span>
        </a>
      </li>
    
  <li class="nav-item ">
        <a class="nav-link" href="adminlogout.php">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span>
        </a>
      </li>
    

	      
      <li class="nav-item ">
        <a class="nav-link" href="tables.php?page=1">
          <i class="fas fa-users"></i>
          <span>User details</span>
        </a>
      </li>
    
          </ul>


<div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
		

		<div class="forgot">
<div class="container">
    <div class="card card-login mx-auto mt-5 card_total">
      <div class="card-header">Reset Password</div>
      <div class="card-body">
        <div class="text-center mb-4">
          <h4>Forgot your password?</h4>
          <p>Enter your email address and we will send you instructions on how to reset your password.</p>
        </div>
				<?php

$output=mysqli_fetch_array($result);

?>

        <form action="forgot-success.php" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" readonly disabled value="<?php   echo $output[1] ;?>" name="email" required="required" autofocus="autofocus">
              <label for="inputEmail">Fullname</label>
            </div>
			<div class="form-label-group">
              <input type="password" id="inputEmail" class="form-control"  name="pass" required="required" autofocus="autofocus">
              <label for="inputEmail">Create Password</label>
            </div>
			<div class="form-label-group">
              <input type="text" id="inputEmail" class="form-control"  name="pass" required="required" autofocus="autofocus">
              <label for="inputEmail">Confirm Password</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block  bg-info       ">Submit</button>
        </form>
        <div class="text-center">
          
        </div>
      </div>
    </div>
  </div>
  </div>

  <?php
  mysqli_close($con);
  
  
  ?>
        <!-- Icon Cards-->
		        

        <!-- DataTables Example -->
        

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
