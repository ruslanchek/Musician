<?php /* Smarty version Smarty 3.1.4, created on 2014-01-30 12:35:31
         compiled from "/Volumes/Black/Users/Ruslan/Sites/musician/admin/templates/modules/structure.tree.tools.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174492415652ea0ed3462df4-92755758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '459ed3e10933b20fb3989a8255412369051d86eb' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/musician/admin/templates/modules/structure.tree.tools.tpl',
      1 => 1389999538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174492415652ea0ed3462df4-92755758',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
    'structure' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ea0ed34b591',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ea0ed34b591')) {function content_52ea0ed34b591($_smarty_tpl) {?><div class="right_block">
    <h2><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('structure','tree_status_header');?>
</h2>
    <div class="inner">
        <h3><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('structure','tree_status_param_item_count');?>
</h3>
        <p>
            <?php echo $_smarty_tpl->tpl_vars['structure']->value->getTreeCount();?>

        </p>
    </div>
</div><?php }} ?>