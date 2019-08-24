<?php


session_start();

$email=$_SESSION['email'];



include_once('dbcon1.php');

$sql="select *from  admint  where email='$email'  ";
$res=mysqli_query($con,$sql);

?>
<?php
$id=$_GET['id'];
include_once('dbcon.php');
$sql1="select *from  registration where no='$id'   ";
$res1=mysqli_query($con,$sql1);





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
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
<style type="text/css">
.card1
{
height:80px;	
}
.card_total
{
height:550px;	
width:1050px;
box-shadow:5px 5px 15px -3px;
border-color:blue;
background-image:url(images/ZkwxZZKZ.png);
background-size:cover;
background-position:0px  10px;
border-radius:15px;
}

.card_photo
{
height:250px;	
width:150px;

border:0px;
}

img:hover
{
border:0px;
height:250px;	
width:250px;
box-shadow: 0 10px 50px 10px rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}
.tablecard
{
height:250px;
width:450px;

border:0px;

}
.tablecard:hover
{

box-shadow: 0 10px 50px 10px rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}
</style>
  
  
  
</head>
<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top sticky-top">
    <a class="navbar-brand mr-1" href="adminindex2.php"><h6><?php  echo $admin[1]?></h6></a>

        
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


  <div id="wrapper">

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
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>
		

		<div id="content-wrapper">

      <div class="container-fluid">

	  
	  <?php   

$output=mysqli_fetch_array($res1)
?>

		<div class="card card_total mx-auto">
		<br />
		<div class="row ml-5  ">
		<div class="col-lg-6 ">
		<div class="card tablecard">
		<table>
		<tr>
		<th>Fullname:</th>
		<td><?php echo $output[1]?></td>
		</tr>
		<tr>
		<td><br /></td>
		</tr>
		<tr>
		<th>Mobile:</th>
		<td><?php echo $output[4]?></td>
		</tr>
		<tr>
		<td><br /></td>
		</tr>
		
		<tr>
		<th>Email:</th>
		<td><?php echo $output[2]?></td>
		</tr>
		<tr>
		<td><br /></td>
		</tr>
		
		<tr>
		<th>Age:</th>
		<td><?php echo $output[24]?></td>
		</tr>
		<tr>
		<td><br /></td>
		</tr>
		
		<tr>
		<th>Martial:</th>
		<td><?php echo $output[25]?></td>
		</tr>
		
		<tr>
		<td><br /></td>
		</tr>
		 
		<tr>
		<td><a href="adminindex2.php?page=1"><button  class="btn btn-danger  ">Back</button></td></a>
		</tr>
		
		
		</table>
		
		
		</div>
		
		</div>
		
		<div class="col-lg-6  ">
		<div class="card card_photo">
		<img src="images/<?php echo $output[6]?>" height="250" width="250" class="rounded-circle"/>
		</div>
         </div>
		
		
		
		
		
		
		
</div> 	
		
		
		
		
		
		</div>
		</body>
		</html>