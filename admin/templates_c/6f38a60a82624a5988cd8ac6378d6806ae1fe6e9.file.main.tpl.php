<?php /* Smarty version Smarty 3.1.4, created on 2012-04-10 15:50:36
         compiled from "Z:/home/loc/digitalbakery/admin/templates\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162254f71a4a6a871a7-17976232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f38a60a82624a5988cd8ac6378d6806ae1fe6e9' => 
    array (
      0 => 'Z:/home/loc/digitalbakery/admin/templates\\main.tpl',
      1 => 1333733876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162254f71a4a6a871a7-17976232',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4f71a4a6b7c63',
  'variables' => 
  array (
    'main' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f71a4a6b7c63')) {function content_4f71a4a6b7c63($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $_smarty_tpl->tpl_vars['main']->value->title;?>
</title>

        <link rel="shortcut icon" type="image/x-icon" href="/admin/img/icons/favicon.ico">

        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['main']->value->addition_css; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" media="all" />
        <?php } ?>

        <link rel="stylesheet" type="text/css" href="/admin/css/style.css" media="all" />

        <script type="text/javascript" src="/admin/js/jquery.js"></script>
        <script type="text/javascript" src="/admin/js/color_animation.js"></script>
        <script type="text/javascript" src="/admin/js/extends.js"></script>
        <script type="text/javascript" src="/admin/js/cookie.js"></script>
        <script type="text/javascript" src="/admin/js/ui.js"></script>

        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['main']->value->addition_js; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"></script>
        <?php } ?>

        <script type="text/javascript" src="/admin/js/actions.js"></script>
    </head>

    <body>
        <div id="wrapper">
            <header id="header">
                <?php echo $_smarty_tpl->getSubTemplate ("inc.top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <?php echo $_smarty_tpl->getSubTemplate ("inc.top_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </header>

            <div id="content" class="overall_padding">
                <?php $_smarty_tpl->tpl_vars["module_name"] = new Smarty_variable($_smarty_tpl->tpl_vars['main']->value->module_name, null, 0);?>
                <?php echo $_smarty_tpl->getSubTemplate ("modules/".($_smarty_tpl->tpl_vars['module_name']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </div>
        </div>

        <footer id="footer">
            <div class="overall_padding">
                <?php echo $_smarty_tpl->getSubTemplate ("inc.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </div>
        </footer>
    </body>
</html><?php }} ?>