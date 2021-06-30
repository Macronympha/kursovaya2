<?php
require_once 'config/connect.php';
	$login = filter_var=(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$pass = filter_var=(trim($_POST['pass']), FILTER_SANITIZE_STRING);
	header('url=../index.php');


$result=mysqli_query($connect,"SELECT * FROM `users` WHERE `login`='$login' AND `pass`='$pass'");

?>