$("document").ready(function(){
	loadDatas();
	
});

function loadDatas(){
	$("nav a").click(function(e){
		e.preventDefault();
		var sid=e.currentTarget.id+"sec";
		var a=$("#"+sid).offset().top-50;
		$("html, body").animate({ scrollTop: a }, 600);
	});
}