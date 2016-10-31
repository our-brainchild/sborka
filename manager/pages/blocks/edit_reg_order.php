<?php
  session_start();
  require_once "../../lib/functions.php";
  connectDB();
  $uploadfile_1 = $_SESSION['path_file_1'];
  $uploadfile_2 = $_SESSION['path_file_2'];
  unlink("../../".$uploadfile_1);
  unlink("../../".$uploadfile_2);
  $succes = updateItem_For_Shoping_History($_POST['dop_information'],$_POST['comments'],$_POST['type_shipping'],
  $_POST['city_shipping']." ".$_POST['steet_shipping'],$_SESSION['id_item_type'],$_SESSION['id']);
  $s_f_1 = move_uploaded_file($_FILES['file_face']['tmp_name'], "../../".$uploadfile_1);
  $s_f_2 = move_uploaded_file($_FILES['file_face2']['tmp_name'], "../../".$uploadfile_2);
  unset($_SESSION['id_item_type']);
  unset($_SESSION['path_file_1']);
  unset($_SESSION['path_file_2']);
  if(!$succes){
    closeDB();
    header("Location: ".$_SERVER["HTTP_REFERER"]);
  }
  closeDB();
  header("Location: http://asprint.lol/pages/order.php");
//header("Location: ".$_SERVER["HTTP_REFERER"]);
//exit;
// var_dump($_POST['name_order'],$_POST['options_color'],$_POST['file_face'],$_POST['file_revers'],$_POST['select_folding'],$_POST['select_folding']);
 // var_dump($_FILES['file_face']['name'],$_FILES['file_face']['size'],$_FILES['file_face']['type'],$_FILES['file_face']['tmp_name']);
?>
