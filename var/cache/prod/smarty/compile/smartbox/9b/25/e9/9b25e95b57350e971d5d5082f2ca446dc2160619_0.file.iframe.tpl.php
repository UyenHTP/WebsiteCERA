<?php
/* Smarty version 3.1.47, created on 2022-12-27 01:49:06
  from 'C:\xampp\htdocs\prestashop\modules\ets_banneranywhere\views\templates\hook\iframe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aab1820d6f08_96854521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b25e95b57350e971d5d5082f2ca446dc2160619' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\ets_banneranywhere\\views\\templates\\hook\\iframe.tpl',
      1 => 1672118229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aab1820d6f08_96854521 (Smarty_Internal_Template $_smarty_tpl) {
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
