<?php /* Smarty version Smarty 3.1.4, created on 2012-03-24 09:57:04
         compiled from "/Users/ruslan/Documents/sites/pincher/admin/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12858676394f6d7040e8b126-01943304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '599c9d7fb2e3f610dd9943e75be333756579b4ec' => 
    array (
      0 => '/Users/ruslan/Documents/sites/pincher/admin/templates/login.tpl',
      1 => 1332571836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12858676394f6d7040e8b126-01943304',
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
  'unifunc' => 'content_4f6d704100cb8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f6d704100cb8')) {function content_4f6d704100cb8($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $_smarty_tpl->tpl_vars['main']->value->title;?>
</title>
                
        <link rel="stylesheet" type="text/css" href="/admin/css/login.css" media="all" />
        <link rel="shortcut icon" type="image/x-icon" href="/admin/img/icons/favicon.ico">
        
        <script type="text/javascript" src="/admin/js/jquery.js"></script>
        <script type="text/javascript" src="/admin/js/login.js"></script>
    </head>
    
    <body>
        <img src="/admin/img/bg/bg.jpg" id="bg" />
        <div class="content">
            <div class="logo"></div>

            <div class="login_form">
                <div class="login_form_block rotation">
                    <?php if ($_smarty_tpl->tpl_vars['login']->value->error){?>
                    <div class="error"><?php echo $_smarty_tpl->tpl_vars['login']->value->error;?>
</div>
                    <?php }?>

                    <form method="POST" action="/admin/?action=login">
                        <label for="auth_login"><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('login','form_login_label');?>
</label><br>
                        <input class="textinput" id="auth_login" name="auth_login" type="text" tabindex="1" />

                        <label for="auth_password"><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('login','form_password_label');?>
</label><br>
                        <input class="textinput" id="auth_password" name="auth_password" type="password" tabindex="2" />

                        <label><input type="checkbox" class="checkbox" name="auth_attach_ip" tabindex="3"><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('login','form_attach_ip_label');?>
</label>

                        <div class="submit">
                            <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('login','form_button_enter_text');?>
" tabindex="4" />
                        </div>
                    </form>
                </div>

                <div class="footer">
                    <p>
                        &copy; 2007&ndash;<?php echo $_smarty_tpl->tpl_vars['main']->value->config['current_year'];?>

                        <?php echo $_smarty_tpl->tpl_vars['main']->value->getText('footer','copyright_text');?>
<br>
                        <em><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('footer','version');?>
 <?php echo $_smarty_tpl->tpl_vars['main']->value->config['current_version'];?>
</em>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html><?php }} ?>