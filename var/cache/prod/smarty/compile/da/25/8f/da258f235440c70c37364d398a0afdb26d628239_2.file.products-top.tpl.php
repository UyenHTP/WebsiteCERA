<?php
/* Smarty version 3.1.47, created on 2022-12-27 02:41:03
  from 'C:\xampp\htdocs\prestashop\themes\smartbox\templates\catalog\_partials\products-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aabdaf3ba5e3_13922551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da258f235440c70c37364d398a0afdb26d628239' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\smartbox\\templates\\catalog\\_partials\\products-top.tpl',
      1 => 1672029352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/sort-orders.tpl' => 1,
  ),
),false)) {
function content_63aabdaf3ba5e3_13922551 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list-top" class="products-selection">
    <div class="sort-by-block">
        <div class="sort-by-row">
            <ul class="display_list_grid">
                <li class="selected grid">
                    <a rel="nofollow" href="#" title="">
                        <i class="material-icons">view_module</i>
                    </a>
                </li>
                <li class="list">
                    <a rel="nofollow" href="#" title="">
                        <i class="material-icons">view_list</i>
                    </a>
                </li>
            </ul>
            <div class="listing_sort">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69733140063aabdaf3ad000_27394554', 'sort_by');
?>

            </div>

            <?php if (!empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
                <div class="col-sm-3 col-xs-4 hidden-md-up filter-button">
                    <button id="search_filter_toggler" class="btn btn-primary">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                    </button>
                </div>
            <?php }?>

            <div class="total-products">
                <?php if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'] > 1) {?>
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %product_count% products.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%product_count%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'])),$_smarty_tpl ) );?>
</p>
                <?php } elseif ($_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'] > 0) {?>
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is 1 product.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
                <?php }?>
            </div>
        </div>
    </div>
    <div class="col-sm-12 hidden-md-up text-xs-center showing">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Showing %from%-%to% of %total% item(s)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%from%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'],'%to%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_to'],'%total%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'])),$_smarty_tpl ) );?>

    </div>
    <div style="clear: both"></div>
</div>
<?php }
/* {block 'sort_by'} */
class Block_69733140063aabdaf3ad000_27394554 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sort_by' => 
  array (
    0 => 'Block_69733140063aabdaf3ad000_27394554',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/sort-orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sort_orders'=>$_smarty_tpl->tpl_vars['listing']->value['sort_orders']), 0, false);
?>
                <?php
}
}
/* {/block 'sort_by'} */
}
