jQuery(document).ready( function($) {
	 
// Place an image in front of Site Title
	// Had to prepend this to #main because the clip path was cutting out the profile pic. 
	$("<img class='profile-pic' src='http://css-animations.fyrmanrob.net/wp-content/uploads/Profile-Pic1-e1550322984494.jpg'>").prependTo("#main");

// Wrap the profile img in a <div> to get transforms to work
	$( '.profile-pic' ).wrap( "<div class='profile-photo'></div>" );
	$( '.profile-photo' ).wrap( "<div class='profile-photo-container'></div>" );
	
// Need to wrap a <div> around the clip path in order for box shadow to work	
		$( '.site-header' ).wrap( "<div class='clip-path-box-shadow'></div>" );
	
// Rotate Profile Pic on Load
		$('profile-photo').addClass('spinY');
	
// Get Default Google Fonts for entire site...alter <link> in header to add the wanted fonts
		// Choose fonts from Google, then replace the default Google Fonts <link> with the one Google produces 
 			$( 'link[href="//fonts.googleapis.com"]' ).replaceWith( '<link href="//fonts.googleapis.com/css?family=Exo|Gloria+Hallelujah|Trade+Winds" rel="stylesheet">' );
		

	
}); // document ready
