{$videos = $core->getVideos()}

<div class="cl-pane-content">
    <div class="video-player">
        <div class="video-view">
            {$image = $core->getItemSingleImage('section_36', $videos[0].id, 'col_243')}

            <div class="video-player-splash">
                <a class="video-play-button" href="#" data-id="{$videos[0].id}"></a>
                <img id="current-video-img" src="{$image.path}{$image.name}.{$image.extension}" width="453" height="345" />

                <div class="video-view-descr">
                    <h6 id="current-video-name">{$videos[0].name}</h6>

                    <p>
                        <span id="current-video-description">{$videos[0].description}</span>
                        <span id="current-video-duration" class="track-time">{$videos[0].duration}</span>
                    </p>
                </div>
            </div>

            <div class="video-player-viewport">
                {foreach from=$videos name=videos item=item}
                    {$image = $core->getItemSingleImage('section_36', $item.id, 'col_243')}

                    <video {if $smarty.foreach.videos.first}style="display: block"{/if}
                           id="video_{$item.id}"
                           class="video-js vjs-default-skin"
                           controls
                           preload="auto"
                           width="453"
                           height="345"
                           poster="{$image.path}{$image.name}.{$image.extension}"
                           data-id="{$item.id}"
                           data-setup="">
                        <source src="{$item.mp4_path}{$item.mp4_name}.{$item.mp4_extension}" type='video/mp4'>
                        <source src="{$item.webm_path}{$item.webm_name}.{$item.webm_extension}" type='video/webm'>
                    </video>
                {/foreach}
            </div>
        </div>

        <div class="video-preview">
            {foreach from=$videos name=videos item=item}
                {$image = $core->getItemSingleImage('section_36', $item.id, 'col_243')}

                <div
                    data-description="{$item.description}"
                    data-name="{$item.name}"
                    data-duration="{$item.duration}"
                    data-id="{$item.id}"
                    data-img="{$image.path}{$image.name}.{$image.extension}"
                    class="video-preview-item{if $smarty.foreach.videos.first} current-item{/if}">

                    <img src="{$image.path}{$image.name}_pic.{$image.extension}"/>

                    <div class="video-view-descr">
                        <h6>{$item.name}</h6>

                        <p>
                            {$item.description}
                            <span class="track-time">{$item.duration}</span>
                        </p>
                    </div>
                </div>
            {/foreach}
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
            <span class="track_rate_last_act value {{this.classname}}" data-id="{{this.id}}">
                <span data-id="{{this.id}}" data-rate="{{this.rate}}" class="track_rate_index">{{this.rate}}</span>
                <a data-id="{{this.id}}" data-action="up" class="plus" href="#">+</a>
                <a data-id="{{this.id}}" data-action="down" class="minus" href="#">&minus;</a>
            </span>

            <a data-id="{{this.id}}" class="audio-title" href="#">{{this.name}}</a>
            <span class="track-time">{{this.duration}}</span>
        </p>
        {{/each}}
    </script>
{/literal}