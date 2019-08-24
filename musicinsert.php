<?php

session_start();


$movie=$_POST['moviename'];

$filename=$_FILES['poster']['name'];		
$filetype=$_FILES['poster']['type'];		
$filetmpname=$_FILES['poster']['tmp_name'];

$song1=$_POST['song1'];		
$song2=$_POST['song2'];		
$song3=$_POST['song3'];		
$song4=$_POST['song4'];		
$song5=$_POST['song5'];		
$song6=$_POST['song6'];		










$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"gmail");
$insert="insert into musicb(no,movie,poster,song1,song2,song3,song4,song5,song6,song7,song8,song9,song10)values('','$movie','$filename','$song1','$song2','$song3','$song4','$song5','$song6','$song7','$song8','$song9','$song10')";
$exe=mysqli_query($conn,$insert);

if($exe)
{
header('location:musicadmin.php');
$target="images/$filename";
move_uploaded_file($filetmpname,$target);



}


	

else
{
mysqli_error($conn);
}

mysqli_close($conn);
?>

