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

{capture name=path}
    <a href="{$link->getPageLink('order', true, NULL, "step=3")|escape:'html':'UTF-8'}" title="{l s='Go back to the Checkout' mod='bankwire'}">{l s='Checkout' mod='bankwire'}</a><span class="navigation-pipe">{$navigationPipe}</span>{l s='Bank-wire payment' mod='bankwire'}
{/capture}

{assign var='current_step' value='payment'}

{if $nbProducts <= 0}
    <p class="alert alert-warning">
        {l s='Your shopping cart is empty.' mod='bankwire'}
    </p>
{else}
        <div class="box cheque-box">
            <p class="cheque-indent">
                <strong class="dark">
                    {l s='Condition of the order.' mod='bankwire'}
                </strong>
            </p>
            <p>
                - {l s='The total amount of your order is' mod='bankwire'}
           </p>
            <p>
                - {l s='Bank wire account information' mod='bankwire'}
                <br />
                - {l s='Please confirm your order by clicking "I confirm my order".' mod='bankwire'}
            </p>
        </div><!-- .cheque-box -->
{/if}
