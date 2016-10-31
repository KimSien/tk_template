jQuery(function($) {

	//corner 角を丸くする
	$('.maru').corner("10px");

	//影をつける
	$('.kage').shadow();

	//topに戻る
	var toptop = '<a href="#"> ＞TOPへ戻る</a>';
	$(".totop").html(toptop);


	//スライドショー
	$(window).load(function() {
	  $('.flexslider').flexslider({
	    animation: "slide",
			    controlNav: false,
			    animationLoop: true,
			    slideshow: true,
			slideshowSpeed:"3000"
	  });
	});


});