<?php /*%%SmartyHeaderCode:319975bc85dc259b8b4-92272086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e151bd14fd0eb97b06794faf614b9d149929e4b3' => 
    array (
      0 => 'C:\\wamp64\\www\\workspace\\www\\site-export\\modules\\blockbestsellers\\views\\templates\\hook\\blockbestsellers-home.tpl',
      1 => 1512548630,
      2 => 'file',
    ),
    'e78f64a853ace571c06e31e711705e105118b63f' => 
    array (
      0 => 'C:\\wamp64\\www\\workspace\\www\\site-export\\themes\\default-bootstrap\\product-list.tpl',
      1 => 1512561279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '319975bc85dc259b8b4-92272086',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c59aa5b884428_19720729',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c59aa5b884428_19720729')) {function content_5c59aa5b884428_19720729($_smarty_tpl) {?>	
	
									
		
	
	<!-- Products list -->
	<ul id="blockbestsellers" class="product_list grid row blockbestsellers tab-pane">
			
		
		
								<li class="ajax_block_product col-xs-12 col-sm-4 col-md-3 first-in-line first-item-of-tablet-line first-item-of-mobile-line">
			<div class="product-container" itemscope itemtype="https://schema.org/Product">
				<div class="left-block">
					<div class="product-image-container">
						<a class="product_img_link" href="http://ciscar.export/index.php?id_product=533&amp;controller=product&amp;id_lang=1" title="POCHETTE PLASTIQUE DECOUPEE - LOT DE 100" itemprop="url">
							<img class="replace-2x img-responsive" src="http://ciscar.export/img/p/9/6/6/966-home_default.jpg" alt="POCHETTE PLASTIQUE DECOUPEE - LOT DE 100" title="POCHETTE PLASTIQUE DECOUPEE - LOT DE 100"  width="250" height="250" itemprop="image" />
						</a>
																			<div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
																	<span itemprop="price" class="price product-price">
										
<!-- CISCAR 1, ajouter le prix unitaire si renseigne -->							
										<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: unit_price_ratio in C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e7\8f\64\e78f64a853ace571c06e31e711705e105118b63f.file.product-list.tpl.cache.php on line <i>130</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0002</td><td bgcolor='#eeeeec' align='right'>368792</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0856</td><td bgcolor='#eeeeec' align='right'>9090128</td><td bgcolor='#eeeeec'>Dispatcher->dispatch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>27</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0914</td><td bgcolor='#eeeeec' align='right'>9582880</td><td bgcolor='#eeeeec'>IndexController->run(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Dispatcher.php' bgcolor='#eeeeec'>...\Dispatcher.php<b>:</b>485</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1256</td><td bgcolor='#eeeeec' align='right'>13082872</td><td bgcolor='#eeeeec'>IndexController->initContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\controller\Controller.php' bgcolor='#eeeeec'>...\Controller.php<b>:</b>214</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>1.2431</td><td bgcolor='#eeeeec' align='right'>24417208</td><td bgcolor='#eeeeec'>HookCore::exec(  )</td><td title='C:\wamp64\www\workspace\www\site-export\controllers\front\IndexController.php' bgcolor='#eeeeec'>...\IndexController.php<b>:</b>41</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>HookCore::coreCallHook(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>576</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHomeTabContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>617</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>1.2770</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHome(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>195</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>1.2799</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>BlockBestSellers->display(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>192</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\module\Module.php' bgcolor='#eeeeec'>...\Module.php<b>:</b>2380</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083352</td><td bgcolor='#eeeeec'>content_5bc85dc25cfb07_87575261(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083944</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->getSubTemplate(  )</td><td title='C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e1\51\bd\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php' bgcolor='#eeeeec'>...\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php<b>:</b>28</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>325</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25113088</td><td bgcolor='#eeeeec'>content_5bc85dc24c96b9_95760979(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
</table></font>
											9,87 €
																					<!-- FIN ajouter le prix unitaire -->	
									</span>
									<meta itemprop="priceCurrency" content="EUR" />
																											
									
															</div>
																							</div>
										
				</div>
				<div class="right-block">
					<h5 itemprop="name">
												<a class="product-name" href="http://ciscar.export/index.php?id_product=533&amp;controller=product&amp;id_lang=1" title="POCHETTE PLASTIQUE DECOUPEE - LOT DE 100" itemprop="url" >
							POCHETTE PLASTIQUE DECOUPEE - LOT DE 100
						</a>
					</h5>
															<p class="product-desc" itemprop="description">
						Format : 428 x 110 mm.
En PVC Cristal.
					</p>
										<div class="content_price">
													
							<span class="price product-price">
<!-- CISCAR 2, ajouter le prix unitaires si renseigne -->										
								<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: unit_price_ratio in C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e7\8f\64\e78f64a853ace571c06e31e711705e105118b63f.file.product-list.tpl.cache.php on line <i>239</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0002</td><td bgcolor='#eeeeec' align='right'>368792</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0856</td><td bgcolor='#eeeeec' align='right'>9090128</td><td bgcolor='#eeeeec'>Dispatcher->dispatch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>27</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0914</td><td bgcolor='#eeeeec' align='right'>9582880</td><td bgcolor='#eeeeec'>IndexController->run(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Dispatcher.php' bgcolor='#eeeeec'>...\Dispatcher.php<b>:</b>485</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1256</td><td bgcolor='#eeeeec' align='right'>13082872</td><td bgcolor='#eeeeec'>IndexController->initContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\controller\Controller.php' bgcolor='#eeeeec'>...\Controller.php<b>:</b>214</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>1.2431</td><td bgcolor='#eeeeec' align='right'>24417208</td><td bgcolor='#eeeeec'>HookCore::exec(  )</td><td title='C:\wamp64\www\workspace\www\site-export\controllers\front\IndexController.php' bgcolor='#eeeeec'>...\IndexController.php<b>:</b>41</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>HookCore::coreCallHook(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>576</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHomeTabContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>617</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>1.2770</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHome(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>195</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>1.2799</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>BlockBestSellers->display(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>192</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\module\Module.php' bgcolor='#eeeeec'>...\Module.php<b>:</b>2380</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083352</td><td bgcolor='#eeeeec'>content_5bc85dc25cfb07_87575261(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083944</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->getSubTemplate(  )</td><td title='C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e1\51\bd\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php' bgcolor='#eeeeec'>...\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php<b>:</b>28</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>325</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25113088</td><td bgcolor='#eeeeec'>content_5bc85dc24c96b9_95760979(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
</table></font>
									9,87 €
																	<!-- FIN ajouter le prix unitaire -->	
							</span>
														
							
							
											</div>
										<div class="button-container">
																													<a class="button ajax_add_to_cart_button btn btn-default" href="http://ciscar.export/index.php?controller=cart&amp;add=1&amp;id_product=533&amp;token=4a414179b8ec29c8c92d48a2634aa1f7" rel="nofollow" title="Ajouter au panier" data-id-product-attribute="0" data-id-product="533" data-minimal_quantity="1">
									<span>Ajouter au panier</span>
								</a>
																			<a class="button lnk_view btn btn-default" href="http://ciscar.export/index.php?id_product=533&amp;controller=product&amp;id_lang=1" title="Afficher">
							<span>D&eacute;tails</span>
						</a>
					</div>
										<div class="product-flags">
																														</div>
									</div>				
							</div><!-- .product-container> -->
		</li>
			
		
		
								<li class="ajax_block_product col-xs-12 col-sm-4 col-md-3 last-item-of-mobile-line">
			<div class="product-container" itemscope itemtype="https://schema.org/Product">
				<div class="left-block">
					<div class="product-image-container">
						<a class="product_img_link" href="http://ciscar.export/index.php?id_product=429&amp;controller=product&amp;id_lang=1" title="LE CERTIFICAT CONTROLE DE VOTR VEHICULE - LOT DE 100" itemprop="url">
							<img class="replace-2x img-responsive" src="http://ciscar.export/img/p/8/6/2/862-home_default.jpg" alt="LE CERTIFICAT CONTROLE DE VOTR VEHICULE - LOT DE 100" title="LE CERTIFICAT CONTROLE DE VOTR VEHICULE - LOT DE 100"  width="250" height="250" itemprop="image" />
						</a>
																			<div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
																	<span itemprop="price" class="price product-price">
										
<!-- CISCAR 1, ajouter le prix unitaire si renseigne -->							
										<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: unit_price_ratio in C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e7\8f\64\e78f64a853ace571c06e31e711705e105118b63f.file.product-list.tpl.cache.php on line <i>130</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0002</td><td bgcolor='#eeeeec' align='right'>368792</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0856</td><td bgcolor='#eeeeec' align='right'>9090128</td><td bgcolor='#eeeeec'>Dispatcher->dispatch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>27</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0914</td><td bgcolor='#eeeeec' align='right'>9582880</td><td bgcolor='#eeeeec'>IndexController->run(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Dispatcher.php' bgcolor='#eeeeec'>...\Dispatcher.php<b>:</b>485</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1256</td><td bgcolor='#eeeeec' align='right'>13082872</td><td bgcolor='#eeeeec'>IndexController->initContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\controller\Controller.php' bgcolor='#eeeeec'>...\Controller.php<b>:</b>214</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>1.2431</td><td bgcolor='#eeeeec' align='right'>24417208</td><td bgcolor='#eeeeec'>HookCore::exec(  )</td><td title='C:\wamp64\www\workspace\www\site-export\controllers\front\IndexController.php' bgcolor='#eeeeec'>...\IndexController.php<b>:</b>41</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>HookCore::coreCallHook(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>576</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHomeTabContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>617</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>1.2770</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHome(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>195</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>1.2799</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>BlockBestSellers->display(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>192</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\module\Module.php' bgcolor='#eeeeec'>...\Module.php<b>:</b>2380</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083352</td><td bgcolor='#eeeeec'>content_5bc85dc25cfb07_87575261(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083944</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->getSubTemplate(  )</td><td title='C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e1\51\bd\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php' bgcolor='#eeeeec'>...\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php<b>:</b>28</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>325</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25113088</td><td bgcolor='#eeeeec'>content_5bc85dc24c96b9_95760979(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
</table></font>
											7,03 €
																					<!-- FIN ajouter le prix unitaire -->	
									</span>
									<meta itemprop="priceCurrency" content="EUR" />
																											
									
															</div>
																							</div>
										
				</div>
				<div class="right-block">
					<h5 itemprop="name">
												<a class="product-name" href="http://ciscar.export/index.php?id_product=429&amp;controller=product&amp;id_lang=1" title="LE CERTIFICAT CONTROLE DE VOTR VEHICULE - LOT DE 100" itemprop="url" >
							LE CERTIFICAT CONTROLE DE VOTR VEHICULE -...
						</a>
					</h5>
															<p class="product-desc" itemprop="description">
						Format : 216 mm x 320 mm.
Liasses de 4 feuillets.
					</p>
										<div class="content_price">
													
							<span class="price product-price">
<!-- CISCAR 2, ajouter le prix unitaires si renseigne -->										
								<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: unit_price_ratio in C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e7\8f\64\e78f64a853ace571c06e31e711705e105118b63f.file.product-list.tpl.cache.php on line <i>239</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0002</td><td bgcolor='#eeeeec' align='right'>368792</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0856</td><td bgcolor='#eeeeec' align='right'>9090128</td><td bgcolor='#eeeeec'>Dispatcher->dispatch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>27</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0914</td><td bgcolor='#eeeeec' align='right'>9582880</td><td bgcolor='#eeeeec'>IndexController->run(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Dispatcher.php' bgcolor='#eeeeec'>...\Dispatcher.php<b>:</b>485</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1256</td><td bgcolor='#eeeeec' align='right'>13082872</td><td bgcolor='#eeeeec'>IndexController->initContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\controller\Controller.php' bgcolor='#eeeeec'>...\Controller.php<b>:</b>214</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>1.2431</td><td bgcolor='#eeeeec' align='right'>24417208</td><td bgcolor='#eeeeec'>HookCore::exec(  )</td><td title='C:\wamp64\www\workspace\www\site-export\controllers\front\IndexController.php' bgcolor='#eeeeec'>...\IndexController.php<b>:</b>41</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>HookCore::coreCallHook(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>576</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHomeTabContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>617</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>1.2770</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHome(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>195</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>1.2799</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>BlockBestSellers->display(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>192</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\module\Module.php' bgcolor='#eeeeec'>...\Module.php<b>:</b>2380</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083352</td><td bgcolor='#eeeeec'>content_5bc85dc25cfb07_87575261(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083944</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->getSubTemplate(  )</td><td title='C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e1\51\bd\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php' bgcolor='#eeeeec'>...\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php<b>:</b>28</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>325</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25113088</td><td bgcolor='#eeeeec'>content_5bc85dc24c96b9_95760979(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
</table></font>
									7,03 €
																	<!-- FIN ajouter le prix unitaire -->	
							</span>
														
							
							
											</div>
										<div class="button-container">
																													<a class="button ajax_add_to_cart_button btn btn-default" href="http://ciscar.export/index.php?controller=cart&amp;add=1&amp;id_product=429&amp;token=4a414179b8ec29c8c92d48a2634aa1f7" rel="nofollow" title="Ajouter au panier" data-id-product-attribute="0" data-id-product="429" data-minimal_quantity="1">
									<span>Ajouter au panier</span>
								</a>
																			<a class="button lnk_view btn btn-default" href="http://ciscar.export/index.php?id_product=429&amp;controller=product&amp;id_lang=1" title="Afficher">
							<span>D&eacute;tails</span>
						</a>
					</div>
										<div class="product-flags">
																														</div>
									</div>				
							</div><!-- .product-container> -->
		</li>
			
		
		
								<li class="ajax_block_product col-xs-12 col-sm-4 col-md-3 last-item-of-tablet-line first-item-of-mobile-line">
			<div class="product-container" itemscope itemtype="https://schema.org/Product">
				<div class="left-block">
					<div class="product-image-container">
						<a class="product_img_link" href="http://ciscar.export/index.php?id_product=410&amp;controller=product&amp;id_lang=1" title="ETIQUETTE ADHESIVE PERMANENT ROUGE - LOT DE 50" itemprop="url">
							<img class="replace-2x img-responsive" src="http://ciscar.export/img/p/8/4/3/843-home_default.jpg" alt="ETIQUETTE ADHESIVE PERMANENT ROUGE - LOT DE 50" title="ETIQUETTE ADHESIVE PERMANENT ROUGE - LOT DE 50"  width="250" height="250" itemprop="image" />
						</a>
																			<div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
																	<span itemprop="price" class="price product-price">
										
<!-- CISCAR 1, ajouter le prix unitaire si renseigne -->							
										<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: unit_price_ratio in C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e7\8f\64\e78f64a853ace571c06e31e711705e105118b63f.file.product-list.tpl.cache.php on line <i>130</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0002</td><td bgcolor='#eeeeec' align='right'>368792</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0856</td><td bgcolor='#eeeeec' align='right'>9090128</td><td bgcolor='#eeeeec'>Dispatcher->dispatch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>27</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0914</td><td bgcolor='#eeeeec' align='right'>9582880</td><td bgcolor='#eeeeec'>IndexController->run(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Dispatcher.php' bgcolor='#eeeeec'>...\Dispatcher.php<b>:</b>485</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1256</td><td bgcolor='#eeeeec' align='right'>13082872</td><td bgcolor='#eeeeec'>IndexController->initContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\controller\Controller.php' bgcolor='#eeeeec'>...\Controller.php<b>:</b>214</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>1.2431</td><td bgcolor='#eeeeec' align='right'>24417208</td><td bgcolor='#eeeeec'>HookCore::exec(  )</td><td title='C:\wamp64\www\workspace\www\site-export\controllers\front\IndexController.php' bgcolor='#eeeeec'>...\IndexController.php<b>:</b>41</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>HookCore::coreCallHook(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>576</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHomeTabContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>617</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>1.2770</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHome(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>195</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>1.2799</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>BlockBestSellers->display(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>192</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\module\Module.php' bgcolor='#eeeeec'>...\Module.php<b>:</b>2380</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083352</td><td bgcolor='#eeeeec'>content_5bc85dc25cfb07_87575261(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083944</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->getSubTemplate(  )</td><td title='C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e1\51\bd\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php' bgcolor='#eeeeec'>...\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php<b>:</b>28</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>325</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25113088</td><td bgcolor='#eeeeec'>content_5bc85dc24c96b9_95760979(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
</table></font>
											2,91 €
																					<!-- FIN ajouter le prix unitaire -->	
									</span>
									<meta itemprop="priceCurrency" content="EUR" />
																											
									
															</div>
																							</div>
										
				</div>
				<div class="right-block">
					<h5 itemprop="name">
												<a class="product-name" href="http://ciscar.export/index.php?id_product=410&amp;controller=product&amp;id_lang=1" title="ETIQUETTE ADHESIVE PERMANENT ROUGE - LOT DE 50" itemprop="url" >
							ETIQUETTE ADHESIVE PERMANENT ROUGE - LOT...
						</a>
					</h5>
															<p class="product-desc" itemprop="description">
						Format : 175 mm x 125 mm.
Sur adhésif fluo rouge permanent.
					</p>
										<div class="content_price">
													
							<span class="price product-price">
<!-- CISCAR 2, ajouter le prix unitaires si renseigne -->										
								<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: unit_price_ratio in C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e7\8f\64\e78f64a853ace571c06e31e711705e105118b63f.file.product-list.tpl.cache.php on line <i>239</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0002</td><td bgcolor='#eeeeec' align='right'>368792</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0856</td><td bgcolor='#eeeeec' align='right'>9090128</td><td bgcolor='#eeeeec'>Dispatcher->dispatch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>27</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0914</td><td bgcolor='#eeeeec' align='right'>9582880</td><td bgcolor='#eeeeec'>IndexController->run(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Dispatcher.php' bgcolor='#eeeeec'>...\Dispatcher.php<b>:</b>485</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1256</td><td bgcolor='#eeeeec' align='right'>13082872</td><td bgcolor='#eeeeec'>IndexController->initContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\controller\Controller.php' bgcolor='#eeeeec'>...\Controller.php<b>:</b>214</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>1.2431</td><td bgcolor='#eeeeec' align='right'>24417208</td><td bgcolor='#eeeeec'>HookCore::exec(  )</td><td title='C:\wamp64\www\workspace\www\site-export\controllers\front\IndexController.php' bgcolor='#eeeeec'>...\IndexController.php<b>:</b>41</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>HookCore::coreCallHook(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>576</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHomeTabContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>617</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>1.2770</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHome(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>195</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>1.2799</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>BlockBestSellers->display(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>192</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\module\Module.php' bgcolor='#eeeeec'>...\Module.php<b>:</b>2380</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083352</td><td bgcolor='#eeeeec'>content_5bc85dc25cfb07_87575261(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083944</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->getSubTemplate(  )</td><td title='C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e1\51\bd\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php' bgcolor='#eeeeec'>...\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php<b>:</b>28</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>325</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25113088</td><td bgcolor='#eeeeec'>content_5bc85dc24c96b9_95760979(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
</table></font>
									2,91 €
																	<!-- FIN ajouter le prix unitaire -->	
							</span>
														
							
							
											</div>
										<div class="button-container">
																													<a class="button ajax_add_to_cart_button btn btn-default" href="http://ciscar.export/index.php?controller=cart&amp;add=1&amp;id_product=410&amp;token=4a414179b8ec29c8c92d48a2634aa1f7" rel="nofollow" title="Ajouter au panier" data-id-product-attribute="0" data-id-product="410" data-minimal_quantity="1">
									<span>Ajouter au panier</span>
								</a>
																			<a class="button lnk_view btn btn-default" href="http://ciscar.export/index.php?id_product=410&amp;controller=product&amp;id_lang=1" title="Afficher">
							<span>D&eacute;tails</span>
						</a>
					</div>
										<div class="product-flags">
																														</div>
									</div>				
							</div><!-- .product-container> -->
		</li>
			
		
		
								<li class="ajax_block_product col-xs-12 col-sm-4 col-md-3 last-in-line first-item-of-tablet-line last-item-of-mobile-line">
			<div class="product-container" itemscope itemtype="https://schema.org/Product">
				<div class="left-block">
					<div class="product-image-container">
						<a class="product_img_link" href="http://ciscar.export/index.php?id_product=551&amp;controller=product&amp;id_lang=1" title="CERTIFICAT CONFORMITE A4 95GR- LOT DE 1000" itemprop="url">
							<img class="replace-2x img-responsive" src="http://ciscar.export/img/p/9/8/4/984-home_default.jpg" alt="CERTIFICAT CONFORMITE A4 95GR- LOT DE 1000" title="CERTIFICAT CONFORMITE A4 95GR- LOT DE 1000"  width="250" height="250" itemprop="image" />
						</a>
																			<div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
																	<span itemprop="price" class="price product-price">
										
<!-- CISCAR 1, ajouter le prix unitaire si renseigne -->							
										<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: unit_price_ratio in C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e7\8f\64\e78f64a853ace571c06e31e711705e105118b63f.file.product-list.tpl.cache.php on line <i>130</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0002</td><td bgcolor='#eeeeec' align='right'>368792</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0856</td><td bgcolor='#eeeeec' align='right'>9090128</td><td bgcolor='#eeeeec'>Dispatcher->dispatch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>27</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0914</td><td bgcolor='#eeeeec' align='right'>9582880</td><td bgcolor='#eeeeec'>IndexController->run(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Dispatcher.php' bgcolor='#eeeeec'>...\Dispatcher.php<b>:</b>485</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1256</td><td bgcolor='#eeeeec' align='right'>13082872</td><td bgcolor='#eeeeec'>IndexController->initContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\controller\Controller.php' bgcolor='#eeeeec'>...\Controller.php<b>:</b>214</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>1.2431</td><td bgcolor='#eeeeec' align='right'>24417208</td><td bgcolor='#eeeeec'>HookCore::exec(  )</td><td title='C:\wamp64\www\workspace\www\site-export\controllers\front\IndexController.php' bgcolor='#eeeeec'>...\IndexController.php<b>:</b>41</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>HookCore::coreCallHook(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>576</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHomeTabContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>617</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>1.2770</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHome(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>195</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>1.2799</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>BlockBestSellers->display(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>192</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\module\Module.php' bgcolor='#eeeeec'>...\Module.php<b>:</b>2380</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083352</td><td bgcolor='#eeeeec'>content_5bc85dc25cfb07_87575261(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083944</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->getSubTemplate(  )</td><td title='C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e1\51\bd\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php' bgcolor='#eeeeec'>...\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php<b>:</b>28</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>325</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25113088</td><td bgcolor='#eeeeec'>content_5bc85dc24c96b9_95760979(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
</table></font>
											54,31 €
																					<!-- FIN ajouter le prix unitaire -->	
									</span>
									<meta itemprop="priceCurrency" content="EUR" />
																											
									
															</div>
																							</div>
										
				</div>
				<div class="right-block">
					<h5 itemprop="name">
												<a class="product-name" href="http://ciscar.export/index.php?id_product=551&amp;controller=product&amp;id_lang=1" title="CERTIFICAT CONFORMITE A4 95GR- LOT DE 1000" itemprop="url" >
							CERTIFICAT CONFORMITE A4 95GR- LOT DE 1000
						</a>
					</h5>
															<p class="product-desc" itemprop="description">
						
					</p>
										<div class="content_price">
													
							<span class="price product-price">
<!-- CISCAR 2, ajouter le prix unitaires si renseigne -->										
								<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: unit_price_ratio in C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e7\8f\64\e78f64a853ace571c06e31e711705e105118b63f.file.product-list.tpl.cache.php on line <i>239</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0002</td><td bgcolor='#eeeeec' align='right'>368792</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0856</td><td bgcolor='#eeeeec' align='right'>9090128</td><td bgcolor='#eeeeec'>Dispatcher->dispatch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>27</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0914</td><td bgcolor='#eeeeec' align='right'>9582880</td><td bgcolor='#eeeeec'>IndexController->run(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Dispatcher.php' bgcolor='#eeeeec'>...\Dispatcher.php<b>:</b>485</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1256</td><td bgcolor='#eeeeec' align='right'>13082872</td><td bgcolor='#eeeeec'>IndexController->initContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\controller\Controller.php' bgcolor='#eeeeec'>...\Controller.php<b>:</b>214</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>1.2431</td><td bgcolor='#eeeeec' align='right'>24417208</td><td bgcolor='#eeeeec'>HookCore::exec(  )</td><td title='C:\wamp64\www\workspace\www\site-export\controllers\front\IndexController.php' bgcolor='#eeeeec'>...\IndexController.php<b>:</b>41</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>HookCore::coreCallHook(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>576</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHomeTabContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>617</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>1.2770</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHome(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>195</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>1.2799</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>BlockBestSellers->display(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>192</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\module\Module.php' bgcolor='#eeeeec'>...\Module.php<b>:</b>2380</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083352</td><td bgcolor='#eeeeec'>content_5bc85dc25cfb07_87575261(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083944</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->getSubTemplate(  )</td><td title='C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e1\51\bd\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php' bgcolor='#eeeeec'>...\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php<b>:</b>28</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>325</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25113088</td><td bgcolor='#eeeeec'>content_5bc85dc24c96b9_95760979(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
</table></font>
									54,31 €
																	<!-- FIN ajouter le prix unitaire -->	
							</span>
														
							
							
											</div>
										<div class="button-container">
																													<a class="button ajax_add_to_cart_button btn btn-default" href="http://ciscar.export/index.php?controller=cart&amp;add=1&amp;id_product=551&amp;token=4a414179b8ec29c8c92d48a2634aa1f7" rel="nofollow" title="Ajouter au panier" data-id-product-attribute="0" data-id-product="551" data-minimal_quantity="1">
									<span>Ajouter au panier</span>
								</a>
																			<a class="button lnk_view btn btn-default" href="http://ciscar.export/index.php?id_product=551&amp;controller=product&amp;id_lang=1" title="Afficher">
							<span>D&eacute;tails</span>
						</a>
					</div>
										<div class="product-flags">
																														</div>
									</div>				
							</div><!-- .product-container> -->
		</li>
			
		
		
								<li class="ajax_block_product col-xs-12 col-sm-4 col-md-3 first-in-line first-item-of-mobile-line">
			<div class="product-container" itemscope itemtype="https://schema.org/Product">
				<div class="left-block">
					<div class="product-image-container">
						<a class="product_img_link" href="http://ciscar.export/index.php?id_product=428&amp;controller=product&amp;id_lang=1" title="ETIQUETTE ENTRETIEN REVISION - LOT DE 100" itemprop="url">
							<img class="replace-2x img-responsive" src="http://ciscar.export/img/p/8/6/1/861-home_default.jpg" alt="ETIQUETTE ENTRETIEN REVISION - LOT DE 100" title="ETIQUETTE ENTRETIEN REVISION - LOT DE 100"  width="250" height="250" itemprop="image" />
						</a>
																			<div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
																	<span itemprop="price" class="price product-price">
										
<!-- CISCAR 1, ajouter le prix unitaire si renseigne -->							
										<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: unit_price_ratio in C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e7\8f\64\e78f64a853ace571c06e31e711705e105118b63f.file.product-list.tpl.cache.php on line <i>130</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0002</td><td bgcolor='#eeeeec' align='right'>368792</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0856</td><td bgcolor='#eeeeec' align='right'>9090128</td><td bgcolor='#eeeeec'>Dispatcher->dispatch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>27</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0914</td><td bgcolor='#eeeeec' align='right'>9582880</td><td bgcolor='#eeeeec'>IndexController->run(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Dispatcher.php' bgcolor='#eeeeec'>...\Dispatcher.php<b>:</b>485</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1256</td><td bgcolor='#eeeeec' align='right'>13082872</td><td bgcolor='#eeeeec'>IndexController->initContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\controller\Controller.php' bgcolor='#eeeeec'>...\Controller.php<b>:</b>214</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>1.2431</td><td bgcolor='#eeeeec' align='right'>24417208</td><td bgcolor='#eeeeec'>HookCore::exec(  )</td><td title='C:\wamp64\www\workspace\www\site-export\controllers\front\IndexController.php' bgcolor='#eeeeec'>...\IndexController.php<b>:</b>41</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>HookCore::coreCallHook(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>576</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHomeTabContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>617</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>1.2770</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHome(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>195</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>1.2799</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>BlockBestSellers->display(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>192</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\module\Module.php' bgcolor='#eeeeec'>...\Module.php<b>:</b>2380</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083352</td><td bgcolor='#eeeeec'>content_5bc85dc25cfb07_87575261(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083944</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->getSubTemplate(  )</td><td title='C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e1\51\bd\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php' bgcolor='#eeeeec'>...\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php<b>:</b>28</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>325</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25113088</td><td bgcolor='#eeeeec'>content_5bc85dc24c96b9_95760979(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
</table></font>
											0,40 €
																					<!-- FIN ajouter le prix unitaire -->	
									</span>
									<meta itemprop="priceCurrency" content="EUR" />
																											
									
															</div>
																							</div>
										
				</div>
				<div class="right-block">
					<h5 itemprop="name">
												<a class="product-name" href="http://ciscar.export/index.php?id_product=428&amp;controller=product&amp;id_lang=1" title="ETIQUETTE ENTRETIEN REVISION - LOT DE 100" itemprop="url" >
							ETIQUETTE ENTRETIEN REVISION - LOT DE 100
						</a>
					</h5>
															<p class="product-desc" itemprop="description">
						Format : 85 mm x 122 mm
					</p>
										<div class="content_price">
													
							<span class="price product-price">
<!-- CISCAR 2, ajouter le prix unitaires si renseigne -->										
								<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: unit_price_ratio in C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e7\8f\64\e78f64a853ace571c06e31e711705e105118b63f.file.product-list.tpl.cache.php on line <i>239</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0002</td><td bgcolor='#eeeeec' align='right'>368792</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0856</td><td bgcolor='#eeeeec' align='right'>9090128</td><td bgcolor='#eeeeec'>Dispatcher->dispatch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>27</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0914</td><td bgcolor='#eeeeec' align='right'>9582880</td><td bgcolor='#eeeeec'>IndexController->run(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Dispatcher.php' bgcolor='#eeeeec'>...\Dispatcher.php<b>:</b>485</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1256</td><td bgcolor='#eeeeec' align='right'>13082872</td><td bgcolor='#eeeeec'>IndexController->initContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\controller\Controller.php' bgcolor='#eeeeec'>...\Controller.php<b>:</b>214</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>1.2431</td><td bgcolor='#eeeeec' align='right'>24417208</td><td bgcolor='#eeeeec'>HookCore::exec(  )</td><td title='C:\wamp64\www\workspace\www\site-export\controllers\front\IndexController.php' bgcolor='#eeeeec'>...\IndexController.php<b>:</b>41</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>HookCore::coreCallHook(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>576</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHomeTabContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>617</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>1.2770</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHome(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>195</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>1.2799</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>BlockBestSellers->display(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>192</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\module\Module.php' bgcolor='#eeeeec'>...\Module.php<b>:</b>2380</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083352</td><td bgcolor='#eeeeec'>content_5bc85dc25cfb07_87575261(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083944</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->getSubTemplate(  )</td><td title='C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e1\51\bd\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php' bgcolor='#eeeeec'>...\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php<b>:</b>28</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>325</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25113088</td><td bgcolor='#eeeeec'>content_5bc85dc24c96b9_95760979(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
</table></font>
									0,40 €
																	<!-- FIN ajouter le prix unitaire -->	
							</span>
														
							
							
											</div>
										<div class="button-container">
																													<a class="button ajax_add_to_cart_button btn btn-default" href="http://ciscar.export/index.php?controller=cart&amp;add=1&amp;id_product=428&amp;token=4a414179b8ec29c8c92d48a2634aa1f7" rel="nofollow" title="Ajouter au panier" data-id-product-attribute="0" data-id-product="428" data-minimal_quantity="1">
									<span>Ajouter au panier</span>
								</a>
																			<a class="button lnk_view btn btn-default" href="http://ciscar.export/index.php?id_product=428&amp;controller=product&amp;id_lang=1" title="Afficher">
							<span>D&eacute;tails</span>
						</a>
					</div>
										<div class="product-flags">
																														</div>
									</div>				
							</div><!-- .product-container> -->
		</li>
			
		
		
								<li class="ajax_block_product col-xs-12 col-sm-4 col-md-3 last-item-of-tablet-line last-item-of-mobile-line">
			<div class="product-container" itemscope itemtype="https://schema.org/Product">
				<div class="left-block">
					<div class="product-image-container">
						<a class="product_img_link" href="http://ciscar.export/index.php?id_product=536&amp;controller=product&amp;id_lang=1" title="BON DE COMMANDE DE TRAVAUX EXT. - LOT DE 100" itemprop="url">
							<img class="replace-2x img-responsive" src="http://ciscar.export/img/p/9/6/9/969-home_default.jpg" alt="BON DE COMMANDE DE TRAVAUX EXT. - LOT DE 100" title="BON DE COMMANDE DE TRAVAUX EXT. - LOT DE 100"  width="250" height="250" itemprop="image" />
						</a>
																			<div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
																	<span itemprop="price" class="price product-price">
										
<!-- CISCAR 1, ajouter le prix unitaire si renseigne -->							
										<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: unit_price_ratio in C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e7\8f\64\e78f64a853ace571c06e31e711705e105118b63f.file.product-list.tpl.cache.php on line <i>130</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0002</td><td bgcolor='#eeeeec' align='right'>368792</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0856</td><td bgcolor='#eeeeec' align='right'>9090128</td><td bgcolor='#eeeeec'>Dispatcher->dispatch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>27</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0914</td><td bgcolor='#eeeeec' align='right'>9582880</td><td bgcolor='#eeeeec'>IndexController->run(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Dispatcher.php' bgcolor='#eeeeec'>...\Dispatcher.php<b>:</b>485</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1256</td><td bgcolor='#eeeeec' align='right'>13082872</td><td bgcolor='#eeeeec'>IndexController->initContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\controller\Controller.php' bgcolor='#eeeeec'>...\Controller.php<b>:</b>214</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>1.2431</td><td bgcolor='#eeeeec' align='right'>24417208</td><td bgcolor='#eeeeec'>HookCore::exec(  )</td><td title='C:\wamp64\www\workspace\www\site-export\controllers\front\IndexController.php' bgcolor='#eeeeec'>...\IndexController.php<b>:</b>41</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>HookCore::coreCallHook(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>576</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHomeTabContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>617</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>1.2770</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHome(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>195</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>1.2799</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>BlockBestSellers->display(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>192</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\module\Module.php' bgcolor='#eeeeec'>...\Module.php<b>:</b>2380</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083352</td><td bgcolor='#eeeeec'>content_5bc85dc25cfb07_87575261(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083944</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->getSubTemplate(  )</td><td title='C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e1\51\bd\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php' bgcolor='#eeeeec'>...\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php<b>:</b>28</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>325</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25113088</td><td bgcolor='#eeeeec'>content_5bc85dc24c96b9_95760979(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
</table></font>
											6,15 €
																					<!-- FIN ajouter le prix unitaire -->	
									</span>
									<meta itemprop="priceCurrency" content="EUR" />
																											
									
															</div>
																							</div>
										
				</div>
				<div class="right-block">
					<h5 itemprop="name">
												<a class="product-name" href="http://ciscar.export/index.php?id_product=536&amp;controller=product&amp;id_lang=1" title="BON DE COMMANDE DE TRAVAUX EXT. - LOT DE 100" itemprop="url" >
							BON DE COMMANDE DE TRAVAUX EXT. - LOT DE 100
						</a>
					</h5>
															<p class="product-desc" itemprop="description">
						Format : 216 mm x 297 mm.
Liasse de 4 feuillets.
					</p>
										<div class="content_price">
													
							<span class="price product-price">
<!-- CISCAR 2, ajouter le prix unitaires si renseigne -->										
								<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: unit_price_ratio in C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e7\8f\64\e78f64a853ace571c06e31e711705e105118b63f.file.product-list.tpl.cache.php on line <i>239</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0002</td><td bgcolor='#eeeeec' align='right'>368792</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0856</td><td bgcolor='#eeeeec' align='right'>9090128</td><td bgcolor='#eeeeec'>Dispatcher->dispatch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>27</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0914</td><td bgcolor='#eeeeec' align='right'>9582880</td><td bgcolor='#eeeeec'>IndexController->run(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Dispatcher.php' bgcolor='#eeeeec'>...\Dispatcher.php<b>:</b>485</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1256</td><td bgcolor='#eeeeec' align='right'>13082872</td><td bgcolor='#eeeeec'>IndexController->initContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\controller\Controller.php' bgcolor='#eeeeec'>...\Controller.php<b>:</b>214</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>1.2431</td><td bgcolor='#eeeeec' align='right'>24417208</td><td bgcolor='#eeeeec'>HookCore::exec(  )</td><td title='C:\wamp64\www\workspace\www\site-export\controllers\front\IndexController.php' bgcolor='#eeeeec'>...\IndexController.php<b>:</b>41</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>HookCore::coreCallHook(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>576</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHomeTabContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>617</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>1.2770</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHome(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>195</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>1.2799</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>BlockBestSellers->display(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>192</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\module\Module.php' bgcolor='#eeeeec'>...\Module.php<b>:</b>2380</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083352</td><td bgcolor='#eeeeec'>content_5bc85dc25cfb07_87575261(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083944</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->getSubTemplate(  )</td><td title='C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e1\51\bd\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php' bgcolor='#eeeeec'>...\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php<b>:</b>28</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>325</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25113088</td><td bgcolor='#eeeeec'>content_5bc85dc24c96b9_95760979(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
</table></font>
									6,15 €
																	<!-- FIN ajouter le prix unitaire -->	
							</span>
														
							
							
											</div>
										<div class="button-container">
																													<a class="button ajax_add_to_cart_button btn btn-default" href="http://ciscar.export/index.php?controller=cart&amp;add=1&amp;id_product=536&amp;token=4a414179b8ec29c8c92d48a2634aa1f7" rel="nofollow" title="Ajouter au panier" data-id-product-attribute="0" data-id-product="536" data-minimal_quantity="1">
									<span>Ajouter au panier</span>
								</a>
																			<a class="button lnk_view btn btn-default" href="http://ciscar.export/index.php?id_product=536&amp;controller=product&amp;id_lang=1" title="Afficher">
							<span>D&eacute;tails</span>
						</a>
					</div>
										<div class="product-flags">
																														</div>
									</div>				
							</div><!-- .product-container> -->
		</li>
			
		
		
								<li class="ajax_block_product col-xs-12 col-sm-4 col-md-3 first-item-of-tablet-line first-item-of-mobile-line">
			<div class="product-container" itemscope itemtype="https://schema.org/Product">
				<div class="left-block">
					<div class="product-image-container">
						<a class="product_img_link" href="http://ciscar.export/index.php?id_product=424&amp;controller=product&amp;id_lang=1" title="POCHETTE ATELIER EN COURS GRISE - LOT DE 50" itemprop="url">
							<img class="replace-2x img-responsive" src="http://ciscar.export/img/p/8/5/7/857-home_default.jpg" alt="POCHETTE ATELIER EN COURS GRISE - LOT DE 50" title="POCHETTE ATELIER EN COURS GRISE - LOT DE 50"  width="250" height="250" itemprop="image" />
						</a>
																			<div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
																	<span itemprop="price" class="price product-price">
										
<!-- CISCAR 1, ajouter le prix unitaire si renseigne -->							
										<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: unit_price_ratio in C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e7\8f\64\e78f64a853ace571c06e31e711705e105118b63f.file.product-list.tpl.cache.php on line <i>130</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0002</td><td bgcolor='#eeeeec' align='right'>368792</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0856</td><td bgcolor='#eeeeec' align='right'>9090128</td><td bgcolor='#eeeeec'>Dispatcher->dispatch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>27</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0914</td><td bgcolor='#eeeeec' align='right'>9582880</td><td bgcolor='#eeeeec'>IndexController->run(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Dispatcher.php' bgcolor='#eeeeec'>...\Dispatcher.php<b>:</b>485</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1256</td><td bgcolor='#eeeeec' align='right'>13082872</td><td bgcolor='#eeeeec'>IndexController->initContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\controller\Controller.php' bgcolor='#eeeeec'>...\Controller.php<b>:</b>214</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>1.2431</td><td bgcolor='#eeeeec' align='right'>24417208</td><td bgcolor='#eeeeec'>HookCore::exec(  )</td><td title='C:\wamp64\www\workspace\www\site-export\controllers\front\IndexController.php' bgcolor='#eeeeec'>...\IndexController.php<b>:</b>41</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>HookCore::coreCallHook(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>576</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHomeTabContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>617</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>1.2770</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHome(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>195</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>1.2799</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>BlockBestSellers->display(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>192</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\module\Module.php' bgcolor='#eeeeec'>...\Module.php<b>:</b>2380</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083352</td><td bgcolor='#eeeeec'>content_5bc85dc25cfb07_87575261(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083944</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->getSubTemplate(  )</td><td title='C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e1\51\bd\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php' bgcolor='#eeeeec'>...\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php<b>:</b>28</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>325</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25113088</td><td bgcolor='#eeeeec'>content_5bc85dc24c96b9_95760979(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
</table></font>
											30,89 €
																					<!-- FIN ajouter le prix unitaire -->	
									</span>
									<meta itemprop="priceCurrency" content="EUR" />
																											
									
															</div>
																							</div>
										
				</div>
				<div class="right-block">
					<h5 itemprop="name">
												<a class="product-name" href="http://ciscar.export/index.php?id_product=424&amp;controller=product&amp;id_lang=1" title="POCHETTE ATELIER EN COURS GRISE - LOT DE 50" itemprop="url" >
							POCHETTE ATELIER EN COURS GRISE - LOT DE 50
						</a>
					</h5>
															<p class="product-desc" itemprop="description">
						Format : 320 x 230 mm
					</p>
										<div class="content_price">
													
							<span class="price product-price">
<!-- CISCAR 2, ajouter le prix unitaires si renseigne -->										
								<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: unit_price_ratio in C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e7\8f\64\e78f64a853ace571c06e31e711705e105118b63f.file.product-list.tpl.cache.php on line <i>239</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0002</td><td bgcolor='#eeeeec' align='right'>368792</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0856</td><td bgcolor='#eeeeec' align='right'>9090128</td><td bgcolor='#eeeeec'>Dispatcher->dispatch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>27</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0914</td><td bgcolor='#eeeeec' align='right'>9582880</td><td bgcolor='#eeeeec'>IndexController->run(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Dispatcher.php' bgcolor='#eeeeec'>...\Dispatcher.php<b>:</b>485</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1256</td><td bgcolor='#eeeeec' align='right'>13082872</td><td bgcolor='#eeeeec'>IndexController->initContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\controller\Controller.php' bgcolor='#eeeeec'>...\Controller.php<b>:</b>214</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>1.2431</td><td bgcolor='#eeeeec' align='right'>24417208</td><td bgcolor='#eeeeec'>HookCore::exec(  )</td><td title='C:\wamp64\www\workspace\www\site-export\controllers\front\IndexController.php' bgcolor='#eeeeec'>...\IndexController.php<b>:</b>41</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>HookCore::coreCallHook(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>576</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHomeTabContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>617</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>1.2770</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHome(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>195</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>1.2799</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>BlockBestSellers->display(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>192</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\module\Module.php' bgcolor='#eeeeec'>...\Module.php<b>:</b>2380</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083352</td><td bgcolor='#eeeeec'>content_5bc85dc25cfb07_87575261(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083944</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->getSubTemplate(  )</td><td title='C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e1\51\bd\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php' bgcolor='#eeeeec'>...\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php<b>:</b>28</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>325</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25113088</td><td bgcolor='#eeeeec'>content_5bc85dc24c96b9_95760979(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
</table></font>
									30,89 €
																	<!-- FIN ajouter le prix unitaire -->	
							</span>
														
							
							
											</div>
										<div class="button-container">
																													<a class="button ajax_add_to_cart_button btn btn-default" href="http://ciscar.export/index.php?controller=cart&amp;add=1&amp;id_product=424&amp;token=4a414179b8ec29c8c92d48a2634aa1f7" rel="nofollow" title="Ajouter au panier" data-id-product-attribute="0" data-id-product="424" data-minimal_quantity="1">
									<span>Ajouter au panier</span>
								</a>
																			<a class="button lnk_view btn btn-default" href="http://ciscar.export/index.php?id_product=424&amp;controller=product&amp;id_lang=1" title="Afficher">
							<span>D&eacute;tails</span>
						</a>
					</div>
										<div class="product-flags">
																														</div>
									</div>				
							</div><!-- .product-container> -->
		</li>
			
		
		
								<li class="ajax_block_product col-xs-12 col-sm-4 col-md-3 last-in-line last-item-of-mobile-line">
			<div class="product-container" itemscope itemtype="https://schema.org/Product">
				<div class="left-block">
					<div class="product-image-container">
						<a class="product_img_link" href="http://ciscar.export/index.php?id_product=481&amp;controller=product&amp;id_lang=1" title="PORTE ETIQUETTE ENTRETIEN - LOT DE 300" itemprop="url">
							<img class="replace-2x img-responsive" src="http://ciscar.export/img/p/9/1/4/914-home_default.jpg" alt="PORTE ETIQUETTE ENTRETIEN - LOT DE 300" title="PORTE ETIQUETTE ENTRETIEN - LOT DE 300"  width="250" height="250" itemprop="image" />
						</a>
																			<div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
																	<span itemprop="price" class="price product-price">
										
<!-- CISCAR 1, ajouter le prix unitaire si renseigne -->							
										<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: unit_price_ratio in C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e7\8f\64\e78f64a853ace571c06e31e711705e105118b63f.file.product-list.tpl.cache.php on line <i>130</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0002</td><td bgcolor='#eeeeec' align='right'>368792</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0856</td><td bgcolor='#eeeeec' align='right'>9090128</td><td bgcolor='#eeeeec'>Dispatcher->dispatch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>27</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0914</td><td bgcolor='#eeeeec' align='right'>9582880</td><td bgcolor='#eeeeec'>IndexController->run(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Dispatcher.php' bgcolor='#eeeeec'>...\Dispatcher.php<b>:</b>485</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1256</td><td bgcolor='#eeeeec' align='right'>13082872</td><td bgcolor='#eeeeec'>IndexController->initContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\controller\Controller.php' bgcolor='#eeeeec'>...\Controller.php<b>:</b>214</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>1.2431</td><td bgcolor='#eeeeec' align='right'>24417208</td><td bgcolor='#eeeeec'>HookCore::exec(  )</td><td title='C:\wamp64\www\workspace\www\site-export\controllers\front\IndexController.php' bgcolor='#eeeeec'>...\IndexController.php<b>:</b>41</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>HookCore::coreCallHook(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>576</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHomeTabContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>617</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>1.2770</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHome(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>195</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>1.2799</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>BlockBestSellers->display(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>192</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\module\Module.php' bgcolor='#eeeeec'>...\Module.php<b>:</b>2380</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083352</td><td bgcolor='#eeeeec'>content_5bc85dc25cfb07_87575261(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083944</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->getSubTemplate(  )</td><td title='C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e1\51\bd\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php' bgcolor='#eeeeec'>...\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php<b>:</b>28</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>325</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25113088</td><td bgcolor='#eeeeec'>content_5bc85dc24c96b9_95760979(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
</table></font>
											24,74 €
																					<!-- FIN ajouter le prix unitaire -->	
									</span>
									<meta itemprop="priceCurrency" content="EUR" />
																											
									
															</div>
																							</div>
										
				</div>
				<div class="right-block">
					<h5 itemprop="name">
												<a class="product-name" href="http://ciscar.export/index.php?id_product=481&amp;controller=product&amp;id_lang=1" title="PORTE ETIQUETTE ENTRETIEN - LOT DE 300" itemprop="url" >
							PORTE ETIQUETTE ENTRETIEN - LOT DE 300
						</a>
					</h5>
															<p class="product-desc" itemprop="description">
						Format : 93 x 298 mm.
					</p>
										<div class="content_price">
													
							<span class="price product-price">
<!-- CISCAR 2, ajouter le prix unitaires si renseigne -->										
								<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: unit_price_ratio in C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e7\8f\64\e78f64a853ace571c06e31e711705e105118b63f.file.product-list.tpl.cache.php on line <i>239</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0002</td><td bgcolor='#eeeeec' align='right'>368792</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0856</td><td bgcolor='#eeeeec' align='right'>9090128</td><td bgcolor='#eeeeec'>Dispatcher->dispatch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>27</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0914</td><td bgcolor='#eeeeec' align='right'>9582880</td><td bgcolor='#eeeeec'>IndexController->run(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Dispatcher.php' bgcolor='#eeeeec'>...\Dispatcher.php<b>:</b>485</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1256</td><td bgcolor='#eeeeec' align='right'>13082872</td><td bgcolor='#eeeeec'>IndexController->initContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\controller\Controller.php' bgcolor='#eeeeec'>...\Controller.php<b>:</b>214</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>1.2431</td><td bgcolor='#eeeeec' align='right'>24417208</td><td bgcolor='#eeeeec'>HookCore::exec(  )</td><td title='C:\wamp64\www\workspace\www\site-export\controllers\front\IndexController.php' bgcolor='#eeeeec'>...\IndexController.php<b>:</b>41</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>HookCore::coreCallHook(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>576</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHomeTabContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>617</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>1.2770</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHome(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>195</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>1.2799</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>BlockBestSellers->display(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>192</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\module\Module.php' bgcolor='#eeeeec'>...\Module.php<b>:</b>2380</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083352</td><td bgcolor='#eeeeec'>content_5bc85dc25cfb07_87575261(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083944</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->getSubTemplate(  )</td><td title='C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e1\51\bd\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php' bgcolor='#eeeeec'>...\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php<b>:</b>28</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>325</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25113088</td><td bgcolor='#eeeeec'>content_5bc85dc24c96b9_95760979(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
</table></font>
									24,74 €
																	<!-- FIN ajouter le prix unitaire -->	
							</span>
														
							
							
											</div>
										<div class="button-container">
																													<a class="button ajax_add_to_cart_button btn btn-default" href="http://ciscar.export/index.php?controller=cart&amp;add=1&amp;id_product=481&amp;token=4a414179b8ec29c8c92d48a2634aa1f7" rel="nofollow" title="Ajouter au panier" data-id-product-attribute="0" data-id-product="481" data-minimal_quantity="1">
									<span>Ajouter au panier</span>
								</a>
																			<a class="button lnk_view btn btn-default" href="http://ciscar.export/index.php?id_product=481&amp;controller=product&amp;id_lang=1" title="Afficher">
							<span>D&eacute;tails</span>
						</a>
					</div>
										<div class="product-flags">
																														</div>
									</div>				
							</div><!-- .product-container> -->
		</li>
			
		
		
								<li class="ajax_block_product col-xs-12 col-sm-4 col-md-3 first-in-line last-line last-item-of-tablet-line first-item-of-mobile-line last-mobile-line">
			<div class="product-container" itemscope itemtype="https://schema.org/Product">
				<div class="left-block">
					<div class="product-image-container">
						<a class="product_img_link" href="http://ciscar.export/index.php?id_product=182&amp;controller=product&amp;id_lang=1" title="Double porte-carte de démarrage" itemprop="url">
							<img class="replace-2x img-responsive" src="http://ciscar.export/img/p/5/6/0/560-home_default.jpg" alt="Double porte-carte de démarrage" title="Double porte-carte de démarrage"  width="250" height="250" itemprop="image" />
						</a>
																			<div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
																	<span itemprop="price" class="price product-price">
										
<!-- CISCAR 1, ajouter le prix unitaire si renseigne -->							
										<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: unit_price_ratio in C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e7\8f\64\e78f64a853ace571c06e31e711705e105118b63f.file.product-list.tpl.cache.php on line <i>130</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0002</td><td bgcolor='#eeeeec' align='right'>368792</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0856</td><td bgcolor='#eeeeec' align='right'>9090128</td><td bgcolor='#eeeeec'>Dispatcher->dispatch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>27</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0914</td><td bgcolor='#eeeeec' align='right'>9582880</td><td bgcolor='#eeeeec'>IndexController->run(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Dispatcher.php' bgcolor='#eeeeec'>...\Dispatcher.php<b>:</b>485</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1256</td><td bgcolor='#eeeeec' align='right'>13082872</td><td bgcolor='#eeeeec'>IndexController->initContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\controller\Controller.php' bgcolor='#eeeeec'>...\Controller.php<b>:</b>214</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>1.2431</td><td bgcolor='#eeeeec' align='right'>24417208</td><td bgcolor='#eeeeec'>HookCore::exec(  )</td><td title='C:\wamp64\www\workspace\www\site-export\controllers\front\IndexController.php' bgcolor='#eeeeec'>...\IndexController.php<b>:</b>41</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>HookCore::coreCallHook(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>576</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHomeTabContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>617</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>1.2770</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHome(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>195</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>1.2799</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>BlockBestSellers->display(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>192</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\module\Module.php' bgcolor='#eeeeec'>...\Module.php<b>:</b>2380</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083352</td><td bgcolor='#eeeeec'>content_5bc85dc25cfb07_87575261(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083944</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->getSubTemplate(  )</td><td title='C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e1\51\bd\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php' bgcolor='#eeeeec'>...\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php<b>:</b>28</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>325</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25113088</td><td bgcolor='#eeeeec'>content_5bc85dc24c96b9_95760979(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
</table></font>
											99,00 €
																					<!-- FIN ajouter le prix unitaire -->	
									</span>
									<meta itemprop="priceCurrency" content="EUR" />
																											
									
															</div>
																							</div>
										
				</div>
				<div class="right-block">
					<h5 itemprop="name">
												<a class="product-name" href="http://ciscar.export/index.php?id_product=182&amp;controller=product&amp;id_lang=1" title="Double porte-carte de démarrage" itemprop="url" >
							Double porte-carte de démarrage
						</a>
					</h5>
															<p class="product-desc" itemprop="description">
						Modèle déposé - EXCLUSIVITE CISCAR
Dimension : 83 x 110 mm.
					</p>
										<div class="content_price">
													
							<span class="price product-price">
<!-- CISCAR 2, ajouter le prix unitaires si renseigne -->										
								<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: unit_price_ratio in C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e7\8f\64\e78f64a853ace571c06e31e711705e105118b63f.file.product-list.tpl.cache.php on line <i>239</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0002</td><td bgcolor='#eeeeec' align='right'>368792</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0856</td><td bgcolor='#eeeeec' align='right'>9090128</td><td bgcolor='#eeeeec'>Dispatcher->dispatch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>27</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0914</td><td bgcolor='#eeeeec' align='right'>9582880</td><td bgcolor='#eeeeec'>IndexController->run(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Dispatcher.php' bgcolor='#eeeeec'>...\Dispatcher.php<b>:</b>485</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1256</td><td bgcolor='#eeeeec' align='right'>13082872</td><td bgcolor='#eeeeec'>IndexController->initContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\controller\Controller.php' bgcolor='#eeeeec'>...\Controller.php<b>:</b>214</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>1.2431</td><td bgcolor='#eeeeec' align='right'>24417208</td><td bgcolor='#eeeeec'>HookCore::exec(  )</td><td title='C:\wamp64\www\workspace\www\site-export\controllers\front\IndexController.php' bgcolor='#eeeeec'>...\IndexController.php<b>:</b>41</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>HookCore::coreCallHook(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>576</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHomeTabContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>617</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>1.2770</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHome(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>195</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>1.2799</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>BlockBestSellers->display(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>192</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\module\Module.php' bgcolor='#eeeeec'>...\Module.php<b>:</b>2380</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083352</td><td bgcolor='#eeeeec'>content_5bc85dc25cfb07_87575261(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083944</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->getSubTemplate(  )</td><td title='C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e1\51\bd\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php' bgcolor='#eeeeec'>...\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php<b>:</b>28</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>325</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25113088</td><td bgcolor='#eeeeec'>content_5bc85dc24c96b9_95760979(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
</table></font>
									99,00 €
																	<!-- FIN ajouter le prix unitaire -->	
							</span>
														
							
							
											</div>
										<div class="button-container">
																													<a class="button ajax_add_to_cart_button btn btn-default" href="http://ciscar.export/index.php?controller=cart&amp;add=1&amp;id_product=182&amp;ipa=640&amp;token=4a414179b8ec29c8c92d48a2634aa1f7" rel="nofollow" title="Ajouter au panier" data-id-product-attribute="640" data-id-product="182" data-minimal_quantity="1">
									<span>Ajouter au panier</span>
								</a>
																			<a class="button lnk_view btn btn-default" href="http://ciscar.export/index.php?id_product=182&amp;controller=product&amp;id_lang=1" title="Afficher">
							<span>D&eacute;tails</span>
						</a>
					</div>
										<div class="product-flags">
																														</div>
									</div>				
							</div><!-- .product-container> -->
		</li>
			
		
		
								<li class="ajax_block_product col-xs-12 col-sm-4 col-md-3 last-line first-item-of-tablet-line last-item-of-mobile-line last-mobile-line">
			<div class="product-container" itemscope itemtype="https://schema.org/Product">
				<div class="left-block">
					<div class="product-image-container">
						<a class="product_img_link" href="http://ciscar.export/index.php?id_product=520&amp;controller=product&amp;id_lang=1" title="CINTRE ATTENTION DETAILS JAUNE - LOT DE 900" itemprop="url">
							<img class="replace-2x img-responsive" src="http://ciscar.export/img/p/9/5/3/953-home_default.jpg" alt="CINTRE ATTENTION DETAILS JAUNE - LOT DE 900" title="CINTRE ATTENTION DETAILS JAUNE - LOT DE 900"  width="250" height="250" itemprop="image" />
						</a>
																			<div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
																	<span itemprop="price" class="price product-price">
										
<!-- CISCAR 1, ajouter le prix unitaire si renseigne -->							
										<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: unit_price_ratio in C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e7\8f\64\e78f64a853ace571c06e31e711705e105118b63f.file.product-list.tpl.cache.php on line <i>130</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0002</td><td bgcolor='#eeeeec' align='right'>368792</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0856</td><td bgcolor='#eeeeec' align='right'>9090128</td><td bgcolor='#eeeeec'>Dispatcher->dispatch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>27</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0914</td><td bgcolor='#eeeeec' align='right'>9582880</td><td bgcolor='#eeeeec'>IndexController->run(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Dispatcher.php' bgcolor='#eeeeec'>...\Dispatcher.php<b>:</b>485</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1256</td><td bgcolor='#eeeeec' align='right'>13082872</td><td bgcolor='#eeeeec'>IndexController->initContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\controller\Controller.php' bgcolor='#eeeeec'>...\Controller.php<b>:</b>214</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>1.2431</td><td bgcolor='#eeeeec' align='right'>24417208</td><td bgcolor='#eeeeec'>HookCore::exec(  )</td><td title='C:\wamp64\www\workspace\www\site-export\controllers\front\IndexController.php' bgcolor='#eeeeec'>...\IndexController.php<b>:</b>41</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>HookCore::coreCallHook(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>576</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHomeTabContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>617</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>1.2770</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHome(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>195</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>1.2799</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>BlockBestSellers->display(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>192</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\module\Module.php' bgcolor='#eeeeec'>...\Module.php<b>:</b>2380</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083352</td><td bgcolor='#eeeeec'>content_5bc85dc25cfb07_87575261(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083944</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->getSubTemplate(  )</td><td title='C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e1\51\bd\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php' bgcolor='#eeeeec'>...\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php<b>:</b>28</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>325</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25113088</td><td bgcolor='#eeeeec'>content_5bc85dc24c96b9_95760979(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
</table></font>
											57,66 €
																					<!-- FIN ajouter le prix unitaire -->	
									</span>
									<meta itemprop="priceCurrency" content="EUR" />
																											
									
															</div>
																							</div>
										
				</div>
				<div class="right-block">
					<h5 itemprop="name">
												<a class="product-name" href="http://ciscar.export/index.php?id_product=520&amp;controller=product&amp;id_lang=1" title="CINTRE ATTENTION DETAILS JAUNE - LOT DE 900" itemprop="url" >
							CINTRE ATTENTION DETAILS JAUNE - LOT DE 900
						</a>
					</h5>
															<p class="product-desc" itemprop="description">
						Format : 140 mm x 202 mm.
					</p>
										<div class="content_price">
													
							<span class="price product-price">
<!-- CISCAR 2, ajouter le prix unitaires si renseigne -->										
								<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: unit_price_ratio in C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e7\8f\64\e78f64a853ace571c06e31e711705e105118b63f.file.product-list.tpl.cache.php on line <i>239</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0002</td><td bgcolor='#eeeeec' align='right'>368792</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0856</td><td bgcolor='#eeeeec' align='right'>9090128</td><td bgcolor='#eeeeec'>Dispatcher->dispatch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>27</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0914</td><td bgcolor='#eeeeec' align='right'>9582880</td><td bgcolor='#eeeeec'>IndexController->run(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Dispatcher.php' bgcolor='#eeeeec'>...\Dispatcher.php<b>:</b>485</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.1256</td><td bgcolor='#eeeeec' align='right'>13082872</td><td bgcolor='#eeeeec'>IndexController->initContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\controller\Controller.php' bgcolor='#eeeeec'>...\Controller.php<b>:</b>214</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>1.2431</td><td bgcolor='#eeeeec' align='right'>24417208</td><td bgcolor='#eeeeec'>HookCore::exec(  )</td><td title='C:\wamp64\www\workspace\www\site-export\controllers\front\IndexController.php' bgcolor='#eeeeec'>...\IndexController.php<b>:</b>41</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>HookCore::coreCallHook(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>576</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>1.2769</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHomeTabContent(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\Hook.php' bgcolor='#eeeeec'>...\Hook.php<b>:</b>617</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>1.2770</td><td bgcolor='#eeeeec' align='right'>25050120</td><td bgcolor='#eeeeec'>BlockBestSellers->hookDisplayHome(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>195</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>1.2799</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>BlockBestSellers->display(  )</td><td title='C:\wamp64\www\workspace\www\site-export\modules\blockbestsellers\blockbestsellers.php' bgcolor='#eeeeec'>...\blockbestsellers.php<b>:</b>192</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\module\Module.php' bgcolor='#eeeeec'>...\Module.php<b>:</b>2380</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>1.2800</td><td bgcolor='#eeeeec' align='right'>25043552</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083352</td><td bgcolor='#eeeeec'>content_5bc85dc25cfb07_87575261(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>1.2808</td><td bgcolor='#eeeeec' align='right'>25083944</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->getSubTemplate(  )</td><td title='C:\wamp64\www\workspace\www\site-export\cache\smarty\compile\e1\51\bd\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php' bgcolor='#eeeeec'>...\e151bd14fd0eb97b06794faf614b9d149929e4b3.file.blockbestsellers-home.tpl.cache.php<b>:</b>28</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>325</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25094360</td><td bgcolor='#eeeeec'>Smarty_Custom_Template->fetch(  )</td><td title='C:\wamp64\www\workspace\www\site-export\classes\SmartyCustom.php' bgcolor='#eeeeec'>...\SmartyCustom.php<b>:</b>317</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>16</td><td bgcolor='#eeeeec' align='center'>1.2809</td><td bgcolor='#eeeeec' align='right'>25113088</td><td bgcolor='#eeeeec'>content_5bc85dc24c96b9_95760979(  )</td><td title='C:\wamp64\www\workspace\www\site-export\tools\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>193</td></tr>
</table></font>
									57,66 €
																	<!-- FIN ajouter le prix unitaire -->	
							</span>
														
							
							
											</div>
										<div class="button-container">
																													<a class="button ajax_add_to_cart_button btn btn-default" href="http://ciscar.export/index.php?controller=cart&amp;add=1&amp;id_product=520&amp;token=4a414179b8ec29c8c92d48a2634aa1f7" rel="nofollow" title="Ajouter au panier" data-id-product-attribute="0" data-id-product="520" data-minimal_quantity="1">
									<span>Ajouter au panier</span>
								</a>
																			<a class="button lnk_view btn btn-default" href="http://ciscar.export/index.php?id_product=520&amp;controller=product&amp;id_lang=1" title="Afficher">
							<span>D&eacute;tails</span>
						</a>
					</div>
										<div class="product-flags">
																														</div>
									</div>				
							</div><!-- .product-container> -->
		</li>
		</ul>





<?php }} ?>
