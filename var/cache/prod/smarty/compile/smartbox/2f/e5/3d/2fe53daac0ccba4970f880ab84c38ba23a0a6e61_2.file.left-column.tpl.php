<?php
/* Smarty version 3.1.47, created on 2022-12-27 01:43:16
  from 'C:\xampp\htdocs\prestashop\modules\mpm_blog\views\templates\front\left-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aab024e1dde1_58321896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fe53daac0ccba4970f880ab84c38ba23a0a6e61' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\mpm_blog\\views\\templates\\front\\left-column.tpl',
      1 => 1672029350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aab024e1dde1_58321896 (Smarty_Internal_Template $_smarty_tpl) {
?>  <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_search']) {?>
    <div class="block block_search block-left-column">
      <div class="title_block title-block-left-column"><span class="title_left_column"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search on Blog','mod'=>'mpm_blog'),$_smarty_tpl ) );?>
</span></div>
      <div class="left-column-arrows">
        <span class="column-arrows-add active" onclick=""><i class="material-icons">add</i></span>
        <span class="column-arrows-remove"  onclick=""><i class="material-icons">remove</i></span>
      </div>
      <div class="search_blog block_content content-block-left-column">
        <input type="text" class="search_blog_input search_query ac_input" placeholder="Search"/>
        <button onclick="searchBlog($('.search_blog_input').val(), '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blogUrl']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
'); return false;" class="search_blog_button">
          <i class="material-icons search">search</i>
        </button>
      </div>
    </div>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['settings']->value['show_categories']) {?>
    <div class="block block_categories block-left-column">
      <div class="title_block title-block-left-column"><span class="title_left_column"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Blog Categories','mod'=>'mpm_blog'),$_smarty_tpl ) );?>
</span></div>
      <div class="left-column-arrows">
        <span class="column-arrows-add active"  onclick=""><i class="material-icons">add</i></span>
        <span class="column-arrows-remove"  onclick=""><i class="material-icons">remove</i></span>
      </div>
      <div class="category_blog block_content list-block content-block-left-column">
        <ul class="categories">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogCat']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <li>
              <a class="category_name change_item" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blogUrl']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['link_rewrite'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
              <span class="count_children"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['count'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
            </li>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      </div>
    </div>
  <?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['settings']->value['show_archive'])) && $_smarty_tpl->tpl_vars['settings']->value['show_archive']) {?>
    <div class="block block_archive block-left-column">
      <div class="title_block title-block-left-column"><span class="title_left_column"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Blog Archive','mod'=>'mpm_blog'),$_smarty_tpl ) );?>
</span></div>
      <div class="left-column-arrows">
        <span class="column-arrows-add active"  onclick=""><i class="material-icons">add</i></span>
        <span class="column-arrows-remove"  onclick=""><i class="material-icons">remove</i></span>
      </div>
      <div class="archive_blog block_content list-block content-block-left-column">
        <ul class="archive">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['archives']->value, 'archive');
$_smarty_tpl->tpl_vars['archive']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['archive']->value) {
$_smarty_tpl->tpl_vars['archive']->do_else = false;
?>
            <li>
              <a class="archive_name change_item" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blogUrl']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
archive/<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['archive']->value['rez'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons">&#xE2C7;</i><span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['archive']->value['date'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span></a>
              <span class="count_children"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['archive']->value['count'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
            </li>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      </div>
    </div>
  <?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['settings']->value['show_tags'])) && $_smarty_tpl->tpl_vars['settings']->value['show_tags'] && count($_smarty_tpl->tpl_vars['most_tags']->value)) {?>
    <div class="block block_tags block-left-column">
      <div class="title_block title-block-left-column"><span class="title_left_column"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tags','mod'=>'mpm_blog'),$_smarty_tpl ) );?>
</span></div>
      <div class="left-column-arrows">
        <span class="column-arrows-add active"  onclick=""><i class="material-icons">add</i></span>
        <span class="column-arrows-remove"  onclick=""><i class="material-icons">remove</i></span>
      </div>
      <div class="tags_blog block_content list-block content-block-left-column">
        <div class="tags">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['most_tags']->value, 'tags', false, 'key');
$_smarty_tpl->tpl_vars['tags']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['tags']->value) {
$_smarty_tpl->tpl_vars['tags']->do_else = false;
?>
            <span onclick="searchBlog('<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tags']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blogUrl']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
'); return false;" class="tag_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tags']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <div style="clear: both"></div>
        </div>
      </div>
    </div>
  <?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['settings']->value['featured_posts'])) && $_smarty_tpl->tpl_vars['settings']->value['featured_posts'] && count($_smarty_tpl->tpl_vars['featured']->value)) {?>
    <div class="block block_featured block-left-column">
      <div class="title_block title-block-left-column" id="title_block_blog">
        <span class="title_left_column"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Featured articles','mod'=>'mpm_blog'),$_smarty_tpl ) );?>
</span>
        <span class="block_featured_arrows block_featured_arrows_base">
          <span class="bx-prev-blog" ><i class="material-icons">&#xE316;</i></span>
          <span class="bx-next-blog" ><i class="material-icons">&#xE313;</i></span>
        </span>
      </div>
      <div class="left-column-arrows">
        <span class="column-arrows-add active"  onclick=""><i class="material-icons">add</i></span>
        <span class="column-arrows-remove"  onclick=""><i class="material-icons">remove</i></span>
      </div>

      <div class="block_content  featured_blog" data-slides="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['settings']->value['number_featured_posts'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-count-slides="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( count($_smarty_tpl->tpl_vars['featured']->value),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" >
        <span class="block_featured_arrows block_featured_arrows_size">
          <span class="bx-prev-blog" ></span>
          <span class="bx-next-blog" ></span>
        </span>
        <ul class="featured content-block-left-column">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['featured']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
            <li>
              <div class="featured_cont">
                <span class="featured_name change_item" >
                  <span class="date_add_post"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['date_add'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                  <?php if ($_smarty_tpl->tpl_vars['value']->value['is_image']) {?>
                    <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blogUrl']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['link_rewrite_category'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['link_rewrite'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
.html">
                      <img alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['name'],40 )),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="featured_image" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['is_image'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['id_blog_post'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
-image_featured.jpg" />
                    </a>
                  <?php }?>
                  <a class="title_featured" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blogUrl']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['link_rewrite_category'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['link_rewrite'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
.html">
                    <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['name'],90 )),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                  </a>
                </span>
              </div>
            </li>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      </div>
    </div>
  <?php }
}
}
