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

<script type="text/javascript">
//<![CDATA[
	var baseDir = '{$base_dir_ssl}';
//]]>
</script>

{capture name=path}{l s='My account'}{/capture}

<h1>{l s='My account'}</h1>
<h4>{l s='Welcome to your account. Here you can manage your addresses and orders.'}</h4>
<nav class="clearfix">
    <ul class="myaccount_lnk_list">
        {if $has_customer_an_address}
        	<li>
            	<a href="{$link->getPageLink('address', true)}" title="{l s='Add my first address'}"><img src="{$img_dir}icon/addrbook.gif" alt="{l s='Add my first address'}" class="icon" /> {l s='Add my first address'}</a>
            </li>
        {/if}
    	<li>
            <a href="{$link->getPageLink('history.php', true)}" title="{l s='History and details of my orders'}"><img src="{$img_dir}icon/eb-ma-orders.png" alt="" /></a>
            <a href="{$link->getPageLink('history.php', true)}">{l s='Orders'}</a>
        </li>
        {if $returnAllowed}
            <li>
                <a href="{$link->getPageLink('order-follow.php', true)}" title="{l s='My merchandise returns'}"><img src="{$img_dir}icon/eb-ma-returns.png" alt="" /></a>
                <a href="{$link->getPageLink('order-follow.php', true)}">{l s='Merchandise returns'}</a>
            </li>
        {/if}
    	<li>
            <a href="{$link->getPageLink('order-slip.php', true)}" title="{l s='My credit slips'}"><img src="{$img_dir}icon/eb-ma-slips.png" alt="" /></a>
            <a href="{$link->getPageLink('order-slip.php', true)}">{l s='Credit slips'}</a>
        </li>
    	<li>
            <a href="{$link->getPageLink('addresses.php', true)}" title="{l s='My addresses'}"><img src="{$img_dir}icon/eb-ma-addresses.png" alt="" /></a>
            <a href="{$link->getPageLink('addresses.php', true)}">{l s='Addresses'}</a>
        </li>
    	<li>
            <a href="{$link->getPageLink('identity.php', true)}" title="{l s='My personal information'}"><img src="{$img_dir}icon/eb-ma-info.png" alt="" /></a>
            <a href="{$link->getPageLink('identity.php', true)}">{l s='Information'}</a>
        </li>
        {if $voucherAllowed}
            <li>
                <a href="{$link->getPageLink('discount.php', true)}" title="{l s='My vouchers'}"><img src="{$img_dir}icon/eb-ma-voucher.png" alt="" /></a>
                <a href="{$link->getPageLink('discount.php', true)}">{l s='Vouchers'}</a>
            </li>
        {/if}
        {$HOOK_CUSTOMER_ACCOUNT}
    </ul>
</nav>
<div id="account-logout">
    {if $cookie->isLogged()}
        <span>{$cookie->customer_firstname} {$cookie->customer_lastname}</span>
        (&nbsp;<a href="{$link->getPageLink('index.php')}?mylogout">{l s='Log out'}</a>&nbsp;)
    {/if}
</div>