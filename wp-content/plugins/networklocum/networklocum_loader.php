<?php
class networklocumLoader extends MvcPluginLoader {

	var $db_version = '1.0';
	
	function init() {
	
		// Include any code here that needs to be called when this class is instantiated
	
		global $wpdb;
	
	/*	$this->tables = array(
			'events' => $wpdb->prefix.'events',
			'events_speakers' => $wpdb->prefix.'events_speakers',
			'speakers' => $wpdb->prefix.'speakers',
			'venues' => $wpdb->prefix.'venues'
		);
	*/
	}

	function activate() {
	
		// This call needs to be made to activate this app within WP MVC
		
		$this->activate_app(__FILE__);
		
		// Perform any databases modifications related to plugin activation here, if necessary

		require_once ABSPATH.'wp-admin/includes/upgrade.php';
	
		add_option('events_calendar_example_db_version', $this->db_version);
	 	
	}

	function deactivate() {
	
		// This call needs to be made to deactivate this app within WP MVC
		
		$this->deactivate_app(__FILE__);
		
		// Perform any databases modifications related to plugin deactivation here, if necessary
	
	}
	
	function insert_example_data() {
	 	
	}

}

?>