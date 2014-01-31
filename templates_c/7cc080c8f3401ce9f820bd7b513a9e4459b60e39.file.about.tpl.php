<?php /* Smarty version Smarty 3.1.4, created on 2014-01-31 20:23:53
         compiled from "/Volumes/Black/Users/Ruslan/Sites/musician/templates/modules/about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113551584052ea255f8cc2c2-70238686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cc080c8f3401ce9f820bd7b513a9e4459b60e39' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/musician/templates/modules/about.tpl',
      1 => 1391185432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113551584052ea255f8cc2c2-70238686',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ea255f92798',
  'variables' => 
  array (
    'core' => 0,
    'news_item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ea255f92798')) {function content_52ea255f92798($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date')) include '/Volumes/Black/Users/Ruslan/Sites/musician/smarty/plugins/modifier.date.php';
?><div class="cl-pane-content">
    <div class="left-block">
        <h6>Учился в школе села Пересадовка</h6>

        <p>Уже учась в школе, Олег играл на трубе в детском эстрадном оркестре под руководством Семёна Деньковича, а
            также со специального разрешения играл на свадьбах со старшими товарищами. </p>

        <p>
            <small>Приобретённый таким образом опыт позволил ему в 1985 поступить сразу на второй курс музыкального
                училища, которое он закончил по
            </small>
        </p>
        <span class="author">Джейн Монхайт привезет в Москву!</span>
    </div>

    <div class="news-block">
        <h3>Новость</h3>

        <?php $_smarty_tpl->tpl_vars['news_item'] = new Smarty_variable($_smarty_tpl->tpl_vars['core']->value->getLastNewsItems(1), null, 0);?>
        <p><?php echo $_smarty_tpl->tpl_vars['news_item']->value['name'];?>
<br/>
            <span class="date"><?php echo smarty_modifier_date($_smarty_tpl->tpl_vars['news_item']->value['date'],"date");?>
</span>
        </p>
    </div>

    <div class="career-block">
        <h2>Карьера</h2>

        <p>
            <small>Учился в общеобразовательной школе села Пересадовка (Николаевская область). Уже учась в школе,
                Олег играл на трубе в детском эстрадном оркестре под руководством Семёна Деньковича, а также со
                специального разрешения играл на свадьбах со старшими товарищами.
            </small>
        </p>

        <p class="career-text">Учился в общеобразовательной школе села Пересадовка (Николаевская область). Уже учась
            в школе, Олег играл на трубе в детском эстрадном оркестре под руководством Семёна Деньковича</p>

        <p>Приобретённый таким образом опыт позволил ему в 1985 поступить сразу на второй курс музыкального училища,
            которое
            он закончил по двум специальностям: дирижёр-хоровик и трубач.</p>
    </div>
</div><?php }} ?>