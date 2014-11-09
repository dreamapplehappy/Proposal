$(function(){
	$like = parseInt($(".progress-bar").text());
	$like += '%';
	$(".progress-bar").css({"width": $like});
});