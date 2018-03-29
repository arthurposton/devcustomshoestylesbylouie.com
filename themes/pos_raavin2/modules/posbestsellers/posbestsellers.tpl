
<!-- MODULE Block best sellers -->
<div class="pos-bestsellers">
	<div class="container-inner">
		<div class="pos-title">
			<h2>
				<span>{$title}</span>
			</h2>
			<p>{l s='Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.' mod='posnewproducts'}</p>
		</div>
		<div class="row">
			<div class="col-product col-lg-4">
				<div class="row">
					{if $products && $products|@count > 0}
						<div class="pos-topsellers">
							{foreach from=$products item=product name=myLoop}
								{if $smarty.foreach.myLoop.index % $slider_options.rows == 0 || $smarty.foreach.myLoop.first }
								<div class="{if $smarty.foreach.myLoop.first}first_item{elseif $smarty.foreach.myLoop.last}last_item{else}item{/if} clearfix">
								{/if}
									<div class="item-product">
										<div class="products-inner">
											<a href="{$product.link|escape:'html'}" title="{$product.name|escape:html:'UTF-8'}" class="product_image"><img class="replace-2x img-responsive" src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html'}" alt="{$product.name|escape:html:'UTF-8'}" />
											
											</a>
											<div class="actions">							
												<div class="actions-inner">
													<div class="cart">
														{if ($product.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && $product.minimal_quantity <= 1 && $product.customizable != 2 && !$PS_CATALOG_MODE}
														{if ($product.allow_oosp || $product.quantity > 0)}
														{if isset($static_token)}
															<a class="button ajax_add_to_cart_button btn btn-default" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}&amp;token={$static_token}", false)|escape:'html':'UTF-8'}" rel="nofollow"  title="{l s='Add to cart' mod='posbestsellers'}" data-id-product="{$product.id_product|intval}">
																<span>{l s='Add to cart' mod='posbestsellers'}</span>
																
															</a>
														{else}
														<a class="button ajax_add_to_cart_button btn btn-default" href="{$link->getPageLink('cart',false, NULL, 'add=1&amp;id_product={$product.id_product|intval}', false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart' mod='posbestsellers'}" data-id-product="{$product.id_product|intval}">
															<span>{l s='Add to cart' mod='posbestsellers'}</span>
														</a>
														   {/if}      
														{else}
														<span class="button ajax_add_to_cart_button btn btn-default disabled" >
															<span>{l s='Add to cart' mod='posbestsellers'}</span>
														</span>
														{/if}
														{/if}
													</div>
													<ul class="add-to-links">									
														<li>
															{hook h='displayProductListFunctionalButtons' product=$product}
														</li>
														<li>
														{if isset($comparator_max_item) && $comparator_max_item}
														  <a class="add_to_compare" href="{$product.link|escape:'html':'UTF-8'}" data-id-product="{$product.id_product}" title="{l s='Add to Compare' mod='posbestsellers'}">{l s='Compare' mod='posbestsellers'}
														
														  </a>
														 {/if}
														</li>
														<li>
															{if isset($quick_view) && $quick_view}
																<a class="quick-view" title="{l s='Quick view' mod='posbestsellers'}" href="{$product.link|escape:'html':'UTF-8'}">
																	<span>{l s='Quick view' mod='posbestsellers'}</span>
																</a>
															{/if}
														</li>
													</ul>
												</div>
											</div>		
										</div>
										<div class="product-contents">
											<h5 class="product-name"><a href="{$product.link|escape:'html'}" title="{$product.name|truncate:80:'...'|escape:'htmlall':'UTF-8'}">{$product.name|truncate:45:'...'|escape:'htmlall':'UTF-8'}</a></h5>

											{if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
											<div class="price-box">
											{if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}
												{hook h="displayProductPriceBlock" product=$product type='before_price'}
												<span class="price product-price">
													{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}
												</span>
												{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
													{hook h="displayProductPriceBlock" product=$product type="old_price"}
													<span class="old-price product-price">
														{displayWtPrice p=$product.price_without_reduction}
													</span>
													{if $product.specific_prices.reduction_type == 'percentage'}
															<span class="price-percent-reduction">-{$product.specific_prices.reduction * 100}%</span>
														{/if}
													{hook h="displayProductPriceBlock" id_product=$product.id_product type="old_price"}
													
												{/if}
												{hook h="displayProductPriceBlock" product=$product type="price"}
												{hook h="displayProductPriceBlock" product=$product type="unit_price"}
												{hook h="displayProductPriceBlock" product=$product type='after_price'}
											{/if}
											</div>
											{/if}	
											{capture name='displayProductListReviews'}{hook h='displayProductListReviews' product=$product}{/capture}
											{if $smarty.capture.displayProductListReviews}
												<div class="hook-reviews">
												{hook h='displayProductListReviews' product=$product}
												</div>
											{/if}
										</div>
									</div>	
								{if $smarty.foreach.myLoop.iteration % $slider_options.rows == 0 || $smarty.foreach.myLoop.last  }	
								</div>
								{/if}
							{/foreach}
						</div>
					{else}
						<p>{l s='No best sellers at this time' mod='posbestsellers'}</p>
					{/if}
				</div>
			</div>
			<div class="col-static col-lg-8">
				{capture name='blockPosition5'}{hook h='blockPosition5'}{/capture}
				{if $smarty.capture.blockPosition5}
				{$smarty.capture.blockPosition5}
				{/if}
			</div>	
		</div>	
	</div>
</div>
<script type="text/javascript"> 
	$(document).ready(function() {
		var owl = $(".pos-topsellers");
		owl.owlCarousel({
			items : {$slider_options.number_item},
			itemsDesktop : [1199, {$slider_options.items_md}],
			itemsDesktopSmall : [991, {$slider_options.items_sm}],
			itemsTablet: [767, {$slider_options.items_xs}],
			itemsMobile : [479, {$slider_options.items_xxs}],
			autoPlay :  {if $slider_options.auto_play}{if $slider_options.auto_time}{$slider_options.auto_time}{else}3000{/if}{else} false{/if},
			stopOnHover: {if $slider_options.pausehover} true {else} false {/if},
			slideSpeed : {if $slider_options.speed_slide}{$slider_options.speed_slide}{else}1000{/if},
			addClassActive: true,
			scrollPerPage: {if $slider_options.move} false {else} true {/if},
			navigation : {if $slider_options.show_arrow} true {else} false {/if},
			pagination : {if $slider_options.show_pagination} true {else} false {/if},
			afterAction: function(el){
		   this.$owlItems.removeClass('before-active')
		   this.$owlItems.removeClass('last-active')
		   this.$owlItems .eq(this.prevItem).addClass('before-active')  
		   this.$owlItems .eq(this.currentItem + (this.owl.visibleItems.length - 1)).addClass('last-active') 
		}
		});
	});
</script>
<!-- /MODULE Block best sellers -->
