<?php
  session_start();
  require_once "../../lib/functions.php";
  connectDB();
  if(changeStatusOrder($_GET['id_h_s'],$_GET['status'])){
    $_SESSION['error_change_status_h_s']=1;
  }
  closeDB();
  header("Location: ".$_SERVER["HTTP_REFERER"]);
  exit;
  ?>
