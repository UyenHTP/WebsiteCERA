<?php
/* Smarty version 3.1.47, created on 2022-12-27 02:37:56
  from 'module:paypalviewstemplatesshort' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aabcf4b2c792_18665611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '891b3e150fc23391dc759588961a49fb0bfb9fcf' => 
    array (
      0 => 'module:paypalviewstemplatesshort',
      1 => 1672038728,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aabcf4b2c792_18665611 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55005816063aabcf4b29f95_04262280', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193225764463aabcf4b2bdd9_21024973', 'js');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "module:paypal/views/templates/shortcut/shortcut-layout.tpl");
}
/* {block 'content'} */
class Block_55005816063aabcf4b29f95_04262280 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_55005816063aabcf4b29f95_04262280',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <style>
    [data-container-express-checkout] {
      margin: 10px 0;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }

  </style>

  <div data-container-express-checkout data-paypal-source-page="payment-step">
    <form data-paypal-payment-form-cart class="paypal_payment_form" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action_url']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" method="post" data-ajax="false">
      <input type="hidden" name="express_checkout" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['PayPal_payment_type']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
      <input type="hidden" name="current_shop_url" data-paypal-url-page value="" />
      <input type="hidden" id="source_page" name="source_page" value="cart">
      <input type="hidden" name="isAddAddress" value="1">
    </form>
    <div paypal-button-container></div>

    <div style="display: none" class="alert alert-danger" paypal-ec-wrong-button-message>
      <div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please click on the \'Pay with PayPal\' button','mod'=>'paypal'),$_smarty_tpl ) );?>
</div>
    </div>
  </div>
  <div class="clearfix"></div>
<?php
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_193225764463aabcf4b2bdd9_21024973 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_193225764463aabcf4b2bdd9_21024973',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
>
      document.addEventListener('DOMContentLoaded', function() {
          document.querySelector('#payment-confirmation button').addEventListener('click', function(event) {
              let selectedOption = $('input[name=payment-option]:checked');
              if (selectedOption.attr("data-module-name") == "paypal") {
                  event.preventDefault();
                  event.stopPropagation();
                  document.querySelector('[paypal-ec-wrong-button-message]').style.display = 'block';
              }
          });
      });

      if (typeof Shortcut != "undefined") {
          Shortcut.disableTillConsenting();
          Shortcut.hideElementTillPaymentOptionChecked(
              '[data-module-name="paypal"]',
              '#payment-confirmation'
          );
      } else {
          document.addEventListener('paypal-after-init-shortcut-button', function (event) {
              Shortcut.disableTillConsenting();
              Shortcut.hideElementTillPaymentOptionChecked(
                  '[data-module-name="paypal"]',
                  '#payment-confirmation'
              );
          })
      }
  <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'js'} */
}
