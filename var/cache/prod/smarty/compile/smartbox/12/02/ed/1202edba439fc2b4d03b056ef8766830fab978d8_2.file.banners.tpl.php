<?php
/* Smarty version 3.1.47, created on 2022-12-27 01:43:40
  from 'C:\xampp\htdocs\prestashop\modules\mpm_homeblocks\views\templates\hook\banners.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aab03c8e2e63_87334897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1202edba439fc2b4d03b056ef8766830fab978d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\mpm_homeblocks\\views\\templates\\hook\\banners.tpl',
      1 => 1672029350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aab03c8e2e63_87334897 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="homeBanner">
    <ul class="homeBannerContent" >
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
            <li data-position="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['position_description'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="item_block_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['id_homeblocks'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" style=' width: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['width'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
%;'>
                <div class="item_block_img">
                    <a <?php if ((isset($_smarty_tpl->tpl_vars['value']->value['link'])) && $_smarty_tpl->tpl_vars['value']->value['link']) {?>href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['link'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php }?>><img alt=" " src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['image'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></a>
                </div>
                <div class="item_block_content">
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['description'],'htmlall','UTF-8' ));?>

                </div>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>

</section><?php }
}
