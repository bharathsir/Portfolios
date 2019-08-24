<?php

session_start();


$email=md5($_SESSION['email']);
$item=$_POST['order'];
$select=$_POST['select1'];
$rate=$_POST['rate'];
$filename=$_POST['poster'];




$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"gmail");
$insert="insert into orderst(no,email,name,weight,rate,poster)values('','$email','$item','$select','$rate','$filename')";
$exe=mysqli_query($conn,$insert);

if($exe)
{
header('location:more_festive.php');
$target="images/$filename";
move_uploaded_file($filetmpname,$target);



}


	

else
{
mysqli_error($conn);
}

mysqli_close($conn);
?>
<?php

if($email=="")
{
session_destroy();
header('location:festivearrives.php');
}

?>

