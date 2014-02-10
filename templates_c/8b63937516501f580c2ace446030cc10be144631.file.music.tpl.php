<?php /* Smarty version Smarty 3.1.4, created on 2014-02-06 20:46:58
         compiled from "/Volumes/Black/Users/Ruslan/Sites/musician/templates/modules/music.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10167222952ea255fa09536-05267576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b63937516501f580c2ace446030cc10be144631' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/musician/templates/modules/music.tpl',
      1 => 1391705061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10167222952ea255fa09536-05267576',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ea255fb80a6',
  'variables' => 
  array (
    'core' => 0,
    'videos' => 0,
    'image' => 0,
    'item' => 0,
    'album' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ea255fb80a6')) {function content_52ea255fb80a6($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['videos'] = new Smarty_variable($_smarty_tpl->tpl_vars['core']->value->getVideos(), null, 0);?>

<div class="cl-pane-content">
    <div class="video-player">
        <div class="video-view">
            <?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->tpl_vars['core']->value->getItemSingleImage('section_36',$_smarty_tpl->tpl_vars['videos']->value[0]['id'],'col_243'), null, 0);?>

            <div class="video-player-splash">
                <a class="video-play-button" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['videos']->value[0]['id'];?>
"></a>
                <img id="current-video-img" src="<?php echo $_smarty_tpl->tpl_vars['image']->value['path'];?>
<?php echo $_smarty_tpl->tpl_vars['image']->value['name'];?>
.<?php echo $_smarty_tpl->tpl_vars['image']->value['extension'];?>
" width="453" height="345" />

                <div class="video-view-descr">
                    <h6 id="current-video-name"><?php echo $_smarty_tpl->tpl_vars['videos']->value[0]['name'];?>
</h6>

                    <p>
                        <span id="current-video-description"><?php echo $_smarty_tpl->tpl_vars['videos']->value[0]['description'];?>
</span>
                        <span id="current-video-duration" class="track-time"><?php echo $_smarty_tpl->tpl_vars['videos']->value[0]['duration'];?>
</span>
                    </p>
                </div>
            </div>

            <div class="video-player-viewport">
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['videos']['first'] = $_smarty_tpl->tpl_vars['item']->first;
?>
                    <?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->tpl_vars['core']->value->getItemSingleImage('section_36',$_smarty_tpl->tpl_vars['item']->value['id'],'col_243'), null, 0);?>

                    <video <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['videos']['first']){?>style="display: block"<?php }?>
                           id="video_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
                           class="video-js vjs-default-skin"
                           controls
                           preload="auto"
                           width="453"
                           height="345"
                           poster="<?php echo $_smarty_tpl->tpl_vars['image']->value['path'];?>
<?php echo $_smarty_tpl->tpl_vars['image']->value['name'];?>
.<?php echo $_smarty_tpl->tpl_vars['image']->value['extension'];?>
"
                           data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
                           data-setup="">
                        <source src="<?php echo $_smarty_tpl->tpl_vars['item']->value['mp4_path'];?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['mp4_name'];?>
.<?php echo $_smarty_tpl->tpl_vars['item']->value['mp4_extension'];?>
" type='video/mp4'>
                        <source src="<?php echo $_smarty_tpl->tpl_vars['item']->value['webm_path'];?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['webm_name'];?>
.<?php echo $_smarty_tpl->tpl_vars['item']->value['webm_extension'];?>
" type='video/webm'>
                    </video>
                <?php } ?>
            </div>
        </div>

        <div class="video-preview">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['videos']['first'] = $_smarty_tpl->tpl_vars['item']->first;
?>
                <?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->tpl_vars['core']->value->getItemSingleImage('section_36',$_smarty_tpl->tpl_vars['item']->value['id'],'col_243'), null, 0);?>

                <div
                    data-description="<?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
"
                    data-name="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"
                    data-duration="<?php echo $_smarty_tpl->tpl_vars['item']->value['duration'];?>
"
                    data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
                    data-img="<?php echo $_smarty_tpl->tpl_vars['image']->value['path'];?>
<?php echo $_smarty_tpl->tpl_vars['image']->value['name'];?>
.<?php echo $_smarty_tpl->tpl_vars['image']->value['extension'];?>
"
                    class="video-preview-item<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['videos']['first']){?> current-item<?php }?>">

                    <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value['path'];?>
<?php echo $_smarty_tpl->tpl_vars['image']->value['name'];?>
_pic.<?php echo $_smarty_tpl->tpl_vars['image']->value['extension'];?>
"/>

                    <div class="video-view-descr">
                        <h6><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h6>

                        <p>
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>

                            <span class="track-time"><?php echo $_smarty_tpl->tpl_vars['item']->value['duration'];?>
</span>
                        </p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <div class="audio-player">
        <div id="jquery_jplayer_1" class="jp-jplayer"></div>

        <div id="jp_container_1" class="jp-audio">
            <div class="jp-type-single">
                <div class="large-play-button">
                    <i></i>
                </div>

                <span id="current-track-rating" class="value arrow-top"></span>

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
            <select id="album-select">
            <?php  $_smarty_tpl->tpl_vars['album'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['album']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['core']->value->getAlbums(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['album']->key => $_smarty_tpl->tpl_vars['album']->value){
$_smarty_tpl->tpl_vars['album']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['album']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['album']->value['name'];?>
</option>
            <?php } ?>
            </select>

            <div id="tracks"></div>
        </div>

        <div id="music-pager" class="pages-nav"></div>
    </div>
</div>



    <script id="music-list-items" type="text/x-handlebars-template">
        {{#each items}}
        <p class="item" data-id="{{this.id}}" data-name="{{this.name}}" data-album="{{this.album}}" data-album_name="{{this.album_name}}" data-length="{{this.duration}}" data-rate="{{this.rate}}" data-last="{{this.last}}" data-file="{{this.f_path}}{{this.f_name}}.{{this.f_extension}}">
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
<?php }} ?>