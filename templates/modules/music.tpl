<div class="cl-pane-content">
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

                        {*
                            <li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
                            <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
                            <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
                        *}

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


{literal}
    <script id="music-list-items" type="text/x-handlebars-template">
        {{#each items}}
        <p class="item" data-id="{{this.id}}" data-name="{{this.name}}" data-album="{{this.album}}" data-album_name="{{this.album_name}}" data-length="{{this.duration}}" data-rate="{{this.rate}}" data-file="{{this.f_path}}{{this.f_name}}.{{this.f_extension}}">
            <span class="value arrow-top">{{this.rate}}</span>
            <a data-id="{{this.id}}" class="audio-title" href="#">{{this.name}}</a>
            <span class="track-time">{{this.duration}}</span>
        </p>
        {{/each}}
    </script>
{/literal}