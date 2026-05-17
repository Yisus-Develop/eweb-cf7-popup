<?php
/**
 * Template para el popup
 *
 * @package    EWEB_CF7_Popup
 * @subpackage EWEB_CF7_Popup/templates
 */

// Si este archivo es llamado directamente, abortar.
if ( ! defined( 'WPINC' ) ) {
    die;
}
?>
<div id="<?php echo esc_attr( $atts['popup_id'] ); ?>" class="eweb-popup-overlay">
    <div class="eweb-popup-modal">
        <button class="eweb-popup-close" aria-label="<?php esc_attr_e( 'Close popup', 'eweb-cf7-popup' ); ?>">&times;</button>
        <div class="eweb-popup-content">
            <div class="eweb-cf7-form-wrapper custom-cf7-form">
                <?php echo do_shortcode( '[contact-form-7 id="' . esc_attr( $atts['form_id'] ) . '"]' ); ?>
            </div>
        </div>
    </div>
</div>