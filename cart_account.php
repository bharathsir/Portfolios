


<?php
session_start();
$email=$_SESSION['email'];
include_once('dbcon1.php');
$sql="select *from registration where email='$email'";

$res=mysqli_query($con,$sql);

$output=mysqli_fetch_array($res);



?>
<?php
$sql1="select *from orderst where email='$email'";

$res1=mysqli_query($con,$sql1);
$trows1=mysqli_num_rows($res1);



?>

<?php
$id=$_GET['id'];

include_once('dbcon.php');
$sql2="select *from orderst where email='$id' ";
$res2=mysqli_query($con,$sql2);





?>




<?php
$email=$_SESSION['email'];
if($email=="")
{
session_destroy()	;
header('location:festive_login.php');
}	



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
	
	
	<script type="text/javascript">
	
	function myfun()
	{
var a=document.getElementById('select1').value;
if(a=="")
{
document.getElementById('res').innerHTML=0;

}

if(a=="500gms")
{
document.getElementById('res').innerHTML=140;

}

if(a=="1kg")
{
document.getElementById('res').innerHTML=240;

}

if(a=="2kgs")
{
document.getElementById('res').innerHTML=340;

}
if(a=="5kgs")
{
document.getElementById('res').innerHTML=740;

}

if(a=="10kgs")
{
document.getElementById('res').innerHTML=1140;

}
	
	}
	</script>
	<script type="text/javascript">
	function myfun2()
	{
var b=document.getElementById('select2').value;
if(b=="")
{
document.getElementById('res2').innerHTML=0;

}

if(b=="500gms")
{
document.getElementById('res2').innerHTML=140;

}

if(b=="1kg")
{
document.getElementById('res2').innerHTML=240;

}

if(b=="2kgs")
{
document.getElementById('res2').innerHTML=340;

}
if(b=="5kgs")
{
document.getElementById('res2').innerHTML=740;

}

if(b=="10kgs")
{
document.getElementById('res2').innerHTML=1140;

}
	}
	</script>
	<script type="text/javascript">
	function myfun3()
	{
var c=document.getElementById('select3').value;
if(c=="")
{
document.getElementById('res3').innerHTML=0;

}

if(c=="500gms")
{
document.getElementById('res3').innerHTML=140;

}

if(c=="1kg")
{
document.getElementById('res3').innerHTML=240;

}

if(c=="2kgs")
{
document.getElementById('res3').innerHTML=340;

}
if(c=="5kgs")
{
document.getElementById('res3').innerHTML=740;

}

if(c=="10kgs")
{
document.getElementById('res3').innerHTML=1140;

}
	
	}
	
	
	
	
	</script>
	<script type="text/javascript">
	function myfun4()
	{
var d=document.getElementById('select4').value;
if(d=="")
{
document.getElementById('res4').innerHTML=0;

}

if(d=="500gms")
{
document.getElementById('res4').innerHTML=140;

}

if(d=="1kg")
{
document.getElementById('res4').innerHTML=240;

}

if(d=="2kgs")
{
document.getElementById('res4').innerHTML=340;

}
if(d=="5kgs")
{
document.getElementById('res4').innerHTML=740;

}

if(d=="10kgs")
{
document.getElementById('res4').innerHTML=1140;

}
	
	}
	</script>
	<script type="text/javascript">
	
	function myfun5()
	{
var e=document.getElementById('select5').value;
if(e=="")
{
document.getElementById('res5').innerHTML=0;

}

if(e=="500gms")
{
document.getElementById('res5').innerHTML=140;

}

if(e=="1kg")
{
document.getElementById('res5').innerHTML=240;

}

if(e=="2kgs")
{
document.getElementById('res5').innerHTML=340;

}
if(e=="5kgs")
{
document.getElementById('res5').innerHTML=740;

}

if(e=="10kgs")
{
document.getElementById('res5').innerHTML=1140;

}
	
	}
	</script>
	<script type="text/javascript">
	
	function myfun6()
	{
var f=document.getElementById('select6').value;
if(f=="")
{
document.getElementById('res6').innerHTML=0;

}

if(f=="500gms")
{
document.getElementById('res6').innerHTML=140;

}

if(f=="1kg")
{
document.getElementById('res6').innerHTML=240;

}

if(f=="2kgs")
{
document.getElementById('res6').innerHTML=340;

}
if(f=="5kgs")
{
document.getElementById('res6').innerHTML=740;

}

if(f=="10kgs")
{
document.getElementById('res6').innerHTML=1140;

}
	
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</script>
	
	
	<script type="text/javascript">
	
	$(function(){
	
	
	$('.div1').hide();
	$('.div2').hide();
	$('.div3').hide();
	$('.div4').hide();
	$('.div5').hide();
	$('.div6').hide();
	$('#divs1').click(function(){
		$('.div1').toggle(200);
		$('.div2').hide();
	$('.div3').hide();
	$('.div4').hide();
	$('.div5').hide();
	$('.div6').hide();
		
		

	});
	
	$('#divs2').click(function(){
		$('.div2').toggle(200);
		$('.div1').hide();
	$('.div3').hide();
	$('.div4').hide();
	$('.div5').hide();
	$('.div6').hide();
		
		

	});
	
	$('#divs3').click(function(){
		$('.div3').toggle(200);
		$('.div1').hide();
	$('.div2').hide();
	$('.div4').hide();
	$('.div5').hide();
	$('.div6').hide();
		
		

	});
	
	$('#divs4').click(function(){
		$('.div4').toggle(200);
		$('.div1').hide();
	$('.div3').hide();
	$('.div2').hide();
	$('.div5').hide();
	$('.div6').hide();
		
		

	});
	
	
	$('#divs5').click(function(){
		$('.div5').toggle(200);
		$('.div1').hide();
	$('.div3').hide();
	$('.div4').hide();
	$('.div2').hide();
	$('.div6').hide();
		
		

	});
	
	
	$('#divs6').click(function(){
		$('.div6').toggle(200);
		$('.div1').hide();
	$('.div3').hide();
	$('.div4').hide();
	$('.div5').hide();
	$('.div2').hide();
		
		

	});
	
	
	
	});
	

	</script>
	
	
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
select
{
border:0px;
background-color:white;	
}
.item_cart
{
width:1050px;
height:150px;	
}
	</style>
	
</head>
<body>


	<nav class="navbar navbar-expand-lg navbar-light text-white bg-dark color2 sticky-top  ">
  <a class="navbar-brand text-white" href="festive_arrives_account_page.php">Festive Arrives<i class="fas fa-cookie-bite text-warning ml-2"></i><i class="fas fa-cookie-bite text-warning ml-2"></i><i class="fas  text-warning fa-cookie-bite ml-2"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        
      
      
    
  
  </div>
  
  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
  <a href="#" class="text-white"><img src="images/<?php echo $output[6] ;?>" class="rounded-circle mr-5" height="40" width="40" alt="" /></a>
  <a href="#" class="text-white">
  
  
  <i class="fas fa-shopping-cart  text-white   account"></i>
  <span class="badge badge-danger "></span>
  
  
  
  
  </a>
  
  <a href="festive_logout.php" class="text-white"><i class="fas fa-sign-out-alt text-white ml-5  account"></i>
  </a>
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
	<h2 align="center">Your Orders </h2>
	<hr  color="black"/>
	
	
</div>

	<?php 
	while($output2=mysqli_fetch_array($res2))
	{
	?>
	</div>
	
	<div class="container">
	
	
	<div class="row">
	<div class="col-lg-6">
	
	
	
	
	
	<img src="images/<?php echo  $output2[5]?>" height="150" width="150" />
	</div>
	<div class="col-lg-6">
	<h6>ORDER NAME:<?php  echo $output2[2]; ?></h4>
	<br />
	<h6>QUANTITY:<?php   echo $output2[3]; ?></h4>
	<br />
	<h6>AMOUNT:<?php  echo  $output2[4]; ?>/-</h5>
	<br />
	<a href="delete_cart.php?id=<?php echo $output2['no']?>"><button type="button" class="btn btn-danger">REMOVE</button></a>
	<button type="button" class="btn btn-warning">BUY NOW</button>
	<br />
	<br />
	
	
	<?php
	}
	?>
	
	</div>
	
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	<br />
	<br /><br />
	<div class="container">
	<div class="row">
	
	<div class="col-lg-12">
	<h2 align="center">Menu </h2>
	<hr  color="black"/>
</div>
	</div>
	
	
	</div>
	
	
	
	<div class="div1">
	<form action="cart.php" method="post" enctype="multipart/form-data">
	
	<div class="container">
	
	
	<div class="row">
	
	<div class="col-lg-6">
	<div class="card  ">
	<img  src="images/Pootharekulu_or_Poothareku.jpg"   />
	<br />
	<select name="poster"  >
	<option >Pootharekulu_or_Poothareku.jpg</option>
	</select>
	
	</div>
	<div align="center">
	
	<h2><select name="order"  >
	<option >Pootharekulu</option>
	</select></h2>
	<br />
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star"></i>
	<h6><i class="fas fa-rupee-sign"></i>20 (each one)</h6>
	</div>
	
	
</div>


	<div class="col-lg-6">
	<button type="submit" class="btn btn-warning">ADD TO CART</button>
	<button type="" class="btn btn-primary">BUY NOW</button>
	<br />
	<br />
	<h5>Choose Grams:</h5>
	<br />
	<select name="select1" id="select1" onclick="myfun()" required >
	<option></option>
	<option>500gms</option>
	<option>1kg</option>
	<option>5kgs</option>
	<option>10kgs</option>
	</select>
	price is:
	<select type="text" name="rate" >
	<option id="res" ></option>
	</select>
	
	</div>
	
	
	
	</div>
	</div>
	
	</form>
	</div>
	
	
	
	<div class="div2">
	<form action="cart.php" method="post" enctype="multipart/form-data">
	
	<div class="container">
	
	
	<div class="row">
	
	<div class="col-lg-6">
	<div class="card  ">
	<img  src="images/sunnundalu.jpg"   />
	<br />
	<select name="poster"  >
	<option >sunnundalu.jpg</option>
	</select>
	
	</div>
	<div align="center">
	
	<h2><select name="order"  >
	<option >Sunnundalu</option>
	</select></h2>
	<br />
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star"></i>
	<h6><i class="fas fa-rupee-sign"></i>20 (each one)</h6>
	</div>
	
	
</div>


	<div class="col-lg-6">
	<button type="submit" class="btn btn-warning">ADD TO CART</button>
	<button type="" class="btn btn-primary">BUY NOW</button>
	<br />
	<br />
	<h5>Choose Grams:</h5>
	<br />
	<select name="select1" id="select2" onclick="myfun2()" required >
	<option></option>
	<option>500gms</option>
	<option>1kg</option>
	<option>5kgs</option>
	<option>10kgs</option>
	</select>
	price is:
	<select type="text" name="rate" >
	<option id="res2" ></option>
	</select>
	
	</div>
	
	
	
	</div>
	</div>
	
	</form>
	</div>
	
	
	
	
	
	<div class="div3">
	<form action="cart.php" method="post" enctype="multipart/form-data">
	
	<div class="container">
	
	
	<div class="row">
	
	<div class="col-lg-6">
	<div class="card  ">
	<img  src="images/janta.jpg"   />
	<br />
	<select name="poster"  >
	<option >janta.jpg</option>
	</select>
	
	</div>
	<div align="center">
	
	<h2><select name="order"  >
	<option >Janthikalu</option>
	</select></h2>
	<br />
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star"></i>
	<h6><i class="fas fa-rupee-sign"></i>20 (each one)</h6>
	</div>
	
	
</div>


	<div class="col-lg-6">
	<button type="submit" class="btn btn-warning">ADD TO CART</button>
	<button type="" class="btn btn-primary">BUY NOW</button>
	<br />
	<br />
	<h5>Choose Grams:</h5>
	<br />
	<select name="select1" id="select3" onclick="myfun3()" required >
	<option></option>
	<option>500gms</option>
	<option>1kg</option>
	<option>5kgs</option>
	<option>10kgs</option>
	</select>
	price is:
	<select type="text" name="rate" >
	<option id="res3" ></option>
	</select>
	
	</div>
	
	
	
	</div>
	</div>
	
	</form>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<div class="container">
	<div class="row ">
	<div class="col-lg-4">
	<div class="card  " id="divs1">
	
	<img src="images/Pootharekulu_or_Poothareku.jpg" alt="" value="karois.jpg" name="poster"  />
	
	
	
	</div>
	<div align="center">
	<h5 value="Pootharekulu">Pootharekulu</h5>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star"></i>
	<h6><i class="fas fa-rupee-sign"></i>20 (each one)</h6>
	</div>
	</div>
	
	<div class="col-lg-4">
	<div class="card  " id="divs2">
	
	<img src="images/sunnundalu.jpg" alt="" />
	
	</div>
	<div align="center">
	<h5>Sunundalu</h5>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star"></i>
	<h6><i class="fas fa-rupee-sign"></i>20 (each one)</h6>
	</div>
	</div>
	
	
	
	
	
	
	<div class="col-lg-4">
	<div class="card " id="divs3">
	
	<img src="images/janta.jpg" alt="" />
	
	</div>
	<div align="center">
	<h5>Janthikalu</h5>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star"></i>
	<h6><i class="fas fa-rupee-sign"></i>20 (each one)</h6>
	</div>
	</div>
	
	
	
	
	
	
	
	
	
	
</div>
	
	
	
</div>


<div class="div4">
	<form action="cart.php" method="post" enctype="multipart/form-data">
	
	<div class="container">
	
	
	<div class="row">
	
	<div class="col-lg-6">
	<div class="card  ">
	<img  src="images/sonpapdi.jpg"   />
	<br />
	<select name="poster"  >
	<option >sonpapdi.jpg</option>
	</select>
	
	</div>
	<div align="center">
	
	<h2><select name="order"  >
	<option >Sonpapdi</option>
	</select></h2>
	<br />
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star"></i>
	<h6><i class="fas fa-rupee-sign"></i>20 (each one)</h6>
	</div>
	
	
</div>


	<div class="col-lg-6">
	<button type="submit" class="btn btn-warning">ADD TO CART</button>
	<button type="" class="btn btn-primary">BUY NOW</button>
	<br />
	<br />
	<h5>Choose Grams:</h5>
	<br />
	<select name="select1" id="select4" onclick="myfun4()" required >
	<option></option>
	<option>500gms</option>
	<option>1kg</option>
	<option>5kgs</option>
	<option>10kgs</option>
	</select>
	price is:
	<select type="text" name="rate" >
	<option id="res4" ></option>
	</select>
	
	</div>
	
	
	
	</div>
	</div>
	
	</form>
	</div>
	
		
	
	
	<div class="div5">
	<form action="cart.php" method="post" enctype="multipart/form-data">
	
	<div class="container">
	
	
	<div class="row">
	
	<div class="col-lg-6">
	<div class="card  ">
	<img  src="images/sakinaalu.jpg"   />
	<br />
	<select name="poster"  >
	<option >sakinaalu.jpg</option>
	</select>
	
	</div>
	<div align="center">
	
	<h2><select name="order"  >
	<option >Sakinaalu</option>
	</select></h2>
	<br />
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star"></i>
	<h6><i class="fas fa-rupee-sign"></i>20 (each one)</h6>
	</div>
	
	
</div>


	<div class="col-lg-6">
	<button type="submit" class="btn btn-warning">ADD TO CART</button>
	<button type="" class="btn btn-primary">BUY NOW</button>
	<br />
	<br />
	<h5>Choose Grams:</h5>
	<br />
	<select name="select1" id="select5" onclick="myfun5()" required >
	<option></option>
	<option>500gms</option>
	<option>1kg</option>
	<option>5kgs</option>
	<option>10kgs</option>
	</select>
	price is:
	<select type="text" name="rate" >
	<option id="res5" ></option>
	</select>
	
	</div>
	
	
	
	</div>
	</div>
	
	</form>
	</div>
	
	
	
	
	
	<div class="div6">
	<form action="cart.php" method="post" enctype="multipart/form-data">
	
	<div class="container">
	
	
	<div class="row">
	
	<div class="col-lg-6">
	<div class="card  ">
	<img  src="images/bakshalu.jpg"   />
	<br />
	<select name="poster"  >
	<option >bakshalu.jpg</option>
	</select>
	
	</div>
	<div align="center">
	
	<h2><select name="order"  >
	<option >Bakshalu</option>
	</select></h2>
	<br />
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star"></i>
	<h6><i class="fas fa-rupee-sign"></i>20 (each one)</h6>
	</div>
	
	
</div>


	<div class="col-lg-6">
	<button type="submit" class="btn btn-warning">ADD TO CART</button>
	<button type="" class="btn btn-primary">BUY NOW</button>
	<br />
	<br />
	<h5>Choose Grams:</h5>
	<br />
	<select name="select1" id="select6" onclick="myfun6()" required >
	<option></option>
	<option>500gms</option>
	<option>1kg</option>
	<option>5kgs</option>
	<option>10kgs</option>
	</select>
	price is:
	<select type="text" name="rate" >
	<option id="res6" ></option>
	</select>
	
	</div>
	
	
	
	</div>
	</div>
	
	</form>
	</div>
	
	

	
	<br />
	<div class="container">
	<div class="row">
	<div class="col-lg-4">
	<div class="card " id="divs4">
	
	<img src="images/sonpapdi.jpg" alt="" />
	
	
	
	</div>
	<div align="center">
	<h5>Sonpapdi</h5>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star"></i>
	<h6><i class="fas fa-rupee-sign"></i>20 (each one)</h6>
	</div>
	</div>
	
	<div class="col-lg-4">
	<div class="card " id="divs5">
	
	<img src="images/sakinaalu.jpg" alt="" />
	
	</div>
	<div align="center">
	<h5>Sakinaalu</h5>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star"></i>
	<h6><i class="fas fa-rupee-sign"></i>20 (each one)</h6>
	</div>
	</div>
	
	
	
	
	
	
	<div class="col-lg-4">
	<div class="card " id="divs6">
	
	<img src="images/bakshalu.jpg" alt="" />
	
	</div>
	<div align="center">
	<h5>Bakshalu</h5>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star text-warning"></i>
	<i class="fas fa-star"></i>
	<h6><i class="fas fa-rupee-sign"></i>20 (each one)</h6>
	</div>
	</div>
	
	
	
	
	
	

	
	
	
	
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