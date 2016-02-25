jQuery(document).ready(function()
	{
 
            jQuery(".slider_description").mCustomScrollbar({
    theme:"dark"
});
 
 // jQuery(".view_device").hide();
	var slider=jQuery('#slide_show').bxSlider({
  auto: false,
  pause: 4000,
  prevSelector: '#slider-prev',
  nextSelector: '#slider-next',
  nextText: '',
  prevText: '',
    mode:'horizontal',
    pagerCustom: '#bx-pager' ,
		  onSliderLoad: function(){    
        $('.bx-prev').addClass('fa fa-chevron-left');      
        $('.bx-next').addClass('fa fa-chevron-right');   
		}
  });
  
  
  /*** thoughts slideshow ***/
  var slider=jQuery('#slide_show2').bxSlider({
  auto: true,
  pause: 4000,
  pager:false,
  prevSelector: '#slider-prev1',
  nextSelector: '#slider-next1',
  nextText: '',
  prevText: '',
    mode:'horizontal',
  });
  /*** thoughts slideshow ***/
  
  
  jQuery("#bk_nav li a").click(function(event){
					event.preventDefault();			
					var section_link=jQuery(this).attr('href');
					var section_top = jQuery(section_link).offset().top;
					var header_height = jQuery(".bk_header").height();
					
					jQuery( "html, body" ).animate({scrollTop : section_top }, 500);
					
				//	var window_height = jQuery(window).height();					
				//	var new_height = window_height-header_height;
					//jQuery(section_link).css({'height': new_height});
					
					return false;
							
  });
 
  jQuery("#up_control").click(function(){
   jQuery( "html, body" ).animate({scrollTop : 0 }, 500);
  });
 
  jQuery( window ).scroll(function() {
  var scrollY = jQuery(window).scrollTop();
  if(scrollY >0)
   jQuery("#up_control").fadeIn();
   else
    jQuery("#up_control").fadeOut();
   });
		});
		
		
  
