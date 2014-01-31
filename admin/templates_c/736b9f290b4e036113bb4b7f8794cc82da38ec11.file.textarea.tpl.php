<?php /* Smarty version Smarty 3.1.4, created on 2014-01-09 14:58:09
         compiled from "/Volumes/Black/Users/Ruslan/Sites/redactorcms2/admin/templates/system/form_fields/textarea.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182084885752ce80c1ea6fb2-35558756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '736b9f290b4e036113bb4b7f8794cc82da38ec11' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/redactorcms2/admin/templates/system/form_fields/textarea.tpl',
      1 => 1389262572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182084885752ce80c1ea6fb2-35558756',
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
  'unifunc' => 'content_52ce80c201785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce80c201785')) {function content_52ce80c201785($_smarty_tpl) {?><div class="item_block">
    <label class="label" for="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['help'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</label>

    <textarea class="textarea <?php if ($_smarty_tpl->tpl_vars['item']->value['required']){?> required<?php }?>" rows="<?php if ($_smarty_tpl->tpl_vars['item']->value['use_editor']){?>13<?php }else{ ?>5<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['index']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
</textarea>
    <?php if ($_smarty_tpl->tpl_vars['item']->value['use_editor']){?>
        <script type="text/javascript">initEditor($('#<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
'), '<?php echo $_smarty_tpl->tpl_vars['main']->value->locale;?>
', '<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
')</script>
    <?php }?>
</div><?php }} ?>