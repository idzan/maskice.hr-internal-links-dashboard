<?php
/*
Plugin Name: Internal Links
Plugin URI: https://idzan.eu
Description: Interni linkovi za lakši rad s maskice.hr stranicom
Version: 1.5
Author: Marko Idžan
Author URI: https://idzan.eu
*/
function maskice_internal_dashboard () {
	global $wp_meta_boxes;

	wp_add_dashboard_widget('maskice_internal', 'WordPress Dashboard Widget for Internal Usage' , 'maskice_widget_dash_linkovi');
}

function maskice_widget_dash_linkovi () {
	echo '<strong>This is sample coide for wordPress Dashboard Widget, use wisely.</strong>';
}

add_action ('wp_dashboard_setup','maskice_internal_dashboard');
