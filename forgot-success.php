
<?php

session_start();

$pwd=$_POST['pass'];
$email=$_SESSION['email'];
$_SESSION['email']=$email;

include("dbcon1.php");



$sql="update admint
set  pwd='$pwd'
where email='$email' ";

$res=mysqli_query($con,$sql);

if($res)
header('Location:adminindex1.php');
else
echo mysqli_error($con);
?>



