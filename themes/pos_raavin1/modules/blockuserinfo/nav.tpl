<!-- Block user information module NAV  -->
	<li class="header_userinfo">
		<div class="top-userinfo">
			<ul id="header_links" class=" vertical-link header_links_ul">
				{$context = Context::getContext()}
				<li class="first"><a class="link-myaccount" href="{$link->getPageLink('my-account', true)|escape:'html'}" title="{l s='My account' mod='blockuserinfo'}">
					{l s='My account' mod='blockuserinfo'}
				</a></li>
				<li><a class="link-wishlist wishlist_block" href="{$context->link->getModuleLink('blockwishlist', 'mywishlist')}" title="{l s='My wishlist' mod='blockuserinfo'}">
				{l s='My wishlist' mod='blockuserinfo'}</a></li>
				<li><a class="link-checkout" href="{$link->getPageLink('order', true)|escape:'html'}" title="{l s='checkout' mod='blockuserinfo'}">
				{l s='checkout' mod='blockuserinfo'}
				</a></li>
				<li>
				{if $is_logged}
					<a class="logout" href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log me out' mod='blockuserinfo'}">
						{l s='Log out' mod='blockuserinfo'}
					</a>
				{else}
					<a class="login" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log in to your customer account' mod='blockuserinfo'}">
						{l s='Log in' mod='blockuserinfo'}
					</a>
				{/if}
				</li>
			</ul>
		</div>
	</li>
	

	

<!-- /Block usmodule NAV -->
