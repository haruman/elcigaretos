<?php /* Smarty version Smarty-3.1.13, created on 2013-08-16 12:35:50
         compiled from "/Users/yves/IdeaProjects/elcigaretos/shop/themes/default/mobile/page-title.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1020969889520e1ca607cb21-71945987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e184e0acb88b093b4468cdd7ff8aa7e23fd2fa5' => 
    array (
      0 => '/Users/yves/IdeaProjects/elcigaretos/shop/themes/default/mobile/page-title.tpl',
      1 => 1366892592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1020969889520e1ca607cb21-71945987',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'meta_title' => 0,
    'shop_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520e1ca60f6db7_54545732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520e1ca60f6db7_54545732')) {function content_520e1ca60f6db7_54545732($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Users/yves/IdeaProjects/elcigaretos/shop/tools/smarty/plugins/modifier.escape.php';
?><?php if (!isset($_smarty_tpl->tpl_vars['page_title']->value)&&isset($_smarty_tpl->tpl_vars['meta_title']->value)&&$_smarty_tpl->tpl_vars['meta_title']->value!=$_smarty_tpl->tpl_vars['shop_name']->value){?>
	<?php $_smarty_tpl->tpl_vars['page_title'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'htmlall', 'UTF-8'), null, 0);?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['page_title']->value)){?>
	<div data-role="header" class="clearfix navbartop" data-position="inline">
		<h1><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h1>
	</div><!-- /navbartop -->
<?php }?><?php }} ?>