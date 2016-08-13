<?php
require_once "start.php";
require_once "blocks/mainmenu.php";
echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
?>
<div class="container">
  <div class="row">
    <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-exclamation-circle fa-2x" aria-hidden="true"></i></button>
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 class="modal-title" id="myModalLabel"><strong>Важно знать</strong></h3>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" >
                <div class="tab-content">
                  <div class="list-group">
                      <a href="#common-inf" class="list-group-item active"  data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Общая информация</p>
                      </a>
                      <a href="#order-status" class="list-group-item"  data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Статус заказа</p>
                      </a>
                      <a href="#info" class="list-group-item" data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Информирование</p>
                      </a>
                      <a href="#accreditation" class="list-group-item" data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Аккредитация и скидки</p>
                      </a>
                      <a href="#reviews" class="list-group-item" data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Отзывы и предложения</p>
                      </a>
                      <a href="#defect" class="list-group-item" data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Брак Претензии Проблемы</p>
                      </a>
                      <a href="#contacts" class="list-group-item" data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Контакты</p>
                      </a>
                  </div>
                </div>
              </div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" style="border-left:1px solid lightgray;">
                <div class="tab-content">
                  <div class="tab-pane active" id="common-inf">
                    <h1>Общая информация</h1>

                     <br>
                    <img src="../images/logo.png" style="width:155px;">
                    <br>
                    <b>ОНЛАЙН СЕРВИС ПЕЧАТИ<br>
                    ДЛЯ РЕКЛАМНЫХ АГЕНТСТВ, ТИПОГРАФИЙ, ПОСРЕДНИКОВ</b><br>
                    <br>
                    Офсетная печать. Цифровая печать. Широкоформатная печать. УФ печать. <br>
                    <br>
                    <b>Оформление заказа - онлайн круглосуточно.</b><br>
                    Актуальная информация, предложения, ценообразование. <br>
                    <br>
                    <b>Автоматизация и контроль качества на всех участках производства.</b><br>
                    Ясно, что с Вашим заказом – его статус на каждом этапе производства, от оформления до получения.<br>
                    <br>
                    <b>Информирование.</b><br>
                    Вы всегда получаете SMS или e-mail уведомления согласно - статуса заказа, состояния баланса, новых предложений и возможностей.
                    <br>
                    <br>
                    <br>
                  </div>
                  <div class="tab-pane" id="order-status">
                    <h1>Статус заказа</h1>
                    Статус заказу присваивается автоматически на каждом этапе прохождения, от оформления до получения.
                     <br><br>
                    <i class="fa fa-ban" aria-hidden="true"title="Отменен пользователем"></i>&nbsp;&nbsp;Отменен пользователем - заказ отменен Вами. <br>Отменить заказ можно на страничке «Заказы» далее «Изменить заказ».<br><br>
                    <i class="fa fa-file-text-o" aria-hidden="true"  title="Проверяется"></i>&nbsp;&nbsp;Проверяется - заказ проверяется препресс отделом на соответствие макета – задания, а также техническим требованиям.<br>
                    Активный в случае ручной проверки см: «Технические требования».
                    <br><br>
                    <i class="fa fa-exclamation-triangle" aria-hidden="true" title="Возвращен с обработки"></i>&nbsp;&nbsp;Возвращен с обработки - заказ не соответствует заданию или техническим требованиям.<br>
                    См: «Технические требования»
                    <br><br>
                    <i class="fa fa-check" aria-hidden="true" title="Проверен"></i>&nbsp;&nbsp;Проверен - заказ проверен, с ним все в порядке<br><br>
                    <i class="fa fa-money" aria-hidden="true" title="Ждем оплату для печати"></i>&nbsp;&nbsp;Ждем оплату для печати – для печати заказа необходимо пополнить баланс. См: «Оплата» <br>
                    Активный для пользователей с аккредитацией СТАНДАРТ. См: «Аккредитация и скидки»
                    <br><br>
                    <i class="fa fa-check" aria-hidden="true" title="В очереди печати"></i>&nbsp;&nbsp;В очереди печати - заказ отправлен в производство, ждет своей очереди.<br><br>
                    <i class="fa fa-print" aria-hidden="true" title="В печати"></i>&nbsp;&nbsp;В печати - заказ в производстве.<br><br>
                    <i class="fa fa-scissors" aria-hidden="true" title="Постобработка"></i>&nbsp;&nbsp;Постобработка - заказ отпечатан, делаются послепечатные работы.<br><br>
                    <i class="fa fa-exclamation-circle" aria-hidden="true" title="брак"></i>&nbsp;&nbsp;Проблема с заказом. <br>
                    Активный в случае подачи Вами заявки на проблему. См: «Важно знать» «Брак Претензии Проблемы»
                    <br><br>
                    <i class="fa fa-archive" aria-hidden="true" title="На складе"></i>&nbsp;&nbsp;На складе - заказ изготовлен, прибыл на соответствующий «способу доставки» склад.<br>
                    Для самовывоза или логистический склад, для дальнейшей доставки/отправки.
                    <br><br>
                    <i class="fa fa-money" aria-hidden="true"title="Ждем оплату для отправки"></i>&nbsp;&nbsp;Ждем оплату для отправки - для отправки заказа необходимо пополнить баланс. См: «Оплата» <br>
                    Активный для пользователей с аккредитацией ДИЛЕР. См: «Аккредитация и скидки»
                    <br><br>
                    <i class="fa fa-truck" aria-hidden="true" title="Отгружен/отправлен"></i>&nbsp;&nbsp;Отгружен/отправлен - заказ отгружен/доставлен/отправлен. <br>

                    <br><br><br>
                  </div>
                  <div class="tab-pane" id="info">
                    <h1>Информирование</h1>
                     <b>Вы всегда получаете актуальную информацию, согласно:</b><br>
                       Статуса Вашего заказа;<br>
                       Состояния Вашего баланса;<br>
                       Новых предложений и возможностей.<br>
                         <br>
                    <b> Способы:</b><br>
                     Сообщение в Ваш профиль;<br>
                     Сообщение на E-mail;<br>
                     Сообщение SMS. <br>
                     <br>
                     Выбрать удобный для Вас способ информирования можно на страничке «<a href="http://sborka.ua/index.php?id=1" class="dashes">Настройка уведомлений</a>».
                  </div>
                  <div class="tab-pane" id="accreditation">
                    <h1>Аккредитация и скидки</h1>


                     Персональная аккредитация и скидка назначается администратором. <br>
                     <br>
                     В расчет берутся такие факторы как - длительность работы с компанией, систематичность заказов, финансовая история, прочее. <br>
                     <br>
                     Аккредитация в соответствующую группу клиентов. <br>
                     <br>
                     <b>СТАНДАРТ </b>(до 10 заказов в месяц) - печать только по предоплате.<br>
                     Для печати - заказ должен быть оплачен согласно выбранного <a data-tooltip="Подробная информация об актуальнх сроках печати и времени оформления заказа во вкладке помощи 'Сроки печати'" class="bluetext">срока печати</a>. <br>
                     <b>Скидка не предусмотрена. </b><br>
                     <br>
                     <b>ДИЛЕР </b>(не менее 10 заказов в неделю) - печать без оплаты, отгрузка/доставка/отправка продукции только после оплаты. <br>
                     Для доставки по Киеву - заказ должен быть оплачен до 10:00.<br>
                     Для отправки по Украине в будни - заказ должен быть оплачен до 14:00, для отправки в субботу заказ должен быть оплачен до 19.00 пятницы.<br>
                     Для готового заказа отсрочка оплаты не более 3-х дней! <br>
                     <b>Скидка индивидуальна.</b><br>
                     <br>
                    <b> НАКОПИТЕЛЬ</b> (не менее 10 заказов в день) - печать без оплаты, отправка продукции без оплаты, отсрочка платежа до 10 дней. <br>
                    <b> Скидка индивидуальна.</b><br>
                  </div>
                  <div class="tab-pane" id="reviews">
                    <h1><a href="http://sborka.ua/index.php?id=2">ТУТ НУЖНО САМОМУ СДЕЛАТЬ КАК НА СТАРОЙ СБОРКИ</a></h1>
                  </div>
                  <div class="tab-pane" id="defect">
                    Все решается! Свяжитесь с администратором.<br>
                    <br>
                     <b>Важно знать:</b><br>
                     <br>
                     <b>Заявка на проблему подается через страничку «Заказы» в строке заказа.</b><br>
                     Черно-желтая пиктограмма.<br>
                     Заявка рассматривается не позднее, чем через 5 дней после получения продукции.<br>
                     <br>
                     <b>Допустимая задержка на любом этапе производства 1-3 рабочих дня.</b> <br>
                     Перерасчет/компенсация делается исключительно в рамках динамического прайс-листа.<br>
                     <br>
                     <b>В случае частичного или полного не выполнения послепечатных работ:</b><br>
                     Перерасчет/компенсация делается согласно стоимости работ в тираже.<br>
                     <br>
                     <b>В случае не соответствия тиража:</b><br>
                     Перерасчет/компенсация делается согласно стоимости экземпляра в тираже. <br>
                  </div>
                  <div class="tab-pane" id="contacts">
                    <h1>Контакты</h1>

                      С радостью ответим на любые Ваши вопросы связанные с нашей деятельностью!
                       <br> <br>
                       Call-Center: <br>
                       <span style="color: #B51118; font-size: 18px;"><b>0 800 60 62 51</b></span> <b>звонки со всех телефонов (в т.ч. и мобильных) в пределах Украины бесплатны!</b> <br>
                       MTS 095 173-38-38 <br>
                       MTS 095 173-39-39 <br>
                       KYS 067 623-73-71 <br>
                       KYS 067 624-73-71 <br>
                       KYS 098 399-54-19
                        <br> <br>
                       post@sborka.ua - общие вопросы <br>
                       fin@sborka.ua - бухгалтерия
                          <br> <br>
                       Предложения и замечания: <br>
                       ds@sborka.ua
                        <br> <br>
                       Отдел препресс-подготовки: <br>
                       prepress@sborka.ua <br>
                       для резюме sborka_resume@ukr.net
                        <br><br>


                      <span style="color: #B51118; font-size: 18px;"><b>График работы</b></span>
                      <br><br>

                      <b> Контакт центр:</b> <br>
                       Понедельник - Пятница с 9:00 до 19:00 <br>
                       Суббота с 9:30 до 16:00
                        <br> <br>
                      <b> Прием макетов - круглосуточно онлайн (24/7/365)</b>
                        <br> <br>
                      <b> Отдел допечатной подготовки - проверка макетов/консультация:</b> <br>
                       Понедельник - Пятница с 10:00 до 19:00 <br>
                       Суббота с 10:00 до 15:00 <br> <br>

                      <b> Отдел доставки: </b><br>
                       Понедельник - Пятница с 10:00 до 19:00 <br>
                       Суббота с 10:00 до 15:00 <br> <br>

                      <b> Cклад выдачи г.Киев: </b><br>
                       Адрес: г. Киев, ул. Маршала Гречко, 13 <br>
                       Режим работы по будням с 9:00 до 18:00. В субботу с 9:00 до 15:00<br>
                       Телефоны склада: 098-604-48-77; 066-881-29-77; 063-895-09-33

                       <br> <br>

                       <b>Бухгалтерия:</b> <br>
                       Понедельник - Пятница с 9:00 до 19:00 <br>
                       <br><br><br><br>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
echo "<br><br><br><br><br><br><br><br><br>";
require_once "blocks/footer.php";
require_once "stop.php";
 ?>
