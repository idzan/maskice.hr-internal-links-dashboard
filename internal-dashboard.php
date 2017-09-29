<?php
/*
Plugin Name: maskice.hr Internal Links
Plugin URI: https://github.com/markoidzan/maskice.hr-internal-links-dashboard/
Description: Interni linkovi za lakši rad s maskice.hr stranicom
Version: 1.0
Author: Marko Idžan
Author URI: https://idzan.com.hr
*/
function maskice_internal_dashboard () {
	global $wp_meta_boxes;

	wp_add_dashboard_widget('maskice_internal', 'maskice.hr - Korisni linkovi za administratore' , 'maskice_widget_dash_linkovi');
}

function maskice_widget_dash_linkovi () {
	echo '<p>Webmail: <a href="http://mail.maskice.hr">mail.maskice.hr (via Zoho Mail)</a></p><hr>
	<p>Web Chat: <a href="https://maskice.hr/wp-admin/admin.php?page=scx_console">Chat Console</a></p><hr>
	<p>Server Info: <a href="http://******.opremazamobitel.com:####">Server Konzola</a></p>
	<p>Username: Gr00t <br>Password: ******** <br>SSH port: ## <br>Server IP: 94.###.###.213 </p>
	<p>SFTP Podatci: <br>IP (Host): 94.###.###.213 <br>Username: opr## <br>Password: ******** <br>Port: ## </p>';
}

add_action ('wp_dashboard_setup','maskice_internal_dashboard');