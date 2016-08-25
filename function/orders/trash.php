<?php
  session_start();
  require_once "../../lib/functions.php";
  connectDB();
  if(!deletItem_For_Shopping_History($_GET['id_h_s'],$_SESSION['id'])){
    $_SESSION['error_delet_h_s']=1;
  }
  closeDB();
  header("Location: ".$_SERVER["HTTP_REFERER"]);
?>
