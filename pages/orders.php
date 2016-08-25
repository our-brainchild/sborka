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
    <li><a href="#archive" data-toggle="tab">Архив</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="order">
      <div class="table-responsive">
        <?php $select_h_s = selectHistory_Shoping_For_User($_SESSION['id']);?>
        <table class="table table-hover">
          <thead>
            <th align="center">№</th>
            <th align="center">ID в системе</th>
            <th align="center">Название заказа</th>
            <th align="center">Создан</th>
            <th align="center">Готовность</th>
            <th align="center">Название товара</th>
            <th align="center">Комментарий</th>
            <th align="center">Доп. инф.</th>
            <th align="center">Тип доставки</th>
            <th align="center">Статус заказа</th>
            <th align="center">Правки</th>
            <th align="center">Отмена</th>
            <th align="center">Повтор</th>
            <th align="center">Брак</th>
            <th align="center">Архив</th>
            <th align="center">Тираж</th>
            <th align="center">Цена</th>
          </thead>
          <tbody>
            <?php
              for($i=0; $i < count($select_h_s); $i++){
                include "blocks/table_h_s.php";
              }
            ?>
            <!-- <tr>
              <td class="ant-colomn"><a href="#">125122</a></td>
              <td class="ant-colomn">22.04 <sub>13:45</sub></td>
              <td class="ant-colomn">24.04<sub>Чтв</sub></td>
              <td class="ant-colomn"><a href="#">"Cлужу отечеству"</a></td>
              <td class="ant-colomn">1</td>
              <td class="ant-colomn"><span class="glyphicon glyphicon-ok"></span></td>
              <td class="ant-colomn"><span class="glyphicon glyphicon-ok"></span></td>
              <td class="ant-colomn">960.50</td>
              <td class="ant-colomn"><span class="glyphicon glyphicon-road"></span></td>
              <td class="ant-colomn"><span class="glyphicon glyphicon-plane"></span></td>
              <td class="ant-colomn"><span class="glyphicon glyphicon-list"></span></td>
              <td class="ant-colomn"><span class="glyphicon glyphicon-remove"></span></td>
              <td class="ant-colomn"><span class="glyphicon glyphicon-repeat"></span></td>
              <td class="ant-colomn"><span class="glyphicon glyphicon-trash"></span></td>
              <td class="ant-colomn"><span class="glyphicon glyphicon-book"></span></td>
            </tr> -->
          </tbody>
        </table>
      </div>
    </div>
    <div class="tab-pane" id="archive">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead >
            <th>№</th>
            <th>создан</th>
            <th>готовность</th>
            <th>название</th>
            <th>тираж</th>
            <th>ком...</th>
            <th>авто</th>
            <th>цена</th>
            <th>дост.</th>
            <th>статус</th>
            <th>испр.</th>
            <th>отм.</th>
            <th>повтор</th>
            <th>брак</th>
            <th>архив</th>
          </thead>
          <tbody>
            <tr>
              <td class="ant-colomn"><a href="#">186458</a></td>
              <td class="ant-colomn">08.10 <sub>09:29</sub></td>
              <td class="ant-colomn">15.10<sub>Срд</sub></td>
              <td class="ant-colomn"><a href="#">Travel Vitа Визитка</a></td>
              <td class="ant-colomn">1000</td>
              <td class="ant-colomn"><span class="glyphicon glyphicon-ok"></span></td>
              <td class="ant-colomn"><span class="glyphicon glyphicon-ok"></span></td>
              <td class="ant-colomn">86.10</td>
              <td class="ant-colomn"><span class="glyphicon glyphicon-road"></span></td>
              <td class="ant-colomn"><span class="glyphicon glyphicon-plane"></span></td>
              <td class="ant-colomn"><span class="glyphicon glyphicon-list"></span></td>
              <td class="ant-colomn"><span class="glyphicon glyphicon-remove"></span></td>
              <td class="ant-colomn"><span class="glyphicon glyphicon-repeat"></span></td>
              <td class="ant-colomn"><span class="glyphicon glyphicon-trash"></span></td>
              <td class="ant-colomn"><span class="glyphicon glyphicon-book"></span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!--
<script type="text/javascript">
  $(function () {
    $('#myTab a:last').tab('show')
  })
</script>
-->
<?php
  require_once "blocks/footer.php";
  require_once "stop.php";
 ?>
