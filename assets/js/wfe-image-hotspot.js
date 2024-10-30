(function ($) {
    // Image Hotspots
    var ImageHotspotHandler = function ($scope, $) {
        $('.wfe-hot-spot-tooptip').each(function () {
            var $position_local         = $(this).data('tooltip-position-local'),
                $position_global        = $(this).data('tooltip-position-global'),
                $width                  = $(this).data('tooltip-width'),
                $size                   = $(this).data('tooltip-size'),
                $animation_in           = $(this).data('tooltip-animation-in'),
                $animation_out          = $(this).data('tooltip-animation-out'),
                $background             = $(this).data('tooltip-background'),
                $text_color             = $(this).data('tooltip-text-color'),
                $arrow                  = ($(this).data('wfe-tooltip-arrow') === 'yes') ? true : false,
                $position               = $position_local;

            if (typeof $position_local === 'undefined' || $position_local === 'global') {
                $position = $position_global;
            }
            if (typeof $animation_out === 'undefined' || !$animation_out) {
                $animation_out = $animation_in;
            }

            $(this).tipso({
                speed:                  200,
                delay:                  200,
                width:                  $width,
                background:             $background,
                color:                  $text_color,
                size:                   $size,
                position:               $position,
                animationIn:            $animation_in,
                animationOut:           $animation_out,
                showArrow:              $arrow
            });
        });
    };


    $(window).on('elementor/frontend/init', function () {
        elementorFrontend.hooks.addAction('frontend/element_ready/wfe_image_hotspot.default', ImageHotspotHandler);
    });
}(jQuery));