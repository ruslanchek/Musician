<?php /* Smarty version Smarty 3.1.4, created on 2014-01-09 14:58:09
         compiled from "/Volumes/Black/Users/Ruslan/Sites/redactorcms2/admin/templates/system/form_fields/text.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113122583152ce80c1a4d9e5-99988447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a4870b9e527b04b7d7445e4a5bdb37536f8e725' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/redactorcms2/admin/templates/system/form_fields/text.tpl',
      1 => 1389262572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113122583152ce80c1a4d9e5-99988447',
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
  'unifunc' => 'content_52ce80c1b3089',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce80c1b3089')) {function content_52ce80c1b3089($_smarty_tpl) {?><div class="item_block">
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