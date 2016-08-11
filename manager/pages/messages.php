<?php
  require_once "start.php";
  require_once "blocks/mainmenu.php";
  echo "<br><br><br><br><br><br>";
  ?>
<div class="container">
  <div class="main">
    <div class="btn-group" role="group" aria-label="...">
      <a  class="btn btn-primary"><span>Сообщения</span></a>
      <a  class="btn btn-primary"><span><i class="fa fa-envelope-o"></i>&nbsp;Написать сообщение</span></a>
      <a  class="btn btn-primary"><span>История</span></a>
    </div>


    <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tbody>
        <tr>
          <td valign="top" style="padding:5px 10px 0 0;">
            <p style="font-weight:bold;"><a href="?id=37" class="dashed">Все&nbsp;сообщения</a></p>
            <p><a href="?id=37&amp;dep=1" class="dashed">Уведомления</a></p>
            <p><a href="?id=37&amp;dep=4" class="dashed">Препресс</a></p>
            <p><a href="?id=37&amp;dep=3" class="dashed">Бухгалтерия</a></p>
            <p><a href="?id=37&amp;dep=2" class="dashed">Логистика</a></p>
            <p><a href="?id=37&amp;dep=5" class="dashed">Склад</a></p>
          </td>
          <td valign="top">
            <form action="" method="post" id="messagi">
              <p>
                <input name="clear" type="hidden" value="yes">
              </p>
              <table class="table table-condensed">
                <tbody>
                  <tr style="background: #eee;">
                    <td align="center" width="30">
                      <input type="checkbox" name="sel_all" onchange="for (i in this.form.elements) this.form.elements[i].checked = this.checked">
                    </td>

                    <td align="right" colspan="5">
                      <div class="btn-group" role="group" aria-label="...">
                        <a  class="btn btn-primary"><span><i class="fa fa-trash-o"></i>&nbsp;Удалить отмеченные</span></a>
                        <a  class="btn btn-primary"><span><i class="fa fa-check"></i>&nbsp;Пометить как прочитанные</span></a>
                        <a  class="btn btn-primary"><span>Отправить в архив</span></a>
                      </div>
                    </td>

                  </tr>

                  <tr class="success" id="row4742553">
    	               <td align="center"><input type="checkbox" name="message[]" value="4742553" id="message4742553">
                     </td>
                     <td>
                       <span style="color:#999; font-size:11px;">20:57 22 июля Общий (администратор):</span><br>
    	                  —
                        <label style="display:block; margin:-16px 0 0 25px;">
                          <h2>Скидка 15% на пластиковые карты!</h2>
                          <h3>Уважаемые партнеры!</h3>
                          <p>У нас небольшая приятная новость: в течение месяца, до 25 августа изготовление пластиковых карт на 15% дешевле.</p>
                          <p>Мы предлагаем вам пластиковые карты: белые, прозрачные, золотые и серебрянные с различными методами персонализации: эмбоссирование, нанесение штрих-кодов, магнитных лент, скретч панелей и др.      </p>
                          <p>Работайте комфортно, ваша Сборка!</p>
                        </label>
                     </td>
                     <td align="center" nowrap=""> <a href="" class="actionmail" title="Пометить как прочитано"><i class="fa fa-check fa-2x"></i></a> </td>
                     <td align="center" nowrap=""> <a href="" class="actionmail" title="Ответить"><i class="fa fa-commenting-o fa-2x"></i></a> </td>
                     <td align="center" nowrap=""> <a href="" class="actionmail" title="Удалить сообщение"><i class="fa fa-trash-o fa-2x"></i></a> </td>
                   </tr>

                   <tr class="" id="row4742553">
     	               <td align="center"><input type="checkbox" name="message[]" value="4742553" id="message4742553">
                      </td>
                      <td>
                        <span style="color:#999; font-size:11px;">20:57 22 июля Общий (администратор):</span><br>
     	                  —
                         <label style="display:block; margin:-16px 0 0 25px;">
                           <h2>Скидка 15% на пластиковые карты!</h2>
                           <h3>Уважаемые партнеры!</h3>
                           <p>У нас небольшая приятная новость: в течение месяца, до 25 августа изготовление пластиковых карт на 15% дешевле.</p>
                           <p>Мы предлагаем вам пластиковые карты: белые, прозрачные, золотые и серебрянные с различными методами персонализации: эмбоссирование, нанесение штрих-кодов, магнитных лент, скретч панелей и др.      </p>
                           <p>Работайте комфортно, ваша Сборка!</p>
                         </label>
                      </td>
                      <td align="center" nowrap=""> <a href="" class="actionmail" title="Пометить как прочитано"><i class="fa fa-check fa-2x"></i></a> </td>
                      <td align="center" nowrap=""> <a href="" class="actionmail" title="Ответить"><i class="fa fa-commenting-o fa-2x"></i></a> </td>
                      <td align="center" nowrap=""> <a href="" class="actionmail" title="Удалить сообщение"><i class="fa fa-trash-o fa-2x"></i></a> </td>
                    </tr>

                    <!-- <tr style="background: #eee;">
                      <td align="center" width="30">
                        <input type="checkbox" name="sel_all" onchange="for (i in this.form.elements) this.form.elements[i].checked = this.checked">
                      </td>

                      <td align="right" colspan="5">
                        <div class="btn-group" role="group" aria-label="...">
                          <a  class="btn btn-primary"><span>Удалить отмеченные</span></a>
                          <a  class="btn btn-primary"><span>Пометить как прочитанные</span></a>
                          <a  class="btn btn-primary"><span>Отправить в архив</span></a>
                        </div>
                      </td>

                    </tr> -->
                 </tbody>

               </table>
             </form>
           </td>
         </tr>
       </tbody>
     </table>
   </div>
 </div>
<?php
  require_once "blocks/footer.php";
  require_once "stop.php";
 ?>
