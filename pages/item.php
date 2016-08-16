<?php
require_once "start.php";
require_once "blocks/mainmenu.php";
echo "<br><br><br><br><br><br>";
$id_item = $_GET['id_item'];
$id_print = $_GET['id_print'];
$T_B_Item_Type = showAllItem($id_item, $id_print);
//var_dump($result); die();
?>
<div class="container">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="../">Заказать</a></li>
      <li class="active"><?php echo $T_B_Item_Type[0]['name_print']?></li>
      <li class="active"> <?php echo $T_B_Item_Type[0]['name_item']; ?></li>
    </ol>
  </div>
  <div class="row">
    <div class="col-lg-3 col-md-3">
      <div class="list-group">
        <?php
        $T_B_Print = selectAllPrint();
        for($i=0; $i<count($T_B_Print); $i++){
          echo "<a href='#' class='list-group-item'>
            <div class='my-style-list-group'>
                <i class='fa fa-angle-right fa-3x'></i>
            </div>
              <h4 class='list-group-item-heading'>".$T_B_Print[$i]['name_print']."</h4>
              <p class='list-group-item-text'>5 дней</p>
        </a>" ;
        } ?>
      </div>
    </div>
      <div class="col-lg-9 col-md-9">

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
              <div style="background-color: #2e4659; padding: 8px 0 8px 10px; font-size:16px; color: white;"> <i class="fa fa-check fa-lg"></i> Активный прайс-лист. Для оформления заказа кликните цену. </div>
            </div>
            <?php for($i = 0; $i < count($T_B_Item_Type); $i++){
              $prices_result = selectAllPricesFromItem($T_B_Item_Type[$i]['id_item_type']);
              include "blocks/tableItem.php";
            }
            ?>

            <!-- <div class="row">
              <div>  Евро (210x99) Мелованная Глянцевая 130г/м². Красочность 4+4. Без покрытия. </div>
              <table>
                <tbody>
                  <tr>
                    <th> Тираж </th>
                    <th> 1 000 </th>
                    <th> 2 500 </th>
                    <th> 5 000 </th>
                    <th> 10 000 </th>
                    <th> 20 000 </th>
                    <th> 50 000 </th>
                  </tr>
                  <tr>
                    <td>Печать за 3-5 дней (руб) </td>
                    <td>
                      <a> 950 </a>
                    </td>
                    <td>
                      <a> 2085 </a>
                    </td>
                    <td>
                      <a> 3205 </a>
                    </td>
                    <td>
                      <a> 5340 </a>
                    </td>
                    <td>
                      <a> 10675 </a>
                    </td>
                    <td>
                      <a> 25615 </a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div></div>
              <div>  Евро (210x99) Картон Двухсторонний 300г/м². Красочность 4+4. Без покрытия. </div>
              <table>
                <tbody>
                  <tr>
                    <th> Тираж </th>
                    <th> 1 000 </th>
                    <th> 2 000 </th>
                    <th> 3 000 </th>
                    <th> 4 000 </th>
                    <th> 5 000 </th>
                    <th> 10 000 </th>
                  </tr>
                  <tr>
                    <td>Печать за 3-5 дней (руб) </td>
                    <td> <a> 1800 </a> </td>
                    <td>
                      <a> 3600 </a>
                    </td>
                    <td>
                      <a> 5395 </a>
                    </td>
                    <td>
                      <a> 7195 </a>
                    </td>
                    <td>
                      <a> 8990 </a>
                    </td>
                    <td>
                      <a> 17980 </a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div></div>
              <div>  Евро (210x99) Картон Двухсторонний 300г/м². Красочность 4+4. лицо Глянец. </div>
              <table>
                <tbody>
                  <tr>
                    <th> Тираж </th>
                    <th> 1 000 </th>
                    <th> 2 000 </th>
                    <th> 3 000 </th>
                    <th> 4 000 </th>
                    <th> 5 000 </th>
                    <th> 10 000 </th>
                  </tr>
                  <tr>
                    <td>Печать за 3-5 дней (руб) </td>
                    <td>
                      <a> 1970 </a>
                    </td>
                    <td>
                      <a> 3935 </a>
                    </td>
                    <td>
                      <a> 5905 </a>
                    </td>
                    <td>
                      <a> 7865 </a>
                    </td>
                    <td>
                      <a> 9835 </a>
                    </td>
                    <td>
                      <a> 19665 </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div> -->

    </div>
  </div>
</div>

<?php
echo $id;
$result = showAllItem(1, 1);
echo $result['width_size'];
require_once "blocks/footer.php";
require_once "stop.php";
?>
<!-- SELECT `name_item`, `name_item_type`, `name_size`, `height_size`, `width_size`, `type_paper`,`name_paper_texture`,`name_paper_weight`, `name_print`
FROM
  `item_type`
  INNER JOIN
  `item`
    ON `item_type`.id_item_item_type = `item`.`id_item`
  JOIN
   `size`
   	ON 	`item_type`.`id_size_type` = `size`.`id_size`
  JOIN
  	`type_paper`
    ON `item_type`.`id_paper_type` = `type_paper`.`id_type_paper`
  JOIN
  	`print`
    ON `item_type`.`id_print_type` = `print`.`id_print`
  WHERE `item_type`.`id_item_type` = 1 -->
