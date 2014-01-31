<?php /* Smarty version Smarty 3.1.4, created on 2014-01-30 12:35:31
         compiled from "/Volumes/Black/Users/Ruslan/Sites/musician/admin/templates/inc.footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112879755952ea0ed34c1a02-17799793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9046a79173eef254adaa36bc2fce05c0a2ea2861' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/musician/admin/templates/inc.footer.tpl',
      1 => 1389999538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112879755952ea0ed34c1a02-17799793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ea0ed352012',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ea0ed352012')) {function content_52ea0ed352012($_smarty_tpl) {?><div class="copy">
    <div class="left">
        &copy; 2008&ndash;<?php echo $_smarty_tpl->tpl_vars['main']->value->config['current_year'];?>
. <?php echo $_smarty_tpl->tpl_vars['main']->value->getText('footer','copyright_text');?>
.
    </div>
    <div class="right">
        <?php echo $_smarty_tpl->tpl_vars['main']->value->getText('footer','version');?>
 <a href="#"><?php echo $_smarty_tpl->tpl_vars['main']->value->config['current_version'];?>
</a>
    </div>
</div><?php }} ?>