<?php
/* Smarty version 3.1.47, created on 2022-12-27 01:44:27
  from 'C:\xampp\htdocs\prestashop\modules\mpm_helpdesc\views\templates\hook\registration_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aab06b737cb4_81295561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcd93cb8081cd5c54c41c376d659224be443d5c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\mpm_helpdesc\\views\\templates\\hook\\registration_info.tpl',
      1 => 1672029350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aab06b737cb4_81295561 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="myprestareviews_registration_info">
  <img class="review_icon" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['domain']->value, ENT_QUOTES, 'UTF-8');?>
modules/mpm_helpdesc/views/img/review.svg">
  <div class="welcome">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Welcome to MyPrestaReviews!','mod'=>'mpm_helpdesc'),$_smarty_tpl ) );?>

  </div>
  <div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To start enable reviews & rating system you need to follow several simple steps.','mod'=>'mpm_helpdesc'),$_smarty_tpl ) );?>
</div>
  <div class="description_info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Don’t worry - ','mod'=>'mpm_helpdesc'),$_smarty_tpl ) );?>
<span class="color_style"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'this is free','mod'=>'mpm_helpdesc'),$_smarty_tpl ) );?>
</span>!</div>
  <br>
  <div class="step">
    <span class="bold"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1 Step:','mod'=>'mpm_helpdesc'),$_smarty_tpl ) );?>
</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register at','mod'=>'mpm_helpdesc'),$_smarty_tpl ) );?>
 <a target="_blank" href="https://myprestareviews.com/signin?signup=1&domain=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['domain']->value, ENT_QUOTES, 'UTF-8');?>
">https://myprestareviews.com/</a>;
  </div>
  <div class="step"><span class="bold"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'2 Step:','mod'=>'mpm_helpdesc'),$_smarty_tpl ) );?>
</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add your website & copy secret key;','mod'=>'mpm_helpdesc'),$_smarty_tpl ) );?>
 </div>
  <div class="step"><span class="bold"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'3 Step:','mod'=>'mpm_helpdesc'),$_smarty_tpl ) );?>
</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to «admin panel - modules - Myprestareviews» & paste secure key;','mod'=>'mpm_helpdesc'),$_smarty_tpl ) );?>
 </div>
  <div class="step"><span class="bold"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'4 Step:','mod'=>'mpm_helpdesc'),$_smarty_tpl ) );?>
</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Turn back to «My Sites» at','mod'=>'mpm_helpdesc'),$_smarty_tpl ) );?>
 <a target="_blank" href="https://myprestareviews.com/dashboard/mysites/?domain=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['domain']->value, ENT_QUOTES, 'UTF-8');?>
">https://myprestareviews.com/</a> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'& sync data.','mod'=>'mpm_helpdesc'),$_smarty_tpl ) );?>
</div>
  <div class="step"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Thats all! Also, you can watch the video instruction: ','mod'=>'mpm_helpdesc'),$_smarty_tpl ) );?>
</div>
  <a class="video_instruction" target="_blank" href="https://youtu.be/hAwH4RssdLs">
    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['domain']->value, ENT_QUOTES, 'UTF-8');?>
modules/mpm_helpdesc/views/img/youtube.svg"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Watch how it works','mod'=>'mpm_helpdesc'),$_smarty_tpl ) );?>
</span>
  </a>
</div><?php }
}
