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

  <header class="myTheme">
    <!-- main top navigation -->
    <nav class="top-nav">
      <div class="navbar navbar-expand-lg navbar-light bg-white row">

        <!-- logo -->
        <div class="col-2 col-xs-2 col-sm-2 col-md-3 col-lg-3">
          <a class="navbar-brand" href="<?php echo home_url(); ?>">
          <h1 class="siteTitle myTheme"><?php echo get_theme_mod('brewsterPhotoTheme_siteTitleText'); ?></h1>
           <img src="images/logo.png" class="d-none d-sm-none d-md-none d-lg-block d-xl-block ml-lg-2" alt="Barney Brewster">
          </a>
        </div>

        <!-- menu -->
        <div class="col-10 col-xs-10 col-sm-10 col-md-9 col-lg-9">

            <button class="navbar-toggler navbar-light mt-2 ml-5" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <?php
            wp_nav_menu( array(
            'theme_location'	=> 'top-menu',
            'depth'				=> 2, // 1 = with dropdowns, 0 = no dropdowns.
            'container'			=> 'div',
            'container_class'	=> 'collapse navbar-collapse',
            'container_id'		=> 'bs-example-navbar-collapse-1',
            'menu_class'		=> 'navbar-nav mr-auto',
            'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
            'walker'			=> new WP_Bootstrap_Navwalker()
            ) );
            ?>

        </div>
      </div>   <!-- End of row -->

    </nav>


  </header>
