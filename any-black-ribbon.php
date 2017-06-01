<?php
/**
 * Plugin Name: AD Black Ribbon
 * Description: Display a black ribbon in the upper right corner of your website. In memory of the victims of terrorism (Paris, Beirut...). 
 * Version: 1.1
 * Author: Thomas Villain - Anybodesign
 * Author URI: https://anybodesign.com/
 * Plugin URI: https://github.com/anybodesign/black-ribbon
 * License: GPL2
 * Text Domain: black-ribbon
 * Domain Path: /languages/
*/

/*
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

defined('ABSPATH') or die(); 


/* ------------------------------------------
// Some constants ---------------------------
--------------------------------------------- */


define('BLKR_PATH', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );
define('BLKR_NAME', 'AD Black Ribbon');
define('BLKR_VERSION', '1.1');


// i18n

load_plugin_textdomain( 'black-ribbon', false, basename( dirname( __FILE__ ) ) . '/languages/' );


/* ------------------------------------------
// Print CSS ------------------------------
--------------------------------------------- */


function print_blkr_css() {
 
print '<style>
html:before {
	content: "";
	display: block;	
	height: 10px; 
	width: 120px;
	position: fixed; 
	top: 10px; 
	right: -35px;
	background-color: black;
	-webkit-transform: rotate(45deg);
	transform: rotate(45deg);
	z-index: 999;
}
@media screen and (min-width: 580px) {
	html:before {
		height: 20px;
		top: 25px;
		right: -25px;
	}
}
</style>';
}
add_action('wp_head', 'print_blkr_css', 100);