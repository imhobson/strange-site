 $(document).ready(function(){

	var $header = $("#header");
	var $backBg = $("#header-back-bg")
	var $middleBg = $("#header-middle-bg")
	var $page = $('#page-container');

	backSpeed = 0.6
	middleSpeed = 0.8
	scrollTop = 0
	backBgPos = 0
	middleBgPoss = 198

	$(document).scroll(function(e){

		newScrollTop = $(this).scrollTop()
		d = newScrollTop - scrollTop

		if(newScrollTop > 280){
			$page.css({"margin-top":"476px"});
			$header.addClass("fixed");
    }else{
    	$page.css({"margin-top":"0px"});
    	$header.removeClass("fixed");

    	backBgPos = backBgPos + backSpeed/d
    	/*$backBg.css({
    		"background-position": "0px " + backBgPos + "px"
    	});*/
    }
  });
 });
  
		