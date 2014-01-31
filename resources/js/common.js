var common = {
    loading_pool: {},
    global_loading_interval: null,

    iterateObjects: function(selector, interval, doIt){
        var i = 0;

        $(selector).each(function(){
            var $this = $(this);

            i++;

            setTimeout(function(){
                doIt($this);
            }, interval * i);
        });
    },

    unSetGlobalLoading: function (name) {
        setTimeout(function () {
            if (name && common.loading_pool[name]) {
                delete(common.loading_pool[name]);
            }

            var current_in_pool = 0;

            $.each(common.loading_pool, function () {
                current_in_pool++;
            });

            if (current_in_pool > 0) {
                return;
            }

            $('#loading-global').animate({
                opacity: 0
            }, {
                duration: 250,
                complete: function(){
                    if (common.global_loading_interval) {
                        clearInterval(common.global_loading_interval);
                    }

                    $('#loading-global').css({ display: 'none' })
                }
            });
        }, 350);
    },

    setGlobalLoading: function (name) {
        if (name) {
            this.loading_pool[name] = true;
        }

        $('#loading-global').css({ display: 'block' }).animate({
            opacity: 0.85
        }, {
            duration: 150
        });
    },

    humanizeMySQLDate: function(value){
        var month_names = [
                'января',
                'февраля',
                'марта',
                'апреля',
                'мая',
                'июня',
                'июля',
                'августа',
                'сентября',
                'октября',
                'ноября',
                'декабря'
            ],
            d = parseInt(value.substring(8, 10) * 1),
            m = value.substring(5, 7),
            y = value.substring(0, 4);

        return d + '&nbsp;' + month_names[parseInt(m - 1)] + '&nbsp;' + y;
    },

    generatePager: function(options){
        if(options.total_pages <= 1){
            return;
        }

        var html = '',
            i = 0;

        while(i < options.total_pages){
            i++;

            var current_page_class = '';

            if(options.current_page == i){
                current_page_class = 'active';
            }

            html += '<a href="#" data-page="' + i + '" class="' + current_page_class + '">' + i + '</a>';
        }

        $(options.selector).html(html);

        $(options.selector + ' a').off('click').on('click', function(e){
            e.preventDefault();
            options.onSelect($(this).data('page'));
        });
    },

    renderTweets: function(){

    },

    init: function(){
        this.renderTweets();
    }
};

var modules = {};

modules.news = {
    openItem: function(id){
        var $nc = $('#news-content');

        common.iterateObjects('#news-content .social-block-item', 65, function($this){
            $this.removeClass('ready');
        });

        $('#news-pager').hide();

        $.ajax({
            url: '/?ajax',
            data: {
                action: 'getNewsItem',
                id: id
            },
            beforeSend: function(){
                common.setGlobalLoading('news');
            },
            success: function(data){
                $nc.append(
                    Handlebars.compile($("#news-opened-item").html())({
                        header: data.name,
                        content: data.text
                    })
                );

                common.unSetGlobalLoading('news');

                setTimeout(function(){
                    setTimeout(function(){
                        $('.social-item-open').addClass('ready');
                    }, 50);

                    $('.social-item-open .close').off('click').on('click', function(e){
                        e.preventDefault();

                        $nc.find('.social-item-open').removeClass('ready');

                        common.iterateObjects('#news-content .social-block-item', 65, function($this){
                            $this.addClass('ready');
                        });

                        setTimeout(function(){
                            $nc.find('.social-block-item').fadeIn(200);
                            $nc.find('.social-item-open').remove();
                            $('#news-pager').show();
                        }, 250);
                    });
                }, 400);
            }
        });
    },

    loadItems: function(page){
        $.ajax({
            url: '/?ajax',
            data: {
                action: 'getNews',
                page: page
            },
            beforeSend: function(){
                common.setGlobalLoading('news');
            },
            success: function(data){
                for(var i = 0, l = data.items.length; i < l; i++){
                    data.items[i].date = common.humanizeMySQLDate(data.items[i].date);
                }

                var $nc = $('#news-content');

                $nc.html(
                    Handlebars.compile($("#news-list-items").html())({
                        items: data.items
                    })
                );

                $nc.find('.social-block-item').off('click').on('click', function(){
                    modules.news.openItem($(this).data('id'));
                });

                common.unSetGlobalLoading('news');

                setTimeout(function(){
                    common.iterateObjects('#news-content .social-block-item', 65, function($this){
                        $this.addClass('ready');
                    });
                }, 400); // Delay to avoid loading animation intersection

                common.generatePager({
                    selector: '#news-pager',
                    total_pages: data.pager.total_pages,
                    current_page: page,
                    onSelect: function(page){
                        modules.news.loadItems(page);
                    }
                });
            }
        });
    },

    init: function(){
        this.loadItems(1);
    }
};

modules.media = {
    loadItems: function(page){
        $.ajax({
            url: '/?ajax',
            data: {
                action: 'getMedia',
                page: page
            },
            beforeSend: function(){
                common.setGlobalLoading('media');
            },
            success: function(data){
                var $nc = $('#media-content>#photo');

                $nc.html(
                    Handlebars.compile($("#media-list-items").html())({
                        items: data.items
                    })
                );

                $('#media-content>#photo').imagesLoaded(function() {
                    $('#photo .item').wookmark({
                        autoResize: false,
                        container: $('#media-content>#photo'),
                        offset: 30,
                        itemWidth: 245,
                        flexibleWidth: true,
                        fillEmptySpace: true
                    });

                    common.unSetGlobalLoading('media');

                    setTimeout(function(){
                        common.iterateObjects('#photo .item', 35, function($this){
                            $this.addClass('ready');
                        });
                    }, 400); // Delay to avoid loading animation intersection
                });

                common.generatePager({
                    selector: '#media-pager',
                    total_pages: data.pager.total_pages,
                    current_page: page,
                    onSelect: function(page){
                        modules.media.loadItems(page);
                    }
                });
            }
        });
    },

    init: function(){
        this.loadItems(1);
    }
};



/*$(document).ready(function () {

	$('.social-list .social-block-item').click(function(){
		$(this).parent().fadeOut(200);
		$(this).parent().parent().find('.social-item-open').fadeIn(200);
	});
	
	$('.social-item-open .close').click(function(){
		$(this).parent().fadeOut(200);
		$(this).parent().parent().find('.social-list').fadeIn(200);
	});
	
	$('#instruments .instruments-preview .instruments-preview-item').click(function(){
		$(this).parents('#instruments').find('.video-view-descr').fadeOut(200);
		$(this).parents('#instruments').find('.full-descr').fadeIn(200);
	});
	
	$('#instruments .full-descr .close').click(function(){
		$(this).parents('#instruments').find('.full-descr').fadeOut(200);
		$(this).parents('#instruments').find('.video-view-descr').fadeIn(200);
	});
	
	$('.main-menu .pane-toggler').click(function(){
		if($(this).data('pane') == 'media') {
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
*/

$(function(){
    common.init();
});