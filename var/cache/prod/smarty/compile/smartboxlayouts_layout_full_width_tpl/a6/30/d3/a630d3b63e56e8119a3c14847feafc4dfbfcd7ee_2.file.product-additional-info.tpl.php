<?php
/* Smarty version 3.1.47, created on 2022-12-27 01:44:28
  from 'C:\xampp\htdocs\prestashop\themes\smartbox\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aab06cd19449_71199939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a630d3b63e56e8119a3c14847feafc4dfbfcd7ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\smartbox\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1672029352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aab06cd19449_71199939 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
