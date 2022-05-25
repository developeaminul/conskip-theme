<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package etiam
 */
?>
<!-- ==============  Newslatter area start============== -->
<?php get_template_part('template-parts/footer/newslatter');?>
<!-- ==============  Newslatter area end============== -->
<!-- ===============  Footer area start =============== -->
<div class="footer-area">
   <div class="container">
      <?php 
          get_template_part('template-parts/footer/footer-area');
          get_template_part('template-parts/footer/copyright')
      ;?>
   </div>
</div>
<!-- ===============  Footer area end =============== -->
<?php get_template_part('template-parts/footer/scroll');?>

<?php wp_footer() ;?>
</body>

</html>