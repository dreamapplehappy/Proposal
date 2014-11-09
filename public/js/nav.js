$(function(){
	$(".navbar").headroom();
	/*{
		"tolerance": 10,
		"offset": 200,
		"classes": {
			"initial": "animated",
			"pinned": "slideDown",
			"unpinned": "slideUp"
		}
	}*/
	//alert($("#show_time").width());
	$canvas = $("canvas");
	$(".navbar").click(function(){
		$("canvas").remove();
	});
	$("#show_time").click(function(){
		$(this).append($canvas);
	})
});