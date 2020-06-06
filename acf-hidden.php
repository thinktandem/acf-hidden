<?php

/*
Plugin Name: Advanced Custom Fields: Hidden Field
Plugin URI: http://folbert.com
Description: A hidden field for Advanced Custom Fields
Version: 1.5.2
Author: folbert, John Ouellet
Author URI: http://folbert.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

/**
 * Add Language.
 */
load_plugin_textdomain( 'acf-hidden', false, dirname( plugin_basename(__FILE__) ) . '/lang/' );

/**
 * Add field.
 */
function include_field_types_hidden( $version ) {
	include_once('acf-hidden-v5.php');
}
add_action('acf/include_field_types', 'include_field_types_hidden');

