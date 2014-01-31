<?php /* Smarty version Smarty 3.1.4, created on 2014-01-18 03:05:15
         compiled from "/Volumes/Black/Users/Ruslan/Sites/sdnfull/admin/templates/modules/structure.edit.tools.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63832872752d9b72ba8b159-01260044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '475a0918cb72a07f466de5978135a2b4ff75cf19' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/sdnfull/admin/templates/modules/structure.edit.tools.tpl',
      1 => 1389999538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63832872752d9b72ba8b159-01260044',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52d9b72bb0f29',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d9b72bb0f29')) {function content_52d9b72bb0f29($_smarty_tpl) {?><div class="right_block">
    <h2><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('structure','item_status_header');?>
</h2>
    <div class="inner">
        <h3><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('common','code_id');?>
</h3>
        <p>
            <?php echo $_smarty_tpl->tpl_vars['main']->value->item_data['id'];?>

        </p>

        <h3><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('structure','item_status_param_physical_path');?>
</h3>
        <p>
            <a href="<?php echo $_smarty_tpl->tpl_vars['main']->value->item_data['path'];?>
"><?php echo $_smarty_tpl->tpl_vars['main']->value->item_data['path'];?>
</a>
        </p>
    </div>
</div><?php }} ?>