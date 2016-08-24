<?php
  session_start();
  require_once "../../lib/functions.php";
  connectDB();
  $length_h_s = lengthHistory_Shoping();
  $length_h_s = $length_h_s['MAX(`id_history_shopping`)']+1;
  $uploadfile_1 = "../../public/images/".$length_h_s."_1.png";
  $uploadfile_2 = "../../public/images/".$length_h_s."_2.png";
  $price = $_SESSION['prices'];
  $size_circulation = $_SESSION['creasing'];
  if(($_POST['checkbox_rounding'])=='on'){
    $rounding = 1;
  }else{
    $rounding = 0;
  }
// var_dump( ((150*$rounding)*($size_circulation/1000))
// +
// (($_POST['select_dop_rez']*50)*($size_circulation/1000))
// +
// (($_POST['select_hole']*200)*($size_circulation/1000))
// +
// (($_POST['select_folding']*0.1)*$size_circulation)
// +
// (($_POST['select_perforation']*0.2)*$size_circulation)
// +
// (($_POST['select_numbering']*0.4)*$size_circulation)
// +
// ((0.5*$_POST['select_creasing'])*$size_circulation)+$price);
//

  $cost = ((150*$rounding)*($size_circulation/1000))
  +
  (($_POST['dop_rez']*50)*($size_circulation/1000))
  +
  (($_POST['select_hole']*200)*($size_circulation/1000))
  +
  (($_POST['select_folding']*0.1)*$size_circulation)
  +
  (($_POST['select_perforation']*0.2)*$size_circulation)
  +
  (($_POST['select_numbering']*0.4)*$size_circulation)
  +
  ((0.5*$_POST['select_creasing'])*$size_circulation)+$price;
// var_dump($_POST['checkbox_rounding']);
// var_dump($_POST['type_shipping']);

  $s_f_1 = move_uploaded_file($_FILES['file_face']['tmp_name'], $uploadfile_1);
  $s_f_2 = move_uploaded_file($_FILES['file_revers']['tmp_name'], $uploadfile_2);
  if($s_f_1){
    $path_f_1 = "public/images/".$length_h_s."_1.png";
  }else{
    $path_f_1 = -1;
  }
  if($s_f_2){
    $path_f_2 = "public/images/".$length_h_s."_1.png";
  }else{
    $path_f_2 = -1;
  }
  $example = date ("H:m:s \m \i\s \m\o\n\t\h");
  $succes = insertHistory_Shopping($_SESSION['id'],$_SESSION['name_item'],$_POST['options_color'],$path_f_1,$path_f_2,$_POST['select_folding'],
  $_POST['select_creasing'],$_POST['select_dop_rez'],$_POST['select_hole'],$_POST['select_numbering'],$_POST['select_perforation'],
  $rounding,$_POST['type_shipping'],$_POST['city_shipping']." ".$_POST['steet_shipping'],$cost,$_POST['comments'],$_SESSION['id_item_type'],0,$_POST['name_order'],$_POST['dop_information'],$size_circulation,date("Y-m-d H:i:s"));
  unset($_SESSION['id_item_type']);
  unset($_SESSION['prices']);
  unset($_SESSION['creasing']);
  unset($_SESSION['name_item']);
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
