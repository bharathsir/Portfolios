<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css2/bootstrap.css" />
	<script src="js/jquery.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	
	
	<script type="text/javascript">
	function myfun()
	{
	var pass=document.getElementById('t1').value;
	var pass1=document.getElementById('t2').value;
	if(pass=="")
	{
	document.getElementById('res1').innerHTML="Enter New Password";
	document.getElementById('res1').style.color="red";
	return false
	}
	else
	{
	document.getElementById('res1').innerHTML="";
	}
	
if(pass1=="")
	{
	document.getElementById('res2').innerHTML="Re-Enter Password";
	document.getElementById('res2').style.color="red";
	return false
	}
	else
	{
	document.getElementById('res2').innerHTML="";
	}
	if(pass!=pass1)
	{
	document.getElementById('res3').innerHTML="Password not Matched";
	document.getElementById('res3').style.color="red";
	return false
	}
	else
	{
	document.getElementById('res3').innerHTML="";
	}
	
	
	
	
	
	
	
	
		
	}
	
	
	
	
	
	
	</script>
	
	
	
	
</head>
<body>



<div class="card">
<form action="forgot1.php" onclick="return myfun()" method="post">
<table>
<tr>
	<th>Create a Password</th>


</tr>
<tr>
<td><input type="password" class="box"   name="pass" id="t1"/></td>
<span id="res1"></span>

<tr>
	<th>Re-enter Password</th>


</tr>
<tr>
<td><input type="password" class="box" name="pass1" id="t2" /></td>

<span id="res2"></span>
<td><h6><a href="forgot.php"  onclick="return myfun()">Forgot Password? </h6></a></td></tr>




<tr>
<td><input type="submit" value="Login" class="btn-danger text-white" onclick="myfun()"/></td>
<span id="res3"></span>
</tr>












</table>
</form>
</div>





</body>
</html>