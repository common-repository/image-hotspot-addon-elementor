<?php
/**
 * @package BaweElementor
 */
/*
Plugin Name: Image Hotspot Addon Elementor
Description: Create beautiful, responsive and professional Image hotspots with highly customisable tooltips.
Author: maxster
Version: 1.0.1
Requires at least: 3.8
Tested up to:      4.9.8
Author URI: http://codecans.com
License: GPL2
Text Domain: wfe-image-hotspot
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
*/

// prevent direct access
defined( 'ABSPATH' ) or die( 'Hey, you can\t access this file, you silly human!' );

// Vendor Composer Autoload
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

//The code that runs during plugin activation
function activate_bawe_plugin() {
	Bae\Base\Activate::activate();
}

register_activation_hook( __FILE__, 'activate_bawe_plugin' );


//The code that runs during plugin deactivation
function deactivate_bawe_plugin() {
	Bae\Base\Deactivate::deactivate();
}

register_deactivation_hook( __FILE__, 'deactivate_bawe_plugin' );

// Register ALL Services
if ( class_exists( 'Bae\\Init' ) ) {
	Bae\Init::register_services();
}