<?php /* Smarty version Smarty 3.1.4, created on 2014-01-30 12:24:58
         compiled from "/Volumes/Black/Users/Ruslan/Sites/musician/templates/include/common/news-shortlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16931856052ea0c5ad92763-51669393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e3d03fa29b688f1b4e85a09ad5b344cd2b7216d' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/musician/templates/include/common/news-shortlist.tpl',
      1 => 1389999539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16931856052ea0c5ad92763-51669393',
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
  'unifunc' => 'content_52ea0c5b386a2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ea0c5b386a2')) {function content_52ea0c5b386a2($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date')) include '/Volumes/Black/Users/Ruslan/Sites/musician/smarty/plugins/modifier.date.php';
?><div class="news">
    <div class="limiter">
        <h1>Пресс-центр</h1>

        <div class="units-row-end">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['core']->value->getNewsShort(3); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <div class="unit-33 item">
                <a class="black-link" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['path'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                <span class="date"><?php echo smarty_modifier_date($_smarty_tpl->tpl_vars['item']->value['date'],"date");?>
</span>
            </div>
            <?php } ?>
        </div>
    </div>
</div><?php }} ?>