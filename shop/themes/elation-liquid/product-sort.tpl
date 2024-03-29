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

{if isset($orderby) AND isset($orderway)}
<!-- Sort products -->
{if isset($smarty.get.id_category) && $smarty.get.id_category}
	{assign var='request' value=$link->getPaginationLink('category', $category, false, true)}
{elseif isset($smarty.get.id_manufacturer) && $smarty.get.id_manufacturer}
	{assign var='request' value=$link->getPaginationLink('manufacturer', $manufacturer, false, true)}
{elseif isset($smarty.get.id_supplier) && $smarty.get.id_supplier}
	{assign var='request' value=$link->getPaginationLink('supplier', $supplier, false, true)}
{else}
	{assign var='request' value=$link->getPaginationLink(false, false, false, true)}
{/if}
{literal}
<script>
(function($) {
    $.cookie = function(key, value, options) {

        // key and at least value given, set cookie...
        if (arguments.length > 1 && (!/Object/.test(Object.prototype.toString.call(value)) || value === null || value === undefined)) {
            options = $.extend({}, options);

            if (value === null || value === undefined) {
                options.expires = -1;
            }

            if (typeof options.expires === 'number') {
                var days = options.expires, t = options.expires = new Date();
                t.setDate(t.getDate() + days);
            }

            value = String(value);

            return (document.cookie = [
                encodeURIComponent(key), '=', options.raw ? value : encodeURIComponent(value),
                options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
                options.path    ? '; path=' + options.path : '',
                options.domain  ? '; domain=' + options.domain : '',
                options.secure  ? '; secure' : ''
            ].join(''));
        }

        // key and possibly options given, get cookie...
        options = value || {};
        var decode = options.raw ? function(s) { return s; } : decodeURIComponent;

        var pairs = document.cookie.split('; ');
        for (var i = 0, pair; pair = pairs[i] && pairs[i].split('='); i++) {
            if (decode(pair[0]) === key) return decode(pair[1] || ''); // IE saves cookies with empty string as "c; ", e.g. without "=" as opposed to EOMB, thus pair[1] may be undefined
        }
        return null;
    };
})(jQuery);
$(document).ready(function() {
// SET & GET COOKIE LAYOUT
	if ($.cookie('eb-layout') == "row") {
		$("#eb-product-list li").addClass("eb-product-row");
		$("#eb-layout a.eb-layout-row").css({opacity:'1',cursor:'default'});
		$("#eb-layout a.eb-layout-column").css({opacity:'0.6',cursor:'pointer'});
	};
	$("#eb-layout a.eb-layout-row").click(function(){ 
		$.cookie("eb-layout", "row", { expires: 30 });
		$(this).css({opacity:'1',cursor:'default'});
		$("#eb-layout a.eb-layout-column").css({opacity:'0.6',cursor:'pointer'});
		$("#eb-product-list li").addClass("eb-product-row");
		return false; 
	});
	$("#eb-layout a.eb-layout-column").click(function(){
		$.cookie("eb-layout", 'column');
		$(this).css({opacity:'1',cursor:'default'});
		$("#eb-layout a.eb-layout-row").css({opacity:'0.6',cursor:'pointer'});
		$("#eb-product-list li").removeClass("eb-product-row");
		return false;
	});
	
	$(".pagination .eb-select").change(function() {
		$(this).closest("form").submit();
	});

});
</script>
{/literal}
{if isset($p) AND $p}
	{if isset($smarty.get.id_category) && $smarty.get.id_category && isset($category)}
		{assign var='requestPage' value=$link->getPaginationLink('category', $category, false, false, true, false)}
		{assign var='requestNb' value=$link->getPaginationLink('category', $category, true, false, false, true)}
	{elseif isset($smarty.get.id_manufacturer) && $smarty.get.id_manufacturer && isset($manufacturer)}
		{assign var='requestPage' value=$link->getPaginationLink('manufacturer', $manufacturer, false, false, true, false)}
		{assign var='requestNb' value=$link->getPaginationLink('manufacturer', $manufacturer, true, false, false, true)}
	{elseif isset($smarty.get.id_supplier) && $smarty.get.id_supplier && isset($supplier)}
		{assign var='requestPage' value=$link->getPaginationLink('supplier', $supplier, false, false, true, false)}
		{assign var='requestNb' value=$link->getPaginationLink('supplier', $supplier, true, false, false, true)}
	{else}
		{assign var='requestPage' value=$link->getPaginationLink(false, false, false, false, true, false)}
		{assign var='requestNb' value=$link->getPaginationLink(false, false, true, false, false, true)}
	{/if}
    {if $nb_products > $products_per_page}
        <form action="{if !is_array($requestNb)}{$requestNb}{else}{$requestNb.requestUrl}{/if}" method="get" class="pagination">
            <p class="select">
                {if isset($search_query) AND $search_query}<input type="hidden" name="search_query" value="{$search_query|escape:'htmlall':'UTF-8'}" />{/if}
                {if isset($tag) AND $tag AND !is_array($tag)}<input type="hidden" name="tag" value="{$tag|escape:'htmlall':'UTF-8'}" />{/if}
                <label for="nb_item">{l s='items:'}</label>
                <select name="n" id="nb_item" class="eb-select">
                {assign var="lastnValue" value="0"}
                {foreach from=$nArray item=nValue}
                    {if $lastnValue <= $nb_products}
                        <option value="{$nValue|escape:'htmlall':'UTF-8'}" {if $n == $nValue}selected="selected"{/if}>{$nValue|escape:'htmlall':'UTF-8'}</option>
                    {/if}
                    {assign var="lastnValue" value=$nValue}
                {/foreach}
                </select>
                {if is_array($requestNb)}
                    {foreach from=$requestNb item=requestValue key=requestKey}
                        {if $requestKey != 'requestUrl'}
                            <input type="hidden" name="{$requestKey|escape:'htmlall':'UTF-8'}" value="{$requestValue|escape:'htmlall':'UTF-8'}" />
                        {/if}
                    {/foreach}
                {/if}
            </p>
        </form>
    {/if} 
{/if}
<form id="productsSortForm" action="{$request|escape:'htmlall':'UTF-8'}">
	<p class="select">
		<label for="selectPrductSort">{l s='Sort by'}</label>
		<select class="eb-select" id="selectPrductSort" onchange="document.location.href = $(this).val();">
			<option value="{$link->addSortDetails($request, $orderbydefault, $orderwaydefault)|escape:'htmlall':'UTF-8'}" {if $orderby eq $orderbydefault}selected="selected"{/if}>{l s='--'}</option>
			{if !$PS_CATALOG_MODE}
			<option value="{$link->addSortDetails($request, 'price', 'asc')|escape:'htmlall':'UTF-8'}" {if $orderby eq 'price' AND $orderway eq 'asc'}selected="selected"{/if}>{l s='Price: lowest first'}</option>
			<option value="{$link->addSortDetails($request, 'price', 'desc')|escape:'htmlall':'UTF-8'}" {if $orderby eq 'price' AND $orderway eq 'desc'}selected="selected"{/if}>{l s='Price: highest first'}</option>
			{/if}
			<option value="{$link->addSortDetails($request, 'name', 'asc')|escape:'htmlall':'UTF-8'}" {if $orderby eq 'name' AND $orderway eq 'asc'}selected="selected"{/if}>{l s='Product Name: A to Z'}</option>
			<option value="{$link->addSortDetails($request, 'name', 'desc')|escape:'htmlall':'UTF-8'}" {if $orderby eq 'name' AND $orderway eq 'desc'}selected="selected"{/if}>{l s='Product Name: Z to A'}</option>
			{if !$PS_CATALOG_MODE}
			<option value="{$link->addSortDetails($request, 'quantity', 'desc')|escape:'htmlall':'UTF-8'}" {if $orderby eq 'quantity' AND $orderway eq 'desc'}selected="selected"{/if}>{l s='In-stock first'}</option>
			{/if}
		</select>
	</p>
</form>
<!-- /Sort products -->
{/if}

<div id="eb-layout">
	<a href="#" class="eb-layout-column"  title="{l s='Product Grid'}"></a><a href="#" class="eb-layout-row" title="{l s='Product List'}"></a>
</div>

