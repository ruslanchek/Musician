<?php /* Smarty version Smarty 3.1.4, created on 2014-01-30 14:45:17
         compiled from "/Volumes/Black/Users/Ruslan/Sites/musician/admin/templates/system/form_fields/checkbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38235424452ea2d3d3d00f6-95709488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '124b4fc4dcfc5ab6b5340e72d57748ad04683ee4' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/musician/admin/templates/system/form_fields/checkbox.tpl',
      1 => 1389999538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38235424452ea2d3d3d00f6-95709488',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ea2d3d444a8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ea2d3d444a8')) {function content_52ea2d3d444a8($_smarty_tpl) {?><div class="cb_item_block" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['help'];?>
">
    <div class="cb_left">
        <label for="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</label>
    </div>
    <div class="cb_right">
        <input class="checkbox iphone_checkbox" type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['item']->value['value']=="1"){?>checked="checked"<?php }?> tabindex="<?php echo $_smarty_tpl->tpl_vars['index']->value+1;?>
" />
    </div>
    <div class="clear"></div>
</div><?php }} ?>