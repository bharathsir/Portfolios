<?php
session_start();



include_once('dbcon.php');
$page=$_GET['page'];
$maxrecords=8;
if($page==0)
{
$index=0;	
}

else
{
$index=$page*$maxrecords-$maxrecords;
}

$select="select *from  registration   limit $index,$maxrecords  ";
$result=mysqli_query($con,$select);
?>







<?php


include_once('dbcon.php');
$sql1="select *from  registration";
$res1=mysqli_query($con,$sql1);
$trows1=mysqli_num_rows($res1);

?>
<?php


include_once('dbcon.php');
$sql2="select *from  registration  where gender like 'male'  ";
$res2=mysqli_query($con,$sql2);
$trows2=mysqli_num_rows($res2);

?>
<?php


include_once('dbcon.php');
$sql3="select *from  registration  where gender like 'female'  ";
$res3=mysqli_query($con,$sql3);
$trows3=mysqli_num_rows($res3);

?>
<?php


include_once('dbcon.php');
$sql4="select *from  registration  where card  like '0' or card1 like '0' or card2 like '0' or image1 like '0' or image2 like '0' or image3 like '0' or image4 like '0' or image5 like '0' or age like '0' or martial like '0'";
$res4=mysqli_query($con,$sql4);
$trows4=mysqli_num_rows($res4);

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
.color2
{
color:black;	
}


.cardheight
{
height:450px;
width:450px;	

}


.card_total
{
height:550px;	
width:1060px;
box-shadow:5px 5px 15px -3px;
border-color:blue;
border-radius:15px;
}

.gender_icon
{
font-size:50px;
}


.card_total1:hover
{
box-shadow: 0 10px 60px 10px rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}
#pagination
{
color:red;	
}
</style>


<script type="text/javascript">

$(function(){
	$('.icons').hide();
	$('.delete3').hide(200);
	$('.cardpress').click(function(){
		
	$('.icons').show(200);
	
	
	})  ;
	  
	  
  });
  $(function(){
	
	$('.delete3').hide(200);
	$('.cardpress').dblclick(function(){
		
	$('.icons').hide(200);
	
	
	})  ;
	  
	  
  });
  
  
  $(function(){
	$('.delete2').hide();
	
	$('.delete1').click(function(){
		$('.delete1').hide(200);
		$('.del1').hide(200);
		$('.del2').hide(200);
	$('.delete2').show(200);
	$('.delete3').show(200);
	
	})  ;
	  
	  
  });
  
  
  
  
  

</script>
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
        <input type="text" class="form-control" placeholder="Search by name..."  
	     name="fullname"  >
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
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
			  <i class="fas fa-user-plus gender_icon"></i>
                <div class="card-body-icon">
                  <i class="fas fa-user-lock"></i>
                </div>
                <div class="mr-5"><h2><?php  echo $trows1 ?></h2>Registrations</div>
              </div>
              
                
                
                  
                
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
			  <i class="fas fa-male gender_icon"></i>
                <div class="card-body-icon">
                  <i class="fas fa-user-lock "></i>
                </div>
                <div class="mr-5"><h2><?php  echo $trows2 ?></h2>Males</div>
              </div>
              
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
			  <i class="fas fa-female gender_icon"></i>
                <div class="card-body-icon">
                  <i class="fas fa-user-lock "></i>
                </div>
                <div class="mr-5"><h2><?php  echo $trows3 ?></h2>Females</div>
              </div>
              
                
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
			  <i class="fas fa-database gender_icon"></i>
                <div class="card-body-icon">
                  <i class="fas fa-user-lock"></i>
                </div>
                <div class="mr-5"><h2><?php  echo $trows4 ?></h2> Not Stored Data</div>
              </div>
              
            </div>
          </div>
        </div>
        </div>
	
		
		
		
		
  
  
  
  

        <!-- Icon Cards-->
		
		
		
        <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Registrations</a>
          </li>
          <li class="breadcrumb-item active">Digilocker</li>
        </ol>

		
		<div id="content-wrapper">

      <div class="container-fluid">

	  
	  
		
		<div class="card card_total mx-auto">
		<br />
		 <div class="details " >
        <div class="row">
<?php
while($output=mysqli_fetch_array($result))
{
?>
      
          <div class="col-lg-3 mb-3">
		  
            <div class="card text-white bg-white card2  cardpress card_total1">
              <div class="card-body card1 " title="<?php echo $output[1];  ?>">
			  <img src="images/<?php echo $output[6]; ?>" alt=""  height="80" width="80" class=" rounded-circle" />
                </div>
				<h6 class="text-dark"><?php echo $output[1];  ?></h6>
				<div class="icons">
				<nav>
				<ul>
              <a href="showdetails.php?id=<?php  echo $output['no']?>"><i title="show" class="fas fa-eye text-primary del1"></i></a>
			  <a href="editdetails.php?id=<?php  echo $output['no']?>"><i title="edit" class="fas fa-edit text-info ml-5 del2"></i></a>
			  <i class="fas fa-trash text-danger ml-5 delete1 "title="delete"></i><a href="deletedetails.php?id=<?php  echo $output['no']?>"><button class="btn btn-danger delete2  ">Confirm</button></a>
              <a href="adminindex2.php?page=1"><button class="btn btn-info delete3  ">No</button></a>
              </ul>
			  </nav>
			  </div>
			  
			 
			  
			  </div>
          </div>
		  <?php
				}?>
          
			</div>
			</div>
<?php
$sql5="select *from registration ";
$res5=mysqli_query($con,$sql5);
$trecords=mysqli_num_rows($res5);
$tlinks=ceil($trecords/$maxrecords);




?>

<nav>
<ul class="pagination">

<?php

for($a=1;$a<=$tlinks;$a++)
{
echo "
<a href='adminindex2.php?page=$a'   class='page-link  text-success ml-2' id='pagination' class='nav-link   text-success   '>".$a."</a>";

}

?>

</ul>

</nav>
		
	</div>	
		
		
		
		
		
		
		

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
