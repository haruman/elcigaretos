<?php /* Smarty version Smarty-3.1.13, created on 2013-08-16 12:35:54
         compiled from "/Users/yves/IdeaProjects/elcigaretos/shop/admin/themes/default/template/helpers/list/list_action_removestock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:431493687520e1caae49f42-13195513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b2e0cd9ef3bac16f59fce5974b8d80a89bd1cb7' => 
    array (
      0 => '/Users/yves/IdeaProjects/elcigaretos/shop/admin/themes/default/template/helpers/list/list_action_removestock.tpl',
      1 => 1366892586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '431493687520e1caae49f42-13195513',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520e1caae6def7_25029583',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520e1caae6def7_25029583')) {function content_520e1caae6def7_25029583($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/remove_stock.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>