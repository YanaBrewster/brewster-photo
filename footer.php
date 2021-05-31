<footer class="myTheme pt-3 footer-bg">

<div class="row">
  <!-- Footer nav -->
  <div class="col-6 col-xs-6 col-sm-6 col-md-6 col-lg-10 col-xl-10">

    <?php my_social_media_icons() ?>

  </div>

  <div class="col-6 col-xs-6 col-sm-6 col-md-6 col-lg-2 col-xl-2 footer-txt">
      <?php
        wp_nav_menu(
          array(
          'theme_location' => 'footer-menu',
          'menu_class' => 'top-bar',
          'container'  => 'div',
          'container_id'  => 'footerMenu'
          )
        );
        ?>
  </div>

  <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <p class="text-center text-white"><?php echo get_theme_mod('brewsterPhotoTheme_footerMessage'); ?> | Web Design by <a class="text-white" href="https://www.yanabrewster.com/">Yana Brewster</a></p>
  </div>

</div>



<?php wp_footer(); ?>

</footer>
</body>
</html>
