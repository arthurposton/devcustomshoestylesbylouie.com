<div class="lab_testimonials" style="{if $show_background && $background != ""}background: rgba(0, 0, 0, 0) url({$link->getMediaLink("`$module_dir`$background")}) repeat fixed 50% 0;background-size: cover;{/if}">
	<div class="container">
		  <!-- <h4 class="lab_title wow fadeInDown" data-wow-delay="200ms">{l s='what’s client say?' mod='labtestimonials'}</h4> -->
		  <div id="wrapper">
			{if $testimonials}
				<div class="testimonials">
				  {foreach from=$testimonials key=test item=testimonial}
					{if $testimonial.active == 1}
					  <div class="item-inner wow fadeInUp " data-wow-delay="200ms" >
						<div class="item">
						<!--<div class="media-content">
						   {if $testimonial.media}
							{if in_array($testimonial.media_type,$arr_img_type)}
							  <a class="fancybox-media" href="{$mediaUrl}{$testimonial.media}?id={$testimonial.id_labtestimonial}">
								<img src="{$mediaUrl}{$testimonial.media}" alt="Image Testimonial">
							  </a>

							{/if}
							{if in_array($testimonial.media_type,$video_types) }
								<video width="260" height="240" controls>
									<source src="{$mediaUrl}{$testimonial.media}" type="video/mp4" />
								</video>
							{/if}
						  {else}
							  <img src="{$module_dir}assets/front/img/demo1.jpg" alt="Image Testimonial">
						  {/if}
						   {if $testimonial.media_type == 'youtube'}
							<a class="fancybox-media" href="{$testimonial.media_link}"><img src="{$video_youtube}" alt="{l s='Youtube Video' mod='labtestimonials'}"></a>
						  {elseif $testimonial.media_type == 'vimeo'}
							<a class="fancybox-media" href="{$testimonial.media_link}"><img src="{$video_vimeo}" alt="{l s='Vimeo Video' mod='labtestimonials'}"></a>
						  {/if} 
						</div>-->
						<div class="media-content">
							<a class="fancybox-media" href="{$mediaUrl}{$testimonial.media}?id={$testimonial.id_labtestimonial}">
								<img src="{$mediaUrl}{$testimonial.media}" alt="Image Testimonial">
							</a>
						</div>
						<div class="content_test">
							<p class="des_namepost"><span>{$testimonial.name_post}</span></p>
							<p class="des_company">{$testimonial.company}</p>
							<p class="des_testimonial">{$testimonial.content|truncate:450} </p>
						  
						</div>
					  </div>
					  </div>
					{/if}

				  {/foreach}
				</div>
			{/if}
			  <!-- <div class="button_testimonial">
				  <div class="view_all"><a class="btn btn-default button button-small" href="{$link->getModuleLink('labtestimonials','views',['process' => 'view'])}">{l s='View All' mod='labtestimonials'}</a></div>
				  <div class="submit_link"><a class="btn btn-default button button-small" href="{$link->getModuleLink('labtestimonials','views',['process' => 'form_submit'])}"> {l s='Submit Testimonial' mod='labtestimonials'}</a></div>
			  </div> -->
		  </div>
	</div>
</div>
<script>
	$(document).ready(function() {
	var owl = $(".testimonials");
	owl.owlCarousel({
		autoPlay : false,
		slideSpeed : 2000,
		paginationSpeed : 2000,
		rewindSpeed : 2000,
		items :1,
		itemsDesktop : [1200,1],
		itemsDesktopSmall : [991,1],
		itemsTablet: [767,1],
		itemsMobile : [480,1],
	});
	/*	$(".nextspecial").click(function(){
		owl.trigger('owl.next');
		})
		$(".prevspecial").click(function(){
		owl.trigger('owl.prev');
		})  */   
	});
</script>