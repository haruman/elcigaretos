<?php /*%%SmartyHeaderCode:769147144520e285653e981-56006740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e3e416f0d633fdc2688aad5ff70d7dcb8dba08' => 
    array (
      0 => '/Users/yves/IdeaProjects/elcigaretos/shop/themes/default/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1366892592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '769147144520e285653e981-56006740',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520e2856660513_01434093',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520e2856660513_01434093')) {function content_520e2856660513_01434093($_smarty_tpl) {?>
<!-- Block myaccount module -->
<div class="block myaccount">
	<p class="title_block"><a href="http://local.elcigaretos.com/shop/index.php?controller=my-account" title="Gérer mon compte client" rel="nofollow">Mon compte</a></p>
	<div class="block_content">
		<ul class="bullet">
			<li><a href="http://local.elcigaretos.com/shop/index.php?controller=history" title="Voir mes commandes" rel="nofollow">Mes commandes</a></li>
						<li><a href="http://local.elcigaretos.com/shop/index.php?controller=order-slip" title="Voir mes avoirs" rel="nofollow">Mes avoirs</a></li>
			<li><a href="http://local.elcigaretos.com/shop/index.php?controller=addresses" title="Voir mes adresses" rel="nofollow">Mes adresses</a></li>
			<li><a href="http://local.elcigaretos.com/shop/index.php?controller=identity" title="Gérer mes informations personnelles" rel="nofollow">Mes informations personnelles</a></li>
						
<li class="favoriteproducts">
	<a href="http://local.elcigaretos.com/shop/index.php?fc=module&amp;module=favoriteproducts&amp;controller=account" title="Mes produits favoris">
				Mes produits favoris
	</a>
</li>

		</ul>
		<p class="logout"><a href="http://local.elcigaretos.com/shop/index.php?mylogout" title="Se déconnecter" rel="nofollow">Sign out</a></p>
	</div>
</div>
<!-- /Block myaccount module -->
<?php }} ?>