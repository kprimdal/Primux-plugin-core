<?php
/**
 * Metaboxes
 *
 * This file registers any custom metaboxes
 * 
 * For Examples see /Metabox/Exampla-Functions.php
 */

/**
 * Create Metaboxes
 * @since 1.0.0
 * @link http://www.billerickson.net/wordpress-metaboxes/
 */

function be_metaboxes( $meta_boxes ) {
	$meta_boxes[] = array(
		'id' => 'page-options',
		'title' => 'Page Options',
		'pages' => array('page'), 
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, 
		'fields' => array(
			array(
				'name' => 'Subtitle',
				'desc' => '',
				'id' => 'be_page_subtitle',
				'type' => 'text'
			),
		),
	);

	return $meta_boxes;
}
// add_filter( 'cmb_meta_boxes' , 'be_metaboxes' );
 
 
/**
 * Initialize Metabox Class
 * @since 1.0.0
 * see /lib/metabox/example-functions.php for more information
 *
 */
  
function be_initialize_cmb_meta_boxes() {
	if ( !class_exists( 'cmb_Meta_Box' ) ) {
		require_once( BE_DIR . '/lib/metabox/init.php' );
	}
}
add_action( 'init', 'be_initialize_cmb_meta_boxes', 9999 );