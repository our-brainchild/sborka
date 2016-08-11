<br>
<br>
<br>
<br>
<?php
    if (!empty($_POST["btn_submit"])){
      updateUser($_SESSION["id"],$_POST["email"],$_POST["name"],$_POST["surname"],$_POST["nameagent"],$_POST["maintelephone"],$_POST["agency"],$_POST["notice"],$_POST["city"],$_POST["adress"],$_POST["site"],$_POST["numberIP"],$_POST["positionorg"]);
    }
  global $user_TBD;
  $id = $_SESSION["id"];
  $result = $mysqli->query("SELECT * FROM user WHERE `id_user`='$id'");
  $user_TBD = $result->fetch_assoc();
  $result = $mysqli->query("SELECT * FROM client WHERE `id_client`='$id'");
  $client_TBD = $result->fetch_assoc();
 ?>
<div class="container">
  <div class="row">
    <h3>Добро пожаловать <?php echo $user_TBD["name_user"]." ".$user_TBD["lastname_user"]; ?> </h3>
    <h5><b>Ваш регистрационный номер <?php echo $_SESSION["id"]; ?></b></h5>
    <h5>Баланс: <?php echo $client_TBD["score_client"]; ?> </h5>
    <h5>Вы находитесь в группе:</h5>
    <h5>Размер вашей персональной скидки: </h5>
    <p></p>
    <p></p>
    <p></p>
    <br>

      <!-- Nav tabs -->
      <ul class="nav nav-tabs">
        <li class="active"><a href="#profiledata" data-toggle="tab">Персональные данные</a></li>
        <li><a href="#delivery" data-toggle="tab">Способы доставки</a></li>
        <li><a href="#messages" data-toggle="tab">Настройка уведомлений</a></li>
        <li><a href="#pass" data-toggle="tab">Смена пароля</a></li>
        <li><a href="#regdocument" data-toggle="tab">Регистрационные документы</a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane fade in active" id="profiledata">
          <br>
          <form class="form-horizontal" role="form" method="post">
            <!-- Email -->
            <div class="form-group">
              <label for="inputEmail" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="<?php echo $user_TBD["email_user"]; ?>" name="email">
              </div>
            </div>
            <!--Имя-->
            <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label">Имя</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName" placeholder="Имя" value="<?php echo $user_TBD["name_user"]; ?>" name="name">
              </div>
            </div>
            <!--Фамилия-->
            <div class="form-group">
              <label for="inputSurname" class="col-sm-2 control-label">Фамилия</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputSurname" placeholder="Фамилия" value="<?php echo $user_TBD["lastname_user"]; ?>" name="surname">
              </div>
            </div>
            <!--Город-->
            <div class="form-group">
              <label for="inputCity" class="col-sm-2 control-label">Город</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputCity" placeholder="Город" value="<?php echo $client_TBD["city_client"]; ?>" name="city">
              </div>
            </div>
            <!--Адрес-->
            <div class="form-group">
              <label for="inputAdress" class="col-sm-2 control-label">Адрес</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputAdress" placeholder="Адрес" value="<?php echo $client_TBD["adress_client"]; ?>" name="adress">
              </div>
            </div>
            <!--Организация-->
            <div class="form-group">
              <label for="inputNameagent" class="col-sm-2 control-label">Организация</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNameagent" placeholder="Организация" value="<?php echo $client_TBD["organization_client"]; ?>" name="nameagent">
              </div>
            </div>
            <!--Должность-->
            <div class="form-group">
              <label for="inputPositionorg" class="col-sm-2 control-label">Должность</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPositionorg" placeholder="Должность" value="<?php echo $client_TBD["post_client"]; ?>" name="positionorg">
              </div>
            </div>
            <!--Сайт-->
            <div class="form-group">
              <label for="inputSite" class="col-sm-2 control-label">Сайт</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputSite" placeholder="Сайт" value="<?php echo $client_TBD["site_client"]; ?>" name="site">
              </div>
            </div>
            <!--Номер ИП-->
            <div class="form-group">
              <label for="inputNumberIP" class="col-sm-2 control-label">Номер ИП</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNumberIP" placeholder="Номер ИП" value="<?php echo $client_TBD["numberIP_client"]; ?>" name="numberIP">
              </div>
            </div>
            <!--Основной телефон-->
            <div class="form-group">
              <label for="inputTelephone" class="col-sm-2 control-label">Телефон</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputTelephone" placeholder="Телефон" value="<?php echo $client_TBD["main_phone_number_client"]; ?>" name="maintelephone">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="notice" value="yes" <?php if($client_TBD["notice_cliene"] == "yes") echo "checked";?>> Присылать уведомления
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" name="btn_submit" class="btn btn-default" value="Сохранить изменения">
              </div>
            </div>

          </form>

        </div>
        <div class="tab-pane fade" id="delivery">...</div>
        <div class="tab-pane fade" id="messages">

          <div class="container">
            <div class="box" style="display: block;">
  		        <div id="notify">
                <form action="?id=1" method="post" enctype="multipart/form-data" name="notifications" id="notifications">
                  <table class="pages">
                    <thead>
                      <tr><td>получать уведомления</td><td align="center"> на E-MAIL</td><td align="center"> SMS на телефон</td></tr></thead>
                      <tbody><tr>
                        <td>&nbsp;</td>
                    <td align="center"><label for="notify_mail"></label><input name="notify_mail" type="text" id="notify_mail" value="ASprint.Reklama@ya.ru"></td>
                    <td align="center"><label for="notify_tel"></label><input name="notify_tel" type="text" id="notify_tel" value="+380951948180"></td>
                  </tr>
                  <tr><td>заказ оформлен</td><td align="center"></td><td align="center"></td></tr>
                  <tr><td>заказ принят в работу</td><td align="center"><input name="mail_receive" type="checkbox" id="mail_receive" value="1"></td><td align="center"><input name="sms_receive" type="checkbox" id="sms_receive" value="1"> <span style="color:#093;">бесплатно!</span></td></tr>
                  <tr><td>заказ отправлен в печать</td><td align="center"><input name="mail_print" type="checkbox" id="mail_print" value="1"></td><td align="center"><input name="sms_print" type="checkbox" id="sms_print" value="1"></td></tr>
                  <tr><td>на послепечатной обработке</td><td align="center"><input name="mail_post" type="checkbox" id="mail_post" value="1"></td><td align="center"><input name="sms_post" type="checkbox" id="sms_post" value="1"></td></tr>
                  <tr><td>заказ готов</td><td align="center"><input name="mail_sklad" type="checkbox" id="mail_sklad" value="1" checked="checked"></td><td align="center"><input name="sms_sklad" type="checkbox" id="sms_sklad" value="1"> <span style="color:#093;">бесплатно!</span></td></tr>
                  <tr><td>заказ отправлен (информация для получения)</td><td align="center"><input name="mail_send" type="checkbox" id="mail_send" value="1" checked="checked"></td><td align="center"><input name="sms_send" type="checkbox" id="sms_send" value="1" checked="checked"> <span style="color:#093;">бесплатно!</span></td></tr>
                  <tr><td>&nbsp;</td><td align="center"></td><td align="center"></td></tr>
                  <tr><td>проблемы с заказом</td><td align="center"><input name="mail_problem" type="checkbox" id="mail_problem" value="1" checked="checked"></td><td align="center"><input name="sms_problem" type="checkbox" id="sms_problem" value="1"> <span style="color:#093;">бесплатно!</span></td></tr>
                  <tr><td>пополнение баланса</td><td align="center"><input name="mail_finance" type="checkbox" id="mail_finance" value="1"></td><td align="center"><input name="sms_finance" type="checkbox" id="sms_finance" value="1"> <span style="color:#093;">бесплатно!</span></td></tr>
                  <tr><td><input name="not1223" type="hidden" value="765"></td><td colspan="2"><input type="submit" name="dd" id="ss" value="сохранить настройки"></td></tr>
                    </tbody></table>
                </form><span class="info">Все уведомления обязательно дублируются через систему сообщений.</span></div>
  	       </div>
         </div>
        </div>

        <div class="tab-pane fade" id="pass">

          <form method="post" class="form-horizontal" role="form" action="/function/updatePass.php">
            <?php
            if($_SESSION["error_update_pass"]){
							unset($_SESSION["error_update_pass"]);
							$alert="Несовпали новые пароли или неверный старый пароль, попробуйте ещё раз";
							include "/block/alert.php";
						}
            ?>
            <div class="form-group">
              <label for="inputOldPass">Старый пароль</label>
              <input type="password" class="form-control" id="inputPass" placeholder="Старый пароль" name="oldpass" >
            </div>
            <div class="form-group">
              <label for="inputPass1">Новый пароль</label>
              <input type="password" class="form-control" id="inputPass1" placeholder="Новый пароль" name="pass1">
            </div>
            <div class="form-group">
              <label for="inputPass2">Повторите новый пароль</label>
              <input type="password" class="form-control" id="inputPass2" placeholder="Повторите новый пароль" name="pass2">
            </div>
            <input type="submit" name="btn_pass" class="btn btn-default" value="Изменить">
          </form>

        </div>
        <div class="tab-pane fade" id="regdocument">...</div>
      </div>

  </div>
</div>
