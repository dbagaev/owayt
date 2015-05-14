jQuery(document).ready(function( $ ){
	// Style form controls
	$( type="select" ).addClass( 'form-control input-sm' );
	$( 'input#submit' ).addClass( 'btn btn-default' );
	// Tables
	$( 'table' ).addClass( 'table' );
	
	$('#nav-below.post-navigation ul').on('mouseenter click', 'li.previous, li.next', function(e) {
		var li = $(e.target);
		if($(e.target).get(0).nodeName != 'LI')
			li = $(e.target).parents('li');
		e.stopPropagation();
		$(e.target).animate({
			opacity: 1,
			width: 32 + $(e.target).children('a').width(),
		}, 200, function() {
			li.children('a').css('visibility', 'visible');
			li.width(32 + $(e.target).children('a').width());
		});		
	});
	
	$('#nav-below.post-navigation ul').on('mouseleave', 'li.previous, li.next', function(e) {
		var li = $(e.target); 
		if(li.get(0).nodeName != 'LI')
			li = $(e.target).parents('li'); 
		li.stop();
		li.animate({
			opacity: 0.2,
			width: 32,
		}, 200, function() {
			li.children('a').css('visibility', 'hidden');
		});
		e.stopPropagation();
	});
	
	// Check if we need to animate top navigation menu
	$top_menu_bg = $('.top-navigation-background');
	if($top_menu_bg.size() == 1)
	{
		var $top_menu_bg_visible = false;
		var $scroll_height = $('.entry-header .wp-post-image').height() - $top_menu_bg.height();
		if($scroll_height > 300) 
			$scroll_height = $scroll_height- 300;
		else
			$scroll_height = 1;
		
		$(window).scroll(function (event) {
			if($(window).scrollTop() < $scroll_height)   // Scrolling is at the top of the page
		    {
		    	if($top_menu_bg_visible)     // Hide background if it is visible
		    	{
		    		$top_menu_bg.stop();
		    		$top_menu_bg_visible = false;		    		
		    		$top_menu_bg.animate({
		    			opacity: 0,
		    		}, 300);
		    	}
		    }
		    
		    else
		    {
		    	if(!$top_menu_bg_visible)
		    	{
		    		$top_menu_bg.stop();
		    		$top_menu_bg_visible = true;
		    		$top_menu_bg.animate({
		    			opacity: 1,
		    		}, 300);
		    	}
		    }

		});

	}
	
});
