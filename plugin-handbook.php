<?php
/**
 * Plugin Name: Plugin Handbook
 * Plugin URI: www.abdhannan.com
 * Description: Simple handbook plugin
 * Version: 0.1
 * Author: Abd Hannan
 * Author URI: www.abdhannan.com
 * Text Domain: wporg
 * Domain Path: /Languange
 * License: GPL2
{Plugin Name} is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
{Plugin Name} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with {Plugin Name}. If not, see {License URI}.
 */

function plugin_handbook_setup_post_types()
{
	// Menambah custom post "Book"
	register_post_type( 'book', ['public' => 'true' ] );
}
add_action( 'init', 'plugin_handbook_setup_post_types');

function plugin_handbook_install()
{
	//
	plugin_handbook_setup_post_types();

	// clear permalink
	flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'plugin_handbook_install' );

function plugin_handbook_deactivation()
{
	flush_rewrite_rules();
}
register_deactivation_hook(__FILE__, 'plugin_handbook_deactivation' );