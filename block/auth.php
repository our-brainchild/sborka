<?php
	require_once "../start.php";
	$login=htmlspecialchars($_POST["login"]);
	$password=htmlspecialchars($_POST["password"]);
	$password_md5=md5($password);
	if(true == checkUser($login, $password_md5)){
	$_SESSION["login"]=$login;
	$_SESSION["password"]=$password_md5;
	//SELECT DISTINCT login FROM users WHERE `login`='$login' AND `password`='$password'
	$result=$mysqli->query(" SELECT * FROM `user` WHERE (`login` = '$login' OR `email_user` = '$login') AND `password_user` = '$password_md5' ");
	$row=$result->fetch_assoc();
	$_SESSION["email"]=$row["email"];
	$_SESSION["id"]=$row["id_user"];
	$_SESSION["name_user"]=$row['name_user'];
	}
	else $_SESSION["error_auth"]=1;
	header("Location: ".$_SERVER["HTTP_REFERER"]);
	exit;
?>
