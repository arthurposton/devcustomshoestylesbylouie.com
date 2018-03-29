<?php /* Smarty version Smarty-3.1.19, created on 2018-02-14 07:41:41
         compiled from "/home/sa7rru46ljhy/public_html/dev/prestashop/themes/lab_ethan_fashion11/modules/labpopupnewsletter/labpopupnewsletter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21257687985a83e835f317d3-72337163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39f722462028f72a70f62583baad549fae09d62d' => 
    array (
      0 => '/home/sa7rru46ljhy/public_html/dev/prestashop/themes/lab_ethan_fashion11/modules/labpopupnewsletter/labpopupnewsletter.tpl',
      1 => 1514779582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21257687985a83e835f317d3-72337163',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lab_array' => 0,
    'module_dir' => 0,
    'link' => 0,
    'msg' => 0,
    'nw_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a83e836014fe5_20565742',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a83e836014fe5_20565742')) {function content_5a83e836014fe5_20565742($_smarty_tpl) {?><div class="labpopupnewsletter" style="<?php if ($_smarty_tpl->tpl_vars['lab_array']->value['LAB_WIDTH']) {?>width:<?php echo $_smarty_tpl->tpl_vars['lab_array']->value['LAB_WIDTH'];?>
px;<?php }?><?php if ($_smarty_tpl->tpl_vars['lab_array']->value['LAB_HEIGHT']) {?>height:<?php echo $_smarty_tpl->tpl_vars['lab_array']->value['LAB_HEIGHT'];?>
px;<?php }?><?php if ($_smarty_tpl->tpl_vars['lab_array']->value['LAB_BG']==1) {?>background-image: url(<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value).((string)$_smarty_tpl->tpl_vars['popup_bg']->value));?>
);<?php }?>">
	<?php if ($_smarty_tpl->tpl_vars['lab_array']->value['LAB_NEWSLETTER']==1) {?>
	<div id="newsletter_block_popup" class="block">
		<div class="block_content">
		<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value) {?>
			<p class="<?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>warning_inline<?php } else { ?>success_inline<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
		<?php }?>
			<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index'), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
                            <?php if ($_smarty_tpl->tpl_vars['lab_array']->value['LAB_TITLE']!='') {?><div class="popup_title"><h2><?php echo $_smarty_tpl->tpl_vars['lab_array']->value['LAB_TITLE'];?>
</h2></div><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['lab_array']->value['LAB_TEXT']!='') {?><div class="popup_text"><?php echo $_smarty_tpl->tpl_vars['lab_array']->value['LAB_TEXT'];?>
</div><?php }?>
                            <div class="send-response"></div>
                            <input class="inputNew" id="newsletter-input-popup" type="text" name="email" value=""  placeholder="<?php echo smartyTranslate(array('s'=>'Enter your mail','mod'=>'labpopupnewsletter'),$_smarty_tpl);?>
" autocomplete="off"/>
                            
							<div class="send-reqest button_unique main_color_hover"><?php echo smartyTranslate(array('s'=>'Subscribe','mod'=>'labpopupnewsletter'),$_smarty_tpl);?>
</div>
			</form>
		</div>
                <div class="newsletter_block_popup-bottom">
                    <input id="newsletter_popup_dont_show_again" type="checkbox">
                    <label for="newsletter_popup_dont_show_again"><?php echo smartyTranslate(array('s'=>'Don\'t show this popup again','mod'=>'labpopupnewsletter'),$_smarty_tpl);?>
</label>
                </div>
	</div>
	<?php }?>
</div>
<?php if ($_smarty_tpl->tpl_vars['lab_array']->value['LAB_NEWSLETTER']==1) {?>
<script type="text/javascript">
    var placeholder2 = "<?php echo smartyTranslate(array('s'=>'YOUR E-MAIL','mod'=>'labpopupnewsletter','js'=>1),$_smarty_tpl);?>
";
    
        $(document).ready(function() {
            $('#newsletter_block_popup').on({
                focus: function() {
                    if ($(this).val() == placeholder2) {
                        $(this).val('');
                    }
                },
                blur: function() {
                    if ($(this).val() == '') {
                        $(this).val(placeholder2);
                    }
                }
            });
        });
    
</script>
<?php }?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('lab_width'=>$_smarty_tpl->tpl_vars['lab_array']->value['LAB_WIDTH']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('lab_height'=>$_smarty_tpl->tpl_vars['lab_array']->value['LAB_HEIGHT']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('lab_newsletter'=>$_smarty_tpl->tpl_vars['lab_array']->value['LAB_NEWSLETTER']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('lab_bg'=>$_smarty_tpl->tpl_vars['lab_array']->value['LAB_BG']),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('lab_path'=>$_smarty_tpl->tpl_vars['lab_array']->value['LAB_PATH']),$_smarty_tpl);?>
<?php }} ?>
