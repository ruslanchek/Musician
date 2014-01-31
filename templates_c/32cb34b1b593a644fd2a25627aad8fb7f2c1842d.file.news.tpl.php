<?php /* Smarty version Smarty 3.1.4, created on 2014-01-31 16:08:20
         compiled from "/Volumes/Black/Users/Ruslan/Sites/musician/templates/modules/news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97985791352ea255f92e349-72618634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32cb34b1b593a644fd2a25627aad8fb7f2c1842d' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/musician/templates/modules/news.tpl',
      1 => 1391170099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97985791352ea255f92e349-72618634',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ea255fa02d4',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ea255fa02d4')) {function content_52ea255fa02d4($_smarty_tpl) {?><div class="cl-pane-content">
    <div class="left-block social-block">
        <?php echo $_smarty_tpl->getSubTemplate ("include/common/twitter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>

    <div class="right-block">
        <div class="social-list" style="display: block;">
            <div id="news-content"></div>
            <div class="clear"></div>
            <div id="news-pager" class="pages-nav"></div>
        </div>
    </div>
</div>



    <script id="news-list-items" type="text/x-handlebars-template">
        {{#each items}}
        <div class="social-block-item" data-id="{{this.id}}">
            <h6>{{this.name}}</h6>

            <p>
                {{{this.text_short}}}
                <span class="date">{{{this.date}}}</span>
            </p>
        </div>
        {{/each}}
    </script>

    <script id="news-opened-item" type="text/x-handlebars-template">
        <div class="social-item-open">
            <a class="close" href="#"></a>

            <h1>{{header}}</h1>
            {{{content}}}
        </div>
    </script>
<?php }} ?>