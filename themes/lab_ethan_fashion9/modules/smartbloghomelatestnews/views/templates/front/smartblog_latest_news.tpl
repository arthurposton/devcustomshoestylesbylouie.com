<div class="laberthemes">
<div class="row">
    <h4 class='title_block'>
		<span>{l s='Latest News' mod='smartbloghomelatestnews'}</span>
		<p>{l s='Visit the latest blogs from Ethan' mod='smartbloghomelatestnews'}</p>
	</h4>
    <div class="lab_boxnp">
		<a class="prev labnewblogprev"><i class="icon icon-angle-left"></i></a>
		<a class="next labnewblognext"><i class="icon icon-angle-right"></i></a>
	</div>
    <div class="blog-content row">
	<div class="labnewsmartblog">
    <div class="sdsblog-box-content">
        {if isset($view_data) AND !empty($view_data)}
            {assign var='i' value=1}
            {foreach from=$view_data item=post name=myLoop}
                    {assign var="options" value=null}
                    {$options.id_post = $post.id}
                    {$options.slug = $post.link_rewrite}
                    <div class="item-inner wow fadeInUp " data-wow-delay="{$smarty.foreach.myLoop.iteration}00ms">
						<div class="item-i" >								
							<div class="row" >								
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="content-blog">
										<p class="date_added">
											<span>{$post.date_added|date_format:"%d"|truncate:3}</span> / {$post.date_added|date_format:"%B"|truncate:10:''}
										</p>
										<h2 class="labname"><a href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}">{$post.title}</a></h2>
										<p class="meta_description">{$post.meta_description|truncate:100}</p>
										<a class="read-more" href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}">{l s='Read more ' mod='smartbloghomelatestnews'} <i class="icon-long-arrow-right"></i></a>
										
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="image_blog">
										 <a href="{smartblog::GetSmartBlogLink('smartblog_post',$options)}"><img alt="{$post.title}" class="feat_img_small" src="{$modules_dir}smartblog/images/{$post.post_img}-home-default.jpg"></a>
									</div>	
								</div>	
							</div>							
						</div>
                    </div>
                
                {$i=$i+1}
            {/foreach}
        {/if}
     </div>
   
	
	</div>
	
	
	</div>
</div>
</div>
{foreach from=$languages key=k item=language name="languages"}
	{if $language.iso_code == $lang_iso}
		{assign var='rtl' value=$language.is_rtl}
	{/if}
{/foreach}
<script>
    $(document).ready(function() {
	var owl = $(".sdsblog-box-content");
    owl.owlCarousel({
		autoPlay : false,
		slideSpeed : 2000,
		paginationSpeed : 2000,
		rewindSpeed : 2000,
		addClassActive : true,
		items :2,
		itemsDesktop : [1024,2],
		itemsDesktopSmall : [980,1],
		itemsTablet: [767,1],
		itemsMobile : [480,1],
	});
	$(".labnewblognext").click(function(){
	owl.trigger('owl.next');
	})
	$(".labnewblogprev").click(function(){
	owl.trigger('owl.prev');
	})
    });
</script>