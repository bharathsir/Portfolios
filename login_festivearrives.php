<?php


session_start();
include_once('dbcon.php');




//Form data
$email=$_POST['email'];
$pwd=$_POST['pwd'];

//select query
$sql="select *from registration where email='$email' and pwd='$pwd' ";
$res=mysqli_query($con,$sql);
$fetch=mysqli_fetch_array($res);

// Database Data as email and pwd...
$demail=$fetch['email'];
$dpwd=$fetch['pwd'];
$_SESSION['email']=$email;
if($demail==$email && $dpwd==$pwd)
{
header('Location:festive_arrives_account_page.php');
}
else
{
header('location:festive_login.php');	
}

