<?php
/* Smarty version 4.3.1, created on 2023-11-30 09:33:12
  from 'C:\laragon\www\prestashop\themes\classic\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_656848c83ec497_32716640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '686b9b7e4c73bf186b8b6fc1c95c7f9bb613b80d' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1701189440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656848c83ec497_32716640 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
