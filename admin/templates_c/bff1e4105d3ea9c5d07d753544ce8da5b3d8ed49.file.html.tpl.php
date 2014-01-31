<?php /* Smarty version Smarty 3.1.4, created on 2014-01-18 03:18:44
         compiled from "/Volumes/Black/Users/Ruslan/Sites/sdnfull/admin/templates/system/form_fields/html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126889595652d9ba54090347-30826788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bff1e4105d3ea9c5d07d753544ce8da5b3d8ed49' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/sdnfull/admin/templates/system/form_fields/html.tpl',
      1 => 1389999538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126889595652d9ba54090347-30826788',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52d9ba5411f11',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d9ba5411f11')) {function content_52d9ba5411f11($_smarty_tpl) {?><div class="item_block">
    <label class="label" for="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['help'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</label>

    <div class="html_window">
        <textarea class="textarea" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['index']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
</textarea>
    </div>
</div>


<link rel="stylesheet" href="/admin/codemirror/lib/codemirror.css">
<script src="/admin/codemirror/lib/codemirror.js"></script>
<script src="/admin/codemirror/mode/xml/xml.js"></script>
<script src="/admin/codemirror/mode/javascript/javascript.js"></script>
<script src="/admin/codemirror/mode/css/css.js"></script>
<script src="/admin/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<script src="/admin/codemirror/mode/smarty/smarty.js"></script>
<script src="/admin/codemirror/mode/smartymixed/smartymixed.js"></script>

<script type="text/javascript">initHTMLEditor($('#<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
'), '<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
')</script><?php }} ?>