<?php
	require_once "../start.php";
	$login=htmlspecialchars($_POST["login"]);
	$password=htmlspecialchars($_POST["password"]);
	$password=md5($password);
	if(checkUser($login, $password)){
	$_SESSION["login"]=$login;
	$_SESSION["password"]=$password;
	//SELECT DISTINCT login FROM users WHERE `login`='$login' AND `password`='$password'
	$result=$mysqli->query("SELECT * FROM user WHERE `login`='$login' AND `password_user`='$password' ");
	$row=$result->fetch_assoc();
	$_SESSION["email"]=$row["email"];
	$_SESSION["id"]=$row["id_user"];
	}
	else $_SESSION["error_auth"]=1;
	header("Location: ".$_SERVER["HTTP_REFERER"]);
	exit;
?>
