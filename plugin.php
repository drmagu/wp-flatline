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
class WpFlatline {

	public function __construct() {
	
		$this->init();
	}
	
	public function init() {
		add_action( 'init', [ $this, 'stop_heartbeat' ], 1);
	}
	
	public function stop_heartbeat() {
		wp_deregister_script( 'heartbeat' );	
	}
}

new WpFlatline();
