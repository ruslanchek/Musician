<?php /* Smarty version Smarty 3.1.4, created on 2014-01-09 14:52:40
         compiled from "/Volumes/Black/Users/Ruslan/Sites/redactorcms2/templates/include/common/slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147476612852ce7f78be1453-77602018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5428dddea326d8b6abb9ab27b02a3cfdc179f8a7' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/redactorcms2/templates/include/common/slider.tpl',
      1 => 1389262573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147476612852ce7f78be1453-77602018',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    's' => 0,
    'l' => 0,
    'i' => 0,
    'item' => 0,
    'image' => 0,
    'i0' => 0,
    'yw' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ce7f78d6862',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce7f78d6862')) {function content_52ce7f78d6862($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['s'] = new Smarty_variable($_smarty_tpl->tpl_vars['core']->value->getSliderItems(), null, 0);?>

<div class="slider">
    <div class="horizontal-limiter">
        <div class="pager"></div>

        <div class="content-holder">
            <div class="content ready">
                <h2><?php echo $_smarty_tpl->tpl_vars['s']->value[0]['name'];?>
</h2>

                <div class="text"><?php echo $_smarty_tpl->tpl_vars['s']->value[0]['announce'];?>
</div>
            </div>
        </div>

        <div class="items-viewport">
            <div class="items-container">
                <?php $_smarty_tpl->tpl_vars['l'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['s']->value), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
                <?php $_smarty_tpl->tpl_vars['yw'] = new Smarty_variable($_smarty_tpl->tpl_vars['l']->value*20, null, 0);?>
                <?php $_smarty_tpl->tpl_vars['i0'] = new Smarty_variable(0, null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['s']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->tpl_vars['core']->value->getItemSingleImage('section_18',$_smarty_tpl->tpl_vars['item']->value['id'],'col_125'), null, 0);?>

                    <div class="slider-block <?php if ($_smarty_tpl->tpl_vars['i']->value==1){?>active<?php }?>" style="z-index: <?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
; background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['path'], ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
_pic.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['extension'], ENT_QUOTES, 'UTF-8', true);?>
)" data-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php if ($_smarty_tpl->tpl_vars['i0']->value>0){?>
                            <?php $_smarty_tpl->tpl_vars['yw'] = new Smarty_variable($_smarty_tpl->tpl_vars['yw']->value-20, null, 0);?>
                            <i class="yellow-right" style="width: <?php echo $_smarty_tpl->tpl_vars['yw']->value;?>
px; right: -<?php echo $_smarty_tpl->tpl_vars['yw']->value;?>
px"></i>
                        <?php }?>

                        <div class="h2"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</div>

                        <div class="announce">
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['announce'];?>

                        </div>
                    </div>
                    <?php $_smarty_tpl->tpl_vars['i0'] = new Smarty_variable($_smarty_tpl->tpl_vars['i0']->value+1, null, 0);?>
                <?php } ?>
            </div>
        </div>
    </div>
</div><?php }} ?>