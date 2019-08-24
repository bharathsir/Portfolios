<?php
session_start();
$email=$_SESSION['email'];
$_SESSION['email']=$email;
$card=$_POST['card'];
$cvv=$_POST['cvv'];
$month=$_POST['month'];
$card1=$_POST['card1'];
$cvv1=$_POST['cvv1'];
$month1=$_POST['month1'];
$card2=$_POST['card2'];
$cvv2=$_POST['cvv2'];
$month2=$_POST['month2'];
$filename1=$_FILES['image1']['name'];
$filetmpname1=$_FILES['image1']['tmp_name'];
$filename2=$_FILES['image2']['name'];
$filetmpname2=$_FILES['image2']['tmp_name'];
$filename3=$_FILES['image3']['name'];
$filetmpname3=$_FILES['image3']['tmp_name'];
$filename4=$_FILES['image4']['name'];
$filetmpname4=$_FILES['image4']['tmp_name'];
$filename5=$_FILES['image5']['name'];
$filetmpname5=$_FILES['image5']['tmp_name'];
$mobile2=$_POST['mobile2'];
$email2=$_POST['email2'];
$dob=$_POST['dob'];
$martial=$_POST['martial'];
$age=$_POST['age'];
include_once("dbcon.php");

$update="update registration
set cvv1='$cvv1',martial='$martial',age='$age', month1='$month1',card1='$card1',cvv2='$cvv2', month2='$month2',card2='$card2',image1='$filename1',mobile2='$mobile2',email2='$email2', cvv='$cvv', month='$month',card='$card', dob='$dob',image2='$filename2',image3='$filename3',image4='$filename4',image5='$filename5'
where email='$email' ";

$result=mysqli_query($con,$update);

if($result)
{
header('location:updated.php');
$target1="images/$filename1";
$target2="images/$filename2";
$target3="images/$filename3";
$target4="images/$filename4";
$target5="images/$filename5";
move_uploaded_file($filetmpname1,$target1);
move_uploaded_file($filetmpname2,$target2);
move_uploaded_file($filetmpname2,$target3);
move_uploaded_file($filetmpname3,$target4);
move_uploaded_file($filetmpname4,$target5);
}

else
echo mysqli_error($con);




?>