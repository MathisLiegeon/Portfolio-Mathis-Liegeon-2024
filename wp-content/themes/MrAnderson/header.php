<!DOCTYPE html>
<html>
  <head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css">
    <?php wp_head();?>
  </head>

  <body>
      <header class="header">
        <div class="header-wrapper">
          <a href="<?php echo home_url();?>" class="header-logo">
            <img src="<?php echo get_template_directory_uri();?>/assets/icons/icon_logo.svg" alt="Logo">
          </a>
          <div class="header-burger" id="burger">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>

        <nav class="header-menu" id="header-menu">
          <?php
            wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'container' => false,
                'menu_class' => 'header-main-nav'
            ));
          ?>
        </nav>

  </header>

  <div class="body-wrapper">
