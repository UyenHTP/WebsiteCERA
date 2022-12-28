<?php
/* Smarty version 3.1.47, created on 2022-12-27 01:40:59
  from 'C:\xampp\htdocs\prestashop\modules\welcome\views\templates\lost.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aaaf9b036865_39806791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73df2de84c9089beaf2176a83e261d0dc89a928b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\welcome\\views\\templates\\lost.tpl',
      1 => 1672028626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aaaf9b036865_39806791 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="onboarding onboarding-popup bootstrap">
  <div class="content">
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hey! Are you lost?','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</p>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To continue, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</p>
    <div class="text-center">
      <button class="btn btn-primary onboarding-button-goto-current"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</button>
    </div>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you want to stop the tutorial for good, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</p>
    <div class="text-center">
      <button class="btn btn-alert onboarding-button-stop"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quit the Welcome tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</button>
    </div>
  </div>
</div>
<?php }
}
