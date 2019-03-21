jQuery(function () {

    // owl carousel
    jQuery('.owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        navText: ['',''],
        autoplay: true,
        slideSpeed : 2000,
        autoplaySpeed: 2000,
        animateOut: 'fadeOut'
    });

    // Show tel number element on click
    jQuery('.js-show-tel').on('click', function () {
        var element = jQuery(this),
            rel = element.attr('rel');

        element.hide();
        jQuery('#' + rel).removeClass('d-none');

        // Track phone clicks
        trackEvent('Click', {
            category: 'Phone',
            label: window.location.href,
            value: 3000
        });

        element.removeClass('.js-show-tel');
    });

    // Show tel number element on click
    jQuery('.js-track-tel-click').on('click', function () {
        // Track phone clicks
        trackEvent('Click', {
            category: 'Phone',
            label: window.location.href,
            value: 3000
        });
    });

    // Scrolling anchors
    jQuery('.scrollable-anchor').on('click', function (e) {
        e.preventDefault();

        jQuery('html,body').animate({
            scrollTop: jQuery(this.hash).offset().top
        }, 1000);
    });
});

var trackEvent = function (name, options) {
    trackGA(name, options);
    trackPixel(name, options);
};

var trackGA = function (name, options) {
    if (typeof gtag !== 'undefined') {
        gtag('event', name, {
            'event_category': options.category,
            'event_label': options.label,
            'value': options.value || 0
        });
    }
};

var trackPixel = function (name, options) {
    if (typeof gtag !== 'undefined') {
        fbq('track', 'Lead', {
            'event_category': options.category,
            'event_action': name,
            'value': options.value || 0,
            'currency': 'CAD'
        });
    }
};