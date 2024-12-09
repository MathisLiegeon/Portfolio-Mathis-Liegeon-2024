<!DOCTYPE html>
<html lang="fr">
  <head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bonjour ! Je m’appelle Mathis Liegeon, je suis étudiant au département MMI à l’IUT de Montbéliard. J’étudie le design, le développement et la communication. Voici mon portfolio !">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/icons/icon_logo.svg" type="image/x-icon">
    <title>Portfolio - Mathis Liegeon</title>
    <?php wp_head();?>
  </head>

  <body x-data="{showContent: false, title: '', desc: '', url: ''}" :class="{'no-scroll': showContent}">
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
        <?php
        if (!is_page('projects')): ?>
        <!-- <span class="menu-sidetext">Mathis Liegeon</span> -->
        <?php endif; ?>

  </header>

  <div class="body-wrapper">
