$(document).ready(function(){
	$(".record .about").toggle(
		function(){
			var el=$("div",this);
			var curheight=el.height();
			var autoheight=el.css("height","auto").height();
			if (autoheight<30) autoheight=30;
			el.height(curheight).animate({height: autoheight});
		},
		function(){
			var el=$("div",this);
			el.animate({"height":"30px"});
		}
	);
});