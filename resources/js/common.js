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

modules.music = {
    player: null,

    setupPlayer: function(){
        this.player = $("#jquery_jplayer_1").jPlayer({
            ready: function (event) {

            },
            play: function(){
                modules.music.onPlay();
            },
            pause: function(){
                modules.music.onStop();
            },
            swfPath: "js",
            supplied: "m4a, oga, mp3",
            wmode: "window",
            smoothPlayBar: true,
            keyEnabled: true
        });
    },

    onPlay: function(){
        $('.large-play-button').addClass('rotating');
    },

    onStop: function(){
        $('.large-play-button').removeClass('rotating');
    },

    play: function(){
        this.player.jPlayer('play');
    },

    stop: function(){
        this.player.jPlayer('stop');
    },

    setTrack: function(id){
        var $item = $('#tracks .item[data-id="' + id + '"]');

        $('#tracks .item').removeClass('selected');
        $item.addClass('selected');

        $('#current-track-name').html($item.data('name'));
        $('#current-track-album').html($item.data('album_name'));

        this.player.jPlayer("setMedia", {
            mp3: $item.data('file')
        });
    },

    loadItems: function(page){
        var album = 1;

        $.ajax({
            url: '/?ajax',
            data: {
                action: 'getTracks',
                page: page,
                album: album
            },
            beforeSend: function(){
                common.setGlobalLoading('music');
            },
            success: function(data){
                var $nc = $('#tracks');

                $nc.html(
                    Handlebars.compile($("#music-list-items").html())({
                        items: data.items
                    })
                );

                common.unSetGlobalLoading('music');

                setTimeout(function(){
                    common.iterateObjects('#tracks .item', 75, function($this){
                        $this.addClass('ready');
                    });
                }, 400); // Delay to avoid loading animation intersection

                $('#tracks .item').off('click').on('click', function(e){
                    e.preventDefault();
                    modules.music.setTrack($(this).data('id'));
                    modules.music.play();
                });

                if(data.items[0]){
                    modules.music.setTrack(data.items[0].id);
                }

                common.generatePager({
                    selector: '#music-pager',
                    total_pages: data.pager.total_pages,
                    current_page: page,
                    onSelect: function(page){
                        modules.music.loadItems(page);
                    }
                });
            }
        });
    },

    init: function(){
        this.setupPlayer();
        this.loadItems(1);
    }
};

$(function(){
    common.init();
});