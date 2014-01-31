<?php /* Smarty version Smarty 3.1.4, created on 2014-01-09 14:52:40
         compiled from "/Volumes/Black/Users/Ruslan/Sites/redactorcms2/templates/include/common/catalog-full-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106939184452ce7f78d77c93-12922233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b5866a9fce3a19b2a9eb52093b1f70bcad6f1ba' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/redactorcms2/templates/include/common/catalog-full-list.tpl',
      1 => 1389262573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106939184452ce7f78d77c93-12922233',
  'function' => 
  array (
    'catalog_branch' => 
    array (
      'parameter' => 
      array (
        'level' => 0,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'core' => 0,
    'catalog_groups' => 0,
    'cl' => 0,
    'i' => 0,
    'group' => 0,
    'branch_data' => 0,
    'data' => 0,
    'item' => 0,
    'level' => 0,
    'cs' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ce7f79038da',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce7f79038da')) {function content_52ce7f79038da($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['catalog_groups'] = new Smarty_variable($_smarty_tpl->tpl_vars['core']->value->getCatalogGroups(), null, 0);?>

<?php $_smarty_tpl->tpl_vars['cl'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['catalog_groups']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['cs'] = new Smarty_variable(ceil($_smarty_tpl->tpl_vars['cl']->value/4), null, 0);?>

<div class="units-row-end">
    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
    <div class="unit-20">
        <ul class="catalog-map">
        <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['catalog_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>

            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['group']->value['path'];?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</a>

                <?php $_smarty_tpl->tpl_vars['branch_data'] = new Smarty_variable($_smarty_tpl->tpl_vars['core']->value->getCatalogBranchByGroupId($_smarty_tpl->tpl_vars['group']->value['id']), null, 0);?>

                <?php if (count($_smarty_tpl->tpl_vars['branch_data']->value)>0){?>
                    <?php if (!function_exists('smarty_template_function_catalog_branch')) {
    function smarty_template_function_catalog_branch($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['catalog_branch']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
                        <ul>
                            <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_smarty_tpl->tpl_vars["i"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value){
$_smarty_tpl->tpl_vars["item"]->_loop = true;
 $_smarty_tpl->tpl_vars["i"]->value = $_smarty_tpl->tpl_vars["item"]->key;
?>
                                <?php if (is_array($_smarty_tpl->tpl_vars['item']->value)){?>
                                    <li <?php if ($_smarty_tpl->tpl_vars['item']->value['id']==$_smarty_tpl->tpl_vars['core']->value->page['id']){?>class="active"<?php }?>>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['path'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>

                                        <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['childrens'])){?>
                                            <?php smarty_template_function_catalog_branch($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['item']->value['childrens'],'level'=>$_smarty_tpl->tpl_vars['level']->value+1));?>

                                        <?php }?>
                                    </li>
                                <?php }else{ ?>
                                    <li <?php if ($_smarty_tpl->tpl_vars['item']->value['id']==$_smarty_tpl->tpl_vars['core']->value->page['id']){?>class="active"<?php }?>>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['path'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                                    </li>
                                <?php }?>
                            <?php } ?>
                        </ul><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>


                    <?php smarty_template_function_catalog_branch($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['branch_data']->value));?>

                <?php }?>
            </li>

            <?php if ($_smarty_tpl->tpl_vars['i']->value>$_smarty_tpl->tpl_vars['cs']->value){?>
                </ul>
            </div>
                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
            <div class="unit-20">
                <ul class="catalog-map">
            <?php }?>
        <?php } ?>
        </ul>
    </div>
</div>

<?php }} ?>