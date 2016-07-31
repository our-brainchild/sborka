<!--LOGO ON FIRST PAGE-->
<div class="container">
  <div class="row">
    <div class="col-md-12 col-lg-12 col-ex-12 col-sm-12">
      <div class="main-logo">
        <p>
          <a href="">
            <img src="images/logo.png" alt="Сборка"/>
          </a>
        </p>
      </div>
    </div>
  </div>
</div>
<!--//LOGO ON FIRST PAGE-->
<!--TEXT-PROMO-->
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="textpromo">
          <h1 class="text-uppercase"><br>Онлайн сервис печати </h1>
          <h3 class="text-uppercase">для рекламных агентств, типографий, посредников</h3>
          <br>
      </div>
    </div>
  </div>
</div>
<!--//TEXT-PROMO-->
<!--BtnPromo-->
<div class="container">
  <div class="row">
    <div class="btnpromo">

      <div class="col-lg-6">
        <button class="btn btn-success btn-lg navbar-right" type="button" data-toggle="modal" data-target="#Modal-Login">Войти</button>
      </div>

      <div class="col-lg-6">
        <button class="btn btn-primary btn-lg" type="button" data-toggle="modal" data-target="#Modal-Registration">Стать дилером</button>
      </div>

    </div>
  </div>
</div>
<!--//BtnPromo-->
<!--List-Inline-->
<div class="container">
  <div class="row">
    <div class="navbar">
      <hr>
        <ul class="list-inline indexlinks">
          <li><p>Цифровая печать</p></li>
          <li><p>Офсетная  печать</p></li>
          <li><p>Широкоформатная печать</p></li>
          <li><p>Пластиковые карты</p></li>
        </ul>
      <hr>
    </div>
  </div>
</div>
<!--//List-Inline-->
<!--FOOTER-->
<div class="container">
  <div class="row">
    <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
      <p style="text-align:center; color:rgba(0,0,0,.5);">поддержка
        <span style="color:#428bca">Пн-Пт 9.00-19.00</span>
        бесплатный звонок
        <span style="color:#428bca">0 000 000 000</span>
        | связаться
        <span style="color:#428bca">
          <a style="text-decoration: none;" href="#"  data-toggle="modal" data-target="#Modal-Contact">Контакты</a>
        </span>
      </p>
    </div>
  </div>
</div>
<!--//FOOTER-->

<!--Modal-Login-->
<!-- Modal -->
<div class="modal fade" id="Modal-Login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <center><h4 class="modal-title" id="myModalLabel">Введите ваши данные</h4></center>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form" method="POST" action="../block/auth.php">
          <?php
						if($_SESSION["error_auth"]){
							unset($_SESSION["error_auth"]);
							$alert="Неверный e-mail и/или пароль:";
							include "block/alert.php";
						}
						?>
          <div class="form-group">
            <label for="inputLogin" class="col-sm-2 control-label">Логин</label>
            <div class="col-sm-10">
            <input type="login" name="login" class="form-control inputboxs" id="inputEmail" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword" class="col-sm-2 control-label">Пароль</label>
            <div class="col-sm-10">
            <input type="password" name="password" class="form-control inputboxs" id="inputPassword" placeholder="Пароль">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
              <label>
              <input type="checkbox"> Запомнить меня на неделю
              </label>
            </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" name="button_auth" class="btn btn-success" value="Войти">
            <button  type="button" class="btn btn-success" data-dismiss="modal" aria-hidden="true">Отмена</button>
            </div>
          </div>
          </form>
      </div>
    </div>
  </div>
</div>
<!--//Modal-Login-->

<!--Modal-Register-->
  <div class="modal fade" id="Modal-Registration" tabindex="-1" role="dialog" aria-labelledby="Modal-Registration" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <center><h4 class="modal-title" id="myModalLabel">Регистрация</h4></center>
        </div>
        <div class="modal-body">

          <form class="form-horizontal" role="form" method="post">

            <?php
            if (!empty($_POST["button_reg"])) {
                echo $_POST;
                $email=htmlspecialchars($_POST["email"]);
                $login=htmlspecialchars($_POST["login"]);
                $name=htmlspecialchars($_POST["name"]);
                $surname=htmlspecialchars($_POST["surname"]);
                $agent=htmlspecialchars($_POST["agent"]);
                //$city=htmlspecialchars($_POST["city"]);
                $maintelephone=htmlspecialchars($_POST["maintelephone"]);
                $password_1=htmlspecialchars($_POST["password_1"]);
                $password_2=htmlspecialchars($_POST["password_2"]);
                $agency=htmlspecialchars($_POST["agency"]);
                if (strlen($email)<3) $success=false;
                  elseif (strlen($password_1) <3) $success=false;
                  elseif ($password_1 != $password_2) $success=false;
                  else $success=pushUser($email,$login,md5($password_1),$name,$surname,$maintelephone,$agent);
                if (!$success) $alert="Ошибка при регистрации пользователя!";
                  else $alert="Вы успешно зарегистрировались!";
                include "block/alert.php";
            }
            ?>
            <div class="text-center" style="font-weight: 700;">
              <h4>Регистрационные данные</h4>
            </div>
            <hr>
            <div class="form-group">
              <label for="inputLogin" class="col-sm-2 control-label">Логин</label>
              <div class="col-sm-10">
              <input type="login" name="login" class="form-control inputboxs" id="inputLogin" placeholder="Логин">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
              <input type="email" name="email" class="form-control inputboxs" id="inputEmail" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword1" class="col-sm-2 control-label">Пароль</label>
              <div class="col-sm-10">
              <input type="password" name="password_1" class="form-control inputboxs" id="inputPassword1" placeholder="Пароль">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword2" class="col-sm-2 control-label">Повторите пароль</label>
              <div class="col-sm-10">
              <input type="password" name="password_2" class="form-control inputboxs" id="inputPassword2" placeholder="Пароль">
              </div>
            </div>
            <hr>
            <div class="text-center" style="font-weight: 700;">
              <h4>Контактная информация</h4>
            </div>
            <hr>
            <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label">Имя</label>
              <div class="col-sm-10">
              <input type="text" name="name" class="form-control inputboxs" id="inputName" placeholder="Имя">
              </div>
            </div>
            <div class="form-group">
              <label for="inputSurname" class="col-sm-2 control-label">Фамилия</label>
              <div class="col-sm-10">
              <input type="text" name="surname" class="form-control inputboxs" id="inputSurname" placeholder="Фамилия">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAgent" class="col-sm-2 control-label">Организация</label>
              <div class="col-sm-10">
              <input type="text" name="agent" class="form-control inputboxs" id="inputAgent" placeholder="Организация">
              </div>
            </div>
            <div class="form-group">
              <label for="inputTelephone" class="col-sm-2 control-label">Телефон</label>
              <div class="col-sm-10">
              <input type="text" name="maintelephone" class="form-control inputboxs" id="inputTelephone" placeholder="Телефон">
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
                <label>
                <input type="checkbox" name="agency"> Я рекламное агенство
                </label>
              </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" name="button_reg" class="btn btn-success" value="Зарегистрироваться">
              <button  type="button" class="btn btn-success" data-dismiss="modal" aria-hidden="true">Отмена</button>
              </div>
            </div>
            </form>

        </div>
      </div>
    </div>
  </div>
<!--//Modal-Register-->

<!--Modal-Contact-->
  <div class="modal fade" id="Modal-Contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Контакты</h4>
        </div>
        <div class="modal-body">
          <table border="0" class="table">
            <tbody><tr>
              <td>
                Понедельник - Пятница с 9:00 до 19:00, Суббота с 9:30 до 16:00<br>
                MTS +7 978 827 21 54 +7 978 863 92 08.
              </td>
            </tr>
          </tbody></table>
        </div>
      </div>
    </div>
  </div>
<!--//Modal-Contact-->
