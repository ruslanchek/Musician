<?php /* Smarty version Smarty 3.1.4, created on 2014-01-18 03:05:14
         compiled from "/Volumes/Black/Users/Ruslan/Sites/sdnfull/admin/templates/modules/structure.edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42503061352d9b72ab8fc67-01777673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5770158325e670817d8854d42dcecd47d9dfa615' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/sdnfull/admin/templates/modules/structure.edit.tpl',
      1 => 1389999538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42503061352d9b72ab8fc67-01777673',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52d9b72ac2c7b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d9b72ac2c7b')) {function content_52d9b72ac2c7b($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("system/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if ($_smarty_tpl->tpl_vars['main']->value->item_data['just_created']=='1'){?>
<script>
    $('input#name').on('blur focus change keyup keydown', function(){
        $('input#part').val(escapeUrl($(this).val()));

        $('input#title').val($(this).val());
    });
</script>
<?php }?><?php }} ?>