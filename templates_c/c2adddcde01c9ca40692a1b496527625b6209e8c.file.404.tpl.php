<?php /* Smarty version Smarty 3.1.4, created on 2014-01-09 15:31:58
         compiled from "/Volumes/Black/Users/Ruslan/Sites/redactorcms2/templates/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36308222452ce88ae269307-05588837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2adddcde01c9ca40692a1b496527625b6209e8c' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/redactorcms2/templates/404.tpl',
      1 => 1389262573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36308222452ce88ae269307-05588837',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ce88ae37710',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce88ae37710')) {function content_52ce88ae37710($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <?php echo $_smarty_tpl->getSubTemplate ("include/common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>
<body>
<div class="wrapper">
    <header class="header">
        <?php echo $_smarty_tpl->getSubTemplate ("include/common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </header>

    <div class="content">
        <div class="units-row">
            <div class="unit-20">
                &nbsp;
            </div>

            <div class="unit-80">
                <h1><?php echo $_smarty_tpl->tpl_vars['core']->value->page['h1'];?>
</h1>

                <p><?php echo $_smarty_tpl->tpl_vars['core']->value->page['title'];?>
</p>

                &mdash; <a href="/">Перейти на главную</a><br>
                &mdash; <a href="/sitemap">Карта сайта</a>
            </div>
        </div>
    </div>

    <footer class="footer">
        <?php echo $_smarty_tpl->getSubTemplate ("include/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </footer>
</div>

<?php echo $_smarty_tpl->tpl_vars['core']->value->getConstant('scripts','body_code');?>


</body>
</html><?php }} ?>