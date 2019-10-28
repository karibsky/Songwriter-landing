$(window).bind('scroll', function () {
	if ($(window).scrollTop() > 50) {
		$('#mainNav').hide();
	} else {
		$('#mainNav').show();
	}
});
$(".about").click(function(){
	$('html, body').animate({scrollTop:$('#about').position().top}, 3000);
});
$(".songs").click(function(){
	$('html, body').animate({scrollTop:$('.portfolio').position().top}, 3000);
});
$(".contact").click(function(){
	$('html, body').animate({scrollTop:$('footer').position().top}, 3000);
});