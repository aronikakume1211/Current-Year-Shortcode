<?php

/**
 * Plugin Name:       Current Year Date
 * Plugin URI:        https://hullemgebeya.com/
 * Description:       Add shortcodes for the current year, month and day
 * Version:           0.2
 * Author:            Mebratu Kumera
 * Author URI:        https://www.linkedin.com/in/mebratu-kumera-638149181/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       current-year-date
 */

/*
This program is free software: you can redistribute
 it and/or modify it under the terms of the GNU General 
 Public License as published by the Free Software Foundation,
  either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, 
but WITHOUT ANY WARRANTY; without even the implied warranty of 
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
See the GNU General Public License for more details.

You should have received a copy of the GNU General
 Public License along with this program. If not,
  see <https://www.gnu.org/licenses/>.
*/


// if accessed directly, exit
if (!defined('ABSPATH')) exit;

require_once( plugin_dir_path( __FILE__ ) . 'shortcodes/ip.php' );
require_once( plugin_dir_path( __FILE__ ) . 'shortcodes/current_dates.php' );
require_once( plugin_dir_path( __FILE__ ) . 'shortcodes/symbols.php' );
require_once( plugin_dir_path( __FILE__ ) . 'shortcodes/copyright.php' );