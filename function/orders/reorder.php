<?php
  session_start();
  require_once "../../lib/functions.php";
  connectDB();
  $select_h_s = selectH_S_ID($_SESSION['id'],$_GET['id_h_s']);
  insertHistory_Shopping($_SESSION['id'],$select_h_s['name_i_t_h_s'],$select_h_s['coloration_h_s'],$select_h_s['face_image_h_s'],$select_h_s['reverse_h_s'],$select_h_s['folding_h_s'],
  $select_h_s['creasing_h_s'],$select_h_s['dop_rez_h_s'],$select_h_s['hole_h_s'],$select_h_s['numbering_h_s'],$select_h_s['perforation_h_s'],
  $select_h_s['rounding_h_s'],$select_h_s['type_shipping_h_s'],$select_h_s['place_shipping_h_s'],$select_h_s['cost_h_s'],$select_h_s['comments_for_order_h_s'],
  $select_h_s['id_item_type_h_s'],1,$select_h_s['name_order_h_s'],$select_h_s['dop_info_h_s'],$select_h_s['circulation_h_s'],date("Y-m-d H:i:s"),$select_h_s['type_print_h_s']);
  closeDB();
  header("Location: ".$_SERVER["HTTP_REFERER"]);
?>
