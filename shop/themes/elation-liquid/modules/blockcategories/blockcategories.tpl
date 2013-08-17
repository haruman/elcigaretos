{*
* 2007-2013 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2013 PrestaShop SA
*  @version  Release: $Revision: 6844 $
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<!-- EB Mobile Navigation DropDown module -->
<div id="eb-mobile-nav" class="clearfix">
    <select name="jumpMenu" id="eb-jumpMenu" class="eb-select">
    <option value="{$content_dir}" selected="selected">{l s='NAVIGATION' mod='blockcategories'}</option>
    <option>----------</option>
    <option value="{$content_dir}" {if $page_name == 'index'}selected="selected"{/if}>{l s='Home' mod='blockcategories'}</option>
    {foreach from=$blockCategTree.children item=child name=blockCategTree}
        {if $smarty.foreach.blockCategTree.last}
            {include file="$branche_tpl_path" node=$child last='true'}
        {else}
            {include file="$branche_tpl_path" node=$child}
        {/if}
    {/foreach}
    <option>----------</option>
    <option value="my-account.php" {if $page_name == 'my-account'}selected="selected"{/if}>{l s='My Account' mod='blockcategories'}</option>
    <option value="order.php" {if $page_name == 'order'}selected="selected"{/if}>{l s='Shopping Cart' mod='blockcategories'}</option>
    <option value="cms.php?id_cms=4">{l s='About' mod='ebmobilenav'}</option>
    <option value="contact-form.php" {if $page_name == 'contact-form'}selected="selected"{/if}>{l s='Contact' mod='blockcategories'}</option>
    </select>
	<script type="text/javascript">
        $(document).ready(function() {
			$('#eb-jumpMenu').change( function() {
				window.location.href = $(this).val();
			});
		});
    </script>
</div>
<!-- /EB Mobile Navigation DropDown module -->