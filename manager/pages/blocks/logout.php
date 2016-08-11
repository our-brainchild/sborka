<?php
	session_start();
	unset($_SESSION["email"]);
	unset($_SESSION["login"]);
  unset($_SESSION["id"]);
  unset($_SESSION["password"]);
	session_destroy();
	header("Location: ../../");
	exit;
?>
