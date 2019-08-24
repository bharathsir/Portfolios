

<?php
session_start();
include_once("dbcon.php");


$email=$_SESSION['email'];
$pwd=$_SESSION['pwd'];

$sql="select *from  registration where  email='$email' ";
$res=mysqli_query($con,$sql);


?>
<?php
if($pwd=="")
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
	
	.myaccount
{
height:400px;
width:250px;




}
	.open
	{
		width:80px;
		margin:auto;
		
	}
	
	.background-image
	{
	background-image:url(images/image2.jpg)	;
	background-size:cover;
	background-color:blue;
	
	}
	.font
	{
	font-size:18px;	
	}
	
	
	</style>
	
</head>
<body class="background-image">
<div class="container-fluid">



<div align="center">

<?php
$output=mysqli_fetch_array($res);
?>
<div align="center">

</div>
<br />
<br />
	
<br />
<br />
<br />
<br />
<img src="images/<?php echo $output[6] ?>"  height=200 width=200 class="rounded-circle" />
<h5 class="text-white" >Welcome!</h5>
<h4 class="font-weight-bold  font text-white"><?php echo $output[1]; ?></h4>
<a href="adaccount1.php" class="btn btn-success text-white open">OPEN</a>



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