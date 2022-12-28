<?php
/* Smarty version 3.1.47, created on 2022-12-27 01:43:17
  from 'module:mpmimageslistviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aab02552e848_82644139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd87ca99be020de72a24843a48d592202fd697f46' => 
    array (
      0 => 'module:mpmimageslistviewstemplat',
      1 => 1672029351,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aab02552e848_82644139 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="images-list-block">
    <a class="prev-img" data-id-product="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_product']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons">keyboard_arrow_left</i></a>
    <ul class="list-images">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image', false, 'key');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
            <li  class="image-item <?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?> first <?php }?> <?php if ($_smarty_tpl->tpl_vars['count_images']->value == ($_smarty_tpl->tpl_vars['key']->value+1)) {?> last <?php }?> <?php if ($_smarty_tpl->tpl_vars['cover']->value == $_smarty_tpl->tpl_vars['image']->value) {?> selected<?php }?>" data-href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <a class="next-img" data-id-product="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_product']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons">keyboard_arrow_right</i></a>
</div><?php }
}
