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
  $result = $mysqli->query("SELECT `value_cost`, `size_circulation`, `id_item_type_prices`,`id_circulation`
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
function selectCostItem($id_item, $circulation){
  global $mysqli;
  $result = $mysqli -> query("SELECT `value_cost` FROM `prices` INNER JOIN `cost` ON `prices`.`id_cost`=`cost`.`id_cost` WHERE `prices`.`id_item_type_prices`='$id_item' AND `prices`.`id_circulation_prices`='$circulation'");
  return $result -> fetch_assoc();
}


function insertHistory_Shopping($id_client,$name_i_t,$options_color,$path_fase_img,$path_revers_img,$select_folding,
  $select_creasing,$select_dop_rez,$select_hole,$select_numbering,$select_perforation,
  $checkbox_rounding,$type_shipping,$place_shipping,$cost,$comment,$id_item_type,$order_status,$name_order,$dop_info,$circulation,$time,$type_print_h_s){
  global $mysqli;
  $result = $mysqli -> query("INSERT INTO `history_shopping`
  ( `id_client_h_s`, `name_i_t_h_s`, `coloration_h_s`,
    `face_image_h_s`, `reverse_h_s`, `folding_h_s`,
    `creasing_h_s`, `dop_rez_h_s`, `hole_h_s`,
    `numbering_h_s`, `perforation_h_s`, `rounding_h_s`,
    `type_shipping_h_s`, `place_shipping_h_s`, `cost_h_s`,
    `comments_for_order_h_s`, `id_item_type_h_s`, `order_status_h_s`,
    `name_order_h_s`, `dop_info_h_s`, `circulation_h_s`,`time_h_s`,`type_print_h_s`)
  VALUES
  ( '$id_client', '$name_i_t','$options_color',
    '$path_fase_img','$path_revers_img','$select_folding',
    '$select_creasing','$select_dop_rez','$select_hole',
    '$select_numbering','$select_perforation','$checkbox_rounding',
    '$type_shipping','$place_shipping','$cost',
    '$comment','$id_item_type','$order_status',
    '$name_order', '$dop_info', '$circulation','$time','$type_print_h_s')");
    return $result;
}
  function lengthHistory_Shoping(){
    global $mysqli;
    $result = $mysqli -> query("SELECT MAX(`id_history_shopping`) FROM `history_shopping` ");
    return $result -> fetch_assoc();
  }

  function lengthHistory_Pay(){
    global $mysqli;
    $result = $mysqli -> query("SELECT MAX(`id_pay`) FROM `history_pay` ");
    return $result -> fetch_assoc();
  }

  function selectHistory_Shoping_For_User($id,$arhive){
    global $mysqli;
    $result = $mysqli -> query("SELECT * FROM `history_shopping` WHERE `id_client_h_s`='$id' AND `arhive_h_s`='$arhive'");
    return resultSetToArray($result);
  }

  function selectHistory_Shoping_All($arhive){
    global $mysqli;
    $result = $mysqli -> query("SELECT * FROM `history_shopping` WHERE `arhive_h_s`='$arhive'");
    return resultSetToArray($result);
  }
  function selectType_Print_For_item($id_item){
    global $mysqli;
    $result = $mysqli -> query("SELECT `name_print` FROM `item_type` INNER JOIN `print` ON `item_type`.`id_print_type`=`print`.`id_print` WHERE `item_type`.`id_item_type`='$id_item'");
    return $result -> fetch_assoc();
  }
  function deletItem_For_Shopping_History($id_history_shopping,$id_client){
    global $mysqli;
    $result = $mysqli -> query("DELETE FROM `history_shopping` WHERE `id_history_shopping`='$id_history_shopping' AND `id_client_h_s`='$id_client'");
    return $result;
  }
  function moveItem_For_Shopping_History_to_archive($id_history_shopping,$id_client){
    global $mysqli;
    $result = $mysqli -> query("UPDATE `history_shopping` SET `arhive_h_s`='1' WHERE `id_history_shopping`='$id_history_shopping' AND `id_client_h_s`='$id_client'");
    return $result;
  }
  function selectH_S_ID($id,$id_history_shopping){
    global $mysqli;
    $result = $mysqli -> query("SELECT * FROM `history_shopping` WHERE `id_client_h_s`='$id' AND `id_history_shopping`='$id_history_shopping'");
    return $result -> fetch_assoc();
  }

  function updateItem_For_Shoping_History($dop_info,$comments,$type_shipping,$place_shipping,$id_h_s,$id_client){
    global $mysqli;
    $result = $mysqli -> query("UPDATE `history_shopping` SET `dop_info_h_s`='$dop_info', `comments_for_order_h_s`='$comments', `type_shipping_h_s`='$type_shipping', `place_shipping_h_s`='$place_shipping' WHERE `id_history_shopping`='$id_h_s' AND `id_client_h_s`='$id_client'");
    return $result;
  }


  function add_pay($id_user, $type_pay, $who_pay, $sum, $description, $img_pay){
    global $mysqli;
    $success = $mysqli->query("INSERT INTO `history_pay`(`id_client`, `type_pay`, `who_pay`, `sum`, `description`, `img_pay`) VALUES ('$id_user', '$type_pay', '$who_pay', '$sum', '$description', '$img_pay')");
    return $success;
   }

   function selectHistory_Pay($id_user){
     global $mysqli;
     $result = $mysqli -> query("SELECT * FROM `history_pay` WHERE `id_client`='$id_user'");
     return resultSetToArray($result);
   }
   function dont_Show_Pay_User($id_h_pay){
       global $mysqli;
       $one = 1;
       $success = $mysqli->query("UPDATE `history_pay` SET `no_show_user` = '$one' WHERE `id_pay`='$id_h_pay' AND `confirmation_pay`='$one'");
       return $success;
   }
?>
