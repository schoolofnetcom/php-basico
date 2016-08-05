<?php 
session_start();

$login = "admin";
$password = "12345";

if($login == "admin" && $password == "12345"){
	$_SESSION['login'] = true;
	echo "Success!";
}else{
	echo "Error!";
}

?>

<a href="session/secret.php">Get in</a>