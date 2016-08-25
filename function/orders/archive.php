<?php
  session_start();
  require_once "../../lib/functions.php";
  connectDB();
  if(!moveItem_For_Shopping_History_to_archive($_GET['id_h_s'],$_SESSION['id'])){
    $_SESSION['error_move_h_s']=1;
  }
  closeDB();
  header("Location: ".$_SERVER["HTTP_REFERER"]);
?>
