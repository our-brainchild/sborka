<?php
  require_once "start.php";
  if(checkUser($_SESSION["login"],$_SESSION["password"])==true){
		header("Location: pages/order.php");
		exit;
	}
  require_once "block/connect.php";
  require_once "block/mainindex.php";
  require_once "block/includejs.php";
  require_once "stop.php";
?>
