<?php
/* Smarty version 3.1.47, created on 2022-12-27 01:43:12
  from 'C:\xampp\htdocs\prestashop\modules\tidiolivechat\views\templates\front\widget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aab020543af3_66296568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f28efac50379c7d7502eb872f38f639395de4c4b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\tidiolivechat\\views\\templates\\front\\widget.tpl',
      1 => 1672122491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aab020543af3_66296568 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['widgetUrl']->value) {?>
    <?php echo '<script'; ?>
 src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['widgetUrl']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" async><?php echo '</script'; ?>
>
<?php }
}
}
