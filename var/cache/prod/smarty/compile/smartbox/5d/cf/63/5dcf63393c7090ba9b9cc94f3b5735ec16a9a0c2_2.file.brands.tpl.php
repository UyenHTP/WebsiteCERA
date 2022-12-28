<?php
/* Smarty version 3.1.47, created on 2022-12-27 01:43:40
  from 'C:\xampp\htdocs\prestashop\modules\mpm_brands\views\templates\hook\brands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aab03cc552e2_76970145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dcf63393c7090ba9b9cc94f3b5735ec16a9a0c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\mpm_brands\\views\\templates\\hook\\brands.tpl',
      1 => 1672029350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aab03cc552e2_76970145 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['manufacturers']->value) {?>
    <section class="container_manufacturer">

        <div class="container">
            <div class="row">
                <?php if ((isset($_smarty_tpl->tpl_vars['title_block']->value)) && $_smarty_tpl->tpl_vars['title_block']->value) {?>
                    <div class="title_manufacturer_block">
                        <div class="title"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brands','mod'=>'mpm_brands'),$_smarty_tpl ) );?>
</span></div>
                    </div>
                <?php }?>
                <div class="manufacturer-block">
                    <ul class="manufacturer-list-homepage manufacturer-slider" data-count="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( count($_smarty_tpl->tpl_vars['manufacturers']->value),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['manufacturers']->value, 'manufacturer', false, 'key');
$_smarty_tpl->tpl_vars['manufacturer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->do_else = false;
?>
                            <li class="manufacturer-item">
                                <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['manufacturer']->value['link'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title=" ">
                            <span class="img_block_manufacturer">
                                <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['manufacturer']->value['image'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['manufacturer']->value['name'],40,'...',true )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                            </span>
                                    <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
                                        <span class="title"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['manufacturer']->value['name'],40,'...',true )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                                    <?php }?>
                                </a>
                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            </div>
        </div>

    </section>
<?php }
}
}
