<?php 
session_start();

if($_SESSION['login']){
	echo "Secret area!";
}else{
	echo "Incorrect login!";
}
//unset($_SESSION['login']);


?>