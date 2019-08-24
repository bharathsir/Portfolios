<?php
session_start();
session_destroy();
header('location:festive_login.php');

?>