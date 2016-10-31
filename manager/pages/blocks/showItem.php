<li class="block_item" style="" id_item="<?php echo $showItem[$j]["id_item"];?>">
  <a href='/pages/item.php?id_item=<?php echo $showItem[$j]["id_item"]."&id_print=".$T_B_Print[$i]['id_print']; ?>'>
    <span><?php echo $showItem[$j]["name_item"];?></span>
    <img src="/images/<?php echo $showItem[$j]["img_item"];?>.png" width="130" alt="<?php echo $showItem[$j]["name_item"];?>">
  </a>
</li>
