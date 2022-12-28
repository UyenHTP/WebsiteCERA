<?php
/* Smarty version 3.1.47, created on 2022-12-27 02:22:53
  from 'C:\xampp\htdocs\prestashop\modules\blockreassurance\views\templates\admin\tabs\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aab96d74a642_93611104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce6327b170752a470133f8c3b057c92a98af19c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\blockreassurance\\views\\templates\\admin\\tabs\\content.tpl',
      1 => 1672028625,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./content/listing.tpl' => 1,
    'file:./content/config.tpl' => 1,
  ),
),false)) {
function content_63aab96d74a642_93611104 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./content/listing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./content/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
