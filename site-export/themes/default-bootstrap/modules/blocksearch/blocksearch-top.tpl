{*
* 2007-2016 PrestaShop
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="{$link->getPageLink('search', null, null, null, false, null, true)|escape:'html':'UTF-8'}" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="{l s='Search' mod='blocksearch'}" value="{$search_query|escape:'htmlall':'UTF-8'|stripslashes}" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>{l s='Search' mod='blocksearch'}</span>
		</button>
	</form>
</div>
<!-- CISCAR ajout d'un lien de connexion si on est en mode visiteur -->	
<!-- et retour sur le site appelant determiné dans coookie -->
<!-- <a href="http://ciscar.be/{$lang_iso}/index.php?action=q"> -->							
	{if isset($visiteur) && !$visiteur}
		<div style="margin-bottom:-15px;">
		{if isset($smarty.cookies.from_url) && $smarty.cookies.from_url == 'BE' }
			<a href="{$base_dir}index.php?controller=my-account"> 
		{else}
			<a href="{$base_dir}index.php?controller=my-account">
		{/if}
		<img src="{$base_dir}img/navigation_mode_visiteur_{$id_language}.png">
		</a>
		</div>
	{/if}

<!-- /Block search module TOP -->