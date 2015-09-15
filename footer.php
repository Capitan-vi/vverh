<?php
/**
 * @package vverh
 */
?>

<footer class="footer dark">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-4"><a class="footer__logo pull-sm-left"><img src="<?php bloginfo("template_directory"); ?>/img/logo.png" alt="Бизнес-школа Вверх" class="footer__logo-icon"/><span class="footer__logo-title clearfix">Бизнес-школа Вверх</span></a></div>
        <div class="col-sm-7 col-md-5">
          <?php wp_nav_menu( array(
            'theme_location' => 'primary',
            'container' => 'nav',
            'container_class' => 'footer__menu'
          ) ); ?>
        </div>
        <div class="col-md-3 text-sm-right pull-sm-right"><a class="callback-button">Заказать звонок</a></div>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
