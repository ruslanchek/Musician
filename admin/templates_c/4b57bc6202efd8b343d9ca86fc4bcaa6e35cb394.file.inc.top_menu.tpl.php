<?php /* Smarty version Smarty 3.1.4, created on 2014-01-18 03:04:40
         compiled from "/Volumes/Black/Users/Ruslan/Sites/sdnfull/admin/templates/inc.top_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118480792252d9b708c2f3f1-92026351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b57bc6202efd8b343d9ca86fc4bcaa6e35cb394' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/sdnfull/admin/templates/inc.top_menu.tpl',
      1 => 1389999538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118480792252d9b708c2f3f1-92026351',
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
  'unifunc' => 'content_52d9b708d73e3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d9b708d73e3')) {function content_52d9b708d73e3($_smarty_tpl) {?><ul class="main_menu">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['main']->value->config['admin_modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['item']->value[2]){?>
            <?php if ($_smarty_tpl->tpl_vars['main']->value->module_name==$_smarty_tpl->tpl_vars['item']->value[0]){?>
                <li>
                    <span class="ml_sprite <?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
"></span>
                    <span class="menu_text_active"><span><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('modules_menu',$_smarty_tpl->tpl_vars['item']->value[0]);?>
</span></span>
                </li>
            <?php }else{ ?>
                <li>
                    <a class="ml_link" href="/admin/?option=<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
">
                        <span class="ml_sprite <?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
"></span>
                        <span class="menu_text_link"><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('modules_menu',$_smarty_tpl->tpl_vars['item']->value[0]);?>
</span>
                    </a>
                </li>
            <?php }?>
        <?php }?>
    <?php } ?>
</ul>

<div class="menu_shade"></div>

<?php if ($_smarty_tpl->tpl_vars['main']->value->submenu){?>
<ul class="main_menu_sublevel overall_padding">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['main']->value->submenu; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['item']->value['active']){?>
            <li class="active_sml"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</li>
        <?php }else{ ?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
        <?php }?>
    <?php } ?>
</ul>
<?php }?><?php }} ?>