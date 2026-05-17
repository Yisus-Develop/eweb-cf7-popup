=== EWEB - CF7 Popup ===
Contributors: Yisus Develop
Tags: contact form 7, cf7, popup, modal, form, eweb, elementor
Requires at least: 6.0
Requires PHP: 8.1
Tested up to: 6.4
Stable tag: 3.4.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A simple and efficient plugin to display Contact Form 7 forms in a modal popup, with full Elementor compatibility.

== Description ==

This plugin provides a lightweight and professional solution to display Contact Form 7 forms in modal popups. Built with modern WordPress standards and optimized for Elementor compatibility, it supports multiple popups on the same page and offers flexible implementation options.

= Multiple Forms Support =
You can have multiple Contact Form 7 forms in popups on the same page. Each popup is uniquely identified and can be triggered independently.

= Usage Examples =

**Basic Usage (Single Form):**
```
[eweb_popup_form form_id="123"]
<button class="open-eweb-popup">Open Contact Form</button>
```

**Multiple Forms on Same Page:**
```
[eweb_popup_form form_id="123"]
[eweb_popup_form form_id="456"]

<button class="open-eweb-popup" data-popup-id="eweb-popup-1">Open Support Form</button>
<button class="open-eweb-popup" data-popup-id="eweb-popup-2">Open Contact Form</button>
```

**Auto-Generated Button:**
```
[eweb_popup_form form_id="123" generate_button="true" btn_text="Contact Us"]
```

**Key Features:**

*   Support for multiple popups on the same page
*   Elementor-compatible popup system with smart editor detection
*   Display any CF7 form in a responsive modal popup
*   Two implementation methods (auto-generated button or custom trigger)
*   Conditional asset loading - resources only load when needed
*   Professional OOP architecture following WordPress standards
*   Clean, modern, and responsive design
*   Smart integration with page builders and themes
*   Performance-optimized with minimal footprint

== Usage ==

The plugin offers two ways to implement popups:

**1. Custom Trigger Method (Recommended for multiple popups):**
```
[eweb_popup_form form_id="123"]
```
Then add these attributes to any element to trigger the popup:
- class="open-eweb-popup"
- data-form-id="123"

Example with custom button:
```html
<button class="open-eweb-popup" data-form-id="123">Open Form</button>
```

**2. Auto-Generated Button Method:**
```
[eweb_popup_form form_id="123" generate_button="true" btn_text="Contact Us" btn_class="my-button"]
```

**Multiple Popups Example:**
```html
<!-- First Form -->
[eweb_popup_form form_id="123"]
<button class="open-eweb-popup" data-form-id="123">Open Support Form</button>

<!-- Second Form -->
[eweb_popup_form form_id="456"]
<button class="open-eweb-popup" data-form-id="456">Open Contact Form</button>
```

**Available Shortcode Parameters:**
* form_id (required): The Contact Form 7 form ID
* generate_button (optional): Set to "true" to auto-generate a button
* btn_text (optional): Button text when using generate_button
* btn_class (optional): CSS classes for the generated button

**Customization via CSS:**
```css
.eweb-cf7-popup {} /* Popup container */
.eweb-cf7-popup-overlay {} /* Overlay background */
.eweb-cf7-popup-content {} /* Popup content wrapper */
.eweb-cf7-popup-close {} /* Close button */
```

== Installation ==

1. Install and activate the plugin through the WordPress plugins screen.
2. Ensure Contact Form 7 is installed and activated.
3. Use the shortcode in two ways:

   **Basic Usage (External Trigger):**
   ```
   [eweb_popup_form form_id="123"]
   ```
   Then add class `open-eweb-popup` to any element to trigger the popup.

   **Auto-Generated Button:**
   ```
   [eweb_popup_form form_id="123" generate_button="true" btn_text="Contact Us"]
   ```

4. Customize button appearance with `btn_class` parameter:
   ```
   [eweb_popup_form form_id="123" generate_button="true" btn_class="my-custom-button"]
   ```

**For Elementor Users:**
- The popup automatically detects Elementor editor and shows a placeholder
- Add the class `open-eweb-popup` through Elementor's Advanced tab
- Compatible with all Elementor elements and widgets

== Changelog ==

= 3.4.2 =
* Code cleanup and optimization:
  - Removed unnecessary popup title functionality
  - Maintained core plugin functionality
  - Cleaner and more efficient codebase
* Standards compliance:
  - Following WordPress coding standards
  - Improved code documentation
  - Standardized function naming

= 3.4.1 =
* Complete code reorganization following WordPress standards:
  - Implemented Singleton pattern for better management
  - Separated logic into specific files (main class, functions, constants)
  - Enhanced file structure and folder organization
  - Added proper dependency checks (CF7)
  - Implemented professional OOP architecture
* Documentation improvements:
  - Added inline documentation
  - Updated function descriptions
  - Improved code readability

= 3.4.0 =
* Mejorada la compatibilidad con el editor de Elementor:
  - Añadido placeholder visual en el editor en lugar del popup funcional
  - Agregada detección segura del modo editor de Elementor
  - El popup ya no interfiere con la edición en Elementor
  - Muestra un preview amigable con el ID del formulario en el editor
* Añadida función `eweb_is_elementor_editor()` para verificación segura
* Actualizada documentación con notas sobre compatibilidad con Elementor

= 3.3.0 =
* Updated popup design based on visual analysis: reduced overlay opacity and enhanced modal box-shadow for improved visual appearance.
* Simplified two-column layout implementation to work with native CF7 structure using CSS grid.
* Removed unnecessary JavaScript restructure functionality for cleaner code.
* Added form title parameter to shortcode with default "Contacte-nos" value.
* Added styled title display in popup modal above the form.
* Updated readme.txt documentation to include new form_title parameter usage.

= 3.2.0 =
* Added form title parameter to shortcode with default "Contacte-nos" value.
* Added styled title display in popup modal above the form.
* Updated readme.txt documentation to include new form_title parameter usage.

= 3.1.0 =
* Redesigned CSS to responsive two-column layout for form fields as per design requirements.
* Fixed CSS positioning conflicts with Elementor by teleporting the popup to the body tag via JavaScript.
* Added smooth fade in/out animations for better UX.
* Implemented conditional logic support for "Outro" option with slide down/up effects.
* Fixed close button positioning and added responsive styles for mobile devices.
* Added escape key closing functionality.

= 3.0.0 =
* Complete refactor to meet EWEB development standards.
* Implemented conditional asset loading (JS/CSS only load when shortcode is present).
* Changed all prefixes and names to `eweb_` for brand consistency.
* Internationalized all strings and prepared for translation.

= 2.0.0 =
*   Refactored plugin to meet professional WordPress standards.
*   Added `sppin_` prefix to all functions.
*   Internationalized all strings and set up a text domain.
*   Corrected a PHP activation error caused by leading whitespace.

= 1.0.0 =
*   Initial release.
