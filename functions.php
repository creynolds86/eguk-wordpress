<?php
/**
 * _egukbasetheme functions and definitions
 *
 * @package _egukbasetheme
 */

/****************************************
Theme Setup
*****************************************/

/**
 * Theme initialization
 */
require get_template_directory() . '/lib/init.php';

/**
 * Custom theme functions definited in /lib/init.php
 */
require get_template_directory() . '/lib/theme-functions.php';

/**
 * Helper functions for use in other areas of the theme
 */
require get_template_directory() . '/lib/theme-helpers.php';

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/lib/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/lib/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/lib/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/lib/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/lib/inc/jetpack.php';


/****************************************
Require Plugins
*****************************************/

require get_template_directory() . '/lib/class-tgm-plugin-activation.php';
require get_template_directory() . '/lib/theme-require-plugins.php';

// add_action( 'tgmpa_register', 'mb_register_required_plugins' );


/****************************************
Misc Theme Functions
*****************************************/

/**
 * Define custom post type capabilities for use with Members
 */
add_action( 'admin_init', 'mb_add_post_type_caps' );
function mb_add_post_type_caps() {
	// mb_add_capabilities( 'portfolio' );
}

/**
 * Filter Yoast SEO Metabox Priority
 */
add_filter( 'wpseo_metabox_prio', 'mb_filter_yoast_seo_metabox' );
function mb_filter_yoast_seo_metabox() {
	return 'low';
}

/****************************************
EGUK Theme Functions
*****************************************/

if ( !defined(EGUK_INC_DIR) )
  define(EGUK_INC_DIR, get_template_directory() . '/inc/');

if ( !defined(EGUK_ASSETS_DIR) )
  define(EGUK_ASSETS_DIR, get_template_directory_uri() . '/assets/');

if (!defined(EGUK_IMG_DIR))
  define(EGUK_IMG_DIR, EGUK_ASSETS_DIR . 'images/');

// Register Custom Navigation Walker
require_once(EGUK_INC_DIR . 'class-bootstrap-navwalker.php');

// Enqueue the EGUK custom post types
require_once(EGUK_INC_DIR . 'functions-init.php');

// Enqueue the EGUK CSS and scripts
require_once(EGUK_INC_DIR . 'functions-enqueue.php');

// Enqueue the EGUK filters
require_once(EGUK_INC_DIR . 'functions-filters.php');

// Enqueue the EGUK ajax
require_once(EGUK_INC_DIR . 'functions-ajax.php');

// Enqueue the EGUK custom post types
require_once(EGUK_INC_DIR . 'functions-custom-post-types.php');

// Enqueue the EGUK user functions
require_once(EGUK_INC_DIR . 'functions-users.php');
