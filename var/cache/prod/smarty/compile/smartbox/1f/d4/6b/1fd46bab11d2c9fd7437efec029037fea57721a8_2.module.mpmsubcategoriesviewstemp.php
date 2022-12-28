<?php
/* Smarty version 3.1.47, created on 2022-12-27 01:43:16
  from 'module:mpmsubcategoriesviewstemp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aab024a3fe32_56504331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fd46bab11d2c9fd7437efec029037fea57721a8' => 
    array (
      0 => 'module:mpmsubcategoriesviewstemp',
      1 => 1672029351,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aab024a3fe32_56504331 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="block-category-info" style="<?php if ((isset($_smarty_tpl->tpl_vars['background']->value)) && $_smarty_tpl->tpl_vars['background']->value) {?>background: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['background']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;<?php }?>">
        <div class="container">
            <?php if ((isset($_smarty_tpl->tpl_vars['image']->value)) && $_smarty_tpl->tpl_vars['image']->value && (isset($_smarty_tpl->tpl_vars['cat']->value['img'])) && $_smarty_tpl->tpl_vars['cat']->value['img']) {?>
                <div class="block-category-cover">
                    <img alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cat']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cat']->value['img'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                </div>
            <?php }?>

            <div class="block-category-description"  <?php if ((isset($_smarty_tpl->tpl_vars['image']->value)) && $_smarty_tpl->tpl_vars['image']->value && $_smarty_tpl->tpl_vars['cat']->value['img']) {?> style="height: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cat']->value['height'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
px" <?php }?>>
                <?php if ($_smarty_tpl->tpl_vars['cat']->value['name'] && (isset($_smarty_tpl->tpl_vars['title']->value)) && $_smarty_tpl->tpl_vars['title']->value) {?>
                    <h1 class="h1"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cat']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h1>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['cat']->value['description'] && (isset($_smarty_tpl->tpl_vars['description']->value)) && $_smarty_tpl->tpl_vars['description']->value) {?>
                    <div id="block-category-description"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cat']->value['description'],'htmlall','UTF-8' ));?>
</div>
                <?php }?>
            </div>

            <div style="clear: both"></div>
        </div>
    </div>
<?php }
}
