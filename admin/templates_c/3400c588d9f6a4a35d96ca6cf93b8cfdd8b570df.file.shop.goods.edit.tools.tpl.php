<?php /* Smarty version Smarty 3.1.4, created on 2011-12-10 17:46:36
         compiled from "Z:/home/loc/cugino/admin/templates\modules\shop.goods.edit.tools.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17324ee370cc3f4183-73681948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3400c588d9f6a4a35d96ca6cf93b8cfdd8b570df' => 
    array (
      0 => 'Z:/home/loc/cugino/admin/templates\\modules\\shop.goods.edit.tools.tpl',
      1 => 1322914709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17324ee370cc3f4183-73681948',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4ee370cc479e0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ee370cc479e0')) {function content_4ee370cc479e0($_smarty_tpl) {?><div class="right_block">
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