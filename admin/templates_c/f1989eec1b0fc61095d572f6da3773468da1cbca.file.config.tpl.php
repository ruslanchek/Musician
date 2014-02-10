<?php /* Smarty version Smarty 3.1.4, created on 2014-02-10 16:16:46
         compiled from "/Volumes/Black/Users/Ruslan/Sites/musician/admin/templates/modules/config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172880366152f8c32e2211d0-97977196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1989eec1b0fc61095d572f6da3773468da1cbca' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/musician/admin/templates/modules/config.tpl',
      1 => 1389999538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172880366152f8c32e2211d0-97977196',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
    'key' => 0,
    'val_i' => 0,
    'key_i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52f8c32e423a0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f8c32e423a0')) {function content_52f8c32e423a0($_smarty_tpl) {?><h1><?php echo $_smarty_tpl->tpl_vars['main']->value->h1;?>
</h1>

<div class="list_table config_table">
    <form action="/admin/?option=config&suboption=constants&action=save_params" method="POST">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['main']->value->constants; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
                <tr>
                    <th colspan="3" align="left"><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('contstants',$_smarty_tpl->tpl_vars['key']->value);?>
</th>
                </tr>

                <?php  $_smarty_tpl->tpl_vars['val_i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val_i']->_loop = false;
 $_smarty_tpl->tpl_vars['key_i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['main']->value->constants[$_smarty_tpl->tpl_vars['key']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val_i']->key => $_smarty_tpl->tpl_vars['val_i']->value){
$_smarty_tpl->tpl_vars['val_i']->_loop = true;
 $_smarty_tpl->tpl_vars['key_i']->value = $_smarty_tpl->tpl_vars['val_i']->key;
?>
                <tr>
                    <td width="30%"><?php echo $_smarty_tpl->tpl_vars['val_i']->value[2];?>
</td>
                    <td width="15%"><?php echo $_smarty_tpl->tpl_vars['key_i']->value;?>
</td>
                    <td width="55%">
                        <?php if ($_smarty_tpl->tpl_vars['val_i']->value[1]=='text'){?>
                            <input class="text_input" type="text" value="<?php echo htmlspecialchars(stripcslashes(urldecode($_smarty_tpl->tpl_vars['val_i']->value[0])), ENT_QUOTES, 'UTF-8', true);?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key_i']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['val_i']->value[1]=='textarea'){?>
                            <textarea name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key_i']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="textarea"><?php echo stripcslashes(urldecode($_smarty_tpl->tpl_vars['val_i']->value[0]));?>
</textarea>
                        <?php }?>
                    </td>
                </tr>
                <?php } ?>
            <?php } ?>
        </table>

        <div class="buttons">
            <input class="button" type="submit" title="<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('form','form_button_save_title');?>
" value="<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('form','form_button_save_text');?>
" />
        </div>

        <div class="form_end"></div>
    </form>
</div>
<?php }} ?>