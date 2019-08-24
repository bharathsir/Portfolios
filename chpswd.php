<?php


session_start();
include_once('dbcon.php');





$email=$_POST['email2'];


$sql="select *from registration where email='$email'   ";
$res=mysqli_query($con,$sql);
$fetch=mysqli_fetch_array($res);


$demail=$fetch['email'];

$_SESSION['email2']=$email;

if($demail==$email )
{
header('Location:forgot4.php');
}
else
{
header('Location:err1.php');
mysqli_error($con)." Your are not authenticator";	
}

