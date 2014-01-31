<?php /* Smarty version Smarty 3.1.4, created on 2014-01-09 15:31:58
         compiled from "/Volumes/Black/Users/Ruslan/Sites/redactorcms2/templates/include/common/main-menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129566128352ce88ae4b71f3-84628786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8703fade07ab04f20720e973b7d2e48695dadca8' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/redactorcms2/templates/include/common/main-menu.tpl',
      1 => 1389262573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129566128352ce88ae4b71f3-84628786',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ce88ae52211',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce88ae52211')) {function content_52ce88ae52211($_smarty_tpl) {?><nav class="nav-top">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['core']->value->getInlineMenu(3,1); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['path'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['id']==$_smarty_tpl->tpl_vars['core']->value->page['id']){?> class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
    <?php } ?>

    <div class="shadow"></div>
</nav><?php }} ?>