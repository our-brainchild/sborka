<?php
  require_once "start.php";
  require_once "blocks/mainmenu.php";
  echo "<br><br><br><br><br><br>";
?>
<div class="container">
  <!-- <table class="table table-responsive table-striped ">
  				<thead>
  					<tr>
  						<th>Наименование</th>
  						<th width="120px">Направление</th>
  						<th>Дисциплина</th>
  						<th>Автор</th>
  					</tr>
  				</thead>
  				<tbody>
            <tr id_test="1" onclick="window.location.href='/pages/wolktest.php?id=<?php echo $arg[$i]["id_theme"]."&id_table=".($i+1); ?>'">
              <td class="click_test tdcenter">Lol</td>
              <td class="click_test tdcenter"><img src="/images/1.png"></td>
              <td class="click_test tdcenter">куа</td>
              <td class="click_test tdcenter">кацц</td>
            </tr>
            <tr id_test="1" onclick="window.location.href='/pages/wolktest.php?id=<?php echo $arg[$i]["id_theme"]."&id_table=".($i+1); ?>'">
              <td class="click_test tdcenter">Lol</td>
              <td class="click_test tdcenter">АУЛцовд</td>
              <td class="click_test tdcenter">куа</td>
              <td class="click_test tdcenter">кацц</td>
            </tr>
            <tr id_test="1" onclick="window.location.href='/pages/wolktest.php?id=<?php echo $arg[$i]["id_theme"]."&id_table=".($i+1); ?>'">
              <td class="click_test tdcenter">Lol</td>
              <td class="click_test tdcenter">АУЛцовд</td>
              <td class="click_test tdcenter">куа</td>
              <td class="click_test tdcenter">кацц</td>
            </tr>
            <tr id_test="1" onclick="window.location.href='/pages/wolktest.php?id=<?php echo $arg[$i]["id_theme"]."&id_table=".($i+1); ?>'">
              <td class="click_test tdcenter">Lol</td>
              <td class="click_test tdcenter">АУЛцовд</td>
              <td class="click_test tdcenter">куа</td>
              <td class="click_test tdcenter">кацц</td>
            </tr>
  				</tbody>
  			</table> -->

        <ul>
          <li class="block_item" style="">
            <a href="">
              <span>Визитка</span>
              <img src="/images/1.png" width="130" alt="Визитка">
            </a>
          </li>
          <li class="block_item" style="">
            <a href="">
              <span>Евро визитка</span>
              <img src="/images/2.png" width="130" alt="Евро визитка">
            </a>
          </li>
          <li class="block_item" style="">
            <a href="">
              <span>Календарь</span>
              <img src="/images/3.png" width="130" alt="Календарь">
            </a>
          </li>
          <li class="block_item" style="">
            <a href="">
              <span>Открытки Пригласительные</span>
              <img src="/images/4.png" width="130" alt="Открытки Пригласительные">
            </a>
          </li>
          <li class="block_item" style="">
            <a href="">
              <span>Грамоты Сертификаты</span>
              <img src="/images/5.png" width="130" alt="Грамоты Сертификаты">
            </a>
          </li>
          <li class="block_item" style="">
            <a href="?id=2&amp;cat=14" style="display:block;">
              <span>Конверты</span>
              <img src="/images/6.png" width="130" alt="Конверты">
            </a>
          </li>
          <li class="block_item" style="">
            <a href="?id=2&amp;cat=7" style="display:block;">
              <span>Анкеты Бланки Объявления</span>
              <img src="/images/7.png" width="130" alt="Анкеты Бланки Объявления">
            </a>
          </li>
          <li class="block_item" style="">
            <a href="?id=2&amp;cat=2" style="display:block;">
              <span>Листовки  <br>Флаеры</span>
              <img src="/images/8.png" width="130" alt="Листовки  <br>Флаеры">
            </a>
          </li>
          <li class="block_item" style="">
            <a href="?id=2&amp;cat=4" style="display:block;">
              <span>Буклеты <br> Лифлеты</span>
              <img src="/images/9.png" width="130" alt="Буклеты <br> Лифлеты">
            </a>
          </li>
          <li class="block_item" style="">
            <a href="?id=2&amp;cat=5" style="display:block;">
              <span>Каталоги Брошюры Методички</span>
              <img src="/images/10.png" width="130" alt="Каталоги Брошюры Методички">
            </a>
          </li>
          <li class="block_item" style="">
            <a href="?id=2&amp;cat=3" style="display:block;">
              <span>Плакаты<br>Афиши</span>
              <img src="/images/11.png" width="130" alt="Плакаты<br>Афиши">
            </a>
          </li>
          <li class="block_item" style="">
            <a href="?id=2&amp;cat=15" style="display:block;">
              <span>Папки</span>
              <img src="/images/12.png" width="130" alt="Папки">
            </a>
          </li>
          <li class="block_item" style="">
            <a href="?id=2&amp;cat=13" style="display:block;">
              <span>Наклейки  <br>Стикеры</span>
              <img src="/images/13.png" width="130" alt="Наклейки  <br>Стикеры">
            </a>
          </li>
          <li class="block_item" style="">
            <a href="?id=2&amp;cat=8" style="display:block;">
              <span>Билеты<br>Купоны</span>
              <img src="/images/14.png" width="130" alt="Билеты<br>Купоны">
            </a>
          </li>
        </ul>
</div>
<?php
  echo "<br><br>";
  require_once "blocks/footer.php";
  require_once "stop.php";
 ?>
