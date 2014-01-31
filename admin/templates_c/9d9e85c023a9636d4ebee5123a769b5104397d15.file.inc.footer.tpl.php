<?php /* Smarty version Smarty 3.1.4, created on 2014-01-18 03:04:41
         compiled from "/Volumes/Black/Users/Ruslan/Sites/sdnfull/admin/templates/inc.footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71263701052d9b709265863-68307857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d9e85c023a9636d4ebee5123a769b5104397d15' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/sdnfull/admin/templates/inc.footer.tpl',
      1 => 1389999538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71263701052d9b709265863-68307857',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52d9b7092bda1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d9b7092bda1')) {function content_52d9b7092bda1($_smarty_tpl) {?><div class="copy">
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