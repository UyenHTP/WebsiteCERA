<?php
/* Smarty version 3.1.47, created on 2022-12-27 02:37:37
  from 'module:paypalviewstemplatesbnplb' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aabce160f2a6_69234803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6742af95a9a773d37180b2e7d9bfc13dab43f3f2' => 
    array (
      0 => 'module:paypalviewstemplatesbnplb',
      1 => 1672038728,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aabce160f2a6_69234803 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149942818163aabce160d774_01647014', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'module:paypal/views/templates/bnpl/bnpl-layout.tpl');
}
/* {block 'content'} */
class Block_149942818163aabce160d774_01647014 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_149942818163aabce160d774_01647014',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <style>
    [data-container-bnpl] {
      margin: 10px 0;
      display: flex;
      justify-content: center;
    }

    .cart-grid-body [data-container-bnpl] {
      justify-content: flex-end;
    }

    @media (max-width: 575px) {
      [data-container-bnpl] {
        justify-content: flex-start;
      }
    }
  </style>

  <div data-container-bnpl data-paypal-bnpl-source-page="cart">
    <form data-paypal-bnpl-payment-form-cart class="paypal_payment_form" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action_url']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" method="post" data-ajax="false">
      <input type="hidden" name="express_checkout" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['PayPal_payment_type']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
      <input type="hidden" name="current_shop_url" data-paypal-url-page value="" />
      <input type="hidden" id="source_page" name="source_page" value="cart">
    </form>
    <div paypal-bnpl-button-container></div>
  </div>
  <div class="clearfix"></div>
<?php
}
}
/* {/block 'content'} */
}
