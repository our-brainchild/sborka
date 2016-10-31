<?php
session_start();
require_once "../../lib/functions.php";
connectDB();
$error = changeStatus_Pay($_GET['id_pay'],$_GET['id_client'],$_GET['sum']);
if(!$error){
  $_SESSION['ERROR_C_PAY'] = 1;
  closeDB();
  header("Location: ".$_SERVER["HTTP_REFERER"]);
  exit;
}else{
  closeDB();
  header("Location: ".$_SERVER["HTTP_REFERER"]);
  exit;
}
 ?>
