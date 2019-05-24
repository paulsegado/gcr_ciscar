<?php
/**
 * @author Florent DESPIERRES
 * @package site-administration
 * @subpackage Liste Diffusion
 * @version 2.0.1
 */
session_start ();

if (! isset ( $_SESSION ['ADMIN'] )) {
	$_SESSION ['ADMIN'] ['USER'] ['FULLNAME'] = 'Visitor';
	$_SESSION ['ADMIN'] ['USER'] ['SiteName'] = '';
	$_SESSION ['ADMIN'] ['USER'] ['CONNECTED'] = false;
	$_SESSION ['ADMIN'] ['USER'] ['AnnuaireID'] = 0;
}

$baseURLModule = '../../modules/';
require ('../mvc_inc.php');

echo HelperHead::includeCSS ( '../../include/css/Commun.css' );
echo HelperHead::includeCSS ( '../../include/css/CommunLayout.css' );
echo HelperHead::includeJS ( '../../include/js/CommunScript.js' );
echo HelperHead::includeCSS ( '../../include/css/Individu.css' );
echo HelperHead::includeJS ( '../../include/js/Individu.js' );
echo HelperHead::includeJS ( '../../include/js/jquery/jquery-1.4.2.js' );
echo HelperHead::includeCSS ( '../../include/js/jquery_pagination/pagination.css' );
echo HelperHead::includeJS ( '../../include/js/jquery_pagination/jquery.pagination.js' );
echo HelperHead::includeJS ( '../../include/js/listeDiffusion.js' );
echo HelperHead::includeJS ( '../../include/js/jquery/datepicker/jquery-ui.min.js' );
echo HelperHead::includeCSS ( '../../include/js/jquery/datepicker/jquery-ui.css' );
?>

<script type="text/javascript">
		function pageselectCallback(page_index, jq){
			$.get("index.php",{page:numpage})
			return false;
		}
	</script>
<div class="page">
<?php
if ($_SESSION ['ADMIN'] ['USER'] ['CONNECTED']) {
	// Connexion BDD
	include ('../../../config/configuration.php');
	require ('../../include/DbConnexion.php');

	// Afficher la Liste des User
	if (! isset ( $_GET ['action'] )) {
		// Avec Recherche
		if (isset ( $_POST ['Recherche'] ) && $_POST ['Recherche'] != NULL) {
			$NbEntre = 0;
			$aModeleList = new Simple_IndividuList ();
			$aModeleList->SQL_SEARCH ( isset ( $_GET ['page'] ) ? $_GET ['page'] + 1 : 1, 50, $_POST ['Recherche'], isset ( $_GET ['tri'] ) ? $_GET ['tri'] : '2', isset ( $_GET ['ordre'] ) ? $_GET ['ordre'] : 'd' );
			// Element Max
			$NbEntre = $aModeleList->SQL_SEARCH_COUNT ( $_POST ['Recherche'] );
		} elseif (isset ( $_GET ['Recherche'] ) && $_GET ['Recherche'] != NULL) {
			$NbEntre = 0;
			$aModeleList = new Simple_IndividuList ();
			$aModeleList->SQL_SEARCH ( isset ( $_GET ['page'] ) ? $_GET ['page'] + 1 : 1, 50, $_GET ['Recherche'], isset ( $_GET ['tri'] ) ? $_GET ['tri'] : '2', isset ( $_GET ['ordre'] ) ? $_GET ['ordre'] : 'd' );
			// Element Max
			$NbEntre = $aModeleList->SQL_SEARCH_COUNT ( $_GET ['Recherche'] );
		} // Sans Recherche
		else {
			$NbEntre = 0;
			$aModeleList = new Simple_IndividuList ();
			$aModeleList->SQL_SELECT_PAGE ( isset ( $_GET ['page'] ) ? $_GET ['page'] + 1 : 1, 50, isset ( $_GET ['tri'] ) ? $_GET ['tri'] : '2', isset ( $_GET ['ordre'] ) ? $_GET ['ordre'] : 'a' );
			// Element Max
			$NbEntre = $aModeleList->SQL_COUNT ();
		}

		$aViewList = new ListeDiffusion_IndividuView ( $aModeleList, $NbEntre );
		$aViewList->renderHTML ();

		unset ( $aModeleList );
		unset ( $aViewList );
	}

	// Deconnexion BDD
	require ('../../include/DbDeconnexion.php');
} else {
	// Formulaire de connexion
	$aff = '<script type="text/javascript">';
	$aff .= 'document.location.href="../../index.php";';
	$aff .= '</script>';
	echo $aff;
}
?>
</div>
