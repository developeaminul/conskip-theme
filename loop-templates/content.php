<?php 
$author_bio_avatar_size = 180;
;?>

<div id="post-<?php the_ID(); ?>" <?php post_class ('blog-card-xl');?>>
   <a href="<?php echo get_the_permalink(); ?>" class="blog-title-xl"><?php echo wp_trim_words( get_the_title(), 15, ' ' ); ?></a>
    <?php 
      if(has_post_thumbnail()): ?>
         <div class="blog-thumb-xl">
            <?php the_post_thumbnail('full', array('class' => 'img-responsive' )); ?>
         </div>
      <?php 
    endif; ?>

   <div class="blog-info">
      <div class="writer-info">
         <div class="writer-img">
        <?php print get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size,'','',array('class'=>'img-fluid') ); ?>
         </div>
         <span>Posted by <a href="<?php print esc_url( get_author_posts_url( get_the_author_meta('ID') ) ); ?>"> <?php print get_the_author(); ?></a></span>
      </div>
      <div class="blog-date">
         <div class="date-icon"><i class="bi bi-calendar3"></i></div>
         <span><?php the_time( get_option('date_format') ); ?></span>
      </div>
   </div>
   <p>
     <?php echo wp_trim_words( get_the_content(), 50, ' .... ' ); ?>
   </p>

   <div class="blog-bottom">
      <div class="blog-btn">
         <a href="<?php echo get_the_permalink(); ?>" class="btn-common"><?php echo esc_html__( 'Read More ', 'conskip' ) ?></a>
      </div>

      <div class="blog-icons">
         <div class="blog-single-icon">
            <i class="flaticon-like"></i>
         </div>
         <div class="blog-single-icon">
            <i class="flaticon-heart"></i>
         </div>
      </div>
   </div>
</div>
