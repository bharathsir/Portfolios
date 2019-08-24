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
	<style type="text/css">
	* 
	{
	margin:0px;
padding:0px;
	
	}
.card	
{
width:350px;
height:350px;	
opacity:0.8;
border-radius:15px;
}
	input:hover
	{
	
	box-shadow: 0 10px 60px 10px rgba(0, 0, 0, 0.5), 0 6px 20px 0
	
	}
	.input
	{
		border-radius:15px;	
		width:250px;
		height:50px;

	}
	@keyframes example 
	{
  0%   {
	  background-image:url(images/chikis.jpg);
	  background-size:cover;
	  }
  
  25%  {
	  background-image:url(images/laddus.jpg);
	  background-size:cover;
	  }
  50%  {
	  background-image:url(images/karois.jpg);
	  background-size:cover;
	  }
  100% {
	  background-image:url(images/cups.jpg);
	  background-size:cover;
	  }
}

.bg-wallpaper
{
  
  
  animation-name:example;
  animation-duration:30s;
  animation-iteration-count:infinite;
  
}

	</style>
</head>
<body class="bg-wallpaper">
<br />
<br />
<br />
<br />
<br />


	<div align="center" class="text-white">
	<div class="card  bg-dark">
	<form action="festivearrives.php" method="post"  enctype="multipart/form-data">
	<table>
	<i class="fas fa-cookie-bite text-warning ml-2"></i><i class="fas fa-cookie-bite text-warning ml-2"></i><i class="fas  text-warning fa-cookie-bite ml-2"></i>
	<tr><td>
	<h2>Festive Arrives Login</h2>
	</td></tr>
	<br />
	<br />
	<br />
	<tr>
	<th>Email or Phone</th>
	</tr>
	<tr>
	<td><input type="email" class="input"  name="email" placeholder="Email" required/></td>
	</tr>
	<tr>
	<th>Password</th>
	</tr>
	<tr>
	<td><input type="password" class="input" name="pwd" placeholder="Password" required/></td>
	</tr>
	
	
	
	
</table>
<br />
<button  type="submit" class="btn btn bg-warning">Login</button>
	</form>
	
	
</div>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</body>
</html>