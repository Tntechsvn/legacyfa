
//Global var to avoid any conflicts
var CRUMINA = {};

(function ($) {

	// USE STRICT
	"use strict";

	//----------------------------------------------------/
	// Predefined Variables
	//----------------------------------------------------/
	var $window = $(window),
		$document = $(document),
		$body = $('body'),
        $sidebar = $('.fixed-sidebar'),
		$preloader = $('#hellopreloader');

	/* -----------------------
	 * Preloader
	 * --------------------- */



	/*
        jQuery('.back-to-top').on('click', function () {
            $('html,body').animate({
                scrollTop: 0
            }, 1200);
            return false;
        });
*/

    /* -----------------------
    * Input Number Quantity
   	* --------------------- 

	$(document).on("click",".quantity-plus",function(){
		var val = parseInt($(this).prev('input').val());
		$(this).prev('input').val(val + 1).change();
		return false;
	});

	$(document).on("click",".quantity-minus",function(){
		var val = parseInt($(this).next('input').val());
		if (val !== 1) {
			$(this).next('input').val(val - 1).change();
		}
		return false;
	});
	 */





	// Toggle aside panels
	$(".js-sidebar-open").on('click', function () {
		var mobileWidthApp = $('body').outerWidth();
		/*
		if(mobileWidthApp <= 560) {
			$(this).closest('body').find('.popup-chat-responsive').removeClass('open-chat');
		}
		*/

        $(this).toggleClass('active');
        $(this).closest($sidebar).toggleClass('open');
        return false;
    });



})(jQuery);