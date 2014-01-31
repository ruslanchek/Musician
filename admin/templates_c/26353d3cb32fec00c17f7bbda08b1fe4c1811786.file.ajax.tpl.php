<?php /* Smarty version Smarty 3.1.4, created on 2014-01-09 14:58:12
         compiled from "/Volumes/Black/Users/Ruslan/Sites/redactorcms2/admin/templates/system/ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186075590252ce80c44a2a26-72873433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26353d3cb32fec00c17f7bbda08b1fe4c1811786' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/redactorcms2/admin/templates/system/ajax.tpl',
      1 => 1389262572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186075590252ce80c44a2a26-72873433',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ce80c455cb1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce80c455cb1')) {function content_52ce80c455cb1($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['main']->value->ajax_content=='include'){?>
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['ajax_include']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('new'=>$_GET['new']), 0);?>

<?php }else{ ?>
    <?php echo $_smarty_tpl->tpl_vars['main']->value->ajax_content;?>

<?php }?>
<?php }} ?>