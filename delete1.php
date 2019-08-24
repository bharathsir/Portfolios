<?php
$email=$_SESSION['email'];

define('host','localhost');
define('username','root');
define('pwd','');

$con=mysqli_connect(host,username,pwd);
mysqli_select_db($con,"gmail");

$sql="delete from registration where email='$email'  ";
$res=mysqli_query($con,$sql);

if($res)
{
header('location:deleted.php');
}
?>