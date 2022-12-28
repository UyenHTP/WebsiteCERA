<?php
/* Smarty version 3.1.47, created on 2022-12-27 02:39:26
  from 'module:mpmcontactformviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aabd4e0777b6_38696435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dc3cda54363edc26443f0d689e918d12811d152' => 
    array (
      0 => 'module:mpmcontactformviewstempla',
      1 => 1672029350,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aabd4e0777b6_38696435 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['settings']->value['block_image']) {?>
    <div class="block_image_front" style="width:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['settings']->value['width_image'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
%">
        <div class="content_form">
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['title_block_image']) {?>
                <div class="title_column_form"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['settings']->value['title_block_image'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div>
            <?php }?>
            <div class="cont_column_form">
                <?php if ($_smarty_tpl->tpl_vars['images']->value) {?>
                    <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['images']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['settings']->value['title_block_image'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                <?php }?>
            </div>
        </div>
    </div>
<?php }
}
}
