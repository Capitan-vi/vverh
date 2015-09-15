<?php
/**
 * @package vverh
 */
?>

<!DOCTYPE html(lang='ru')>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/style.css" type="text/css"/>
  <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
  <script src="<?php bloginfo("template_directory"); ?>/js/jquery.min.js"></script>
  <script src="<?php bloginfo("template_directory"); ?>/js/main.js"></script>
  <?php wp_head(); ?>
</head>

<body>


  <header class="header dark">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4"><a href="javascript:void(0)" class="header__logo-box"><img src="<?php bloginfo("template_directory"); ?>/img/logo.png" alt="Бизнес-карусель бизнес-школы Вверх" class="header__logo-icon pull-left"/><span class="header__logo-brand">Бизнес-школа Вверх</span><span class="header__logo-slogan">Практики для практиков</span></a></div>
        <div class="col-xs-12 col-sm-3 col-md-3 pull-md-right col-sm-push-3 col-md-push-0 text-sm-right text-xs-left">
          <a href='tel:+79213655137' class="header__phone">+7 921 365 51 37</a>
          <a href="javascript:void(0)" class="callback-button pull-xs-right">Заказать звонок</a>
        </div>
        <div class="hidden-xs col-sm-3 col-md-5 pull-md-right text-md-right col-sm-pull-3 col-md-pull-0"><a href="javascript:void(0)" class="header__mail">info@vverh.tv</a><a href="javascript:void(0)" class="header__mailto">Написать письмо</a></div>
        <div class="hidden-xs col-sm-12 col-md-5 pull-md-right">
          <nav class="header__menu text-md-right">
            <ul>
              <li><a href="javascript:void(0)">Карусель</a></li>
              <li class="active"><a href="javascript:void(0)">Эксперты</a></li>
              <li><a href="javascript:void(0)">Отзывы</a></li>
              <li><a href="javascript:void(0)">Пакеты</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
