<?php /* Smarty version Smarty 3.1.4, created on 2012-09-25 19:21:45
         compiled from "/home/sporthimki/www/admin/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12098144445061cc09498e30-95553630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90e908284642059a09d6d7af5f87c238e3dd38d9' => 
    array (
      0 => '/home/sporthimki/www/admin/templates/login.tpl',
      1 => 1348490267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12098144445061cc09498e30-95553630',
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
  'unifunc' => 'content_5061cc09587d8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5061cc09587d8')) {function content_5061cc09587d8($_smarty_tpl) {?><!DOCTYPE html>
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