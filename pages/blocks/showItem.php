<li class="block_item" style="" id_item="<?php echo $showItem[$i]["id_item"];?>">
  <a href='/pages/item.php?id_item=<?php echo $showItem[$i]["id_item"]."&id_print=1"; ?>'>
    <span><?php echo $showItem[$i]["name_item"];?></span>
    <img src="/images/<?php echo $showItem[$i]["img_item"];?>.png" width="130" alt="<?php echo $showItem[$i]["name_item"];?>">
  </a>
</li>
