<?php
$server="localhost"; 
$user="macronympha"; 
$pass="passw0rd"; 
$db="pet_shop"; 
mysql_connect($server, $user, $pass) or die("Sorry, can't connect to the mysql."); 
mysql_select_db($db) or die("Sorry, can't select the database."); 
?>