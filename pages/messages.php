<?php
  require_once "start.php";
  require_once "blocks/mainmenu.php";
  echo "<br><br><br><br><br><br>";
  ?>
<div class="container">

   <div class="row">
     <form role="form" class="form" action="blocks/sendmessage.php" method="post">
       <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
         <div class="form-group">
           <label class="sr-only" for="textMessage">Текст</label>
           <input type="text" name="textmessage" class="form-control" id="textMassege" placeholder="Текст сообщения">
         </div>
       </div>
       <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
          <select class="form-control" name="type">
            <option value="1">Менеджер</option>
            <option value="2">Руководитель</option>
            <option value="3">Препресс</option>
            <option value="4">Бухгалтерия</option>
            <option value="5">Технолог</option>
          </select>
       </div>
       <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
          <input type="submit" class="btn btn-default form-control" value="Отправить">
       </div>
     </form>
   </div>
   <div class="row">
     <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
       <div data-spy="affix" data-offset-top="60" data-offset-bottom="200">
         <ul class="nav nav-pills nav-stacked">
           <li class="active"><a href="#">Все сообщения</a></li>
           <li><a href="#">Мои сообщения</a></li>
           <li><a href="#">Менеджер</a></li>
           <li><a href="#">Руководитель</a></li>
           <li><a href="#">Препресс</a></li>
           <li><a href="#">Бухгалтерия</a></li>
           <li><a href="#">Технолог</a></li>
           <li><a href="#"><span style="font-weight:700; color:#2e4659;">Уведомления</span></a></li>
         </ul>
      </div>
     </div>
     <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">

        <div class="block-chat">
          <div class="block-message">
            <div class="first-message">
              <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                  <img src="../images/message.png" style="border-radius: 26px;">
                </div>
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">

                  <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                      04.10.2016
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                      <span class="label label-default">Администратор</span>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="other-message">
              <br>
              <div class="first">
                <div class="row">

                  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                  </div>

                  <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 alert alert-info">
                    <div class="row">
                      <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                        <img src="../images/message.png" style="border-radius: 26px;">
                      </div>
                      <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">

                        <div class="row">
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            04.10.2016
                          </div>
                          <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <span class="label label-default">Администратор</span>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="second">

                <div class="row">

                  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                  </div>

                  <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 alert alert-info">
                    <div class="row">
                      <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                        <img src="../images/message.png" style="border-radius: 26px;">
                      </div>
                      <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">

                        <div class="row">
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            04.10.2016
                          </div>
                          <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <span class="label label-default">Администратор</span>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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

        <div class="block-chat">
          <div class="block-message">
            <div class="first-message">
              <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                  <img src="../images/message.png" style="border-radius: 26px;">
                </div>
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">

                  <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                      04.10.2016
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                      <span class="label label-default">Администратор</span>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="other-message">
              <br>
              <div class="first">
                <div class="row">

                  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                  </div>

                  <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 alert alert-info">
                    <div class="row">
                      <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                        <img src="../images/message.png" style="border-radius: 26px;">
                      </div>
                      <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">

                        <div class="row">
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            04.10.2016
                          </div>
                          <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <span class="label label-default">Администратор</span>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="second">

                <div class="row">

                  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                  </div>

                  <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 alert alert-info">
                    <div class="row">
                      <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                        <img src="../images/message.png" style="border-radius: 26px;">
                      </div>
                      <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">

                        <div class="row">
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            04.10.2016
                          </div>
                          <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <span class="label label-default">Администратор</span>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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

        <div class="block-chat">
          <div class="block-message">
            <div class="first-message">
              <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                  <img src="../images/message.png" style="border-radius: 26px;">
                </div>
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">

                  <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                      04.10.2016
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                      <span class="label label-default">Администратор</span>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="other-message">
              <br>
              <div class="first">
                <div class="row">

                  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                  </div>

                  <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 alert alert-info">
                    <div class="row">
                      <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                        <img src="../images/message.png" style="border-radius: 26px;">
                      </div>
                      <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">

                        <div class="row">
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            04.10.2016
                          </div>
                          <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <span class="label label-default">Администратор</span>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="second">

                <div class="row">

                  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                  </div>

                  <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 alert alert-info">
                    <div class="row">
                      <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                        <img src="../images/message.png" style="border-radius: 26px;">
                      </div>
                      <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">

                        <div class="row">
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            04.10.2016
                          </div>
                          <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <span class="label label-default">Администратор</span>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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

     </div>
   </div>
</div>
<?php
  require_once "blocks/footer.php";
  require_once "stop.php";
 ?>
<script>
 $('#my-affix').affix({
   offset: {
     top: 100
   , bottom: function () {
       return (this.bottom = $('.footer').outerHeight(true))
     }
   }
 })
 </script>
