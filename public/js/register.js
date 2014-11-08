$(function(){
	var inner = 0;
	var percent = 0;
	var outer = $("form").find(".input-group").find("input.form-control").length;
	$("input.form-control").keydown(function(){
		change();
	});
	function change(){
		inner = 0;
		for(i = 0; i < outer; i++){
			inner += $("form").find(".input-group").eq(i).find("input.form-control").val() == "" ? 0: 1;
		}
		percent = inner * 100 / outer + "%";
		$(".inner").animate({"width": percent},360);
	}
});