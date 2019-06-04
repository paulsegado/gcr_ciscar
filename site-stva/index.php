<?php
session_cache_limiter ( 'private, must-revalidate' );

session_start ();

include ('config/configuration.php');
include ('../config/configuration.php');

$BaseURL = './';
include ('include/mvc_inc.php');


include ('include/DbConnexion.php');

if (isset ($_GET ['action']) && $_GET ['action'] == 'maj')
{
	$aStvaController = new stvaControler();
	$aStvaController->run();
}
$aSignataire = new stvaSignataire ();

if (isset ( $_GET ['login']) || isset ( $_GET ['loginCiscar']) || isset ( $_POST ['stvaLogin'])) {
	if (isset ( $_GET ['login'])) 
	{
		$login = $_GET ['login'];
		$annuaire = $_GET ['annuaire'];
	}
	if (isset ( $_GET ['loginCiscar']))
	{
		$login = $_GET ['loginCiscar'];
		$annuaire = 1;
	}
	if (isset ( $_POST ['stvaLogin']))
	{
		$login = $_POST ['stvaLogin'];
		$annuaire = $_GET ['annuaire'];
	}
	
	$aSignataire->SQL_SELECT_ANNUAIRE_STVA ( $login);

	if ($aSignataire->getIndividuID () != Null)
	{
		if ($_SERVER ['HTTP_HOST'] == 'gcrfrance.local' || $_SERVER ['HTTP_HOST'] == 'ciscar.local' )
		{
			// Base local
			$aSignataire->SQL_SELECT_ACCES_STVA ( $login,$annuaire,'433,497' );
		}
		else
		{
			// Base de production
			$aSignataire->SQL_SELECT_ACCES_STVA ( $login,$annuaire,'497' );
		}		
	}
}

if (!isset ($_GET ['interne']))
	$_SESSION ['SITE'] ['DEMANDEUR'] = $aSignataire->getNom().' '.$aSignataire->getPrenom();

if (isset ($_GET ['acces']))
{
	$aRedirection = new DemandeAccesView ();
	$aRedirection->renderHTML ( $aSignataire);
}
else 
{
	$aRedirection = new ResponsiveRedirectionView ();
	$aRedirection->renderHTML ( $aSignataire );
}

include ('include/DbDeconnexion.php');

?>