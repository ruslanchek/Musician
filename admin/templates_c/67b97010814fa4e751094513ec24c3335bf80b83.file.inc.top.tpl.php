<?php /* Smarty version Smarty 3.1.4, created on 2012-03-19 15:57:54
         compiled from "Z:/home/loc/susl/admin/templates\inc.top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89044f671f42ed4178-75557388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67b97010814fa4e751094513ec24c3335bf80b83' => 
    array (
      0 => 'Z:/home/loc/susl/admin/templates\\inc.top.tpl',
      1 => 1332157838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89044f671f42ed4178-75557388',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
    'login' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_4f671f430606c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f671f430606c')) {function content_4f671f430606c($_smarty_tpl) {?><div class="top overall_padding">
    <a href="/admin/" title="<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('top','logo_title');?>
" class="logo"></a>
    <div class="arrow a1"></div>
    <div class="options">
        <a class="site" href="/" title="<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('top','top_domain');?>
"><?php echo $_smarty_tpl->tpl_vars['main']->value->domain;?>
</a>
        
        <div class="arrow a2"></div>

        <?php if ($_smarty_tpl->tpl_vars['login']->value->userdata['ip']!='0'){?>
            <span class="secure" title="<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('top','ip_attached');?>
: <?php echo $_smarty_tpl->tpl_vars['login']->value->userdata['ip_conv'];?>
"></span>
        <?php }?>

        <span class="item">
            <?php if ($_smarty_tpl->tpl_vars['main']->value->module_name=='personal'&&$_smarty_tpl->tpl_vars['main']->value->module_mode=='settings'){?>
                <b><?php echo $_smarty_tpl->tpl_vars['login']->value->userdata['name'];?>
</b> (<?php echo $_smarty_tpl->tpl_vars['login']->value->userdata['login'];?>
)
            <?php }else{ ?>
                <a href="/admin/?option=personal&suboption=settings" title="<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('top','profile_config');?>
"><?php echo $_smarty_tpl->tpl_vars['login']->value->userdata['name'];?>
</a> (<?php echo $_smarty_tpl->tpl_vars['login']->value->userdata['login'];?>
)
            <?php }?>
        </span>

        <span class="item">
            <?php if ($_smarty_tpl->tpl_vars['main']->value->module_name=='personal'&&$_smarty_tpl->tpl_vars['main']->value->module_mode=='password_change'){?>
                <b><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('top','password_change_text');?>
</b>
            <?php }else{ ?>
                <a href="/admin/?option=personal&suboption=password_change" title="<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('top','password_change_title');?>
"><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('top','password_change_text');?>
</a>
            <?php }?>
        </span>
    </div>
    <div class="options_r">
        <span class="item">
            <a class="exit" href="javascript:void(0)" onclick="confirmMessage('<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('top','exit_confirm_text');?>
', '/admin/?action=exit')"><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('top','exit_text');?>
</a>
        </span>
    </div>
</div><?php }} ?>