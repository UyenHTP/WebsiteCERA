<?php
/* Smarty version 3.1.47, created on 2022-12-27 01:40:57
  from 'C:\xampp\htdocs\prestashop\modules\ets_htmlbox\views\templates\hook\iframe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aaaf996f92c3_35178561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e62de85782ca9b2ab711266a46241a938e7bdb4b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\ets_htmlbox\\views\\templates\\hook\\iframe.tpl',
      1 => 1672130397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aaaf996f92c3_35178561 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    function phProductFeedResizeIframe(obj) {
        $('iframe').css('height','auto');
        setTimeout(function() {
            $('iframe').css('opacity',1);
            var pHeight = $(obj).parent().height();
            $(obj).css('height','540px');
        }, 300);
    }
<?php echo '</script'; ?>
>
<div id="ph_preview_template_html">
    <iframe src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_iframe']->value,'html','UTF-8' ));?>
" style="background: #ffffff ; border : 1px solid #ccc;width:100%;height:0;opacity:0;border-radius:5px" onload="phProductFeedResizeIframe(this)"></iframe>
</div><?php }
}
