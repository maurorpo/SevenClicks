<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes() ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes() ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes() ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes() ?> class="no-js"><!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Seven Clicks | <?php the_title() ?></title>

    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- 
    <meta name="msapplication-TileColor" content="#">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri() ?>/library/images/icons/favicon.ico">
    <meta name="theme-color" content="#"> 
    -->

    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    <?php wp_head() ?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
  </head>
  <script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
      var currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("nav_ppal").style.top = "0";
      } else {
        document.getElementById("nav_ppal").style.top = "-100px";
      }
      prevScrollpos = currentScrollPos;
    }
  </script>
  <body <?php body_class() ?>>
    <header id="nav_ppal" style="transition: top .2s linear; top: 0;">
      <div class="container">
        <div class="logo">
          <a href="<?php echo home_url('/') ?>"><img src="<?php echo get_template_directory_uri() ?>/library/images/logo.svg" alt="Seven Clicks"></a>
        </div>
        <div class="open_nav">
          <span class="lineopen"></span>
          <span class="lineopen"></span>
          <span class="lineopen"></span>
        </div>
      </div>
    </header>
    <nav class="main_nav">
      <div class="close_nav">
        <span class="close_left"></span>
        <span class="close_right"></span>
      </div>
      <div class="logo-opennav">
        <a href="<?php echo home_url('/') ?>">
          <img src="<?php echo get_template_directory_uri() ?>/library/images/logo-menu.svg" alt="Seven Clicks">
        </a>
      </div>
      <?php wp_nav_menu(['container' => false, 'menu-ppal' => __( 'The Main Menu', 'bonestheme' ), 'theme_location' => 'main-nav' ]); ?>
      <?php wp_nav_menu(['container' => false, 'menu-redes' => __( 'The Main Redes', 'bonestheme' ), 'theme_location' => 'redes-nav' ]); ?>
    </nav>
    <script>
      jQuery('.open_nav').on('click', function(){
        jQuery('.main_nav').addClass('main_open');
      });
      jQuery('.close_nav').on('click', function(){
        jQuery('.main_nav').removeClass('main_open');
      });
    </script>