<?php /* Smarty version Smarty 3.1.4, created on 2014-01-18 03:04:41
         compiled from "/Volumes/Black/Users/Ruslan/Sites/sdnfull/admin/templates/modules/structure.tree.tools.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30472698052d9b7092115c9-07588900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bec2f7dc4a6d485c70e04cead3a2f8fc314611b6' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/sdnfull/admin/templates/modules/structure.tree.tools.tpl',
      1 => 1389999538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30472698052d9b7092115c9-07588900',
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
  'unifunc' => 'content_52d9b70925c17',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d9b70925c17')) {function content_52d9b70925c17($_smarty_tpl) {?><div class="right_block">
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