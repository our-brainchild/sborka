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
  $id_user = $mysqli->query("SELECT `id_user` FROM user WHERE `login` = '$login' OR `email_user` = '$login' ");
  if($id_user->fetch_assoc())
  $success_second = $mysqli->query("INSERT INTO `client` (`main_phone_number_client`, `organization_client`) VALUES ('$maintelephone', '$name_organization') WHERE `id_client`=''$id_user'");
  return $success_first & $success_second;
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

function showAllMassegeInChar(){

}


function checkUser($login, $password){
  global $mysqli;
  $result_set=$mysqli->query("SELECT * FROM `user` WHERE (`login` = '$login' OR `email_user` = '$login') AND `password_user` = '$password'");
  if($result_set->fetch_assoc()) return true;
  else return false;
}
function updateUser($login,$email,$name,$surname,$nameagent,$maintelephone,$agency,$notice,$city,$adress,$site,$numberIP,$positionorg){
  global $mysqli;
  $success = $mysqli->query("UPDATE users SET `email` = '$email', `name`='$name',`surname`='$surname',`nameagent`='$nameagent',`maintelephone`='$maintelephone',`agency`='$agency',`notice`='$notice' where `login` = '$login' ");
  $success = $mysqli->query("UPDATE users SET `city`='$city',`adress`='$adress', `site`='$site',`numberIP`='$numberIP',`positionorg`='$positionorg' WHERE `login`='$login'");
  return $success;
}
function updatePass($login,$oldpas,$pass){
  global $mysqli;
  $success = $mysqli->query("UPDATE users SET `password`='$pass' WHERE `login`='$login' AND `password`='$oldpass'");
}

?>
