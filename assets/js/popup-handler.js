/**
 * EWEB CF7 Popup Handler
 * Handles multiple Contact Form 7 popups on the same page
 */
(function($) {
    'use strict';

    // Initialize on document ready
    $(document).ready(function() {
        // Handle popups
        $('.eweb-cf7-popup').each(function() {
            const $popup = $(this);
            const $closeBtn = $popup.find('.eweb-cf7-popup-close');
            const $overlay = $popup.find('.eweb-cf7-popup-overlay');
            const formId = $popup.data('form-id');

            // Close button handler
            $closeBtn.on('click', function() {
                closePopup($popup);
            });

            // Overlay click handler
            $overlay.on('click', function(e) {
                if (e.target === this) {
                    closePopup($popup);
                }
            });

            // Handle form submission
            const $form = $popup.find('form.wpcf7-form');
            $form.on('wpcf7mailsent', function() {
                setTimeout(function() {
                    closePopup($popup);
                    // Reset form after closing
                    setTimeout(function() {
                        if ($form.length) {
                            $form[0].reset();
                        }
                    }, 300);
                }, 1500);
            });
        });

        // Handle triggers
        $('.open-eweb-popup').on('click', function(e) {
            e.preventDefault();
            const formId = $(this).data('form-id');
            const $popup = $('.eweb-cf7-popup[data-form-id="' + formId + '"]');
            
            if ($popup.length) {
                openPopup($popup);
            }
        });

        // ESC key handler
        $(document).on('keydown', function(e) {
            if (e.key === 'Escape') {
                const $activePopup = $('.eweb-cf7-popup.is-active');
                if ($activePopup.length) {
                    closePopup($activePopup);
                }
            }
        });
    });

    // Helper functions
    function openPopup($popup) {
        $popup.addClass('is-active').fadeIn(300);
        $('body').css('overflow', 'hidden');
    }

    function closePopup($popup) {
        $popup.removeClass('is-active').fadeOut(300);
        $('body').css('overflow', '');
    }
})(jQuery);

