<?php /* Smarty version Smarty 3.1.4, created on 2014-01-30 12:35:38
         compiled from "/Volumes/Black/Users/Ruslan/Sites/musician/admin/templates/system/ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52470099652ea0eda500493-19736842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '809d089b0f9342b4c3a0a9b2eacd2abcaa6f997d' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/musician/admin/templates/system/ajax.tpl',
      1 => 1389999538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52470099652ea0eda500493-19736842',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ea0eda5bbf2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ea0eda5bbf2')) {function content_52ea0eda5bbf2($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['main']->value->ajax_content=='include'){?>
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['ajax_include']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('new'=>$_GET['new']), 0);?>

<?php }else{ ?>
    <?php echo $_smarty_tpl->tpl_vars['main']->value->ajax_content;?>

<?php }?>
<?php }} ?>