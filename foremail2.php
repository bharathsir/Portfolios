<?php


session_start();
include_once('dbcon.php');





$mobile=$_POST['mobile'];


$sql="select *from registration where mobile='$mobile'   ";
$res=mysqli_query($con,$sql);
$fetch=mysqli_fetch_array($res);


$dmobile=$fetch['mobile'];

$_SESSION['mobile']=$mobile;

if($dmobile==$mobile )
{
header('Location:foremail3.php');
}
else
{
header('Location:err1.php');
mysqli_error($con)." Your are not authenticator";	
}

