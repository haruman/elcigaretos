<?php /* Smarty version Smarty-3.1.13, created on 2013-08-16 12:35:47
         compiled from "/Users/yves/IdeaProjects/elcigaretos/shop/themes/default/mobile/order-detail-product-li.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1962928256520e1ca34396e0-09709894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4ad613695ca523cc07581eaffd5ed4bf8fe307a' => 
    array (
      0 => '/Users/yves/IdeaProjects/elcigaretos/shop/themes/default/mobile/order-detail-product-li.tpl',
      1 => 1366892592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1962928256520e1ca34396e0-09709894',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'return_allowed' => 0,
    'invoice' => 0,
    'is_guest' => 0,
    'order' => 0,
    'link' => 0,
    'img_dir' => 0,
    'productQuantity' => 0,
    'group_use_tax' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520e1ca368bfe5_42986811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520e1ca368bfe5_42986811')) {function content_520e1ca368bfe5_42986811($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Users/yves/IdeaProjects/elcigaretos/shop/tools/smarty/plugins/modifier.escape.php';
?>
<!-- Customized products -->



<!-- Classic products -->
<?php if ($_smarty_tpl->tpl_vars['product']->value['product_quantity']>$_smarty_tpl->tpl_vars['product']->value['customizationQuantityTotal']){?>
	<li class="item" id="cb-<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
" data-icon="back">
		<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value){?><a href="#" data-ajax="false"><?php }?>
		<h3>
			<?php if ($_smarty_tpl->tpl_vars['product']->value['download_hash']&&$_smarty_tpl->tpl_vars['invoice']->value&&$_smarty_tpl->tpl_vars['product']->value['display_filename']!=''){?>
				<?php if (isset($_smarty_tpl->tpl_vars['is_guest']->value)&&$_smarty_tpl->tpl_vars['is_guest']->value){?>
				<a href="<?php ob_start();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['filename'], 'htmlall', 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['download_hash'], 'htmlall', 'UTF-8');?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('get-file',true,null,"key=".$_tmp1."-".$_tmp2."&amp;id_order=".((string)$_smarty_tpl->tpl_vars['order']->value->id)."&secure_key=".((string)$_smarty_tpl->tpl_vars['order']->value->secure_key));?>
" title="<?php echo smartyTranslate(array('s'=>'Download this product'),$_smarty_tpl);?>
" data-ajax="false">
				<?php }else{ ?>
					<a href="<?php ob_start();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['filename'], 'htmlall', 'UTF-8');?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['download_hash'], 'htmlall', 'UTF-8');?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('get-file',true,null,"key=".$_tmp3."-".$_tmp4);?>
" title="<?php echo smartyTranslate(array('s'=>'Download this product'),$_smarty_tpl);?>
" data-ajax="false">
				<?php }?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/download_product.gif" class="icon" alt="<?php echo smartyTranslate(array('s'=>'Download product'),$_smarty_tpl);?>
" />
					<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['product_name'], 'htmlall', 'UTF-8');?>

				</a>
			<?php }else{ ?>
				<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['product_name'], 'htmlall', 'UTF-8');?>

			<?php }?>
		</h3>
		<p><strong><?php echo smartyTranslate(array('s'=>'Reference'),$_smarty_tpl);?>
</strong> <?php if ($_smarty_tpl->tpl_vars['product']->value['product_reference']){?><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['product_reference'], 'htmlall', 'UTF-8');?>
<?php }else{ ?>--<?php }?></p>
		<p><strong><?php echo smartyTranslate(array('s'=>'Quantity'),$_smarty_tpl);?>
</strong></p>
		<fieldset><input class="order_qte_input" data-mini="true" name="order_qte_input[<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_order_detail']);?>
]" type="text" size="2" value="<?php echo intval($_smarty_tpl->tpl_vars['productQuantity']->value);?>
" /><span class="order_qte_span editable"><?php echo intval($_smarty_tpl->tpl_vars['productQuantity']->value);?>
</span></fieldset>
		<p><strong><?php echo smartyTranslate(array('s'=>'Unit price'),$_smarty_tpl);?>
</strong> 
			<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value){?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

			<?php }else{ ?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

			<?php }?>
		</p>
		<p><strong><?php echo smartyTranslate(array('s'=>'Total price'),$_smarty_tpl);?>
</strong> 
			<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value){?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

			<?php }else{ ?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['product']->value['total_price_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

			<?php }?>
		</p>
		<?php if ($_smarty_tpl->tpl_vars['return_allowed']->value){?></a><?php }?>
	</li>
<?php }?>
<?php }} ?>