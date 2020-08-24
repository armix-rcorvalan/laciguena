jQuery(document).ready(function($) {
		// Open
	jQuery('.products-list__filters-bar-open').click(function(event) {
		jQuery('.filters-float').addClass('filters-float--open');
		jQuery('body').addClass('disabled');
		return false;
	});

	// Close
	jQuery('.filters-float__close').click(function(event) {
		jQuery('.filters-float').removeClass('filters-float--open');
		jQuery('body').removeClass('disabled');
		return false;
	});
});