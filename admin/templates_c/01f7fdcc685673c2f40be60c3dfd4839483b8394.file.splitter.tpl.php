<?php /* Smarty version Smarty 3.1.4, created on 2014-01-30 14:44:13
         compiled from "/Volumes/Black/Users/Ruslan/Sites/musician/admin/templates/system/fields_editor/splitter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39671423652ea2cfd201790-80913696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01f7fdcc685673c2f40be60c3dfd4839483b8394' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/musician/admin/templates/system/fields_editor/splitter.tpl',
      1 => 1389999538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39671423652ea2cfd201790-80913696',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'default' => 0,
    'new' => 0,
    'item' => 0,
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ea2cfd32a05',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ea2cfd32a05')) {function content_52ea2cfd32a05($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['default']->value){?>
<a href="javascript:void(0)" class="icon_action icon_delete_instance" onclick="fieldsEditor.deleteField('<?php if ($_smarty_tpl->tpl_vars['new']->value){?><?php echo $_smarty_tpl->tpl_vars['new']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
<?php }?>', '<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('sections','form_editor_delete_field_confirm');?>
', <?php if ($_smarty_tpl->tpl_vars['new']->value){?>0<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['main']->value->item_data['id'];?>
<?php }?>)" title="<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('sections','form_editor_delete_field');?>
"></a>
<?php }?>

<div class="collapsable_fieldlist_item_tools">
    <fieldset>
        <?php if ($_smarty_tpl->tpl_vars['new']->value){?>
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['main']->value->getText('sections','form_editor_tools_splitter');?>
" name="label**__**<?php echo $_smarty_tpl->tpl_vars['new']->value;?>
" />
        <?php }else{ ?>
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
" name="label**__**<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" />
        <?php }?>
        
        <input type="hidden" value="separator" name="type**__**<?php if ($_smarty_tpl->tpl_vars['new']->value){?><?php echo $_smarty_tpl->tpl_vars['new']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
<?php }?>" />
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['sort'];?>
" name="sort**__**<?php if ($_smarty_tpl->tpl_vars['new']->value){?><?php echo $_smarty_tpl->tpl_vars['new']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
<?php }?>" rel="sort" />
    </fieldset>
</div><?php }} ?>