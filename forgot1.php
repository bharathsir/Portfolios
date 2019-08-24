
<?php



$pwd=$_POST['pass'];

include("dbcon1.php");



$sql="update admint
set  pwd='$pwd'
 ";

$res=mysqli_query($con,$sql);

if($res)
header('Location:psdc.html');
else
echo mysqli_error($con);
?>
















<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</body>
</html>