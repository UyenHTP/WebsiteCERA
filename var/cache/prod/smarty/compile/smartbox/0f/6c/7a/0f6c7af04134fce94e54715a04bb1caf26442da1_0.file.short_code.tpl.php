<?php
/* Smarty version 3.1.47, created on 2022-12-27 01:49:05
  from 'C:\xampp\htdocs\prestashop\modules\ets_banneranywhere\views\templates\hook\short_code.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aab181609b82_45498283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f6c7af04134fce94e54715a04bb1caf26442da1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\ets_banneranywhere\\views\\templates\\hook\\short_code.tpl',
      1 => 1672118229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aab181609b82_45498283 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="copied_text" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to copy','mod'=>'ets_banneranywhere'),$_smarty_tpl ) );?>
" data-copied="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Copied','mod'=>'ets_banneranywhere','js'=>1),$_smarty_tpl ) );?>
">
    <input class="short-code" value='[banner-any-where id="<?php echo intval($_smarty_tpl->tpl_vars['id_banner']->value);?>
"]' type="text" readonly="true"/>
</div><?php }
}
