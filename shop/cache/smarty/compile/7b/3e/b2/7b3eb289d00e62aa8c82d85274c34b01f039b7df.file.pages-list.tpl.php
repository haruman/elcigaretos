<?php /* Smarty version Smarty-3.1.13, created on 2013-08-16 12:35:50
         compiled from "/Users/yves/IdeaProjects/elcigaretos/shop/themes/default/mobile/pages-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:915614485520e1ca6144e53-14597847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b3eb289d00e62aa8c82d85274c34b01f039b7df' => 
    array (
      0 => '/Users/yves/IdeaProjects/elcigaretos/shop/themes/default/mobile/pages-list.tpl',
      1 => 1366892592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '915614485520e1ca6144e53-14597847',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'controller_name' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520e1ca61d9151_27455926',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520e1ca61d9151_27455926')) {function content_520e1ca61d9151_27455926($_smarty_tpl) {?>

		<hr/>
		<h2 class="site_map"><?php echo smartyTranslate(array('s'=>'Sitemap'),$_smarty_tpl);?>
</h2>
		<ul data-role="listview" data-inset="true" id="category">
			<?php if ($_smarty_tpl->tpl_vars['controller_name']->value!='index'){?><li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true);?>
" data-ajax="false">Accueil</a></li><?php }?>
			
			
			
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCategoryLink(3,false);?>
" data-ajax="false">IPod</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCategoryLink(4,false);?>
" data-ajax="false">Accessoires</a></li>
			
			
			<?php if ($_smarty_tpl->tpl_vars['controller_name']->value!='my-account'){?><li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true);?>
" data-ajax="false"><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
</a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['controller_name']->value!='contact'){?><li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true);?>
" data-ajax="false"><?php echo smartyTranslate(array('s'=>'Contact'),$_smarty_tpl);?>
</a></li><?php }?>
		</ul>
<?php }} ?>