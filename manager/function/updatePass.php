<?php
require_once "../start.php";
$oldpass = htmlspecialchars($_POST["oldpass"]);
$pass1 = htmlspecialchars($_POST["pass1"]);
$pass2 = htmlspecialchars($_POST["pass2"]);
//var_dump($pass1, $pass2, $oldpass); die();
if($pass1 != $pass2){
  $_SESSION["error_update_pass"]=1;
}
$pass = md5($pass1);
$oldpass = md5($oldpass);
updatePass($_SESSION["id"],$oldpass,$pass);
header("Location: ".$_SERVER["HTTP_REFERER"]);
exit;
 ?>
