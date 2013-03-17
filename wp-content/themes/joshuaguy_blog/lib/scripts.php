<?php
/**
 * Scripts and stylesheets
 *
 * Enqueue stylesheets in the following order:
 * 1. /theme/assets/css/bootstrap.css
 * 2. /theme/assets/css/bootstrap-responsive.css
 * 3. /theme/assets/css/app.css
 * 4. /child-theme/style.css (if a child theme is activated)
 *
 * Enqueue scripts in the following order:
 * 1. /theme/assets/js/vendor/modernizr-2.6.2.min.js  (in head.php)
 * 2. jquery-1.8.2.min.js via Google CDN              (in head.php)
 * 3. /theme/assets/js/plugins.js
 * 4. /theme/assets/js/main.js
 */

function moshun_scripts() {
  if (!is_child_theme()) {
  wp_enqueue_style('roots_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', false, null);
  wp_enqueue_style('roots_bootstrap_responsive', get_template_directory_uri() . '/assets/css/bootstrap-responsive.css', array('roots_bootstrap'), null);
  wp_enqueue_style('roots_app', get_template_directory_uri() . '/assets/css/app.css', false, null);
  }

  if (is_child_theme()) {
    // ##
    //    grab child theme specific css
    // ##
    wp_enqueue_style('roots_bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.css', false, null);
    wp_enqueue_style('roots_bootstrap_responsive', get_stylesheet_directory_uri() . '/assets/css/bootstrap-responsive.css', array('roots_bootstrap'), null);
    // wp_enqueue_style('roots_app', get_stylesheet_directory_uri() . '/assets/css/app.css', false, null);
    // wp_enqueue_style('roots_child', get_stylesheet_uri(), false, null);
    // add some web fonts here if you'd like
    wp_enqueue_style('highlight.js.css', get_stylesheet_directory_uri() . '/assets/vendor/highlight.js/styles/zenburn.css', false, null);
    wp_enqueue_style('gfont_Lato', '//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic', false, null);
    wp_enqueue_style('gfont_OpenSans', '//fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic', false, null);
    wp_enqueue_style('FontAwesome', get_stylesheet_directory_uri() . '/lib/Font-Awesome/css/font-awesome.min.css', false, null);
  }

  // jQuery is loaded in header.php using the same method from HTML5 Boilerplate:
  // Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline
  // It's kept in the header instead of footer to avoid conflicts with plugins.
  if (!is_admin()) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', '', '', '1.8.2', false);
  }

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  wp_register_script('roots_plugins', get_template_directory_uri() . '/assets/js/plugins.js', false, null, false);
  wp_register_script('roots_main', get_template_directory_uri() . '/assets/js/main.js', false, null, false);
  wp_enqueue_script('roots_plugins');
  wp_enqueue_script('roots_main');

  if (is_child_theme()) {
    // ##
    //    grab child theme specific js
    // ##
    wp_register_script('child_main', get_stylesheet_directory_uri() . '/assets/js/main.js', false, null, false);
    // register other custom scripts here... 
    wp_register_script('highlight.js', get_stylesheet_directory_uri() . '/assets/vendor/highlight.js/highlight.pack.js', false, null, false);
    wp_register_script('highlight.load.js', get_stylesheet_directory_uri() . '/assets/js/highlight.load.js', false, null, false);
    wp_register_script('social.button.load.js', get_stylesheet_directory_uri() . '/assets/js/social.button.load.js', false, null, false);
    wp_enqueue_script('roots_plugins');
    wp_enqueue_script('child_main');
    // enqueue other custom scripts here...

    wp_enqueue_script('highlight.js');
    wp_enqueue_script('highlight.load.js');
    wp_enqueue_script('social.button.load.js');
  }
}

add_action('wp_enqueue_scripts', 'moshun_scripts', 100);
