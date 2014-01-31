<?php /* Smarty version Smarty 3.1.4, created on 2014-01-09 14:58:41
         compiled from "/Volumes/Black/Users/Ruslan/Sites/redactorcms2/admin/templates/modules/shop.goods.edit.tools.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39634702852ce80e1b91203-38565046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6de4d4c039a3eedfc51c5ba816e17e18904be58' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/redactorcms2/admin/templates/modules/shop.goods.edit.tools.tpl',
      1 => 1389262572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39634702852ce80e1b91203-38565046',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ce80e1bfe3e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce80e1bfe3e')) {function content_52ce80e1bfe3e($_smarty_tpl) {?><div class="right_block">
    <h2><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('common','actions');?>
</h2>
    <div class="inner">
        <ul class="rb_menu">
            <li>
                <a class="red_link" onclick="confirmMessage('<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('common','delete_oject_confirm');?>
', '<?php echo $_smarty_tpl->tpl_vars['main']->value->content_list_delete_link;?>
<?php echo $_smarty_tpl->tpl_vars['main']->value->dataset['params']['item_params']['id'];?>
')" href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('common','delete_oject');?>
</a>
            </li>
        </ul>
    </div>
</div><?php }} ?>