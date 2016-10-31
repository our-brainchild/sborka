<?php
session_start();
require_once "../../lib/functions.php";
connectDB();
$length_h_s = lengthHistory_Pay();
if($length_h_s){
  $length_h_s = $length_h_s['MAX(`id_pay`)']+1;
}else{
  $length_h_s = 1;
}
$uploadfile_1 = "../../public/images/pay/".$length_h_s."_".$_SESSION['id'].".png";
$s_f_1 = move_uploaded_file($_FILES['img_pay']['tmp_name'], $uploadfile_1);
if($s_f_1){
  $path_f_1 = "public/images/pay/".$length_h_s."_".$_SESSION['id'].".png";
}else{
  $path_f_1 = -1;
}
$success = add_pay($_SESSION["id"],$_POST["type_pay"],$_POST["who_pay"],$_POST["sum"],$_POST["description"],$path_f_1);
closeDB();
header("Location: ".$_SERVER["HTTP_REFERER"]);
 ?>
