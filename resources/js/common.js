var common = {
    loading_pool: {},
    global_loading_interval: null,

    humanizeDate: function (date, output_with_time) {
        if (!date) {
            return '&mdash;';
        }

        if (!(Object.prototype.toString.call(date) === "[object Date]")) {
            var t = date.split('.');

            date = new Date((t[1] + '-' + t[0] + '-' + t[2]));
        }

        var h_date,
            month_names = [
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
            ];

        var d = date.getDate(),
            M = date.getMonth(),
            Y = date.getFullYear();

        h_date = d + ' ' + month_names[M] + ' ' + Y;

        if (output_with_time === true) {
            var H = date.getHours(),
                i = date.getMinutes(),
                s = date.getSeconds();

            if (i < 10) {
                i = '0' + i;
            }

            if (s < 10) {
                s = '0' + s;
            }

            h_date = h_date + ', ' + H + ':' + i + ':' + s;
        }

        return h_date;
    },

    getTweets: function(){
        $.ajax({
            url: '/?ajax&action=getTweets',
            type: 'get',
            dataType: 'json',
            success: function(data){
                var html = '';

                for(var i = 0, l = data.length; i < l; i++){
                    var date = common.humanizeDate(new Date(data[i].created_at));

                    html += '<p><span class="date">' + date + '</span>  ' + data[i].text + '</p>';
                }

                $('.tweets').html(html);
            }
        });
    },

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

    init: function(){
        this.getTweets();
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

                    $('#photo .item').on('click', function(e){
                        e.preventDefault();
                        common.iterateObjects('#photo .item', 35, function($this){
                            $this.removeClass('ready');
                        });

                        $('#media-pager').hide();

                        var src = $(this).find('a').attr('href');

                        setTimeout(function(){
                            $('#photo').append(Handlebars.compile($("#media-list-item").html())({
                                src: src
                            }));

                            setTimeout(function(){
                                $('.social-item-open-gallery').addClass('ready');
                            }, 100);

                            $('.social-item-open-gallery .close').on('click', function(e){
                                e.preventDefault();
                                $('.social-item-open-gallery').removeClass('ready');

                                setTimeout(function(){
                                    $('.social-item-open-gallery').remove();

                                    common.iterateObjects('#photo .item', 35, function($this){
                                        $this.addClass('ready');
                                    });

                                    $('#media-pager').show();
                                }, 200);
                            });

                        }, 300);
                    });
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
        this.stopAllVideos();
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

        var act_class = '';

        if($item.data('last') == '–'){
            act_class = 'arrow-bottom';
        }else{
            act_class = 'arrow-top';
        }

        $('#current-track-rating').html($item.data('rate')).removeClass('arrow-top arrow-bottom').addClass(act_class);

        this.player.jPlayer("setMedia", {
            mp3: $item.data('file')
        });
    },

    rateTrack: function($act){
        var id = $act.data('id'),
            act = $act.data('action');

        $.ajax({
            url: '/?ajax',
            data: {
                action: 'setTrackRate',
                act: act,
                id: id
            },
            success: function(data){
                if(data.status == true){
                    var $rating_cell = $('.track_rate_index[data-id="' + id + '"]'),
                        val = 0,
                        act_class = '';

                    if(act == 'up'){
                        val = +1;
                        act_class = 'arrow-top';
                    }else{
                        val = -1;
                        act_class = 'arrow-bottom';
                    }

                    $rating_cell.html($rating_cell.data('rate') + val);

                    $('.track_rate_last_act[data-id="' + id + '"]').removeClass('arrow-top arrow-bottom').addClass(act_class);
                }else{
                    alert(data.message);
                }
            }
        });
    },

    loadItems: function(page, album){
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

                for(var i = 0, l = data.items.length; i < l; i++){
                    if(data.items[i].last == '+'){
                        data.items[i].classname = 'arrow-top';
                    }else if(data.items[i].last == '–'){
                        data.items[i].classname = 'arrow-bottom';
                    }else{
                        data.items[i].classname = '';
                    }
                }

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

                $('#tracks .item>a').off('click').on('click', function(e){
                    e.preventDefault();
                    modules.music.setTrack($(this).data('id'));
                    modules.music.play();
                });

                $('#tracks .item .plus').off('click').on('click', function(e){
                    e.preventDefault();
                    modules.music.rateTrack($(this));
                });

                $('#tracks .item .minus').off('click').on('click', function(e){
                    e.preventDefault();
                    modules.music.rateTrack($(this));
                });

                if(data.items[0]){
                    modules.music.setTrack(data.items[0].id);
                }

                common.generatePager({
                    selector: '#music-pager',
                    total_pages: data.pager.total_pages,
                    current_page: page,
                    onSelect: function(page){
                        modules.music.loadItems(page, album);
                    }
                });
            }
        });
    },

    stopAllVideos: function(){
        $('.video-js').each(function(){
            var id = $(this).attr('id'),
                videoplayer = videojs(id);

            videoplayer.pause().currentTime(0);
        });
    },

    startVideo: function(id){
        this.stopAllVideos();

        $('.video-player-viewport').fadeIn(200);
        $('.video-player-splash').fadeOut(200);

        var videoplayer = videojs('video_' + id);

        videoplayer.play();

        this.stop();
    },

    selectVideo: function(id){
        this.stopAllVideos();

        var $item = $('.video-preview .video-preview-item[data-id="' + id + '"]');

        $('.video-preview .video-preview-item').removeClass('current-item');
        $item.addClass('current-item');

        $('#current-video-description').html($item.data('description'));
        $('#current-video-duration').html($item.data('duration'));
        $('#current-video-img').attr('src', $item.data('img'));
        $('#current-video-name').html($item.data('name'));
        $('.video-play-button').data('id', $item.data('id'));

        $('.video-player-viewport .video-js').hide();
        $('.video-player-viewport #video_' + id).show();

        $('.video-player-viewport').fadeOut(200);
        $('.video-player-splash').fadeIn(200);
    },

    binds: function(){
        $('.video-preview .video-preview-item').on('click', function(e){
            modules.music.selectVideo($(this).data('id'));
            e.preventDefault();
        });

        $('.video-play-button').on('click', function(e){
            modules.music.startVideo($(this).data('id'));
            e.preventDefault();
        });
    },

    init: function(){
        this.setupPlayer();
        this.loadItems($('#album-select option:first').attr('value'), 1);
        this.binds();

        $('.video-player-viewport .video-js').show();

        $('#album-select').customSelector({
            onSelect: function(key, val){
                modules.music.loadItems(1, key);
                modules.music.stop();
            }
        });
    }
};

modules.instruments = {
    current_instrument_id: null,

    openInstrument: function(id){
        $('.instrument-item').removeClass('active');
        $('.instrument-item[data-id="' + id + '"]').addClass('active');

        $('.instruments').removeClass('active');
        $('.instruments[data-id="' + id + '"]').addClass('active');

        this.current_instrument_id = id;
    },

    init: function(){
        this.current_instrument_id = $('.instrument-item.active').data('id');

        $('.instrument-item').on('click', function(e){
            e.preventDefault();
            modules.instruments.openInstrument($(this).data('id'));
        });

        $('.instruments-preview .instruments-preview-item').on('click', function(e){
            e.preventDefault();

            $('.instruments-preview .instruments-preview-item[data-instrument_id="' + modules.instruments.current_instrument_id + '"]').removeClass('active');
            $('.instruments-preview .instruments-preview-item[data-image_id="' + $(this).data('image_id') + '"]').addClass('active');
            $('.instrument-big-image[data-instrument_id="' + modules.instruments.current_instrument_id + '"]').removeClass('active');
            $('.instrument-big-image[data-image_id="' + $(this).data('image_id') + '"]').addClass('active');
        });

        $('.instrument-big-image').on('click', function(e){
            $('.full-descr[data-instrument_id="' + modules.instruments.current_instrument_id + '"]').fadeIn(200);
            $('.full-descr .close').on('click', function(e){
                $('.full-descr').fadeOut(200)
            });
        });
    }
};

modules.contacts = {
    send: function(){
        $.ajax({
            url: '/send.php',
            data: {
                name: $('#form-name').val(),
                email: $('#form-email').val(),
                message: $('#form-message').val()
            },
            type: 'post',
            dataType: 'json',
            beforeSend: function(){
                common.setGlobalLoading('contact');
                $('.form-message').html('').removeClass('error success');
                $('#contact-form input[type="submit"]').attr('disabled', 'disabled');
            },
            success: function(data){
                common.unSetGlobalLoading('contact');

                if(data.status == true){
                    $('.form-message').addClass('success');
                    $('#contact-form input, #contact-form textarea').fadeOut();
                }else{
                    $('.form-message').addClass('error');
                }

                $('.form-message').html(data.message);
                $('#contact-form input[type="submit"]').removeAttr('disabled');
            }
        });
    },

    init: function(){
        $('#contact-form').on('submit', function(e){
            e.preventDefault();
            modules.contacts.send();
        });
    }
}

$(function(){
    common.init();
});