<?php
/* Smarty version 3.1.47, created on 2022-12-27 02:37:37
  from 'module:paypalviewstemplatesbnplb' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aabce169f1f7_09593810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '785307732c6079ac1a589c87efe8be5580834cea' => 
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
function content_63aabce169f1f7_09593810 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!-- Start bnpl. Module Paypal -->
<?php ob_start();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['psPaypalDir']->value)."/views/templates/_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->assign('javascriptBlock', ob_get_clean());
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102231916663aabce169c210_41769863', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185359119063aabce169daa5_66108000', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114853341963aabce169e331_42737256', 'js');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104835737563aabce169e9e7_90358336', 'init-button');
?>

<!-- End bnpl. Module Paypal -->



<?php }
/* {block 'head'} */
class Block_102231916663aabce169c210_41769863 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_102231916663aabce169c210_41769863',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo $_smarty_tpl->tpl_vars['javascriptBlock']->value;?>

<?php
}
}
/* {/block 'head'} */
/* {block 'content'} */
class Block_185359119063aabce169daa5_66108000 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_185359119063aabce169daa5_66108000',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_114853341963aabce169e331_42737256 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_114853341963aabce169e331_42737256',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'js'} */
/* {block 'init-button'} */
class Block_104835737563aabce169e9e7_90358336 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'init-button' => 
  array (
    0 => 'Block_104835737563aabce169e9e7_90358336',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
>
      function waitPaypalSDKIsLoaded() {
          if (typeof totPaypalBnplSdkButtons === 'undefined' || typeof BNPL === 'undefined') {
              setTimeout(waitPaypalSDKIsLoaded, 200);
              return;
          }

          BNPL.init();

          if (typeof bnplColor != 'undefined') {
              BNPL.setColor(bnplColor);
          }

          BNPL.initButton();
      }

      waitPaypalSDKIsLoaded();
  <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'init-button'} */
}
