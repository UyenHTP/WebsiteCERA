<?php
/* Smarty version 3.1.47, created on 2022-12-27 02:39:26
  from 'module:mpmcontactformviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aabd4e0f3d81_91701527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30f3c966726d92786018110fc45613d63d02ceed' => 
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
function content_63aabd4e0f3d81_91701527 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['settings']->value['block_maps']) {?>
    <div class="block_maps_front" style="width:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['settings']->value['width_maps_block'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
%">
        <div class="content_form"  id="block_maps_gm" style="width: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['settings']->value['width_maps'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
px" >
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['title_block_maps']) {?>
                <div class="title_column_form"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['settings']->value['title_block_maps'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div>
            <?php }?>
            <iframe src="<?php if ($_smarty_tpl->tpl_vars['maps']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['maps']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" width="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['settings']->value['width_maps'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['settings']->value['height_maps'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" frameborder="0" style="border:0" ></iframe>
        </div>
    </div>
<?php }
}
}
