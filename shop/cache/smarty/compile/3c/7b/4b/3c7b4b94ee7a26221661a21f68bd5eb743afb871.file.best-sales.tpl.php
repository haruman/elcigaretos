<?php /* Smarty version Smarty-3.1.13, created on 2013-08-16 12:35:44
         compiled from "/Users/yves/IdeaProjects/elcigaretos/shop/themes/default/mobile/best-sales.tpl" */ ?>
<?php /*%%SmartyHeaderCode:279310389520e1ca07fda58-03864941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c7b4b94ee7a26221661a21f68bd5eb743afb871' => 
    array (
      0 => '/Users/yves/IdeaProjects/elcigaretos/shop/themes/default/mobile/best-sales.tpl',
      1 => 1366892592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '279310389520e1ca07fda58-03864941',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'manufacturer' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520e1ca08e6050_90259493',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520e1ca08e6050_90259493')) {function content_520e1ca08e6050_90259493($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if (!isset($_smarty_tpl->tpl_vars['errors']->value)||!sizeof($_smarty_tpl->tpl_vars['errors']->value)){?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'page_title', null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Top sellers'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->getSubTemplate ('./page-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<div data-role="content" id="content">
	<?php if (!empty($_smarty_tpl->tpl_vars['manufacturer']->value->description)||!empty($_smarty_tpl->tpl_vars['manufacturer']->value->short_description)){?>
		<div class="category_desc clearfix">
			<?php if (!empty($_smarty_tpl->tpl_vars['manufacturer']->value->short_description)){?>
				<p><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value->short_description;?>
</p>
				<p class="hide_desc"><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value->description;?>
</p>
				<a href="#" data-theme="a" data-role="button" data-mini="true" data-inline="true" data-icon="arrow-d" class="lnk_more" onclick="$(this).prev().slideDown('slow'); $(this).hide(); return false;" data-ajax="false"><?php echo smartyTranslate(array('s'=>'More'),$_smarty_tpl);?>
</a>
			<?php }else{ ?>
				<p><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value->description;?>
</p>
			<?php }?>
		</div><!-- .category_desc -->
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['products']->value){?>
			<div class="clearfix">
				<?php echo $_smarty_tpl->getSubTemplate ("./category-product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('container_class'=>"container-sort"), 0);?>

			</div>
			<hr/>
			<?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<?php echo $_smarty_tpl->getSubTemplate ("./category-product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>

			<?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			
	<?php }else{ ?>
		<p class="warning"><?php echo smartyTranslate(array('s'=>'No top sellers for the moment.'),$_smarty_tpl);?>
</p>
	<?php }?>
		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- #content -->
<?php }?>
<?php }} ?>