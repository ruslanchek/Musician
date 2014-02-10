<?php /* Smarty version Smarty 3.1.4, created on 2014-02-10 16:28:59
         compiled from "/Volumes/Black/Users/Ruslan/Sites/musician/templates/modules/contacts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214294147752ea255fcad438-82899438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1617511f4fc4ca784ff379c939ab61478d8e94c7' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/musician/templates/modules/contacts.tpl',
      1 => 1392035336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214294147752ea255fcad438-82899438',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ea255fd038b',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ea255fd038b')) {function content_52ea255fd038b($_smarty_tpl) {?><div class="cl-pane-content contacts">
    <div class="right-block social-block">
        <?php echo $_smarty_tpl->getSubTemplate ("include/common/twitter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>

    <div class="contact-info">
        <big>Организация концертов</big>
        <span class="orange">+7 (925)</span> <span>765-43-21</span>
        Концертный директор Сатлер Светлана
    </div>

    <div class="social-block-small">
        <p>Социальные сети</p>

        <span class="footer-social">
            <a class="fb" href="#"></a>
            <a class="vk" href="#"></a>
            <a class="tw" href="#"></a>
        </span>
    </div>

    <div class="contact-form">
        <h2>Написать письмо*</h2>

        <div class="form-message"></div>

        <div class="disclaimer">
            * Здесь принимаются только рабочие и творческие предложения. Эта форма сделана для вашего удобства, друзья.
        </div>

        <form action="" id="contact-form">
            <input type="text" placeholder="Ваше имя" id="form-name" />
            <input type="text" placeholder="Электронная почта" id="form-email"/>
            <textarea placeholder="Сообщение" id="form-message"></textarea>

            <input class="float-right" type="submit" value="Отправить"/>
        </form>
    </div>
</div><?php }} ?>