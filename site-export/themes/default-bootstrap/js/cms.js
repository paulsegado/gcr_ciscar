/*
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
*/
$(document).ready(function(){
	if (typeof ad !== 'undefined' && ad && typeof adtoken !== 'undefined' && adtoken)
	{
		$(document).on('click', 'input[name=publish_button]', function(e){
			e.preventDefault();
			submitPublishCMS(ad, 0, adtoken);
		});
		$(document).on('click', 'input[name=lnk_view]', function(e){
			e.preventDefault();
			submitPublishCMS(ad, 1, adtoken);
		});
	}
});

function submitPublishCMS(url, redirect, token)
{
	var id_cms = $('#admin-action-cms-id').val();

	$.ajaxSetup({async: false});
	$.post(url+'/index.php', { 
			action: 'PublishCMS',
			id_cms: id_cms, 
			status: 1, 
			redirect: redirect,
			ajax: 1,
			tab: 'AdminCmsContent',
			token: token
		},
		function(data)
		{
			if (data.indexOf('error') === -1)
				document.location.href = data;
		}
	);
	return true;
}

$(function() {
	$( "#picto" ).on( "click", function() {
		$("#tab-picto").toggle("slow");
		$("#icon1").toggleClass("icon-arrow-circle-down");
	});
	$( "#fix" ).on( "click", function() {
		$("#tab-fix").toggle("slow");
		$("#icon2").toggleClass("icon-arrow-circle-down");
	});
	$( "#plaq" ).on( "click", function() {
		$("#tab-plaq").toggle("slow");
		$("#icon3").toggleClass("icon-arrow-circle-down");
	});
	$( "#chev" ).on( "click", function() {
		$("#tab-chev").toggle("slow");
		$("#icon4").toggleClass("icon-arrow-circle-down");
	});
	$( "#pand" ).on( "click", function() {
		$("#tab-pand").toggle("slow");
		$("#icon5").toggleClass("icon-arrow-circle-down");
	});
	$( "#pani" ).on( "click", function() {
		$("#tab-pani").toggle("slow");
		$("#icon6").toggleClass("icon-arrow-circle-down");
	});
});
