<?php

/**
 * Includes shortocdes of copyright
 * Plugin: shortcodes for the current year, month and day
 * Since: 0.2
 * Author: Mebratu Kumera
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * 
 * Retrieve © symbol
 * 
 */
add_shortcode('c', 'cyd_copy');
function cyd_copy($atts)
{
    return '©';
}

/**
 * 
 * Retrieve Copyright text
 * 
 */
add_shortcode('cc', 'cyd_copylong');
function cyd_copylong($atts)
{
    return 'Copyright';
}
