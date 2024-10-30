<?php
/**
 * @package  BaweElementor
 */
namespace Bae\Base;

class BaseController {
	public $plugin_path;

	public $plugin_url;

	public $plugin;


	//For PHP Lower Version - Get Path
	public function cstm_dirname( $path, $count = 1 ) {
		if ( $count > 1 ) {
			return dirname( $this->cstm_dirname( $path, -- $count ) );
		} else {
			return dirname( $path );
		}
	}

	public function __construct() {
		$this->plugin_path = plugin_dir_path( $this->cstm_dirname( __FILE__, 2 ) );
		$this->plugin_url  = plugin_dir_url( $this->cstm_dirname( __FILE__, 2 ) );
		$this->plugin      = plugin_basename( $this->cstm_dirname( __FILE__, 3 ) ) . '/before-after-widgets-elementor.php';

		/*-----------------------------------------------------------------------------------*/
		/*	Initalising Shortcodes In Content and Widget
		/*-----------------------------------------------------------------------------------*/
		add_filter( 'widget_text', 'do_shortcode' );
		add_filter( 'the_content', 'do_shortcode' );
		add_filter( 'the_excerpt', 'do_shortcode' );
	}
}