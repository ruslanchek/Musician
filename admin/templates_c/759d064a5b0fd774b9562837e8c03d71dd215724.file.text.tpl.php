<?php /* Smarty version Smarty 3.1.4, created on 2012-04-05 21:34:06
         compiled from "/var/www/fortyfour/data/www/digitalbakery.fortyfour.ru/admin/templates/system/form_fields/text.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12494003074f7dd78e4c92e1-56414819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '759d064a5b0fd774b9562837e8c03d71dd215724' => 
    array (
      0 => '/var/www/fortyfour/data/www/digitalbakery.fortyfour.ru/admin/templates/system/form_fields/text.tpl',
      1 => 1333584927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12494003074f7dd78e4c92e1-56414819',
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
  'unifunc' => 'content_4f7dd78e781e0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f7dd78e781e0')) {function content_4f7dd78e781e0($_smarty_tpl) {?><div class="item_block">
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