<?php /* Smarty version Smarty 3.1.4, created on 2014-01-18 03:05:13
         compiled from "/Volumes/Black/Users/Ruslan/Sites/sdnfull/admin/templates/system/ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46292634052d9b729364244-13292700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f1bda28ff778950a1a5c594d471c838209a682a' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/sdnfull/admin/templates/system/ajax.tpl',
      1 => 1389999538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46292634052d9b729364244-13292700',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52d9b72941ad2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d9b72941ad2')) {function content_52d9b72941ad2($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['main']->value->ajax_content=='include'){?>
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['ajax_include']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('new'=>$_GET['new']), 0);?>

<?php }else{ ?>
    <?php echo $_smarty_tpl->tpl_vars['main']->value->ajax_content;?>

<?php }?>
<?php }} ?>