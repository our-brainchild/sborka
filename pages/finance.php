<?php
  require_once "start.php";
  require_once "blocks/mainmenu.php";
  $client_TBD = getArrayClient($_SESSION["id"]);
  echo "<br><br><br>";
  echo "<br><br><br>";
?>
<div class="container">
  <div class="row">
      <div class="col-md-8">
        <form class="">
          <div class="">
            <div class="">
              <div class=""><h4>На вашем счету:
                <span class="dashed"><strong><?php  echo $client_TBD["score_client"];?> руб.</strong></span></h4>
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
                  <br>
                </div>
                <div class="row">
                  <div class="col-lg-12 my">
                     <div class="input-group">
                       <input type="text" class="form-control" placeholder="0 руб.">
                       <span class="input-group-btn">
                         <button class="btn btn-primary" type="button">Пополнить</button>
                       </span>
                     </div><!-- /input-group -->
                   </div><!-- /.col-lg-6 -->
                  </div><!-- /.row -->
                </div>
              </div>
            </form>
            <br/>
            <br/>
            <div class="table-responsive">
              <?php $select_h_pay = selectHistory_Pay($_SESSION['id']);?>
              <table class="table table-hover">
                <thead>
                  <th align="center">№</th>
                  <th align="center">ID в системе</th>
                  <th align="center">Способ оплаты</th>
                  <th align="center">Плательщик</th>
                  <th align="center">Сумма</th>
                  <th align="center">Описание</th>
                  <th align="center">Фото</th>
                </thead>
                <tbody>
                  <?php
                    for($i=0; $i < count($select_h_pay); $i++){
                      include "blocks/table_h_pay.php";
                    }
                  ?>
                </tbody>
              </table>
            </div>

          </div>

        <div class="col-md-4">
          <form class="form" method="POST"  enctype="multipart/form-data" action="blocks/add_pay.php">
            <div class="">
              <div class="head"><h4>Уведомить об оплате&nbsp;<span class="dashed"><i class="fa fa-certificate"></i></span></h4>
              </div>
              <div class="">
                <div class="">
                  <label>Способ оплаты
                  </label><br>
                  <select class="form-control" name="type_pay">
                    <option value="0">Не выбрано</option>
                    <option value="1">РНКБ (Пополнение карты)</option>
                    <option value="2">Сбербанк РФ (Пополнение карты)</option>
                    <option value="3">QIWI</option>
                  </select>
                  <span class="" tabindex="0" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-11-menu" aria-haspopup="true" style="width: 333px;">
                    <span class="">
                    </span>
                  </span>
                </div>
                <div class="row">
                  <div class="col-md-8">
                    <label class="">Плательщик</label><br>
                    <input class="form-control" type="text" name="who_pay">
                  </div>
                  <div class="col-md-4">
                    <label class="">Сумма</label><br>
                    <input class="form-control"  type="text" name="sum">
                  </div>
                </div>
                <div class="row" style="margin: 0 0 10px 0;">
                  <label class="">Описание</label>
                  <textarea class="form-control" name="description"></textarea>
                </div>
                <div class="row">
                  <div class="col-lg-8 col-md-8">
                    <!-- <button class="btn btn-primary" onclick="document.getElementById('file').click()">Загрузить копию квитанции</button>
                    <input type="file" class="file" id="file" name="img_pay"/> -->
                    <div class="file_upload">
                      <button type="button"><i class='fa fa-download'></i>Загрузить копию квитанции</button>
                      <div>Файл не выбран</div>
                      <!-- <input type="hidden" name="MAX_FILE_SIZE" value="30000" /> -->
                      <input type="file" name="img_pay">
                    </div>

                  </div>
                  <div class="col-lg-4 col-md-4 text-right">
                    <input class="btn btn-primary btn-md" type="submit"/>
                  </div>
                </div>
              </div>
            </div>
            <div class=""><span class="dashed"><i class="fa fa-certificate"></i></span>&nbsp;<span class="fs-8">
              Для подтверждения оплаты через РНКБ (пополнение карты), Сбербанк РФ и Qiwi прикрепите квитанцию, подтверждающую платёж.</span>
            </div>
          </form>



        </div>
      </div>
    </div>
  </div>
  <style>
  .file_upload{
      position: relative;
      overflow: hidden;
      /*font-size: 1em;        /* example */*/
      height: 2em;           /* example */
      line-height: 2em       /* the same as height */
    }
    .file_upload > button, .file_upload > div{
      cursor: pointer
    }
    .file_upload > button{
      /*float: right;*/
      width: 8em;            /* example */
      height: 100%
    }
    .file_upload > div{
      display: none;
      padding-left: 1em;      /* example */
      padding-top: 0.2em;
    }
    @media only screen and ( max-width: 500px ){  /* example */
      .file_upload > div {
          display: none
      }
      .file_upload > button{
          width: 100%
      }
    }
    .file_upload input[type=file]{
      position: absolute;
      top: 0;
      visibility: hidden
    }

    .file_upload > button{
      background: #2e4659;
      transition: background 0.2s;
      border: 1px solid rgba(0,0,0,0.1);
      border-color: rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);
      border-radius: 2px;
      box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2) inset, 0 1px 2px rgba(0, 0, 0, 0.05);
      color: #fff;
      text-shadow: #2e4659 0 -1px 0;
      overflow: hidden;
      white-space: nowrap;
      text-overflow: ellipsis;
      width: 10em;
    }
    .file_upload:hover > button{
      background: #2e4659;
      text-shadow: #2e4659 0 -1px 0;
    }
    .file_upload:active > button {
      background: #2e4659;
      box-shadow: 0 0 3px rgba(0,0,0,0.3) inset;
    }
  </style>



<?php
  echo "<br>";
  require_once "blocks/footer.php";
  require_once "stop.php";
 ?>

 <script type="text/javascript">
   $(function(){
     var wrapper = $( ".file_upload" ),
         inp = wrapper.find( "input" ),
         btn = wrapper.find( "button" ),
         lbl = wrapper.find( "div" );

     // Crutches for the :focus style:
     btn.focus(function(){
         wrapper.addClass( "focus" );
     }).blur(function(){
         wrapper.removeClass( "focus" );
     });

     // Yep, it works!
     btn.add( lbl ).click(function(){
         inp.click();
     });

     var file_api = ( window.File && window.FileReader && window.FileList && window.Blob ) ? true : false;

     inp.change(function(){

         var file_name;
         if( file_api && inp[ 0 ].files[ 0 ] )
             file_name = inp[ 0 ].files[ 0 ].name;
         else
             file_name = inp.val().replace( "C:\\fakepath\\", '' );
         if( ! file_name.length )
             return;

         if( lbl.is( ":visible" ) ){
             lbl.text( file_name );
           //  btn.text( "Выбрать" );
         }else
             btn.text( file_name );
     }).change();

 });
 $( window ).resize(function(){
     $( ".file_upload input" ).triggerHandler( "change" );
 });
 </script>
 <script type="text/javascript">
 $(function () {
   $('[data-toggle="tooltip"]').tooltip()
 })
 </script>
