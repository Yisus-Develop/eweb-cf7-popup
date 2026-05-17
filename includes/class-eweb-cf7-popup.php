<?php
/**
 * Clase principal del plugin EWEB CF7 Popup
 *
 * @package    EWEB_CF7_Popup
 * @subpackage EWEB_CF7_Popup/includes
 */

// Si este archivo es llamado directamente, abortar.
if ( ! defined( 'WPINC' ) ) {
    die;
}

/**
 * Clase principal que maneja la funcionalidad del plugin.
 * * @since      3.4.0
 * @package    EWEB_CF7_Popup
 * @subpackage EWEB_CF7_Popup/includes
 * @author     Yisus Develop
 */
class EWEB_CF7_Popup {

    /**
     * La única instancia de esta clase.
     *
     * @since    3.4.0
     * @access   private
     * @var      EWEB_CF7_Popup    $instance    La única instancia de esta clase.
     */
    private static $instance = null;

    /**
     * La versión actual del plugin.
     *
     * @since    3.4.0
     * @access   private
     * @var      string    $version    La versión actual del plugin.
     */
    private $version;

    /**
     * Constructor de la clase.
     *
     * @since    3.4.0
     */
    private function __construct() {
        $this->version = '3.4.0';
        $this->init();
    }

    /**
     * Obtiene la única instancia de esta clase.
     *
     * @since     3.4.0
     * @return    EWEB_CF7_Popup    La única instancia de esta clase.
     */
    public static function get_instance() {
        if ( null === self::$instance ) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Inicializa el plugin.
     *
     * @since    3.4.0
     */
    private function init() {
        // Registrar el shortcode
        add_shortcode( 'eweb_popup_form', array( $this, 'render_popup_shortcode' ) );
    }

    /**
     * Renderiza el shortcode del popup.
     *
     * @since    3.4.0
     * @param    array    $atts    Atributos del shortcode.
     * @return   string            El HTML del popup.
     */
    public function render_popup_shortcode( $atts ) {
        $atts = shortcode_atts( array(
            'form_id'         => '0',
            'generate_button' => 'false',
            'btn_text'        => 'Open Form',
            'btn_class'       => ''
        ), $atts );

        // Validar el form_id
        if ( empty( $atts['form_id'] ) ) {
            return '<p>' . esc_html__( 'Please specify a form ID.', 'eweb-cf7-popup' ) . '</p>';
        }

        // Enqueue assets
        $this->enqueue_assets();

        // Generar ID único para el popup
        $popup_id = 'eweb-popup-' . esc_attr( $atts['form_id'] );

        // Iniciar el almacenamiento en búfer de salida
        ob_start();

        // Si estamos en el editor de Elementor, mostrar placeholder
        if ( $this->is_elementor_editor() ) {
            include EWEB_CF7_POPUP_PATH . 'templates/editor-placeholder.php';
            return ob_get_clean();
        }

        // Generar HTML del popup
        include EWEB_CF7_POPUP_PATH . 'templates/popup-template.php';

        // Generar botón disparador si se solicita
        if ( $atts['generate_button'] === 'true' ) {
            $btn_class = 'open-eweb-popup ' . esc_attr( $atts['btn_class'] );
            printf(
                '<button class="%1$s" data-form-id="%2$s">%3$s</button>',
                esc_attr( $btn_class ),
                esc_attr( $atts['form_id'] ),
                esc_html( $atts['btn_text'] )
            );
        }

        return ob_get_clean();
    }

    /**
     * Encola los estilos y scripts necesarios para el plugin.
     *
     * @since    3.4.0
     */
    private function enqueue_assets() {
        // Encolar estilos y scripts aquí según sea necesario
    }

    /**
     * Verifica si estamos en el editor de Elementor.
     *
     * @since    3.4.0
     * @return   bool    Verdadero si estamos en el editor de Elementor, falso de lo contrario.
     */
    private function is_elementor_editor() {
        // Lógica para determinar si estamos en el editor de Elementor
        return defined( 'ELEMENTOR_VERSION' ) && \Elementor\Plugin::$instance->editor->is_edit_mode();
    }
}