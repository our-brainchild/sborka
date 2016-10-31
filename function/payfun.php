<?php
session_start();
require_once "../lib/functions.php";
connectDB();
$error = dont_Show_Pay_User($_GET['id_pay']);
if(!$error){
  $_SESSION['ERROR_SHOW_PAY'] = 1;
  closeDB();
  header("Location: ".$_SERVER["HTTP_REFERER"]);
  exit;
}else{
  closeDB();
  header("Location: ".$_SERVER["HTTP_REFERER"]);
  exit;
}

closeDB();
header("Location: ".$_SERVER["HTTP_REFERER"]);
 ?>
