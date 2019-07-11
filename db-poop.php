<?php
/*
Plugin Name:       DB Poop
Description:       Basic plugin to dump the DB
Plugin URI:        https://richard.pastenes.com
Contributors:      (list of wordpress.org usernames)
Author:            Richard Pastenes
Author URI:        https://richard.pastenes.com
Donate link:       https://richard.pastenes.com
Tags:              database, mysql
Version:           1.4
Stable tag:        1.0
Requires at least: 4.5
Tested up to:      5.2.2
Text Domain:       db-poop
Domain Path:       /languages
License:           GPL v2 or later
License URI:       https://www.gnu.org/licenses/gpl-2.0.txt

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version
2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
with this program. If not, visit: https://www.gnu.org/licenses/
*/

// Exit if file is called directly
if (!defined('ABSPATH')) {
    exit;
}

// load text domain
function db_poop_load_textdomain() {
	load_plugin_textdomain( 'db_poop', false, plugin_dir_path( __FILE__ ) . 'languages/' );
}
add_action( 'plugins_loaded', 'db_poop_load_textdomain' );

// If admin area
if (is_admin()) {
	// Include dependencies
	require_once plugin_dir_path(__FILE__) . 'admin/admin-menu.php';
	require_once plugin_dir_path(__FILE__) . 'includes/core-functions.php';
}
