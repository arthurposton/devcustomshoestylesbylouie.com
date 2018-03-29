<!-- <div class="blockuserinfo-top pull-right">
<div class="current">
	<i class="mdi mdi-account"></i>
</div>
<ul class="toogle_content" style="display:none;">
		{$context = Context::getContext()}
		<li><a href="{$link->getPageLink('contact', true)|escape:'html':'UTF-8'}" title="{l s='Contact Us' mod='blockcontact'}">
			{l s='Contact Us' mod='blockuserinfo'}
		</a></li> 
		<li><a class="link-myaccount" href="{$link->getPageLink('my-account', true)|escape:'html'}" title="{l s='My account' mod='blockuserinfo'}">
			<i class="mdi mdi-account"></i> {l s='My account' mod='blockuserinfo'}
		</a></li>
		<li><a class="link-wishlist wishlist_block" href="{$context->link->getModuleLink('blockwishlist', 'mywishlist')}" title="{l s='My wishlist' mod='blockuserinfo'}">
			<i class="mdi mdi-heart"></i> {l s='My wishlist' mod='blockuserinfo'}</a></li>
		
		<li><a class="link-myaccount" href="{$link->getPageLink('products-comparison', true)|escape:'html'}" title="{l s='My account' mod='blockuserinfo'}">
			<i class="mdi mdi-rotate-3d"></i> {l s='Comparison' mod='blockuserinfo'}
		</a></li>
		{if !$PS_CATALOG_MODE}
		<li><a class="link-mycart" href="{$link->getPageLink('order', true)|escape:'html'}" title="{l s='My cart' mod='blockuserinfo'}">
			<i class="mdi mdi-basket"></i> {l s='My cart' mod='blockuserinfo'}</a></li>
		{/if}
		<li class="labLogin">
			{if $is_logged}
				<a class="logout" href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log me out' mod='blockuserinfo'}">
					<i class="mdi mdi-account-minus"></i>{l s='Sign out' mod='blockuserinfo'}
				</a>
				<a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='View my customer account' mod='blockuserinfo'}" class="account" rel="nofollow"><i class="mdi mdi-account-box-outline"></i> <span>{$cookie->customer_firstname} {$cookie->customer_lastname}</span></a>
			{else}
				<a class="login" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log in to your customer account' mod='blockuserinfo'}">
					<i class="mdi mdi-account-plus"></i>{l s='Sign in' mod='blockuserinfo'}
				</a>
			{/if} 
		</li>
	</ul>
</div>	 -->
{if $is_logged}
	<div class="header_user_info pull-right lab-user">
		<a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='View my customer account' mod='blockuserinfo'}" class="account" rel="nofollow"><span>{$cookie->customer_firstname} {$cookie->customer_lastname}</span></a>
	</div>
{/if}
<div class="header_user_info pull-right">
	{if $is_logged}
		<a class="logout" href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log me out' mod='blockuserinfo'}">
			<i class="icon icon-user" aria-hidden="true"></i>
			{l s='Sign out' mod='blockuserinfo'}
		</a>
	{else}
		<a class="login" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log in to your customer account' mod='blockuserinfo'}">
			<i class="icon icon-user" aria-hidden="true"></i>
			{l s='Sign in' mod='blockuserinfo'}
		</a>
	{/if}
</div>