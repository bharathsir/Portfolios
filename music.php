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
	
	
	
</head>
<style type="text/css">
*
{
margin:0px;
padding:0px;
}
.main_background
{
background-image:url(images/violin-1906127_1920.jpg);
background-repeat:no-repeat;
background-size:cover;

}
.button1
{
border-radius:20px;
}
.button_center
{
margin-top:10%;
}
.input1
{
width:150%;
height:40px;
border-radius:15px ;
border-color:yellow;

}
</style>
<script type="text/javascript">

$(function(){
	
	
	$('.login_section').hide();
	
	
	$('.login_btn').click(function(){
	$('.login_btn').hide();
	$('.signup_btn').show();
	$('.login_section').show(350);
	$('.signup_section').hide(350);
	
	
	
	
	
	
	});
	});



$(function(){
	
	
	$('.login_section').hide();
	$('.signup_section').hide();
	
	$('.signup_btn').click(function(){
	$('.login_btn').show();
	$('.signup_btn').hide();
	$('.login_section').hide(350);
	$('.signup_section').show(350);
	
	
	
	
	
	
	
	});
	});



</script>
<body class="main_background" >
	
	
	<div align="center " class="button_center" >
	<table class="mx-auto">
	<tr>
	<td >
<button class="btn btn-secondary button1 login_btn">Login</button>	
</td>


<td>
	<button class="btn btn-warning button1 signup_btn ml-3">Sign up</button>	
	</td>
	</tr>
	</table>
	</div>
	
	
	<div align="center" class="login_section logintop" >
	<form action="music_login.php" method="post" enctype="multipart/form-data">
	<table>
	<tr>
	<td>
	<h6 class="text-white">
	Username
	</h6>
	</td>
	
	</tr>
	<tr>
	<td>
	<input type="text" class="input1" name="email" required />
	</td>
	
	</tr>
	<tr>
	<td>
	<h6 class="text-white">
	Password
	</h6>
	</td>
	
	</tr>
	<tr>
	<td>
	<input type="password"  class="input1" name="pwd"  required/>
	</td>
	
	</tr>
	
	<tr>
	<td>
	<br />
	<button class="btn btn-secondary button1">Login</button>	
	</td>
	
	</tr>
	
	
	</table>
	
	
	</form>
	</div>
	
	<div align="center" class="signup_section">
	<form action="music_signup.php" method="post" enctype="multipart/form-data">
	<table>
	<tr>
	<td>
	<h6 class="text-white">
	Mobile 
	</h6>
	</td>
	
	</tr>
	<tr>
	<td>
	<input type="text" class="input1" required />
	</td>
	
	</tr>
	<tr>
	<td>
	<h6 class="text-white">
	 Create Password
	</h6>
	</td>
	
	</tr>
	<tr>
	<td>
	<input type="text" class="input1" required  />
	</td>
	
	</tr>
	
	<tr>
	<td>
	<h6 class="text-white">
	 Confirm Password
	</h6>
	</td>
	
	</tr>
	<tr>
	<td>
	<input type="text" class="input1" required />
	</td>
	
	</tr>
	
	<tr>
	<td>
	<br />
<button class="btn btn-warning button1 ">Sign up</button>
	</td>
	</tr>
	
	
	</table>
	
	
	</form>
	</div>
	
</body>
</html>