<?php
/* Smarty version 4.3.1, created on 2023-11-30 09:33:11
  from 'C:\laragon\www\prestashop\modules\test\views\templates\hook\displayProductExtraContent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_656848c7b17e69_11675730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1e0f80663dae8fe60b36dd2936d38618bbfb67a' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop\\modules\\test\\views\\templates\\hook\\displayProductExtraContent.tpl',
      1 => 1701258466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656848c7b17e69_11675730 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['custom_content']->value)) && $_smarty_tpl->tpl_vars['custom_content']->value) {?>
    <div class="custom-content">
        <h3>Informazioni Extra</h3>
        <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['custom_content']->value, ENT_QUOTES, 'UTF-8');?>
</p>
    </div>
<?php }?> 
<?php }
}
