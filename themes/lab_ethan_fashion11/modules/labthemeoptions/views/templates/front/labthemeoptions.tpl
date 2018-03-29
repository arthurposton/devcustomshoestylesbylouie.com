{if $lab_show_color!=0}

<style type="text/css">
{if $lab_cbgcolor !=''}
	#layer_cart .layer_cart_product .title,
.more-info-ii .idTabs li a.selected, .more-info-ii .idTabs li a:hover,
#categories_block_left li span.grower:hover + a, #categories_block_left li a:hover, #categories_block_left li a.selected,
.breadcrumb,.our_price_display .price,#reduction_percent, #reduction_amount,
.footer-container #footer .copyright a,
.footer-container #footer .centerFooter ul li a:hover,
.support-footer-inner .support-info:hover .info-title span, .support-footer-inner .support-info:hover .info-title i, .support-footer-inner .support-info:hover .info-title,.support-footer-inner .info-title i,
.sdsblog-box-content .content-blog .date_added,
.subpage .lab-menu-horizontal ul.menu-content  li:first-child > a:hover,
.lab-menu-horizontal ul li.level-1 ul li.parent:hover::after,.lab-menu-horizontal ul li.level-1 > a.active, .lab-menu-horizontal ul li.level-1 > a:hover,.lab-menu-horizontal ul li.level-1 ul li a:hover,
.header_user_info.lab-user a, .header_user_info a:hover, .header_user_info a.active,.countdown-period,.price.product-price,.product-name a:hover,
#search_block_top .button:hover,header .nav .current:hover,.displayTop .current:hover,#contact-link a:hover, #contact-link a.active,
.shop-phone strong{
	color:{$lab_cbgcolor};
}

/* background-color:#6fc138 */
.button.button-medium:hover,.cart_block .cart-buttons a#button_order_cart span,
#view_scroll_left:hover, #view_scroll_right:hover,
.box-info-product .exclusive span,#usefull_link_block li a:hover::before, .box-cart-bottom #wishlist_button_nopop:hover::before,
.top-pagination-content ul.pagination li > a:hover span, .bottom-pagination-content ul.pagination li > a:hover span,
.top-pagination-content ul.pagination li.active > span span, .bottom-pagination-content ul.pagination li.active > span span,
.tags_block .block_content a:hover,
ul.product_list.list > li .lab-button-container .add-to-links li a.checked, ul.product_list.list > li .lab-button-container .add-to-links li a:hover, ul.product_list.list > li .lab-button-container .lab-cart .button:hover,ul.product_list.column > li .add-to-links li a.checked, ul.product_list.column > li .add-to-links li a:hover,
.content_sortPagiBar .display li.selected a, .content_sortPagiBar .display_m li.selected a,
#footer #newsletter_block_left .form-group .button-small:hover span,
.footer-container #footer #social_block ul li a:hover,
.sdsblog-box-content .content-blog .labname a::before,
.testimonials .owl-page:hover span, .testimonials .owl-page.active span,.mypresta_scrollup:hover,
.lablistproducts .actions li a.active, .lablistproducts .actions li a.checked, .lablistproducts .actions li a:hover,
.lablistproducts .right-block .lab-cart .button:hover,
.laberthemes .lab_boxnp a:hover,
.new-label,
.lab-menu-horizontal ul li h2 a:before,
.labpopup .fancybox-skin .fancybox-close,.button_unique,
.shopping_cart > a:first-child .ajax_cart_quantity{
	background-color:{$lab_cbgcolor}
}
/* border-color:#6fc138 */
.button.button-medium:hover,.cart_block .cart-buttons a#button_order_cart span,
#view_scroll_left:hover, #view_scroll_right:hover,
#thumbs_list li a:hover, #thumbs_list li a.shown,
#usefull_link_block li a:hover::before, .box-cart-bottom #wishlist_button_nopop:hover::before,
.top-pagination-content ul.pagination li.active > span, .bottom-pagination-content ul.pagination li.active > span,
.top-pagination-content ul.pagination li > a:hover, .bottom-pagination-content ul.pagination li > a:hover,
.tags_block .block_content a:hover,
ul.product_list.list > li .lab-button-container .add-to-links li a.checked, ul.product_list.list > li .lab-button-container .add-to-links li a:hover, ul.product_list.list > li .lab-button-container .lab-cart .button:hover,ul.product_list.column > li .add-to-links li a.checked, ul.product_list.column > li .add-to-links li a:hover,
.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default,
#footer #newsletter_block_left .form-group .button-small:hover span,
.support-footer-inner .support-info:hover,
.testimonials .owl-page::before,.mypresta_scrollup:hover,
.lablistproducts .actions li a.active, .lablistproducts .actions li a.checked, .lablistproducts .actions li a:hover,
.lablistproducts .right-block .lab-cart .button:hover,
.laberthemes .lab_boxnp a:hover{
	border-color:{$lab_cbgcolor}
}
.new-label::before{
	border-color:transparent transparent {$lab_cbgcolor} {$lab_cbgcolor}
}
.new-label::after{
	border-color:{$lab_cbgcolor} transparent transparent {$lab_cbgcolor}
}
{/if}

</style>

{/if}

{if $labshowthemecolor == 1 }
		
{if $labthemecolor And $labthemecolor !='default'}
	<link rel="stylesheet" type="text/css" href="{$PS_BASE_URL}{$PS_BASE_URI}themes/{$LAB_THEMENAME}/css/color/{$labthemecolor}.css" />
{/if}


{if $labskin }
	<style type="text/css">
		body{
			background-image: url("{$PS_BASE_URL}{$PS_BASE_URI}modules/labthemeoptions/views/templates/front/colortool/images/pattern/{$labskin}.png") ;
		}
	</style>
{/if}
{/if}