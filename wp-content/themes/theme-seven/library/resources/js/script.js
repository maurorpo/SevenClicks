(function ($, window, document, undefined) {
    'use strict';

    function initReady() {
      $('.open_nav span').on('click', function(){
				$('.main_nav').addClass('.main_navopen')
			});  
    }

    function initLoad() {
			$('.open_nav span').on('click', function(){
				$('.main_nav').addClass('.main_navopen')
			});
    }

    $(document).on('ready', initReady);
    $(window).on('load', initLoad);
})(jQuery, window, document);
