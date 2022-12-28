<?php
/* Smarty version 3.1.47, created on 2022-12-27 02:39:25
  from 'module:mpmcontactformviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aabd4de4e777_71082990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8689da04852147075808542e427985426eb94d7f' => 
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
function content_63aabd4de4e777_71082990 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['settings']->value['block_description']) {?>
    <div class="block_description_front" style="width:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['settings']->value['width_description'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
%">
        <div class="content_form">
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['title_block_description']) {?>
                <div class="title_column_form"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['settings']->value['title_block_description'],'htmlall','UTF-8' ));?>
</div>
            <?php }?>
            <div class="cont_column_form"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['settings']->value['description'],'htmlall','UTF-8' ));?>
</div>
        </div>
    </div>
<?php }
}
}
