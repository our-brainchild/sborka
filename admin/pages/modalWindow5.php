<?php
require_once "start.php";
require_once "blocks/mainmenu.php";
echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
?>
<div class="container">
  <div class="row">
    <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-print fa-2x" aria-hidden="true"></i></button>
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" style="width: 95% !important; max-width: 1800px !important; min-width: 600px !important;">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 class="modal-title" id="myModalLabel"><strong>Доставка</strong></h3>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" >
                <div class="tab-content">
                  <div class="tab-pane active" id="of-print">
                    <div class="list-group">
                      <a href="#common-inf-2" class="list-group-item active"  data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Печать сборных спусков</p>
                      </a>
                      <a href="#technical-requirements-3" class="list-group-item"  data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Сроки печати</p>
                      </a>
                      <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Материалы</p>
                      </a>
                      <div class="sbut">
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Офсетна бумага</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Меловая бумага</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Самоклеющаяся бумага</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Структурный картон</p>
                        </a>
                      </div>
                      <a href="#custom-banner" class="list-group-item" data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Покрытие</p>
                      </a>
                      <div class="sbut">
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Ламинация</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Глянцевый УФ лак</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Гибридный УФ лак</p>
                        </a>
                      </div>
                      <a href="#bilateral-banner" class="list-group-item" data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Послепечатные работы</p>
                      </a>
                      <div class="sbut">
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Фальцовка</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Биговка</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Перфорация</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Закругление углов</p>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="of-print">
                    <div class="list-group">
                      <a href="#common-inf-2" class="list-group-item active"  data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Цифрова печать</p>
                      </a>
                      <a href="#technical-requirements-3" class="list-group-item"  data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Сроки печати</p>
                      </a>
                      <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Материалы</p>
                      </a>
                      <div class="sbut">
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Офсетна бумага</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Меловая бумага</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Дизайнерская бумага</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Самоклеющаяся бумага</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Структурный картон</p>
                        </a>
                      </div>
                      <a href="#custom-banner" class="list-group-item" data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Покрытие</p>
                      </a>
                      <a href="#bilateral-banner" class="list-group-item" data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Послепечатные работы</p>
                      </a>
                      <div class="sbut">
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Фальцовка</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Биговка</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Перфорация</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Закругление углов</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Сверление</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Плоттерная порезка</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Переплётные работы</p>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="of-print">
                    <div class="list-group">
                      <a href="#common-inf-2" class="list-group-item active"  data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Широкоформатная печать</p>
                      </a>
                      <a href="#technical-requirements-3" class="list-group-item"  data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Сроки печати</p>
                      </a>
                      <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Материалы</p>
                      </a>
                      <div class="sbut">
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Баннер</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Пленка</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Бумага</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading"><i>Вопросы по материалам</i></p>
                        </a>
                      </div>
                      <a href="#custom-banner" class="list-group-item" data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Покрытие</p>
                      </a>
                      <a href="#bilateral-banner" class="list-group-item" data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Послепечатные работы</p>
                      </a>
                      <div class="sbut">
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Продукция без обрезки</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Обрезка в размер</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Люверсы</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Карман под трубу</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Спайка</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Плоттерная порезка</p>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="of-print">
                    <div class="list-group">
                      <a href="#common-inf-2" class="list-group-item active"  data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Уф печать</p>
                      </a>
                      <a href="#technical-requirements-3" class="list-group-item"  data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Сроки печати</p>
                      </a>
                      <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Материалы</p>
                      </a>
                      <div class="sbut">
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">ПВХ</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Акрил</p>
                        </a>
                      </div>
                      <a href="#bilateral-banner" class="list-group-item" data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Послепечатные работы</p>
                      </a>
                      <div class="sbut">
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Обрезка</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Фрезерная обрезка</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Отверстие по углам</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Люверсы</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Лазерная обрезка</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Лазерная порезка</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Крепление на скотч</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Обрешетовка</p>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="of-print">
                    <div class="list-group">
                      <a href="#common-inf-2" class="list-group-item active"  data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Печать холстов и картин</p>
                      </a>
                      <a href="#technical-requirements-3" class="list-group-item"  data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Сроки печати</p>
                      </a>
                      <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Материалы</p>
                      </a>
                      <div class="sbut">
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Холст синтетический</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Холст натуральный</p>
                        </a>
                      </div>
                      <a href="#bilateral-banner" class="list-group-item" data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Послепечатные работы</p>
                      </a>
                      <div class="sbut">
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Без обрезки</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Обрезка</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Подрамник</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Крепление</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Обрешетовка</p>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="of-print">
                    <div class="list-group">
                      <a href="#common-inf-2" class="list-group-item active"  data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Печать пластиковых карт</p>
                      </a>
                      <a href="#technical-requirements-3" class="list-group-item"  data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Сроки печати</p>
                      </a>
                      <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Материалы</p>
                      </a>
                      <div class="sbut">
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Пластик белый</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Пластик прозрачный</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Пластик золото</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Пластик золото</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Тонкий белый пластик</p>
                        </a>
                      </div>
                      <a href="#bilateral-banner" class="list-group-item" data-toggle="tab" aria-expanded="true">
                        <p class="list-group-item-heading">Послепечатные работы</p>
                      </a>
                      <div class="sbut">
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Ламинация</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Персофиникация</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Эмбоссирование</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Нумерация</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Штрих-код</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Магнитная лента</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Скретч панель</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Полоса для подписи</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Тиснение</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">Смарт-чип</p>
                        </a>
                        <a href="#plotter-cut" class="list-group-item" data-toggle="tab" aria-expanded="true">
                          <p class="list-group-item-heading">П/э упаковка</p>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" style="border-left:1px solid lightgray;">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#of-print" data-toggle="tab" aria-expanded="true">Офсетная печать</a></li>
                  <li><a href="#digit-print" data-toggle="tab" aria-expanded="true">Цифровая печать</a></li>
                  <li><a href="#wide-format" data-toggle="tab" aria-expanded="true">Широкоформат</a></li>
                  <li><a href="#UF-print"  data-toggle="tab" aria-expanded="true">УФ печать</a></li>
                  <li><a href="#canvas-and-art" data-toggle="tab" aria-expanded="true">Холсты и картины</a></li>
                  <li><a href="#plastic-cards" data-toggle="tab" aria-expanded="true">Пластиковые карты</a></li>
                </ul>
                <div class="tab-content active">
                  <div class="tab-pane active" id="common-inf-1">
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
