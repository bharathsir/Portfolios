<?php


session_start();
include_once('dbcon.php');





$email=$_POST['email'];
$pwd=$_POST['pwd'];


$sql="select *from registration where email='$email' and pwd='$pwd' ";
$res=mysqli_query($con,$sql);
$fetch=mysqli_fetch_array($res);


$demail=$fetch[2];
$dpwd=$fetch[3];
$_SESSION['email']=$email;
if($demail==$email && $dpwd==$pwd)
{
header('Location:musicpage.php');
}
else
{
header('location:music.php');	
}

