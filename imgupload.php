<?php


session_start();



$filename=$_FILES['proimage']['name'];
$filetmpname=$_FILES['proimage']['tmp_name'];

$email=$_SESSION['email'];
include_once("dbcon.php");
$update="update registration 
 set image='$filename'  
   where email='$email' ";
$res=mysqli_query($con,$update);
if($res)
{
header('Location:imgpreview.php');
$target="images/$filename";
move_uploaded_file($filetmpname,$target);

}

else
{
echo mysqli_error($con);
}









?>