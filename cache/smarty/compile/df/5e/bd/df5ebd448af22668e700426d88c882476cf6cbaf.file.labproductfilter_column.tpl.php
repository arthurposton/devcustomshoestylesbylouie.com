<?php /* Smarty version Smarty-3.1.19, created on 2018-02-14 07:41:42
         compiled from "/home/sa7rru46ljhy/public_html/dev/prestashop/themes/lab_ethan_fashion11/modules/labproductfilter/views/templates/hook/labproductfilter_column.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5724169105a83e8364eeab3-91125057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df5ebd448af22668e700426d88c882476cf6cbaf' => 
    array (
      0 => '/home/sa7rru46ljhy/public_html/dev/prestashop/themes/lab_ethan_fashion11/modules/labproductfilter/views/templates/hook/labproductfilter_column.tpl',
      1 => 1514779582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5724169105a83e8364eeab3-91125057',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'group_prod_fliter' => 0,
    'product_hook' => 0,
    'product_groups' => 0,
    'product_group' => 0,
    'count' => 0,
    'use_slider' => 0,
    'id' => 0,
    'number_line' => 0,
    'product' => 0,
    'link' => 0,
    'PS_CATALOG_MODE' => 0,
    'restricted_country_mode' => 0,
    'priceDisplay' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a83e8365592d1_16183057',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a83e8365592d1_16183057')) {function content_5a83e8365592d1_16183057($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['product_hook'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_hook']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group_prod_fliter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_hook']->key => $_smarty_tpl->tpl_vars['product_hook']->value) {
$_smarty_tpl->tpl_vars['product_hook']->_loop = true;
?>
	<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['product_hook']->value['id_labproductfilter'], null, 0);?>
	<?php $_smarty_tpl->tpl_vars['use_slider'] = new Smarty_variable($_smarty_tpl->tpl_vars['product_hook']->value['use_slider'], null, 0);?>
<?php } ?>
<?php $_smarty_tpl->tpl_vars['number_line'] = new Smarty_variable(2, null, 0);?>
<?php $_smarty_tpl->tpl_vars['id_lang'] = new Smarty_variable(Context::getContext()->language->id, null, 0);?>
<?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(12/count($_smarty_tpl->tpl_vars['product_groups']->value), null, 0);?>
<?php  $_smarty_tpl->tpl_vars['product_group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['product_group']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product_group']->key => $_smarty_tpl->tpl_vars['product_group']->value) {
$_smarty_tpl->tpl_vars['product_group']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['product_group']['iteration']++;
?>
	<div class="laberthemes <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_group']->value['class'], ENT_QUOTES, 'UTF-8', true);?>
 lab<?php echo $_smarty_tpl->tpl_vars['product_hook']->value['type_display'];?>
   col-lg-<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 col-md-<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 col-sm-<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 col-xs-12 wow fadeInUp " data-wow-delay="<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['product_group']['iteration'];?>
00ms">
		<div class="row">
		<p class="title_block"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_group']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</span></p>
		<?php if ($_smarty_tpl->tpl_vars['use_slider']->value==1) {?>
		<div class="lab_boxnp">
			<a class="prev prev<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_group']->value['class'], ENT_QUOTES, 'UTF-8', true);?>
<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><i class="icon icon-angle-left"></i></a>
			<a class="next next<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_group']->value['class'], ENT_QUOTES, 'UTF-8', true);?>
<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><i class="icon icon-angle-right"></i></a>
		</div> 
		<?php }?>
		<div class="LabProducts product_list">
		<div class="owlProducts-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_group']->value['class'], ENT_QUOTES, 'UTF-8', true);?>
">
			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_group']->value['product_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['product_list']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['product_list']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['product_list']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
				<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['product_list']['iteration']%$_smarty_tpl->tpl_vars['number_line']->value==1||$_smarty_tpl->tpl_vars['number_line']->value==1) {?>
				<div class="item-inner ajax_block_product">
				<?php }?>
					<div class="item">
						<div class="product-container media-body">
							<div class="left-block pull-left">
								<a class="product_image" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'medium_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
" /></a>
							</div>
							<div class="right-block media-body">
								<h5 class="product-name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></h5>
								
								<?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))) {?>
									<div class="content_price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
										<?php if (isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
											<span itemprop="price" class="price product-price">
												<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
											</span>
											<meta itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->iso_code, ENT_QUOTES, 'UTF-8', true);?>
" />
											<?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']>0) {?>
												<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl);?>

												<span class="old-price product-price">
													<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),$_smarty_tpl);?>

												</span>
												<!-- <?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type']=='percentage') {?>
													<span class="price-percent-reduction">-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'], ENT_QUOTES, 'UTF-8', true)*100;?>
%</span>
												<?php }?> -->
											<?php }?>
											
											<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl);?>

											<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl);?>

										<?php }?>
									</div>
								<?php }?>
								<?php $_smarty_tpl->_capture_stack[0][] = array('displayProductListReviews', null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<?php if (Smarty::$_smarty_vars['capture']['displayProductListReviews']) {?>
									<div class="hook-reviews">
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

									</div>
								<?php }?>
							</div>
							
						</div>
					</div>
				<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['product_list']['iteration']%$_smarty_tpl->tpl_vars['number_line']->value==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['product_list']['last']||$_smarty_tpl->tpl_vars['number_line']->value==1) {?>
				</div>
				<?php }?>
			<?php } ?>
		</div>
		
		</div>
	</div>
	</div>
<?php if ($_smarty_tpl->tpl_vars['use_slider']->value==1) {?>
	<script type="text/javascript">
		$(document).ready(function() {
			var owl = $(".owlProducts-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_group']->value['class'], ENT_QUOTES, 'UTF-8', true);?>
");
			owl.owlCarousel({
				items : 3,
				itemsDesktop : [1199,3],
				itemsDesktopSmall : [991,3],
				itemsTablet: [767,2],
				itemsMobile : [480,1],
				autoPlay :  false,
				slideSpeed : 2000,
				paginationSpeed : 2000,
				rewindSpeed : 2000,
				stopOnHover: false,
				pagination : false,
			});
			$(".next<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_group']->value['class'], ENT_QUOTES, 'UTF-8', true);?>
<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").click(function(){
			owl.trigger('owl.next');
			})
			$(".prev<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_group']->value['class'], ENT_QUOTES, 'UTF-8', true);?>
<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").click(function(){
			owl.trigger('owl.prev');
			})  
		});
	</script>
<?php }?>
<?php } ?>		
<?php }} ?>
