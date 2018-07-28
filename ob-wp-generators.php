<?php
if ( !function_exists( 'add_action' ) ) {
  echo 'Hi there!  I\'m just a plugin, please don\'t b cheating.';
  exit;
}
/**
 * Plugin Name: OB WP Generators
  * Description: The easiest and fastest way to create custom and high quality code for your WordPress project using the latest WordPress coding standards and API's.
 * Version:  1.0
 * Author: Oudaryamay Burai
 * Author URI: https://oudarya.wordpress.com/
 * License: GPLv2 or later
 */
function obWPgenerator_on_activation()
{
    if ( ! current_user_can( 'activate_plugins' ) )
        return;
    $plugin = isset( $_REQUEST['plugin'] ) ? $_REQUEST['plugin'] : '';
    check_admin_referer( "activate-plugin_{$plugin}" );
}

function obWPgenerator_on_deactivation()
{
    if ( ! current_user_can( 'activate_plugins' ) )
        return;
    $plugin = isset( $_REQUEST['plugin'] ) ? $_REQUEST['plugin'] : '';
    check_admin_referer( "deactivate-plugin_{$plugin}" );

}

function obWPgenerator_on_uninstall()
{
    if ( ! current_user_can( 'activate_plugins' ) )
        return;
    check_admin_referer( 'bulk-plugins' );

    if ( __FILE__ != WP_UNINSTALL_PLUGIN )
        return;

}

register_activation_hook(   __FILE__, 'obWPgenerator_on_activation' );
register_deactivation_hook( __FILE__, 'obWPgenerator_on_deactivation' );
register_uninstall_hook(    __FILE__, 'obWPgenerator_on_uninstall' );

include_once( plugin_dir_path( __FILE__ ) .'includes/obWPgeneratorSC.php');
include_once( plugin_dir_path( __FILE__ ) .'includes/obWPgeneratorDOC.php');
add_action('admin_menu', 'obWPgenerator_admin_menu');
function obWPgenerator_admin_menu() {
	add_menu_page('obWPgenerator', 'OB WP Generator', 'administrator',
		'obWPgenerator', 'obWPgenerator_home',plugins_url( 'assets/images/ob-wp-generators-logo.png', __FILE__ ));
    add_submenu_page(
        'obWPgenerator',          // parent slug
        'Shortcode',             // page title
        'Shortcode',            // menu title
        'administrator',       // capability
        'obWPgeneratorSC',	  // slug
        'obWPgenerator_sc'   // callback
    ); 
    add_submenu_page(
        'obWPgenerator',          // parent slug
        'Documentation',             // page title
        'Documentation',            // menu title
        'administrator',       // capability
        'obWPgeneratorDOC',	  // slug
        'obWPgenerator_doc'   // callback
    ); 
    if (isset($_GET['page'])) {
    $ob_gen_condn_cssjs=esc_html(sanitize_text_field(trim($_GET['page'])));
        if($ob_gen_condn_cssjs == 'obWPgenerator' || $ob_gen_condn_cssjs == 'obWPgeneratorSC' ||$ob_gen_condn_cssjs == 'obWPgeneratorDOC') {
     wp_enqueue_style('ob-style-css', plugins_url('assets/css/ob-style.css',__FILE__));
     wp_enqueue_style('ob-style-responsive-css', plugins_url('assets/css/ob-style-responsive.css',__FILE__));
     wp_enqueue_script('ob-custom-js', plugins_url('assets/js/ob-custom.js',__FILE__));
    }
  }   
}

function obWPgenerator_add_settings_link( $links ) {
    $settings_link = '<a href="admin.php?page=obWPgenerator">' . __( 'Lets start' ) . '</a>';
    array_push( $links, $settings_link );
    return $links;
}
$plugin = plugin_basename( __FILE__ );
add_filter( "plugin_action_links_$plugin", 'obWPgenerator_add_settings_link' );

function obWPgenerator_home(){
    if(is_admin() && current_user_can('administrator')){

echo '<div class="wrap">
<div class="header-heading-area">
<p class="heading">
  <span class="responsive-remove">Spice up your wordpress development with</span>
  <span class="title-animation">
    OB WP GENERATOR
  </span>
  <span class="responsive-remove">&mdash; no Development Knowledge required &mdash;</span>
</p>
</div>

	<div clas="main-content-area">
    <div class="ob-twoinone-container">
    <div id="left">
	 <a href="'.admin_url().'admin.php?page=obWPgeneratorSC" class="ob-wp-generate-button-home">Shortcodes Generator<br><span>Use this tool to create custom code for Shortcodes with add_shortcode() function.</span></a> 
	      </div>
     <div id="right">
	 <a class="ob-wp-generate-button-home">Coming soon...<br><span>More features will be addded soon. Hope you will enjoy our application.</span></a> 
     </div>
	</div>
    </div>

  </div>';

  	}
  }
