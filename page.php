<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ProgriSaaS
 */

get_header();
?>

<div class="entry-content">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div id="primary" class="content-area">
               <main id="main" class="site-main">

                  <?php
                  if (have_posts()) :
                     while (have_posts()) : the_post();
                        get_template_part('loop-templates/content', 'page');
                     endwhile;
                  else :
                     get_template_part('loop-templates/content', 'none');
                  endif; ?>

               </main><!-- #main -->
            </div><!-- #primary -->
         </div>
      </div>
   </div>
</div>

<?php
get_footer();
?>