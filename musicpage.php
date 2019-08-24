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
<?php
include_once('dbcon.php');
$sql2="select *from  musicta";
$result2=mysqli_query($con,$sql2);


?>
<?php
include_once('dbcon.php');
$sql3="select *from  musicb";
$result3=mysqli_query($con,$sql3);


?>
<?php
$email=$_SESSION['email'];
if($email=="")
{
session_destroy();
header('location:music.php');
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
.card_height
{
height:50px;
width:80px;
border:0px;
}
ul

{
list-style:none;	
}
.footer
{
height:200px;
width:100%;
	
}
.icons
{
font-size:25px;	
}

</style>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-dark sticky-top">
  <a class="navbar-brand text-white" href="#" >Digi Music<i class="fas fa-music"></i><i class="fas fa-music music_icon"></i><i class="fas fa-music music_icon1"></i></a>
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
	
<br />
<h3 class="ml-5">Telugu Releases</h3>
<div class="container">
<div class="row">
<?php
while($output1=mysqli_fetch_array($result))
{
?>




<div class="col-lg-3">
<br />
<a href="albums.php?id=<?php echo $output1['movie']?>"><img src="images/<?php echo $output1[2]; ?>"  height="180" width="180"  /></a>
<h6><?php echo $output1['movie']?></h6>



</div>

<?php
}
?>
</div>


</div>



<br />
<h3 class="ml-5">Tamil Releases</h3>
<div class="container">
<div class="row">
<?php
while($output2=mysqli_fetch_array($result2))
{
?>




<div class="col-lg-3">
<br />
<a href="albums_tamil.php?id=<?php echo $output2['movie']?>"><img src="images/<?php echo $output2[2]; ?>"  height="180" width="180"  /></a>
<h6><?php echo $output2['movie']?></h6>



</div>

<?php
}
?>
</div>


</div>





<br />
<h3 class="ml-5">Hindi Releases</h3>
<div class="container">
<div class="row">
<?php
while($output3=mysqli_fetch_array($result3))
{
?>




<div class="col-lg-3">
<br />
<a href="albums_hindi.php?id=<?php echo $output3['movie']?>"><img src="images/<?php echo $output3[2]; ?>"  height="180" width="180"  /></a>

<h6><?php echo $output3['movie']?></h6>


</div>

<?php
}
?>
</div>


</div>
<br />
<br />
<nav class="navbar navbar-expand-lg navbar-light bg-dark footer ">
  <a class="navbar-brand text-white" href="#" ><h2 class="mt-5">Digi Music</h2> <br /><h3><i class="fas fa-music text-info"></i><i class="fas fa-music music_icon text-success"></i><i class="fas fa-music music_icon1 text-warning"></i></h3></a>
  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
  <h5 class="text-white">Follow us on</h5>
  
<i class="fab fa-facebook icons ml-2 text-primary"></i>
	<i class="fab fa-twitter-square icons ml-2 text-info"></i>
	<i class="fab fa-google-plus-g icons ml-2 text-danger"  ></i>
	</div>
	<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
  
  
  <h5 class="text-white">&copy All Copyrights are reserved 2019</h5>
  
	</div>
	</nav>


</body>
</html>