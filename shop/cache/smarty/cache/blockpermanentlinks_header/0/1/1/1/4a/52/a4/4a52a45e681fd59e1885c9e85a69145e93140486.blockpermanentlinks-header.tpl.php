<?php /*%%SmartyHeaderCode:1703416400520e2855770701-80755019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a52a45e681fd59e1885c9e85a69145e93140486' => 
    array (
      0 => '/Users/yves/IdeaProjects/elcigaretos/shop/modules/blockpermanentlinks/blockpermanentlinks-header.tpl',
      1 => 1366892592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1703416400520e2855770701-80755019',
  'variables' => 
  array (
    'link' => 0,
    'come_from' => 0,
    'meta_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520e28557d67c1_37559492',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520e28557d67c1_37559492')) {function content_520e28557d67c1_37559492($_smarty_tpl) {?>
<!-- Block permanent links module HEADER -->
<ul id="header_links">
	<li id="header_link_contact"><a href="http://local.elcigaretos.com/shop/index.php?controller=contact" title="contact">contact</a></li>
	<li id="header_link_sitemap"><a href="http://local.elcigaretos.com/shop/index.php?controller=sitemap" title="plan du site">plan du site</a></li>
	<li id="header_link_bookmark">
		<script type="text/javascript">writeBookmarkLink('http://local.elcigaretos.com/shop/index.php', 'elcigaretos', 'favoris');</script>
	</li>
</ul>
<!-- /Block permanent links module HEADER -->
<?php }} ?>