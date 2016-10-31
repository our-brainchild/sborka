<form class="form-inline" role="form" method="GET" action="blocks/add_money.php">
  <div class="form-group">
    <label class="sr-only" for="exampleInputAmount">Количество </label>
    <div class="input-group">
      <div class="input-group-addon">Р</div>
      <input type="text" class="form-control"name="sum" id="exampleInputAmount" placeholder="Количество">
    </div>
    <input type="text" name="id_client" value="<?php echo $select_h_pay[$i]['id_client'];?>" style="display:none;"/>
    <input type="text" name="id_pay" value="<?php echo $select_h_pay[$i]['id_pay'];?>" style="display:none;"/>
  </div>
<div class="btn-group">
  <input type="submit" value="✍" class="btn btn-primary"/>
  <a class="btn btn-danger" data-id="<?php echo $select_h_pay[$i]['id_pay'];?>" data-action="reorder" onclick="return confirmDontShowManager();" href="../function/payfun.php?id_pay=<?php echo $select_h_pay[$i]['id_pay'];?>" data-toggle="tooltip" data-placement="top" title="Скрыть">
    <i class="fa fa-trash-o fa-lg fa-fw"></i>
  </a>
</div>
</form>
