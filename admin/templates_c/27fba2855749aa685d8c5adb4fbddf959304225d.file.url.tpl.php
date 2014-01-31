<?php /* Smarty version Smarty 3.1.4, created on 2014-01-20 14:34:33
         compiled from "/Volumes/Black/Users/Ruslan/Sites/sdnfull/admin/templates/system/form_fields/url.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148772117752dcfbb920a106-03996442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27fba2855749aa685d8c5adb4fbddf959304225d' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/sdnfull/admin/templates/system/form_fields/url.tpl',
      1 => 1389999538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148772117752dcfbb920a106-03996442',
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
  'unifunc' => 'content_52dcfbb93a91a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dcfbb93a91a')) {function content_52dcfbb93a91a($_smarty_tpl) {?><div class="item_block">
    <label class="label" for="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['help'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</label>
    <input class="text<?php if ($_smarty_tpl->tpl_vars['item']->value['required']){?> required<?php }?><?php if ($_smarty_tpl->tpl_vars['item']->value['mode']==1){?> url<?php }elseif($_smarty_tpl->tpl_vars['item']->value['mode']==2){?> urlpart<?php }?>" type="text" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['index']->value+1;?>
" />
</div>

<?php if ($_smarty_tpl->tpl_vars['item']->value['mode']==2){?>
<script type="text/javascript">
    $(document).ready(function(){
        checkUniqueField('<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['main']->value->dataset['params']['item_params']['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['main']->value->dataset['params']['table'];?>
');
    });
</script>
<?php }?><?php }} ?>