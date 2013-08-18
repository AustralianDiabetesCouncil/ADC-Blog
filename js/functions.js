jQuery(document).ready(function() {
	/* New Menu */
	var navToggle = jQuery('.menu'),
		navWrap = jQuery('.main-nav-wrap'),
		header = jQuery('#header'),
		headerWrap = jQuery('.header-wrap'),
		winWidth = jQuery(window).outerWidth(),
		search = jQuery('.search'),
		navToggleWrap = jQuery('.main-nav-toggle');

	navToggle.on('click', function() {
		navWrap.toggleClass('show');
		header.toggleClass('nav-active');
	});

	if ( winWidth <= 680 ) {
		navWrap.after(search);
	} else {
		navToggleWrap.before(search);
	}

	//Make list items in Wootabs clickable
	jQuery('ul[id^="tab-"] > li').click(function() {
		var link = jQuery(this).find("a").attr("href");
		window.location=link; 
	});

	// FitVids - Responsive Videos
	jQuery( '.widget_video, .panel, .video' ).fitVids();
	if ( window.innerWidth < 768 ) {
		jQuery( '.entry' ).fitVids();
	}

	jQuery("#wrapper").fitVids({ 
	 	customSelector: "iframe[src^='http://youtube.com']"
	});

	// Add class to parent menu items with JS until WP does this natively
	jQuery( 'ul.sub-menu, ul.children' ).parent( 'li' ).addClass( 'parent' );

});

jQuery(window).resize(function() {
	/* New Menu */
	var winWidth = jQuery(window).outerWidth(),
		mainNavWrap = jQuery('.main-nav-wrap'),
		header = jQuery('#header'),
		headerWrap = jQuery('.header-wrap'),
		search = jQuery('.search'),
		navToggle = jQuery('.main-nav-toggle');

	if ( winWidth <= 680 ) {
		mainNavWrap.removeClass('show');
		header.removeClass('nav-active');
		mainNavWrap.after(search);
	} else {
		navToggle.before(search);
		mainNavWrap.removeClass('show');
		header.removeClass('nav-active');
	}
});