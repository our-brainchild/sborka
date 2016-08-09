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

function showAllItem(){
  global $mysqli;

}

function showItem(){
  global $mysqli;

}

function showAllChat(){

}

function showAllMassegeInChat(){

}


// function checkUser($login, $password){
//   global $mysqli;
//   $result_set=$mysqli->query(" SELECT * FROM `user` WHERE (`login` = '$login' OR `email_user` = '$login') AND `password_user` = '$password' ");
//   if($result_set->num_rows > 0) return true;
//   else return false;
// }


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

?>
