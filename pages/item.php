<?php
require_once "start.php";
require_once "blocks/mainmenu.php";
echo "<br><br><br><br><br><br>";
$id = $_GET['id_item'];
$result = showAllItem(/*1, 1, 1*/);
$prices_result = selectAllPricesFromItem($id);
?>
<div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-3">
      <div class="list-group">
        <a href="#" class="list-group-item active">
          <div class="my-style-list-group">
              <i class="fa fa-angle-right fa-3x"></i>
          </div>
              <h4 class="list-group-item-heading">Офсетовая печать</h4>
              <p class="list-group-item-text">5 дней</p>
        </a>
        <a href="#" class="list-group-item">
          <div class="my-style-list-group">
              <i class="fa fa-angle-right fa-3x"></i>
          </div>
          <h4 class="list-group-item-heading">Цифровая печать</h4>
          <p class="list-group-item-text">1 день</p>
        </a>
        <a href="#" class="list-group-item">
          <div class="my-style-list-group">
              <i class="fa fa-angle-right fa-3x"></i>
          </div>
          <h4 class="list-group-item-heading">Пластиковые карты</h4>
          <p class="list-group-item-text">3-7 дней</p>
        </a>
        <a href="#" class="list-group-item">
          <div class="my-style-list-group">
              <i class="fa fa-angle-right fa-3x"></i>
          </div>
          <h4 class="list-group-item-heading">Широкоформатная печать</h4>
          <p class="list-group-item-text">Отдельный тираж, 3-12 дней</p>
        </a>
      </div>
    </div>
      <div class="col-lg-9 col-md-9">

           <div class="row">
             <h1> Прайс на печать: <?php echo $result['name_item']; ?> </h1>
                <div class="col-lg-6 col-md-6">
                  <div>
                    <div>
                      <div>
                        <div>
                          <div>
                            <span>101 мм</span> / 99 мм
                          </div>
                          <div>
                            <span>212 мм</span> / 210 мм
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div>Дообрезной формат:</div>
                  <div>поля <span>+1 мм</span> с каждой стороны </div>
                  <div>Значимые элементы:</div>
                  <div class="c-8d-grey">отступ по
                    <span class="c-orange">3 мм</span> от края макета
                  </div>
                  <div>Элемент дизайна рамка:</div>
                  <div>не менее
                    <span class="c-orange">4 мм</span> толщиной
                  </div>
                  <div>
                    <span> Скачать макет "Евро" </span><br>
                    <div>
                      <a> Требования к макетам </a>
                    </div>
                    <div>
                      <a> Подготовка макета </a>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row"> Рекомендуем загружать макеты в формате <b>TIFF</b> в режиме <b>CMYK</b> без встроенного цветового профиля </div>
            <div class="row">
              <div>
                <div> Активный прайс-лист. Для оформления заказа кликните цену. </div>
              </div>
            </div>
            <div class="row">
              <table>
                <tbody>
                  <tr>
                    <th> Тираж </th>
                  <?php
                    for($i=0; $i<count($prices_result); $i++){
                      echo "<th>&nbsp;".$prices_result[$i]['size_circulation']."&nbsp;</th>";
                    }
                  ?>
                </tr>
                <tr>
                  <td>Печать за 3-5 дней (руб) </td>
                <?php
                  for($i=0; $i<count($prices_result); $i++){
                    echo "<td> <a>&nbsp;".$prices_result[$i]['value_cost']."&nbsp;</a> </th>";
                  }
                ?>
              </tr>
                </tbody>
              </table>
            </div>
            <div class="row">
              <div> <!-- <span class="name">ЭКОНОМ </span>--> Евро (210x99) Мелованная Глянцевая 130г/м². Красочность 4+4. Без покрытия. </div>
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
              <div> <!-- <span class="name">ЭКОНОМ </span>--> Евро (210x99) Картон Двухсторонний 300г/м². Красочность 4+4. Без покрытия. </div>
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
              <div> <!-- <span class="name">ЭКОНОМ </span>--> Евро (210x99) Картон Двухсторонний 300г/м². Красочность 4+4. лицо Глянец. </div>
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
            </div>

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
