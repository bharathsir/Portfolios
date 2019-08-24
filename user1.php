<?php
session_start();
include_once('dbcon.php');






$email=$_POST['email'];
$pwd=$_POST['pwd'];


$sql="select *from registration where email='$email' and pwd='$pwd' ";
$res=mysqli_query($con,$sql);
$fetch=mysqli_fetch_array($res);
$demail=$fetch['email'];
$dpwd=$fetch['pwd'];
$_SESSION['pwd']=$pwd;
$_SESSION['email']=$email;

if($demail==$email && $dpwd==$pwd)
{
header('location:user2.php');
}
else
{
header('location:err1.php');
mysqli_error($con);	
}


