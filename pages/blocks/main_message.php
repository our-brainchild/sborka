<?php
require_once "start.php";
require_once "blocks/mainmenu.php";
$member = selectUserInfo($message["from_whom"]);
//var_dump($messages);
?>
<div class="first-message">
  <div class="row">
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
      <img src="../images/message.png" style="border-radius: 26px;">
    </div>
    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">

      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
        <?php echo $message["date"]; ?>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
          <span class="label label-default"><?php echo $member['name_user'];?></span>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <?php echo $message["text"]; ?>
        </div>
      </div>

    </div>
  </div>
</div>
