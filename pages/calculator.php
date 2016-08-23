<?php
  require_once "start.php";
  require_once "blocks/mainmenu.php";
  echo "<br><br><br><br><br>";
?>
  <div class="container"  >
    <div class="row">
      <div class="col-sm-3 col-md-3 col-lg-3">
        <div class="list-group">
            <a href="#banner-grid" class="list-group-item active"  data-toggle="tab" aria-expanded="true">
              <p class="list-group-item-heading">Баннер, баннерная сетка и их обработка</p>
            </a>
            <a href="#wrap" class="list-group-item"  data-toggle="tab" aria-expanded="true">
              <p class="list-group-item-heading">Пленка</p>
            </a>
            <a href="#orajet" class="list-group-item" data-toggle="tab" aria-expanded="true">
              <p class="list-group-item-heading">Пленка ORAJET</p>
            </a>
            <a href="#vision" class="list-group-item" data-toggle="tab" aria-expanded="true">
              <p class="list-group-item-heading">Перфорированная пленка One Way Vision</p>
            </a>
            <a href="#blueback" class="list-group-item" data-toggle="tab" aria-expanded="true">
              <p class="list-group-item-heading">Стандартный Постер блюбэк 6х3м, 12x3м</p>
            </a>
            <a href="#citylight" class="list-group-item" data-toggle="tab" aria-expanded="true">
              <p class="list-group-item-heading">Стандартный Постер СИТИЛАЙТ 1,8х1,2м</p>
            </a>
            <a href="#blueback-not-standard" class="list-group-item" data-toggle="tab" aria-expanded="true">
              <p class="list-group-item-heading">Блюбэк нестандарт</p>
            </a>
            <a href="#city-paper" class="list-group-item" data-toggle="tab" aria-expanded="true">
              <p class="list-group-item-heading">Сити бумага</p>
            </a>
            <a href="#flags-grid" class="list-group-item" data-toggle="tab" aria-expanded="true">
              <p class="list-group-item-heading">Флажная сетка</p>
            </a>
            <a href="#wallpapers" class="list-group-item" data-toggle="tab" aria-expanded="true">
              <p class="list-group-item-heading">Фотообои</p>
            </a>
            <a href="#epson" class="list-group-item" data-toggle="tab" aria-expanded="true">
              <p class="list-group-item-heading">Фотопечать Epson 7900</p>
            </a>
        </div>
      </div>
      <div class="col-sm-9 col-md-9 col-lg-9 ">
        <div class="tab-content">
          <div class="tab-pane" id="wrap">
              <form class="form">
                <div class="row ">
                  <button type="button" class="btn btn-danger pt" data-toggle="button">СРОЧНО</button>
                </div>
                <div class="row ">
                  <p class="pt tt">Количество копий:</p>
                  <div class="col-md-2 pt">
                    <input type="number" class="form-control" placeholder="0" value="1">
                  </div>
                  <p class="pt tt">&nbsp;шт.</p>
                </div>
                <div class="row ">
                  <p class="pt tt" style="float:left;">Название заказа:</p>
                  <div class="col-md-4 pt">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="row ">
                  <div class="col-md-5 pt">
                    <select class="form-control">
                      <option value="Пленка 720 dpi ГЛЯНЕЦ - 215.84 руб.">Пленка 720 dpi ГЛЯНЕЦ - 215.84 руб.</option>
                      <option value="Пленка 360 dpi ГЛЯНЕЦ - 215.84 руб.">Пленка 360 dpi ГЛЯНЕЦ - 215.84 руб.</option>
                      <option value="Пленка 720 dpi МАТ - 215.84 руб.">Пленка 720 dpi МАТ - 215.84 руб.</option>
                      <option value="Пленка 360 dpi МАТ - 215.84 руб.">Пленка 360 dpi МАТ - 215.84 руб.</option>
                      <option value="ПРОЗРАЧНАЯ Пленка 720 dpi ГЛЯНЕЦ - 215.84 руб."class="list-group-item list-group-item-success">ПРОЗРАЧНАЯ Пленка 720 dpi ГЛЯНЕЦ - 215.84 руб.</option>
                      <option value="ПРОЗРАЧНАЯ МАТ Пленка 720 dpi ГЛЯНЕЦ - 215.84 руб."class="list-group-item list-group-item-success">ПРОЗРАЧНАЯ МАТ Пленка 720 dpi ГЛЯНЕЦ - 215.84 руб.</option>
                      <option value="Пленка 1440 dpi ГЛЯНЕЦ - 319.2 руб." class="list-group-item list-group-item-warning">Пленка 1440 dpi ГЛЯНЕЦ - 319.2 руб.</option>
                      <option value="Пленка 720 dpi МАТ - 215.84 руб."class="list-group-item list-group-item-warning">Пленка 720 dpi МАТ - 215.84 руб.</option>
                      <option value="ПРОЗРАЧНАЯ Пленка 720 dpi ГЛЯНЕЦ - 215.84 руб."class="list-group-item list-group-item-success">Пленка 720 dpi ГЛЯНЕЦ - 215.84 руб.</option>
                      <option value="ПРОЗРАЧНАЯ МАТ Пленка 720 dpi ГЛЯНЕЦ - 215.84 руб."class="list-group-item list-group-item-success">Пленка 720 dpi ГЛЯНЕЦ - 215.84 руб.</option>
                    </select>
                    <small><center><b class="ht">*Доступная ширина мататериала (печати): 1 м , 1,2 м , 1,5 м</b></center></small>
                  </div>
                </div>
                <div class="row ">
                  <div class="col-lg-2 pt">
                  <select class="form-control" >
                    <option value="">нет</option>
                    <option value="">гляец</option>
                    <option value="">мат</option>
                  </select>
                  </div>
                  <b class="tt pt">Ламинация + 159.6 руб. \м2  (1м , 1,2м , 1,5м)</b>
                  <br><br> <br>
                  <div class="col-lg-6 pt">
                    <b > Прикатка: </b>
                    <select class="form-control">
                      <option value="">ничего не делать</option>
                      <option value="">462р\м2 - На ПВХ 2мм (китай), лист 3х2м (макс размер цельного куска)</option>
                      <option value="">546р\м2 - На ПВХ 3мм (китай), лист 3х2м (макс размер цельного куска)</option>
                      <option value="">1520р\м2 - На композит, лист 1,2х6м (макс размер цельного куска)</option>
                      <option value="">912р\м2 - На оцинковку, лист 1х2м (макс размер цельного куска)</option>
                    </select>
                  </div>
                </div>
                <div class="row  ">
                  <p class="tt ht pt">Ширина:</p>
                  <div class="col-md-2 pt">
                    <input type="text"class="form-control" placeholder="0">
                  </div>
                  <p class="tt pt">мм.&nbsp;&nbsp;&nbsp;&nbsp;Высота:</p>
                  <div class="col-md-2 pt">
                    <input type="text"class="form-control" placeholder="0">
                  </div>
                  <p class="tt pt">мм.</p>
                </div>
                <div class="row ">
                  <button type="button" class="btn btn-default ht pt" data-toggle="button"> Разрезать по периметру 3руб\м.п.</button>
                </div>
                <div class="row ">
                  <button type="button" class="btn btn-default ht pt" data-toggle="button">Печать целым куском</button>
                </div>
                <small class="">(могут быть добавлены к цене остатки материалов)</small>
                <div class="row">
                  <button class="btn btn-primary ht pt"  name="button">Рассчитать</button>
                </div>
              </form>
            </div>
          <div class="tab-pane  active" id="banner-grid">
              <form action="" class="form">
                <div class="row ">
                  <button type="button" class="btn btn-danger pt" data-toggle="button">СРОЧНО</button>
                </div>
                <div class="row ">
                   <div class="btn-group pt" style="align-items: center;" data-toggle="buttons">
                    <label class="btn btn-default active">
                      <input type="radio" name="options" id="option1"> Односторонняя печать
                    </label>
                    <label class="btn btn-default">
                      <input type="radio" name="options" id="option3"> Двусторонняя печать
                    </label>
                  </div>
                </div>
                <div class="row">
                  <p class="pt tt">Количество копий:</p>
                  <div class="col-md-2 pt">
                    <input type="number" class="form-control" placeholder="0" value="1">
                  </div>
                  <p class="pt tt">&nbsp;шт.</p>
                </div>
                <div class="row ">
                  <p class="pt tt" style="float:left;">Название заказа:</p>
                  <div class="col-md-4 pt">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="row ">
                  <div class="col-md-5 pt">
                    <select class="form-control">
                      <option value="Литой 440 -  251.56руб.;251.56;bannerlitoy;169.48">Литой 440 - 251.56руб.</option>
                      <option value="Ламинированый 440 - 193.8руб.;193.8;banner;79.8">Ламинированый 440 - 193.8руб.</option>
                      <option value="Баннерная сетка - 269.8руб.;269.8;mesh;">Баннерная сетка - 269.8руб.</option>
                    </select>
                    <small><center><b class="ht">Ширина материала для печати целым куском: 3,2м (печать 3,1м) </b></center></small>
                  </div>
                </div>
                <div class="row  ">
                  <p class="tt ht pt">Ширина:</p>
                  <div class="col-md-2 pt">
                    <input type="text"class="form-control" placeholder="0">
                  </div>
                  <p class="tt pt">мм.&nbsp;&nbsp;&nbsp;&nbsp;Высота:</p>
                  <div class="col-md-2 pt">
                    <input type="text"class="form-control" placeholder="0">
                  </div>
                  <p class="tt pt">мм.</p>
                </div>
                <div class="row ">
                  <button type="button" class="btn btn-default ht pt" data-toggle="button"> Разрезать по периметру 3руб\м.п.</button>
                </div>
                <div class="row ">
                  <div class="btn-group pt" style="align-items: center;" data-toggle="buttons">
                   <label class="btn btn-default">
                     <input type="radio" name="options" id="option1"> <b> Подворот по периметру <br>(без проклейки)</b>
                   </label>
                   <label class="btn btn-default">
                     <input type="radio" name="options" id="option2"> <b>Пропайка по периметру <br>(проклейка скотчем)</b>
                   </label>
                   <label class="btn btn-default active">
                     <div style="padding: 10px 0 10px 0; ">
                     <input type="radio" name="options" id="option3"> <b>Нет</b>
                     </div>
                   </label>
                  </div>
                   <br>
                   <div class="col-lg-1"></div>
                   <div class="col-lg-2">
                     <small class="text-muty"> 3 руб. м\п</small>
                   </div>
                   <div class="col-lg-2">
                     <small class="text-muty ht">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;25.2 руб. м\п </small>
                   </div>
                    <br>
                  <p class="ht">или укажите длину пропайки</p>
                  <input type="number" class="form-control ht" style="max-width: 150px; float: left;" placeholder="0">
                  <p class="ht tt">метров</p>
                </div>
                <div class="row ">
                  <div class="col-lg-8 pt" style="float:left;">
                    <b class="">Люверсы - 10 руб.\шт </b>
                    <div class="btn-group" style="align-items: center;" data-toggle="buttons">
                     <label class="btn btn-default">
                       <input type="radio" name="options" id="option1"> через <b>30 см</b>
                     </label>
                     <label class="btn btn-default">
                       <input type="radio" name="options" id="option3"> через<b> 50 см</b>
                     </label>
                     <label class="btn btn-default">
                       <input type="radio" name="options" id="option4"> <b>По углам</b>
                     </label>
                     <label class="btn btn-default active">
                       <input type="radio" name="options" id="option5"> <b>Нет</b>
                     </label>
                    </div>
                  </div>
                  <div class="col-lg-6">
                  <b class="ht pt">или укажите кол-во люверсов (нарис. в макете)</b>
                  <input  type="txt"style="max-width:250px;" class="form-control ht"  value="">
                  </div>
                </div>
                <div class="row ">
                  <span class="ht pt">Дополнительная двойная пропайка (спайка баннера между собой при привышении размеров ширины материала 3,2м)</span>
                  <input  type="txt"style="max-width:250px;" class="form-control pt"  value="">
                </div>
                <div class="row">
                  <button class="btn btn-primary ht pt"  name="button">Рассчитать</button>
                </div>
              </form>
            </div>
          <div class="tab-pane" id="orajet">
            <form class="form">
                <div class="row ">
                  <button type="button" class="btn btn-danger pt" data-toggle="button">СРОЧНО</button>
                </div>

                <div class="row ">
                  <p class="pt tt">Количество копий:</p>
                  <div class="col-md-2 pt">
                    <input type="number" class="form-control" placeholder="0" value="1">
                  </div>
                  <p class="pt tt">&nbsp;шт.</p>
                </div>
                <div class="row ">
                  <p class="pt tt" style="float:left;">Название заказа:</p>
                  <div class="col-md-4 pt">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="row ">
                  <div class="col-md-5 pt">
                    <select class="form-control">
                      <option value="Пленка ORAJET 720 dpi ГЛЯНЕЦ - 380 руб.">Пленка 720 dpi ГЛЯНЕЦ - 380 руб.</option>
                      <option value="Пленка ORAJET 1440 dpi ГЛЯНЕЦ - 456 руб.">Пленка 360 dpi ГЛЯНЕЦ - 456 руб.</option>
                      <option value="Пленка POLIPRINT 1440 dpi ГЛЯНЕЦ - 456 руб.">Пленка 360 dpi ГЛЯНЕЦ - 456 руб.</option>
                    </select>
                    <small><center><b class="ht">*Доступная ширина мататериала (печати): 1 м , 1,2 м , 1,5 м</b></center></small>
                  </div>
                </div>
                <div class="row ">
                  <div class="col-lg-2 pt">
                  <select class="form-control" >
                    <option value="">нет</option>
                    <option value="">гляец</option>
                    <option value="">мат</option>
                  </select>
                  </div>
                  <b class="tt pt">Ламинация ORAJET + 304 руб. \м2  (1м , 1,2м , 1,5м)</b>
                  <br><br> <br>
                  <div class="col-lg-6 pt">
                    <b > Прикатка: </b>
                    <select class="form-control">
                      <option value="">ничего не делать</option>
                      <option value="">462р\м2 - На ПВХ 2мм (китай), лист 3х2м (макс размер цельного куска)</option>
                      <option value="">546р\м2 - На ПВХ 3мм (китай), лист 3х2м (макс размер цельного куска)</option>
                      <option value="">1520р\м2 - На композит, лист 1,2х6м (макс размер цельного куска)</option>
                      <option value="">912р\м2 - На оцинковку, лист 1х2м (макс размер цельного куска)</option>
                    </select>
                  </div>
                </div>
                <div class="row  ">
                  <p class="tt ht pt">Ширина:</p>
                  <div class="col-md-2 pt">
                    <input type="text"class="form-control" placeholder="0">
                  </div>
                  <p class="tt pt">мм.&nbsp;&nbsp;&nbsp;&nbsp;Высота:</p>
                  <div class="col-md-2 pt">
                    <input type="text"class="form-control" placeholder="0">
                  </div>
                  <p class="tt pt">мм.</p>
                </div>
                <div class="row ">
                  <button type="button" class="btn btn-default ht pt" data-toggle="button"> Разрезать по периметру 3руб\м.п.</button>
                </div>
                <div class="row ">
                  <button type="button" class="btn btn-default ht pt" data-toggle="button">Печать целым куском</button>
                </div>
                <small class="">(могут быть добавлены к цене остатки материалов)</small>
                <div class="row">
                  <button class="btn btn-primary ht pt"  name="button">Рассчитать</button>
                </div>
              </form>
          </div>
          <div class="tab-pane" id="vision">
            <form class="form">
                <div class="row ">
                  <button type="button" class="btn btn-danger pt" data-toggle="button">СРОЧНО</button>
                </div>
                <div class="row ">
                  <p class="pt tt">Количество копий:</p>
                  <div class="col-md-2 pt">
                    <input type="number" class="form-control" placeholder="0" value="1">
                  </div>
                  <p class="pt tt">&nbsp;шт.</p>
                </div>
                <div class="row ">
                  <p class="pt tt" style="float:left;">Название заказа:</p>
                  <div class="col-md-4 pt">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="row ">
                  <div class="col-md-5 pt">
                    <select class="form-control">
                      <option value="Пленка Vision 720 dpi ГЛЯНЕЦ - 440.4 руб.">Пленка Vision 720 dpi - 440.4 руб.</option>
                      <option value="Пленка Vision 360 dpi ГЛЯНЕЦ - 440.4 руб.">Пленка Vision 360 dpi - 440.4 руб.</option>
                    </select>
                    <small><center><b class="ht">*Доступная ширина мататериала (печати): 1 м , 1,2 м , 1,5 м</b></center></small>
                  </div>
                </div>
                <div class="row  ">
                  <p class="tt ht pt">Ширина:</p>
                  <div class="col-md-2 pt">
                    <input type="text"class="form-control" placeholder="0">
                  </div>
                  <p class="tt pt">мм.&nbsp;&nbsp;&nbsp;&nbsp;Высота:</p>
                  <div class="col-md-2 pt">
                    <input type="text"class="form-control" placeholder="0">
                  </div>
                  <p class="tt pt">мм.</p>
                </div>
                <div class="row ">
                  <button type="button" class="btn btn-default ht pt" data-toggle="button"> Разрезать по периметру 3руб\м.п.</button>
                </div>
                <div class="row ">
                  <button type="button" class="btn btn-default ht pt" data-toggle="button">Печать целым куском</button>
                </div>
                <small class="">(могут быть добавлены к цене остатки материалов)</small>
                <div class="row">
                  <button class="btn btn-primary ht pt"  name="button">Рассчитать</button>
                </div>
            </form>
          </div>
          <div class="tab-pane" id="blueback">
            <form class="form">
                <div class="row ">
                  <button type="button" class="btn btn-danger pt" data-toggle="button">СРОЧНО</button>
                </div>
                <div class="row ">
                  <p class="pt tt">Количество копий:</p>
                  <div class="col-md-2 pt">
                    <input type="number" class="form-control" placeholder="0" value="1">
                  </div>
                  <p class="pt tt">&nbsp;шт.</p>
                </div>
                <div class="row ">
                  <p class="pt tt" style="float:left;">Название заказа:</p>
                  <div class="col-md-4 pt">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="row ">
                  <div class="col-md-5 pt">
                    <select class="form-control">
                      <option value="Постер блюбэк 3х6м стандарт 2pass - 88.16руб. кв;88.16;blueback2PASS;53.2">Постер блюбэк 3х6м стандарт 2pass - 1586.88 руб.</option>
                      <option value="Постер блюбэк 3х6м бизнес 3pass - 98.04руб. кв;98.04;blueback3PASS;62.32">Постер блюбэк 3х6м бизнес 3pass - 1764.72 руб.</option>
                      <option value="Постер блюбэк 3х12м стандарт 2pass - 88.16руб. кв;88.16;blueback_big_2PASS;53.2">Постер блюбэк 3х12м стандарт 2pass - 3173.76 руб.</option>
                    </select>
                  </div>
                </div>
                <div class="row  ">
                  <p class="tt ht pt">Ширина:</p>
                  <div class="col-md-2 pt">
                    <input type="text"class="form-control" placeholder="0">
                  </div>
                  <p class="tt pt">мм.&nbsp;&nbsp;&nbsp;&nbsp;Высота:</p>
                  <div class="col-md-2 pt">
                    <input type="text"class="form-control" placeholder="0">
                  </div>
                  <p class="tt pt">мм.</p>
                </div>
                <div class="row ">
                  <button type="button" class="btn btn-default ht pt" data-toggle="button"> Разрезать по периметру 3руб\м.п.</button>
                </div>
                <div class="row ">
                  <button type="button" class="btn btn-default ht pt" data-toggle="button">Печать целым куском</button>
                </div>
                <small class="">(могут быть добавлены к цене остатки материалов)</small>
                <div class="row">
                  <button class="btn btn-primary ht pt"  name="button">Рассчитать</button>
                </div>
            </form>
          </div>
          <div class="tab-pane" id="citylight">
          </div>
          <div class="tab-pane" id="blueback-not-standard">
          </div>
          <div class="tab-pane" id="city-paper">
          </div>
          <div class="tab-pane" id="flags-grid">
          </div>
          <div class="tab-pane" id="wallpapers">
          </div>
          <div class="tab-pane" id="epson">
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
  echo "<br><br>";
  require_once "blocks/footer.php";
  require_once "stop.php";
?>
