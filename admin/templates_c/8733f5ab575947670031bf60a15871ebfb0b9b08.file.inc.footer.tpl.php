<?php /* Smarty version Smarty 3.1.4, created on 2014-01-09 14:57:46
         compiled from "/Volumes/Black/Users/Ruslan/Sites/redactorcms2/admin/templates/inc.footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115764701052ce80aadda095-98535881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8733f5ab575947670031bf60a15871ebfb0b9b08' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/redactorcms2/admin/templates/inc.footer.tpl',
      1 => 1389262572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115764701052ce80aadda095-98535881',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ce80aae3f42',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce80aae3f42')) {function content_52ce80aae3f42($_smarty_tpl) {?><div class="copy">
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