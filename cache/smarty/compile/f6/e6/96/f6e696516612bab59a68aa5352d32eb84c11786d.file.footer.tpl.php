<?php /* Smarty version Smarty-3.1.19, created on 2018-02-14 07:41:42
         compiled from "/home/sa7rru46ljhy/public_html/dev/prestashop/themes/lab_ethan_fashion11/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6447692505a83e8365696a2-02009795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6e696516612bab59a68aa5352d32eb84c11786d' => 
    array (
      0 => '/home/sa7rru46ljhy/public_html/dev/prestashop/themes/lab_ethan_fashion11/footer.tpl',
      1 => 1514779591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6447692505a83e8365696a2-02009795',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
    'comparator_max_item' => 0,
    'link' => 0,
    'page_name' => 0,
    'compared_products' => 0,
    'lab_EnableFTM' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a83e8365aead0_35492444',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a83e8365aead0_35492444')) {function content_5a83e8365aead0_35492444($_smarty_tpl) {?>
<?php if (!isset($_smarty_tpl->tpl_vars['content_only']->value)||!$_smarty_tpl->tpl_vars['content_only']->value) {?>
					</div><!-- #container -->
					</div><!-- #center_column -->
					<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
						<div id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
					<?php }?>
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			<?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTER']->value)) {?>
				<!-- Footer -->
				<div class="footer-container">
					<footer id="footer">
						<div class="topFooter">
							<?php $_smarty_tpl->_capture_stack[0][] = array('blockFooter1', null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'blockFooter1'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
							<?php if (Smarty::$_smarty_vars['capture']['blockFooter1']) {?>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<?php echo Smarty::$_smarty_vars['capture']['blockFooter1'];?>

								</div>
							<?php }?>									
							
						</div>
						<div class="centerFooter">
							<?php $_smarty_tpl->_capture_stack[0][] = array('blockFooter2', null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'blockFooter2'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
							<?php if (Smarty::$_smarty_vars['capture']['blockFooter2']) {?>
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
									<?php echo Smarty::$_smarty_vars['capture']['blockFooter2'];?>

								</div>
							<?php }?>
							<?php $_smarty_tpl->_capture_stack[0][] = array('blockFooter3', null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'blockFooter3'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
							<?php if (Smarty::$_smarty_vars['capture']['blockFooter3']) {?>
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
									<?php echo Smarty::$_smarty_vars['capture']['blockFooter3'];?>

								</div>
							<?php }?>
							<?php $_smarty_tpl->_capture_stack[0][] = array('blockFooter4', null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'blockFooter4'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
							<?php if (Smarty::$_smarty_vars['capture']['blockFooter4']) {?>
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
									<?php echo Smarty::$_smarty_vars['capture']['blockFooter4'];?>

								</div>
							<?php }?>
							<?php $_smarty_tpl->_capture_stack[0][] = array('blockFooter5', null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'blockFooter5'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
							<?php if (Smarty::$_smarty_vars['capture']['blockFooter5']) {?>
								<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
									<?php echo Smarty::$_smarty_vars['capture']['blockFooter5'];?>

								</div>
							<?php }?>
						</div>
						
						<div class="bottomFooter">
							<?php $_smarty_tpl->_capture_stack[0][] = array('blockFooter6', null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'blockFooter6'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
							<?php if (Smarty::$_smarty_vars['capture']['blockFooter6']) {?>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<?php echo Smarty::$_smarty_vars['capture']['blockFooter6'];?>

								</div>
							<?php }?>
							<?php $_smarty_tpl->_capture_stack[0][] = array('blockFooter7', null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'blockFooter7'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
							<?php if (Smarty::$_smarty_vars['capture']['blockFooter7']) {?>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<?php echo Smarty::$_smarty_vars['capture']['blockFooter7'];?>

								</div>
							<?php }?>
						</div>
						
						<?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTER']->value)) {?>	
						<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

						<?php }?>
					</footer>
				</div><!-- #footer -->
			<?php }?>
		</div><!-- #page -->
<?php }?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'labscroll'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'labpopup'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAnywhere','mod'=>'labcompare','caller'=>'labcompare'),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['comparator_max_item']->value) {?>
    <div id="compare_message" class="dialog_message" style="display:none;">
        <div class="clearfix mar_b10">
            <div id="compare_pro_img" class="fl dialog_pro_img">
            </div>
            <div id="compare_pro_info" class="dialog_pro_info">
                <div id="compare_pro_title" class="dialog_pro_title"></div>
            </div>
        </div>
        <p id="compare_add_success" class="success hidden"><?php echo smartyTranslate(array('s'=>'has been added to compare.'),$_smarty_tpl);?>
</p>
        <p id="compare_remove_success" class="success hidden"><?php echo smartyTranslate(array('s'=>'has been removed from compare.'),$_smarty_tpl);?>
</p>
        <p id="compare_error" class="warning hidden"></p>
        <div class="dialog_action clearfix">
            <a id="compare_continue" class="fl button" href="javascript:;" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Continue shopping'),$_smarty_tpl);?>
</a>
            <a class="fr button" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Compare'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Compare'),$_smarty_tpl);?>
</a>
        </div>
    </div>
    <script type="text/javascript">
        // <![CDATA[
        var st_compare_min_item = '<?php echo smartyTranslate(array('s'=>'Please select at least one product','js'=>1),$_smarty_tpl);?>
';
        var st_compare_max_item = "<?php echo smartyTranslate(array('s'=>'You cannot add more than %d product(s) to the product comparison','sprintf'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value,'js'=>1),$_smarty_tpl);?>
";
        //]]>
    </script>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</body>
<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index'||$_smarty_tpl->tpl_vars['page_name']->value=='product') {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'min_item')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'min_item'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please select at least one product','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'min_item'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'max_item')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'max_item'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'You cannot add more than %d product(s) to the product comparison','sprintf'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value,'js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'max_item'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('comparator_max_item'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('comparedProductsIds'=>$_smarty_tpl->tpl_vars['compared_products']->value),$_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['lab_EnableFTM']->value) {?>
<script type="text/javascript">
	$(document).ready(function(){
		$(window).scroll(function() {
			var _height =$(".header-container").height();
			var scroll = $(window).scrollTop();
			if (scroll < _height) {
			 $(".header-container").removeClass("labfixed");
			}else{
			 $(".header-container").addClass("labfixed");
			}
		});
	});
</script>
<?php }?>
</html><?php }} ?>
