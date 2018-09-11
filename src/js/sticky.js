/*	$(document).ready(function(){
		$(".menu-icon").on("click", function(){
			$("nav ul").toggleClass("showing");
		});
	});
*/    
	$(window).on("scroll", function(){
		if($(window).scrollTop()) {
			$('nav').addClass('secondary');
			}
				else{
					$('nav').removeClass('secondary');
				}
		});
        

/*
$(window).scroll(function(){
    var top = $(window).scrollTop();
        if(top >= 60){
            $("nav").addClass('secondary');
        }
    else
        if($("nav").hasClass('secondary')){
            $("nav").removeClass('secondary');
        }
    
});
*/