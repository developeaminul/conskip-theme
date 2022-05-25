<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package etiam
 */

?>
<!doctype html>
<html class="no-js" lang="<?php language_attributes(); ?>">

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
   <link rel="profile" href="http://gmpg.org/xfn/11">
   <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
   <?php
   wp_head();
   ?>
</head>

<body <?php body_class(); ?>>
   <?php wp_body_open(); ?>

  

   <?php

   get_template_part('template-parts/header/preloader'); //Preloader Area

   get_template_part('template-parts/header/header-topbar'); //Top-Bar

   get_template_part('template-parts/header/header-nav');    //Nav-Bar
   ?>