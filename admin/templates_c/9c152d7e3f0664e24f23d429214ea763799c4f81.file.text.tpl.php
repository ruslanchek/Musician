<?php /* Smarty version Smarty 3.1.4, created on 2014-01-18 03:05:15
         compiled from "/Volumes/Black/Users/Ruslan/Sites/sdnfull/admin/templates/system/form_fields/text.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21946274452d9b72b56c085-69106176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c152d7e3f0664e24f23d429214ea763799c4f81' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/sdnfull/admin/templates/system/form_fields/text.tpl',
      1 => 1389999538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21946274452d9b72b56c085-69106176',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'index' => 0,
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52d9b72b651e6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d9b72b651e6')) {function content_52d9b72b651e6($_smarty_tpl) {?><div class="item_block">
    <label class="label" for="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['help'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</label>
    <input class="text<?php if ($_smarty_tpl->tpl_vars['item']->value['email']){?> email<?php }?><?php if ($_smarty_tpl->tpl_vars['item']->value['number']){?> number<?php }?><?php if ($_smarty_tpl->tpl_vars['item']->value['required']){?> required<?php }?>" type="text" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['index']->value+1;?>
" />
</div>

<?php if ($_smarty_tpl->tpl_vars['item']->value['unique']){?>
<script type="text/javascript">
    $(document).ready(function(){
        checkUniqueField('<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['main']->value->dataset['params']['item_params']['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['main']->value->dataset['params']['table'];?>
');
    });
</script>
<?php }?><?php }} ?>