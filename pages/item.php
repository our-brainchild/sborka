<?php
require_once "start.php";
require_once "blocks/mainmenu.php";
echo "<br><br><br><br><br><br>";
$id_item = $_GET['id_item'];
$id_print = $_GET['id_print'];
$T_B_Item_Type = showAllItem($id_item, $id_print);
?>
<div class="container imghelpmaterial">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="../">Заказать</a></li>
      <li class="active"><?php echo $T_B_Item_Type[0]['name_print']?></li>
      <li class="active"> <?php echo $T_B_Item_Type[0]['name_item']; ?></li>
    </ol>
  </div>
  <div class="row">
      <div class="col-lg-12 col-md-12">

           <div class="row">
             <h1> Прайс на печать: <?php echo $T_B_Item_Type[0]['name_item']; ?> </h1>
             <hr/>
                <div class="col-lg-6 col-md-6">
                  <div class="row">
                    <div class="col-lg-12 col-ms-12">
                      <div style="">
                        <div style="width: 293px;height: 207.172px;">
                          <img style="max-height:100%; max-whidth:100%;" src="/images/euro-booklet.png">
                          <div class="height size">
                            <span class="dashed"><?php echo $T_B_Item_Type[0]['width_size']+2; echo "</span> / ".$T_B_Item_Type[0]['width_size']; ?>
                          </div>
                          <div class="size width">
                            <span class="dashed"><?php echo $T_B_Item_Type[0]['height_size']+2; echo "</span> / ".$T_B_Item_Type[0]['height_size']; ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div>Дообрезной формат:</div>
                  <div>поля <span class="dashed"><b>+1 мм</b></span> с каждой стороны </div>
                  <div>Значимые элементы:</div>
                  <div class="text-gray">отступ по
                    <span class="dashed"><b>3 мм</b></span> от края макета
                  </div>
                  <div>Элемент дизайна рамка:</div>
                  <div>не менее
                    <span class="dashed"><b>4 мм</b></span> толщиной
                  </div>
                  <div>
                    <a download href="blocs/calculator.php" class="dashed bord_text bold-text"> Скачать макет "<?php echo $T_B_Item_Type[0]['name_item'];?>" </a><br>
                    <div>
                      <a href="#" data-toggle="modal" data-target="#modal-1" class="dashed bord_text bold-text"> Требования к макетам </a>
                    </div>
                     <div>
                      <a href="#" data-toggle="modal" data-target="#modal-1" class="dashed bord_text bold-text"> Подготовка макета </a>
                    </div>
                  </div>
                </div>
            </div>
            <br/>
            <div class="row dashed" style="padding-left:12px; font-weight:bold;"> Рекомендуем загружать макеты в формате <b>TIFF</b> в режиме <b>CMYK</b> без встроенного цветового профиля</div>
            <br/>
            <div class="row">
              <div style="background-color: #2e4659; padding: 8px 0 8px 10px; font-size:16px; color: white;"> <i class="fa fa-hand-pointer-o fa-lg"></i> Активный прайс-лист. Для оформления заказа кликните цену. </div>
            </div>
            <?php for($i = 0; $i < count($T_B_Item_Type); $i++){
              $prices_result = selectAllPricesFromItem($T_B_Item_Type[$i]['id_item_type']);
              include "blocks/tableItem.php";
            }
            ?>
    </div>
  </div>
</div>
<br/>
<?php
echo $id;
$result = showAllItem(1, 1);
echo $result['width_size'];
require_once "blocks/footer.php";
require_once "stop.php";
?>
