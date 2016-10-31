<tr>
  <td align="center"><?php echo $i+1;?></td>
  <td align="center"><?php echo $select_h_pay[$i]['id_pay'];?></td>
  <td align="center">
    <a  data-toggle="modal" data-target=".<?php echo "all_info_user_".$i; ?>"><i class="fa fa-expand fa-2x" style="cursor:pointer;" data-toggle="tooltip" data-placement="top" title="Нажми на меня:)"> </i></a>

    <div class="modal fade <?php echo "all_info_user_".$i; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Информация о пользователи</h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <dl class="dl-horizontal">
                  <dt>Имя:</dt>
                  <dd><?php echo $select_h_pay[$i]['name_user'];?></dd>
                  <dt>Фамилия:</dt>
                  <dd><?php echo $select_h_pay[$i]['lastname_user'];?></dd>
                  <dt>Почта:</dt>
                  <dd><?php echo $select_h_pay[$i]['email_user'];?></dd>
                  <dt>Ник:</dt>
                  <dd><?php echo $select_h_pay[$i]['login'];?></dd>
                  <hr>
                </dl>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </td>
  <td align="center"><?php
    switch($select_h_pay[$i]['type_pay']){
      case 1: echo "РНКБ (Пополнение карты)";break;
      case 2: echo "Сбербанк РФ (Пополнение карты)";break;
      case 3: echo "QIWI";break;
    }
    ?></td> <!-- Название заказа -->
  <td align="center"><?php echo $select_h_pay[$i]['who_pay'];?></td>
  <td align="center"><?php echo $select_h_pay[$i]['sum'];?></td>
  <td align="center"><i  data-toggle="tooltip" data-placement="top" title=<?php echo "\"".$select_h_pay[$i]['description']."\"";?> class="fa fa-info fa-2x dashed"></i></td> <!-- Время Готовности -->
  <td align="center">  <a  data-toggle="modal" data-target=".<?php echo "image_pay".$i;?>"><i class="fa fa-picture-o fa-2x" style="cursor:pointer;" data-toggle="tooltip" data-placement="top" title="Нажми на меня:)"> </i></a>
    <div class="modal fade <?php echo "image_pay".$i; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Фото квитанции</h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <?php
                echo "<img src=\"../../".$select_h_pay[$i]['img_pay']."\" class=\"img-responsive\" alt=\"Сломалось:((\">";
                echo "<a download href='../../".$select_h_pay[$i]['img_pay']."' class=\"btn btn-primary\">Скачать</a>";
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </td>
  <td align="center">
    <?php
      if($select_h_pay[$i]['confirmation_pay']==1){
        echo "<a class=\"btn btn-danger\" data-id=\"".$select_h_pay[$i]['id_pay']."\" data-action=\"reorder\" onclick=\"return confirmDontShowManager();\" href=\"../function/payfun.php?id_pay=".$select_h_pay[$i]['id_pay']."\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Скрыть\">
          <i class=\"fa fa-trash-o fa-lg fa-fw\"></i>
        </a>";
      }else{
        include "formforfinctable.php";
      }
    ?>


  </td>
</tr>
