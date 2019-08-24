<?php
session_start();

$fullname=$_POST['fullname'];

include_once('dbcon.php');
$sql="select *from registration where fullname='$fullname'";
$res=mysqli_query($con,$sql);
$fetch=mysqli_fetch_array($res);
$_SESSION['fullname']=$fullname;
$dfullname=$fetch['fullname'];
if($dfullname=$fullname)
{
header('location:fulldetails.php');
}
else
{
header('location:adminindex2.php?page=1');
}
?>