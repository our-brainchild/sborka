<br>
<br>
<br>
<br>
<?php
    if (!empty($_POST["btn_submit"])){
      updateUser($_SESSION["login"],$_POST["email"],$_POST["name"],$_POST["surname"],$_POST["nameagent"],$_POST["maintelephone"],$_POST["agency"],$_POST["notice"],$_POST["city"],$_POST["adress"],$_POST["site"],$_POST["numberIP"],$_POST["positionorg"]);
    }
  global $row;
  $login=$_SESSION['login'];
  $result=$mysqli->query("SELECT * FROM users WHERE `login`='$login'");
  $row=$result->fetch_assoc();
  if(!empty($_POST['btn_pass'])){
    $oldpass=htmlspecialchars($_POST['oldpass']);
    $oldpass=md5($oldpass);
    //  if($_POST["pass1"]==$_POST["pass2"]){
        $newpass=htmlspecialchars($_POST["pass1"]);
        $newpass=md5($newpass);
        $login = htmlspecialchars($_SESSION["login"]);
        updatePass($login,$oldpass,$newpass);
      //}
      /*не работает,ы не понятно почему*/
    }
 ?>
<div class="container">
  <div class="row">
    <h2>Добро пожаловать <?php echo $row["name"]; echo " "; echo $row["surname"]; ?> </h2>
      <h4>Ваш регистрационный номер <?php echo $_SESSION["id"]; ?></h4>
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

          <form class="form-horizontal" role="form" method="post">
            <!-- Email -->
            <div class="form-group">
              <label for="inputEmail" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="<?php echo $row["email"]; ?>" name="email">
              </div>
            </div>
            <!--Имя-->
            <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label">Имя</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName" placeholder="Имя" value="<?php echo $row["name"]; ?>" name="name">
              </div>
            </div>
            <!--Фамилия-->
            <div class="form-group">
              <label for="inputSurname" class="col-sm-2 control-label">Фамилия</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputSurname" placeholder="Фамилия" value="<?php echo $row["surname"]; ?>" name="surname">
              </div>
            </div>
            <!--Город-->
            <div class="form-group">
              <label for="inputCity" class="col-sm-2 control-label">Город</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputCity" placeholder="Город" value="<?php echo $row["city"]; ?>" name="city">
              </div>
            </div>
            <!--Адрес-->
            <div class="form-group">
              <label for="inputAdress" class="col-sm-2 control-label">Адрес</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputAdress" placeholder="Адрес" value="<?php echo $row["adress"]; ?>" name="adress">
              </div>
            </div>
            <!--Организация-->
            <div class="form-group">
              <label for="inputNameagent" class="col-sm-2 control-label">Организация</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNameagent" placeholder="Организация" value="<?php echo $row["nameagent"]; ?>" name="nameagent">
              </div>
            </div>
            <!--Должность-->
            <div class="form-group">
              <label for="inputPositionorg" class="col-sm-2 control-label">Должность</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPositionorg" placeholder="Должность" value="<?php echo $row["positionorg"]; ?>" name="positionorg">
              </div>
            </div>
            <!--Сайт-->
            <div class="form-group">
              <label for="inputSite" class="col-sm-2 control-label">Сайт</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputSite" placeholder="Сайт" value="<?php echo $row["site"]; ?>" name="site">
              </div>
            </div>
            <!--Номер ИП-->
            <div class="form-group">
              <label for="inputNumberIP" class="col-sm-2 control-label">Номер ИП</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNumberIP" placeholder="Номер ИП" value="<?php echo $row["numberIP"]; ?>" name="numberIP">
              </div>
            </div>
            <!--Основной телефон-->
            <div class="form-group">
              <label for="inputTelephone" class="col-sm-2 control-label">Телефон</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputTelephone" placeholder="Телефон" value="<?php echo $row["maintelephone"]; ?>" name="maintelephone">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="notice" value="<?php $row["notice"]; ?>"> Присылать уведамления
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
        <div class="tab-pane fade" id="messages">...</div>
        <div class="tab-pane fade" id="pass">
          <form method="post" class="form-horizontal" role="form">
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
