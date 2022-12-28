<?php
/* Smarty version 3.1.47, created on 2022-12-27 02:38:24
  from 'C:\xampp\htdocs\prestashop\mails\_partials\order_conf_cart_rules.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aabd10bf5721_71362483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e0be7b9a7e4ffe6a1e53ad64e6be43498ee2497' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\mails\\_partials\\order_conf_cart_rules.txt',
      1 => 1672028621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aabd10bf5721_71362483 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'cart_rule');
$_smarty_tpl->tpl_vars['cart_rule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cart_rule']->value) {
$_smarty_tpl->tpl_vars['cart_rule']->do_else = false;
?>
	<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_rule']->value['voucher_name'], ENT_QUOTES, 'UTF-8');?>
  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_rule']->value['voucher_reduction'], ENT_QUOTES, 'UTF-8');?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
