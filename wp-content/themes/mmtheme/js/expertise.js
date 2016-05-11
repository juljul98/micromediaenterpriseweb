// Show when reach the div
$(document).ready(function(){
    $('.expArea .expCont:first').animate({'opacity':'1', left: 0},500);
	$(window).scroll( function(){
		$('.expCont').each( function(i){
			var botObj = $(this).offset().top + $(this).outerHeight();
			var botWin = $(window).scrollTop() + $(window).height();
			if( botWin > (botObj-50)){
				$(this).animate({'opacity':'1', left: 0},500);
			}
		});
	});  
});