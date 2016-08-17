<?php
  require_once "start.php";
  require_once "blocks/mainmenu.php";
  echo "<br><br><br><br><br>";
?>
<div class="container">
  <div class="row imghelpmaterial">
    <form class="form"method="post">
      <div class="btn-group pt" style="align-items: center;" data-toggle="buttons">
        <label class="btn btn-default">
          <input type="radio" name="options" id="option1"> Офсетная печать
        </label>
        <label class="btn btn-default">
          <input type="radio" name="options" id="option3"> Цифровая печать
        </label>
      </div>
      <div class="row">
        <div class="col-lg-2 my-style-list-group pt">
          <b class="my-style-list-group" style="padding-top: 25px;">Бумага</b>
        </div>
        <div class="col-lg-2 pt">
          <span class="text-muted">Тип</span>
          <select class="form-control">
            <option>Не выбрано</option>
            <option>Меловая</option>
            <option>Офсетная</option>
            <option>Самоклейка</option>
            <option>Картон</option>
            <option>Этикеточная</option>
          </select>
        </div>
        <div class="col-lg-2 pt">
          <span class="text-muted">Фактура</span>
          <select class="form-control">
            <option>Не выбрано</option>
          </select>
        </div>
        <div class="col-lg-2 pt">
          <span class="text-muted">Плотность</span>
          <select class="form-control">
            <option>Не выбрано</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-2 my-style-list-group pt">
          <b class="my-style-list-group" style="padding-top: 25px;">Изделия</b>
        </div>
        <div class="col-lg-2 pt">
          <span class="text-muted">Формат</span>
          <select class="form-control">
            <option>Другой</option>
            <option>В2</option>
            <option>А2</option>
            <option>А3</option>
            <option>А4</option>
            <option>2Евро</option>
          </select>
        </div>
        <div class="col-lg-1 pt">
          <span class="text-muted">Ширина</span>
            <input type="text" class="form-control" placeholder="0">
        </div>
        <div class="col-lg-1 pt">
          <span class="text-muted">Высота</span>
            <input type="text" class="form-control" placeholder="0">
        </div>
        <div class="col-lg-1 pt">
          <span class="text-muted">Тираж</span>
            <input type="text" class="form-control" placeholder="0">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-2 my-style-list-group pt">
          <b class="my-style-list-group" style="padding-top: 25px;">Красочность</b>
        </div>
        <div class="col-lg-2 pt">
          <span class="text-muted">Лицо</span>
          <select class="form-control">
            <option>Не выбрано</option>
            <option>1</option>
            <option>4</option>
          </select>
        </div>
        <div class="col-lg-2 pt">
          <span class="text-muted">Фактура</span>
          <select class="form-control">
            <option>Не выбрано</option>
            <option>0</option>
            <option>1</option>
            <option>4</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-2 my-style-list-group pt">
          <b class="my-style-list-group" style="padding-top: 25px;">Ламинация</b>
        </div>
        <div class="col-lg-2 pt">
          <span class="text-muted">Лицевая</span>
          <select class="form-control">
            <option>Нет</option>
            <option>Глянцевая</option>
            <option>Матовая</option>
          </select>
        </div>
        <div class="col-lg-2 pt">
          <span class="text-muted">Обратная</span>
          <select class="form-control">
            <option>Нет</option>
            <option>Глянцевая</option>
            <option>Матовая</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-2 my-style-list-group pt">
          <b class="my-style-list-group" style="padding-top:7px;">Фальцовка</b>
        </div>
        <div class="col-lg-1 pt">
          <select class="form-control">
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-2 my-style-list-group pt">
          <b class="my-style-list-group" style="padding-top: 7px;">Перворация</b>
        </div>
        <div class="col-lg-1 pt">
          <select class="form-control">
            <option>Нет</option>
            <option>1 подход</option>
            <option>2 подхода</option>
            <option>3 подхода</option>
            <option>4 подхода</option>
            <option>5 подходов</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-2 my-style-list-group pt">
          <b class="my-style-list-group" style="padding-top: 7px;">Нумирация</b>
        </div>
        <div class="col-lg-1 pt">
          <select class="form-control">
            <option>Нет</option>
            <option>1 номер</option>
            <option>2 номера</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-2 my-style-list-group pt">
        </div>
        <div class="col-lg-2 pt">
          <button class="btn btn-danger">Расчитать</button>
        </div>
      </div>
    </form>
  </div>
</div>
<?php
  echo "<br><br>";
  require_once "blocks/footer.php";
  require_once "stop.php";
?>
