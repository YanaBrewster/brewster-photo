<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html lang="en" dir="ltr"><!--<![endif]-->
<head>
  <meta charset="utf-8">
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> -->
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="author" content="Yana Brewster">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <script src="https://kit.fontawesome.com/8c9236379a.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body>

  <header class="myTheme border-bottom">
    <!-- main top navigation -->
    <nav class="top-nav py-2">


      <div class="row">
        <div class="navbar navbar-expand-lg navbar-light bg-white">

        <!-- logo -->
        <div class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-1 col-xl-1 d-flex justify-content-end">
          <a href="<?php echo home_url();?>">
              <span class="w-100"><?php the_custom_logo();?></span>
          </a>
        </div>

        <!-- title -->
        <div class="col-0 col-xs-0 col-sm-0 col-md-0 col-lg-2 col-xl-2">
          <h1 class="siteTitle myTheme d-none d-sm-none d-md-none d-lg-block d-xl-block pt-2 mx-3"><?php echo get_theme_mod('brewsterPhotoTheme_siteTitleText'); ?></h1>
        </div>

        <!-- icon -->
        <div class="col-7 col-xs-7 col-sm-7 col-md-7 col-lg-0 col-xl-0 d-lg-none d-xl-none">
          <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>

          <!-- menu -->
          <div class="col-8 col-xs-8 col-sm-8 col-md-8 col-lg-9 col-xl-9">
              <?php
              wp_nav_menu( array(
              'theme_location'	=> 'top-menu',
              'depth'				=> 2, // 1 = with dropdowns, 0 = no dropdowns.
              'container'			=> 'div',
              'container_class'	=> 'collapse navbar-collapse',
              'container_id'		=> 'bs-example-navbar-collapse-1',
              'menu_class'		=> 'navbar-nav mx-4',
              'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
              'walker'			=> new WP_Bootstrap_Navwalker()
              ) );
              ?>
          </div>



        </div>
      </div>   <!-- End of row -->

    </nav> <!-- End of nav-->


  </header>
