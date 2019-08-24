<?php
define('host','localhost');
define('username','root');
define('pwd','');

$con=mysqli_connect(host,username,pwd);
mysqli_select_db($con,"gmail");
?>