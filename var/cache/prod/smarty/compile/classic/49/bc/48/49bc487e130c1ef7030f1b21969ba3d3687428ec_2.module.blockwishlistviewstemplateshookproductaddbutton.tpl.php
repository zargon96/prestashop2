<?php
/* Smarty version 4.3.1, created on 2023-11-29 10:40:51
  from 'module:blockwishlistviewstemplateshookproductaddbutton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6567072301f432_73223954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49bc487e130c1ef7030f1b21969ba3d3687428ec' => 
    array (
      0 => 'module:blockwishlistviewstemplateshookproductaddbutton.tpl',
      1 => 1701189308,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6567072301f432_73223954 (Smarty_Internal_Template $_smarty_tpl) {
?><div
  class="wishlist-button"
  data-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
"
  data-product-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
  data-product-attribute-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
"
  data-is-logged="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['is_logged'], ENT_QUOTES, 'UTF-8');?>
"
  data-list-id="1"
  data-checked="true"
  data-is-product="true"
></div>

<?php }
}
