<?php 
/**
 * Includes shortocdes of symbols
 * Plugin: shortcodes for the current year, month and day
 * Since: 0.2
 * Author: Mebratu Kumera
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

 if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * 
 * Retrieve ® symbol
 * 
 */
add_shortcode( 't', 'cyd_registered_trademark' );
function cyd_registered_trademark( $atts ){
  return '®';
}

/**
 * 
 * Retrieve ™ symbol
 * 
 */
add_shortcode( 'tm', 'cyd_trademark' );
function cyd_trademark( $atts ){
  return '™';
}

/**
 * 
 * Retrieve ℠ symbol
 * 
 */
add_shortcode( 'sm', 'cyd_servicemark_trademark' );
function cyd_servicemark_trademark( $atts ){
  return '℠';
}