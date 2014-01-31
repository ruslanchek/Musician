<?php /* Smarty version Smarty 3.1.4, created on 2014-01-09 15:20:02
         compiled from "/Volumes/Black/Users/Ruslan/Sites/redactorcms2/admin/templates/modules/templates.templates.edit.tools.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177813727452ce85e222b338-60332009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbf3fc2e45a3615343d90b7d7b0d39829be5e7c1' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/redactorcms2/admin/templates/modules/templates.templates.edit.tools.tpl',
      1 => 1389262572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177813727452ce85e222b338-60332009',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ce85e229caf',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce85e229caf')) {function content_52ce85e229caf($_smarty_tpl) {?><div class="right_block">
    <h2><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('common','actions');?>
</h2>
    <div class="inner">
        <ul class="rb_menu">
            <li>
                <a class="red_link" onclick="confirmMessage('<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('common','delete_oject_confirm');?>
', '<?php echo $_smarty_tpl->tpl_vars['main']->value->content_list_delete_link;?>
<?php echo $_smarty_tpl->tpl_vars['main']->value->dataset['params']['item_params']['id'];?>
')" href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('common','delete_oject');?>
</a>
            </li>
        </ul>
    </div>
</div><?php }} ?>