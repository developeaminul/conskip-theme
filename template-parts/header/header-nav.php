<!--====== Header Start ======-->
<header class="site-header sticky-header transparent-header">
   <div class="navbar-wrapper">
      <div class="container">
         <div class="navbar-inner">
            <div class="site-logo">
               <?php
               if (has_custom_logo()) :
                  the_custom_logo();
               else :
               ?>
                  <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                  </a>
               <?php
               endif;
               ?>
            </div>
            <div class="nav-menu">
            <?php
                  wp_nav_menu(array(
                     'theme_location'    => 'primary',
                     'depth'             => 4,
                     'container'         => '',
                     'container_class'   => '',
                     'container_id'      => '',
                     'menu_class'        => '',
                     'fallback_cb'          => 'wp_page_menu',
                     'walker'            => new WP_Nav_walker_Class(),
                  ));
                  ?>
            </div>
            <div class="navbar-extra d-flex align-items-center">
               <a href="events.html" class="main-btn nav-btn d-none d-sm-inline-block">
                  Get a Quote
               </a>
               <a href="#" class="nav-toggler">
                  <span></span>
               </a>
            </div>
         </div>
      </div>
   </div>
   <div class="mobile-menu-panel">
      <div class="panel-logo">
         <?php
         $mobile_header_logo = get_theme_mod('mobile_header_logo');

         if (!empty($mobile_header_logo)) : ?>
            <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
               <img src="<?php echo esc_url($mobile_header_logo); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
            </a>
         <?php
         else :
         ?>
            <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-w.png" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
            </a>
         <?php
         endif;
         ?>
      </div>
      <?php
         wp_nav_menu(array(
            'theme_location'    => 'mobile',
            'depth'             => 4,
            'container'         => '',
            'container_class'   => '',
            'container_id'      => '',
            'menu_class'        => 'panel-menu',
            'fallback_cb'          => 'wp_page_menu',
            'walker'            => new WP_Nav_walker_Class(),
         ));
         ?>
      <div class="panel-extra">
         <a href="#" class="main-btn btn-white"> Get a Quote</a>
      </div>
      <a href="#" class="panel-close">
         <i class="bi bi-x"></i>
      </a>
   </div>
</header>
<!--====== Header End ======-->