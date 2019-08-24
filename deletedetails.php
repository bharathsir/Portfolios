<?php
$id=$_GET['id'];



include_once('dbcon.php');
$sql="delete from registration where no='$id'  ";
$res=mysqli_query($con,$sql);

if($res)
{
header('location:adminindex2.php?page=1');
}
?>