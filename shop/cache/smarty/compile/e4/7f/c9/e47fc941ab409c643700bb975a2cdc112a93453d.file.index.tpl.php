<?php /* Smarty version Smarty-3.1.13, created on 2013-08-16 12:35:46
         compiled from "/Users/yves/IdeaProjects/elcigaretos/shop/themes/default/mobile/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1348523668520e1ca203c227-33876263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e47fc941ab409c643700bb975a2cdc112a93453d' => 
    array (
      0 => '/Users/yves/IdeaProjects/elcigaretos/shop/themes/default/mobile/index.tpl',
      1 => 1366892592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1348523668520e1ca203c227-33876263',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520e1ca2055373_47200004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520e1ca2055373_47200004')) {function content_520e1ca2055373_47200004($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>