<?php

/**
 *
 * Template Name: Conskip Template
 * Description: A Page Template with a design.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Conskip
 */

get_header();
?>

<div id="primary" class="entry-content">
   <main id="main" class="site-main">

      <?php
      while (have_posts()) : the_post();

         the_content();

      endwhile; // End of the loop.
      ?>
      
   </main><!-- #main -->
</div>

<?php
get_footer();