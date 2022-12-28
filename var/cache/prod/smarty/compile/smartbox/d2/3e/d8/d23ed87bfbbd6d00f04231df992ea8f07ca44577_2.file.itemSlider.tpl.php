<?php
/* Smarty version 3.1.47, created on 2022-12-27 01:43:40
  from 'C:\xampp\htdocs\prestashop\modules\mpm_customfeatured\views\templates\hook\itemSlider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aab03ca75a55_18846364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd23ed87bfbbd6d00f04231df992ea8f07ca44577' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\mpm_customfeatured\\views\\templates\\hook\\itemSlider.tpl',
      1 => 1672029350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_63aab03ca75a55_18846364 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['tabs']->value)) && $_smarty_tpl->tpl_vars['tabs']->value && $_smarty_tpl->tpl_vars['products']->value) {?>

    <div class="mpm_customfeatured">


        <div class="customfeatured_block">
            <input type="hidden" name="basePath" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['basePath']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="id_shop" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_shop']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="id_lang" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_lang']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
            <ul class="block_home_featured">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'tab', false, 'key');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
                    <li data-tab="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['id_customfeatured'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="tab_featured <?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?> active<?php }?>"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tab']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <li style="clear: both"></li>
            </ul>
        </div>


        <div class="home_featured_product_list block_featured_slider ">
            <div class="progres_bar_featured"><div class="loading"><div></div></div></div>
            <div class="customfeatured_slider">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'key');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>

<?php }
}
}
