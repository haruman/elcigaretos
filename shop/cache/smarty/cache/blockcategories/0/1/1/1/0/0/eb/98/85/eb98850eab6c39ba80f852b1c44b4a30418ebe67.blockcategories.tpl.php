<?php /*%%SmartyHeaderCode:1425485965520e2855c78082-74973565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb98850eab6c39ba80f852b1c44b4a30418ebe67' => 
    array (
      0 => '/Users/yves/IdeaProjects/elcigaretos/shop/themes/default/modules/blockcategories/blockcategories.tpl',
      1 => 1366892592,
      2 => 'file',
    ),
    'd3da913c9369c9394717e7e9ae449822bd23ba6a' => 
    array (
      0 => '/Users/yves/IdeaProjects/elcigaretos/shop/themes/default/modules/blockcategories/category-tree-branch.tpl',
      1 => 1366892592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1425485965520e2855c78082-74973565',
  'variables' => 
  array (
    'isDhtml' => 0,
    'blockCategTree' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520e2855dc77c5_50761819',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520e2855dc77c5_50761819')) {function content_520e2855dc77c5_50761819($_smarty_tpl) {?>
<!-- Block categories module -->
<div id="categories_block_left" class="block">
	<p class="title_block">Catégories</p>
	<div class="block_content">
		<ul class="tree dhtml">
									
<li >
	<a href="http://local.elcigaretos.com/shop/index.php?id_category=3&amp;controller=category"  title="Il est temps, pour le meilleur lecteur de musique, de remonter sur sc&egrave;ne pour un rappel. Avec le nouvel iPod, le monde est votre sc&egrave;ne.">iPods</a>
	</li>

												
<li >
	<a href="http://local.elcigaretos.com/shop/index.php?id_category=4&amp;controller=category"  title="Tous les accessoires &agrave; la mode pour votre iPod">Accessoires</a>
	</li>

												
<li class="last">
	<a href="http://local.elcigaretos.com/shop/index.php?id_category=5&amp;controller=category"  title="Le tout dernier processeur Intel, un disque dur plus spacieux, de la m&eacute;moire &agrave; profusion et d&#039;autres nouveaut&eacute;s. Le tout, dans &agrave; peine 2,59 cm qui vous lib&egrave;rent de toute entrave. Les nouveaux portables Mac r&eacute;unissent les performances, la puissance et la connectivit&eacute; d&#039;un ordinateur de bureau. Sans la partie bureau.">Portables</a>
	</li>

							</ul>
		
		<script type="text/javascript">
		// <![CDATA[
			// we hide the tree only if JavaScript is activated
			$('div#categories_block_left ul.dhtml').hide();
		// ]]>
		</script>
	</div>
</div>
<!-- /Block categories module -->
<?php }} ?>