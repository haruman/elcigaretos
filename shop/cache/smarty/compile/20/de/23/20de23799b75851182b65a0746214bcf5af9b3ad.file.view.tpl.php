<?php /* Smarty version Smarty-3.1.13, created on 2013-08-16 15:31:06
         compiled from "/Users/yves/IdeaProjects/elcigaretos/shop/admin3570/themes/default/template/controllers/backup/helpers/view/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125675296520e299a80a643-20795532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20de23799b75851182b65a0746214bcf5af9b3ad' => 
    array (
      0 => '/Users/yves/IdeaProjects/elcigaretos/shop/admin3570/themes/default/template/controllers/backup/helpers/view/view.tpl',
      1 => 1366892586,
      2 => 'file',
    ),
    '60d71760fe435f13b7cfb1e5935b2ef164c5c4e0' => 
    array (
      0 => '/Users/yves/IdeaProjects/elcigaretos/shop/admin3570/themes/default/template/helpers/view/view.tpl',
      1 => 1366892586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125675296520e299a80a643-20795532',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_toolbar' => 0,
    'toolbar_btn' => 0,
    'toolbar_scroll' => 0,
    'title' => 0,
    'name_controller' => 0,
    'hookName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520e299a923430_15879843',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520e299a923430_15879843')) {function content_520e299a923430_15879843($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['show_toolbar']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate ("toolbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('toolbar_btn'=>$_smarty_tpl->tpl_vars['toolbar_btn']->value,'toolbar_scroll'=>$_smarty_tpl->tpl_vars['toolbar_scroll']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value), 0);?>

<?php }?>

<div class="leadin"></div>



	<div class="conf"><?php echo smartyTranslate(array('s'=>'Beginning the download ...'),$_smarty_tpl);?>
</div>

	<p><?php echo smartyTranslate(array('s'=>'Backup files should automatically download.'),$_smarty_tpl);?>
</p>

	<p><?php echo smartyTranslate(array('s'=>'If not,'),$_smarty_tpl);?>
 <b><a href="<?php echo $_smarty_tpl->tpl_vars['url_backup']->value;?>
"><?php echo smartyTranslate(array('s'=>'please click here!'),$_smarty_tpl);?>
</a></b></p>

	<iframe width="0" height="0" scrolling="no" frameborder="0" src="<?php echo $_smarty_tpl->tpl_vars['url_backup']->value;?>
"></iframe>



<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminView'),$_smarty_tpl);?>

<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)){?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
View<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php }elseif(isset($_GET['controller'])){?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
View<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php }?>
<?php }} ?>