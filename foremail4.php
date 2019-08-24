<?php
session_start();
$mobile=$_SESSION['mobile'];
$email=$_POST['email2'];



include("dbcon.php");



$sql="update registration
set    email='$email'
   where mobile='$mobile' ";

$res=mysqli_query($con,$sql);

if($res)
header('Location:accrea.php');
else
echo mysqli_error($con);
?>