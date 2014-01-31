<?php /* Smarty version Smarty 3.1.4, created on 2014-01-09 15:31:58
         compiled from "/Volumes/Black/Users/Ruslan/Sites/redactorcms2/templates/include/common/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55446140752ce88ae37e9c7-37269412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63c65925a5a8388d392bc4617dac9d7297f81c78' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/redactorcms2/templates/include/common/head.tpl',
      1 => 1389262573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55446140752ce88ae37e9c7-37269412',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ce88ae4018b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce88ae4018b')) {function content_52ce88ae4018b($_smarty_tpl) {?><title><?php echo $_smarty_tpl->tpl_vars['core']->value->page['title'];?>
</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['core']->value->page['description'];?>
" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['core']->value->page['keywords'];?>
" />

<meta charset="utf-8">
<meta name="viewport" content="width=900, maximum-scale=1"/>

<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="/resources/css/kube.min.css"/>
<link rel="stylesheet" type="text/css" href="/resources/css/master.css"/>

<link rel="stylesheet" type="text/css" href="/resources/css/kube.min.css"/>
<link rel="stylesheet" type="text/css" href="/resources/css/master.css"/>
<link rel="stylesheet" type="text/css" href="/resources/js/plugins/fancybox/jquery.fancybox.css"/>

<script src="/resources/js/jquery-2.0.2.min.js"></script>
<script src="/resources/js/plugins/jquery.appear.js"></script>
<script src="/resources/js/plugins/tree/jquery.cookie.js"></script>
<script src="/resources/js/plugins/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
<script src="/resources/js/plugins/fancybox/jquery.fancybox.pack.js"></script>
<script src="/resources/js/plugins/tree/jquery.treeview.js"></script>
<script src="/resources/js/gts.core.js"></script>


    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


<?php echo $_smarty_tpl->tpl_vars['core']->value->getConstant('scripts','head_code');?>
<?php }} ?>