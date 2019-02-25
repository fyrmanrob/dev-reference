jQuery(document).ready( function($) {		

// Animate Elements on Scroll
	$(window).scroll(function(){ 
		
	   $('.section2').each(function(){
		if(isScrolledIntoView($(this))){		
		  $('.bear-img').addClass('animate-img-left-to-right');
		  $('.bear-img').removeClass('hidden');
		}
	  });
		
	   $('.spaceman-img').each(function(){
		   if(isScrolledIntoView($(this))){		
			   $(this).addClass('animate-img-right-to-left');
			   $(this).removeClass('hidden');
		   }
	  });
		
		$('.section2').each(function(){
			if(isScrolledIntoView($(this))){		
		  		$('.section3 h1').addClass('animate-text-right-to-left');
				$('.section3 h1').removeClass('hidden');
			}
	  	});
		
		$('.section4').each(function(){
			if(isScrolledIntoView($(this))){		
		  		$('.section4 h1').addClass('animate-text-left-to-right');
				$('.section4 h1').removeClass('hidden');
			}
	  	});
		
	});

	function isScrolledIntoView(elem){
		var $elem = $(elem);
		var $window = $(window);

		var docViewTop = $window.scrollTop();
		var docViewBottom = docViewTop + $window.height();

		var elemTop = $elem.offset().top;
		var elemBottom = elemTop + $elem.height();

		return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
	}
});


