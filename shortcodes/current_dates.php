<?php 
/**
 * Includes dates shortocdes
 * Plugin: shortcodes for the current year, month and day
 * Since: 0.2
 * Author: Mebratu Kumera
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

 if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Create Year shortcode to replace with current year.
function current_year()
{
    $year = gmdate('Y');
    return $year;
}
add_shortcode('Year', 'current_year');

// Create year shortcode with short format to replace with current year.
function current_year_short()
{
    $short = gmdate('y');
    return $short;
}
add_shortcode('year', 'current_year_short');

// Create month shortcode to replace with current month.
function current_month()
{
    $month = gmdate('m');
    return $month;
}
add_shortcode('Month', 'current_month');

// Create month shortcode with short format to replace with current month.
function current_month_short()
{
    $short = gmdate('n');
    return $short;
}
add_shortcode('month', 'current_month_short');

// Create long month textual shortcode to replace with current month textual.
function current_month_textual()
{
    $month = gmdate('F');
    return $month;
}
add_shortcode('month_textual', 'current_month_textual');

// Create short month textual shortcode to replace with current month textual short.
function current_month_textual_short()
{
    $short = gmdate('M');
    return $short;
}
add_shortcode('month_textual_short', 'current_month_textual_short');

// Create day numeric shortcode to replace with current day.
function current_day()
{
    $day = gmdate('d');
    return $day;
}
add_shortcode('Day', 'current_day');

// Create day numeric shortcode with short format to replace with current day.
function current_day_short()
{
    $short = gmdate('j');
    return $short;
}
add_shortcode('day', 'current_day_short');

// Create day textual shortcode to replace with current day textual.
function current_day_textual()
{
    $day = gmdate('l');
    return $day;
}
add_shortcode('day_textual', 'current_day_textual');

// Create day textual shortcode with short format to replace with current day textual.
function current_day_textual_short()
{
    $short = gmdate('D');
    return $short;
}
add_shortcode('day_textual_short', 'current_day_textual_short');

// Create shortcodes for dynamic date values
function current_date_shortcode($atts)
{
    $atts = shortcode_atts(array(
        'format' => 'Y-m-d', // Default format
    ), $atts, 'current_date');

    $current_date = gmdate($atts['format']);
    return $current_date;
}
add_shortcode('current_date', 'current_date_shortcode');

// Create shortcodes for dynamic time values
function create_time_shortcodes(){
  
    return date("H:i:s");
}
add_shortcode('time', 'create_time_shortcodes');