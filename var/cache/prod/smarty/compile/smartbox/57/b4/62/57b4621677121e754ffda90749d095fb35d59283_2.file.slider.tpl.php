<?php
/* Smarty version 3.1.47, created on 2022-12-27 01:43:40
  from 'C:\xampp\htdocs\prestashop\modules\mpm_homeslider\views\templates\hook\slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aab03c034e39_64225249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57b4621677121e754ffda90749d095fb35d59283' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\mpm_homeslider\\views\\templates\\hook\\slider.tpl',
      1 => 1672029351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aab03c034e39_64225249 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['slides']->value) > 0 && $_smarty_tpl->tpl_vars['settings']->value['active']) {?>
    <div class="carousel-container carousel-homeslider" style="max-height: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['settings']->value['height'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
px">
        <div id="carousel" >
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slides']->value, 'slide');
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
?>
                <div class="carousel-feature">
                    <a <?php if ((isset($_smarty_tpl->tpl_vars['slide']->value['url'])) && $_smarty_tpl->tpl_vars['slide']->value['url']) {?> href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['url'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['slide']->value['title'])) && $_smarty_tpl->tpl_vars['slide']->value['title']) {?> title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php }?>>
                        <img class="carousel-image" <?php if ((isset($_smarty_tpl->tpl_vars['slide']->value['caption'])) && $_smarty_tpl->tpl_vars['slide']->value['caption']) {?> alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['caption'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php }?> src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['img_dir']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['image'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                    
					    <?php if ((isset($_smarty_tpl->tpl_vars['slide']->value['description'])) && $_smarty_tpl->tpl_vars['slide']->value['description']) {?>
                            <div  class="carousel-caption" data-position-desc="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['position_desc'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" style="
                                    width: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['width_desc'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
px;
                                    height: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['height_desc'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
px;
                            <?php if ($_smarty_tpl->tpl_vars['slide']->value['position_desc'] == 'top_left') {?>
                                    top:10px;
                                    left:10px;
                                    right: inherit;
                                    bottom: inherit;
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['slide']->value['position_desc'] == 'top_right') {?>
                                    top:10px;
                                    right:10px;
                                    left: inherit;
                                    bottom: inherit;
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['slide']->value['position_desc'] == 'bottom_right') {?>
                                    bottom:10px;
                                    right:10px;
                                    left: inherit;
                                    top: inherit;
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['slide']->value['position_desc'] == 'bottom_left') {?>
                                    bottom:10px;
                                    left:10px;
                                    right: inherit;
                                    top: inherit;
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['slide']->value['position_desc'] == 'center') {?>

                                    top:calc(50% - <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ($_smarty_tpl->tpl_vars['slide']->value['height_desc']/2),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
px);
                                    left:calc(50% - <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ($_smarty_tpl->tpl_vars['slide']->value['width_desc']/2),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
px);
                                    margin: 0 auto;

                            <?php }?>">

                                <?php if ($_smarty_tpl->tpl_vars['slide']->value['opacity_desc']) {?>
                                    <span class="carousel-caption-opacity" style=" opacity: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['opacity_desc'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;    "></span>
                                <?php }?>

                                <div class="carousel-caption-cont">
                                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['description'],'htmlall','UTF-8' ));?>

                                </div>
                            </div>
                        <?php }?>
					
					</a>

                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
    <div style="clear: both"></div>
<?php }?>

<?php }
}
