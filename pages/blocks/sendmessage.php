<?php
  session_start();
  require_once "../../lib/functions.php";
  connectDB();
  $succes = addMessageForDB($_SESSION['id'], 25, $_POST['textmessage'], $_GET['id_chat']);
  closeDB();
  header("Location: ".$_SERVER["HTTP_REFERER"]);
  exit;
?>
