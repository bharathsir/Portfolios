

<?php


define('host','localhost');
define('username','root');
define('pwd','');

$con=mysqli_connect(host,username,pwd);
mysqli_select_db($con,"gmail");
$id=$_GET['id'];
$sql="delete from orderst where no='$id'  ";
$res=mysqli_query($con,$sql);

if($res)
{
header('location:more_festive.php');
}
?>



