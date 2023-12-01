<?php
/* Smarty version 4.3.1, created on 2023-11-30 12:34:49
  from 'C:\laragon\www\prestashop\adminps\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_656873598f3bd4_57248240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6394b82dc70c8f06d100dcb00480f6b00a25de9' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop\\adminps\\themes\\new-theme\\template\\content.tpl',
      1 => 1701189213,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656873598f3bd4_57248240 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
