<?php
/**
 * Define constantes globales para el plugin
 *
 * @package    EWEB_CF7_Popup
 * @subpackage EWEB_CF7_Popup/includes
 */

// Si este archivo es llamado directamente, abortar.
if ( ! defined( 'WPINC' ) ) {
    die;
}

// Plugin version
if ( ! defined( 'EWEB_CF7_POPUP_VERSION' ) ) {
    define( 'EWEB_CF7_POPUP_VERSION', '3.4.0' );
}

// Plugin Folder Path
if ( ! defined( 'EWEB_CF7_POPUP_PATH' ) ) {
    define( 'EWEB_CF7_POPUP_PATH', plugin_dir_path( EWEB_CF7_POPUP_FILE ) );
}

// Plugin Folder URL
if ( ! defined( 'EWEB_CF7_POPUP_URL' ) ) {
    define( 'EWEB_CF7_POPUP_URL', plugin_dir_url( EWEB_CF7_POPUP_FILE ) );
}

// Plugin Root File
if ( ! defined( 'EWEB_CF7_POPUP_FILE' ) ) {
    define( 'EWEB_CF7_POPUP_FILE', __FILE__ );
}

// Plugin Text Domain
if ( ! defined( 'EWEB_CF7_POPUP_DOMAIN' ) ) {
    define( 'EWEB_CF7_POPUP_DOMAIN', 'eweb-cf7-popup' );
}