<?php /* Smarty version Smarty 3.1.4, created on 2014-01-18 03:18:44
         compiled from "/Volumes/Black/Users/Ruslan/Sites/sdnfull/admin/templates/modules/templates.templates.edit.tools.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101136766752d9ba54126217-49982150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fa2ce8e7de7adaf6900fcb27b2352b0f198db1b' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/sdnfull/admin/templates/modules/templates.templates.edit.tools.tpl',
      1 => 1389999538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101136766752d9ba54126217-49982150',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52d9ba5419452',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d9ba5419452')) {function content_52d9ba5419452($_smarty_tpl) {?><div class="right_block">
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