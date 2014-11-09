$(function(){
	$(".form-control").click(function(){
		$(this).parent(".form-group").children(".span").show();
	});
	$("span.span").click(function(){
		$(this).hide();
	});
});