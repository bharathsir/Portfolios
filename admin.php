<?php


session_start();
include_once('dbcon1.php');





$email=$_POST['email'];
$pwd=$_POST['pwd'];


$sql="select *from admint where email='$email' and pwd='$pwd' ";
$res=mysqli_query($con,$sql);
$fetch=mysqli_fetch_array($res);


$demail=$fetch['email'];
$dpwd=$fetch['pwd'];
$_SESSION['email']=$email;
$_SESSION['pwd']=$pwd;
if($demail==$email && $dpwd==$pwd)
{
header('Location:adminindex2.php?page=1');
}
else
{
header('Location:adminerr.php');
mysqli_error($con)." Your are not authenticator";	
}

