<?php 
/**
 * Includes shortocdes of user IP
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
 * Retrieve user IP
 * 
 */
add_shortcode('show_user_ip', 'cyd_retrieve_ip');
function cyd_retrieve_ip() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return apply_filters('wpb_get_ip', $ip);
}