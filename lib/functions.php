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
function addUser($email,$login,$name,$surname,$agent,$maintelephone,$password,$agency){
  global $mysqli;
  $success = $mysqli->query("INSERT INTO `users` (`email`, `login`, `name`, `surname`, `nameagent`, `maintelephone`, `password`, `agency`) VALUES ('$email','$login','$name','$surname','$agent','$maintelephone','$password','$agency') ");
  return $success;
}

function pushUser($email, $login, $password, $name, $lastname, $maintelephone, $name_organization){
  global $mysqli;
  $success_first = $mysqli->query("INSERT INTO `user` (`email_user`, `login`, `password_user`, `name_user`, `lastname_user`) VALUES ('$email','$login','$password','$name','$lastname')");
  if($success_first != false){
    $id_user = $mysqli->query("SELECT `id_user` FROM user WHERE `login` = '$login' OR `email_user` = '$login' ");
    $id_user = $id_user->fetch_assoc();
    $id = $id_user[id_user];
      $success_second = $mysqli->query("INSERT INTO `client` ( `id_client`, `main_phone_number_client`, `organization_client` ) VALUES ( '$id' , '$maintelephone' , '$name_organization' )");
    return $success_first & $success_second;
  }
  return false;
}

function popUser(){
  global $mysqli;
  $success = $mysqli->query("DELETE * FROM `user` WHERE (`login` = '$login' OR `email_user` = '$login') AND `password_user` = '$password'");
  return $success;
}

function showAllItem(/*$id_item, $id_print, $id_size*/){
  global $mysqli;
  $result = $mysqli->query("SELECT `name_item`, `name_item_type`, `name_size`, `height_size`, `width_size`, `type_paper`,`name_paper_texture`,`name_paper_weight`, `name_print`
FROM
  `item_type`
  INNER JOIN
  `item`
    ON `item_type`.id_item_item_type = `item`.`id_item`
  JOIN
   `size`
   	ON 	`item_type`.`id_size_type` = `size`.`id_size`
  JOIN
  	`type_paper`
    ON `item_type`.`id_paper_type` = `type_paper`.`id_type_paper`
  JOIN
  	`print`
    ON `item_type`.`id_print_type` = `print`.`id_print`
  WHERE (`item_type`.`id_item_type` = 1 AND `item_type`.`id_print_type`=1) AND `item_type`.`id_size_type`= 1");
  return $result->fetch_assoc();
}
function selectAllPricesFromItem($id_item_type){
  global $mysqli;
  $result = $mysqli->query("SELECT `value_cost`, `size_circulation`, `id_item_type_prices`
FROM
  `prices`
  INNER JOIN
  `cost`
    ON `prices`.`id_cost` = `cost`.`id_cost`
  JOIN
   `circulation`
   	ON 	`prices`.`id_circulation_prices` = `circulation`.`id_circulation`
  WHERE `prices`.`id_item_type_prices`='$id_item_type'");
  return resultSetToArray($result);
}

function selectItem(){
  global $mysqli;
  $result = $mysqli->query("SELECT * FROM `item`");
  return resultSetToArray($result);

}

function selectAllPrint(){
  global $mysqli;
  $result = $mysqli->query("SELECT * FROM `print`");
  return resultSetToArray($result);
}

function showAllChat(){

}

function showAllMassegeInChat(){

}

function resultSetToArray($result_set){
    //Вспомогательная функция для возвпращении массива нумерованного с записями.
    $array = array();
    while (($row = $result_set->fetch_assoc()) != false)
      $array[]=$row;
    return $array;
  }

function checkUser($nick_name,$password){
    //Проверка является ли он юзером. Аутификация пользователя по факту.
    global $mysqli;
    // var_dump("SELECT COUNT(*) AS count FROM `user` WHERE (`email_user`='$nick_name' OR `login`='$nick_name') AND `password_user`='$password'");die();
    $result_set=$mysqli->query("SELECT COUNT(*) AS count FROM `user` WHERE (`email_user`='$nick_name' OR `login`='$nick_name') AND `password_user`='$password'");
    if($result_set->fetch_object()->count > 0) return true;
    else return false;
  }
function updateUser($id,$email,$name,$surname,$nameagent,$maintelephone,$agency,$notice,$city,$adress,$site,$numberIP,$positionorg){
  global $mysqli;
  $success = $mysqli->query("UPDATE user SET `email_user` = '$email', `name_user`='$name',`lastname_user`='$surname' WHERE `id_user`='$id'");
  $success = $mysqli->query("UPDATE client SET `organization_client`='$nameagent',`main_phone_number_client`='$maintelephone',`notice_cliene`='$notice', `city_client`='$city',`adress_client`='$adress', `site_client`='$site',`numberIP_client`='$numberIP',`post_client`='$positionorg' WHERE `id_client`='$id'");
  return $success;
}
function updatePass($id,$oldpass,$pass){
  global $mysqli;
  $success = $mysqli->query("UPDATE user SET `password_user`='$pass' WHERE `id_user`='$id' AND `password_user`='$oldpass'");
  return $success;
}
function getArrayClient($id){
  global $mysqli;
  $result_set = $mysqli -> query("SELECT * FROM `client` WHERE `id_client` = '$id'");
  return $result_set -> fetch_assoc();
}
?>
