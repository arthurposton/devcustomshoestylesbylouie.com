<?php /* Smarty version Smarty-3.1.19, created on 2018-02-14 07:41:42
         compiled from "/home/sa7rru46ljhy/public_html/dev/prestashop/themes/lab_ethan_fashion11/modules/labproductfilter/views/templates/hook/labproductfilter_accordion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20614084605a83e8363930a9-67865740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcf07ee1e7817f6127a2c31389f730b5133d69e8' => 
    array (
      0 => '/home/sa7rru46ljhy/public_html/dev/prestashop/themes/lab_ethan_fashion11/modules/labproductfilter/views/templates/hook/labproductfilter_accordion.tpl',
      1 => 1514779582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20614084605a83e8363930a9-67865740',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'group_prod_fliter' => 0,
    'product_hook' => 0,
    'use_slider' => 0,
    'product_groups' => 0,
    'product_group' => 0,
    'id' => 0,
    'product' => 0,
    'nbItemsPerLine' => 0,
    'nbItemsPerLineTablet' => 0,
    'nbItemsPerLineMobile' => 0,
    'number_line' => 0,
    'link' => 0,
    'lab_EnableQv' => 0,
    'lab_EnableC' => 0,
    'comparator_max_item' => 0,
    'lab_EnableW' => 0,
    'add_prod_display' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
    'static_token' => 0,
    'priceDisplay' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a83e836469c93_87902688',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a83e836469c93_87902688')) {function content_5a83e836469c93_87902688($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['product_hook'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_hook']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group_prod_fliter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_hook']->key => $_smarty_tpl->tpl_vars['product_hook']->value) {
$_smarty_tpl->tpl_vars['product_hook']->_loop = true;
?>
	<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['product_hook']->value['id_labproductfilter'], null, 0);?>
	<?php $_smarty_tpl->tpl_vars['use_slider'] = new Smarty_variable($_smarty_tpl->tpl_vars['product_hook']->value['use_slider'], null, 0);?>
<?php } ?>
<?php $_smarty_tpl->tpl_vars['number_line'] = new Smarty_variable(1, null, 0);?>
<?php $_smarty_tpl->tpl_vars['id_lang'] = new Smarty_variable(Context::getContext()->language->id, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['use_slider']->value!=1) {?>
	<?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(4, null, 0);?>
	<?php $_smarty_tpl->tpl_vars['nbItemsPerLineTablet'] = new Smarty_variable(3, null, 0);?>
	<?php $_smarty_tpl->tpl_vars['nbItemsPerLineMobile'] = new Smarty_variable(2, null, 0);?>
<?php }?>
<?php  $_smarty_tpl->tpl_vars['product_group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_group']->key => $_smarty_tpl->tpl_vars['product_group']->value) {
$_smarty_tpl->tpl_vars['product_group']->_loop = true;
?>
	<div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_group']->value['class'], ENT_QUOTES, 'UTF-8', true);?>
 lablistproducts laberthemes <?php echo $_smarty_tpl->tpl_vars['product_hook']->value['type_display'];?>
 clearfix">
	<div class="row">	
		<h4 class="title_block">
			<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_group']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</span>
			<p><?php echo smartyTranslate(array('s'=>'Lorem ipsum dolor sit amete, consectetur adipisicing sed do','mod'=>'labproductfilter'),$_smarty_tpl);?>
 </p>
		</h4>
		
	<div class="out-prod-filter">
			<?php if (isset($_smarty_tpl->tpl_vars['product_group']->value['product_list'])&&count($_smarty_tpl->tpl_vars['product_group']->value['product_list'])>0) {?>
			<div class="LabProducts <?php if ($_smarty_tpl->tpl_vars['use_slider']->value==1) {?>row<?php }?>">
				<div class="owlProductFilter-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_group']->value['class'], ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['use_slider']->value!=1) {?>row<?php }?>">
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
					<?php if (isset($_smarty_tpl->tpl_vars['product']->value['id_product'])) {?>
						<?php if ($_smarty_tpl->tpl_vars['use_slider']->value!=1) {?>
							
							<div class="item-inner col-lg-4 col-md-4 col-sm-4 col-xs-12  
							<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['product_list']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==0) {?> last-in-line
							<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['product_list']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==1) {?> first-in-line<?php }?>
							<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['product_list']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value==0) {?> last-item-of-tablet-line
							<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['product_list']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value==1) {?> first-item-of-tablet-line<?php }?>
							<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['product_list']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value==0) {?> last-item-of-mobile-line
							<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['product_list']['iteration']%$_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value==1) {?> first-item-of-mobile-line<?php }?>
							wow fadeInUp " data-wow-delay="<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['product_list']['iteration'];?>
00ms">
							
						<?php } else { ?>
							<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['product_list']['iteration']%$_smarty_tpl->tpl_vars['number_line']->value==1||$_smarty_tpl->tpl_vars['number_line']->value==1) {?>
							<div class="item-inner  ajax_block_product">
							<?php }?>
						<?php }?>
						<div class="item">
								<div class="left-block">
									<div class="product-image-container">
										<?php $_smarty_tpl->_capture_stack[0][] = array('rotatorImg', null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'rotatorImg','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
										<?php if (Smarty::$_smarty_vars['capture']['rotatorImg']) {?>
											<?php echo Smarty::$_smarty_vars['capture']['rotatorImg'];?>

										<?php } else { ?>
											<a class = "product_image" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
												<img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'large_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" />							
											</a>
										<?php }?>
										
										<?php if (isset($_smarty_tpl->tpl_vars['product']->value['new'])&&$_smarty_tpl->tpl_vars['product']->value['new']==1) {?>
											<span class="new-label"><?php echo smartyTranslate(array('s'=>'New','mod'=>'labproductfilter'),$_smarty_tpl);?>
</span>
										<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']>0) {?>
											<span class="sale-label"><?php echo smartyTranslate(array('s'=>'Sale','mod'=>'labproductfilter'),$_smarty_tpl);?>
</span>
										<?php }?>
										
										<div class="actions">
											<ul class="add-to-links">	
												
												<?php if ($_smarty_tpl->tpl_vars['lab_EnableQv']->value==1) {?>
													<li class="lab-quick-view">
														<a class="quick-view" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"
															data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
"
															title="<?php echo smartyTranslate(array('s'=>'Quick view','mod'=>'labproductfilter'),$_smarty_tpl);?>
">
															<i class="icon icon-eye"></i>
														</a>
													</li>
												<?php }?>
												
												<!-- <?php if ($_smarty_tpl->tpl_vars['lab_EnableC']->value==1) {?>
													<?php if (isset($_smarty_tpl->tpl_vars['comparator_max_item']->value)&&$_smarty_tpl->tpl_vars['comparator_max_item']->value) {?>
														<li class="lab-compare">	
															<a class="add_to_compare" 
																href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" 
																data-product-name="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
																data-product-cover="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'cart_default'), ENT_QUOTES, 'UTF-8', true);?>
"
																data-id-product="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
"
																title="<?php echo smartyTranslate(array('s'=>'Add to Compare','mod'=>'labproductfilter'),$_smarty_tpl);?>
">
																<i class="icon icon-retweet"></i>
															</a>
														</li>
													<?php }?>
												<?php }?> -->
												<?php if ($_smarty_tpl->tpl_vars['lab_EnableW']->value==1) {?>
												<li class="lab-Wishlist">
													<a onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', $('#idCombination').val(), 1,'tabproduct'); return false;" class="add-wishlist wishlist_button" href="#"
													data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
"
													title="<?php echo smartyTranslate(array('s'=>'Add to Wishlist','mod'=>'labproductfilter'),$_smarty_tpl);?>
">
													<i class="icon icon-heart"></i></a>
												</li>
												<?php }?>
												<li class="lab-cart">
													<?php if (($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']<=1&&$_smarty_tpl->tpl_vars['product']->value['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
														<?php if (($_smarty_tpl->tpl_vars['product']->value['allow_oosp']||$_smarty_tpl->tpl_vars['product']->value['quantity']>0)) {?>
															<?php if (isset($_smarty_tpl->tpl_vars['static_token']->value)) {?>
																<a class="button ajax_add_to_cart_button btn btn-default" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
<?php $_tmp8=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,"add=1&amp;id_product=".$_tmp8."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value),false), ENT_QUOTES, 'UTF-8', true);?>
"
																data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
"
																title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'labproductfilter'),$_smarty_tpl);?>
" >
																	<i class="icon icon-shopping-cart"></i>
																	<span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'labproductfilter'),$_smarty_tpl);?>
</span>
																</a>
															<?php } else { ?>
																<a class="button ajax_add_to_cart_button btn btn-default" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
<?php $_tmp9=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',false,null,"add=1&amp;id_product=".$_tmp9."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value),false), ENT_QUOTES, 'UTF-8', true);?>
"
																data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
"
																title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'labproductfilter'),$_smarty_tpl);?>
">
																	<i class="icon icon-shopping-cart"></i>
																	<span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'labproductfilter'),$_smarty_tpl);?>
</span>
																</a>
															<?php }?>						
														<?php } else { ?>
															<span class="button ajax_add_to_cart_button btn btn-default disabled">
																<i class="icon icon-shopping-cart"></i>
																<span><?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'labproductfilter'),$_smarty_tpl);?>
</span>
															</span>
														<?php }?>
													<?php }?>
												</li>
											</ul>
											
										</div>
										<!-- <?php if (isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']>0) {?>
											<div class="countdown" >
												<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'timecountdown','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>
  
												<span class="future_date_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_category_default'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
 id_countdown">  </span>
											</div>
										<?php }?> -->
									</div>
								</div>
								<div class="right-block">
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
									
								</div>
							</div>
						<?php if ($_smarty_tpl->tpl_vars['use_slider']->value!=1) {?>
							</div>
						<?php } else { ?>
							<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['product_list']['iteration']%$_smarty_tpl->tpl_vars['number_line']->value==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['product_list']['last']||$_smarty_tpl->tpl_vars['number_line']->value==1) {?>
							</div>
							<?php }?>
						<?php }?>
					<?php }?>
				<?php } ?>
			</div>
			<?php } else { ?>
				<div class="item product-box ajax_block_product">
					<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'No product at this time','mod'=>'labproductfilter'),$_smarty_tpl);?>
</p>
				</div>	
			<?php }?>
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
	  </div>

<?php if ($_smarty_tpl->tpl_vars['use_slider']->value==1) {?>
	<script type="text/javascript">
		$(document).ready(function() {
			var owl = $(".owlProductFilter-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_group']->value['class'], ENT_QUOTES, 'UTF-8', true);?>
");
			owl.owlCarousel({
				items : 5,
				itemsDesktop : [1199,4],
				itemsDesktopSmall : [991,3],
				itemsTablet: [767,2],
				itemsMobile : [480,1],
				autoPlay :  false,
				slideSpeed : 2000,
				paginationSpeed : 2000,
				rewindSpeed : 2000,
				stopOnHover: false,
				pagination : false,
				addClassActive : true,
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
</div>
</div>
</div>
<?php } ?>
<?php }} ?>
