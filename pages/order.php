<?php
  require_once "start.php";
  require_once "blocks/mainmenu.php";
  echo "<br><br><br><br><br><br>";
?>
<div class="container">
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
        <!-- <a href="#" class="list-group-item active">
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
        </a> -->
      </div>
    </div>
<?php $showItem = selectItem(); ?>
      <div class="col-lg-9 col-md-9">
        <ul>
          <?php for($i=0; $i<count($showItem); $i++){
            include "blocks/showItem.php";
          }?>
        </ul>

    </div>
  </div>
</div>
<?php
  echo "<br><br>";
  require_once "blocks/footer.php";
  require_once "stop.php";
 ?>
