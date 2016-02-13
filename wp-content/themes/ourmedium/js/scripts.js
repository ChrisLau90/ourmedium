(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready


		$('.show-player-btn').click(function(e){
			togglePlayerVisibility(e);
		});

		var togglePlayerVisibility = function(e){
			var $button = $(e.toElement);
			var $mediumAudio = $button.next('.medium-audio');

			if($mediumAudio.hasClass('hidden')){
				$mediumAudio.slideDown();
				$mediumAudio.removeClass('hidden');
				$button.text('Hide player');
			} else {
				$mediumAudio.slideUp();
				$mediumAudio.addClass('hidden');
				$button.text('Show player');
			}
		};
		
	});
	
})(jQuery, this);
