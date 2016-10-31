<tr>
  <td align="center"><?php echo $i+1;?></td> <!-- № -->
  <td align="center">
    <a  data-toggle="modal" data-target=".<?php echo "all_info_user_".$i; ?>"><i class="fa fa-expand fa-2x" style="cursor:pointer;" data-toggle="tooltip" data-placement="top" title="Нажми на меня:)"> </i></a>

    <div class="modal fade <?php echo "all_info_user_".$i; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Вся информация о товаре</h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <dl class="dl-horizontal">
                  <dt>Имя:</dt>
                  <dd><?php echo $select_h_s[$i]['name_user'];?></dd>
                  <dt>Фамилия:</dt>
                  <dd><?php echo $select_h_s[$i]['lastname_user'];?></dd>
                  <dt>Почта:</dt>
                  <dd><?php echo $select_h_s[$i]['email_user'];?></dd>
                  <dt>Ник:</dt>
                  <dd><?php echo $select_h_s[$i]['login'];?></dd>
                  <hr>
                </dl>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </td> <!--Вся информация про заказчика-->
  <td align="center"><?php echo $select_h_s[$i]['id_history_shopping'];?></td>
  <td align="center"><?php echo $select_h_s[$i]['name_order_h_s']?></td> <!-- Название заказа -->
  <td align="center"><?php echo $select_h_s[$i]['time_h_s'];?></td> <!-- Время создания -->
  <td align="center"><?php echo $select_h_s[$i]['time_h_s'];?></td> <!-- Время Готовности -->
  <td align="center">
    <a  data-toggle="modal" data-target=".<?php echo "all_info_".$i; ?>"><i class="fa fa-expand fa-2x" style="cursor:pointer;" data-toggle="tooltip" data-placement="top" title="Нажми на меня:)"> </i></a>

    <div class="modal fade <?php echo "all_info_".$i; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Вся информация о товаре</h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <dl class="dl-horizontal">
                  <dt>Название заказа:</dt>
                  <dd><?php echo $select_h_s[$i]['name_order_h_s']?></dd>
                  <hr>
                  <dt>Название товара:</dt>
                  <dd><?php echo $select_h_s[$i]['name_i_t_h_s']?></dd>
                  <dt>Доп. инф.:</dt>
                  <dd><?php echo $select_h_s[$i]['dop_info_h_s']?></dd>
                  <dt>Комментарий:</dt>
                  <dd><?php echo $select_h_s[$i]['comments_for_order_h_s']?></dd>
                  <dt>Цветность:</dt>
                  <dd><?php if($select_h_s[$i]['coloration_h_s'] == 2){echo "Двусторонняя 4+4";}else{echo "Односторонняя 4+0";} ?></dd>
                  <dt>Биговка (канавка):</dt>
                  <dd><?php if($select_h_s[$i]['creasing_h_s'] == 0 )echo "Нет";else echo $select_h_s[$i]['creasing_h_s'];?></dd>
                  <dt>Нумерация:</dt>
                  <dd><?php if($select_h_s[$i]['numbering_h_s'] == 0 )echo "Нет";else echo $select_h_s[$i]['numbering_h_s']." номера";?></dd>
                  <dt>Доп. рез:</dt>
                  <dd><?php if($select_h_s[$i]['dop_rez_h_s'] == 0 )echo "Нет";else echo $select_h_s[$i]['dop_rez_h_s'];?></dd>
                  <dt>Перфорация:</dt>
                  <dd><?php if($select_h_s[$i]['perforation_h_s'] == 0 )echo "Нет";else echo $select_h_s[$i]['perforation_h_s']." подхода";?></dd>
                  <dt>Закругление углов:</dt>
                  <dd><?php if($select_h_s[$i]['rounding_h_s'] == 1)echo "Да";else echo "Нет";?></dd>
                  <dt>Фальцовка (сгиб):</dt>
                  <dd><?php if($select_h_s[$i]['folding_h_s'] == 0 )echo "Нет";else echo $select_h_s[$i]['folding_h_s'];?></dd>
                  <dt>Отверстие ⌀ 5 мм:</dt>
                  <dd><?php if($select_h_s[$i]['hole_h_s'] == 0 )echo "Нет";else echo $select_h_s[$i]['hole_h_s'];?></dd>
                  <dt>Тип печати:</dt>
                  <dd><?php echo $select_h_s[$i]['type_print_h_s'];?></dd>
                  <dt>Тираж:</dt>
                  <dd><?php echo $select_h_s[$i]['circulation_h_s'];?></dd>
                  <dt>Цена:</dt>
                  <dd><?php echo $select_h_s[$i]['cost_h_s'];?></dd>
                  <dt>Лицевая сторона:</dt>
                  <dd>
                  <?php
                    if($select_h_s[$i]['face_image_h_s']== -1){
                      echo "Нет изображения";
                    }else{
                      echo "<img src=\"../".$select_h_s[$i]['face_image_h_s']."\" class=\"img-responsive\" alt=\"Сломалось:((\">";
                      echo "<a download href='../".$select_h_s[$i]['face_image_h_s']."' class=\"btn btn-primary\">Скачать</a>";
                    }
                  ?>
                  </dd>
                  <br/>
                  <dt>Обратная сторона:</dt>
                  <dd>
                  <?php
                    if($select_h_s[$i]['face_image_h_s']== -1){
                      echo "Нет изображения";
                    }else{
                      echo "<img src=\"../".$select_h_s[$i]['reverse_h_s']."\" class=\"img-responsive\" alt=\"Сломалось:((\">";
                      echo "<a download href='../".$select_h_s[$i]['reverse_h_s']."' class=\"btn btn-primary\">Скачать</a>";
                    }
                  ?>
                 </dd>
                </dl>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </td> <!--Вся информация-->


  <!-- <td align="center">
    <a  data-toggle="modal" data-target=".<?php echo "name_i_t_".$i; ?>"><i class="fa fa-expand fa-2x" style="cursor:pointer;"> </i></a>

    <div class="modal fade <?php echo "name_i_t_".$i; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Название товара</h4>
          </div>
          <div class="modal-body">
            <?php echo $select_h_s[$i]['name_i_t_h_s']?>
          </div>
        </div>
      </div>
    </div>
  </td>
  <td align="center">
    <a  data-toggle="modal" data-target=".<?php echo "comments_".$i; ?>"><i class="fa fa-expand fa-2x" style="cursor:pointer;"></i></a>

    <div class="modal fade <?php echo "comments_".$i; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Комментарий к товару</h4>
          </div>
          <div class="modal-body">
            <?php echo $select_h_s[$i]['comments_for_order_h_s']?>
          </div>
        </div>
      </div>
    </div>

  </td>
  <td align="center">
    <a  data-toggle="modal" data-target=".<?php echo "dop_inf_".$i; ?>"><i class="fa fa-expand fa-2x" style="cursor:pointer;"></i></a>

    <div class="modal fade <?php echo "dop_inf_".$i; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Дополнительная информация к заказу</h4>
          </div>
          <div class="modal-body">
            <?php echo $select_h_s[$i]['dop_info_h_s']?>
          </div>
        </div>
      </div>
    </div>

  </td> -->
  <td align="center">
    <?php
      switch ($select_h_s[$i]['type_shipping_h_s']) {
        case 0: echo "<img src=\"../images/pickup.png\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Самовывоз (Крым, г. Севастополь, , ул. Адмирала Октябрьского 16, время работы с 10:00 до 18:00 (сб., вс. - выходной))\" >"; break;
        case 1: echo "<img src=\"../images/fast-post.png\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Быстрая почта (".$select_h_s[$i]['place_shipping_h_s'].")\">"; break;
        case 2: echo "<img src=\"../images/bus.png\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Рейсовый автобус (".$select_h_s[$i]['place_shipping_h_s'].")\">"; break;
        default:break;
      }
      ?>
  </td> <!-- Тип доставки -->
  <td align="center">
    <?php
      // switch ($select_h_s[$i]['order_status_h_s']) {
      //   case 0: echo "<i  data-toggle=\"tooltip\" data-placement=\"left\" title=\"Заказ отменен Вами\" class=\"fa fa-ban fa-2x dashed\"></i>"; break;
      //   case 1: echo "<i  data-toggle=\"tooltip\" data-placement=\"left\" title=\"Заказ проверяется препресс отделом на соответствие макета/задания, а также техническим требованиям.\" class=\"fa fa-file-text-o fa-2x dashed\"></i>"; break;
      //   case 2: echo "<i  data-toggle=\"tooltip\" data-placement=\"left\" title=\"Возвращен с обработки - заказ не соответствует заданию или техническим требованиям. См: «Технические требования».\" class=\"fa fa-exclamation-triangle fa-2x dashed\"></i>"; break;
      //   case 3: echo "<i  data-toggle=\"tooltip\" data-placement=\"left\" title=\"Заказ проверен, с ним все в порядке.\" class=\"fa fa-check fa-2x dashed\"></i>"; break;
      //   case 4: echo "<i  data-toggle=\"tooltip\" data-placement=\"left\" title=\"Ждем оплату для печати – для печати заказа необходимо пополнить баланс.\" class=\"fa fa-money fa-2x dashed\"></i>"; break;
      //   case 5: echo "<i  data-toggle=\"tooltip\" data-placement=\"left\" title=\"В очереди печати - заказ отправлен в производство, ждет своей очереди.\" class=\"fa fa-cogs fa-2x dashed\"></i>"; break;
      //   case 6: echo "<i  data-toggle=\"tooltip\" data-placement=\"left\" title=\"В печати - заказ в производстве.\" class=\"fa fa-print fa-2x dashed\"></i>"; break;
      //   case 7: echo "<i  data-toggle=\"tooltip\" data-placement=\"left\" title=\"Постобработка - заказ отпечатан, делаются послепечатные работы.\" class=\"fa fa-scissors fa-2x dashed\"></i>"; break;
      //   case 8: echo "<i  data-toggle=\"tooltip\" data-placement=\"left\" title=\"Проблема с заказом. Активный в случае подачи Вами заявки на проблему.\" class=\"fa fa-exclamation-circle fa-2x dashed\"></i>"; break;
      //   case 9: echo "<i  data-toggle=\"tooltip\" data-placement=\"left\" title=\"На складе - заказ изготовлен, прибыл на соответствующий «способу доставки» склад.\" class=\"fa fa-archive fa-2x dashed\"></i>"; break;
      //   case 10: echo "<i  data-toggle=\"tooltip\" data-placement=\"left\" title=\"Отгружен/отправлен - заказ отгружен/доставлен/отправлен.\" class=\"fa fa-truck fa-2x dashed\"></i>"; break;
      //   default:break;
      // }
      $dop_class=" ";
      for($j=0; $j<=10; $j++){
        switch ($j) {
          case 0: $title="Заказ отменен Вами"; $class="fa fa-ban dashed"; break;
          case 1: $title="Заказ проверяется препресс отделом на соответствие макета/задания, а также техническим требованиям."; $class="fa fa-file-text-o dashed"; break;
          case 2: $title="Возвращен с обработки - заказ не соответствует заданию или техническим требованиям. См: «Технические требования»."; $class="fa fa-exclamation-triangle dashed"; break;
          case 3: $title="Заказ проверен, с ним все в порядке."; $class="fa fa-check dashed"; break;
          case 4: $title="Ждем оплату для печати – для печати заказа необходимо пополнить баланс."; $class="fa fa-money dashed"; break;
          case 5: $title="В очереди печати - заказ отправлен в производство, ждет своей очереди."; $class="fa fa-cogs dashed";  break;
          case 6: $title="В печати - заказ в производстве."; $class="fa fa-print dashed"; break;
          case 7: $title="Постобработка - заказ отпечатан, делаются послепечатные работы."; $class="fa fa-scissors dashed"; break;
          case 8: $title="Проблема с заказом. Активный в случае подачи Вами заявки на проблему."; $class="fa fa-exclamation-circle dashed"; break;
          case 9: $title="На складе - заказ изготовлен, прибыл на соответствующий «способу доставки» склад."; $class="fa fa-archive dashed"; break;
          case 10: $title="Отгружен/отправлен - заказ отгружен/доставлен/отправлен."; $class="fa fa-truck dashed"; break;
          default:break;
        }

        if($select_h_s[$i]['order_status_h_s']==$j){
          $dop_class=" fa-2x";
        }
        echo "<a data-action=\"changeStatusOrder\" onclick=\"return confirmChange(".$select_h_s[$i]['id_history_shopping'].",'".$title."');\" href=\"/manager/function/orders/changeStatusOrder.php?id_h_s=".$select_h_s[$i]['id_history_shopping']."&status=".$j."\">
        <span style=\"margin-right:4px;\"><i  data-toggle=\"tooltip\" data-placement=\"left\" title=\"".$title."\" class=\"".$class.$dop_class."\"></i></span>
        </a>";
        $dop_class="";
      }
    ?>
  </td> <!-- Статус -->
  <!-- <td align="center">
    <span class="glyphicon glyphicon-list"></span>

  </td>
  <td align="center"><span class="glyphicon glyphicon-remove"></span></td>
  <td align="center"><span class="glyphicon glyphicon-repeat"></span></td>
  <td align="center"><span class="glyphicon glyphicon-trash"></span></td>
  <td align="center"><span class="glyphicon glyphicon-book"></span></td>  -->
  <td align="center"><?php echo $select_h_s[$i]['circulation_h_s']?></td> <!-- Тираж -->
  <td align="center"><?php echo $select_h_s[$i]['cost_h_s']?></td> <!-- Цена -->
  <!-- <td align="center">
    <div class="btn-group">
      <!-- <a class="btn btn-default" data-id="<?php// echo $select_h_s[$i]['id_history_shopping'];?>" data-action="edit" href="edit_order.php?id_h_s=<?php echo $select_h_s[$i]['id_history_shopping'];?>" data-toggle="tooltip" data-placement="top" title="Редактировать">
        <i class="fa fa-pencil-square-o fa-lg fa-fw"></i>
      </a> -->
      <!-- <a class="btn btn-danger" data-id="<?php //echo $select_h_s[$i]['id_history_shopping'];?>" data-action="cancelOrder" onclick="return confirmDelete();" href="/function/orders/trash.php?id_h_s=<?php echo $select_h_s[$i]['id_history_shopping'];?>" data-toggle="tooltip" data-placement="top" title="Удалить">
        <i class="fa fa-trash-o fa-lg fa-fw"></i>
      </a> -->
      <!-- <a class="btn btn-success" data-id="<?php// echo $select_h_s[$i]['id_history_shopping'];?>" data-action="reorder" onclick="return confirmReload();" href="/function/orders/reorder.php?id_h_s=<?php echo $select_h_s[$i]['id_history_shopping'];?>" data-toggle="tooltip" data-placement="top" title="Повтор заказа">
        <i class="fa fa-refresh fa-lg fa-fw"></i>
      </a> -->
      <!-- <a class="btn btn-info" data-id="<?php// echo $select_h_s[$i]['id_history_shopping'];?>" data-action="move_to_archiv" onclick="return confirmMove_to_archive();" href="/function/orders/archive.php?id_h_s=<?php echo $select_h_s[$i]['id_history_shopping'];?>" data-toggle="tooltip" data-placement="top" title="Отправить в архив">
        <i class="fa fa-archive fa-lg fa-fw"></i>
      </a> -->
    <!-- </div>  -->
  </td>
</tr>
