<?php
  require_once "start.php";
  require_once "blocks/mainmenu.php";
  echo "<br><br><br>";
?>
<br>
<br>
<div class="container">
  <ul class="nav nav-tabs" id="myTab">
    <li class="active"><a href="#order" data-toggle="tab">Заказы</a></li>
    <li><a href="#archive" data-toggle="tab">Архив</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="order">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead >
            <th class="ant-table">№</th>
            <th class="ant-table">создан</th>
            <th class="ant-table">готовность</th>
            <th class="ant-table">название</th>
            <th class="ant-table">тираж</th>
            <th class="ant-table">ком...</th>
            <th class="ant-table">авто</th>
            <th class="ant-table">цена</th>
            <th class="ant-table">дост.</th>
            <th class="ant-table">статус</th>
            <th class="ant-table">испр.</th>
            <th class="ant-table">отм.</th>
            <th class="ant-table">повтор</th>
            <th class="ant-table">брак</th>
            <th class="ant-table">архив</th>
          </thead>
          <tbody>
            <tr>
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
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="tab-pane" id="archive">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead >
            <th class="ant-table">№</th>
            <th class="ant-table">создан</th>
            <th class="ant-table">готовность</th>
            <th class="ant-table">название</th>
            <th class="ant-table">тираж</th>
            <th class="ant-table">ком...</th>
            <th class="ant-table">авто</th>
            <th class="ant-table">цена</th>
            <th class="ant-table">дост.</th>
            <th class="ant-table">статус</th>
            <th class="ant-table">испр.</th>
            <th class="ant-table">отм.</th>
            <th class="ant-table">повтор</th>
            <th class="ant-table">брак</th>
            <th class="ant-table">архив</th>
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
