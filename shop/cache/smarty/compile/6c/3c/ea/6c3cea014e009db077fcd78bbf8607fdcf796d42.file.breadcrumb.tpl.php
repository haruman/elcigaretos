<?php /* Smarty version Smarty-3.1.13, created on 2013-08-16 12:35:41
         compiled from "/Users/yves/IdeaProjects/elcigaretos/shop/themes/default/breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165587223520e1c9d224b08-06091384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c3cea014e009db077fcd78bbf8607fdcf796d42' => 
    array (
      0 => '/Users/yves/IdeaProjects/elcigaretos/shop/themes/default/breadcrumb.tpl',
      1 => 1366892592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165587223520e1c9d224b08-06091384',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir' => 0,
    'img_dir' => 0,
    'path' => 0,
    'category' => 0,
    'navigationPipe' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520e1c9d2c6029_93317808',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520e1c9d2c6029_93317808')) {function content_520e1c9d2c6029_93317808($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Users/yves/IdeaProjects/elcigaretos/shop/tools/smarty/plugins/modifier.escape.php';
?>

<!-- Breadcrumb -->
<?php if (isset(Smarty::$_smarty_vars['capture']['path'])){?><?php $_smarty_tpl->tpl_vars['path'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['path'], null, 0);?><?php }?>
<div class="breadcrumb">
	<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Return to Home'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/home.gif" height="26" width="26" alt="<?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
" /></a>
	<?php if (isset($_smarty_tpl->tpl_vars['path']->value)&&$_smarty_tpl->tpl_vars['path']->value){?>
		<span class="navigation-pipe" <?php if (isset($_smarty_tpl->tpl_vars['category']->value)&&isset($_smarty_tpl->tpl_vars['category']->value->id_category)&&$_smarty_tpl->tpl_vars['category']->value->id_category==1){?>style="display:none;"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['navigationPipe']->value, 'html', 'UTF-8');?>
</span>
		<?php if (!strpos($_smarty_tpl->tpl_vars['path']->value,'span')){?>
			<span class="navigation_page"><?php echo $_smarty_tpl->tpl_vars['path']->value;?>
</span>
		<?php }else{ ?>
			<?php echo $_smarty_tpl->tpl_vars['path']->value;?>

		<?php }?>
	<?php }?>
</div>
<!-- /Breadcrumb --><?php }} ?>