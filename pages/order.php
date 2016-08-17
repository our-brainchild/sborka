<?php
  require_once "start.php";
  require_once "blocks/mainmenu.php";
  echo "<br><br><br><br><br><br>";
?>
<div class="container">
  <div class="row">



    <div>

      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <?php
        $T_B_Print = selectAllPrint();
        for($i=0; $i<count($T_B_Print); $i++){
          if($i==0){
            echo "<li role='presentation' class='active'><a href='#".$T_B_Print[$i]['id_print']."' aria-controls='".$T_B_Print[$i]['id_print']."' role='tab' data-toggle='tab'>".$T_B_Print[$i]['name_print']."</a></li>";
          }else{
            echo "<li role='presentation'><a href='#".$T_B_Print[$i]['id_print']."' aria-controls='".$T_B_Print[$i]['id_print']."' role='tab' data-toggle='tab'>".$T_B_Print[$i]['name_print']."</a></li>";
          }
        } ?>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <?php
        $T_B_Print = selectAllPrint();
        for($i = 0; $i < count($T_B_Print); $i++){
          if($i==0){
            echo "<div role='tabpanel' class='tab-pane active' id='".$T_B_Print[$i]['id_print']."'>";
          }else{
            echo "<div role='tabpanel' class='tab-pane' id='".$T_B_Print[$i]['id_print']."'>";
          }
          echo "<ul>";
          $showItem = selectItem($T_B_Print[$i]['id_print']);
          for($j = 0; $j < count($showItem); $j++){
              include "blocks/showItem.php";
          }
          echo "</ul>";
          echo "</div>";
        }
        ?>
        <!-- <div role="tabpanel" class="tab-pane active" id="home">...</div>
        <div role="tabpanel" class="tab-pane" id="profile">...</div>
        <div role="tabpanel" class="tab-pane" id="messages">...</div>
        <div role="tabpanel" class="tab-pane" id="settings">...</div> -->
      </div>

    </div>




    <!-- <div class="col-lg-3 col-md-3">
      <div class="list-group">
        <?php/*
        $T_B_Print = selectAllPrint();
        for($i=0; $i<count($T_B_Print); $i++){
          echo "<a href='#' class='list-group-item'>
            <div class='my-style-list-group'>
                <i class='fa fa-angle-right fa-3x'></i>
            </div>
              <h4 class='list-group-item-heading'>".$T_B_Print[$i]['name_print']."</h4>
              <p class='list-group-item-text'>5 дней</p>
        </a>" ;
      }*/ ?>
      </div>
    </div>
    <?php /* $showItem = selectItem();*/ ?>
      <div class="col-lg-9 col-md-9">
        <ul>
          <?php /* for($i=0; $i<count($showItem); $i++){
            include "blocks/showItem.php";
          }*/ ?>
        </ul>

    </div> -->
  </div>
</div>


<?php
  echo "<br><br>";
  require_once "blocks/footer.php";
  require_once "stop.php";
 ?>
