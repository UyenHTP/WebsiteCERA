<?php
/* Smarty version 3.1.47, created on 2022-12-27 01:43:16
  from 'module:mpmsocialbuttonsviewstemp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aab024831866_13361703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbf38e71bb65aaae36a83aca89b3bba6ebacfa2d' => 
    array (
      0 => 'module:mpmsocialbuttonsviewstemp',
      1 => 1672029351,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aab024831866_13361703 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-3 links footer_soc_button">
    <div class="row">


        <h3 class="h3 hidden-sm-down">Social</h3>

        <div class="title clearfix hidden-md-up" data-target="#footer_sub_menu_social" data-toggle="collapse">
            <span class="h3">Social</span>
            <span class="pull-xs-right">
              <span class="navbar-toggler collapse-icons">
                <i class="material-icons add">&#xE313;</i>
                <i class="material-icons remove">&#xE316;</i>
              </span>
            </span>
        </div>
        <ul id="footer_sub_menu_social" class="collapse">
            <?php if ((isset($_smarty_tpl->tpl_vars['facebook']->value)) && $_smarty_tpl->tpl_vars['facebook']->value) {?>
                <li class="facebook icon-gray">
                    <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['facebook']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></a>
                </li>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['twitter']->value)) && $_smarty_tpl->tpl_vars['twitter']->value) {?>
                <li class="twitter icon-gray">
                    <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['twitter']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></a>
                </li>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['rss']->value)) && $_smarty_tpl->tpl_vars['rss']->value) {?>
                <li class="rss icon-gray">
                    <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rss']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></a>
                </li>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['youtube']->value)) && $_smarty_tpl->tpl_vars['youtube']->value) {?>
                <li class="youtube icon-gray">
                    <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['youtube']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></a>
                </li>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['google']->value)) && $_smarty_tpl->tpl_vars['google']->value) {?>
                <li class="googleplus icon-gray">
                    <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['google']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></a>
                </li>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['pinterest']->value)) && $_smarty_tpl->tpl_vars['pinterest']->value) {?>
                <li class="pinterest icon-gray">
                    <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pinterest']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></a>
                </li>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['vimeo']->value)) && $_smarty_tpl->tpl_vars['vimeo']->value) {?>
                <li class="vimeo icon-gray">
                    <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['vimeo']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></a>
                </li>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['instagram']->value)) && $_smarty_tpl->tpl_vars['instagram']->value) {?>
                <li class="instagram icon-gray">
                    <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['instagram']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></a>
                </li>
            <?php }?>
        </ul>


    </div>
</div>
<?php }
}
