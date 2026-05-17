# EWEB - CF7 Popup

## Overview

`EWEB - CF7 Popup` displays Contact Form 7 forms inside a modal popup with Elementor-friendly behavior and support for multiple forms on the same page.

## What It Does

- Provides shortcode: `[eweb_popup_form form_id="123"]`
- Supports external triggers with `open-eweb-popup` + `data-form-id`
- Supports auto-generated trigger button from shortcode attributes
- Allows multiple independent popups in one page
- Loads frontend assets only when shortcode is present
- Detects Elementor editor context to avoid modal conflicts while editing

## Technical Specs

- WordPress: `6.0+`
- PHP: `8.1+`
- Dependency: Contact Form 7
- Text Domain: `eweb-cf7-popup`
- Current version: `3.4.2`

## File Structure

- `eweb-cf7-popup.php`: plugin bootstrap and metadata
- `includes/class-eweb-cf7-popup.php`: core plugin class
- `includes/eweb-cf7-popup-functions.php`: helper functions and dependency checks
- `includes/eweb-cf7-popup-constants.php`: constants
- `templates/popup-template.php`: popup HTML template
- `assets/css` and `assets/js`: frontend assets

## Usage

Basic usage:

```text
[eweb_popup_form form_id="123"]
```

Custom trigger example:

```html
<button class="open-eweb-popup" data-form-id="123">Open Form</button>
```

Auto-generated trigger:

```text
[eweb_popup_form form_id="123" generate_button="true" btn_text="Contact Us" btn_class="my-button"]
```

## Standardization Status

- Metadata aligned with AI-Vault / EWEB baseline
- Version aligned between plugin header and `readme.txt` stable tag
- Spanish and English documentation included
- GitHub Actions workflow added for syntax + PHPCS checks
