


<?php
session_start();
$email=$_SESSION['email'];
include_once('dbcon1.php');
$sql="select *from registration where email='$email'";

$res=mysqli_query($con,$sql);
$output=mysqli_fetch_array($res);



?>

<?php
$email=$_SESSION['email'];
if($email=="")
{
session_destroy()	;
header('location:festive_login.php');
}	



?>
<?php
$email=md5($_SESSION['email']);
$sql1="select *from orderst where email='$email'";

$res1=mysqli_query($con,$sql1);
$trows1=mysqli_num_rows($res1);



?>
<?php

include_once('dbcon.php');
$email=md5($_SESSION['email']);
$sql2="select *from orderst where email='$email' ";
$res2=mysqli_query($con,$sql2);
$output2=mysqli_fetch_array($res2);
?>


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
		<link rel="stylesheet" href="css2/bootstrap.css" />
	<script src="js/jquery.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	
	<style type="text/css">
	*
	{
	margin:0px;
padding:0px;
	}
	.carousel_height
	{
	height:150px;	
	}
	.card img
	{
	height:250px;
	width:100%;
	border:0px;
	}
	img:hover
	{
	box-shadow: 0 10px 60px 10px rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	border-radius:15px;
	}
	@keyframes example 
	{
  0%   {
	  background-image:url(images/chikis.jpg);
	  background-size:cover;
	  }
  
  25%  {
	  background-image:url(images/laddus.jpg);
	  background-size:cover;
	  }
  50%  {
	  background-image:url(images/karois.jpg);
	  background-size:cover;
	  }
  100% {
	  background-image:url(images/cups.jpg);
	  background-size:cover;
	  }
}
.animation 
{
  
  height: 600px;
  animation-name:example;
  animation-duration:20s;
  animation-iteration-count:infinite;
  border-radius:15px;
  
}
.card1 img
{
height:450px;	
border:0px;
}
.card
{
border:0px;	
}
hr
{
opacity:0.5;
}
.delivery_icons

{
font-size:60px;	
}
.font
{
font-family:courier;
font-weight:bold;
}
.social_icons
{
font-size:30px;	
}
.color
{
height:80px;	
background-color:#696875;


}
.navbar
{
	scolor:#696875;
}
.search
{
border-radius:20px;	
}
.account
{
font-size:30px;	
}
.carousel_height
{
height:450px;
border-radius:15px;
	
}
	</style>
	
</head>
<body>


	<nav class="navbar navbar-expand-lg navbar-light text-white bg-dark color2 sticky-top  ">
  <a class="navbar-brand text-white" href="#">Festive Arrives<i class="fas fa-cookie-bite text-warning ml-2"></i><i class="fas fa-cookie-bite text-warning ml-2"></i><i class="fas  text-warning fa-cookie-bite ml-2"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        
      
      
    
  
  </div>
  
  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
  <a href="#" class="text-white"><img src="images/<?php echo $output[6] ;?>" class="rounded-circle mr-5" height="40" width="40" alt="" /></a>
  <a href="cart_account.php?id=<?php echo $output2['email']; ?>" class="text-white"><i class="fas fa-shopping-cart  text-white   account"></i>
  <span class="badge badge-danger "><?php echo $trows1 ?></span>
  </a>
  <a href="festive_logout.php" class="text-white"><i class="fas fa-sign-out-alt text-white ml-5 account"></i></a>
  </div>
</nav>
	</div>
	
	<br />
	<div class="container">
	
	
	<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner carousel_height">
    <div class="carousel-item active">
      <img src="images/chikis.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/karois.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/laddus.jpg" class="d-block w-100" alt="...">
    </div>
	<div class="carousel-item">
      <img src="images/musket.jpg" class="d-block w-100" alt="...">
    </div>
	<div class="carousel-item">
	
      <img src="images/cups.jpg" class="d-block w-100" alt="...">
	  
    </div>
	
  </div>
  
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	</div>
	
	<br />
	<br /><br />
	<div class="container">
	<div class="row">
	
	<div class="col-lg-12">
	<h2 align="center">Festive Packs</h2>
	<hr  color="black"/>
</div>
	</div>
	
	
	</div>
	<div class="container">
	<div class="row">
	<div class="col-lg-3">
	<div class="card ">
	
	<img src="images/Pootharekulu_or_Poothareku.jpg" alt="" />
	
	</div>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star"></i>
	<h6><i class="fas fa-rupee-sign"></i>20 (each one)</h6>
	
	</div>
	
	<div class="col-lg-3">
	<div class="card ">
	
	<img src="images/janta.jpg" alt="" />
	
	</div>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star"></i>
	<h6><i class="fas fa-rupee-sign"></i>20 (each one)</h6>
	
	</div>
	
	
	
	<div class="col-lg-3">
	<div class="card ">
	
	<img src="images/sakinaalu.jpg" alt="" />
	
	</div>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star"></i>
	<h6><i class="fas fa-rupee-sign"></i>20 (each one)</h6>
	
	</div>
	
	
	
	<div class="col-lg-3">
	<div class="card ">
	
	<img src="images/raagimuddda.jpg" alt="" />
	
	</div>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star"></i>
	<h6><i class="fas fa-rupee-sign"></i>20 (each one)</h6>
	
	</div>
	
	
	
	
	
	
	
	
	
	
</div>
	
	
	
</div>
	
	<br />
	<div class="container">
	<div class="row">
	<div class="col-lg-3">
	<div class="card ">
	
	<img src="images/garjakayalu.jpg" alt="" />
	
	</div>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star"></i>
	<h6><i class="fas fa-rupee-sign"></i>20 (each one)</h6>
	
	</div>
	
	
	<div class="col-lg-3">
	<div class="card ">
	
	<img src="images/sunnundalu.jpg" alt="" />
	
	</div>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star"></i>
	<h6><i class="fas fa-rupee-sign"></i>20 (each one)</h6>
	
	</div>
	
	
	
	<div class="col-lg-3">
	<div class="card ">
	
	<img src="images/karois.jpg" alt="" />
	
	</div>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star"></i>
	<h6><i class="fas fa-rupee-sign"></i>20 (each one)</h6>
	
	</div>


	
<div class="col-lg-3">
	<div class="card ">
	
	<img src="images/sonpapdi.jpg" alt="" />
	
	</div>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star"></i>
	<h6><i class="fas fa-rupee-sign"></i>20 (each one)</h6>
	
	</div>

	
	
	
	
	
	

	
	
	
	
</div>
	
<div align="right">
	<a href="more_festive.php" class="text-dark"><i class="fas fa-th ml-5">Order now</i></a>
	</div>
	
	
</div>

	
	<br />
	<br />
	<div class="container">
	<div class="row">
	
	<div class="col-lg-12">
	<h2 align="center">More For You</h2>
	<hr  color="black" class="dashed"/>
	
</div>
	</div>
	
	
	</div>
	
	
	<div class="container">
	<div class="animation">
	
	
	
	</div>
	</div>
	
	
	
	<br />
	<br />
	<div class="container">
	<div class="row">
	
	<div class="col-lg-12">
	<h2 align="center">Combo Packs</h2>
	<hr  color="black"/>
</div>
	</div>
	
	
	</div>
	<br />
	
	<div class="container">
	<div class="row">
	<div class="col-lg-4">
	<div align="center">
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star"></i>
	<h6><i class="fas fa-rupee-sign"></i>Combo Pack 350 </h6>
	<h6><i class="fas fa-rupee-sign"></i><strike>550</strike></h6>
	</div>
	<div class="card card1">
	
	<img src="images/combo1.jpg" alt="" />
	
	
	
	
	
	
	</div>
	</div>
	
	<div class="col-lg-4">
	<div align="center">
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star"></i>
	<h6><i class="fas fa-rupee-sign"></i>Combo Pack 350 </h6>
	<h6><i class="fas fa-rupee-sign"></i><strike>550</strike></h6>
	</div>
	<div class="card card1">
	
	<img src="images/combo1.jpg" alt="" />
	
	
	
	
	
	
	</div>
	</div>
	
	
	<div class="col-lg-4">
	<div align="center">
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star"></i>
	
	
	<h6><i class="fas fa-rupee-sign"></i>Combo Pack 350 </h6>
	<h6><i class="fas fa-rupee-sign"></i><strike>550</strike></h6>
	</div>
	<div class="card card1">
	
	<img src="images/combo1.jpg" alt="" />
	
	
	
	
	
	
	</div>
	</div>
	
	
	
	
	
	
	
	</div>
	</div>
	<br />
	<br />
	<div class="container">
	<div class="row">
	
	<div class="col-lg-12">
	<h2 align="center">About Us</h2>
	<hr  color="black"/>
</div>
	</div>
	
	
	</div>
	<br />
	
	<div class="container">
	
	<div class="row">
	<div class="col-lg-4">
	<div align="center">
	<i class="fas fa-motorcycle delivery_icons text-danger"></i>
	<h4 class="font">Free Delivery</h4>
	<h6 align="center" class="font">24/7</h6>
	
	
	</div>
	
	
	
	
	</div>
	
	<div class="col-lg-4">
	<div align="center">
	<i class="fas fa-home delivery_icons text-primary">  </i>
	<h4 class="font">Home Made</h4>
	
	<h6 align="center" class="font">Believe in Us</h6>
	
	</div>
	
	
	
	
	</div>
	
	<div class="col-lg-4">
	<div align="center">
	<i class="fas fa-question delivery_icons text-success"></i>
	<h4 class="font">Queries</h4>
	<h6 align="center" class="font">24/7</h6>
	
	
	</div>
	
	
	
	</div>
	</div>
	</div>
	
	
	
	<div class="container color">
	<div class="row">
	
	<div class="col-lg-12">
	
	
	</div>
	<br />
	<br />
	<div class="col-lg-12">

	<h1 align="center" class="font  text-white"  >Festive Arrives.com</h1>

	</div>






	</div>
	
	</div>
	
	<div class="container color">
	<br />
	<div align="center">
	<h5  class="text-white">Follow us on</h5>
	
	<i class="fab fa-facebook-square ml-2 text-center text-primary social_icons"></i>
	<i class="fab fa-twitter-square   ml-2  text-center text-info social_icons"></i>
	<i class="fab fa-google-plus-g  text-danger ml-2  text-center social_icons"></i>
	
	
	</div>
	</div>
	
	
	<div class="container color">
	<br />
	<div class="row">
	<div class="col-lg-4 text-center">

	<h6 class="text-white" ><u>Our Blog</u></h6>

	</div>
	
	
	<div class="col-lg-4 text-center">

	<h6  class="text-white" ><u>Complaints</u></h6>

	</div>
	
	
	
	<div class="col-lg-4 text-center">

	<h6  class="text-white"  ><u>24/7 Services</u></h6>

	</div>
	
	
	
	</div>
	</div>
	</div>
</body>
</html>