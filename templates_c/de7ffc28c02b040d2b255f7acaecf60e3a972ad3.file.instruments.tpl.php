<?php /* Smarty version Smarty 3.1.4, created on 2014-02-19 01:06:46
         compiled from "/Volumes/Black/Users/Ruslan/Sites/musician/templates/modules/instruments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102176115552ea255fbcb0f7-88679357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de7ffc28c02b040d2b255f7acaecf60e3a972ad3' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/musician/templates/modules/instruments.tpl',
      1 => 1392042453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102176115552ea255fbcb0f7-88679357',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ea255fca5ae',
  'variables' => 
  array (
    'core' => 0,
    'instruments' => 0,
    'instrument' => 0,
    'i' => 0,
    'image' => 0,
    'gallery' => 0,
    'ig' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ea255fca5ae')) {function content_52ea255fca5ae($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['instruments'] = new Smarty_variable($_smarty_tpl->tpl_vars['core']->value->getInstruments(), null, 0);?>

<div class="cl-pane-content">
    <?php  $_smarty_tpl->tpl_vars['instrument'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['instrument']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['instruments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['instrument']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['instrument']->key => $_smarty_tpl->tpl_vars['instrument']->value){
$_smarty_tpl->tpl_vars['instrument']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['instrument']->key;
 $_smarty_tpl->tpl_vars['instrument']->index++;
 $_smarty_tpl->tpl_vars['instrument']->first = $_smarty_tpl->tpl_vars['instrument']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['instrument_menu']['first'] = $_smarty_tpl->tpl_vars['instrument']->first;
?>
    <?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable($_smarty_tpl->tpl_vars['core']->value->getItemSingleImage('section_37',$_smarty_tpl->tpl_vars['instrument']->value['id'],'col_252'), null, 0);?>
    <div class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['instrument_menu']['first']){?>active<?php }?> instrument-item instrument<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['instrument']->value['id'];?>
">
        <div class="instrument-wrapper">
            <img alt="<?php echo $_smarty_tpl->tpl_vars['instrument']->value['name'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['image']->value['path'];?>
<?php echo $_smarty_tpl->tpl_vars['image']->value['name'];?>
.<?php echo $_smarty_tpl->tpl_vars['image']->value['extension'];?>
"/>
        </div>
    </div>
    <?php } ?>

    <?php  $_smarty_tpl->tpl_vars['instrument'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['instrument']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['instruments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['instrument']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['instrument']->key => $_smarty_tpl->tpl_vars['instrument']->value){
$_smarty_tpl->tpl_vars['instrument']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['instrument']->key;
 $_smarty_tpl->tpl_vars['instrument']->index++;
 $_smarty_tpl->tpl_vars['instrument']->first = $_smarty_tpl->tpl_vars['instrument']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['instrument_item']['first'] = $_smarty_tpl->tpl_vars['instrument']->first;
?>
    <div class="instruments <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['instrument_item']['first']){?>active<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['instrument']->value['id'];?>
">

        <?php $_smarty_tpl->tpl_vars['gallery'] = new Smarty_variable($_smarty_tpl->tpl_vars['core']->value->getItemImageGallery('section_37',$_smarty_tpl->tpl_vars['instrument']->value['id'],'col_254'), null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['ig'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ig']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gallery']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['ig']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['ig']->key => $_smarty_tpl->tpl_vars['ig']->value){
$_smarty_tpl->tpl_vars['ig']->_loop = true;
 $_smarty_tpl->tpl_vars['ig']->index++;
 $_smarty_tpl->tpl_vars['ig']->first = $_smarty_tpl->tpl_vars['ig']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['instrument_gallery']['first'] = $_smarty_tpl->tpl_vars['ig']->first;
?>
        <img alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['instrument']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ig']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" data-instrument_id="<?php echo $_smarty_tpl->tpl_vars['instrument']->value['id'];?>
" data-image_id="<?php echo $_smarty_tpl->tpl_vars['ig']->value['id'];?>
" class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['instrument_gallery']['first']){?>active<?php }?> instrument-big-image" src="<?php echo $_smarty_tpl->tpl_vars['ig']->value['path'];?>
<?php echo $_smarty_tpl->tpl_vars['ig']->value['name'];?>
.<?php echo $_smarty_tpl->tpl_vars['ig']->value['extension'];?>
"/>
        <?php } ?>

        <div class="video-view-descr">
            <h6><?php echo $_smarty_tpl->tpl_vars['instrument']->value['name'];?>
</h6>
            <p><?php echo $_smarty_tpl->tpl_vars['instrument']->value['desc'];?>
</p>

            <div class="instruments-preview" data-instrument_id="<?php echo $_smarty_tpl->tpl_vars['instrument']->value['id'];?>
">
                <?php  $_smarty_tpl->tpl_vars['ig'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ig']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gallery']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['ig']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['ig']->key => $_smarty_tpl->tpl_vars['ig']->value){
$_smarty_tpl->tpl_vars['ig']->_loop = true;
 $_smarty_tpl->tpl_vars['ig']->index++;
 $_smarty_tpl->tpl_vars['ig']->first = $_smarty_tpl->tpl_vars['ig']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['instrument_gallery_preview']['first'] = $_smarty_tpl->tpl_vars['ig']->first;
?>
                <div data-instrument_id="<?php echo $_smarty_tpl->tpl_vars['instrument']->value['id'];?>
" data-image_id="<?php echo $_smarty_tpl->tpl_vars['ig']->value['id'];?>
" class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['instrument_gallery_preview']['first']){?>active<?php }?> instruments-preview-item">
                    <img alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['instrument']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ig']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" src="<?php echo $_smarty_tpl->tpl_vars['ig']->value['path'];?>
<?php echo $_smarty_tpl->tpl_vars['ig']->value['name'];?>
_mini.<?php echo $_smarty_tpl->tpl_vars['ig']->value['extension'];?>
"/>
                </div>
                <?php } ?>
            </div>
        </div>

        <div class="full-descr" data-instrument_id="<?php echo $_smarty_tpl->tpl_vars['instrument']->value['id'];?>
">
            <div class="full-descr-content">
                <a class="close" href="#"></a>
                <h6><?php echo $_smarty_tpl->tpl_vars['instrument']->value['name'];?>
</h6>

                <?php echo $_smarty_tpl->tpl_vars['instrument']->value['text'];?>

            </div>
        </div>
    </div>
    <?php } ?>
</div><?php }} ?>