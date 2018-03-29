	{if isset($products) AND $products}
<div id="special_products" class="lablistproducts block products_block ">
	<h4 class="lab_title_block">
		<a class="title"  href="{$base_dir}promotions" title="{l s='Special Products' mod='labspecialsproducts'}">
			<span>{l s='Special' mod='labspecialsproducts'}</span></a>
	</h4>
	<div class="row">
		<div id="pos-special-products" class="product_list3">
			{foreach from=$products item=product name=myLoop}
				{if $smarty.foreach.myLoop.index % 1 == 0 || $smarty.foreach.myLoop.first }
					<div class="item-inner a{$smarty.foreach.myLoop.index} {if $wow == 0}wow fadeInUp {/if}" {if $wow == 0} data-wow-delay="{$smarty.foreach.myLoop.iteration}00ms" {/if}>
					{/if}
						<div class="item">
							<div class="topItem">
								<div class="lab-img">
									{if Hook::exec('rotatorImg')}
										{hook h ='rotatorImg' product=$product}
									{else}
										<a class = "product_image" href="{$product.link|escape:'html'}" title="{$product.name|escape:html:'UTF-8'}">
											<img class="img-responsive" src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html'}" alt="{$product.name|escape:html:'UTF-8'}" />							
										</a>
									{/if}
									{if isset($product.new) && $product.new == 1}
									<a class="new-box" href="{$product.link|escape:'html':'UTF-8'}">
										<span class="new-label">{l s='New' mod='labtabcategoryslider'}</span>
									</a>
									{/if}
									{if isset($product.on_sale) && $product.on_sale && isset($product.show_price) && $product.show_price && !$PS_CATALOG_MODE}
										<a class="sale-box" href="{$product.link|escape:'html':'UTF-8'}">
											<span class="sale-label">{l s='Sale!' mod='labtabcategoryslider'}</span>
										</a>
									{/if}
									{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction && $product.specific_prices.to|date_format:"%Y" !=0 }
										<div class="countdown" >
											{hook h='timecountdown' product=$product }  
											<span class="future_date_{$product.id_category_default}_{$product.id_product}"  class="id_countdown">  </span>
										</div>
									{/if}
								</div>
								<div class="actions">
									<ul class="add-to-links">				
										<li class="lab-Wishlist">
											<a onclick="WishlistCart('wishlist_block_list', 'add', '{$product.id_product|intval}', $('#idCombination').val(), 1,'tabproduct'); return false;" class="add-wishlist wishlist_button" href="#"
											data-id-product="{$product.id_product|intval}"
											title="{l s='Add to Wishlist' mod='labtabcategoryslider'}">
											<i class="icon-heart"></i></a>
										</li>
										{if isset($comparator_max_item) && $comparator_max_item}
											<li class="lab-compare">	
												<a class="add_to_compare" 
													href="{$product.link|escape:'html':'UTF-8'}" 
													data-product-name="{$product.name|escape:'htmlall':'UTF-8'}"
													data-product-cover="{$link->getImageLink($product.link_rewrite, $product.id_image, 'cart_default')|escape:'html'}"
													data-id-product="{$product.id_product}"
											
											
													title="{l s='Add to Compare' mod='labtabcategoryslider'}">
													<i class="icon-retweet"></i>
												</a>
											</li>
										{/if}
										
										{if isset($quick_view) && $quick_view}
											<li class="lab-quick-view">
												<a class="quick-view" href="{$product.link|escape:'html':'UTF-8'}" rel="{$product.link|escape:'html':'UTF-8'}"
										
													data-id-product="{$product.id_product|intval}"
													title="{l s='Quick view' mod='labtabcategoryslider'}">
													<i class="icon-eye-open"></i>
												</a>
											</li>
										{/if}
										
									</ul>
									
								</div>
							</div>
							<div class="bottomItem">
								<h5 class="h5product-name">
									<a class="product-name" href="{$product.link|escape:'html'}" title="{$product.name|truncate:35:'...'|escape:'htmlall':'UTF-8'}">{$product.name|truncate:25:'...'|escape:'htmlall':'UTF-8'}</a></h5>
								{if $product.show_price AND !isset($restricted_country_mode) AND !$PS_CATALOG_MODE}
									<div class="lab-price">
										<span class="price">{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}</span>
										<meta itemprop="priceCurrency" content="{$priceDisplay}" />
										{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
											<span class="old-price product-price">
												{displayWtPrice p=$product.price_without_reduction}
											</span>
										{/if}
									</div>
								{/if}
								{hook h='displayProductListReviews' product=$product}
								<div class="lab-cart">
									<div class="lab-cart-i">
											{if ($product.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && $product.minimal_quantity <= 1 && $product.customizable != 2 && !$PS_CATALOG_MODE}
												{if ($product.allow_oosp || $product.quantity > 0)}
													{if isset($static_token)}
														<a class="button ajax_add_to_cart_button btn btn-default" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}&amp;token={$static_token}", false)|escape:'html':'UTF-8'}"
														data-id-product="{$product.id_product|intval}"
														title="{l s='Add to cart' mod='labtabcategoryslider'}" >
															<span>{l s='Add to cart' mod='labtabcategoryslider'}</span>
														</a>
													{else}
														<a class="button ajax_add_to_cart_button btn btn-default" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}&amp;token={$static_token}", false)|escape:'html':'UTF-8'}"
														data-id-product="{$product.id_product|intval}"
														title="{l s='Add to cart' mod='labtabcategoryslider'}">
															<span>{l s='Add to cart' mod='labtabcategoryslider'}</span>
														</a>
													{/if}						
												{else}
													<span class="button ajax_add_to_cart_button btn btn-default disabled">
														<span>{l s='Add to cart' mod='labtabcategoryslider'}</span>
													</span>
												{/if}
											{/if}
									</div>
								</div>
								
							</div>
						</div>
					{if $smarty.foreach.myLoop.iteration % 1 == 0 || $smarty.foreach.myLoop.last  }
						</div>
					{/if}
			{/foreach}
		</div>
	</div>
	<div class="labnextprev">
		<a class="prevspecial"><i class="icon-angle-left"></i></a>
		<a class="nextspecial"><i class="icon-angle-right"></i></a>
	</div>
	
</div>
{foreach from=$languages key=k item=language name="languages"}
	{if $language.iso_code == $lang_iso}
		{assign var='rtl' value=$language.is_rtl}
	{/if}
{/foreach}	
<script>
    $(document).ready(function() {
    var owl = $("#pos-special-products");
	owl.owlCarousel({
		autoPlay : false,
		items :1,
		itemsDesktop : [1200,1],
		itemsDesktopSmall : [991,1],
		itemsTablet: [767,2],
		itemsMobile : [340,1],
	});
	$(".nextspecial").click(function(){
		owl.trigger('owl.next');
		})
		$(".prevspecial").click(function(){
		owl.trigger('owl.prev');
		})   
    });
</script>
	{/if}