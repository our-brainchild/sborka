<?php
  require_once "start.php";
  require_once "blocks/mainmenu.php";
  echo "<br><br><br><br><br><br>";
  ?>
<div class="container">
  <div class="main">
    <ul class="tabs">
    	<li class="current"><a href="?id=37">Сообщения</a></li>
    	<li><a href="inc/code.php?action=newmessage" class="iframe"><img src="../images/plus.png" alt="Создать сообщение">&nbsp;Написать сообщение</a></li>
    	<li><a href="?id=37&amp;archive=1">История</a></li>
    </ul>

    <div style="display:none;">
    </div>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tbody><tr>
        <td valign="top" style="padding:5px 10px 0 0;">
        <p style="font-weight:bold;"><a href="?id=37" class="dashed">Все&nbsp;сообщения</a> </p>
        <p><a href="?id=37&amp;dep=1" class="dashed">Уведомления</a> </p>
        <p><a href="?id=37&amp;dep=4" class="dashed">Препресс</a> </p>
        <p><a href="?id=37&amp;dep=3" class="dashed">Бухгалтерия</a> </p>
        <p><a href="?id=37&amp;dep=2" class="dashed">Логистика</a> </p>
        <p><a href="?id=37&amp;dep=5" class="dashed">Склад</a> </p></td>
        <td valign="top">

    <form action="" method="post" id="messagi">
    <p><input name="clear" type="hidden" value="yes">

    </p>
    <table class="pages tr">
    <tbody><tr style="background: #eee;"><td align="center" width="30"><input type="checkbox" name="sel_all" onchange="for (i in this.form.elements) this.form.elements[i].checked = this.checked"></td>
    <td align="right" colspan="5"><input name="" type="submit" value="удалить отмеченные" onclick="document.forms.messagi.action = 'index.php?id=37&amp;action=delselected'">
      <input type="submit" name="button2" id="button2" value="пометить как прочитанные" onclick="document.forms.messagi.action = 'index.php?id=37&amp;action=readselected'">
      <input type="submit" name="button3" id="button3" value="отправить в архив" onclick="document.forms.messagi.action = 'index.php?id=37&amp;action=arcselected'"></td></tr>
    <tr class="highlight lgreen" id="row4742553">
    	<td align="center"><input type="checkbox" name="message[]" value="4742553" id="message4742553"></td>
    	<td><span style="color:#999; font-size:11px;">20:57 22 июля Общий (администратор):</span><br>
    	—  <label for="message4742553" style="display:block; margin:-16px 0 0 25px;"> <h2>Скидка 15% на пластиковые карты!</h2><h3>Уважаемые партнеры!      </h3>
          <p>У нас небольшая приятная новость: в течение месяца, до 25 августа изготовление пластиковых карт на 15% дешевле.</p>
          <p>Мы предлагаем вам пластиковые карты: белые, прозрачные, золотые и серебрянные с различными методами персонализации: эмбоссирование, нанесение штрих-кодов, магнитных лент, скретч панелей и др.      </p>
          <p>Работайте комфортно, ваша Сборка!</p></label></td>
    	<td align="center" nowrap=""> <a href="?id=37&amp;read=4742553" title="пометить как прочитанное" class="read" id="4742553"><img src="../images/script.png" alt="пометить как прочитанное"></a> </td>
    	<td align="center" nowrap=""> <a href="inc/message.php?sender=1&amp;mes=4742553" class="window" title="ответить"><img src="../images/type.png" width="16"> </a> </td>
    	<td align="center" nowrap=""> <a href="?id=37&amp;arc=4742553" class="arc" id="4742553"><img src="../images/luggage--plus.png" alt="в архив"></a> </td>
    	<td align="center" nowrap=""> <a href="javascript:if(confirm('Вы%20действительно%20хотите%20удалить%20сообщение?'))window.location='?id=37&amp;del=4742553'" target="_top" title="" class="del" id="4742553"><img src="images/cross.png" alt="удалить" align="bottom"></a> </td></tr></tbody></table>
    <p><input name="clear" type="hidden" value="yes">
      <input name="" type="submit" value="удалить отмеченные" onclick="document.forms.messagi.action = 'index.php?id=37&amp;action=delselected'">
      <input type="submit" name="button2" id="button2" value="пометить как прочитанные" onclick="document.forms.messagi.action = 'index.php?id=37&amp;action=readselected'">
      <input type="submit" name="button3" id="button3" value="перенести в архив" onclick="document.forms.messagi.action = 'index.php?id=37&amp;action=arcselected'">
    </p>
    </form></td>
      </tr>
    </tbody></table>
    <script type="text/javascript">
    $(document).ready(function(){
    	$('.read').click(function(){
    		var id=$(this).attr("id");
    		$.ajax({
    			url: 'inc/ajax.php?readmes=' + id,
    			success: function(data){
    				if(data!='error'){
    					$('#row'+id).removeClass('lgreen');
    					$('#unreadmes').html(data);
    				}else{
    					//alert(data + id);
    				}
    			},
    			error: function(data){
    				//alert("Ошибка" + data);
    			}
    		});
    		return false;
    	});
    	$('.arc').click(function(){
    		var id=$(this).attr("id");
    		$.ajax({
    			url: 'inc/ajax.php?arcmes=' + id,
    			success: function(data){
    				if(data=='1'){
    					$('#row'+id).fadeOut('slow', function(){
            				$(this).remove();
        				});
    				}else{
    					//alert(data + id);
    				}
    			},
    			error: function(data){
    				//alert("Ошибка" + data);
    			}
    		});
    		return false;
    	});
    	$('.del').click(function(){
    		var id=$(this).attr("id");
    		if (confirm('Вы уверенны, что хотите удалить сообщение?')){
    			$.ajax({
    				url: 'inc/ajax.php?delmes=' + id,
    				success: function(data){
    					if(data=='1'){
    						$('#row'+id).fadeOut('slow', function(){
    							$(this).remove();
    						});
    					}else{
    						//alert(data + id);
    					}
    				},
    				error: function(data){
    					//alert("Ошибка" + data);
    				}
    			});
    		};
    		return false;
    	});
    	$('em').css('position', 'static');
    })
    </script>
  </div>
</div>
<?php
  require_once "blocks/footer.php";
  require_once "stop.php";
 ?>
