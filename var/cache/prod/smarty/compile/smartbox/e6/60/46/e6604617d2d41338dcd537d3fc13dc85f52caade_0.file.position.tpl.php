<?php
/* Smarty version 3.1.47, created on 2022-12-27 01:49:05
  from 'C:\xampp\htdocs\prestashop\modules\ets_banneranywhere\views\templates\hook\position.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aab18169b1d7_91303697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6604617d2d41338dcd537d3fc13dc85f52caade' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\ets_banneranywhere\\views\\templates\\hook\\position.tpl',
      1 => 1672118229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aab18169b1d7_91303697 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
if ($_smarty_tpl->tpl_vars['display_positions']->value) {?>
    <?php if (in_array('all',$_smarty_tpl->tpl_vars['display_positions']->value)) {?>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All','mod'=>'ets_banneranywhere'),$_smarty_tpl ) );?>
</p>
    <?php } else { ?>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['display_positions']->value, 'display_position');
$_smarty_tpl->tpl_vars['display_position']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['display_position']->value) {
$_smarty_tpl->tpl_vars['display_position']->do_else = false;
?>
                <?php if ((isset($_smarty_tpl->tpl_vars['positions']->value[$_smarty_tpl->tpl_vars['display_position']->value]))) {?>
                    <li><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['positions']->value[$_smarty_tpl->tpl_vars['display_position']->value],'[highlight]','<strong>'),'[end_highlight]','</strong>');?>
</li>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    <?php }
}
}
}
