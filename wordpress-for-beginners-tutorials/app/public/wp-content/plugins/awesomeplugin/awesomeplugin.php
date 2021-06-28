<?php
   /*
   Plugin Name: Awesomeness Creator
   description: Custom plugin create
  a plugin to create awesomeness and spread joy
   Version: 1.2
   Author: Mr. Awesome
   */
if ( ! defined( 'WPINC' ) ) {
  die;
}

// Define plugin paths and URLs
define( 'WPPLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'WPPLUGIN_DIR', plugin_dir_path( __FILE__ ) );

include( plugin_dir_path( __FILE__ ) . 'includes/wpplugin-styles.php');


class Awesome_Plugin {

   private function __construct() {}

   public static function init_actions() {

      register_activation_hook( __FILE__, array( __CLASS__, 'activate' ) );
   }
}
add_action( 'plugins_loaded', array( 'Awesome_Plugin', 'init_actions' ) );

// include( plugin_dir_path( __FILE__ ) . 'includes/wpplugin-options.php');

function wpplugin_settings_pages()
{

  add_menu_page(
    __( 'Awesome Plugin', 'wpplugin' ),
    __( 'Menu', 'wpplugin' ),
    'manage_options',
    'wpplugin',
    'wpplugin_settings_page_markup',
    'dashicons-wordpress-alt',
    100
  );

  add_submenu_page(
    'wpplugin',
    __( 'Feature 1', 'wpplugin' ),
    __( 'Feature 1', 'wpplugin' ),
    'manage_options',
    'wpplugin-feature-1',
    'wpplugin_settings_subpage_markup'
  );

  add_submenu_page(
    'wpplugin',
    __( 'Feature 2', 'wpplugin' ),
    __( 'Feature 2', 'wpplugin' ),
    'manage_options',
    'wpplugin-feature-2',
    'wpplugin_settings_subpage_markup'
  );

}
add_action( 'admin_menu', 'wpplugin_settings_pages' );


function wpplugin_settings_page_markup()
{
  // Double check user capabilities
  if ( !current_user_can('manage_options') ) {
      return;
  }
  ?>
  <div class="wrap">
    <h1><?php esc_html_e( get_admin_page_title() ); ?></h1>
    <p><?php esc_html_e( 'Some content.', 'wpplugin' ); ?></p>
  </div>
  <?php
}

function wpplugin_settings_subpage_markup()
{
  // Double check user capabilities
  if ( !current_user_can('manage_options') ) {
      return;
  }
  ?>
  <div class="wrap">
    <h1><?php esc_html_e( get_admin_page_title() ); ?></h1>
    <p><?php esc_html_e( 'Some content.', 'wpplugin' ); ?></p>
  </div>
  <?php
}

function wpplugin_add_settings_link( $links ) {
    $settings_link = '<a href="admin.php?page=wpplugin">' . __( 'Settings', 'wpplugin' ) . '</a>';
    array_push( $links, $settings_link );
   return $links;
}
$filter_name = "plugin_action_links_" . plugin_basename( __FILE__ );
add_filter( $filter_name, 'wpplugin_add_settings_link' );



function wpplugin_default_sub_pages() {

  add_dashboard_page(
    __( 'Cool Default Sub Page', 'wpplugin' ),
    __( 'Custom Sub Page', 'wpplugin' ),
    'manage_options',
    'wpplugin-subpage',
    'wpplugin_settings_page_markup'
  );

}
add_action( 'admin_menu', 'wpplugin_default_sub_pages' );

?>
