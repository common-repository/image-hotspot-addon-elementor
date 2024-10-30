<?php
/**
 * @package  BaweElementor
 */
namespace Bae\Base;

class Enqueue extends BaseController {
	public function register() {
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'front_enqueue' ) );
	}
	public function admin_enqueue() {
		//admin enqueue scripts
		//wp_enqueue_style( 'prime_fontawesome_load_admin', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

		//wp_enqueue_style( 'prime_admin_css', $this->plugin_url . 'assets/css/adminstyle.css' );

		//wp_enqueue_script( 'prime-params-js', $this->plugin_url . 'assets/js/params.min.js', array( 'jquery' ), '', true );

	}

	//wp/front enqueue scripts
	public function front_enqueue() {
		wp_enqueue_style( 'wfe_image_hotspot_css', $this->plugin_url . 'assets/css/wfe-image-hotspot.css' );
		wp_enqueue_script( 'wfe_image_hotspot_js', $this->plugin_url . 'assets/js/wfe-image-hotspot.js', array( 'jquery' ), '', true );


		wp_enqueue_script( 'wfe_hotspot_tipso', $this->plugin_url . 'assets/js/wfe-tipso.js', array( 'jquery' ), '', true );

	}
}