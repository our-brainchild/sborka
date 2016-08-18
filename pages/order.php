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
          if($i == 4){
            include "blocks/special_order.php";
          }else{
            echo "<ul>";
            $showItem = selectItem($T_B_Print[$i]['id_print']);
            for($j = 0; $j < count($showItem); $j++){
              include "blocks/showItem.php";
            }
            echo "</ul>";
            echo "</div>";
          }
        }
        ?>
      </div>
    </div>
  </div>
</div>


<?php
  echo "<br><br>";
  require_once "blocks/footer.php";
  require_once "stop.php";
 ?>
