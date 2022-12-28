<?php
/* Smarty version 3.1.47, created on 2022-12-27 01:44:28
  from 'C:\xampp\htdocs\prestashop\modules\mpm_helpdesc\views\templates\hook\product_rating.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aab06c8e1b81_12858696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09b3bb1b083b6b03cc2f56f5d52480fcb2cda65f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\mpm_helpdesc\\views\\templates\\hook\\product_rating.tpl',
      1 => 1672029350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aab06c8e1b81_12858696 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="leave_review">
    <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['id_product']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRatingProduct','id_product'=>$_prefixVariable2,'type'=>'stars'),$_smarty_tpl ) );?>

  <span href="#tab-content" class="reviews_count"><?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['id_product']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable3 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRatingProduct','id_product'=>$_prefixVariable3,'type'=>'reviews_count'),$_smarty_tpl ) );?>
 reviews</span>
  <br>
    <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['id_product']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable4 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRatingProduct','id_product'=>$_prefixVariable4,'type'=>'write_review'),$_smarty_tpl ) );?>

</div><?php }
}
