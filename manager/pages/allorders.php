<?php
  require_once "start.php";
  require_once "blocks/mainmenu.php";
  echo "<br><br><br>";
?>
<br>
<br>
<div class="container-fluid">
  <ul class="nav nav-tabs" id="myTab">
    <li class="active"><a href="#order" data-toggle="tab">Заказы</a></li>
    <!-- <li><a href="#archive" data-toggle="tab">Архив</a></li> -->
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="order">
      <div class="table-responsive">
        <?php $select_h_s = selectHistory_Shoping_All(0);?>
        <table class="table table-hover">
          <thead>
            <th align="center">№</th>
            <th align="center">Заказчик</th>
            <th align="center">ID в системе</th>
            <th align="center">Название заказа</th>
            <th align="center">Создан</th>
            <th align="center">Готовность</th>
            <th align="center">Вся информация</th>
            <th align="center">Тип доставки</th>
            <th align="center">Статус заказа</th>
            <th align="center">Тираж</th>
            <th align="center">Цена</th>
            <th></th>
          </thead>
          <tbody>
            <?php
              for($i=0; $i < count($select_h_s); $i++){
                include "blocks/table_h_s.php";
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="tab-pane" id="archive">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <th align="center">№</th>
            <th align="center">Заказчик</th>
            <th align="center">ID в системе</th>
            <th align="center">Название заказа</th>
            <th align="center">Создан</th>
            <th align="center">Готовность</th>
            <th align="center">Вся информация</th>
            <th align="center">Тип доставки</th>
            <th align="center">Статус заказа</th>
            <th align="center">Тираж</th>
            <th align="center">Цена</th>
          </thead>
          <?php $select_h_s = selectHistory_Shoping_All(1);?>
          <tbody>
            <?php
              for($i=0; $i < count($select_h_s); $i++){
                include "blocks/table_h_s_a.php";
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function confirmChange(numOder,title){
    if (confirm("Вы хотите изменить статус заказа №"+numOder+" на статус \""+title+"\"?")) {
      return true;
    } else {
      return false;
    }
  }
</script>
<?php
  require_once "blocks/footer.php";
  ?>
  <script type="text/javascript">
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
  </script>
  <?php
  require_once "stop.php";
 ?>
