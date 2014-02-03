<?php /* Smarty version Smarty 3.1.4, created on 2014-02-03 22:37:55
         compiled from "/Volumes/Black/Users/Ruslan/Sites/musician/templates/modules/music.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10167222952ea255fa09536-05267576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b63937516501f580c2ace446030cc10be144631' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/musician/templates/modules/music.tpl',
      1 => 1391452662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10167222952ea255fa09536-05267576',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ea255fb80a6',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ea255fb80a6')) {function content_52ea255fb80a6($_smarty_tpl) {?><div class="cl-pane-content">
    <div class="video-player">
        <div class="video-view">
            <a class="video-play-button" href="#"></a>
            <img src="trash/video-preview.png"/>

            <div class="video-view-descr">
                <h6>Walden/Майрон Уэлден</h6>

                <p>Майами<span class="track-time">3:52</span></p>
            </div>
        </div>
        <div class="video-preview">
            <div class="video-preview-item current-item">
                <img src="trash/video/1.jpg"/>

                <div class="video-view-descr">
                    <h6>Myron Walden/Майрон</h6>

                    <p>
                        Побережье
                        <span class="track-time">3:52</span>
                    </p>
                </div>
            </div>
            <div class="video-preview-item">
                <img src="trash/video/2.jpg"/>

                <div class="video-view-descr">
                    <h6>Myron Walden/Майрон</h6>

                    <p>
                        Побережье
                        <span class="track-time">3:52</span>
                    </p>
                </div>
            </div>
            <div class="video-preview-item">
                <img src="trash/video/3.jpg"/>

                <div class="video-view-descr">
                    <h6>Myron Walden/Майрон 3</h6>

                    <p>
                        Побережье
                        <span class="track-time">3:52</span>
                    </p>
                </div>
            </div>
            <div class="video-preview-item">
                <img src="trash/video/4.jpg"/>

                <div class="video-view-descr">
                    <h6>Myron Walden/Майрон 4</h6>

                    <p>
                        Побережье
                        <span class="track-time">3:52</span>
                    </p>
                </div>
            </div>
            <div class="video-preview-item">
                <img src="trash/video/5.jpg"/>

                <div class="video-view-descr">
                    <h6>Myron Walden/Майрон 5</h6>

                    <p>
                        Побережье
                        <span class="track-time">3:52</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="audio-player">
        <div id="jquery_jplayer_1" class="jp-jplayer"></div>

        <div id="jp_container_1" class="jp-audio">
            <div class="jp-type-single">
                <div class="large-play-button">
                    <i></i>
                </div>

                <span id="current-track-rating" class="value arrow-top">73</span>

                <h1 id="current-track-name"></h1>

                <p><span id="current-track-album"></span> <span class="track-time jp-duration"></span></p>

                <div class="jp-gui jp-interface">
                    <ul class="jp-controls">
                        <li><a href="javascript:;" class="jp-play">play</a></li>
                        <li><a href="javascript:;" class="jp-pause">pause</a></li>

                        <li><a href="javascript:;" class="jp-volume-max" title="max volume">max volume</a></li>
                    </ul>

                    <div class="jp-progress">
                        <div class="jp-seek-bar">
                            <div class="jp-play-bar"></div>
                        </div>
                    </div>

                    <div class="jp-volume-bar">
                        <div class="jp-volume-bar-value"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="audio-list">
            <h6>Альбом</h6>
            <div id="tracks"></div>
        </div>

        <div id="music-pager" class="pages-nav"></div>
    </div>
</div>



    <script id="music-list-items" type="text/x-handlebars-template">
        {{#each items}}
        <p class="item" data-id="{{this.id}}" data-name="{{this.name}}" data-album="{{this.album}}" data-album_name="{{this.album_name}}" data-length="{{this.duration}}" data-rate="{{this.rate}}" data-file="{{this.f_path}}{{this.f_name}}.{{this.f_extension}}">
            <span class="value arrow-top">{{this.rate}}</span>
            <a data-id="{{this.id}}" class="audio-title" href="#">{{this.name}}</a>
            <span class="track-time">{{this.duration}}</span>
        </p>
        {{/each}}
    </script>
<?php }} ?>