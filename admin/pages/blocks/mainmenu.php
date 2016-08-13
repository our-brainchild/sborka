<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Сборка - онлайн сервис печати с готовых макетов для рекламных агентств, типографий, посредников</title>
    <!--Font_Awesome-->
    <link href="../css/font-awesome.css" rel="stylesheet">
    <!--MyStyle-->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!--Main-Menu-->
    <div class="navbar navbar-inverse navbar-fixed-top ournavstyle">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
            <span class="sr-only">Открыть навигацию</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="#"><img src="../images/logo.png" class="img-responsive" style="height: 62px;" alt="a.spring"></a>
        </div>
        <div class="collapse navbar-collapse" id="responsive-menu">
          <ul class="nav navbar-nav">
            <li><a class="btn btn-default navbar-btn" href="../pages/orders.php"><i class="fa fa-lg fa-clipboard"></i><br>Заказы</a></li>
            <li><a class="btn btn-default navbar-btn" href="../pages/profile.php"><i class="fa fa-lg fa-user">&nbsp;<span class="badge">id&nbsp;<?php echo $_SESSION['id'];?></span></i><br>Профиль</a></li>
            <li><a class="btn btn-default navbar-btn" href="../pages/modalWindow.php">Модальные<br>oкна</a></li>
            <li><a class="btn btn-default navbar-btn" href="../pages/modalWindow2.php">Модальные<br>oкна2</a></li>
            <li><a class="btn btn-default navbar-btn" href="../pages/modalWindow3.php">Модальные<br>oкна3</a></li>
            <li><a class="btn btn-default navbar-btn" href="../pages/modalWindow4.php">Модальные<br>oкна4</a></li>
            <li><a class="btn btn-default navbar-btn" href="../pages/modalWindow5.php">Модальные<br>oкна5</a></li>
            <li><a class="btn btn-default navbar-btn" href="blocks/logout.php"><i class="fa fa-lg fa-sign-out"></i><br>Выйти</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!--//Main-Menu-->
