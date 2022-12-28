<?php
/* Smarty version 3.1.47, created on 2022-12-27 02:58:52
  from 'C:\xampp\htdocs\prestashop\admin319fxt2sn\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aac1dc61d391_61241664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf204e06a5bab2455ffd9847b7fabf05a1d7431c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin319fxt2sn\\themes\\default\\template\\content.tpl',
      1 => 1672028634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aac1dc61d391_61241664 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
