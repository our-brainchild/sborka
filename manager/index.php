<?php
  require_once "start.php";
  if(checkUserManager($_SESSION["login_manager"],$_SESSION["password_manager"])==true){
		header("Location: pages/allorders.php");
		exit;
	}
  require_once "block/connect.php";
  require_once "block/mainindex.php";
  require_once "block/includejs.php";
  require_once "stop.php";
  unset($_SESSION);
  // Доделать
?>
