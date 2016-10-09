 $(window).load(function() { // makes sure the whole site is loaded
        // The slider being synced must be initialized first
      
      $('#preloader').fadeOut('slow');
    $('body').css({'overflow':'visible'});
      
       
    });





/*************
* = Parallax *
*************/

/***************
* = Menu hover *
***************/


/******************
* = Gallery hover *
******************/
jQuery(document).ready(function ($) {
	//Cache some variables
	var images = $('#portafolio a');
	
	images.hover(
		function(e) {
			var asta = $(this).find('img');
			$('#portafolio img').not( asta ).stop(false, false).animate(
				{
					opacity: .5
				},
				'fast',
				'linear'
			);
			var zoom = $('<div class="zoom"></div>');
			if ( $(this).hasClass('video') ) {
				zoom.addClass('video');
			}
			$(this).prepend(zoom);
		},
		function(e) {
			$('#portafolio img').stop(false, false).animate(
				{
					opacity: 1
				},
				'fast',
				'linear'
			);
			$('.zoom').remove();
		}
	);
});

/******************
* = Arrows click  *
******************/
  

$(function(){
       $('.navbar-collapse a').click(function(){
        $(".navbar-collapse").collapse('hide');
    });


// ------- WOW ANIMATED ------ //
 wow = new WOW(
  {
    mobile: true
  });
  wow.init();
    
    function initParallax() {
   /* $('#plans').parallax("100%", 0.3);*/
         $('#home').parallax("100%", 0.3);
 
  }
  initParallax();
    
    });