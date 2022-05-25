

<?php
/**
 * Theme basic setup.
 *
 * @package Conskip
 */
// Set the content width based on the theme's design and stylesheet.
if (!isset($content_width)) {
   $content_width = 1140;  /* pixels */
}
if (!function_exists('conskip_setup')) :
   /**
    * Sets up theme defaults and registers support for various WordPress features.
    *
    * Note that this function is hooked into the after_setup_theme hook, which
    * runs before the init hook. The init hook is too late for some features, such
    * as indicating support for post thumbnails.
    */
   function conskip_setup()
   {
      /*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on markite, use a find and replace
		 * to change 'markite' to the name of your theme in all the template files.
		 */
      load_theme_textdomain('conskip', get_template_directory() . '/languages');

      // Add default posts and comments RSS feed links to head.
      add_theme_support('automatic-feed-links');

      /*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
      add_theme_support('title-tag');

      /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
      add_theme_support('post-thumbnails');

      /**
       * Register navigation menus uses wp_nav_menu in five places.
       *
       * @since Conskip theme 1.0
       */


      $locations = array(
         'primary'  => __('Desktop Horizontal Menu', 'conskip'),
         'mobile'   => __('Mobile Menu', 'conskip'),
         'footer'   => __('Footer Menu', 'conskip'),
         'social'   => __('Social Menu', 'conskip'),
      );
      register_nav_menus($locations);

      // Menu active filter function
      add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);
      function special_nav_class($classes, $item)
      {
         if (in_array('current-menu-item', $classes)) {
            $classes[] = 'current';
         }
         return $classes;
      }


      // Set up the WordPress core custom background feature.
      add_theme_support('custom-background', apply_filters('conskip_custom_background_args', array(
         'default-color' => 'ffffff',
         'default-image' => '',
      )));
      // Add theme support for selective refresh for widgets.
      add_theme_support('customize-selective-refresh-widgets');

      //Enable custom header
      add_theme_support('custom-header');
      // Custom logo.
      $logo_width  = 120;
      $logo_height = 90;

      // If the retina setting is active, double the recommended width and height.
      if (get_theme_mod('retina_logo', false)) {
         $logo_width  = floor($logo_width * 2);
         $logo_height = floor($logo_height * 2);
      }

      add_theme_support(
         'custom-logo',
         array(
            'height'      => $logo_height,
            'width'       => $logo_width,
            'flex-height' => true,
            'flex-width'  => true,
         )
      );
      /*
	    * Switch default core markup for search form, comment form, and comments
	    * to output valid HTML5.
	    */
      add_theme_support(
         'html5',
         array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
            'navigation-widgets',
         )
      );
      /**
       * Enable suporrt for Post Formats
       *
       * see: https://codex.wordpress.org/Post_Formats
       */
      add_theme_support('post-formats', array(
         'image',
         'audio',
         'video',
         'gallery',
         'quote',
      ));

      // Add theme support for selective refresh for widgets.
      //add_theme_support( 'customize-selective-refresh-widgets' );

      // Add support for Block Styles.
      add_theme_support('wp-block-styles');

      // Add support for full and wide align images.
      add_theme_support('align-wide');

      // Add support for editor styles.
      add_theme_support('editor-styles');

      // Add support for responsive embedded content.
      add_theme_support('responsive-embeds');

      add_theme_support('html5', array('search-form', 'comment-list'));
   }

endif; //Conskip Setup

add_action('after_setup_theme', 'conskip_setup');

// conskip Width
function conskip_content_width()
{
   $GLOBALS['content_width'] = apply_filters('conskip_content_width', 1170);
}
add_action('after_setup_theme', 'conskip_content_width', 0);

/*
 *  Sticky and Others Pages Custom Logo Setup
 */
function conskip_customize_register($wp_customize)
{
   $wp_customize->add_setting('mobile_header_logo');
   $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mobile_header_logo', array(
      'label'    => __('Mobile Logo', 'conskip'),
      'section'  => 'title_tagline',
      'settings' => 'mobile_header_logo',
      'priority' => 8
   )));
}
add_action('customize_register', 'conskip_customize_register');


/**
 * Register widget areas.
 *
 * @since Twenty Twenty 1.0
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function conskip_sidebar_registration()
{

   // Arguments used in all register_sidebar() calls.
   $shared_args = array(
      'before_title'  => '<h5>',
      'after_title'   => '</h5>',
      'before_widget' => '<div class="footer-links footer-widget">',
      'after_widget'  => '</div>',
   );

   // Footer #1.
   register_sidebar(
      array(
         'before_title'  => '<h5>',
         'after_title'   => '</h5>',
         'before_widget' => '<div class="footer-info  footer-widget">',
         'after_widget'  => '</div>',
         'name'        => __('Footer #1', 'conskip'),
         'id'          => 'sidebar-1',
         'description' => __('Widgets in this area will be displayed in the first column in the footer.', 'conskip'),
      )
   );

   // Footer #2.
   register_sidebar(
      array_merge(
         $shared_args,
         array(
            'name'        => __('Footer #2', 'conskip'),
            'id'          => 'sidebar-2',
            'description' => __('Widgets in this area will be displayed in the second column in the footer.', 'conskip'),
         )
      )
   );

   // Footer #3.
   register_sidebar(
      array_merge(
         $shared_args,
         array(
            'name'        => __('Footer #3', 'conskip'),
            'id'          => 'sidebar-3',
            'description' => __('Widgets in this area will be displayed in the second column in the footer.', 'conskip'),
         )
      )
   );
   
   // Footer #4.
   register_sidebar(
      array(
         'before_title'  => '<h5>',
         'after_title'   => '</h5>',
         'before_widget' => '<div class="footer-contact footer-widget">',
         'after_widget'  => '</div>',
         'name'        => __('Footer #4', 'conskip'),
         'id'          => 'sidebar-4',
         'description' => __('Widgets in this area will be displayed in the first column in the footer.', 'conskip'),
      )
   );
}

add_action('widgets_init', 'conskip_sidebar_registration');


/**
 * Post Type: Services.
 */
function conskip_register_service()
{

   $labels = [
      "name" => __("Services", "conskip"),
      "singular_name" => __("Service", "conskip"),
      "all_items" => __("All Services", "conskip"),
      "add_new" => __("Add Service", "conskip"),

   ];

   $args = [
      "label" => __("Services", "conskip"),
      "labels" => $labels,
      "description" => "dashicons-media-document",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "rest_controller_class" => "WP_REST_Posts_Controller",
      "has_archive" => true,
      "show_in_menu" => true,
      "show_in_nav_menus" => true,
      "delete_with_user" => false,
      "exclude_from_search" => false,
      "capability_type" => "post",
      "map_meta_cap" => true,
      "hierarchical" => false,
      "rewrite" => ["slug" => "service", "with_front" => true],
      "query_var" => true,
      "menu_icon" => "dashicons-welcome-add-page",
      "supports" => ["title", "editor", "thumbnail"],
      "show_in_graphql" => false,
   ];

   register_post_type("service", $args);
}

add_action('init', 'conskip_register_service');


/**
 * Taxonomy: Category.
 */
function conskip_register_taxes()
{

   $labels = [
      "name" => __("Category", "conskip"),
      "singular_name" => __("Category", "conskip"),
   ];


   $args = [
      "label" => __("Category", "conskip"),
      "labels" => $labels,
      "public" => true,
      "publicly_queryable" => true,
      "hierarchical" => false,
      "show_ui" => true,
      "show_in_menu" => true,
      "show_in_nav_menus" => true,
      "query_var" => true,
      "rewrite" => ['slug' => 'conskip_category', 'with_front' => true,],
      "show_admin_column" => false,
      "show_in_rest" => true,
      "show_tagcloud" => false,
      "rest_base" => "conskip_category",
      "rest_controller_class" => "WP_REST_Terms_Controller",
      "show_in_quick_edit" => false,
      "show_in_graphql" => false,
   ];
   register_taxonomy("conskip_category", ["service"], $args);
}
add_action('init', 'conskip_register_taxes');
