<?php /* Smarty version Smarty 3.1.4, created on 2014-01-09 14:57:57
         compiled from "/Volumes/Black/Users/Ruslan/Sites/redactorcms2/admin/templates/system/pager.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51711513452ce80b5a5cf70-55078802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbe1333a61883df6692259313cd603c5848c3d13' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/redactorcms2/admin/templates/system/pager.tpl',
      1 => 1389262572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51711513452ce80b5a5cf70-55078802',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ce80b5cfdbf',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce80b5cfdbf')) {function content_52ce80b5cfdbf($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['main']->value->pager['total_pages']>1){?>
<div class="pager">
    <span class="notice">Страницы</span>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['main']->value->pager['pages_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['item']->value['current']&&$_smarty_tpl->tpl_vars['item']->value['page']){?>
            <b><span><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</span></b>
        <?php }elseif($_smarty_tpl->tpl_vars['item']->value['page']){?>
            <a href="<?php echo Utilities::getParamstring('page');?>
&page=<?php echo $_smarty_tpl->tpl_vars['item']->value['page'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
        <?php }else{ ?>
            <span><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</span>
        <?php }?>
    <?php } ?>
    <span class="ctrl"><?php if ($_smarty_tpl->tpl_vars['main']->value->pager['prev_page']){?>&larr; <?php }?><span id="navbutton">Ctrl</span><?php if ($_smarty_tpl->tpl_vars['main']->value->pager['next_page']){?> &rarr;<?php }?></span>

    <script type="text/javascript">
        setPagerLink(<?php if ($_smarty_tpl->tpl_vars['main']->value->pager['prev_page']){?>'<?php echo Utilities::getParamstring('page');?>
&page=<?php echo $_smarty_tpl->tpl_vars['main']->value->pager['prev_page'];?>
'<?php }else{ ?>false<?php }?>, <?php if ($_smarty_tpl->tpl_vars['main']->value->pager['next_page']){?>'<?php echo Utilities::getParamstring('page');?>
&page=<?php echo $_smarty_tpl->tpl_vars['main']->value->pager['next_page'];?>
'<?php }else{ ?>false<?php }?>);
    </script>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['main']->value->pager['total_items']>10){?>
<div class="pager limiter">
    <span class="notice">Объектов на странице</span>
    <?php if ($_GET['limit']==10||(!$_GET['limit']&&$_smarty_tpl->tpl_vars['main']->value->current_per_page==10)||(!$_GET['limit']&&!$_smarty_tpl->tpl_vars['main']->value->current_per_page)){?>
        <b><span>10</span></b>
    <?php }else{ ?>
        <a href="<?php echo Utilities::getParamstring('limit');?>
&limit=10">10</a>
    <?php }?>

    <?php if ($_GET['limit']==25||(!$_GET['limit']&&$_smarty_tpl->tpl_vars['main']->value->current_per_page==25)){?>
        <b><span>25</span></b>
    <?php }else{ ?>
        <a href="<?php echo Utilities::getParamstring('limit');?>
&limit=25">25</a>
    <?php }?>

    <?php if ($_GET['limit']==50||(!$_GET['limit']&&$_smarty_tpl->tpl_vars['main']->value->current_per_page==50)){?>
        <b><span>50</span></b> 
    <?php }else{ ?>
        <a href="<?php echo Utilities::getParamstring('limit');?>
&limit=50">50</a>
    <?php }?>

    <?php if ($_GET['limit']==100||(!$_GET['limit']&&$_smarty_tpl->tpl_vars['main']->value->current_per_page==100)){?>
        <b><span>100</span></b>
    <?php }else{ ?>
        <a href="<?php echo Utilities::getParamstring('limit');?>
&limit=100">100</a>
    <?php }?>
</div>
<?php }?>

<div class="cl"></div><?php }} ?>