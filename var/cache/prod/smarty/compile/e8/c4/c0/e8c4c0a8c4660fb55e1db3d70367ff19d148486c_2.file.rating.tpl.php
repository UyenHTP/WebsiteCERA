<?php
/* Smarty version 3.1.47, created on 2022-12-27 01:43:17
  from 'C:\xampp\htdocs\prestashop\modules\mpm_helpdesc\views\templates\hook\rating.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aab0255b3af4_71704401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8c4c0a8c4660fb55e1db3d70367ff19d148486c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\mpm_helpdesc\\views\\templates\\hook\\rating.tpl',
      1 => 1672029350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aab0255b3af4_71704401 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['rating_type']->value || $_smarty_tpl->tpl_vars['rating_type']->value == mpm_helpdesc::CATEGORY || $_smarty_tpl->tpl_vars['rating_type']->value == mpm_helpdesc::STARS) {?>
  <div
    class="mpm_product_stars_block<?php if ($_smarty_tpl->tpl_vars['rating_type']->value == mpm_helpdesc::CATEGORY) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ps_version']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(mpm_helpdesc::CATEGORY, ENT_QUOTES, 'UTF-8');
}?>">
    <fieldset>
        <?php if (!(isset($_smarty_tpl->tpl_vars['review']->value['total_rating'])) || !$_smarty_tpl->tpl_vars['review']->value['total_rating']) {?>
          <i class="mpr-star"></i>
          <i class="mpr-star"></i>
          <i class="mpr-star"></i>
          <i class="mpr-star"></i>
          <i class="mpr-star"></i>
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['review']->value['total_rating'] == 0.5) {?>
              <i class="mpr-star-half"></i>
              <i class="mpr-star"></i>
              <i class="mpr-star"></i>
              <i class="mpr-star"></i>
              <i class="mpr-star"></i>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['review']->value['total_rating'] == 1) {?>
              <i class="mpr-s-star"></i>
              <i class="mpr-star"></i>
              <i class="mpr-star"></i>
              <i class="mpr-star"></i>
              <i class="mpr-star"></i>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['review']->value['total_rating'] == 1.5) {?>
              <i class="mpr-s-star"></i>
              <i class="mpr-star-half"></i>
              <i class="mpr-star"></i>
              <i class="mpr-star"></i>
              <i class="mpr-star"></i>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['review']->value['total_rating'] == 2) {?>
              <i class="mpr-s-star"></i>
              <i class="mpr-s-star"></i>
              <i class="mpr-star"></i>
              <i class="mpr-star"></i>
              <i class="mpr-star"></i>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['review']->value['total_rating'] == 2.5) {?>
              <i class="mpr-s-star"></i>
              <i class="mpr-s-star"></i>
              <i class="mpr-star-half"></i>
              <i class="mpr-star"></i>
              <i class="mpr-star"></i>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['review']->value['total_rating'] == 3) {?>
              <i class="mpr-s-star"></i>
              <i class="mpr-s-star"></i>
              <i class="mpr-s-star"></i>
              <i class="mpr-star"></i>
              <i class="mpr-star"></i>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['review']->value['total_rating'] == 3.5) {?>
              <i class="mpr-s-star"></i>
              <i class="mpr-s-star"></i>
              <i class="mpr-s-star"></i>
              <i class="mpr-star-half"></i>
              <i class="mpr-star"></i>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['review']->value['total_rating'] == 4) {?>
              <i class="mpr-s-star"></i>
              <i class="mpr-s-star"></i>
              <i class="mpr-s-star"></i>
              <i class="mpr-s-star"></i>
              <i class="mpr-star"></i>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['review']->value['total_rating'] == 4.5) {?>
              <i class="mpr-s-star"></i>
              <i class="mpr-s-star"></i>
              <i class="mpr-s-star"></i>
              <i class="mpr-s-star"></i>
              <i class="mpr-star-half"></i>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['review']->value['total_rating'] == 5) {?>
              <i class="mpr-s-star"></i>
              <i class="mpr-s-star"></i>
              <i class="mpr-s-star"></i>
              <i class="mpr-s-star"></i>
              <i class="mpr-s-star"></i>
            <?php }?>
        <?php }?>
    </fieldset>
      <?php if (!$_smarty_tpl->tpl_vars['rating_type']->value) {?>
        <a class="count_reviews" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_link']->value, ENT_QUOTES, 'UTF-8');?>
#mpm_reviews_tab">
            <?php if ((isset($_smarty_tpl->tpl_vars['review']->value['reviews_count'])) && $_smarty_tpl->tpl_vars['review']->value['reviews_count']) {?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['reviews_count'], ENT_QUOTES, 'UTF-8');?>

            <?php } else { ?>
              0
            <?php }?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'reviews','mod'=>'mpm_helpdesc'),$_smarty_tpl ) );?>

        </a>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['rating_type']->value == mpm_helpdesc::CATEGORY) {?>
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_link']->value, ENT_QUOTES, 'UTF-8');?>
#reviews" class="count_reviews">
            <?php if ((isset($_smarty_tpl->tpl_vars['review']->value['reviews_count'])) && $_smarty_tpl->tpl_vars['review']->value['reviews_count']) {?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['reviews_count'], ENT_QUOTES, 'UTF-8');?>

            <?php } else { ?>
                0
            <?php }?>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'reviews','mod'=>'mpm_helpdesc'),$_smarty_tpl ) );?>

        </a>
      <?php }?>
  </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['rating_type']->value == mpm_helpdesc::REVIEWS_COUNT || $_smarty_tpl->tpl_vars['rating_type']->value == mpm_helpdesc::RATING_COUNT || $_smarty_tpl->tpl_vars['rating_type']->value == mpm_helpdesc::TOTAL_RATING) {?>
    <div class="mpm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rating_type']->value, ENT_QUOTES, 'UTF-8');?>
">
      <?php if ($_smarty_tpl->tpl_vars['review']->value) {?>
          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value[$_smarty_tpl->tpl_vars['rating_type']->value], ENT_QUOTES, 'UTF-8');?>

      <?php } else { ?>
          0
      <?php }?>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['rating_type']->value == mpm_helpdesc::WRITE_REVIEW) {?>
    <div class="mpm_write_review">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Leave review','mod'=>'mpm_helpdesc'),$_smarty_tpl ) );?>

    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['rating_type']->value == mpm_helpdesc::ASK_QUESTION) {?>
    <div class="mpm_ask_question">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ask a question','mod'=>'mpm_helpdesc'),$_smarty_tpl ) );?>

    </div>
<?php }
}
}
