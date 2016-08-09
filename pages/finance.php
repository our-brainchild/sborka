<?php
  require_once "start.php";
  require_once "blocks/mainmenu.php";
  echo "<br><br><br>";
  echo "<br><br><br>";
  echo "<br><br><br>";
  echo "<br><br><br>";
  echo $_SESSION["id"];
  echo "<br>";
  echo $_SESSION["login"];
  echo "<br>";
  echo $_SESSION["password"];
  echo "<br>";
  echo $_SESSION["email"];
  require_once "blocks/footer.php";
  require_once "stop.php";
 ?>
