<?php
require_once "start.php";
require_once "blocks/mainmenu.php";
$id_h_s = $_GET['id_h_s'];
echo "<br><br><br><br><br><br>";
$select_h_s = selectH_S_ID($_SESSION['id'],$id_h_s);
?>
  <div class="container imghelpmaterial">
    <form action="blocks/edit_reg_order.php" method="post">
    <div class="row">
      <h4>Редактирование заказа: №<span class="dashed"><?php echo $select_h_s['id_history_shopping']; ?></span> </h4>
    </div>
    <div class="row">
      <div style="background-color: #2e4659; padding: 8px 0 8px 10px; font-size:16px; color: white;">
        <?php echo $select_h_s['name_i_t_h_s']; ?>
      </div>
    </div>
    <br/>

    <div class="row">
      <div class="<?php if($select_h_s['reverse_h_s'] != -1) echo "col-lg-6"; else echo "col-lg-12"; ?>">
        <center>
          <div class="file_upload">
            <button type="button"><i class="fa fa-download"></i>Загрузить</button>
            <div>Файл не выбран</div>
            <input type="file" name="file_face">
          </div>
      </center>
      </div>
      <?php if($select_h_s['reverse_h_s'] != -1)
      echo "<div class=\"col-lg-6\">
              <center>
                <div class=\"file_upload2\">
                  <button type=\"button\"><i class=\"fa fa-download\"></i>Загрузить</button>
                  <div>Файл не выбран</div>
                  <input type=\"file\" name=\"file_face2\">
                </div>
              </center>
            </div>
          </div>"; ?>
      <!-- <div class="col-lg-6">
        <center>
          <div class="file_upload2">
            <button type="button"><i class="fa fa-download"></i>Загрузить</button>
            <div>Файл не выбран</div>
            <input type="file" name="file_face2">
          </div>
        </center>
      </div>
    </div> -->

    <div class="row">
      <div class="<?php if($select_h_s['reverse_h_s'] != -1) echo "col-lg-6"; else echo "col-lg-12"; ?>">
        <center>
          <?php
            if($select_h_s['face_image_h_s'] == -1){
              echo "Нет изображения";
            }else{
              echo "<img src=\"../".$select_h_s['face_image_h_s']."\" class=\"img-responsive\" alt=\"Сломалось:((\">";
            }
          ?>
        </center>
      </div>

      <?php
      if($select_h_s['reverse_h_s'] != -1){ echo "<div class=\"col-lg-6\">
        <center>";
        if($select_h_s['reverse_h_s']== -1){
          echo "Нет изображения";
        }else{
          echo "<img src=\"../".$select_h_s['reverse_h_s']."\" class=\"img-responsive\" alt=\"Сломалось:((\">";
        }
        echo "  </center>
        </div>";
      }
      ?>
      <!-- <div class="col-lg-6">
        <center>
          <?php
            if($select_h_s['reverse_h_s']== -1){
              echo "Нет изображения";
            }else{
              echo "<img src=\"../".$select_h_s['reverse_h_s']."\" class=\"img-responsive\" alt=\"Сломалось:((\">";
            }
          ?>
        </center>
      </div> -->

    </div>
    <div class="row pt" style="margin-bottom: 40px;">
      <div class="col-lg-3 ">
        <h4 class="ht">Комментарии к заказу</h4>
      </div>
      <div class="col-lg-9 ">
        <textarea class="form-control" rows="3" style="max-width: 95%;" name="comments"><?php echo $select_h_s['comments_for_order_h_s']; ?></textarea>
      </div>
    </div>
    <div class="row pt">

          <div class="col-lg-3 ">
            <h4 class="ht">Способ доставки</h4>
          </div>

          <div class="col-lg-9">
            <div class="radio">
              <label>
                <input type="radio" name="type_shipping" id="optionsRadios1" value="0" checked="true">
                Самовывоз (<span class="dashed"><b>Крым, г. Севастополь, , ул. Адмирала Октябрьского 16, время работы с 10:00 до 18:00 (сб., вс. - выходной)</b></span>)
              </label>
            </div>

            <div class="radio">
              <label>
                <input type="radio" name="type_shipping" id="optionsRadios2" value="1">
                Быстрая почта" (115 руб., за счёт клиента)
              </label>
            </div>

            <div class="radio">
              <label>
                <input type="radio" name="type_shipping" id="optionsRadios4" value="2">
                Рейсовый автобус
              </label>
            </div>
            <div id="deliveryForm" class="col-1-1 18">
              <div id="deliveryForm_2">
                <div class="form-inline">
                  <input type="text" class="form-control" name="delivery[userName]" placeholder="Имя Фамилия" value="kik">
                  <input type="text" class="form-control ht" name="delivery[phone]" placeholder="Телефон" value="12">
                </div>
                <div class="col-1-3 14 pr-s">
                  <select class="form-control" style="max-width: 280px;" name="city_shipping">
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

                <div class="col-2-3 14">
                  <select class="form-control" style="max-width: 280px;" name="steet_shipping">
                    <option value="ул. Ленина 116-г (Отделение №1)">ул. Ленина 116-г (Отделение №1)</option>
                  </select>
                </div>

                <div class="col-1-1 14">
                    <textarea class="form-control" style="max-width: 95%;" placeholder="Дополнительная информация" name="dop_information"><?php echo $select_h_s['dop_info_h_s']; ?></textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br/>
        <center>
          <input type="submit" class="btn btn-primary" value="Сохранить изменения">
        </center>
        <br/>
        <?php
          $_SESSION['id_item_type']=$_GET['id_h_s'];
          $_SESSION['path_file_1']=$select_h_s['face_image_h_s'];
          $_SESSION['path_file_2']=$select_h_s['reverse_h_s'];
        ?>
      </form>
  </div>
</div>
<br/>
<br/>
  <style>
  .file_upload, .file_upload2{
      position: relative;
      overflow: hidden;
      /*font-size: 1em;        /* example */*/
      height: 2em;           /* example */
      line-height: 2em       /* the same as height */
    }
    .file_upload > button, .file_upload > div, .file_upload2 > button, ..file_upload2 > div{
      cursor: pointer
    }
    .file_upload > button, .file_upload2 > button{
      /*float: right;*/
      width: 8em;            /* example */
      height: 100%
    }
    .file_upload > div, .file_upload2 > div{
      display: none;
      padding-left: 1em;      /* example */
      padding-top: 0.2em;
    }
    @media only screen and ( max-width: 500px ){  /* example */
      .file_upload > div, .file_upload2 > div {
          display: none
      }
      .file_upload > button, .file_upload2 > button{
          width: 100%
      }
    }
    .file_upload input[type=file], .file_upload2 input[type=file]{
      position: absolute;
      top: 0;
      visibility: hidden
    }

    /* Making it beautiful */

    .file_upload, .file_upload2{
      /*border: 1px solid #ccc;
      border-radius: 3px;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
      transition: box-shadow 0.1s linear*/
    }
    .file_upload.focus, .file_upload2.focus{
      /*box-shadow: 0 0 5px rgba(0,30,255,0.4)*/
    }
    .file_upload > button, .file_upload2 > button{
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
    .file_upload:hover > button, .file_upload2:hover > button {
      background: #2e4659;
      text-shadow: #2e4659 0 -1px 0;
    }
    .file_upload:active > button, .file_upload2:active > button {
      background: #2e4659;
      box-shadow: 0 0 3px rgba(0,0,0,0.3) inset;
    }
  </style>
  <?php
  require_once "blocks/footer.php";
?>
  <script type="text/javascript">
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
  </script>

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



// file_upload2

$(function(){
  var wrapper = $( ".file_upload2" ),
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
<?php
  require_once "stop.php";
?>
