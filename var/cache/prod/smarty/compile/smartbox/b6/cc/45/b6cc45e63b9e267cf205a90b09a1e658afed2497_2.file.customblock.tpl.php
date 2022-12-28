<?php
/* Smarty version 3.1.47, created on 2022-12-27 01:43:40
  from 'C:\xampp\htdocs\prestashop\modules\mpm_customblock\views\templates\hook\customblock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aab03c1c4040_97956781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6cc45e63b9e267cf205a90b09a1e658afed2497' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\mpm_customblock\\views\\templates\\hook\\customblock.tpl',
      1 => 1672029350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aab03c1c4040_97956781 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['items']->value)) && $_smarty_tpl->tpl_vars['items']->value) {?>
    <div class="customblock">
        <ul class="custom-list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <li class="custom-list-item custom-list-item-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                    <div class="custom-item-img"><?php if ($_smarty_tpl->tpl_vars['item']->value['image']) {?><img alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['image'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php }?></div>
                    <div class="custom-item-title"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div>
                    <div class="custom-item-description"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['description'],'htmlall','UTF-8' ));?>
</div>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
<?php }
}
}
