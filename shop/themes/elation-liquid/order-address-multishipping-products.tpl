{*
*  * 2007-2013 PrestaShop
*  ************************************************************************************************************
*  * DISCLAIMER
*  ************************************************************************************************************
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2013 PrestaShop SA
*  @version  Release: $Revision: 6594 $
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*  ************************************************************************************************************
*  * ELATION LIQUID THEME
*  * (d) elation3ase theme development
*  * (c) 2013 Elation Base, LLC
*  * (i) elationbase.com | elationbase@gmail.com
*  * See theme's licence agreement at the theme root folder (licence.txt)
*  ************************************************************************************************************
*  * (i) Do not edit this file if you wish to upgrade PrestaShop or this Theme to newer versions in the future. 
*  ************************************************************************************************************
*}
<p id="eb-cart-multi">{l s='Choose the delivery addresses:'}</p>
<script type="text/javascript">
	CloseTxt = '{l s='Submit' js=1}';
	QtyChanged = '{l s='Some product quantities have changed, please check them.' js=1}';
	ShipToAnOtherAddress = '{l s='Ship to multiple addresses' js=1}';
</script>
<div id="order-detail-content" class="table_block">
	<table id="cart_summary" class="std multishipping-cart">
		<thead>
			<tr>
				<th class="cart_product first_item">{l s='Product'}</th>
				<th class="cart_description item">{l s='Description'}</th>
				<th class="cart_quantity item">{l s='Qty'}</th>
				<th class="shipping_address last_item">{l s='Shipping address'}</th>
			</tr>
		</thead>
		<tbody>
		{foreach $product_list as $product}
			{assign var='productId' value=$product.id_product}
			{assign var='productAttributeId' value=$product.id_product_attribute}
			{assign var='quantityDisplayed' value=0}
			{assign var='odd' value=$product@iteration%2}
			{* Display the product line *}
			{include file="$tpl_dir./order-address-product-line.tpl" productLast=$product@last productFirst=$product@first}
		{/foreach}
		</tbody>
	</table>
</div>
