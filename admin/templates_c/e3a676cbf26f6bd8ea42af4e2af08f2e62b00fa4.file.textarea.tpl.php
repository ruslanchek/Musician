<?php /* Smarty version Smarty 3.1.4, created on 2014-01-30 14:45:17
         compiled from "/Volumes/Black/Users/Ruslan/Sites/musician/admin/templates/system/form_fields/textarea.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57145792252ea2d3d764210-80836261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3a676cbf26f6bd8ea42af4e2af08f2e62b00fa4' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/musician/admin/templates/system/form_fields/textarea.tpl',
      1 => 1389999538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57145792252ea2d3d764210-80836261',
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
  'unifunc' => 'content_52ea2d3d81cd3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ea2d3d81cd3')) {function content_52ea2d3d81cd3($_smarty_tpl) {?><div class="item_block">
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