<?php
/**
 * Plugin Name: WP-Noty
 * Version: 1.0
 * Description: Adds the noty jquery library into Wordpress
 * Author: Matt Ward
 * Author URI: http://redbak.net.au
 */

/**
 * Define Globals
 *
 * @since 1.0
 */

define( 'WPN_VERSION', '1.0' );
define( 'WPN_PLUGIN_DIR', WP_PLUGIN_DIR.'/'.dirname( plugin_basename( __FILE__ ) ) );
define( 'WPN_PLUGIN_URL', WP_PLUGIN_URL.'/'.dirname( plugin_basename( __FILE__ ) ) );

class WP_Noty {
  /**
   * Constuctor
   *
   * @access private
   * @since 1.0
   *
   * @return void
   */
  public function __construct() {
    add_action('wp_enqueue_scripts', array( &$this, 'wp_noty_init' ) );
  }

   /**
   * Load Scripts & Styles
   *
   * @uses wp_enqueue_style()
   * @uses wp_enqueue_script()
   *
   * @access public
   * @package WordPress
   * @since 1.0
   * @author Matt Ward
   *
   * @return void
   */
  function wp_noty_init() {
    // Enqueue Styles
    wp_enqueue_style('wpn-css', WPN_PLUGIN_URL.'/css/jquery.gritter.css', false, false, 'screen');
    
    // Enqueue Scripts
    wp_enqueue_script('wpn-js', WPN_PLUGIN_URL.'/js/jquery.gritter.min.js', array('jquery'), false);
    wp_enqueue_script('wpn-notifications', WPN_PLUGIN_URL.'/js/growls.js', array('jquery'), false);
  }
    
}

/**
 * Instantiate class
 *
 * @since 1.0
 */
$noty = new WP_Noty();



