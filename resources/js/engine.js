var WPEngine = {
    current_pane: '',

    width: 0,
    height: 0,

    bg_width: 4000,
    bg_height: 4000,

    min_width: 1000,
    min_height: 1250,

    content_width: 1000,

    $viewport: null,
    $bgl: null,
    $bgli: null,

    focus: {
        offset_x: 0,
        offset_y: 0,
        orientation: 0
    },

    panes: {
        about       : { offset_x: 600, offset_y: 0, orientation: 'N' },
        news        : { offset_x: 2500, offset_y: 0, orientation: 'N' },
        music       : { offset_x: 1500, offset_y: 350, orientation: 'E' },
        media       : { offset_x: 1560, offset_y: 150, orientation: 'W' },
        instruments : { offset_x: 2400, offset_y: 100, orientation: 'S' },
        contacts    : { offset_x: 515, offset_y: 0, orientation: 'S' }
    },

    bg_animation_easing_time: 850,

    resizeViewport: function () {
        var $body = $('body');

        //Cancel animation
        this.$bgli.removeClass('animate-slow').addClass('animate-none');

        ($body.width() > this.min_width) ? this.width = $body.width() : this.width = this.min_width;
        ($body.height() > this.min_height) ? this.height = $body.height() : this.height = this.min_height;

        $(this.$viewport).add(this.$bgl).css({
            width: this.width,
            height: this.height
        });

        this.focusCurrent();
    },

    focusCurrent: function () {
        var left = (this.focus.offset_x + (this.content_width / 2)) - this.width / 2;

        this.$bgli.css({
            left: -left,
            top: -this.focus.offset_y
        }).removeClass('rotate-N rotate-E rotate-S rotate-W').addClass('rotate-' + this.focus.orientation);
    },

    setFocusPoint: function (offset_x, offset_y, orientation, no_focus) {
        this.focus.offset_x = offset_x;
        this.focus.offset_y = offset_y;
        this.focus.orientation = orientation;

        //Force animation
        this.$bgli.removeClass('animate-none').addClass('animate-slow');

        if (no_focus !== true) {
            this.focusCurrent();
        }
    },

    changePane: function (pane, no_focus) {
        this.mox = 0;
        this.moy = 0;

        this.$bgli.css({
            marginLeft: 0,
            marginTop: 0
        });

        var pane_data = this.panes[pane],
            delay = 0;

        if (pane_data) {
            this.setFocusPoint(
                pane_data.offset_x,
                pane_data.offset_y,
                pane_data.orientation,
                no_focus
            );

            $('.pane-toggler').removeClass('active');
            $('.pane-toggler[data-pane="' + pane + '"]').addClass('active');

            if (no_focus !== true) {
                delay = this.bg_animation_easing_time;
            }

            $('.cl-pane').css({
                opacity: 0
            });


            var _this = this;

            setTimeout(function () {
                var $pane_content = $('.cl-pane[data-pane="' + pane + '"]');

                $pane_content.addClass('animate-fast').css({
                    display: 'block'
                });

                setTimeout(function () {
                    $pane_content.css({
                        opacity: 1
                    });
                }, 50);

                $('.cl-pane').not($pane_content).css({
                    opacity: 0,
                    display: 'none'
                });

                if(modules[pane] && modules[pane].init){
                    modules[pane].init();
                }

                _this.$bgli.removeClass('animate-slow').addClass('animate-none');

                $('.cl-pane-content').css({
                    left: 0,
                    top: 0
                });
            }, delay);

            this.current_pane = pane;

            document.location.hash = '#' + pane;
        }
    },

    bind: function () {
        $(window).on('resize.ewp scroll.ewp', function () {
            WPEngine.resizeViewport();
        });

        $('.pane-toggler').on('click', function (e) {
            WPEngine.changePane($(this).data('pane'), false);
            e.preventDefault();
        });

        this.move = false;

        this.gox = 0;
        this.goy = 0;
        this.mox = 0;
        this.moy = 0;
        this.mox_stop = false;
        this.moy_stop = false;

        var _this = this;

        $('body').on('mousemove', function(e){
            if(_this.move == true){
                var tx = (e.clientX - _this.gox) + _this.mox,
                    ty = (e.clientY - _this.goy) + _this.moy,
                    dimx = -(tx + parseInt(_this.$bgli.css('left'))),
                    dimy = -(ty + parseInt(_this.$bgli.css('top'))),
                    bw = $('body').width(),
                    bh = $('body').height();

                dimx = dimx + bw;
                dimy = dimy + bh;

                if(dimx > bw && dimx < _this.bg_width){
                    _this.$bgli.css({
                        marginLeft: tx
                    });

                    $('.cl-pane-content').css({
                        left: tx
                    });

                    _this.mox_stop = false;
                }else{
                    _this.mox_stop = true;
                }

                if(dimy > bh && dimy < _this.bg_height){
                    _this.$bgli.css({
                        marginTop: ty
                    });

                    $('.cl-pane-content').css({
                        top: ty
                    });

                    _this.moy_stop = false;
                }else{
                    _this.moy_stop = true;
                }
            }
        });

        $('body').mousedown(function(e){
            _this.move = true;

            _this.gox = e.clientX;
            _this.goy = e.clientY;
        });

        $('body').mouseup(function(e){
            _this.move = false;

            if(_this.mox_stop === false){
                _this.mox += e.clientX - _this.gox;
            }

            if(_this.moy_stop === false){
                _this.moy += e.clientY - _this.goy;
            }
        });
    },

    init: function () {
        this.$viewport = $('#ewp-viewport');
        this.$bgl = this.$viewport.find('.bg-layer');
        this.$bgli = this.$bgl.find('>div');
        this.$cl = this.$viewport.find('.content-layer');
        this.bg_width = this.$bgli.width();
        this.bg_height = this.$bgli.height();

        if (document.location.hash && document.location.hash != '#') {
            this.changePane(
                document.location.hash.substr(1, document.location.hash.length),
                true
            );
        } else {
            this.changePane('about', true);
        }

        this.resizeViewport();
        this.bind();
    }
};

$(function () {
    WPEngine.init();
});