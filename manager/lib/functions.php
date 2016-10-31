<?php
$mysqli = false;
function connectDB(){
  global $mysqli;
  $mysqli = new mysqli("localhost","root","","asprint_sborka");
  $mysqli->query("SET NAMES 'utf8'");
}
function closeDB(){
  global $mysqli;
  $mysqli->close();
}
function resultSetToArray($result_set){
    //Вспомогательная функция для возвпращении массива нумерованного с записями.
    $array = array();
    while (($row = $result_set->fetch_assoc()) != false)
      $array[]=$row;
    return $array;
  }
function selectHistory_Shoping_All($arhive){
  global $mysqli;
  $result = $mysqli -> query("SELECT `email_user`,`name_user`,`lastname_user`,`login`,`id_history_shopping`,
    `id_client_h_s`,`name_i_t_h_s`,`coloration_h_s`,`face_image_h_s`,`reverse_h_s`,`folding_h_s`,`creasing_h_s`,`dop_rez_h_s`,
    `hole_h_s`,`numbering_h_s`,`perforation_h_s`,`rounding_h_s`,`type_shipping_h_s`,`place_shipping_h_s`,`cost_h_s`,
    `comments_for_order_h_s`,`id_item_type_h_s`,`order_status_h_s`,`name_order_h_s`,`dop_info_h_s`,`circulation_h_s`,
    `time_h_s`,`arhive_h_s`,`type_print_h_s`
    FROM
    `history_shopping`
    INNER JOIN
    `user`
    ON `user`.`id_user` = `history_shopping`.`id_client_h_s`
    WHERE `history_shopping`.`arhive_h_s` = '$arhive'");
  return resultSetToArray($result);
}
function changeStatusOrder($id_h_s, $status){
  global $mysqli;
   $success = $mysqli->query("UPDATE history_shopping SET `order_status_h_s` = '$status' WHERE `id_history_shopping`='$id_h_s'");
   return $success;
}

function selectHistory_Pay(){
  global $mysqli;
  $result = $mysqli -> query("SELECT `email_user`,`name_user`,`lastname_user`,`login`,`id_pay`,
    `id_client`,`type_pay`,`who_pay`,`sum`,`description`,`img_pay`,`no_show_manager`,`confirmation_pay`
    FROM
    `history_pay`
    INNER JOIN
    `user`
    ON `user`.`id_user` = `history_pay`.`id_client`");
  return resultSetToArray($result);
}
function getArrayClient($id){
  //I don't know why this function, but it's function return All Client
    global $mysqli;
    $result_set = $mysqli -> query("SELECT * FROM `client` WHERE `id_client` = '$id'");
    return $result_set -> fetch_assoc();
}
function changeStatus_Pay($id_h_pay,$id_client,$sum){
    global $mysqli;
    $one = 1;
    $success1 = $mysqli->query("UPDATE history_pay SET `confirmation_pay` = '$one' WHERE `id_pay`='$id_h_pay'");
    $info = getArrayClient($id_client);
    $sum = $sum +  $info['score_client'];
    $success2 = $mysqli->query("UPDATE client SET `score_client` = '$sum' WHERE `id_client`='$id_client'");
    return $success1 && $success2;
}
function dont_Show_Pay_Manager($id_h_pay){
    global $mysqli;
    $one = 1;
    $success = $mysqli->query("UPDATE `history_pay` SET `no_show_manager` = '$one' WHERE `id_pay`='$id_h_pay' AND `confirmation_pay`='$one'");
    return $success;
}
function dont_Show_Pay_User($id_h_pay){
    global $mysqli;
    $one = 1;
    $success = $mysqli->query("UPDATE `history_pay` SET `no_show_user` = '$one' WHERE `id_pay`='$id_h_pay' AND `confirmation_pay`='$one'");
    return $success;
}

function selectHistory_Pay_Id($id_h_pay){
  global $mysqli;
  $result = $mysqli -> query("SELECT * FROM `history_pay` WHERE `id_pat` = '$id_h_pay'");
    return $result -> fetch_assoc();
}
function checkUserManager($nick_name,$password){
    //Проверка является ли он юзером. Аутификация пользователя по факту.
    global $mysqli;
    $result_set=$mysqli->query("SELECT COUNT(*) AS count FROM `manager` WHERE (`email_manager`='$nick_name' OR `login_manager`='$nick_name') AND `password_manager`='$password'");
    if($result_set->fetch_object()->count > 0) return true;
    else return false;
  }


?>
