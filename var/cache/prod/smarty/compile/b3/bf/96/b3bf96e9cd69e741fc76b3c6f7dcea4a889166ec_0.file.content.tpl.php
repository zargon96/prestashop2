<?php
/* Smarty version 4.3.1, created on 2023-11-30 12:38:00
  from 'C:\laragon\www\prestashop\adminps\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6568741869c5f9_02003234',
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
function content_6568741869c5f9_02003234 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
