<?php
/**
 * Funciones de utilidad para el plugin EWEB CF7 Popup
 *
 * @package    EWEB_CF7_Popup
 * @subpackage EWEB_CF7_Popup/includes
 */

// Si este archivo es llamado directamente, abortar.
if ( ! defined( 'WPINC' ) ) {
    die;
}

/**
 * Verifica si estamos en el editor de Elementor
 *
 * @since  3.4.0
 * @return boolean Verdadero si estamos en el editor de Elementor
 */
function eweb_is_elementor_editor() {
    if ( ! did_action( 'elementor/loaded' ) ) {
        return false;
    }
    
    return \Elementor\Plugin::$instance->editor->is_edit_mode();
}

/**
 * Verifica si Contact Form 7 está activo
 *
 * @since  3.4.0
 * @return boolean Verdadero si CF7 está activo
 */
function eweb_is_cf7_active() {
    return class_exists( 'WPCF7' );
}

/**
 * Muestra un mensaje de error de admin
 *
 * @since  3.4.0
 * @param  string $message    El mensaje a mostrar
 * @return void
 */
function eweb_admin_notice_error( $message ) {
    $class = 'notice notice-error';
    printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) );
}