<?php /* Smarty version Smarty 3.1.4, created on 2014-01-09 14:57:46
         compiled from "/Volumes/Black/Users/Ruslan/Sites/redactorcms2/admin/templates/modules/structure.tree.tools.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103062506052ce80aad89b39-75214755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '688ac11e574f2fcb427e5f8cd62092ac027903cb' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/redactorcms2/admin/templates/modules/structure.tree.tools.tpl',
      1 => 1389262572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103062506052ce80aad89b39-75214755',
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
  'unifunc' => 'content_52ce80aadd02f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce80aadd02f')) {function content_52ce80aadd02f($_smarty_tpl) {?><div class="right_block">
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