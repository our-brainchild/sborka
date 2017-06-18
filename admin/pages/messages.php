<?php
  require_once "start.php";
  require_once "blocks/mainmenu.php";
  echo "<br><br><br><br><br><br>";
  $chat = selectAllChatForUser($_SESSION['id']);
  //var_dump($chat);
  ?>
<div class="container">

   <div class="row">
     <form role="form" class="form" action="blocks/sendmessage.php?id_chat=-1" method="post">
       <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
         <div class="form-group">
           <label class="sr-only" for="textMessage">Текст</label>
           <input type="text" name="textmessage" class="form-control" id="textMassege" placeholder="Текст сообщения">
         </div>
       </div>
      <!-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
          <select class="form-control" name="type">
            <option value="1">Менеджер</option>
            <option value="2">Руководитель</option>
            <option value="3">Препресс</option>
            <option value="4">Бухгалтерия</option>
            <option value="5">Технолог</option>
          </select>
       </div> -->
       <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
          <input type="submit" id="submitMassege" class="btn btn-default form-control" value="Отправить">
       </div>
     </form>
   </div>
   <div class="row">
     <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
       <div data-spy="affix" data-offset-top="60" data-offset-bottom="200">
         <ul class="nav nav-pills nav-stacked">
           <li class="active"><a href="#">Все сообщения</a></li>
  <!--         <li><a href="#">Мои сообщения</a></li>
           <li><a href="#">Менеджер</a></li>
           <li><a href="#">Руководитель</a></li>
           <li><a href="#">Препресс</a></li>
           <li><a href="#">Бухгалтерия</a></li>
           <li><a href="#">Технолог</a></li>
           <li><a href="#"><span style="font-weight:700; color:#2e4659;">Уведомления</span></a></li> -->
         </ul>
      </div>
     </div>
     <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">

<?php
  foreach ($chat as $value) {
  // echo "id_chat";  var_dump($value['id_chat']); echo "<br/>";
    $messages = selectAllMessageForIdChat($value['id_chat']);
    if(sizeof($messages)!=0) {
      include "blocks/chat_template.php";
      echo "<br/>";
      echo "<br/>";
    }
  }
?>

     </div>
   </div>
</div>
<?php
  require_once "blocks/footer.php";
  require_once "stop.php";
 ?>
<script>
$('#submitMassege').on('click'function(){
  alert("submitMassege");
  alert($('#textMassege').val);
});


 $('#my-affix').affix({
   offset: {
     top: 100
   , bottom: function () {
       return (this.bottom = $('.footer').outerHeight(true))
     }
   }
 })
 </script>
