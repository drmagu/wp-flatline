<?php
/**
 * Plugin Name: WP Flatline Plugin
 * Plugin URI: http://www.drmagu.com/ha-hold-my-brain-be-still-my-beating-heart-or-wordpress-heartbeat-troubles-951.htm
 * Description: When activated it stops the WordPress "heartbeat"
 * Version: 1.0.0
 * Author: DrMagu
 * Author URI: http://www.drmagu.com 
 **/
namespace drmagu\wp_flatline;

require_once (__DIR__.'/classes/VersionCheck.class.php');
new \VersionCheck(__FILE__, '3.6', '5.3');
		
class WpFlatline {

	public function __construct() {
	
		$this->init();
	}
	
	private function init() {
		add_action( 'init', [ $this, 'stop_heartbeat' ], 1);
	}
	
	public function stop_heartbeat() {
		wp_deregister_script( 'heartbeat' );	
	}
}

new WpFlatline();
