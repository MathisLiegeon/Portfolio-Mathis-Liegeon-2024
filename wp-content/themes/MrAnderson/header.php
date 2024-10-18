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
      <header class="header-menu">
      <div class="header-burger" id="burger">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <nav class="header-wrapper" id="mobile-menu">
          <?php
            wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'container' => false,
                'menu_class' => 'header-menu'
            ));
          ?>
        </nav>
      </header>

      <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            var burger = document.getElementById('burger');
            var mobileMenu = document.getElementById('mobile-menu');

            burger.addEventListener('click', function() {
                mobileMenu.classList.toggle('open');
            });
        });
    </script> -->
