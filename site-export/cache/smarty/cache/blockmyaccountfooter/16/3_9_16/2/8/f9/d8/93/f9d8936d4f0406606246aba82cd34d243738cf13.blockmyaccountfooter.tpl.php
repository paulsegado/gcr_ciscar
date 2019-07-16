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
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5d245e4f46cee8_27029052',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d245e4f46cee8_27029052')) {function content_5d245e4f46cee8_27029052($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-4">
	<h4><a href="http://ciscar.export/index.php?controller=my-account" title="Beheer mijn klantenrekening" rel="nofollow">Mijn account</a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
<!-- CISCAR, on masque certains lien du bloc -->		
			<li><a href="http://ciscar.export/index.php?controller=history" title="Mijn bestellingen" rel="nofollow">Mijn bestellingen</a></li>
						<li style="display:none;"><a href="http://ciscar.export/index.php?controller=order-slip" title="Mijn creditnota's" rel="nofollow">Mijn creditnota's</a></li>
			<li style="display:none;"><a href="http://ciscar.export/index.php?controller=addresses" title="Mijn adressen" rel="nofollow">Mijn adressen</a></li>
			<li style="display:none;"><a href="http://ciscar.export/index.php?controller=identity" title="Beheer mijn persoonlijke informatie" rel="nofollow">Mijn gegevens</a></li>
			<li style="display:none;"><a href="http://ciscar.export/index.php?controller=discount" title="Mijn waardebonnen" rel="nofollow">Mijn waardebonnen</a></li>			
            <li><a href="http://ciscar.export/index.php?mylogout" title="Afmelden" rel="nofollow">Afmelden</a></li>		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>
