<?php
/* Smarty version 3.1.47, created on 2022-12-27 02:39:25
  from 'C:\xampp\htdocs\prestashop\modules\mpm_contactform\views\templates\hook\blockcontactform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aabd4dbc6791_82265786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85485ab7dce7d6663b9fc4d66f0f97220b4338a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\mpm_contactform\\views\\templates\\hook\\blockcontactform.tpl',
      1 => 1672029350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:mpm_contactform/views/templates/hook/blockDescription.tpl' => 4,
    'module:mpm_contactform/views/templates/hook/blockForm.tpl' => 4,
    'module:mpm_contactform/views/templates/hook/blockImage.tpl' => 4,
    'module:mpm_contactform/views/templates/hook/blockMaps.tpl' => 4,
  ),
),false)) {
function content_63aabd4dbc6791_82265786 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71557315263aabd4dba2295_34539341', 'left_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210575871463aabd4dba2c97_42216069', 'page_content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'left_column'} */
class Block_71557315263aabd4dba2295_34539341 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_71557315263aabd4dba2295_34539341',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'left_column'} */
/* {block 'page_content'} */
class Block_210575871463aabd4dba2c97_42216069 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_210575871463aabd4dba2c97_42216069',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="contactFormContent" id="contactFormContent">

        <?php if ($_smarty_tpl->tpl_vars['settings']->value['block_description'] && $_smarty_tpl->tpl_vars['settings']->value['position_description'] == 'left') {?>
            <?php $_smarty_tpl->_subTemplateRender("module:mpm_contactform/views/templates/hook/blockDescription.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>1), 0, false);
?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['settings']->value['block_form'] && $_smarty_tpl->tpl_vars['settings']->value['position_form'] == 'left') {?>
            <?php $_smarty_tpl->_subTemplateRender("module:mpm_contactform/views/templates/hook/blockForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['settings']->value['block_image'] && $_smarty_tpl->tpl_vars['settings']->value['position_image'] == 'left') {?>
            <?php $_smarty_tpl->_subTemplateRender("module:mpm_contactform/views/templates/hook/blockImage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>1), 0, false);
?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['settings']->value['block_maps'] && $_smarty_tpl->tpl_vars['settings']->value['position_maps'] == 'left') {?>
            <?php $_smarty_tpl->_subTemplateRender("module:mpm_contactform/views/templates/hook/blockMaps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>1), 0, false);
?>
        <?php }?>


        <?php if ($_smarty_tpl->tpl_vars['settings']->value['block_description'] && $_smarty_tpl->tpl_vars['settings']->value['position_description'] == 'center') {?>
            <?php $_smarty_tpl->_subTemplateRender("module:mpm_contactform/views/templates/hook/blockDescription.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>2), 0, true);
?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['settings']->value['block_form'] && $_smarty_tpl->tpl_vars['settings']->value['position_form'] == 'center') {?>
            <?php $_smarty_tpl->_subTemplateRender("module:mpm_contactform/views/templates/hook/blockForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>2), 0, true);
?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['settings']->value['block_image'] && $_smarty_tpl->tpl_vars['settings']->value['position_image'] == 'center') {?>
            <?php $_smarty_tpl->_subTemplateRender("module:mpm_contactform/views/templates/hook/blockImage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>2), 0, true);
?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['settings']->value['block_maps'] && $_smarty_tpl->tpl_vars['settings']->value['position_maps'] == 'center') {?>
            <?php $_smarty_tpl->_subTemplateRender("module:mpm_contactform/views/templates/hook/blockMaps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>2), 0, true);
?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['settings']->value['block_description'] && $_smarty_tpl->tpl_vars['settings']->value['position_description'] == 'right') {?>
            <?php $_smarty_tpl->_subTemplateRender("module:mpm_contactform/views/templates/hook/blockDescription.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>3), 0, true);
?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['settings']->value['block_form'] && $_smarty_tpl->tpl_vars['settings']->value['position_form'] == 'right') {?>
            <?php $_smarty_tpl->_subTemplateRender("module:mpm_contactform/views/templates/hook/blockForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>3), 0, true);
?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['settings']->value['block_image'] && $_smarty_tpl->tpl_vars['settings']->value['position_image'] == 'right') {?>
            <?php $_smarty_tpl->_subTemplateRender("module:mpm_contactform/views/templates/hook/blockImage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>3), 0, true);
?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['settings']->value['block_maps'] && $_smarty_tpl->tpl_vars['settings']->value['position_maps'] == 'right') {?>
            <?php $_smarty_tpl->_subTemplateRender("module:mpm_contactform/views/templates/hook/blockMaps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>3), 0, true);
?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['settings']->value['block_description'] && $_smarty_tpl->tpl_vars['settings']->value['position_description'] == 'bottom') {?>
            <?php $_smarty_tpl->_subTemplateRender("module:mpm_contactform/views/templates/hook/blockDescription.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>4), 0, true);
?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['settings']->value['block_form'] && $_smarty_tpl->tpl_vars['settings']->value['position_form'] == 'bottom') {?>
            <?php $_smarty_tpl->_subTemplateRender("module:mpm_contactform/views/templates/hook/blockForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>4), 0, true);
?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['settings']->value['block_image'] && $_smarty_tpl->tpl_vars['settings']->value['position_image'] == 'bottom') {?>
            <?php $_smarty_tpl->_subTemplateRender("module:mpm_contactform/views/templates/hook/blockImage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>4), 0, true);
?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['settings']->value['block_maps'] && $_smarty_tpl->tpl_vars['settings']->value['position_maps'] == 'bottom') {?>
            <?php $_smarty_tpl->_subTemplateRender("module:mpm_contactform/views/templates/hook/blockMaps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>4), 0, true);
?>
        <?php }?>

        <div style="clear: both"></div>
        <div class="hidden_block">
            <input type="hidden" class="id_shop" name="idShop" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_shop']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" class="id_lang" name="idLang" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_lang']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                    </div>
        <div class="form_notice_contact_form_ov"> </div>
        <div class="form_notice_contact_form_hidden">
            <div class="notice_error"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some error occurred please contact us!','mod'=>'mpm_contactform'),$_smarty_tpl ) );?>
 </div>
            <div class="notice_success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Message successfully sent! Our manager will contact you!','mod'=>'mpm_contactform'),$_smarty_tpl ) );?>
 </div>
        </div>
    </div>

    <style>
        .contactFormContent, .form_notice_contact_form{
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['background']) {?>
                background-color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['settings']->value['background'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
                border: 1px solid <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['settings']->value['background'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
            <?php } else { ?>
                background-color: #FAFAFA;
                border: 1px solid #FAFAFA;
            <?php }?>



            <?php if ($_smarty_tpl->tpl_vars['settings']->value['color']) {?>
                color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['settings']->value['color'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
            <?php } else { ?>
                color: #000000;
            <?php }?>
        }





    </style>

<?php
}
}
/* {/block 'page_content'} */
}
