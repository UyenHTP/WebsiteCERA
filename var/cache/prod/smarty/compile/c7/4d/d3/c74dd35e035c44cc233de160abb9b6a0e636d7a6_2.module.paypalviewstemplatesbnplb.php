<?php
/* Smarty version 3.1.47, created on 2022-12-27 02:37:56
  from 'module:paypalviewstemplatesbnplb' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aabcf4cd0502_68724928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c74dd35e035c44cc233de160abb9b6a0e636d7a6' => 
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
function content_63aabcf4cd0502_68724928 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200172493463aabcf4ccdb56_57633791', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70510451963aabcf4ccfab2_82892904', 'js');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'module:paypal/views/templates/bnpl/bnpl-layout.tpl');
}
/* {block 'content'} */
class Block_200172493463aabcf4ccdb56_57633791 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_200172493463aabcf4ccdb56_57633791',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <style>
    [data-container-bnpl] {
      margin: 10px 0;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }

  </style>

  <div data-container-bnpl data-paypal-bnpl-source-page="payment-step">
    <form data-paypal-bnpl-payment-form-cart class="paypal_payment_form" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action_url']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" method="post" data-ajax="false">
      <input type="hidden" name="express_checkout" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['PayPal_payment_type']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
      <input type="hidden" name="current_shop_url" data-paypal-url-page value="" />
      <input type="hidden" id="source_page" name="source_page" value="cart">
      <input type="hidden" name="isAddAddress" value="1">
    </form>
    <div paypal-bnpl-button-container></div>

    <div style="display: none" class="alert alert-danger" paypal-wrong-button-message>
      <div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please click on the \'Pay in X times\' button','mod'=>'paypal'),$_smarty_tpl ) );?>
</div>
    </div>
  </div>
  <div class="clearfix"></div>
<?php
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_70510451963aabcf4ccfab2_82892904 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_70510451963aabcf4ccfab2_82892904',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('#payment-confirmation button').addEventListener('click', function(event) {
            let selectedOption = $('input[name=payment-option]:checked');
            if (selectedOption.attr("data-module-name") == "paypal_bnpl") {
                event.preventDefault();
                event.stopPropagation();
                document.querySelector('[paypal-wrong-button-message]').style.display = 'block';
            }
        });
    });

    if (typeof BNPL != "undefined") {
        BNPL.disableTillConsenting();
        BNPL.hideElementTillPaymentOptionChecked(
            '[data-module-name="paypal_bnpl"]',
            '#payment-confirmation'
        );
    } else {
        document.addEventListener('paypal-after-init-bnpl-button', function (event) {
            BNPL.disableTillConsenting();
            BNPL.hideElementTillPaymentOptionChecked(
                '[data-module-name="paypal_bnpl"]',
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
