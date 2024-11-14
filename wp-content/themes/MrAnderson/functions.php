<?php
// Implement a way to log things to the console in php
function console_log($data) {
  echo '<script>';
  echo 'console.log('. json_encode($data) .')';
  echo '</script>';
}

// ADD MENUS
function register_my_menu() {
  register_nav_menu('header-menu',__( 'HeaderMenu' ));
}
add_action( 'init', 'register_my_menu' );

// ADD JAVASCRIPT
function enqueue_custom_scripts() {
  wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/app.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

// HIDE ADMIN BAR
function hide_admin_bar() {
  return false;
}
add_filter('show_admin_bar', 'hide_admin_bar');
