$(document).ready(function(){
	var heights = $(".mvpTxt").map(function ()						 {
		return $(this).height();
	}).get(),
    maxHeight = Math.max.apply(null, heights);
	$('.mvpTxt').css('min-height', maxHeight+15);
});