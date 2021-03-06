{**
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2015 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{foreach from=$group_prod_fliter item=product_hook name=product_hook}
	{assign var='id' value=$product_hook.id_labproductfilter}
	{assign var='use_slider' value=$product_hook.use_slider}
{/foreach}
{$number_line = 1}
{$id_lang = Context::getContext()->language->id}
{if $use_slider != 1}
	{assign var='nbItemsPerLine' value=4}
	{assign var='nbItemsPerLineTablet' value=3}
	{assign var='nbItemsPerLineMobile' value=2}
{/if}
{foreach from = $product_groups item = product_group name = product_group}
<div class=" col-lg-7 col-md-7 col-sm-8 col-xs-12">
<div class="row">
	<div class="{$product_group.class|escape:'html':'UTF-8'} lablistproducts laberthemes {$product_hook.type_display} clearfix">
		<p class="title_block">
			<span>{$product_group.title|escape:'html':'UTF-8'}</span>
		</p>
		
	<div class="out-prod-filter">
			{if isset($product_group.product_list) && count($product_group.product_list) > 0}
			<div class="LabProducts {if $use_slider == 1}row{/if}">
				<div class="owlProductFilter-{$id}-{$product_group.class|escape:'html':'UTF-8'} {if $use_slider != 1}row{/if}">
				{foreach from=$product_group.product_list item=product name=product_list}
					{if isset($product.id_product)}
						{if $use_slider != 1}
							
							<div class="item-inner col-lg-4 col-md-4 col-sm-4 col-xs-12  
							{if $smarty.foreach.product_list.iteration%$nbItemsPerLine == 0} last-in-line
							{elseif $smarty.foreach.product_list.iteration%$nbItemsPerLine == 1} first-in-line{/if}
							{if $smarty.foreach.product_list.iteration%$nbItemsPerLineTablet == 0} last-item-of-tablet-line
							{elseif $smarty.foreach.product_list.iteration%$nbItemsPerLineTablet == 1} first-item-of-tablet-line{/if}
							{if $smarty.foreach.product_list.iteration%$nbItemsPerLineMobile == 0} last-item-of-mobile-line
							{elseif $smarty.foreach.product_list.iteration%$nbItemsPerLineMobile == 1} first-item-of-mobile-line{/if}
							wow fadeInUp " data-wow-delay="{$smarty.foreach.product_list.iteration}00ms">
							
						{else}
							{if $smarty.foreach.product_list.iteration % $number_line == 1 || $number_line == 1}
							<div class="item-inner  ajax_block_product">
							{/if}
						{/if}
						<div class="item">
								<div class="left-block">
									<div class="product-image-container">
										{capture name='rotatorImg'}{hook h='rotatorImg' product=$product}{/capture}
										{if $smarty.capture.rotatorImg}
											{$smarty.capture.rotatorImg}
										{else}
											<a class = "product_image" href="{$product.link|escape:'html'}" title="{$product.name|escape:html:'UTF-8'}">
												<img class="img-responsive" src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'large_default')|escape:'html'}" alt="{$product.name|escape:html:'UTF-8'}" />							
											</a>
										{/if}
										
										{if isset($product.new) && $product.new == 1}
											<span class="new-label">{l s='New' mod='labproductfilter'}</span>
										{/if}
										{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
											<span class="sale-label">{l s='Sale' mod='labproductfilter'}</span>
										{/if}
										
										<div class="actions">
											<ul class="add-to-links">	
												
												{if $lab_EnableQv == 1}
													<li class="lab-quick-view">
														<a class="quick-view" href="{$product.link|escape:'html':'UTF-8'}"
															data-id-product="{$product.id_product|intval}"
															title="{l s='Quick view' mod='labproductfilter'}">
															<i class="icon icon-eye"></i>
														</a>
													</li>
												{/if}
												
												<!-- {if $lab_EnableC == 1}
													{if isset($comparator_max_item) && $comparator_max_item}
														<li class="lab-compare">	
															<a class="add_to_compare" 
																href="{$product.link|escape:'html':'UTF-8'}" 
																data-product-name="{$product.name|escape:'htmlall':'UTF-8'}"
																data-product-cover="{$link->getImageLink($product.link_rewrite, $product.id_image, 'cart_default')|escape:'html'}"
																data-id-product="{$product.id_product}"
																title="{l s='Add to Compare' mod='labproductfilter'}">
																<i class="icon icon-retweet"></i>
															</a>
														</li>
													{/if}
												{/if} -->
												{if $lab_EnableW == 1}
												<li class="lab-Wishlist">
													<a onclick="WishlistCart('wishlist_block_list', 'add', '{$product.id_product|intval}', $('#idCombination').val(), 1,'tabproduct'); return false;" class="add-wishlist wishlist_button" href="#"
													data-id-product="{$product.id_product|intval}"
													title="{l s='Add to Wishlist' mod='labproductfilter'}">
													<i class="icon icon-heart"></i></a>
												</li>
												{/if}
												<li class="lab-cart">
													{if ($product.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && $product.minimal_quantity <= 1 && $product.customizable != 2 && !$PS_CATALOG_MODE}
														{if ($product.allow_oosp || $product.quantity > 0)}
															{if isset($static_token)}
																<a class="button ajax_add_to_cart_button btn btn-default" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}&amp;token={$static_token}", false)|escape:'html':'UTF-8'}"
																data-id-product="{$product.id_product|intval}"
																title="{l s='Add to cart' mod='labproductfilter'}" >
																	<i class="icon icon-shopping-cart"></i>
																	<span>{l s='Add to cart' mod='labproductfilter'}</span>
																</a>
															{else}
																<a class="button ajax_add_to_cart_button btn btn-default" href="{$link->getPageLink('cart',false, NULL, "add=1&amp;id_product={$product.id_product|intval}&amp;token={$static_token}", false)|escape:'html':'UTF-8'}"
																data-id-product="{$product.id_product|intval}"
																title="{l s='Add to cart' mod='labproductfilter'}">
																	<i class="icon icon-shopping-cart"></i>
																	<span>{l s='Add to cart' mod='labproductfilter'}</span>
																</a>
															{/if}						
														{else}
															<span class="button ajax_add_to_cart_button btn btn-default disabled">
																<i class="icon icon-shopping-cart"></i>
																<span>{l s='Add to cart' mod='labproductfilter'}</span>
															</span>
														{/if}
													{/if}
												</li>
											</ul>
											
										</div>
										<!-- {if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
											<div class="countdown" >
												{hook h='timecountdown' product=$product }  
												<span class="future_date_{$product.id_category_default}_{$product.id_product} id_countdown">  </span>
											</div>
										{/if} -->
									</div>
								</div>
								<div class="right-block">
									<h5 class="product-name"><a href="{$product.link|escape:'html':'UTF-8'}" title="{$product.legend|escape:html:'UTF-8'}">{$product.name|escape:'html':'UTF-8'}</a></h5>
								
									
									{if (!$PS_CATALOG_MODE && ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
										<div class="content_price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
											{if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}
												<span itemprop="price" class="price product-price">
													{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}
												</span>
												<meta itemprop="priceCurrency" content="{$currency->iso_code|escape:'html':'UTF-8'}" />
												{if isset($product.specific_prices) && $product.specific_prices && isset($product.specific_prices.reduction) && $product.specific_prices.reduction > 0}
													{hook h="displayProductPriceBlock" product=$product type="old_price"}
													<span class="old-price product-price">
														{displayWtPrice p=$product.price_without_reduction}
													</span>
													<!-- {if $product.specific_prices.reduction_type == 'percentage'}
														<span class="price-percent-reduction">-{$product.specific_prices.reduction|escape:'html':'UTF-8' * 100}%</span>
													{/if} -->
												{/if}
												{hook h="displayProductPriceBlock" product=$product type="price"}
												{hook h="displayProductPriceBlock" product=$product type="unit_price"}
											{/if}
										</div>
									{/if}
									
								</div>
							</div>
						{if $use_slider != 1}
							</div>
						{else}
							{if $smarty.foreach.product_list.iteration % $number_line == 0 ||$smarty.foreach.product_list.last|| $number_line == 1}
							</div>
							{/if}
						{/if}
					{/if}
				{/foreach}
			</div>
			{else}
				<div class="item product-box ajax_block_product">
					<p class="alert alert-warning">{l s='No product at this time' mod='labproductfilter'}</p>
				</div>	
			{/if}
			{if $use_slider == 1}
			<div class="lab_boxnp">
				<a class="prev prev{$product_group.class|escape:'html':'UTF-8'}{$id}"><i class="icon icon-angle-left"></i></a>
				<a class="next next{$product_group.class|escape:'html':'UTF-8'}{$id}"><i class="icon icon-angle-right"></i></a>
			</div> 
			{/if}
	  </div>

{if $use_slider == 1}
	<script type="text/javascript">
		$(document).ready(function() {
			var owl = $(".owlProductFilter-{$id}-{$product_group.class|escape:'html':'UTF-8'}");
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
				addClassActive : true,
			});
			$(".next{$product_group.class|escape:'html':'UTF-8'}{$id}").click(function(){
			owl.trigger('owl.next');
			})
			$(".prev{$product_group.class|escape:'html':'UTF-8'}{$id}").click(function(){
			owl.trigger('owl.prev');
			})  
		});
	</script>
{/if}
</div>
</div>
</div>
</div>
{/foreach}
