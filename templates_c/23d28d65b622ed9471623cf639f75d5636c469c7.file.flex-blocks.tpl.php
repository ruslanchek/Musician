<?php /* Smarty version Smarty 3.1.4, created on 2014-01-30 12:24:57
         compiled from "/Volumes/Black/Users/Ruslan/Sites/musician/templates/include/common/flex-blocks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89383564452ea0c591e8ff5-14418486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23d28d65b622ed9471623cf639f75d5636c469c7' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/musician/templates/include/common/flex-blocks.tpl',
      1 => 1390160496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89383564452ea0c591e8ff5-14418486',
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
  'unifunc' => 'content_52ea0c592b855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ea0c592b855')) {function content_52ea0c592b855($_smarty_tpl) {?>
<div class="flex-blocks units-row-end">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['core']->value->getFlexBlocks(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <div class="unit-33">
        &nbsp;
        <div class="item">
            <h2 class="color-blue"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h2>

            <p>
                <?php echo $_smarty_tpl->tpl_vars['item']->value['text_1'];?>


                <span class="hidden">
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['text_2'];?>

                </span>
            </p>

        </div>
    </div>
    <?php } ?>
</div>
<?php }} ?>