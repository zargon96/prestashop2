<?php
/* Smarty version 4.3.1, created on 2023-12-01 09:06:30
  from 'C:\laragon\www\prestashop\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65699406dd9421_67792743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eadfe43b72385ee44478b26e9ce207e9fde4a710' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop\\themes\\classic\\templates\\index.tpl',
      1 => 1701189440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65699406dd9421_67792743 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124759568265699406dd75e2_08691986', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_89168630365699406dd7a76_46406020 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_127230220165699406dd8479_59147531 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_98405043265699406dd80f2_12962199 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127230220165699406dd8479_59147531', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_124759568265699406dd75e2_08691986 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_124759568265699406dd75e2_08691986',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_89168630365699406dd7a76_46406020',
  ),
  'page_content' => 
  array (
    0 => 'Block_98405043265699406dd80f2_12962199',
  ),
  'hook_home' => 
  array (
    0 => 'Block_127230220165699406dd8479_59147531',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89168630365699406dd7a76_46406020', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98405043265699406dd80f2_12962199', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
