<?php /* Smarty version Smarty 3.1.4, created on 2014-01-09 16:13:27
         compiled from "/Volumes/Black/Users/Ruslan/Sites/redactorcms2/admin/templates/system/form_fields/html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184329890452ce87b835a1b4-80250625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bd828e36ee58ae8d3f1c397726bb6c0c809112c' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/redactorcms2/admin/templates/system/form_fields/html.tpl',
      1 => 1389269591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184329890452ce87b835a1b4-80250625',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ce87b84830e',
  'variables' => 
  array (
    'item' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce87b84830e')) {function content_52ce87b84830e($_smarty_tpl) {?><div class="item_block">
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