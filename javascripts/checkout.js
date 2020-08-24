jQuery(document).ready(function($) {

	jQuery('.checkout__section-title').click(function(event) {
		if ( jQuery(this).parent('.checkout__section').hasClass('checkout__section--active') )
		{
			jQuery(this).parent('.checkout__section').removeClass('checkout__section--active');
		}
		else
		{
			jQuery(this).parent('.checkout__section').addClass('checkout__section--active');
		}
		return false;
	});

	jQuery('.shippings__item-heading').click(function(event) {
		if ( ! jQuery(this).parent('.shippings__item').hasClass('shippings__item--active') )
		{
			jQuery('.shippings__item').removeClass('shippings__item--active');
			jQuery(this).parent('.shippings__item').addClass('shippings__item--active');
		}
		return false;
	});

});