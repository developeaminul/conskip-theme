<?php



define('CONSKIP_THEME_DIR', get_template_directory());
define('CONSKIP_THEME_URI', get_theme_file_uri());
define('CONSKIP_THEME_CSS_DIR', CONSKIP_THEME_URI . '/assets/css/');
define('CONSKIP_THEME_FONT_DIR', CONSKIP_THEME_URI . '/assets/font/');
define('CONSKIP_THEME_JS_DIR', CONSKIP_THEME_URI . '/assets/js/');
define('CONSKIP_THEME_INC', CONSKIP_THEME_DIR .'/inc/functions/');
define('CONSKIP_THEME_FRM', CONSKIP_THEME_DIR .'/inc/codestar-framework/');


/*
 * Theme setup and custom theme supports.
 */
require CONSKIP_THEME_INC . 'theme-setup.php';

/*
 * Style Enqueue etiam.
 */
require CONSKIP_THEME_INC . 'enqueue.php';


/**
 * Nav Wallkar
 */
require_once CONSKIP_THEME_INC . 'class-wpnavwalker.php';

/*
 * Pagination etiam.
 */
// require get_template_directory() . '/inc/functions/pagination.php';

/*
 * Excerpt etiam.
 */
// require get_template_directory() . '/inc/functions/excerpt.php';

/*
 * Widgets etiam.
 */
// require get_template_directory() . '/inc/functions/widgets.php';

/*
 *Codestar Framework etiam.
 */
require_once CONSKIP_THEME_FRM . 'codestar-framework.php';
require_once CONSKIP_THEME_FRM . 'samples/admin-options.php';
require_once CONSKIP_THEME_FRM . 'settings/theme-settings.php';

/*
 * etiam theme option panel.
 */
// require get_template_directory() . '/inc/theme-panel.php';

/*
 * etiam theme Custom css.
 */
// require get_template_directory() . '/inc/custom-css.php';

/*
 * etiam breadcrumb
 */
// require get_template_directory() . '/inc/functions/breadcrumb.php';

/*
 * Comment etiam.
 */
// require get_template_directory() . '/inc/functions/comment.php';

/*
 * TGM plugin activation.
 */
// require_once get_template_directory() . '/inc/tgm/tgm-init.php';





