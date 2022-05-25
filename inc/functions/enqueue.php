<?php 

/**
 * Enqueue scripts and styles.
 */

/** 
 * conskip_scripts description
 * @return [type] [description]
 */
function conskip_scripts() {
	/**
	* all css files
	*/
	wp_enqueue_style( 'bootstrap-icons', CONSKIP_THEME_CSS_DIR.'bootstrap-icons.css', array() );
	wp_enqueue_style( 'animate', CONSKIP_THEME_CSS_DIR.'animate.css', array() );
	wp_enqueue_style( 'magnific-popup', CONSKIP_THEME_CSS_DIR.'magnific-popup.css', array() );
	wp_enqueue_style( 'boxicons', CONSKIP_THEME_CSS_DIR.'boxicons.min.css', array() );
	wp_enqueue_style( 'font-awesome', CONSKIP_THEME_CSS_DIR.'font-awesome.min.css', array() );
	wp_enqueue_style( 'flaticon', CONSKIP_THEME_FONT_DIR.'flaticon.css', array() );
	wp_enqueue_style( 'bootstrap', CONSKIP_THEME_CSS_DIR.'bootstrap.min.css', array() );
	wp_enqueue_style( 'owl-carousel', CONSKIP_THEME_CSS_DIR.'owl.carousel.min.css', array() );
   // THEME SEYLE SHYTEET
	wp_enqueue_style( 'style', CONSKIP_THEME_CSS_DIR.'style.css', array() );
	wp_enqueue_style( 'responsive', CONSKIP_THEME_CSS_DIR.'responsive.css', array() );
	

	// all js
	wp_enqueue_script( 'jquery-3', CONSKIP_THEME_JS_DIR.'jquery-3.6.0.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'owl-carousel', CONSKIP_THEME_JS_DIR.'owl.carousel.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'bootstrap-bundle', CONSKIP_THEME_JS_DIR.'bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'popper-min', CONSKIP_THEME_JS_DIR.'popper.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'jquery-mixitup', CONSKIP_THEME_JS_DIR.'jquery.mixitup.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'jquery-magnific-popup', CONSKIP_THEME_JS_DIR.'jquery.magnific-popup.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'countUp-min', CONSKIP_THEME_JS_DIR.'countUp.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'wow-js', CONSKIP_THEME_JS_DIR.'wow.min.js', array('jquery'), '', true );
   //THEME JS FILE
	wp_enqueue_script( 'main-js', CONSKIP_THEME_JS_DIR.'main.js', array('jquery'), '', true );

   

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'conskip_scripts' );


?>
