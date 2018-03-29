{if isset($rotator_img)}
    {foreach from=$rotator_img item=image name=thumbnails}
		  {assign var=imageIds value="`$product.id_product`-`$image.id_image`"}
          <img class="img-responsive second-image {$class_name}" src="{$link->getImageLink($product.link_rewrite, $imageIds, 'home_default')|escape:'html':'UTF-8'}" alt="" {if isset($homeSize)} width="{$homeSize.width}" height="{$homeSize.height}"{/if} itemprop="image"  />
    {/foreach}
{/if}		