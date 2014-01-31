<?php /* Smarty version Smarty 3.1.4, created on 2014-01-18 03:18:42
         compiled from "/Volumes/Black/Users/Ruslan/Sites/sdnfull/admin/templates/modules/templates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10429744952d9ba521fa7e8-11123461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e284550078d3a180554da971956674deda9d227' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/sdnfull/admin/templates/modules/templates.tpl',
      1 => 1389999538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10429744952d9ba521fa7e8-11123461',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52d9ba5232a02',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d9ba5232a02')) {function content_52d9ba5232a02($_smarty_tpl) {?><h1><?php echo $_smarty_tpl->tpl_vars['main']->value->h1;?>
</h1>

<?php if ($_smarty_tpl->tpl_vars['main']->value->module_mode=='templates'){?>
    <?php if ($_GET['action']=='edit'){?>
        <div class="left_col">
            <?php echo $_smarty_tpl->getSubTemplate ("system/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>

        <div class="right_col">
        <?php echo $_smarty_tpl->getSubTemplate ("modules/templates.templates.edit.tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>

        <div class="cl"></div>
    <?php }else{ ?>
        <?php echo $_smarty_tpl->getSubTemplate ("system/section_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>
<?php }elseif($_smarty_tpl->tpl_vars['main']->value->module_mode=='zones'){?>
    <?php if ($_GET['action']=='edit'){?>
        <div class="left_col">
            <?php echo $_smarty_tpl->getSubTemplate ("system/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>

        <div class="right_col">
        <?php echo $_smarty_tpl->getSubTemplate ("modules/templates.zones.edit.tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>

        <div class="cl"></div>
    <?php }else{ ?>
        <?php echo $_smarty_tpl->getSubTemplate ("system/section_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>
<?php }?><?php }} ?>