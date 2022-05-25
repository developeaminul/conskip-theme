<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package markite
 */

get_header();

?>


<!-- ==============  Blog area start ============== -->
<div class="blog-standard pt-70">
   <div class="container">
      <div class="row">
         <div class="col-lg-8">
            <?php
            if (have_posts()) :

               /* Start the Loop */
               while (have_posts()) :
                  the_post();
                  /*
                  * Include the Post-Type-specific template for the content.
                  * If you want to override this in a child theme, then include a file
                  * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                  */
                  get_template_part('loop-templates/content', get_post_type());

               endwhile;
            else :
              get_template_part('loop-templates/content', 'none');

            endif;
            ?>


            <div class="row">
               <div class="col-lg-12">
                  <div class="pagination">
                     <ul>
                        <li><a href="#">01</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#">04</a></li>
                        <li><i class="flaticon-arrow-pointing-to-right"></i></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <?php get_sidebar(); ?>
      </div>
   </div>
</div>
<!-- ==============  Blog area end ============== -->

<?php 

get_footer()
;?>
