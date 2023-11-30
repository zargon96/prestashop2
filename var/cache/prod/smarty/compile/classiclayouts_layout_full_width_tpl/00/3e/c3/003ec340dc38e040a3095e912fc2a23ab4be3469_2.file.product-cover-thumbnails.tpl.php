<?php
/* Smarty version 4.3.1, created on 2023-11-30 09:33:12
  from 'C:\laragon\www\prestashop\themes\classic\templates\catalog\_partials\product-cover-thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_656848c82ed4e1_61621543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '003ec340dc38e040a3095e912fc2a23ab4be3469' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop\\themes\\classic\\templates\\catalog\\_partials\\product-cover-thumbnails.tpl',
      1 => 1701189440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656848c82ed4e1_61621543 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="images-container js-images-container">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_278413028656848c82e0023_56524922', 'product_cover');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1705782779656848c82e69c1_34156752', 'product_images');
?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterProductThumbs','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
/* {block 'product_cover'} */
class Block_278413028656848c82e0023_56524922 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover' => 
  array (
    0 => 'Block_278413028656848c82e0023_56524922',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="product-cover">
      <?php if ($_smarty_tpl->tpl_vars['product']->value['default_image']) {?>
        <picture>
          <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
          <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
          <img
            class="js-qv-product-cover img-fluid"
            src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
            <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['legend'])) {?>
              alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['legend'], ENT_QUOTES, 'UTF-8');?>
"
              title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['legend'], ENT_QUOTES, 'UTF-8');?>
"
            <?php } else { ?>
              alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
            loading="lazy"
            width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
            height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
          >
        </picture>
        <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
          <i class="material-icons zoom-in">search</i>
        </div>
      <?php } else { ?>
        <picture>
          <?php if (!empty($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
          <?php if (!empty($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
          <img
            class="img-fluid"
            src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
            loading="lazy"
            width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
            height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
          >
        </picture>
      <?php }?>
    </div>
  <?php
}
}
/* {/block 'product_cover'} */
/* {block 'product_images'} */
class Block_1705782779656848c82e69c1_34156752 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images' => 
  array (
    0 => 'Block_1705782779656848c82e69c1_34156752',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="js-qv-mask mask">
      <ul class="product-images js-qv-product-images">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
          <li class="thumb-container js-thumb-container">
            <picture>
              <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['bySize']['small_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['small_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
              <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['bySize']['small_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['small_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
              <img
                class="thumb js-thumb <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['default_image']['id_image']) {?> selected js-thumb-selected <?php }?>"
                data-image-medium-src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['sources'])) {?>data-image-medium-sources="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['sources'] )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                data-image-large-src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['sources'])) {?>data-image-large-sources="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['sources'] )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['small_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                <?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {?>
                  alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                  title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                <?php } else { ?>
                  alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                <?php }?>
                loading="lazy"
                width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['small_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
                height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['small_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
              >
            </picture>
          </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  <?php
}
}
/* {/block 'product_images'} */
}
