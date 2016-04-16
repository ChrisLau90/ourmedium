(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready
        $(document).on('click', '.menu-btn', function( event ) {
            $('.nav').show();
        });
        
		/*$(document).on('click', '.medium-change', function( event ) {
			event.preventDefault();
			$.ajax({
				url: html5blankscripts.ajaxurl,
				type: 'post',
				data: {
					action: 'ajax_pagination'
				},
				success: function( result ) {
					alert( result );
				}
			})
		})*/
		
	});
	
})(jQuery, this);
