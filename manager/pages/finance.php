<?php
  require_once "start.php";
  require_once "blocks/mainmenu.php";
  echo "<br><br><br>";
  echo "<br><br><br>";
?>
<div class="container">
  <div class="row">
    <div class="table-responsive">
      <?php $select_h_pay = selectHistory_Pay($_SESSION['id']);?>
      <table class="table table-hover">
        <thead>
          <th align="center">№</th>
          <th align="center">ID в системе</th>
          <th align="center">Инф. пол.</th>
          <th align="center">Способ оплаты</th>
          <th align="center">Плательщик</th>
          <th align="center">Сумма</th>
          <th align="center">Описание</th>
          <th align="center">Фото</th>
          <th></th>
        </thead>
        <tbody>
          <?php
            for($i=0; $i < count($select_h_pay); $i++){
              if($select_h_pay[$i]['no_show_manager']==0)
              include "blocks/table_h_pay.php";
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<script type="text/javascript">
  function confirmDontShowManager(){
    if (confirm("Вы хотите скрыть оплату?")) {
      return true;
    } else {
      return false;
    }
  }
  </script>
<?php
  echo "<br>";
  require_once "blocks/footer.php";
  require_once "stop.php";
 ?>
