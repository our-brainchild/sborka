<?php
require_once "start.php";
require_once "blocks/mainmenu.php";
?>
<div class="block-chat">
  <div class="block-message">
<?php
echo "<br/>";
//var_dump($messages);
$i = 0;
//echo "messages <br/>"; var_dump($messages); echo "<br/>";
foreach ($messages as $message) {
//echo "messages in foreache <br/>";  var_dump($messages); echo "<br/>";
    if($i == 0){
      include "main_message.php";
      echo "<div class='other-message'><br>";
    }else{
    include "message.php";
  }
  $i++;
}
?>
<form role="form" class="form" action="blocks/sendmessage.php?id_chat=<?php echo $value['id_chat']; ?>" method="post">
       <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
         <div class="form-group">
           <label class="sr-only" for="textMessage">Текст</label>
           <input type="text" name="textmessage" class="form-control" id="textMassege" placeholder="Текст сообщения">
         </div>
       </div>
       <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
          <input type="submit" id="submitMassege" class="btn btn-default form-control" value="Ответить">
       </div>
     </form>

    </div>
  </div>
</div>
