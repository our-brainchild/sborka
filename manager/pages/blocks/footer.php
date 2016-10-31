<!--Main-Footer-->
<footer class="main-footer">
  <div class="container">
    <div class="row color-text">
      <div class="col-md-3 col-lg-3">
        <p>© 2011 — 2016 sborka.ru<br>
        Условия использования</p>
      </div>
      <div class="col-md-9 col-lg-9">
        <p>Понедельник - Пятница с 9:00 до 19:00, Суббота с 9:30 до 16:00<br>
        MTS +7 978 827 21 54 +7 978 863 92 08.</p>
      </div>
    </div>
  </div>
</footer>
<!--//Main-Footer-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
//для главной менюшки
$(document).ready(function(){
  //$(".mynav li a[href*='#']").parents().addClass('active');
  var loc = window.location.pathname;
  var empty_callback = function(){ return false; };
  $("#responsive-menu ul li a").each(function(index, item){
    if (loc == $(item).attr("href")){
      $(item).click(empty_callback);
      $(item).addClass("active");
    }
  });
});
</script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.js"></script>
</body>
</html>
