<?php
	session_start();
	require_once "../lib/functions.php";
	connectDB();
	if(checkUser($_SESSION["login"],$_SESSION["password"])==false){
		header("Location: /");
		exit;
	}
?>
