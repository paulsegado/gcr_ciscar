<?php /*%%SmartyHeaderCode:167405c59aa5b9bcb22-11290819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9d8936d4f0406606246aba82cd34d243738cf13' => 
    array (
      0 => 'C:\\wamp64\\www\\workspace\\www\\site-export\\themes\\default-bootstrap\\modules\\blockmyaccountfooter\\blockmyaccountfooter.tpl',
      1 => 1505308130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167405c59aa5b9bcb22-11290819',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c59aa5baa8c74_08413749',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c59aa5baa8c74_08413749')) {function content_5c59aa5baa8c74_08413749($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-4">
	<h4><a href="http://ciscar.export/index.php?controller=my-account" title="Gérer mon compte client" rel="nofollow">Mon compte</a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
<!-- CISCAR, on masque certains lien du bloc -->		
			<li><a href="http://ciscar.export/index.php?controller=history" title="Mes commandes" rel="nofollow">Mes commandes</a></li>
						<li style="display:none;"><a href="http://ciscar.export/index.php?controller=order-slip" title="Mes avoirs" rel="nofollow">Mes avoirs</a></li>
			<li style="display:none;"><a href="http://ciscar.export/index.php?controller=addresses" title="Mes adresses" rel="nofollow">Mes adresses</a></li>
			<li style="display:none;"><a href="http://ciscar.export/index.php?controller=identity" title="Gérer mes informations personnelles" rel="nofollow">Mes informations personnelles</a></li>
			<li style="display:none;"><a href="http://ciscar.export/index.php?controller=discount" title="Mes bons de réduction" rel="nofollow">Mes bons de réduction</a></li>			
            <li><a href="http://ciscar.export/index.php?mylogout" title="Déconnexion" rel="nofollow">Déconnexion</a></li>		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
