<?php
/* Smarty version 3.1.47, created on 2022-12-27 01:41:03
  from 'C:\xampp\htdocs\prestashop\modules\ets_htmlbox\views\templates\admin\_configure\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aaaf9f62cc60_54951198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4db2d5f00e99054e3836a79eb6d43b17c00638c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\ets_htmlbox\\views\\templates\\admin\\_configure\\helpers\\form\\form.tpl',
      1 => 1672130397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aaaf9f62cc60_54951198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141000952463aaaf9f5d6163_21346900', "field");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "field"} */
class Block_141000952463aaaf9f5d6163_21346900 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_141000952463aaaf9f5d6163_21346900',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'checkbox') {?>
        <div class="col-lg-9">
            <div class="row html_column_2_col">
                <?php if (sizeof($_smarty_tpl->tpl_vars['input']->value['values']['query']) > 0) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values']['query'], 'position');
$_smarty_tpl->tpl_vars['position']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value) {
$_smarty_tpl->tpl_vars['position']->do_else = false;
?>
                        <div class="checkbox col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label for="position_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['position']->value['id'],'html','UTF-8' ));?>
">
                                <input type="checkbox" name="position[]"
                                       id="position_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['position']->value['id'],'html','UTF-8' ));?>
" class=""
                                       value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['position']->value['id'],'html','UTF-8' ));?>
"
                                       <?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value['position'])) && is_array($_smarty_tpl->tpl_vars['fields_value']->value['position']) && in_array($_smarty_tpl->tpl_vars['position']->value['id'],$_smarty_tpl->tpl_vars['fields_value']->value['position'])) {?>checked<?php }?>>
                                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['position']->value['name'],'html','UTF-8' ));?>

                                <span>
                                (<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['position']->value['hook'],'html','UTF-8' ));?>
)
                                <?php if ($_smarty_tpl->tpl_vars['position']->value['hook'] == 'displayCustomHTMLBox') {?>
                                    <div class="desc-hooks">
                                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Copy the hook below the paste into the .tpl file where you want display the HTML','mod'=>'ets_htmlbox'),$_smarty_tpl ) );?>
</p>
                                        <span title="Click to copy" style="position: relative;display: inline-block; vertical-align: middle;width: 240px;">
                                            <input class="ctf-short-code" value="{hook h='displayCustomHTMLBox'}" type="text" />
                                            <span class="text-copy"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Copied','mod'=>'ets_htmlbox'),$_smarty_tpl ) );?>
</span>
                                        </span>
                                    </div>
                                <?php }?>
                                </span>
                            </label>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            </div>
        </div>
    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php }
}
}
/* {/block "field"} */
}
