<?php /* Smarty version Smarty 3.1.4, created on 2014-01-18 04:31:20
         compiled from "/Volumes/Black/Users/Ruslan/Sites/sdnfull/admin/templates/modules/shop.goods.edit.tools.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182968582752d9cb585272e8-96107597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8e4d85486c9ecdf9f8ed8a882139be2acdefd2e' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/sdnfull/admin/templates/modules/shop.goods.edit.tools.tpl',
      1 => 1389999538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182968582752d9cb585272e8-96107597',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52d9cb585933f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d9cb585933f')) {function content_52d9cb585933f($_smarty_tpl) {?><div class="right_block">
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