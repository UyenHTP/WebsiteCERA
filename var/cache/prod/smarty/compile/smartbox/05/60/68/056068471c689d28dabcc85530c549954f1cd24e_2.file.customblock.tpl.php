<?php
/* Smarty version 3.1.47, created on 2022-12-27 01:43:41
  from 'C:\xampp\htdocs\prestashop\modules\mpm_testimonials\views\templates\hook\customblock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aab03d10b498_72465557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '056068471c689d28dabcc85530c549954f1cd24e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\mpm_testimonials\\views\\templates\\hook\\customblock.tpl',
      1 => 1672029351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aab03d10b498_72465557 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['items']->value)) && $_smarty_tpl->tpl_vars['items']->value) {?>
    <section class="testimonials">

        <div class="header_featured_slider"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Testimonials','mod'=>'mpm_testimonials'),$_smarty_tpl ) );?>
</span></div>

        <ul class="testimonials-list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <li class="testimonials-list-item">
                    <div class="testimonials-item-img"><?php if ($_smarty_tpl->tpl_vars['item']->value['image']) {?><img alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['image'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php }?></div>
                    <div class="testimonials-item-content">
                        <div class="testimonials-item-title"><i class="material-icons">done_all</i><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div>
                        <div class="testimonials-item-description"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['description'],'htmlall','UTF-8' ));?>
</div>
                    </div>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </section>
<?php }
}
}
