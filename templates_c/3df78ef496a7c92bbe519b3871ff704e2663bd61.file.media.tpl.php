<?php /* Smarty version Smarty 3.1.4, created on 2014-01-31 18:48:40
         compiled from "/Volumes/Black/Users/Ruslan/Sites/musician/templates/modules/media.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213397514552ea255fb89593-60202869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3df78ef496a7c92bbe519b3871ff704e2663bd61' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/musician/templates/modules/media.tpl',
      1 => 1391179701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213397514552ea255fb89593-60202869',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ea255fbc388',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ea255fbc388')) {function content_52ea255fbc388($_smarty_tpl) {?><div class="cl-pane-content">
    <div id="media-content">
        <div id="photo" class="js-masonry">

        </div>
    </div>
    <div class="clear"></div>
    <div id="media-pager" class="pages-nav"></div>
</div>


    <script id="media-list-items" type="text/x-handlebars-template">
        {{#each items}}
        <div class="item"><a href="#"><img src="{{this.path}}{{this.name}}_pic.{{this.extension}}"/></a></div>
        {{/each}}
    </script>
<?php }} ?>