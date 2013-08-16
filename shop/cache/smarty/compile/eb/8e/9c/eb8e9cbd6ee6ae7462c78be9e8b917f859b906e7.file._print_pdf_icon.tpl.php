<?php /* Smarty version Smarty-3.1.13, created on 2013-08-16 12:35:46
         compiled from "/Users/yves/IdeaProjects/elcigaretos/shop/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1131910721520e1ca222f510-98090967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb8e9cbd6ee6ae7462c78be9e8b917f859b906e7' => 
    array (
      0 => '/Users/yves/IdeaProjects/elcigaretos/shop/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl',
      1 => 1366892586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1131910721520e1ca222f510-98090967',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'id_invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520e1ca22545e6_73158848',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520e1ca22545e6_73158848')) {function content_520e1ca22545e6_73158848($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Users/yves/IdeaProjects/elcigaretos/shop/tools/smarty/plugins/modifier.escape.php';
?>


<span style="width:20px; margin-right:5px;">
	<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), 'htmlall', 'UTF-8');?>
&submitAction=generateInvoicePDF&id_order_invoice=<?php echo $_smarty_tpl->tpl_vars['id_invoice']->value;?>
"><img src="../img/admin/tab-invoice.gif" alt="invoice" /></a>
</span><?php }} ?>