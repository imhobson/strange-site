 $(document).ready(function(){

	var $header = $("#header");
	var $page = $('#page-container');

	$(document).scroll(function(e){

		if($(this).scrollTop() > 280){
			$page.css({"margin-top":"476px"});
			$header.addClass("fixed");
    }else{
    	$page.css({"margin-top":"0px"});
    	$header.removeClass("fixed");
    }
  });
 });
  
		