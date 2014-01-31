<?php /* Smarty version Smarty 3.1.4, created on 2014-01-30 14:13:21
         compiled from "/Volumes/Black/Users/Ruslan/Sites/musician/templates/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75096343552ea0c56e1d005-65796091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75a75afc9f24b1800ae1e872401d304203ceb985' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/musician/templates/main.tpl',
      1 => 1391076799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75096343552ea0c56e1d005-65796091',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ea0c5727ea4',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ea0c5727ea4')) {function content_52ea0c5727ea4($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <?php echo $_smarty_tpl->getSubTemplate ("include/common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </head>

    <body>
        <?php echo $_smarty_tpl->getSubTemplate ("include/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


        <div class="viewport" id="ewp-viewport">
            <div class="content-layer">
                <div id="about" class="cl-pane" data-pane="about">
                    <?php echo $_smarty_tpl->getSubTemplate ("modules/about.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                </div>

                <div class="cl-pane" data-pane="news">
                    <?php echo $_smarty_tpl->getSubTemplate ("modules/news.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                </div>

                <div class="cl-pane" data-pane="music">
                    <?php echo $_smarty_tpl->getSubTemplate ("modules/music.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                </div>

                <div id="media" class="cl-pane" data-pane="media">
                    <?php echo $_smarty_tpl->getSubTemplate ("modules/media.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                </div>

                <div class="cl-pane instrument-block" data-pane="instruments">
                    <?php echo $_smarty_tpl->getSubTemplate ("modules/instruments.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                </div>

                <div class="cl-pane" data-pane="contacts">
                    <?php echo $_smarty_tpl->getSubTemplate ("modules/contacts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                </div>
            </div>

            <div class="bg-layer">
                <div></div>
            </div>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate ("include/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </body>
</html><?php }} ?>