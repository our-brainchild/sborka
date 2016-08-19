<?php
$mysqli = false;
function connectDB(){
  global $mysqli;
  $mysqli = new mysqli("localhost","root","","asprint_sborka");
  $mysqli->query("SET NAMES 'utf8'");
}
function closeDB(){
  //Connect Base Data
  global $mysqli;
  $mysqli->close();
}

function pushUser($email, $login, $password, $name, $lastname, $maintelephone, $name_organization){
  //Create new User-Client
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
  //Delet User
  global $mysqli;
  $success = $mysqli->query("DELETE * FROM `user` WHERE (`login` = '$login' OR `email_user` = '$login') AND `password_user` = '$password'");
  return $success;
}

function showAllItem($id_item, $id_print){
  //Select All Information for Item from Data Base at type_print and type_item
  global $mysqli;
  $result = $mysqli->query("SELECT `name_item`, `name_item_type`, `name_size`, `height_size`, `width_size`, `type_paper`,`name_paper_texture`,`name_paper_weight`, `name_print`, `id_item_type`
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
  WHERE `item_type`.`id_item_item_type` = '$id_item' AND `item_type`.`id_print_type`='$id_print' ");
  return resultSetToArray($result);
}
function selectAllPricesFromItem($id_item_type){
  //Select All cost and circulation from Data Base
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

function selectItem($id_print_type){
  //Select All Item from Data Base at type_print
  global $mysqli;
  $result = $mysqli->query("SELECT DISTINCT `name_item`, `img_item`, `id_item`
FROM
  `item_type`
   JOIN
  `item`
    ON `item_type`.id_item_item_type = `item`.`id_item`
 WHERE `item_type`.`id_print_type`='$id_print_type' ");
  return resultSetToArray($result);

}

function selectAllPrint(){
  //Select All type_print from Data Base
  global $mysqli;
  $result = $mysqli->query("SELECT * FROM `print`");
  return resultSetToArray($result);
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
    $result_set=$mysqli->query("SELECT COUNT(*) AS count FROM `user` WHERE (`email_user`='$nick_name' OR `login`='$nick_name') AND `password_user`='$password'");
    if($result_set->fetch_object()->count > 0) return true;
    else return false;
  }
function updateUser($id,$email,$name,$surname,$nameagent,$maintelephone,$agency,$notice,$city,$adress,$site,$numberIP,$positionorg){
  //Update Information for User in Data Base
  global $mysqli;
  $success = $mysqli->query("UPDATE user SET `email_user` = '$email', `name_user`='$name',`lastname_user`='$surname' WHERE `id_user`='$id'");
  $success = $mysqli->query("UPDATE client SET `organization_client`='$nameagent',`main_phone_number_client`='$maintelephone',`notice_cliene`='$notice', `city_client`='$city',`adress_client`='$adress', `site_client`='$site',`numberIP_client`='$numberIP',`post_client`='$positionorg' WHERE `id_client`='$id'");
  return $success;
}
function updatePass($id,$oldpass,$pass){
  //Update password for user in Data Base
  global $mysqli;
  $success = $mysqli->query("UPDATE user SET `password_user`='$pass' WHERE `id_user`='$id' AND `password_user`='$oldpass'");
  return $success;
}
function getArrayClient($id){
  //I don't know why this function, but it's function return All Client
  global $mysqli;
  $result_set = $mysqli -> query("SELECT * FROM `client` WHERE `id_client` = '$id'");
  return $result_set -> fetch_assoc();
}

//Below are the function for CREATING_TOVARD! Warning!!! It's very important!

function selectCreasing($id_item){
  global $mysqli;
  $result = $mysqli -> query("SELECT `name_creasing` FROM `array_creasing`
    INNER JOIN
    `creasing`
    ON
    `creasing`.`id_creasing` = `array_creasing`.`id_creasing_array_creasing`
    WHERE `id_item_type_array_creasing`='$id_item'");
    if($result == NULL){
      return false;
    }else{
      return resultSetToArray($result);
    }
}
function selectDop_Rez($id_item){
  global $mysqli;
  $result = $mysqli -> query("SELECT `name_dop_rez` FROM `array_dop_rez`
    INNER JOIN
    `dop_rez`
    ON
    `dop_rez`.`id_dop_rez` = `array_dop_rez`.`id_dop_rez_array_dop_rez`
    WHERE `id_item_type_array_dop_rez`='$id_item'");
    if($result == NULL){
      return false;
    }else{
      return resultSetToArray($result);
    }
}
function selectFolding($id_item){
  global $mysqli;
  $result = $mysqli -> query("SELECT `name_folding` FROM `array_folding`
    INNER JOIN
    `folding`
    ON
    `folding`.`id_folding` = `array_folding`.`id_folding_array_folding`
    WHERE `id_item_type_array_folding`='$id_item'");
    if($result == NULL){
      return false;
    }else{
      return resultSetToArray($result);
    }
}
function selectHole($id_item){
  global $mysqli;
  $result = $mysqli -> query("SELECT `name_hole` FROM `array_hole`
    INNER JOIN
    `hole`
    ON
    `hole`.`id_hole` = `array_hole`.`id_hole_array_hole`
    WHERE `id_item_type_array_hole`='$id_item'");
    if($result == NULL){
      return false;
    }else{
      return resultSetToArray($result);
    }
}
function selectNumbering($id_item){
  global $mysqli;
  $result = $mysqli -> query("SELECT `name_numbering` FROM `array_numbering`
    INNER JOIN
    `numbering`
    ON
    `numbering`.`id_numbering` = `array_numbering`.`id_numbering_array_numbering`
    WHERE `id_item_type_array_numbering`='$id_item'");
    if($result == NULL){
      return false;
    }else{
      return resultSetToArray($result);
    }
}
function selectPerforation($id_item){
  global $mysqli;
  $result = $mysqli -> query("SELECT `name_perforation` FROM `array_perforation`
    INNER JOIN
    `perforation`
    ON
    `perforation`.`id_perforation` = `array_perforation`.`id_perforation_array_perforation`
    WHERE `id_item_type_array_perforation`='$id_item'");
    //var_dump($result);die();
    if($result == NULL){
      return false;
    }else{
      return resultSetToArray($result);
    }
}
function selectInformationForItem($id_item){
  global $mysqli;
  $result = $mysqli -> query("SELECT `name_item_type`, `rounding`, `side_item_type` FROM `item_type` WHERE `id_item_type`='$id_item'");
  return $result -> fetch_assoc();
}
?>
