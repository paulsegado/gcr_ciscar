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

{if !$opc}
	{capture name=path}{l s='Shipping:'}{/capture}
	{assign var='current_step' value='shipping'}
	<div id="carrier_area">
		<h1 class="page-heading">{l s='Shipping:'}</h1>
		{include file="$tpl_dir./order-steps.tpl"}
		{include file="$tpl_dir./errors.tpl"}
		<form id="form" action="{$link->getPageLink('order', true, NULL, "{if $multi_shipping}multi-shipping={$multi_shipping}{/if}")|escape:'html':'UTF-8'}" method="post" name="carrier_area">
{else}
	<div id="carrier_area" class="opc-main-block">
		<h1 class="page-heading step-num"><span>2</span> {l s='Delivery methods'}</h1>
			<div id="opc_delivery_methods" class="opc-main-block">
				<div id="opc_delivery_methods-overlay" class="opc-overlay" style="display: none;"></div>
{/if}
<div class="order_carrier_content box">
	{if isset($virtual_cart) && $virtual_cart}
		<input id="input_virtual_carrier" class="hidden" type="hidden" name="id_carrier" value="0" />
        <p class="alert alert-warning">{l s='No carrier is needed for this order.'}</p>
	{else}
		<div id="HOOK_BEFORECARRIER">
			{if isset($carriers) && isset($HOOK_BEFORECARRIER)}
				{$HOOK_BEFORECARRIER}
			{/if}
		</div>
		{if isset($isVirtualCart) && $isVirtualCart}
			<p class="alert alert-warning">{l s='No carrier is needed for this order.'}</p>
		{else}
			<div class="delivery_options_address">
				{if isset($delivery_option_list)}
					{foreach $delivery_option_list as $id_address => $option_list}
						<p class="carrier_title">
							{if isset($address_collection[$id_address])}
								{l s='Choose a shipping option for this address:'} {$address_collection[$id_address]->alias}
							{else}
								{l s='Choose a shipping option'}
							{/if}
						</p>
						<div class="delivery_options">
							{foreach $option_list as $key => $option}
								<div class="delivery_option {if ($option@index % 2)}alternate_{/if}item">
									<div>
										<table class="resume table table-bordered{if !$option.unique_carrier} hide{/if}">
											<tr>
												<td class="delivery_option_radio">
													<input id="delivery_option_{$id_address|intval}_{$option@index}" class="delivery_option_radio" type="radio" name="delivery_option[{$id_address|intval}]" data-key="{$key}" data-id_address="{$id_address|intval}" value="{$key}"{if isset($delivery_option[$id_address]) && $delivery_option[$id_address] == $key} checked="checked"{/if} />
												</td>
<!-- CISCAR	On masque la colonne											
												<td class="delivery_option_logo">
													{foreach $option.carrier_list as $carrier}
														{if $carrier.logo}
															<img class="order_carrier_logo" src="{$carrier.logo|escape:'htmlall':'UTF-8'}" alt="{$carrier.instance->name|escape:'htmlall':'UTF-8'}"/>
														{elseif !$option.unique_carrier}
															{$carrier.instance->name|escape:'htmlall':'UTF-8'}
															{if !$carrier@last} - {/if}
														{/if}
													{/foreach}
												</td>
-->												
												<td>
<!-- CISCAR les textes sont differents suivant que la livraion est gratuite ou que les ports sont en sus -->

													{if $option.unique_carrier}

															{foreach $option.carrier_list as $carrier}
																{if $carrier.instance->is_free}
																	<strong>{l s='Free shipping'}</strong></br>
																	{l s='Free shipping mention'}
																{else}
																	<strong>{l s='Shipping to be compute'}</strong></br>
																	{l s='Shipping to be compute mention'}
																{/if}
															{/foreach}
<!-- CISCAR, on n'affiche pas les d�lais de livraison														
														{if isset($carrier.instance->delay[$cookie->id_lang])}
															<br />{l s='Delivery time:'}&nbsp;{$carrier.instance->delay[$cookie->id_lang]|escape:'htmlall':'UTF-8'}
														{/if}
-->														
													{/if}
													{if count($option_list) > 1}
													<br />
														{if $option.is_best_grade}
															{if $option.is_best_price}
																<span class="best_grade best_grade_price best_grade_speed">{l s='The best price and speed'}</span>
															{else}
																<span class="best_grade best_grade_speed">{l s='The fastest'}</span>
															{/if}
														{elseif $option.is_best_price}
															<span class="best_grade best_grade_price">{l s='The best price'}</span>
														{/if}
													{/if}
												</td>
												<td class="delivery_option_price">
													<div class="delivery_option_price">
														{if $option.total_price_with_tax && !$option.is_free && (!isset($free_shipping) || (isset($free_shipping) && !$free_shipping))}
															{if $use_taxes == 1}
																{if $priceDisplay == 1}
																	{convertPrice price=$option.total_price_without_tax}{if $display_tax_label} {l s='(tax excl.)'}{/if}
																{else}
																	{convertPrice price=$option.total_price_with_tax}{if $display_tax_label} {l s='(tax incl.)'}{/if}
																{/if}
															{else}
																{convertPrice price=$option.total_price_without_tax}
															{/if}
														{else}
<!-- CISCAR les textes sont differents suivant que la livraion est gratuite ou que les ports sont en sus
															{l s='Free'} -->
															{foreach $option.carrier_list as $carrier}
																{if $carrier.instance->is_free}
																	<strong>{l s='Free'}</strong>
																{else}
																	<strong>{l s='In addition'}</strong>
																{/if}
															{/foreach}
														{/if}
													</div>
												</td>
											</tr>
										</table>
										{if !$option.unique_carrier}
<!-- CISCAR on supprime la classe CSS "delivery_option_carrier"										
											<table class="delivery_option_carrier{if isset($delivery_option[$id_address]) && $delivery_option[$id_address] == $key} selected{/if} resume table table-bordered{if $option.unique_carrier} hide{/if}">
-->											
											<table class="{if isset($delivery_option[$id_address]) && $delivery_option[$id_address] == $key}selected{/if} resume table table-bordered{if $option.unique_carrier} hide{/if}">
												<tr>
													{if !$option.unique_carrier}
<!-- CISCAR si plusieurs transporteurs, le port est force � "Port en sus" il faut retrancher 1 au rowspan-->													
														<td rowspan="{$option.carrier_list|@count -1}" class="delivery_option_radio first_item">
															<input id="delivery_option_{$id_address|intval}_{$option@index}" class="delivery_option_radio" type="radio" name="delivery_option[{$id_address|intval}]" data-key="{$key}" data-id_address="{$id_address|intval}" value="{$key}"{if isset($delivery_option[$id_address]) && $delivery_option[$id_address] == $key} checked="checked"{/if} />
														</td>
													{/if}
													{assign var="first" value=current($option.carrier_list)}
<!-- CISCAR	suppression du test sur $first.product_list[0].carrier_list[0] <td class="delivery_option_logo{if $first.product_list[0].carrier_list[0] eq 0} hide{/if}"> -->	
													<td class="delivery_option_logo hide">
														{if $first.logo}
															<img class="order_carrier_logo" src="{$first.logo|escape:'htmlall':'UTF-8'}" alt="{$first.instance->name|escape:'htmlall':'UTF-8'}"/>
														{elseif !$option.unique_carrier}
															{$first.instance->name|escape:'htmlall':'UTF-8'}
														{/if}
													</td>
<!-- CISCAR si plusieurs transporteurs, le port est force � "Port en sus" -->
													<td >
														<strong>{l s='Shipping to be compute'}</strong></br>
														{l s='Shipping to be compute mention'}
													</td>
													
<!-- CISCAR	suppression du test sur $first.product_list[0].carrier_list[0] <td class="{if $option.unique_carrier}first_item{/if}{if $first.product_list[0].carrier_list[0] eq 0} hide{/if}"> -->
													<td class="{if $option.unique_carrier}first_item{/if} hide">
														<input type="hidden" value="{$first.instance->id|intval}" name="id_carrier" />
													</td>
													<td rowspan="{$option.carrier_list|@count}" class="delivery_option_price">
														<div class="delivery_option_price">
															{if $option.total_price_with_tax && !$option.is_free && (!isset($free_shipping) || (isset($free_shipping) && !$free_shipping))}
																{if $use_taxes == 1}
																	{if $priceDisplay == 1}
																		{convertPrice price=$option.total_price_without_tax}{if $display_tax_label} {l s='(tax excl.)'}{/if}
																	{else}
																		{convertPrice price=$option.total_price_with_tax}{if $display_tax_label} {l s='(tax incl.)'}{/if}
																	{/if}
																{else}
																	{convertPrice price=$option.total_price_without_tax}
																{/if}
															{else}														
<!-- CISCAR si plusieurs transporteurs, le port est force � "Port en sus" 
															{l s='Free'}-->
															<strong>{l s='In addition'}</strong>
															{/if}
														</div>
													</td>
												</tr>
												{foreach $option.carrier_list as $carrier}
													{if $carrier@iteration != 1}
													<tr>
<!-- CISCAR	suppression du test sur if $carrier.product_list[0].carrier_list[0]	<td class="delivery_option_logo{if $carrier.product_list[0].carrier_list[0] eq 0} hide{/if}"> -->
														<td class="delivery_option_logo hide">
															{if $carrier.logo}
																<img class="order_carrier_logo" src="{$carrier.logo|escape:'htmlall':'UTF-8'}" alt="{$carrier.instance->name|escape:'htmlall':'UTF-8'}"/>
															{elseif !$option.unique_carrier}
																{$carrier.instance->name|escape:'htmlall':'UTF-8'}
															{/if}
														</td>
<!-- CISCAR	suppression du test sur if $carrier.product_list[0].carrier_list[0]	<td class="{if $option.unique_carrier} first_item{/if}{if $carrier.product_list[0].carrier_list[0] eq 0} hide{/if}"> -->
														<td class="{if $option.unique_carrier} first_item{/if} hide">
															<input type="hidden" value="{$first.instance->id|intval}" name="id_carrier" />
															{if isset($carrier.instance->delay[$cookie->id_lang])}
																<i class="icon-info-sign"></i>
																{strip}
																	{$carrier.instance->delay[$cookie->id_lang]|escape:'htmlall':'UTF-8'}
																	&nbsp;
																	{if count($first.product_list) <= 1}
																		({l s='For this product:'}
																	{else}
																		({l s='For these products:'}
																	{/if}
																{/strip}
																{foreach $carrier.product_list as $product}
																	{if $product@index == 4}
																		<acronym title="
																	{/if}
																	{strip}
																		{if $product@index >= 4}
																			{$product.name|escape:'htmlall':'UTF-8'}
																			{if isset($product.attributes) && $product.attributes}
																				{$product.attributes|escape:'htmlall':'UTF-8'}
																			{/if}
																			{if !$product@last}
																				,&nbsp;
																			{else}
																				">&hellip;</acronym>)
																			{/if}
																		{else}
																			{$product.name|escape:'htmlall':'UTF-8'}
																			{if isset($product.attributes) && $product.attributes}
																				{$product.attributes|escape:'htmlall':'UTF-8'}
																			{/if}
																			{if !$product@last}
																				,&nbsp;
																			{else}
																				)
																			{/if}
																		{/if}
																	{/strip}
																{/foreach}
															{/if}
														</td>
													</tr>
													{/if}
												{/foreach}
											</table>
										{/if}
									</div>
								</div> <!-- end delivery_option -->
							{/foreach}
						</div> <!-- end delivery_options -->
						<div class="hook_extracarrier" id="HOOK_EXTRACARRIER_{$id_address}">
							{if isset($HOOK_EXTRACARRIER_ADDR) &&  isset($HOOK_EXTRACARRIER_ADDR.$id_address)}{$HOOK_EXTRACARRIER_ADDR.$id_address}{/if}
						</div>
						{foreachelse}
							{assign var='errors' value=' '|explode:''}
							<p class="alert alert-warning" id="noCarrierWarning">
								{foreach $cart->getDeliveryAddressesWithoutCarriers(true, $errors) as $address}
									{if empty($address->alias)}
										{l s='No carriers available.'}
									{else}
										{assign var='flag_error_message' value=false}
										{foreach $errors as $error}
											{if $error == Carrier::SHIPPING_WEIGHT_EXCEPTION}
												{$flag_error_message = true}
												{l s='The product selection cannot be delivered by the available carrier(s): it is too heavy. Please amend your cart to lower its weight.'}
											{elseif $error == Carrier::SHIPPING_PRICE_EXCEPTION}
												{$flag_error_message = true}
												{l s='The product selection cannot be delivered by the available carrier(s). Please amend your cart.'}
											{elseif $error == Carrier::SHIPPING_SIZE_EXCEPTION}
												{$flag_error_message = true}
												{l s='The product selection cannot be delivered by the available carrier(s): its size does not fit. Please amend your cart to reduce its size.'}
											{/if}
										{/foreach}
										{if !$flag_error_message}
											{l s='No carriers available for the address "%s".' sprintf=$address->alias}
										{/if}
									{/if}
									{if !$address@last}
										<br />
									{/if}
								{foreachelse}
									{l s='No carriers available.'}
								{/foreach}
							</p>
						{/foreach}
					{/if}
				</div> <!-- end delivery_options_address -->
				<div id="extra_carrier" style="display: none;"></div>
				{if $opc}
					<p class="carrier_title">{l s='Leave a message'}</p>
					<div>
						<p>{l s='If you would like to add a comment about your order, please write it in the field below.'}</p>
						<textarea class="form-control" cols="120" rows="2" name="message" id="message">{strip}
							{if isset($oldMessage)}{$oldMessage|escape:'html':'UTF-8'}{/if}
						{/strip}</textarea>
					</div>
				{/if}
				{if $recyclablePackAllowed}
					<p class="carrier_title">{l s='Recyclable Packaging'}</p>
					<div class="checkbox recyclable">
						<label for="recyclable">
							<input type="checkbox" name="recyclable" id="recyclable" value="1"{if $recyclable == 1} checked="checked"{/if} />
							{l s='I would like to receive my order in recycled packaging.'}
						</label>
					</div>
				{/if}
				{if $giftAllowed}
					{if $opc}
						<hr style="" />
					{/if}
					<p class="carrier_title">{l s='Gift'}</p>
					<div class="checkbox gift">
						<input type="checkbox" name="gift" id="gift" value="1"{if $cart->gift == 1} checked="checked"{/if} />
						<label for="gift">
							{l s='I would like my order to be gift wrapped.'}
							{if $gift_wrapping_price > 0}
								&nbsp;<i>({l s='Additional cost of'}
								<span class="price" id="gift-price">
									{if $priceDisplay == 1}
										{convertPrice price=$total_wrapping_tax_exc_cost}
									{else}
										{convertPrice price=$total_wrapping_cost}
									{/if}
								</span>
								{if $use_taxes && $display_tax_label}
									{if $priceDisplay == 1}
										{l s='(tax excl.)'}
									{else}
										{l s='(tax incl.)'}
									{/if}
								{/if})
								</i>
							{/if}
						</label>
					</div>
					<p id="gift_div">
						<label for="gift_message">{l s='If you\'d like, you can add a note to the gift:'}</label>
						<textarea rows="2" cols="120" id="gift_message" class="form-control" name="gift_message">{$cart->gift_message|escape:'html':'UTF-8'}</textarea>
					</p>
				{/if}
				{/if}
			{/if}
			{if $conditions && $cms_id && (! isset($advanced_payment_api) || !$advanced_payment_api)}
				{if $opc}
					<hr style="" />
				{/if}
                {if isset($override_tos_display) && $override_tos_display}
                    {$override_tos_display}
                {else}
                    <div class="box">
                        <p class="checkbox">
                            <input type="checkbox" name="cgv" id="cgv" value="1" {if $checkedTOS}checked="checked"{/if} />
                            <label for="cgv">{l s='I agree to the terms of service and will adhere to them unconditionally.'}</label>
                            <a href="{$link_conditions|escape:'html':'UTF-8'}" class="iframe" rel="nofollow">{l s='(Read the Terms of Service)'}</a>
                        </p>
                    </div>
                {/if}
			{/if}
		</div> <!-- end delivery_options_address -->
		{if !$opc}
				<p class="cart_navigation clearfix">
					<input type="hidden" name="step" value="3" />
					<input type="hidden" name="back" value="{$back}" />
					{if !$is_guest}
						{if $back}
							<a href="{$link->getPageLink('order', true, NULL, "step=1&back={$back}{if $multi_shipping}&multi-shipping={$multi_shipping}{/if}")|escape:'html':'UTF-8'}" title="{l s='Previous'}" class="button-exclusive btn btn-default">
								<i class="icon-chevron-left"></i>
								{l s='Step before'}
							</a>
						{else}
							<a href="{$link->getPageLink('order', true, NULL, "step=1{if $multi_shipping}&multi-shipping={$multi_shipping}{/if}")|escape:'html':'UTF-8'}" title="{l s='Previous'}" class="button-exclusive btn btn-default">
								<i class="icon-chevron-left"></i>
								{l s='Step before'}
							</a>
						{/if}
					{else}
						<a href="{$link->getPageLink('order', true, NULL, "{if $multi_shipping}multi-shipping={$multi_shipping}{/if}")|escape:'html':'UTF-8'}" title="{l s='Previous'}" class="button-exclusive btn btn-default">
							<i class="icon-chevron-left"></i>
							{l s='Step before'}
						</a>
					{/if}
					{if isset($virtual_cart) && $virtual_cart || (isset($delivery_option_list) && !empty($delivery_option_list))}
						<button type="submit" name="processCarrier" class="button btn btn-default standard-checkout button-medium">
							<span>
								{l s='Proceed to checkout'}
								<i class="icon-chevron-right right"></i>
							</span>
						</button>
					{/if}
				</p>
			</form>
	{else}
		</div> <!-- end opc_delivery_methods -->
	{/if}
</div> <!-- end carrier_area -->
{strip}
{if !$opc}
	{addJsDef orderProcess='order'}
	{if isset($virtual_cart) && !$virtual_cart && $giftAllowed && $cart->gift == 1}
		{addJsDef cart_gift=true}
	{else}
		{addJsDef cart_gift=false}
	{/if}
	{addJsDef orderUrl=$link->getPageLink("order", true)|escape:'quotes':'UTF-8'}
	{addJsDefL name=txtProduct}{l s='Product' js=1}{/addJsDefL}
	{addJsDefL name=txtProducts}{l s='Products' js=1}{/addJsDefL}
{/if}
{if $conditions}
	{addJsDefL name=msg_order_carrier}{l s='You must agree to the terms of service before continuing.' js=1}{/addJsDefL}
{/if}
{/strip}
