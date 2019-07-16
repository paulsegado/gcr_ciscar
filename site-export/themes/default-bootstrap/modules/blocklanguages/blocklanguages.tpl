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
* @author    PrestaShop SA <contact@prestashop.com>
* @copyright 2007-2016 PrestaShop SA
* @license   http://opensource.org/licenses/afl-3.0.php Academic Free License (AFL 3.0)
* International Registered Trademark & Property of PrestaShop SA
*}
<!-- Block languages module -->
<!-- CISCAR modification de la page pour ajouter les drapeaux -->
{if count($languages) > 1}
	<div id="languages-block-top" class="languages-block">
		{foreach from=$languages key=k item=language name="languages"}
			{if $language.iso_code == $lang_iso}
				<div style="display:table-cell;padding-left:5px;">
					<img class="img-responsive" src="modules/blocklanguages/img/{$lang_iso}.png" alt="{$language.name|regex_replace:"/\s\(.*\)$/":""}" title="{$language.name|regex_replace:"/\s\(.*\)$/":""}" />
				</div>
				<div class="current" style="display:table-cell;padding-left:5px;">
					{$language.name|regex_replace:"/\s\(.*\)$/":""}
				</div>
			{/if}
		{/foreach}
		<ul id="first-languages" class="languages-block_ul toogle_content" style="width:170px;">
			{foreach from=$languages key=k item=language name="languages"}
				<li {if $language.iso_code == $lang_iso}class="selected"{/if}>			
				{if $language.iso_code != $lang_iso}
					{assign var=indice_lang value=$language.id_lang}
					{if isset($lang_rewrite_urls.$indice_lang)}
						<a style="padding-left:0px;" href="{$lang_rewrite_urls.$indice_lang|escape:'html':'UTF-8'}" title="{$language.name|escape:'html':'UTF-8'}" rel="alternate" hreflang="{$language.iso_code|escape:'html':'UTF-8'}">
					{else}
						<a style="padding-left:0px;" href="{$link->getLanguageLink($language.id_lang)|escape:'html':'UTF-8'}" title="{$language.name|escape:'html':'UTF-8'}" rel="alternate" hreflang="{$language.iso_code|escape:'html':'UTF-8'}">
					{/if}
				{/if}
						<div style="display:table-cell;padding-left:5px;">
						<img class="img-responsive" src="modules/blocklanguages/img/{$language.iso_code}.png" alt="{$language.name|regex_replace:"/\s\(.*\)$/":""}" title="{$language.name|regex_replace:"/\s\(.*\)$/":""}" />
						</div>
						<div style="display:table-cell;padding-left:5px;">
						{$language.name|regex_replace:"/\s\(.*\)$/":""}
						</div>
				{if $language.iso_code != $lang_iso}
					</a>
				{/if}
				</li>
			{/foreach}
<!-- CISCAR on ajoute les pays "coming soon" 		
			<li>
				<a style="padding-left:0px;">
				<div style="display:table-cell;padding-left:5px;">
				<img class="img-responsive" src="modules/blocklanguages/img/de.png" alt="Deutsch" title="Deutsch" />
				</div>
				<div style="display:table-cell;padding-left:5px;">
				Deutsch (coming soon)
				</div>
				</a>
			</li>
-->				
		</ul>
	</div>
{/if}
<!-- /Block languages module -->
