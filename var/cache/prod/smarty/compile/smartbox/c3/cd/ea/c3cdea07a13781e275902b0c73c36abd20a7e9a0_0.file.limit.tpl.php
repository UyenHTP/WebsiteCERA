<?php
/* Smarty version 3.1.47, created on 2022-12-27 02:05:26
  from 'C:\xampp\htdocs\prestashop\modules\ets_htmlbox\views\templates\hook\limit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aab55630c891_64465087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3cdea07a13781e275902b0c73c36abd20a7e9a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\ets_htmlbox\\views\\templates\\hook\\limit.tpl',
      1 => 1672130397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aab55630c891_64465087 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="limit results">
    <label class="" for="paginator_select_limit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Items per page:','mod'=>'ets_htmlbox'),$_smarty_tpl ) );?>
</label>
    <div>
        <select id="paginator_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pageName']->value,'html','UTF-8' ));?>
_select_limit" class="pagination-link custom-select paginator_select_limit" name="paginator_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pageName']->value,'html','UTF-8' ));?>
_select_limit" >
            <option value="10" <?php if ($_smarty_tpl->tpl_vars['limit']->value == 10) {?> selected="selected"<?php }?>>10</option>
            <option value="20" <?php if ($_smarty_tpl->tpl_vars['limit']->value == 20) {?> selected="selected"<?php }?>>20</option>
            <option value="50" <?php if ($_smarty_tpl->tpl_vars['limit']->value == 50) {?> selected="selected"<?php }?>>50</option>
            <option value="100" <?php if ($_smarty_tpl->tpl_vars['limit']->value == 100) {?> selected="selected"<?php }?>>100</option>
            <option value="300" <?php if ($_smarty_tpl->tpl_vars['limit']->value == 300) {?> selected="selected"<?php }?>>300</option>
        </select>
    </div>
</div><?php }
}
