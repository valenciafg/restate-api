<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Restate_Api
 * @subpackage Restate_Api/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Restate_Api
 * @subpackage Restate_Api/admin
 * @author     Your Name <email@example.com>
 */
class Restate_Api_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $restate_api    The ID of this plugin.
	 */
	private $restate_api;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $restate_api       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $restate_api, $version ) {

		$this->restate_api = $restate_api;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Restate_Api_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Restate_Api_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->restate_api, plugin_dir_url( __FILE__ ) . 'css/restate-api-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Restate_Api_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Restate_Api_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->restate_api, plugin_dir_url( __FILE__ ) . 'js/restate-api-admin.js', array( 'jquery' ), $this->version, false );

	}

}
