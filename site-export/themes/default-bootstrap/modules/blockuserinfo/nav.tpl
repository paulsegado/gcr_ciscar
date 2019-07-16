<!-- Block user information module NAV  -->
{if $is_logged}
	<div class="header_user_info">
		<a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='View my customer account' mod='blockuserinfo'}" class="account" rel="nofollow"><span>{$cookie->customer_firstname} {$cookie->customer_lastname}</span></a>
	</div>
{/if}
<!-- CISCAR lien caché pour redirection sur la page de connexion par défaut -->
<div class="header_user_info" style="border-right-width:0px;border-left-width:0px;">
	{if !$is_logged}
			<a class="login" style="color:#333;" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log in to your customer account' mod='blockuserinfo'}">
				x
			</a>
	{/if}
</div>
<div class="header_user_info">
	{if $is_logged}
		<a class="logout" href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log me out' mod='blockuserinfo'}">
			{l s='Sign out' mod='blockuserinfo'}
		</a>
	{else}
	<!-- 
		<a class="login" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log in to your customer account' mod='blockuserinfo'}">
	-->
<!-- CISCAR redirection sur le site CISCAR BELGE  / on en tient pas compte pour le moment, d'ou "XX" à la place de "BE" -->
		{if isset($smarty.cookies.from_url) && $smarty.cookies.from_url == 'XX' }
			<a class="login" href="http://ciscar.be/{$lang_iso}/index.php?action=q" rel="nofollow" title="{l s='Log in to your customer account' mod='blockuserinfo'}">
				{l s='Sign in' mod='blockuserinfo'}
			</a>
		{else}
			<a class="login" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log in to your customer account' mod='blockuserinfo'}">
				{l s='Sign in' mod='blockuserinfo'}
			</a>
		{/if}
	{/if}
</div>

<!-- /Block usmodule NAV -->
