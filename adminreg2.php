<?php

session_start();


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$fullname=$fname.".".$lname;
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$filename=$_FILES['image']['name'];
$filetmpname=$_FILES['image']['tmp_name'];












$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"admin");
$insert="insert into admint(no,fullname,email,pwd,image)values('','$fullname','$email','$pwd','$filename')";
$exe=mysqli_query($conn,$insert);
$_SESSION['email']=$email;
if($exe)
{
$target="images/$filename";
move_uploaded_file($filename,$target);
header('location:regsuccess.php');
}
else
{
echo "Account Creation Failed:". mysqli_error($conn);
}

mysqli_close($conn);
?>

