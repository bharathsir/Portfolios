<?php


session_start();

$email=$_SESSION['email'];

include_once("dbcon.php");
$sql="select *from  registration  where email='$email'  ";
$res=mysqli_query($con,$sql);
?>




<?php
include_once('dbcon.php');
$sql1="select *from  musict";
$result=mysqli_query($con,$sql1);


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
	
	
	
</head>


<style type="text/css">
*
{
margin:0px;
padding:0px;
}
.profile
{
margin-left:70%;
}
.music_icon
{
font-size:15px;
}
.music_icon1
{
font-size:10px;
}
.card img
{
height:200px	;
width:200px	;
}
img:hover
{
box-shadow: 0 10px 60px 10px rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}
img
{
border-radius:15px;	
}

</style>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark sticky-top">
  <a class="navbar-brand text-white" href="musicpage.php" >Digi Music<i class="fas fa-music"></i><i class="fas fa-music music_icon"></i><i class="fas fa-music music_icon1"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <?php
$output=mysqli_fetch_array($res);
?>
  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
    <ul class="nav ">
  <li class="nav-item ">
    <img src="images/<?php  echo $output[6];?>" title="<?php  echo $output[1];?>" class="rounded-circle"  height="50" width="50"/></h6>
  </li>
  
  
     <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <li class="nav-item dropdown "  >
        <a class="nav-link dropdown-toggle text-white"   href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-cog setting-press text-white" ></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#"><h5><?php echo $output[1]?></h5></a>
          <a class="dropdown-item" href="logout_music.php">Logout</a>
          
        </div>
      </li>
	</ul>
	</div>
	</div>
	
	
	</nav>
	
