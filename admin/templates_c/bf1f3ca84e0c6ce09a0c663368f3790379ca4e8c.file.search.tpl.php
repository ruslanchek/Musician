<?php /* Smarty version Smarty 3.1.4, created on 2014-01-20 05:38:59
         compiled from "/Volumes/Black/Users/Ruslan/Sites/sdnfull/admin/templates/modules/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115454914452dc69dd086d97-16339421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf1f3ca84e0c6ce09a0c663368f3790379ca4e8c' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/sdnfull/admin/templates/modules/search.tpl',
      1 => 1390181937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115454914452dc69dd086d97-16339421',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52dc69dd08815',
  'variables' => 
  array (
    'main' => 0,
    'index_count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dc69dd08815')) {function content_52dc69dd08815($_smarty_tpl) {?><h1><?php echo $_smarty_tpl->tpl_vars['main']->value->h1;?>
</h1>

<div class="sections_list_tools list_menu_buttons">
    <a class="button" href="javascript:void(0)" tabindex="1" title="Очистить индексы" onclick="clearIndex()">
        <span>
            <img class="button_icon" src="/admin/img/frames/e.gif">
            <b>Очистить индексы</b>
        </span>
    </a>

    <a class="button" href="javascript:void(0)" tabindex="1" title="Проиндексировать" onclick="updateIndex()">
        <span>
            <img class="button_icon" src="/admin/img/frames/e.gif">
            <b>Проиндексировать</b>
        </span>
    </a>

    <div class="cl"></div>
</div>


<div class="list_table">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <?php if ($_smarty_tpl->tpl_vars['index_count']->value<=1){?>
            <tr class="unactive empty">
                <td>&nbsp;</td>
                <td align="center" id="status_message">Таблица индексов пуста</td>
                <td>&nbsp;</td>
            </tr>
            <?php }else{ ?>
                <tr class="unactive empty">
                    <td>&nbsp;</td>
                    <td align="center" id="status_message">Проиндексированно: <?php echo $_smarty_tpl->tpl_vars['index_count']->value;?>
</td>
                    <td>&nbsp;</td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</div>

<p id="indexing_indicate"></p>
<div class="list_table" id="result_of_indexing" style="display: none">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="fulltable" class="result_of_mail_tab">
        <tr>
            <th width="1%">Код</th>
            <th width="1%"></th>
            <th width="35%" align="left">Страница</th>
            <th width="32%" align="left">Адрес</th>
            <th width="31%" align="left">Реферрер</th>
        </tr>
    </table>
</div><?php }} ?>