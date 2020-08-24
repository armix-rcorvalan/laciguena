jQuery(document).ready(function($) {
	
	// Open
	jQuery('.header__menu-icon').click(function(event) {
		jQuery('.menu-float').addClass('menu-float--open');
		jQuery('body').addClass('disabled');
		return false;
	});

	// Close
	jQuery('.menu-float__close').click(function(event) {
		jQuery('.menu-float').removeClass('menu-float--open');
		jQuery('body').removeClass('disabled');
		return false;
	});

	// Default
	jQuery('.menu-main__item--show-default').addClass('menu-main__item--open');
	jQuery('.menu-main__item--show-default > .menu-main__list').show();

	// Submenu
	jQuery('.menu-float .menu-main__more').click(function(event) {
		if ( jQuery(this).closest('.menu-main__item').hasClass('menu-main__item--open') ) {
			jQuery(this).closest('.menu-main__item').removeClass('menu-main__item--open');
			jQuery(this).siblings('.menu-main__list').slideUp(200);
		} else {
			jQuery(this).closest('.menu-main__item').addClass('menu-main__item--open');
			jQuery(this).siblings('.menu-main__list').slideDown(200);
		}
	});

});