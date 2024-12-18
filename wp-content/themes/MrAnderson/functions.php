<?php
// Implement a way to log things to the console in php
function console_log($data) {
  echo '<script>';
  echo 'console.log('. json_encode($data) .')';
  echo '</script>';
}

// Auto reload page
function add_livereload_script() {
  if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) {
      wp_enqueue_script('livereload', 'http://localhost:35729/livereload.js', array(), null, true);
  }
}
add_action('wp_enqueue_scripts', 'add_livereload_script');

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

function enqueue_scroll_animation_script() {
    wp_enqueue_script('custom-scroll-animation', get_template_directory_uri() . '/assets/js/scroll-animation.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_scroll_animation_script');

//ADD CSS
function enqueue_custom_styles() {
  wp_enqueue_style('main-css', get_template_directory_uri() . '/style.css', array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

// HIDE ADMIN BAR
function hide_admin_bar() {
  return false;
}
add_filter('show_admin_bar', 'hide_admin_bar');

// ADD ALPINE JS
function enqueue_alpinejs() {
    // Enregistrer Alpine.js avec defer
    wp_enqueue_script(
        'alpinejs',
        'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js',
        array(),
        null,
        array(
            'strategy' => 'defer',
            'in_footer' => true
        )
    );
}
// Utiliser une priorité élevée pour charger en dernier
add_action('wp_enqueue_scripts', 'enqueue_alpinejs', 100);
