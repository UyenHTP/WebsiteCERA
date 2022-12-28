<?php
/* Smarty version 3.1.47, created on 2022-12-27 02:39:25
  from 'module:mpmcontactformviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63aabd4deb9a82_01007246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '054c3fab0c3f435c138d6baa226dc0068ea9f1fd' => 
    array (
      0 => 'module:mpmcontactformviewstempla',
      1 => 1672029350,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aabd4deb9a82_01007246 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['settings']->value['block_form']) {?>
    <div class="block_contact_form_front" id="block_contact_form_front" style="width:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['settings']->value['width_form'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
%">
        <div class="content_form">
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['title_block_form']) {?>
                <div class="title_column_form"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['settings']->value['title_block_form'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div>
            <?php }?>
            <div class="cont_column_form">
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['name_field']) {?>
                    <div class="one_field_form one_field_line">
                        <span class="label_field_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'mpm_contactform'),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['settings']->value['name_field_required']) {?><sup>*</sup><?php }?></span>
                        <input type="text" class="user_name">
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['email_field']) {?>
                    <div class="one_field_form one_field_line">
                        <span class="label_field_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email address','mod'=>'mpm_contactform'),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['settings']->value['email_field_required']) {?><sup>*</sup><?php }?></span>
                        <input type="text" class="user_email">
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['phone_field']) {?>
                    <div class="one_field_form one_field_line">
                        <span class="label_field_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone Number','mod'=>'mpm_contactform'),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['settings']->value['phone_field_required']) {?><sup>*</sup><?php }?></span>
                        <input type="text" class="user_phone">
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['subject_field']) {?>
                    <div class="one_field_form one_field_line">
                        <span class="label_field_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subject Heading','mod'=>'mpm_contactform'),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['settings']->value['subject_field_required']) {?><sup>*</sup><?php }?></span>
                        <input type="text" class="subject_message">
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['attach_field']) {?>
                    <div  class="one_field_form one_field_form_attach">
                        <span class="label_field_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attach File','mod'=>'mpm_contactform'),$_smarty_tpl ) );?>
</span>
                        <input type="file" name="fileUpload" class="filestyle"/>
                    </div>
                <?php }?>
                <div class="one_field_form one_field_line">
                    <span class="label_field_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Message','mod'=>'mpm_contactform'),$_smarty_tpl ) );?>
<sup>*</sup></span>
                    <textarea class="message"></textarea>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['captcha_field']) {?>
                    <div class="one_field_form one_field_form_captcha one_field_line">
                        <div class='captch_img_block_contact'><img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['captcha_url']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></div>
                        <div class='block_result_captcha'>
                            <input type='text' class='result_captcha' name='result_captcha' >
                        </div>
                        <div style="clear: both"></div>
                    </div>
                <?php }?>
                <div class="one_field_form one_field_form_button" id="one_field_form_button">
                    <button class="send_contact_form_message btn btn-primary" onclick="">
                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send message','mod'=>'mpm_contactform'),$_smarty_tpl ) );?>
</span>
                    </button>
                    <input type='hidden' class="base_url" name='base_url' value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['base_url']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                </div>
            </div>
        </div>
    </div>
<?php }
}
}
