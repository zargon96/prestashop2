<?php
/* Smarty version 4.3.1, created on 2023-11-29 10:18:20
  from 'C:\laragon\www\prestashop\adminps\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_656701dcb2ceb5_02203161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3bf96e9cd69e741fc76b3c6f7dcea4a889166ec' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop\\adminps\\themes\\default\\template\\content.tpl',
      1 => 1701189198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656701dcb2ceb5_02203161 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
