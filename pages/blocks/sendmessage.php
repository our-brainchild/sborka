<?php
  session_start();
  require_once "../../lib/functions.php";
  connectDB();
  if(is_null($length_h_s['MAX(`id_chat`)'])){
    $id_chat = 0;
  }else{
    $id_chat = $length_h_s['MAX(`id_chat`)'];
  }
  $id_chat++;
  $succes = addMessageForDB($id_chat,$_SESSION['id'], $_POST['type'], $_POST['textmessage'],date("Y-m-d H:i:s"));
  closeDB();
  header("Location: ".$_SERVER["HTTP_REFERER"]);
  exit;
?>
