<?php
/*
 *  functions and definitions
 */

add_filter('show_admin_bar', '__return_false');

function getImage( $name ) {
    echo get_template_directory_uri() . '/img/dest/' . $name;
}

function getCurrentCatID()
{
   global $wp_query;
   if (is_category() || is_single()) {
      $cat_ID = get_query_var('cat');
   }
   return $cat_ID;
}

if ( ! function_exists( 'sp_setup' ) ) :

   function sp_setup() {

      load_theme_textdomain( 'inkStudio-theme', get_template_directory() . '/languages' );

      add_theme_support( 'automatic-feed-links' );
      add_theme_support( 'title-tag' );
      add_theme_support( 'post-thumbnails' );
      add_theme_support( 'custom-logo' );

      register_nav_menus( array(
         'menu-1' => esc_html__( 'Primary', '*' ),
      ) );
      register_nav_menu('menu', 'Main navigation menu');

      add_theme_support( 'html5', array(
         'search-form',
         'comment-form',
         'comment-list',
         'gallery',
         'caption',
      ) );


      add_theme_support( 'custom-background', apply_filters( 'sp_custom_background_args', array(
         'default-color' => 'ffffff',
         'default-image' => '',
      )));

      add_theme_support( 'customize-selective-refresh-widgets' );

      add_theme_support( 'custom-logo', array(
         'height'      => 250,
         'width'       => 250,
         'flex-width'  => true,
         'flex-height' => true,
      ) );
   }
endif;

add_action( 'after_setup_theme', 'sp_setup' );


function sp_content_width() {
   $GLOBALS['content_width'] = apply_filters( 'sp_content_width', 640 );
}
add_action( 'after_setup_theme', 'sp_content_width', 0 );

//Enqueue scripts and styles.
function sp_scripts() {
    wp_register_style( 'Normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css' );
    wp_enqueue_style('Normalize');
    wp_register_style( 'Swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css' );
    wp_enqueue_style('Swiper');
    wp_enqueue_style(
        'style.min.css',
        get_template_directory_uri().'/style.min.css',
        [],
        '1.0.0',
        'all'
    );
}
add_action( 'wp_enqueue_scripts', 'sp_scripts' );
function get_component($file, $params = null, $return = false)
{
   $class     = !empty($params['class']) ? ' ' . $params['class'] : '';
   $attr_list = !empty($params['attr']) ? $params['attr'] : [];
   $entityData = !empty($params['entity_data']) ? $params['entity_data'] : [];
   $storageData = !empty($params['storage_data']) ? $params['storage_data'] : [];
   $entityList = !empty($params['entity_list']) ? $params['entity_list'] : [];
   $storageList = !empty($params['storage_list']) ? $params['storage_list'] : [];

   $attributes = implode(' ', array_map(function ($key, $value) {
      return "$key=\"$value\"";
   }, array_keys($attr_list), $attr_list));

   if ($return) {
      ob_start();
      include('components' . '/' . $file . '/' . $file . '.php');
      $contents = ob_get_contents();
      ob_end_clean();

      return $contents;
   } else { 
      include('components' . '/' . $file . '/' . $file . '.php');
   }
}

// REMOVE EMOJI ICONS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

add_action( 'after_theme_support', 'remove_feed' );

function remove_feed() {
    remove_theme_support( 'automatic-feed-links' );
}

// Use what works best for your website
add_action('init', 'my_head_cleanup');

function my_head_cleanup() {
  // Category Feeds
  remove_action( 'wp_head', 'feed_links_extra', 3 );

  // Post and Comment Feeds
  remove_action( 'wp_head', 'feed_links', 2 );

  // EditURI link
  remove_action( 'wp_head','rsd_link' );

  // Windows Live Writer
  remove_action( 'wp_head','wlwmanifest_link' );

  // index link
  remove_action( 'wp_head','index_rel_link' );

  // previous link
  remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );

  // start link
  remove_action( 'wp_head', 'start_post_rel_link', 10,0 );

  // Links for Adjacent Posts
  remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

  // WP version
   remove_action( 'wp_head', 'wp_generator' );
}