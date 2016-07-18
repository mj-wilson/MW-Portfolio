$('document').ready(function() {
	
	// Create panel gradient
	var panels = $('.panel');
	var count = panels.length;
	var step = 1/count;

	for(var i = 0; i < count; i++){
    	rgba = 1 - (step * i);
        $(panels[i]).css('background', 'rgba(255,255,255,' + rgba + ')');
	}

	

	// Add header class on scrolling
	$(document).scroll(function(){  
		var sticky_nav = $('header');  
		if ( $(window).scrollTop() > sticky_nav.height() ) {
			sticky_nav.addClass('scrolling');
		} else {
			sticky_nav.removeClass('scrolling');
		} 
	});
		  
	// scroll to sections	
	$('#nav a').click(function( event ) {	  
	  event.preventDefault();
	  anchorid = $(this).attr("href").match(/.*(#.*)/)[1];	  
	  $('body,html').animate({
	    'scrollTop': $(anchorid).offset().top
		}, 1000);
		window.location.hash = anchorid;	
	});
	$('#header-left a').click(function( event ) {	  
	  event.preventDefault();
	  $('body,html').animate({
	    'scrollTop': 0
		}, 1000);
		window.location.hash = '';	
	});

		
	//highlight current nav item
	var sections = $('.scrollto');
	var nav = $('#nav');
	 
	$(window).bind("load scroll resize",function(e){	 
	  var cur_pos = $(this).scrollTop();
	  var bottom = $(window).scrollTop() + $(window).height();
	  sections.each(function() {
	    var top = $(this).offset().top;	 
	    if (cur_pos >= top) {
	      nav.find('a').removeClass('active');
	      nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
	    } 
	  });
	
		// Setup panel animations	
    	$(".panel").each(function(i){            
        	if($(this).offset().top < bottom - 50) {
        		$(this).addClass("animate_active");
        	} else {
        		$(this).removeClass("animate_active");
        	}
   	 	});

	});

	//toggle mobile nav
	$('.nav-toggle').click(function() {
	    $(this).next('#nav').toggleClass('open');
	    $(this).toggleClass('open');
	});    
	

});







