<?php /* Smarty version Smarty 3.1.4, created on 2014-01-09 14:58:09
         compiled from "/Volumes/Black/Users/Ruslan/Sites/redactorcms2/admin/templates/modules/structure.edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131713772952ce80c11149f0-55072364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8672dd8da0aff0ab50aab83e77f8532e3f78e52c' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/redactorcms2/admin/templates/modules/structure.edit.tpl',
      1 => 1389262572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131713772952ce80c11149f0-55072364',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ce80c11bc46',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce80c11bc46')) {function content_52ce80c11bc46($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("system/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['main']->value->item_data['just_created']=='1'){?>
<script>
    $('input#name').on('blur focus change keyup keydown', function(){
        $('input#part').val(escapeUrl($(this).val()));

        $('input#title').val($(this).val());
    });
</script>
<?php }?><?php }} ?>