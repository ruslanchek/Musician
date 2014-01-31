<?php /* Smarty version Smarty 3.1.4, created on 2014-01-09 15:31:58
         compiled from "/Volumes/Black/Users/Ruslan/Sites/redactorcms2/templates/include/common/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88753500352ce88ae52d8b5-74230440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89eba475b3185cc6024f058fad439e15b74b5778' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/redactorcms2/templates/include/common/footer.tpl',
      1 => 1389262573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88753500352ce88ae52d8b5-74230440',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ce88ae5ae79',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce88ae5ae79')) {function content_52ce88ae5ae79($_smarty_tpl) {?>&copy;

<?php if ($_smarty_tpl->tpl_vars['core']->value->getConstant('common','start_year')<date('Y')){?>
    <?php echo $_smarty_tpl->tpl_vars['core']->value->getConstant('common','start_year');?>
&ndash;
<?php }?>

<?php echo date('Y');?>


<?php echo $_smarty_tpl->tpl_vars['core']->value->getConstant('common','brand_name');?>


<br>

<a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['core']->value->getConstant('common','main_email'), ENT_QUOTES, 'UTF-8', true);?>
" class="black-link">
    <?php echo $_smarty_tpl->tpl_vars['core']->value->getConstant('common','main_email');?>

</a><?php }} ?>