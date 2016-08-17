<?php
  require_once "start.php";
  require_once "blocks/mainmenu.php";
  echo "<br><br><br><br><br>";
?>

<div class="container">
  <div class="row imghelpmaterial">
    <div style="padding-left: 20px; border-bottom: 1px solid gray;">
      <h1>Оформление заказа</h1>
    </div>

      <div style="background-color: #2e4659;"><p style="font-size:16px; color: white; padding-left: 20px;">A5 (210x148) 1000шт. Мелованная Глянцевая 130г/м². Красочность 4+4. Без покрытия</p></div>

        <form class="form" method="post">


        <div class="row">
        <div class="col-lg-3">
          <h4 class="ht">Название вашего заказа</h4>
        </div>
        <div class="col-lg-9">
          <input type="text" class="form-control" placeholder="ТуТ" style="max-width: 95%;">
          <br>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-3">
          <h4 class="ht">Красочность печати</h4>
        </div>
        <div  class="col-lg-9">
          <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-default">
              <input type="radio" name="options" id="option1"> Двусторонняя 4+4
            </label>
            <label class="btn btn-default">
              <input type="radio" name="options" id="option3"> Односторонняя 4+0
            </label>
          </div>
          <br>
        </div>
        </div>
        <div class="row">
          <div class="col-lg-3">
            <h4 class="ht">Загрузите изображение</h4>
          </div>
          <div class="col-lg-9">
            <!-- 0<form role="form" style="padding-top: 5px;"> -->
              <p style="padding-top: 10px;">Перед загрузкой ознакомьтесь с <a href="#" data-toggle="modal" data-target="#modal-1">требованиями к макетам</a></p>
              <button class="btn btn-primary" onclick="document.getElementById('file1').click()"><i class="fa fa-download" aria-hidden="true"></i> Загрузить</button>
              <input type="file" class="file" id="file1"/>
              <br>
              <p>Лицевая сторона</p>
              <button class="btn btn-primary" onclick="document.getElementById('file2').click()"><i class="fa fa-download" aria-hidden="true"></i> Загрузить</button>
              <input type="file" class="file" id="file2"/>
              <p>Обратная сторона</p>
            <!-- </form> -->
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3">
            <h4 class="ht">Послепечатные работы</h4>
          </div>
          <div class="col-lg-9">
            <table cellspacing>
              <tr>
                <td>
                  <select class="form-control">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                  </select>
                </td>
                <td valign="middle" >
                <span style="padding-left:5px;">  Фальцовка (сгиб) <span class="dashed"><b> 0,1 руб.</b></span> шт</span>
                </td>
              </tr>
              <tr>
                <td>
                  <select class="form-control">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                  </select>

                </td>
                <td valign="middle" >
                <span style="padding-left:5px;">  Дополнительный рез <span class="dashed"><b>+50 руб. </b></span>за 1000 шт. </span>
                </td>
              </tr>
              <tr>
                <td>
                  <select class="form-control">
                    <option>нет</option>
                    <option>1 подход</option>
                    <option>2 подхода</option>
                    <option>3 подхода</option>
                    <option>4 подхода</option>
                    <option>5 подходов</option>
                  </select>
                </td>
                <td valign="middle" >
                <span style="padding-left:5px;">  Перфорация <span class="dashed"><b> +0,2 руб. </b></span> за 1 подход за 1 шт. </span>
                </td>
              </tr>
              <tr>
                <td>
                  <select class="form-control">
                    <option>нет</option>
                    <option>1 номер</option>
                    <option>2 номера</option>
                  </select>
                </td>
                <td valign="middle" >
                <span style="padding-left:5px;">  Нумерация <span class="dashed"><b>+0,4 руб.</b></span> за 1 номер за 1 шт (минимальный размер между номерами 62мм).</span>
                </td>
              </tr>
              <tr>
                <td>
                  <select class="form-control">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                  </select>
                </td>
                <td valign="middle" >
                <span style="padding-left:5px;"> Отверстие ⌀ 5 мм  <span class="dashed"><b>+200 руб.</b></span>за 1000 шт. </span>
                </td>
              </tr>
              <tr>
                <td>
                  <select class="form-control">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                  </select>
                </td>
                <td valign="middle" >
                <span style="padding-left:5px;">Биговка (канавка) <span class="dashed"><b>0,5 руб.</b></span> шт. </span>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox">  Закругление углов <span class="dashed"><b>+150 руб.</b></span> за 1000 шт.
                    </label>
                  </div>
                </td>
              </tr>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3">
            <h4 class="ht">Превью макета</h4>
          </div>
          <div class="col-lg-9">
            <button class="btn btn-primary" onclick="document.getElementById('file3').click()"><i class="fa fa-download" aria-hidden="true"></i> Загрузить</button>
            <input type="file" class="file" id="file3"/>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3">
            <h4 class="ht">Способ доставки</h4>
          </div>
          <div class="col-lg-9">
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                Самовывоз (<span class="dashed"><b>Симферопольский район, с. Фонтаны, ул. Чкалова, д 65 </b></span>)
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                Быстрая почта" (115 руб., за счёт клиента)
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                Доставка по г. Симферополю (бесплатно)
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
                Рейсовый автобус
              </label>
            </div>
            <div id="deliveryForm" class="col-1-1 pt18">
              <div id="deliveryForm_2">
                <div class="form-inline">
                  <input type="text" class="form-control" name="delivery[userName]" placeholder="Имя Фамилия" value="Иван" >
                  <input type="text" class="form-control ht" name="delivery[phone]" placeholder="Телефон" value="+7 978 036 72 39">
                </div>
                <div class="col-1-3 pt14 pr-s">
                  <select class="form-control" style="max-width: 280px;" >
                    <option value="Алушта">Алушта</option>
                    <option value="Армянск">Армянск</option>
                    <option value="Бахчисарай">Бахчисарай</option>
                    <option value="Белогорск">Белогорск</option>
                    <option value="Вилино">Вилино</option>
                    <option value="Джанкой">Джанкой</option>
                    <option value="Евпатория">Евпатория</option>
                    <option value="Керчь">Керчь</option>
                    <option value="Краснодар">Краснодар</option>
                    <option value="Красноперекопск">Красноперекопск</option>
                    <option value="Москва">Москва</option>
                    <option value="Москва дер. Машково, Промзона">Москва дер. Машково, Промзона</option>
                    <option value="Нижний Новгород">Нижний Новгород</option>
                    <option value="Раздольное">Раздольное</option>
                    <option value="Ростов на Дону">Ростов на Дону</option>
                    <option value="Саки">Саки</option>
                    <option value="Санкт Петербург">Санкт Петербург</option>
                    <option value="Севастополь">Севастополь</option>
                    <option value="Симферополь">Симферополь</option>
                    <option value="Судак">Судак</option>
                    <option value="Феодосия">Феодосия</option>
                    <option value="Черноморское (Крым)">Черноморское (Крым)</option>
                    <option value="Щелкино">Щелкино</option>
                    <option value="Ялта">Ялта</option>
                  </select>
                </div>
                <div class="col-2-3 pt14">
                  <select class="form-control" style="max-width: 280px;">
                    <option value="ул. Ленина 116-г (Отделение №1)">ул. Ленина 116-г (Отделение №1)</option>
                  </select>
                </div>
                <div class="col-1-1 pt14">
                    <textarea class="form-control" style="max-width: 95%;" name="delivery[description]" placeholder="Дополнительная информация"></textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row" style="margin-bottom: 40px;">
          <div class="col-lg-3">
            <h4 class="ht">Комментарии к заказу</h4>
          </div>
          <div class="col-lg-9">
            <textarea class="form-control" rows="3" style="max-width: 95%;"></textarea>
          </div>
        </div>
        <div class="row" style="padding-bottom: 20px;">
          <div class="col-lg-3">
          </div>
          <div class="col-lg-9">
            <p>Вес партии: 2.70 кг.</p>
            <p>Размер посылки: 99х210х90 мм.</p>
            <div class="row">
              <div class="col-md-6">
                <span style="font-size: 22px;"><b>Итого: 90000000000 руб.</b></span>
              </div>
              <div class="col-md-6">
                <button class="btn btn-danger" data-action="createOrder">Оформить заказ</button>
              </div>
            </div>
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