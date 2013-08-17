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
{if isset($cms) && $cms->id != $cgv_id}
	{include file="$tpl_dir./breadcrumb.tpl"}
{/if}
{if isset($cms) && !isset($category)}
	{if !$cms->active}
		<br />
		<div id="admin-action-cms">
			<p>{l s='This CMS page is not visible to your customers.'}
			<input type="hidden" id="admin-action-cms-id" value="{$cms->id}" />
			<input type="submit" value="{l s='Publish'}" class="exclusive" onclick="submitPublishCMS('{$base_dir}{$smarty.get.ad}', 0)"/>			
			<input type="submit" value="{l s='Back'}" class="exclusive" onclick="submitPublishCMS('{$base_dir}{$smarty.get.ad}', 1)"/>			
			</p>
			<div class="clear" ></div>
			<p id="admin-action-result"></p>
			</p>
		</div>
	{/if}
	<div class="rte{if $content_only} content_only{/if}">
		{$cms->content}
	</div>
{elseif isset($category)}
	<div>
		<h1>{$category->name|escape:'htmlall':'UTF-8'}</h1>
		{if isset($sub_category) & !empty($sub_category)}	
			<h4>{l s='List of sub categories in '}{$category->name}{l s=':'}</h4>
			<ul class="bullet">
				{foreach from=$sub_category item=subcategory}
					<li>
						<a href="{$link->getCMSCategoryLink($subcategory.id_cms_category, $subcategory.link_rewrite)|escape:'htmlall':'UTF-8'}">{$subcategory.name|escape:'htmlall':'UTF-8'}</a>
					</li>
				{/foreach}
			</ul>
		{/if}
		{if isset($cms_pages) & !empty($cms_pages)}
		<h4>{l s='List of pages in '}{$category->name}{l s=':'}</h4>
			<ul class="bullet">
				{foreach from=$cms_pages item=cmspages}
					<li>
						<a href="{$link->getCMSLink($cmspages.id_cms, $cmspages.link_rewrite)|escape:'htmlall':'UTF-8'}">{$cmspages.meta_title|escape:'htmlall':'UTF-8'}</a>
					</li>
				{/foreach}
			</ul>
		{/if}
	</div>
{else}
	{l s='This page does not exist.'}
{/if}
<br />