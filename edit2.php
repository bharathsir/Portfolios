<?php
session_start();

$id=$_GET['id'];
$_SESSION['id']=$id;
include_once("dbcon.php");
$sql="select *from  registration where  no='$id' ";
$res=mysqli_query($con,$sql);
?>
<?php



$email=$_SESSION['email'];
include_once("dbcon.php");
$sql1="select *from  registration where  email='$email' ";
$res1=mysqli_query($con,$sql1);


?>
<?php

$id=$_GET['id'];

$_SESSION['id']=$id;
include_once("dbcon.php");

$sql="select *from  registration where  no='$id' ";
$res=mysqli_query($con,$sql);

?>
<?php
$email=$_SESSION['email'];
if($email=="")
{
session_destroy();
header('location:index.php');
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
	<style type="text/css">
*
{
margin:0px;
padding:0px;
}
.card
{
width:400px;
margin:auto;
margin-top:10%;	
}
.signup
{
width:180px;
height:40px;
margin-left:45%;	
}
.box
{
height:40px;
width:250px;	
border-color:purple;
}
#acc
{
height:80px;
color:blue;	
}
.first
{
height:50px;
background-color:black;
width:100%;
	
}

.third
{
height:50px;
background-color:yellow;
width:100%;
	
}
.onec
{
height:250px;
width:350px;	
}
.twoc
{
height:500px;
width:380px;	
margin:0px;
border:0px;
}
.threec
{
height:250px;
width:350px;	
}

	
.digi

{
	font-family:courier;
}	
	.tag
	{
	font-size:12px;
	line-height:2px;
	}
	.holder
	{
	line-height:32px;	
	}

	
	
</style>	
<script type="text/javascript">
	
	$(function(){
	$('#calen').datepicker({
	numberOfMonths:1,
	changeMonth: true,
	changeYear: true,
	});	
	});
	
	
	
	
	
	$(function(){
		
	$('.hide').hide();
		
	$('.button').click(function(){
		
	$('.show').	toggle(300);
		$('.show1').hide();
		
	})	
		
	})
	
	$(function(){
		
	$('.hide1').hide();
		
	$('.button1').click(function(){
		
	$('.show1').toggle(300);
		$('.show').	hide();
		
	})	;
		
	});
	
	
	
	
	</script>
	

</head>
<body>

<nav class="navbar navbar-expand-lg   bg-secondary nav1">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
    <div class="navbar-nav">
	  <?php
$output=mysqli_fetch_array($res);
?>

  <img src="images/<?php echo $output[6]      ?>"  height=20 width=20 class="rounded-circle" /><h6><a href="adaccount1.php"class="text-white"><?php echo $output['email']; ?></h6></a>


  
      <a href="logout.php"><button type="button" class="btn btn-success">LOGOUT</button></a>
  
    </div>
  </div>
  
  
</nav>	
	<nav class="navbar navbar-expand-lg  bg-dark">
  <a class="navbar-brand text-success " href="#"><h2 class="font-weight-bold digi"><i class="fas fa-lock-open text-primary "></i>DIGILocker</h2>
  <h6 class="font-weight-bold tag ml-5 mb-1 ">Be Protected......</h6></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
    <ul class="navbar-nav ">
      <li class="nav-item active ">
        <a class="nav-link ml-5"  href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link ml-5" href="#">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link ml-5" href="#">Jobs</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link ml-5" href="#">Schemes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link ml-5" href="#">Works</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link ml-5" href="#">About us</a>
      </li>
      
    </ul>
  </div>
</nav>

	
	
	
	
	
	
	<div class="container-fluid">
	<div class="row">
	<div class="col-lg-4">
	<div class="card onec">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href=""><img src="images/2.jpg" height="250px" width="350px" class="d-block w-100" alt="..."></a>
    </div>
    <div class="carousel-item">
      <a href=""><img src="images/3.png" height="250px" width="350px" class="d-block w-100" alt="..."></a>
    </div>
    <div class="carousel-item">
      <a href=""><img src="images/5.jpg"  height="250px" width="350px" class="d-block w-100" alt="..."></a>
    </div>
	<div class="carousel-item">
      <a href=""><img src="images/6.jpg"  height="250px" width="350px" class="d-block w-100" alt="..."></a>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	
	
	
	
	
	
	</div>
	
	
	
	
	
</div>
















<div class="col-lg-8">

<h4>
Edit your Password
</h4>	
<?php
$output=mysqli_fetch_array($res1);
?>
<form action="update1.php" method="post">
<table class="table table-bordered  mx-auto table-striped">
<tr><th><label>ID</label></th><td><input type="text" readonly disabled value="<?php echo $output['no']; ?>" /></td></tr>
<tr><th><label>Fullname</label></th><td><input type="text" readonly disabled  value="<?php echo $output[1]; ?>" /></td></tr>
<tr><th><label>Email</label></th><td><input type="email" name="email" readonly disabled value="<?php echo $output[2]; ?>" /></td></tr>
<tr><th><label>Password</label></th><td><input type="password" name="pwd"  value="<?php echo $output[3]; ?>" /></td></tr>
<tr><th><label>Mobile</label></th><td><input type="text" readonly disabled value="<?php echo $output[4]; ?>" /></td></tr>
<tr><th><label>Gender</label></th><td><input type="text"   readonly disabled value="<?php echo $output[5]; ?>" /></td></tr>
<tr><td colspan=2 ><input type="submit" value="Update" class="btn btn-primary text-white" />
<a href="adaccount1.php"></a><input type="submit" value="Back" class="btn btn-dark text-white" /></td>
</tr>
</table>
</form>





</div>














</div>
<div class="row">
<div class="col-lg-4">



</div>
<div class="col-lg-8">
<button  class="btn btn-success button " >Show More</button>
<button  class="btn btn-info button1 " >Edit</button>

<br />
<br />


<div  class="show hide">

<form action="" method="post" enctype="multipart/form-data" >
<table class="table table-bordered w-100  table-striped">
<tr><th rowspan=2 >Debit card </th>

<td><?php echo $output[7]?></td>
<td><?php echo $output[9]?></td></tr>
<tr>
<td colspan=2><?php echo $output[10]?></td>
</tr>


</tr>

<tr><th>Uploaded Files </th>

<td colspan=2>
<img src="images/<?php  echo $output[19]   ?>" height="50" width="50" />
<img src="images/<?php  echo $output[20]   ?>" height="50" width="50" />
<img src="images/<?php  echo $output[21]   ?>" height="50" width="50" />
<img src="images/<?php  echo $output[22]   ?>" height="50" width="50" />
<img src="images/<?php  echo $output[23]   ?>" height="50" width="50" />
</td>


</tr>

<tr><th>Date Of Birth </th>

<td colspan=2><?php echo $output[8]?></td>

</tr>


<tr><th rowspan=2 >Debit card </th>

<td><?php echo $output[11]?></td>
<td><?php echo $output[12]?></td></tr>
<tr>
<td colspan=2><?php echo $output[13]?></td>
</tr>

<tr><th rowspan=2 >Debit card </th>

<td><?php echo $output[14]?></td>
<td><?php echo $output[15]?></td></tr>

<tr>
<td colspan=2><?php echo $output[16]?></td>
</tr>


<tr><th>Alternate Mobile  </th>

<td colspan=2><?php echo $output[17]?></td>

</tr>
<tr><th>Alternate Email  </th>

<td colspan=2><?php echo $output[18]?></td>

</tr>
<tr><th>Age  </th>

<td colspan=2><?php echo $output[24]?></td>

</tr>
<tr><th>Martial Status  </th>

<td colspan=2><?php echo $output[25]?>
</td>

</tr>



</table>
</form>
</div>
	<div class="show1 hide1"  >
	<form action="adddetails.php" method="post" enctype="multipart/form-data" >
<table class="table table-bordered w-100  table-striped">
<tr><th rowspan=2 >Debit card </th>

<td><input type=""  placeholder="Card number" name="card" id="t1"  value="<?php echo $output[7]?>"/></td>
<td><input type="" placeholder="Month/Year"  name="month"  value="<?php echo $output[9]?>" id="t1"/></td></tr>
<tr>
<td colspan=2><input type="" placeholder="CVV" name="cvv"  value="<?php echo $output[10]?>" id="t1" /></td>
</tr>


<tr><th>Date Of Birth </th>

<a href=""><td colspan=2><input type="" id="calen" name="dob"  value="<?php echo $output[8]?>" /><i class="far fa-calendar-alt text-primary  " ></i></td></a>




</tr>

<tr><th rowspan=2 >Debit card <em>*</em>(Only 2 cards) </th>

<td><input type=""  placeholder="Card number" name="card1" value="<?php echo $output[11]?>" id="t1"  /></td>
<td><input type="" placeholder="Month/Year"  name="month1" value="<?php echo $output[12]?>"  id="t1"/></td></tr>
<tr>
<td colspan=2><input type="" placeholder="CVV" name="cvv1" value="<?php echo $output[13]?>"  id="t1" /></td>
</tr>

<tr><th rowspan=2 >Debit card  <em>*</em>(Only 2 cards)</th>

<td><input type=""  placeholder="Card number" name="card2" value="<?php echo $output[14]?>" id="t1"  /></td>
<td><input type="" placeholder="Month/Year"  name="month2"  value="<?php echo $output[15]?>" id="t1"/></td></tr>

<tr>
<td colspan=2><input type="" placeholder="CVV" name="cvv2" value="<?php echo $output[16]?>"  id="t1" /></td>
</tr>

<tr><th>Upload Files <em>*</em>(Only 5 Images)</th>

<td colspan=2><input type="file" name="image1" id="t1"  /><img src="images/<?php  echo $output[19]   ?>" height="50" width="50" />
<input type="file" name="image2" id="t1"  /><img src="images/<?php  echo $output[20]   ?>" height="50" width="50" />
<input type="file" name="image3" id="t1"  /><img src="images/<?php  echo $output[21]   ?>" height="50" width="50" />
<input type="file" name="image4" id="t1"  /><img src="images/<?php  echo $output[22]   ?>" height="50" width="50" />
<input type="file" name="image5" id="t1"  /><img src="images/<?php  echo $output[23]   ?>" height="50" width="50" />
</td>

</tr>

<tr><th>Alternate Mobile  </th>

<td colspan=2><input type="text"  name="mobile2" value="<?php echo $output[17]?>"   /></td>

</tr>
<tr><th>Alternate Email  </th>

<td colspan=2><input type="text"  name="email2" value="<?php echo $output[18]?>"  /></td>

</tr>
<tr><th>Age  </th>

<td colspan=2><input type="text"  name="age" value="<?php echo $output[24]?>"  /></td>

</tr>
<tr><th>Martial Status  </th>

<td colspan=2><select name="martial" id="" value="<?php echo $output[25]?>" >
<option></option>
<option value="Single" >Single</option>
<option value="Married">Married</option>
<option value="Student" >Student</option>
</select></td>

</tr>


<tr >
<th colspan=3 ><button type="submit" class="btn btn-primary " >Update</button></th>
</tr>

</table>
</form>
</div>
</div>

	
	
</div>


</div>



</div>






<?php
mysqli_close($con);
?>

</body>
</html>