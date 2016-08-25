<?php
  require_once "start.php";
  require_once "blocks/mainmenu.php";
  echo "<br><br><br><br><br>";
  $id_item = $_GET['id_item'];
  $circulation = $_GET['circulation'];
  $size_circulation = $_GET['size_circulation'];
  $creasing = selectCreasing($id_item);
  $dop_rez = selectDop_Rez($id_item);
  $folding = selectFolding($id_item);
  $hole = selectHole($id_item);
  $numbering = selectNumbering($id_item);
  $perforation = selectPerforation($id_item);
  $rounding = selectInformationForItem($id_item);
?>

<div class="container">
  <div class="row imghelpmaterial">
    <div style="padding-left: 20px; border-bottom: 1px solid gray;">
      <h1>Оформление заказа</h1>
    </div>

      <div style="background-color: #2e4659;"><p style="font-size:16px; color: white; padding-left: 20px;"><?php echo $rounding['name_item_type']; ?></p></div>

        <form class="form" enctype="multipart/form-data" method="post" action="blocks/registration_order.php">

        <div class="row pt">
        <div class="col-lg-3 ">
          <h4 class="ht">Название вашего заказа</h4>
        </div>
        <div class="col-lg-9 ">
          <input type="text" name="name_order" class="form-control" placeholder="ТуТ" style="max-width: 95%;">
          <br>
        </div>
        </div>
        <div class="row pt">

        <?php
        if($rounding['side_item_type'] == 'twoside'){
            echo "
            <div class='col-lg-3'>
              <h4 class='ht'>Красочность печати</h4>
            </div>
            <div  class='col-lg-9'>
              <div class='btn-group' data-toggle='buttons'>

                <label class='btn btn-default'>
                  <input type='radio' name='options_color' id='option1' value='2' onchange='modifieColor(this.value)'> Двусторонняя 4+4
                </label>

                <label class='btn btn-default'>
                  <input type='radio' name='options_color' id='option3' value='1' onchange='modifieColor(this.value)'> Односторонняя 4+0
                </label>

              </div>
              <br>
            </div>";
        }
        ?>

        </div>

        <div class='row'>
          <div class='col-lg-3'>
            <h4 class='ht'>Загрузите изображение</h4>
          </div>


          <div class='col-lg-9'>
              <p style='padding-top: 10px;'>Перед загрузкой ознакомьтесь с <a data-toggle='modal' data-target='#modal-1'>требованиями к макетам</a></p>

              <!-- <button class='btn btn-primary' onclick="document.getElementById('file1').click()"><i class='fa fa-download' aria-hidden='true'></i> Загрузить</button>
              <input type="file" name="file1"  class='file1' id='file1' onchange="alert('hello');"/> -->
              <div class="file_upload">
                <button type="button"><i class='fa fa-download'></i>Загрузитть</button>
                <div>Файл не выбран</div>
                <!-- <input type="hidden" name="MAX_FILE_SIZE" value="30000" /> -->
                <input type="file" name="file_face">
              </div>

              <p>Лицевая сторона</p>
              <br/>
              <div id="reverseside">
              <?php
              if($rounding['side_item_type'] == 'twoside'){
                // echo "<button class='btn btn-primary' onclick=\"document.getElementById('file2').click()\"><i class='fa fa-download' aria-hidden='true'></i> Загрузить</button>
                // <input type='file' class='file' id='file2'/>
                // <p>Обратная сторона</p>";
                echo "<div class='file_upload2'>
                        <button type='button'><i class='fa fa-download'></i>Загрузитть</button>
                        <div>Файл не выбран</div>
                        <input type='file' name='file_revers'>
                      </div>
                      <p>Обратная сторона</p>";
              }
              ?>
            </div>

            <!-- </form> -->
          </div>

        </div>
        <div class="row pt">
          <?php
          if(count($creasing) != 0 || count($dop_rez) != 0 || count($folding) != 0 || count($hole) != 0 || count($numbering) != 0 || count($perforation) != 0 || $rounding['rounding'] != 0 ){
              echo "<div class='col-lg-3'>
                      <h4 class='ht'>Послепечатные работы</h4>
                    </div>";
          }
          ?>
          <!-- <div class="col-lg-3 ">
            <h4 class="ht">Послепечатные работы</h4>
          </div> -->
          <div class="col-lg-9">
            <table cellspacing>
              <?php
                if(count($folding) > 0){
                  echo "<tr>
                          <td>
                            <select class='form-control' name='select_folding' onchange='modifie(this.value, 0)'>";
                  for($i = 0; $i < count($folding); $i++){
                    echo "<option value=".$folding[$i]['name_folding'].">".$folding[$i]['name_folding']."</option>";
                  }
                  echo "</select>
                          </td>
                          <td valign='middle' >
                            <span style='padding-left:5px;'>  Фальцовка (сгиб) <span class='dashed'><b> 0,1 руб.</b></span> шт</span>
                          </td>
                        </tr>";
                      }
                if(count($dop_rez) > 0){
                  echo "<tr>
                          <td>
                            <select class='form-control' name='select_dop_rez' onchange='modifie(this.value, 1)'>";
                for($i = 0; $i < count($dop_rez); $i++){
                  echo "<option value=".$dop_rez[$i]['name_dop_rez'].">".$dop_rez[$i]['name_dop_rez']."</option>";
                }
                echo "</select>
                          </td>
                          <td valign='middle' >
                          <span style='padding-left:5px;'>  Дополнительный рез <span class='dashed'><b>+50 руб. </b></span>за 1000 шт. </span>
                          </td>
                        </tr>";
              }
                if(count($perforation) > 0){
                  echo "<tr>
                          <td>
                            <select class='form-control' name='select_perforation' onchange='modifie(this.value, 2)' >";
                for($i = 0; $i < count($perforation); $i++){
                  echo "<option value=".$i.">".$perforation[$i]['name_perforation']."</option>";
                }
                echo "</select>
                          </td>
                          <td valign='middle' >
                          <span style='padding-left:5px;'>  Перфорация <span class='dashed'><b> +0,2 руб. </b></span> за 1 подход за 1 шт. </span>
                          </td>
                        </tr>";
              }
                if(count($numbering) > 0){
                  echo "<tr>
                          <td>
                            <select class='form-control' name='select_numbering' onchange='modifie(this.value, 3)'>";
                for($i = 0; $i < count($numbering); $i++){
                  echo "<option value=".$i.">".$numbering[$i]['name_numbering']."</option>";
                }
                echo "</select>
                          </td>
                          <td valign='middle' >
                          <span style='padding-left:5px;'>  Нумерация <span class='dashed'><b>+0,4 руб.</b></span> за 1 номер за 1 шт (минимальный размер между номерами 62мм). </span>
                          </td>
                        </tr>";
              }
                if(count($hole) > 0){
                  echo "<tr>
                          <td>
                            <select class='form-control' name='select_hole' onchange='modifie(this.value, 4)'>";
                for($i = 0; $i < count($hole); $i++){
                  echo "<option value=".$hole[$i]['name_hole'].">".$hole[$i]['name_hole']."</option>";
                }
                echo "</select>
                          </td>
                          <td valign='middle' >
                          <span style='padding-left:5px;'> Отверстие ⌀ 5 мм  <span class='dashed'><b>+200 руб.</b></span>за 1000 шт.  </span>
                          </td>
                        </tr>";
              }
                if(count($creasing) > 0){
                  echo "<tr>
                          <td>
                            <select class='form-control' name='select_creasing' onchange='modifie(this.value, 5)'>";
                for($i = 0; $i < count($creasing); $i++){
                  echo "<option value=".$creasing[$i]['name_creasing'].">".$creasing[$i]['name_creasing']."</option>";
                }
                echo "</select>
                          </td>
                          <td valign='middle' >
                          <span style='padding-left:5px;'> Биговка (канавка) <span class='dashed'><b>0,5 руб.</b></span> шт.   </span>
                          </td>
                        </tr>";
              }
                if($rounding['rounding'] == 1){
                  echo "<tr>
                          <td colspan='2'>
                            <div class='checkbox'>
                              <label>
                                <input type='checkbox' name='checkbox_rounding' onchange='modifie(this.value, 6)'>  Закругление углов <span class='dashed'><b>+150 руб.</b></span> за 1000 шт.
                              </label>
                            </div>
                          </td>
                        </tr>";
                }
              ?>
            </table>
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
            <?php $user = getArrayClient($_SESSION['id']) ?>
            <div id="deliveryForm" class="col-1-1 18">
              <div id="deliveryForm_2">
                <div class="form-inline">
                  <input type="text" class="form-control" name="delivery[userName]" placeholder="Имя Фамилия" value="<?php echo $_SESSION["name_user"];?>" >
                  <input type="text" class="form-control ht" name="delivery[phone]" placeholder="Телефон" value="<?php echo $user['main_phone_number_client'];?>">
                </div>
                <div class="col-1-3 14 pr-s">
                  <select class="form-control" style="max-width: 280px;" name="city_shipping" >
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
                    <textarea class="form-control" style="max-width: 95%;" placeholder="Дополнительная информация" name="dop_information"></textarea>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="row pt" style="margin-bottom: 40px;">
          <div class="col-lg-3 ">
            <h4 class="ht">Комментарии к заказу</h4>
          </div>
          <div class="col-lg-9 ">
            <textarea class="form-control" rows="3" style="max-width: 95%;" name="comments"></textarea>
          </div>
        </div>

        <div class="row pt" style="padding-bottom: 20px;">
          <div class="col-lg-3 ">
          </div>
          <div class="col-lg-9 ">
            <?php $cost = selectCostItem($id_item,$circulation); ?>
            <div class="row">
              <div class="col-md-6 ">
                <span style="font-size: 22px;"><b>Итого:<span id="cost"> <?php echo $cost['value_cost']; ?></span> руб.</b></span>
              </div>
              <div class="col-md-6">
                <button class="btn btn-danger" data-action="createOrder">Оформить заказ</button>
              </div>
            </div>
          </div>
        </div>
        <?php
        $_SESSION['creasing'] = $size_circulation;
        $_SESSION['prices'] = $cost['value_cost'];
        $_SESSION['id_item_type'] = $_GET['id_item'];
        $_SESSION['name_item'] = $rounding['name_item_type'];
        $_SESSION['type_print'];
        ?>
        </form>
      </div>
    </div>
  </div>
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

  <script type="text/javascript">
    "use strict";
    document.body.style.overflowX='hidden';
    var price = <?php echo $cost['value_cost'];  ?>;
    var size_circulation = <?php echo $size_circulation; ?>;
    var folding = 0;
    var dop_rez = 0;
    var perforation = 0;
    var numbering = 0;
    var hole = 0;
    var creasing = 0;
    var rounding = 0;
    function modifie(value,type_select){
      var cost = document.getElementById('cost');
      switch(type_select){
        case 0: folding = value; break;
        case 1: dop_rez = value; break;
        case 2: perforation = value; break;
        case 3: numbering = value; break;
        case 4: hole = value; break;
        case 5: creasing = value; break;
        case 6:{
                if(rounding == 0){
                  rounding = 1;
                  break;
                }else{
                  rounding = 0;
                  break;
                }
              }
        default: break;
      }
      var new_cost = ((150*rounding)*(size_circulation/1000))+((dop_rez*50)*(size_circulation/1000))+((hole*200)*(size_circulation/1000))+((folding*0.1)*size_circulation)+((perforation*0.2)*size_circulation)+((numbering*0.4)*size_circulation)+((0.5*creasing)*size_circulation) + price;
      cost.textContent = " "+new_cost;
    }
    function modifieColor(value){
      var twodownloud = document.getElementById('reverseside');
      //alert(twodownloud);
      if(value == 1){
        twodownloud.hidden = true;
      }else{
        twodownloud.hidden = false;
      }
    }

  </script>
<?php
  echo "<br><br>";
  require_once "blocks/footer.php";
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
