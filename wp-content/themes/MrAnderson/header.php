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
          <div>
            <p>LOGO</p>
          </div>
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

          <div class="menu-contact">
            <div class="menu-contact-text">
              <h2 class="menu-contact-title">Contactez moi</h2>
              <p class="menu-contact-email">liegeon.mathis@gmail.com</p>
            </div>

            <div class="menu-contact-social-container">
              <a href="" class="menu-contact-social">In</a>
              <a href="" class="menu-contact-social">Insta</a>
              <a href="" class="menu-contact-social">Bé</a>
            </div>
          </div>

          <div class="footer">
            <div class="footer-container">
              <h3 class="footer-title">Compétences</h3>
                <p class="footer-skills">Design Graphique</p>
                <p class="footer-skills">Illustrations</p>
                <p class="footer-skills">Front-end</p>
                <p class="footer-skills">Back-end</p>
              <span class="footer-content">

              </span>
            </div>

            <div class="footer-container">
              <h3 class="footer-title"></h3>
                <a href="" class="footer-links">Instagram⇗</a>
                <a href="" class="footer-links">LinkedIn⇗</a>
                <a href="" class="footer-links">Behance⇗</a>
                <a href="" class="footer-links">Email⇗</a>
              <span class="footer-content">

              </span>
            </div>
          </div>
        </nav>

  </header>
