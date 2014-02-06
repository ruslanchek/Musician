$(document).ready(function () {

	$('.social-list .social-block-item').click(function(){
		$(this).parent().fadeOut();
		$(this).parent().parent().find('.social-item-open').fadeIn();
	});
	
	$('.social-item-open .close').click(function(){
		$(this).parent().fadeOut();
		$(this).parent().parent().find('.social-list').fadeIn();
	});
	
	$('#instruments .instruments-preview .instruments-preview-item').click(function(){
		$(this).parents('#instruments').find('.video-view-descr').fadeOut();
		$(this).parents('#instruments').find('.full-descr').fadeIn();
	});
	
	$('#instruments .full-descr .close').click(function(){
		$(this).parents('#instruments').find('.full-descr').fadeOut();
		$(this).parents('#instruments').find('.video-view-descr').fadeIn();
	});
	
	$('.main-menu .pane-toggler').click(function(){
		if($(this).attr('data-pane') == 'media') {
				photoInit();
		}
	});
	
		// photoInit();
	setTimeout(function () {
		photoInit();
	}, 500);
	
	function photoInit() {
		setTimeout(function () {
			$('#photo').masonry({
			// указываем элемент-контейнер в котором расположены блоки для динамической верстки
			  itemSelector: '.item',
				// указываем класс элемента являющегося блоком в нашей сетке
				  singleMode: false,
					// true - если у вас все блоки одинаковой ширины
			  isResizable: true,
				// перестраивает блоки при изменении размеров окна
			  isAnimated: true,
				// анимируем перестроение блоков
				  animationOptions: { 
				  queue: false, 
				  duration: 500 
			  }
				// опции анимации - очередь и продолжительность анимации
			}); 	
		}, 1500);
	}

	$("#jquery_jplayer_1").jPlayer({
		ready: function (event) {
			$(this).jPlayer("setMedia", {
				m4a:"http://www.jplayer.org/audio/m4a/TSP-01-Cro_magnon_man.m4a",
				oga:"http://www.jplayer.org/audio/ogg/TSP-01-Cro_magnon_man.ogg"
			});
		},
		swfPath: "js",
		supplied: "m4a, oga",
		wmode: "window",
		smoothPlayBar: true,
		keyEnabled: true
	});
});