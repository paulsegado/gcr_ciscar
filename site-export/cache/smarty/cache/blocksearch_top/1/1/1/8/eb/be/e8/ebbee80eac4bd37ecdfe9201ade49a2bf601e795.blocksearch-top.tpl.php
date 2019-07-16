<?php /*%%SmartyHeaderCode:276635bc46b4cef8d29-61162505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebbee80eac4bd37ecdfe9201ade49a2bf601e795' => 
    array (
      0 => 'C:\\wamp64\\www\\workspace\\www\\site-export\\themes\\default-bootstrap\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1518711524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '276635bc46b4cef8d29-61162505',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bc85dc0a63a91_07362800',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc85dc0a63a91_07362800')) {function content_5bc85dc0a63a91_07362800($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//ciscar.export/index.php?controller=search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Rechercher" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Rechercher</span>
		</button>
	</form>
</div>
<!-- CISCAR ajout d'un lien de connexion si on est en mode visiteur -->	
<!-- et retour sur le site appelant determiné dans coookie -->
<!-- <a href="http://ciscar.be/fr/index.php?action=q"> -->							
			<div style="margin-bottom:-15px;">
					<a href="http://ciscar.export/index.php?controller=my-account">
				<img src="http://ciscar.export/img/navigation_mode_visiteur_1.png">
		</a>
		</div>
	
<!-- /Block search module TOP --><?php }} ?>
