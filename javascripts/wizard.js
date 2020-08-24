jQuery(document).ready(function($) {
	
	var wizard_state = 1;

	jQuery('.wizard__step-item').click(function(){
		jQuery('.wizard__step--'+wizard_state).fadeOut('400', function() {
			wizard_state++;
			jQuery('.wizard__dot--'+wizard_state).addClass('wizard__dot--active');
			jQuery('.wizard__step--'+wizard_state).fadeIn();
		});
		return false;
	});

});