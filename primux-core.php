<?php
/**
 * Plugin Name: Primux Core Functionality
 * Plugin URI: https://primux.dk
 * Description: This contains all your site's core functionality so that it is theme independent.
 * Version: 1.0
 * Author: Primux Media
 * Author URI: http://www.primux.dk
 */

if(!defined('MUX_DIR')) {
	define('MUX_DIR', plugin_dir_path( __FILE__ ));
}
if(!defined('MUX_URL')) {
	define('MUX_URL', plugin_dir_url( __FILE__ ));
}

// Admin only includes
if(is_admin()) {

}

include_once( MUX_DIR . 'lib/functions/post-types.php');

// front-end only includes
if(!is_admin()) {

}

