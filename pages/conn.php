<?php  

$sname = "eu-cdbr-west-03.cleardb.net";
$uname = "bb0008fa13895e";
$password = "855e553e";
$db_name = "heroku_86d27cbc62bff9e";
$conn  = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
} 


