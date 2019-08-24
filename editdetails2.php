
<?php

session_start();


$id=$_SESSION['id'];
$age=$_POST['age'];
$martial=$_POST['martial'];



include("dbcon.php");



$sql="update registration
set  age='$age', martial='$martial'
where no='$id' ";

$res=mysqli_query($con,$sql);

if($res)
header('Location:adminindex2.php?page=1');
else
echo mysqli_error($con);
?>



