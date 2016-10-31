<div class="row">
  <table class="table table-hover">
    <tbody>
      <tr>
        <th colspan="<?php echo count($prices_result)+1; ?>" bgcolor="#2e4659" >
          <span style="font-weight:bold; color:white; padding-left:7px;"><?php echo $T_B_Item_Type[$i]['name_item_type'];?></span>
        </th>
      </tr>
      <tr>
        <th> Тираж </th>
      <?php
        for($j=0; $j<count($prices_result); $j++){
          echo "<th>&nbsp;".$prices_result[$j]['size_circulation']."&nbsp;</th>";
        }
      ?>
    </tr>
    <tr>
      <td>Печать за 3-5 дней (руб) </td>
    <?php
      for($j=0; $j<count($prices_result); $j++){
          echo "<td> <a href='/pages/create_order.php?id_item=".$T_B_Item_Type[$i]['id_item_type']."&circulation=".$prices_result[$j]['id_circulation']."&size_circulation=".$prices_result[$j]['size_circulation']."'>&nbsp;".$prices_result[$j]['value_cost']."&nbsp;</a> </th>";
      }
    ?>
  </tr>
    </tbody>
  </table>
</div>
