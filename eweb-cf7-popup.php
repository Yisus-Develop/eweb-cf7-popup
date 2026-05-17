<?php
/**
 * Plugin Name:       EWEB - CF7 Popup
 * Plugin URI:        https://enlaweb.co/
 * Description:       A simple plugin to display a Contact Form 7 form in a modal popup. Provides a shortcode that can either generate a trigger button or allow an external button to be used.
 * Version:           3.4.2
 * Requires at least: 6.0
 * Requires PHP:      8.1
 * Author:            Yisus Develop
 * Author URI:        https://github.com/Yisus-Develop
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       eweb-cf7-popup
 * Domain Path:       /languages
 */

// Si este archivo es llamado directamente, abortar.
if ( ! defined( 'WPINC' ) ) {
    die;
}

// Define EWEB_CF7_POPUP_FILE
if ( ! defined( 'EWEB_CF7_POPUP_FILE' ) ) {
    define( 'EWEB_CF7_POPUP_FILE', __FILE__ );
}

// Cargar constantes
require_once plugin_dir_path( __FILE__ ) . 'includes/eweb-cf7-popup-constants.php';

// Cargar funciones de utilidad
require_once EWEB_CF7_POPUP_PATH . 'includes/eweb-cf7-popup-functions.php';

// Cargar la clase principal
require_once EWEB_CF7_POPUP_PATH . 'includes/class-eweb-cf7-popup.php';

/**
 * Comienza la ejecución del plugin.
 *
 * @since    3.4.0
 */
function run_eweb_cf7_popup() {
    // Verificar si Contact Form 7 está activo
    if ( ! eweb_is_cf7_active() ) {
        add_action( 'admin_notices', function() {
            eweb_admin_notice_error( 
                __( 'EWEB CF7 Popup requires Contact Form 7 to be installed and activated.', 'eweb-cf7-popup' )
            );
        });
        return;
    }

    // Cargar el plugin
    EWEB_CF7_Popup::get_instance();
}

// Cargar el plugin después de que todos los plugins estén cargados
add_action( 'plugins_loaded', 'run_eweb_cf7_popup' );
