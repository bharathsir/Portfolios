<?php
session_start();
$email2=$_SESSION['email2'];
$pwd=$_POST['pass'];

$_SESSION['pwd']=$pwd;
include("dbcon.php");



$sql="update registration
set    pwd='$pwd'
   where email='$email2' ";

$res=mysqli_query($con,$sql);

if($res)
header('Location:accrea.php');
else
echo mysqli_error($con);
?>