<?php /* Smarty version Smarty-3.1.13, created on 2013-08-16 12:35:41
         compiled from "/Users/yves/IdeaProjects/elcigaretos/shop/themes/default/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1378819597520e1c9d464a63-68108081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dc6c29bca9b1abbc790fc1bfa30aaef3201603a' => 
    array (
      0 => '/Users/yves/IdeaProjects/elcigaretos/shop/themes/default/category-count.tpl',
      1 => 1366892592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1378819597520e1c9d464a63-68108081',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520e1c9d4ad326_91466687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520e1c9d4ad326_91466687')) {function content_520e1c9d4ad326_91466687($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0){?>
	<?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1){?>
		<?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }?>
<?php }?><?php }} ?>