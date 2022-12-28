<?php
/* Smarty version 3.1.47, created on 2022-12-27 02:41:03
  from 'C:\xampp\htdocs\prestashop\themes\smartbox\templates\catalog\_partials\miniatures\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aabdaf5c1427_43331092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b96b3bdbe7f01ec1df859275ac963236a57dca49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\smartbox\\templates\\catalog\\_partials\\miniatures\\product.tpl',
      1 => 1672029352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/variant-links.tpl' => 1,
  ),
),false)) {
function content_63aabdaf5c1427_43331092 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138392963aabdaf5aadf2_68819568', 'product_miniature_item');
?>

<?php }
/* {block 'product_flags'} */
class Block_120475883263aabdaf5b0af1_34283135 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <ul class="product-flags-list">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['flag']->value['type'] !== 'discount') {?>
                                    <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
                                    <li class="discount"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</li>
                                <?php }?>
                            <?php }?>
                        </ul>
                    <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_thumbnail'} */
class Block_93559504963aabdaf5ad214_42758896 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                <div class="product_thumbnail_content">

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayImagesList','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
                        <img src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" >
                    </a>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120475883263aabdaf5b0af1_34283135', 'product_flags', $this->tplIndex);
?>

                    <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRatingProduct','id_product'=>$_prefixVariable1,'type'=>'category'),$_smarty_tpl ) );?>

                </div>
            <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_196217202363aabdaf5b5229_14977108 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <h1 class="h3 product-title"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h1>
                    <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_description'} */
class Block_55990392363aabdaf5b6721_94040856 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div class="description-informations">
                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['description'],300,'...' ));?>

                        </div>
                    <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_variants'} */
class Block_117269787063aabdaf5b7766_06063867 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
                            <div class="product_variants">
                                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?>
                            </div>
                        <?php }?>
                    <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_price_and_shipping'} */
class Block_20297045063aabdaf5b8a86_17212974 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
                            <div class="product-price-and-shipping">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

                                <span class="price  <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>has_discount<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>

                                <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

                                    <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
                                <?php }?>

                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

                            </div>
                        <?php }?>
                    <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_reviews'} */
class Block_83111306963aabdaf5bc613_48926001 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                    <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'add_to_cart'} */
class Block_19633927863aabdaf5bd0b1_84442127 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div class="product-add-to-cart">
                            <form action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Context::getContext()->link->getPageLink('cart',true),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" method="post" class="add-to-cart-or-refresh">
                                <input type="hidden" name="token" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Tools::getToken(false),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                <input type="hidden" name="id_product" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="product_page_product_id">
                                <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                <button class="btn add-to-cart btn-primary" <?php if ($_smarty_tpl->tpl_vars['product']->value['available_for_order'] && $_smarty_tpl->tpl_vars['product']->value['minimal_quantity'] > $_smarty_tpl->tpl_vars['product']->value['quantity']) {?>disabled<?php }?> data-button-action="add-to-cart" type="submit" >
                                    <i class="material-icons">shopping_cart</i>
                                    <span class="add_to_cart_tittle"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','mod'=>'mpm_bestbanners'),$_smarty_tpl ) );?>
 </span>
                                </button>
                            </form>
                        </div>
                    <?php
}
}
/* {/block 'add_to_cart'} */
/* {block 'quick_view'} */
class Block_106742719363aabdaf5c0a63_14815008 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <a class="quick-view" href="#" data-link-action="quickview">
                            <i class="material-icons search">&#xE8B6;</i>
                        </a>
                    <?php
}
}
/* {/block 'quick_view'} */
/* {block 'product_miniature_item'} */
class Block_138392963aabdaf5aadf2_68819568 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_138392963aabdaf5aadf2_68819568',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_93559504963aabdaf5ad214_42758896',
  ),
  'product_flags' => 
  array (
    0 => 'Block_120475883263aabdaf5b0af1_34283135',
  ),
  'product_name' => 
  array (
    0 => 'Block_196217202363aabdaf5b5229_14977108',
  ),
  'product_description' => 
  array (
    0 => 'Block_55990392363aabdaf5b6721_94040856',
  ),
  'product_variants' => 
  array (
    0 => 'Block_117269787063aabdaf5b7766_06063867',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_20297045063aabdaf5b8a86_17212974',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_83111306963aabdaf5bc613_48926001',
  ),
  'add_to_cart' => 
  array (
    0 => 'Block_19633927863aabdaf5bd0b1_84442127',
  ),
  'quick_view' => 
  array (
    0 => 'Block_106742719363aabdaf5c0a63_14815008',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <article class="product-miniature js-product-miniature product-miniature-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
">
        <div class="thumbnail-container">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93559504963aabdaf5ad214_42758896', 'product_thumbnail', $this->tplIndex);
?>





            <div class="highlighted-informations">
                <div class="product-description">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196217202363aabdaf5b5229_14977108', 'product_name', $this->tplIndex);
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55990392363aabdaf5b6721_94040856', 'product_description', $this->tplIndex);
?>


                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117269787063aabdaf5b7766_06063867', 'product_variants', $this->tplIndex);
?>


                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20297045063aabdaf5b8a86_17212974', 'product_price_and_shipping', $this->tplIndex);
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83111306963aabdaf5bc613_48926001', 'product_reviews', $this->tplIndex);
?>

                </div>

                <div class="button_block_prtoduct_list">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19633927863aabdaf5bd0b1_84442127', 'add_to_cart', $this->tplIndex);
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106742719363aabdaf5c0a63_14815008', 'quick_view', $this->tplIndex);
?>

                </div>

            </div>
            <div style="clear: both"></div>
        </div>
    </article>
<?php
}
}
/* {/block 'product_miniature_item'} */
}
