<?php /* Smarty version Smarty-3.1.13, created on 2013-08-16 12:35:45
         compiled from "/Users/yves/IdeaProjects/elcigaretos/shop/themes/default/mobile/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1161676870520e1ca18881a1-77818208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8a858cf4e06c794ff9742d709baf80f88b74368' => 
    array (
      0 => '/Users/yves/IdeaProjects/elcigaretos/shop/themes/default/mobile/footer.tpl',
      1 => 1366892592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1161676870520e1ca18881a1-77818208',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'PS_SHOP_NAME' => 0,
    'conditions' => 0,
    'id_cgv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520e1ca18e52c2_77770561',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520e1ca18e52c2_77770561')) {function content_520e1ca18e52c2_77770561($_smarty_tpl) {?>

			<div id="footer">
				<div class="ui-grid-a">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayMobileFooterChoice"),$_smarty_tpl);?>

				</div><!-- /grid-a -->

				<div id="full-site-section" class="center">
					<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true);?>
?no_mobile_theme" data-ajax="false"><?php echo smartyTranslate(array('s'=>'Browse the full site'),$_smarty_tpl);?>
</a>
				</div>

				<div data-role="footer" data-theme="a" id="bar_footer">
					<div id="link_bar_footer" class="ui-grid-a">
						<div class="ui-block-a">
							<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true);?>
" data-ajax="false"><?php echo $_smarty_tpl->tpl_vars['PS_SHOP_NAME']->value;?>
</a>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['conditions']->value){?>
						<div class="ui-block-b">
							<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSLink($_smarty_tpl->tpl_vars['id_cgv']->value);?>
" data-ajax="false"><?php echo smartyTranslate(array('s'=>'Terms of service'),$_smarty_tpl);?>
</a>
						</div>
						<?php }?>
					</div>
				</div>
			</div><!-- /footer -->
		</div><!-- /page -->
	</body>
</html>
<?php }} ?>