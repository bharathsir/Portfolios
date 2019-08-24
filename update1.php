<?php
session_start();

$id=$_SESSION['id'];



$pwd=$_POST['pwd'];
$gender=$_POST['gender'];
include("dbcon.php");



$sql="update registration
set  pwd='$pwd' 
where no='$id' ";

$res=mysqli_query($con,$sql);

if($res)
header('Location:adaccount1.php');
else
echo mysqli_error($con);
?>