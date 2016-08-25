<tr>
  <td align="center"><?php echo $i+1;?></td> <!-- № -->
  <td align="center"><?php echo $select_h_s[$i]['id_history_shopping'];?></td>
  <td align="center"><?php echo $select_h_s[$i]['name_order_h_s']?></td> <!-- Название заказа -->
  <td align="center"><?php echo $select_h_s[$i]['time_h_s'];?></td> <!-- Время создания -->
  <td align="center"><?php echo $select_h_s[$i]['time_h_s'];?></td> <!-- Время Готовности -->


  <td align="center">
    <a  data-toggle="modal" data-target=".<?php echo "name_i_t_".$i; ?>"><i class="fa fa-expand fa-2x" style="cursor:pointer;"> </i></a>

    <div class="modal fade <?php echo "name_i_t_".$i; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <?php echo $select_h_s[$i]['name_i_t_h_s']?>
        </div>
      </div>
    </div>
  </td> <!-- Название заказа -->
  <td align="center">
    <a  data-toggle="modal" data-target=".<?php echo "comments_".$i; ?>"><i class="fa fa-expand fa-2x" style="cursor:pointer;"></i></a>

    <div class="modal fade <?php echo "comments_".$i; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <?php echo $select_h_s[$i]['comments_for_order_h_s']?>
        </div>
      </div>
    </div>

  </td> <!-- Комментарий -->
  <td align="center">
    <a  data-toggle="modal" data-target=".<?php echo "dop_inf_".$i; ?>"><i class="fa fa-expand fa-2x" style="cursor:pointer;"></i></a>

    <div class="modal fade <?php echo "dop_inf_".$i; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <?php echo $select_h_s[$i]['dop_info_h_s']?>
        </div>
      </div>
    </div>

  </td> <!-- Доп инфа.  -->
  <td align="center"><span class="glyphicon glyphicon-road"></span>
    <?php

    ?>
  </td> <!-- Тип доставки -->
  <td align="center">
    <span class="glyphicon glyphicon-plane"></span>

  </td> <!-- Статус -->
  <td align="center">
    <span class="glyphicon glyphicon-list"></span>

  </td> <!-- Правки -->
  <td align="center"><span class="glyphicon glyphicon-remove"></span></td> <!-- Отмена -->
  <td align="center"><span class="glyphicon glyphicon-repeat"></span></td> <!-- Повтор -->
  <td align="center"><span class="glyphicon glyphicon-trash"></span></td> <!-- Брак -->
  <td align="center"><span class="glyphicon glyphicon-book"></span></td> <!-- Архив -->
  <td align="center"><?php echo $select_h_s[$i]['circulation_h_s']?></td> <!-- Тираж -->
  <td align="center"><?php echo $select_h_s[$i]['cost_h_s']?></td> <!-- Цена -->
</tr>
