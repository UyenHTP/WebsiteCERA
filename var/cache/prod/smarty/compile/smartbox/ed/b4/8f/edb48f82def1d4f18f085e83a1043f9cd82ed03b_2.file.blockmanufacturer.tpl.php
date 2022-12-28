<?php
/* Smarty version 3.1.47, created on 2022-12-27 01:43:17
  from 'C:\xampp\htdocs\prestashop\modules\mpm_brands\views\templates\hook\blockmanufacturer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aab0250ac138_58769367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edb48f82def1d4f18f085e83a1043f9cd82ed03b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\mpm_brands\\views\\templates\\hook\\blockmanufacturer.tpl',
      1 => 1672029350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aab0250ac138_58769367 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="manufacturers_block_left" class="block blockmanufacturer block-left-column">

	<div onclick="" class="title_block title-block-left-column"> <a class="title_left_column" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brands','mod'=>'mpm_brands'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brands','mod'=>'mpm_brands'),$_smarty_tpl ) );?>
</a> </div>
	<div class="left-column-arrows">
		<span class="column-arrows-add active"  onclick=""><i class="material-icons">add</i></span>
		<span class="column-arrows-remove"  onclick=""><i class="material-icons">remove</i></span>
	</div>
	<div class="block_content list-block content-block-left-column">
		<?php if ($_smarty_tpl->tpl_vars['manufacturers']->value) {?>
			<ul class="bullet ">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['manufacturers']->value, 'manufacturer');
$_smarty_tpl->tpl_vars['manufacturer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->do_else = false;
?>
					<li class="manufacturer_item">
						<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['manufacturer']->value['link'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More about %s','sprintf'=>array(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['manufacturer']->value['name'],'htmlall','UTF-8' ))),'mod'=>'mpm_brands'),$_smarty_tpl ) );?>
">
							<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['manufacturer']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

						</a>
					</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>

		<?php }?>
	</div>
</div>

<?php }
}
