 $(document).ready(function(){

	var $header = $("#header");
	var $backBg = $("#header-back-bg")
	var $middleBg = $("#header-middle-bg")
	var $page = $('#page-container');

	backSpeed = 0.5;
	middleSpeed = 0.25;
	scrollTop = 0;
	backBgPos = 0;
	middleBgPos = 0;

	$(document).scroll(function(e){

		newScrollTop = $(this).scrollTop()
	
    // Fix the header and adjust the top margin for
    // the page as we are removing the header from 
    // the flow
		if(newScrollTop > 280){
			$page.css({"margin-top":"476px"});
			$header.addClass("fixed");
    }else{
    	$page.css({"margin-top":"0px"});
    	$header.removeClass("fixed");
    }
    
    // Parallax effect of the middle and back 
    // header backgrounds
    d = newScrollTop - scrollTop;
    scrollTop = newScrollTop;
    backBgPos = backBgPos + d*backSpeed;
    middleBgPos = middleBgPos + d*middleSpeed;
    $backBg.css({
    		"background-position": "0px " + backBgPos + "px"
    });
    $middleBg.css({
    		"background-position": "center " + middleBgPos + "px"
    });
  });
 });
  
		