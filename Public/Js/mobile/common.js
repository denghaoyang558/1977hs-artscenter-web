$(function(){
	var deviceHeight = $(window).height();
	$("#banner,#content").css("min-height",deviceHeight)
})
$(window).on("resize",function(){
	var deviceHeight = $(window).height();
	$("#banner,#content").css("min-height",deviceHeight)
})