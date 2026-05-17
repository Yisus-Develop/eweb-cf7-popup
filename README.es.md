# EWEB - CF7 Popup

## Resumen

`EWEB - CF7 Popup` muestra formularios de Contact Form 7 dentro de un modal popup, con soporte para multiples formularios en la misma pagina y compatibilidad con Elementor.

## Funcionalidad principal

- Shortcode base: `[eweb_popup_form form_id="123"]`.
- Disparador externo con clase `open-eweb-popup` y atributo `data-form-id`.
- Opcion para generar boton automatico desde shortcode.
- Soporte para multiples popups en una sola pagina.
- Carga condicional de CSS/JS solo cuando el shortcode esta presente.
- Deteccion de editor Elementor para evitar conflictos durante edicion.

## Requisitos tecnicos

- WordPress `6.0+`
- PHP `8.1+`
- Contact Form 7 activo
- Text Domain: `eweb-cf7-popup`

## Estructura

- `eweb-cf7-popup.php`: bootstrap y metadata del plugin.
- `includes/class-eweb-cf7-popup.php`: logica principal del popup.
- `includes/eweb-cf7-popup-functions.php`: funciones auxiliares (dependencias, avisos, utilidades).
- `includes/eweb-cf7-popup-constants.php`: constantes internas.
- `templates/popup-template.php`: plantilla del modal.
- `assets/css` y `assets/js`: estilos y scripts del frontend.

## Instalacion

1. Subir la carpeta del plugin a `/wp-content/plugins/`.
2. Activar el plugin en WordPress.
3. Verificar que Contact Form 7 este activo.
4. Insertar shortcode y configurar triggers.

## Flujo de versionado

- La version del header del plugin debe coincidir con `Stable tag` en `readme.txt`.
- Las mejoras de metadata y documentacion deben subir version patch.

## Estado de normalizacion AI-Vault

- Header alineado con baseline EWEB.
- Version y stable tag alineados en `3.4.2`.
- Preparado para validaciones automáticas via GitHub Actions.
