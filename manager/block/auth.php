<?php
	require_once "../start.php";
	$login=htmlspecialchars($_POST["login"]);
	$password=htmlspecialchars($_POST["password"]);
	$password_md5=md5($password);
	if(true == checkUserManager($login, $password_md5)){
	$_SESSION["login_manager"]=$login;
	$_SESSION["password_manager"]=$password_md5;
	//SELECT DISTINCT login FROM users WHERE `login`='$login' AND `password`='$password'
	$result=$mysqli->query(" SELECT * FROM `manager` WHERE (`login_manager` = '$login' OR `email_manager` = '$login') AND `password_manager` = '$password_md5' ");
	$row=$result->fetch_assoc();
	$_SESSION["email_manager"]=$row["email_manager"];
	$_SESSION["id_manager"]=$row["id_manager"];
	}
	else $_SESSION["error_auth"]=1;
	header("Location: ".$_SERVER["HTTP_REFERER"]);
	exit;
?>
