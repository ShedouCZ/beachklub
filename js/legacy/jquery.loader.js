jQuery(window).bind('load', function() {
	jQuery('.foreground').toggle('slow');
});



jQuery(function(){
	jQuery('.isotope-element .views-field-field-portfolio-image a').hover(function(){
		jQuery(this).find('img').stop().animate({opacity:'.4'})
	},

	function(){
		jQuery(this).find('img').stop().animate({opacity:'1'})
	})
});


(function($) {
	jQuery(document).ready(function($) {
		if(jQuery(".portfolio-grid").length){
			var $container = jQuery('#isotope-container'),
				filters = {},
				items_count = jQuery(".isotope-element").size();
			
			$container.imagesLoaded( function(){	
				setColumnWidth();
				$container.isotope({
					itemSelector : '.isotope-element',
					resizable : false,
					transformsEnabled : true,
					layoutMode: 'fitRows'
				});		
			});
			
			function getNumColumns(){
				
				var $folioWrapper = jQuery('#isotope-container').data('cols');
				
				if($folioWrapper == '1col') {
					var winWidth = jQuery("#isotope-container").width();		
					var column = 1;		
					return column;
				}
				
				if($folioWrapper == '2cols') {
					var winWidth = jQuery("#isotope-container").width();		
					var column = 2;		
					if (winWidth<380) column = 1;
					return column;
				}
				
				else if ($folioWrapper == '3cols') {
					var winWidth = jQuery("#isotope-container").width();		
					var column = 3;		
					if (winWidth<380) column = 1;
					else if(winWidth>=380 && winWidth<788)  column = 2;
					else if(winWidth>=788 && winWidth<940)  column = 3;
					else if(winWidth>=940) column = 3;
					return column;
				}
				
				else if ($folioWrapper == '4cols') {
					var winWidth = jQuery("#isotope-container").width();		
					var column = 4;		
					if (winWidth<380) column = 1;
					else if(winWidth>=380 && winWidth<788)  column = 2;
					else if(winWidth>=788 && winWidth<940)  column = 3;
					else if(winWidth>=940) column = 4;		
					return column;
				}
			}
			
			function setColumnWidth(){
				var columns = getNumColumns();		
			
				var containerWidth = jQuery("#isotope-container").width();		
				var postWidth = containerWidth/columns;
				postWidth = Math.floor(postWidth);
		 		
				jQuery(".isotope-element").each(function(index){
					jQuery(this).css({"width":postWidth+"px"});				
				});
			}
				
			function arrange(){
				setColumnWidth();		
				$container.isotope('reLayout');	
			}
				
			jQuery(window).on("debouncedresize", function( event ) {	
				arrange();		
			});
		
		
		
 		};
	});
})(jQuery)
