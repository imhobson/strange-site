 $(document).ready(function(){

	var $header = $("#header");
	var $backBg = $("#header-back-bg");
	var $middleBg = $("#header-middle-bg");
	var $godzilla = $("#header-godzilla");
	var $page = $('#page-container');

	backSpeed = 0.5;
	middleSpeed = 0.3;
	godzillaSpeed = 0.2;
	scrollTop = 0;
	backBgPos = 0;
	middleBgPos = 0;
	godzillaPos = 0;

	$(document).scroll(function(e){

		newScrollTop = $(this).scrollTop()
	
    // Fix the header and adjust the top margin for
    // the page when removing header from flow
		if(newScrollTop > 280){
			$page.addClass("fixed-header");
			$header.addClass("fixed");
    }else{
    	$page.removeClass("fixed-header");
    	$header.removeClass("fixed");
    }
    
    // Parallax effect for the middle and back 
    // header backgrounds & godzilla
    
    delta = newScrollTop - scrollTop;
    scrollTop = newScrollTop;
    backBgPos = backBgPos + delta*backSpeed;
    middleBgPos = middleBgPos + delta*middleSpeed;
    godzillaPos = godzillaPos + delta*godzillaSpeed;
    $backBg.css({
    		"background-position": "0px "+backBgPos+"px"
    });
    $middleBg.css({
    		"background-position": "center "+middleBgPos+"px"
    });
    $godzilla.css({
    		"background-position": "0px "+godzillaPos+"px"
    });
  });
 });
  
		