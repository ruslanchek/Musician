<?php /* Smarty version Smarty 3.1.4, created on 2014-01-30 14:45:17
         compiled from "/Volumes/Black/Users/Ruslan/Sites/musician/admin/templates/system/form_fields/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155082060852ea2d3d55d455-76486965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b84189e87582789ad5879d3a1acd5501578361ae' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/musician/admin/templates/system/form_fields/calendar.tpl',
      1 => 1389999538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155082060852ea2d3d55d455-76486965',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'index' => 0,
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ea2d3d758f1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ea2d3d758f1')) {function content_52ea2d3d758f1($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date')) include '/Volumes/Black/Users/Ruslan/Sites/musician/smarty/plugins/modifier.date.php';
?><div class="item_block">
    <label class="label" for="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['help'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</label>
    <div class="cl"></div>

    <input autocomplete="off" onblur="calendar.blurInput('<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
')" onfocus="calendar.focusInput('<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
')" class="text calendar_date" type="text" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" value="<?php echo smarty_modifier_date($_smarty_tpl->tpl_vars['item']->value['value'],'date');?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['index']->value+1;?>
" />

    <div class="d-shadow-small calendar_picker_frame" id="calendar_frame_<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
">
        <div class="d-shadow-small-wrap">
            <div class="calendar_frame" id="calendar_picker_instance_<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"></div>

            <div class="tb_block">
                <a rel="ok" class="tool_button blue_tb" href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('form','form_tool_action_ok');?>
</a>
                <a class="tool_button gray_tb" href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('form','form_tool_action_today');?>
</a>
                <div class="cl"></div>
            </div>

            <div class="d-sh-small-cn d-sh-small-tl"></div>
            <div class="d-sh-small-cn d-sh-small-tr"></div>
        </div>
        <div class="d-sh-small-cn d-sh-small-bl"></div>
        <div class="d-sh-small-cn d-sh-small-br"></div>
    </div>

    <div class="regular_button round_button_holder">
        <a href="javascript:void(0)" class="round_button" title="<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('form','form_button_calendar_date');?>
" onclick="calendar.openPicker('<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
')"><span class="date_picker"></span></a>
    </div>

    <input autocomplete="off" onclick="timepicker.openPicker('<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
')" class="text calendar_time" readonly="readonly" type="text" id="time_<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" value="<?php echo smarty_modifier_date($_smarty_tpl->tpl_vars['item']->value['value'],'time');?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['index']->value+1;?>
" />

    <div class="d-shadow-small calendar_time_picker_frame" id="calendar_time_frame_<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
">
        <div class="d-shadow-small-wrap">
            <div class="calendar-time_frame" id="calendar_time_picker_instance_<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
">

                <div class="timepicker_block">
                    <div class="tpb_block">
                        <div class="tpb_controls">
                            <a href="javascript:void(0)" class="h-up"></a>
                            <a href="javascript:void(0)" class="m-up"></a>
                            <a href="javascript:void(0)" class="h-dn"></a>
                            <a href="javascript:void(0)" class="m-dn"></a>
                        </div>

                        <div class="tpb_digit h-1">1</div>
                        <div class="tpb_digit h-2">2</div>
                        <div class="tpb_colon">:</div>
                        <div class="tpb_digit m-1">4</div>
                        <div class="tpb_digit m-2">7</div>

                        <div class="cl"></div>
                    </div>
                </div>

                <div class="tb_block">
                    <a rel="ok" class="tool_button blue_tb" href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('form','form_tool_action_ok');?>
</a>
                    <a class="tool_button gray_tb" href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['main']->value->getText('form','form_tool_action_now');?>
</a>
                    <div class="cl"></div>
                </div>

            </div>
            <div class="d-sh-small-cn d-sh-small-tl"></div>
            <div class="d-sh-small-cn d-sh-small-tr"></div>
        </div>
        <div class="d-sh-small-cn d-sh-small-bl"></div>
        <div class="d-sh-small-cn d-sh-small-br"></div>
    </div>

    <div class="regular_button round_button_holder">
        <a href="javascript:void(0)" class="round_button" title="<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('form','form_button_calendar_time');?>
" onclick="timepicker.openPicker('<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
')"><span class="time_picker"></span></a>
    </div>

    <input autocomplete="off" type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" id="parsed_<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
" />

    <div class="cl"></div>
</div><?php }} ?>