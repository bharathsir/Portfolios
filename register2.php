<?php

session_start();


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$fullname=$fname.".".$lname;
$email1=$_POST['email1'];
$pwd1=$_POST['pwd1'];
$mob=$_POST['mobile'];
$gen=$_POST['gender'];

$filename=$_FILES['image']['name'];		
$filetype=$_FILES['image']['type'];		
$filetmpname=$_FILES['image']['tmp_name'];










$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"gmail");
$insert="insert into registration(no,fullname,email,pwd,mobile,gender,image)values('','$fullname','$email1','$pwd1','$mob','$gen','$filename')";
$exe=mysqli_query($conn,$insert);
$_SESSION['email1']=$email1;
if($exe)
{
header('location:imgpreview2.php');
$target="images/$filename";
move_uploaded_file($filetmpname,$target);

}


	

else
{
header('location:accexist.php');
mysqli_error($conn);
}

mysqli_close($conn);
?>

