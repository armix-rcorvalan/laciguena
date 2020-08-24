jQuery(document).ready(function($) {

	// Open
	jQuery('.header__cart-icon').click(function(event) {
		jQuery('.cart').addClass('cart--open');
		jQuery('body').addClass('disabled--cart');
		return false;
	});

	// Close
	jQuery('.cart__close').click(function(event) {
		jQuery('.cart').removeClass('cart--open');
		jQuery('body').removeClass('disabled--cart');
		return false;
	});


});