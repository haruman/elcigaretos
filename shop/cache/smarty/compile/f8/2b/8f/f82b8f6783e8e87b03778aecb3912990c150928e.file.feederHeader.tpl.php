<?php /* Smarty version Smarty-3.1.13, created on 2013-08-16 15:25:41
         compiled from "/Users/yves/IdeaProjects/elcigaretos/shop/modules/feeder/feederHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:772172136520e285555bd41-23230013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f82b8f6783e8e87b03778aecb3912990c150928e' => 
    array (
      0 => '/Users/yves/IdeaProjects/elcigaretos/shop/modules/feeder/feederHeader.tpl',
      1 => 1366892592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '772172136520e285555bd41-23230013',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta_title' => 0,
    'feedUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520e2855583617_28102236',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520e2855583617_28102236')) {function content_520e2855583617_28102236($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Users/yves/IdeaProjects/elcigaretos/shop/tools/smarty/plugins/modifier.escape.php';
?>

<link rel="alternate" type="application/rss+xml" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'html', 'UTF-8');?>
" href="<?php echo $_smarty_tpl->tpl_vars['feedUrl']->value;?>
" /><?php }} ?>