<?php
  require_once "start.php";
  require_once "blocks/mainmenu.php";
  echo "<br><br><br>";
  echo "<br><br><br>";
?>
<div class="container">
  <div class="row">
    <div>
      <div class="col-md-8">
        <form class="">
          <div class="">
            <div class="">
              <div class="">На вашем счету:
                <span class="">0 руб.</span>
              </div>
            </div>
            <div class="">
              <div class="row">
                <div class="row">
                  <div class="col-md-6">
                    <label class="">
                      <span class="">
                        <input name="payment[type]" data-change="getPayButton" value="7" type="radio" autocomplete="off">
                      </span>
                      <img src="../images/rnkb.png" class="szi">
                      <span class="">РНКБ (Пополнение карты)</span>
                    </label>
                  </div>
                  <div class="col-md-6">
                    <label class="" style="padding-top:3px;">
                      <span class="">
                        <input name="payment[type]" data-change="getPayButton" value="2" type="radio" autocomplete="off">
                      </span>
                      <img src="../images/bank.png" class="szi">
                      <span class="">Оплата по счёту (Безналичный расчёт)</span>
                    </label>
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label class="">
                        <span class="">
                          <input name="payment[type]" data-change="getPayButton" value="8" type="radio" autocomplete="off">
                        </span>
                        <img src="../images/sberbank.png" class="szi">
                        <span class="">Сбербанк РФ (Пополнение карты)</span>
                      </label>
                    </div>
                    <div class="col-md-6">
                    <label class="" style="padding-top:10px;">
                      <span class="">
                        <input name="payment[type]" data-change="getPayButton" value="4" type="radio" autocomplete="off"> </span>
                        <img src="../images/yandex.png" class="szi">
                        <span class="">Яндекс-деньги</span>
                      </label>
                    </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <label class="">
                          <span class="">
                            <input name="payment[type]" data-change="getPayButton" value="3" type="radio" autocomplete="off">
                          </span>
                          <img src="../images/visa.png" class="szi">
                          <span class="">Visa, Master Card</span>
                        </label>
                      </div>
                      <div class="col-md-6">
                      <label class="" style="padding-top:7px;">
                        <span class="">
                          <input name="payment[type]" data-change="getPayButton" value="5" type="radio" autocomplete="off">
                        </span> <img src="../images/qiwi.png" class="szi">
                        <span class="">QIWI</span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div id="payButtons" class="col-md-4">
                    <div class="">К оплате:</div>
                    <div class="">
                      <input type="text" class="" name="payment[value]" placeholder="0" value="">
                    </div>
                    <div class=""> руб.
                    </div>
                    <div class="">
                      <button type="button" class="btn btn-primary btn-md" data-action="pay">Пополнить</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>

        <div class="col-md-4">
          <form class="">
            <div class="">
              <div class="">Уведомить об оплате<span class="">*</span>
              </div>
              <div class="">
                <div class="">
                  <label class="">Способ оплаты
                  </label><br>
                  <select class="form-control">
                    <option value="">Не выбрано</option>
                    <option value="7">РНКБ (Пополнение карты)</option>
                    <option value="8">Сбербанк РФ (Пополнение карты)</option>
                    <option value="5">QIWI</option>
                  </select>
                  <span class="" tabindex="0" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-11-menu" aria-haspopup="true" style="width: 333px;">
                    <span class="">
                    </span>
                  </span>
                </div>
                <div class="row">
                  <div class="col-md-8">
                    <label class="">Плательщик</label><br>
                    <input class="form-control" type="text">
                  </div>
                  <div class="col-md-4">
                    <label class="">Сумма</label><br>
                    <input class="form-control"  type="text">
                  </div>
                </div>
                <div class="row" style="margin: 0 0 10px 0;">
                  <label class="">Описание</label>
                  <textarea class="form-control"></textarea>
                </div>
                <div class="row">
                <style>
                .file {
                    top: 5px;

                    position: absolute;
                    width: 0;
                    height: 0;
                    opacity: 0.01;

                }
                .ht{margin-left: 15px;}
                </style>
                <div class="ht" data-type="receipt">
                  <span class="">
                    <i class=""></i> Загрузите копию квитанции
                  </span>
                  <div class="" style="width: 100%"></div>
                </div>

                <button class="btn btn-primary ht" onclick="document.getElementById('file').click()">Загрузить</button>
                <input type="file" class="file" id="file"/>

                </div>


                  <button class="btn btn-primary btn-md" type="button"  name="Отправить">Отправить</button>
                <div class=""></div>
              </div>
            </div>
            <div class=""> Для подтверждения оплаты через РНКБ (пополнение карты), Сбербанк РФ и Qiwi прикрепите квитанцию, подтверждающую платёж
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>

<?php
  echo "<br>";
  require_once "blocks/footer.php";
  require_once "stop.php";
 ?>
