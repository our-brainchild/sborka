<?php
  require_once "start.php";
  require_once "blocks/mainmenu.php";
  echo "<br><br><br><br><br>";
?>
  <div class="container" >
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
      <div class="col-sm-9 col-md-9 col-lg-9">
        <form class="form">
          <div class="tab-content">

            <div class="tab-pane active" id="banner-grid">
              <div class="row pt">
                <button type="button" class="btn btn-danger ht" data-toggle="button">СРОЧНО</button>
              </div>
               <div class="row pt">
                 <div class="btn-group pt" style="align-items: center;" data-toggle="buttons">
                  <label class="btn btn-default active">
                    <input type="radio" name="options" id="option1"> Односторонняя печать
                  </label>
                  <label class="btn btn-default">
                    <input type="radio" name="options" id="option3"> Двусторонняя печать
                  </label>
                </div>
              </div>
              <div class="row pt">
                <p class="pt" style="float:left;">Количество копий:</p>
                <div class="col-md-2">
                  <input type="number" class="form-control" placeholder="0">
                </div>
                <p class="pt">&nbsp;шт.</p>
              </div>
              <div class="row pt">
                <p class="pt" style="float:left;">Название:</p>
                <div class="col-md-4">
                <input type="text" class="form-control">
                </div>
              </div>
              <div class="row pt">
                <div class="col-md-5">
                  <select class="form-control" name="">
                    <option value="Литой 440 -  251.56руб.;251.56;bannerlitoy;169.48">Литой 440 - 251.56руб.</option>
                    <option value="Ламинированый 440 - 193.8руб.;193.8;banner;79.8">Ламинированый 440 - 193.8руб.</option>
                    <option value="Баннерная сетка - 269.8руб.;269.8;mesh;">Баннерная сетка - 269.8руб.</option>
                  </select>
                  <small><center><b class="ht">Ширина материала для печати целым куском: 3,2м (печать 3,1м) </b></center></small>
                </div>
              </div>
              <div class="row pt ">
                <p class="tt ht">Ширина:</p>
                <div class="col-md-2">
                  <input type="text"class="form-control" placeholder="0">
                </div>
                <p class="tt">мм.&nbsp;&nbsp;&nbsp;&nbsp;Высота:</p>
                <div class="col-md-2">
                  <input type="text"class="form-control" placeholder="0">
                </div>
                <p class="tt">мм.</p>
              </div>
              <div class="row pt">
                <button type="button" class="btn btn-default ht" data-toggle="button"> Разрезать по периметру 3руб\м.п.</button>
              </div>
              <div class="row pt">

                <div class="btn-group pt" style="align-items: center;" data-toggle="buttons">
                 <label class="btn btn-default">
                   <input type="radio" name="options" id="option1"> <b> Подворот по периметру <br>(без проклейки)</b>
                 </label>
                 <label class="btn btn-default">
                   <input type="radio" name="options" id="option3"> <b>Пропайка по периметру <br>(проклейка скотчем)</b>
                 </label>
                </div>

                 <br>
                 <div class="col-lg-1"></div>
                 <div class="col-lg-2">
                   <small class="text-muty"> 3 руб. м\п</small>
                 </div>
                 <div class="col-lg-2">
                   <small class="text-muty"> 25.2 руб. м\п </small>
                 </div>
              </div>
              <div class="row">
                <p class="ht">или укажите длину пропайки</p>
                <input type="number" class="form-control ht" style="max-width: 150px; float: left;" placeholder="0">
                <p class="ht tt">метров</p>
              </div>
              <div class="row pt">
                <div class="col-lg-8" style="float:left;">
                  <b class="ht">Люверсы - 10 руб.\шт </b>
                  <div class="btn-group pt" style="align-items: center;" data-toggle="buttons">
                   <label class="btn btn-default">
                     <input type="radio" name="options" id="option1"> через <b>30 см</b>
                   </label>
                   <label class="btn btn-default">
                     <input type="radio" name="options" id="option3"> через<b>50 см</b>
                   </label>
                   <label class="btn btn-default">
                     <input type="radio" name="options" id="option4"> <b>по углам</b>
                   </label>
                  </div>
                </div>
                <br><br><br>
                <b class="ht pt">или укажите кол-во люверсов (нарис. в макете)</b>
                <input  type="txt"style="max-width:250px;" class="form-control ht"  value="">
              </div>
              <div class="row pt">
                <span class="ht pt">Дополнительная двойная пропайка (спайка баннера между собой при привышении размеров ширины материала 3,2м)</span>
                <input  type="txt"style="max-width:250px;" class="form-control ht"  value="">
              </div>
              <div class="row">
                <button class="btn btn-primary ht"  name="button">Рассчитать</button>
              </div>
           </div>
            <div class="tab-pane" id="wrap">

            </div>
            <div class="tab-pane" id="orajet">

            </div>
            <div class="tab-pane" id="vision">

            </div>
            <div class="tab-pane" id="blueback">

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
        </form>
      </div>
    </div>
  </div>
<?php
  echo "<br><br>";
  require_once "blocks/footer.php";
  require_once "stop.php";
?>
