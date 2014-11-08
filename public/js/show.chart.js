$(function(){
	$like = parseFloat($(".progress-bar").text());
	var canvas = document.getElementById("show-chart");
	var context = canvas.getContext("2d");
	context.beginPath();
	context.strokeStyle="#F00";
	context.fillStyle="#F00";
	context.lineWidth=1;
	context.arc(100, 100, 99, 0, 2*Math.PI*$like/100, false);
	context.lineTo(100,100);
	context.lineTo(200,100);
	context.stroke();
	context.fill();
	context.closePath();

	context.beginPath();
	context.strokeStyle="#0F0";
	context.lineWidth=5;
	context.arc(100, 100, 99, 0, 2*Math.PI, false);
	context.stroke();

	$(window).resize(function(){
		$canvasOffset = $("#show-chart").offset();
		$divOffset = $(".explain").offset();
		$divOffset.left = $canvasOffset.left + 200;
		$(".explain").css({"marginLeft": $divOffset.left});
	});
});