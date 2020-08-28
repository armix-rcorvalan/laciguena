jQuery(document).ready(function($) {

	jQuery('.locations-bar__checkbox').prop('checked','');

	jQuery('.locations-bar').click(function(event) {
		if ( jQuery(this).hasClass('locations-bar--open') )
		{
			jQuery(this).removeClass('locations-bar--open');
			jQuery('.locations-bar__checkbox').prop('checked','');
			jQuery('.locations-content').slideUp();
		}
		else
		{
			jQuery(this).addClass('locations-bar--open');
			jQuery('.locations-bar__checkbox').prop('checked','checked');
			jQuery('.locations-content').slideDown();
		}
		return false;
	});

	var map = new google.maps.Map(document.getElementById('locations-map'), {
	  center: {lat: -32.9248529, lng: -68.8457139},
	  zoom: 16
	});


});