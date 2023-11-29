<?php
/* Smarty version 4.3.1, created on 2023-11-29 11:37:17
  from 'C:\laragon\www\prestashop\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6567145d2ef940_01551844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94f3af3de5f44ec43bdf9a3bbf73ff12f586629e' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1701189441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6567145d2ef940_01551844 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\laragon\\www\\prestashop\\var\\cache\\prod\\smarty\\compile\\child_classiclayouts_layout_full_width_tpl\\94\\f3\\af\\94f3af3de5f44ec43bdf9a3bbf73ff12f586629e_2.file.helpers.tpl.php',
    'uid' => '94f3af3de5f44ec43bdf9a3bbf73ff12f586629e',
    'call_name' => 'smarty_template_function_renderLogo_9488484236567145d2dba99_84444564',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_9488484236567145d2dba99_84444564 */
if (!function_exists('smarty_template_function_renderLogo_9488484236567145d2dba99_84444564')) {
function smarty_template_function_renderLogo_9488484236567145d2dba99_84444564(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_9488484236567145d2dba99_84444564 */
}
