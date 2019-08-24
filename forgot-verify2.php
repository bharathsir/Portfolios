<?php


session_start();
include_once('dbcon1.php');





$email=$_POST['email'];


$sql="select *from admint where email='$email'   ";
$res=mysqli_query($con,$sql);
$fetch=mysqli_fetch_array($res);


$demail=$fetch['email'];

$_SESSION['email']=$email;

if($demail==$email )
{
header('Location:forgot-verify.php');
}
else
{
header('Location:adminerr.php');
mysqli_error($con)." Your are not authenticator";	
}
