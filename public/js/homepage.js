$(document).ready(function() {
	$(".accordian ul li").on("click",function(e){
		e.stopPropagation();
    	e.preventDefault();
		$(this).width("438px");
		$(".accordian ul li").not(this).width("40px");
	});
});
