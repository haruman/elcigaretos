<?php /* Smarty version Smarty-3.1.13, created on 2013-08-16 15:30:59
         compiled from "/Users/yves/IdeaProjects/elcigaretos/shop/admin3570/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1174032429520e299377bb83-91878325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29262d408165d342157dabdfdcb1067555b19e5d' => 
    array (
      0 => '/Users/yves/IdeaProjects/elcigaretos/shop/admin3570/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1366892586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1174032429520e299377bb83-91878325',
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
  'unifunc' => 'content_520e29937ff001_41123898',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520e29937ff001_41123898')) {function content_520e29937ff001_41123898($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<img src="../img/admin/details.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>