<?php
/**
 * @author Florent DESPIERRES
 * @package site-administration
 * @subpackage etablissement
 * @version 1.0.4
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

if (isset ( $_GET ['Recherche'] )) {
	$_SESSION ['SITE'] ['TAB'] = '2';
}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15" />
	<?php
	echo HelperHead::includeCSS ( '../../include/css/Commun.css' );
	echo HelperHead::includeCSS ( '../../include/css/CommunLayout.css' );

	echo HelperHead::includeJS ( '../../include/js/script.js' );
	echo HelperHead::includeJS ( '../../include/js/jquery/jquery-1.4.2.js' );
	echo HelperHead::includeCSS ( '../../include/js/jquery_pagination/pagination.css' );
	echo HelperHead::includeJS ( '../../include/js/jquery_pagination/jquery.pagination.js' );
	?>
    <script type="text/javascript">
        	function pageselectCallback(page_index, jq){
                $.get("index.php",{page:numpage})
				return false;
            }

        	function confirmDelete(doc_id)
    	    {
    	    	if(confirm("Confirmation de suppression"))
    	    	{
    	    		document.location.href='?action=delete&id='+doc_id;	
    	    	}
    	    }

        	function confirmMSGDelete(url, msg)
        	{
        		if(confirm(msg))
    	    	{
    	    		document.location.href=url;	
    	    	}
            }
        	
        	function confirmURLDelete(url)
    	    {
    	    	if(confirm("Confirmation de suppression (ensemble des annuaires)"))
    	    	{
    	    		document.location.href=url;	
    	    	}
    	    }
        </script>
<!-- Plugin JQUERY Tools Tab -->
<script type="text/javascript"
	src="/admin/include/js/jquery/Tools_Tabs/tools.tabs-1.0.4.js"></script>
<link href="/admin/include/js/jquery/Tools_Tabs/css/tabs.css"
	rel="stylesheet" type="text/css" />
<style>
a:active {
	outline: none;
}

:focus {
	-moz-outline-style: none;
}

/* tab pane styling */
div.panes div {
	padding: 15px 10px;
	border: 1px solid #999;
	border-top: 0;
	font-size: 14px;
	background-color: #fff;
}
</style>
<title><?php echo $_SESSION['SITE']['NAME'];?> : Admin</title>
</head>
<body>

<?php
include_once '../../searchBar_inc.php';

if ($_SESSION ['ADMIN'] ['USER'] ['CONNECTED']) {
	// Connexion BDD
	include ('../../../config/configuration.php');
	require ('../../include/DbConnexion.php');

	// Traitement des actions
	if (isset ( $_GET ['action'] )) {
		$aEtablissementControler = new EtablissementControler ();
		$aEtablissementControler->run ();
	}

	// Afficher la Liste des User
	if (! isset ( $_GET ['action'] )) {
		// Avec Recherche
		if (isset ( $_POST ['Recherche'] ) && $_POST ['Recherche'] != NULL) {
			$NbEntre = 0;
			$aModeleList = new Simple_EtablissementList ();
			$aModeleList->SQL_SEARCH ( isset ( $_GET ['page'] ) ? $_GET ['page'] + 1 : 1, 50, $_POST ['Recherche'], isset ( $_GET ['tri'] ) ? $_GET ['tri'] : '0', isset ( $_GET ['ordre'] ) ? $_GET ['ordre'] : 'd' );
			// Element Max
			$NbEntre = $aModeleList->SQL_SEARCH_COUNT ( $_POST ['Recherche'] );
		} elseif (isset ( $_GET ['Recherche'] ) && $_GET ['Recherche'] != NULL) {
			$NbEntre = 0;
			$aModeleList = new Simple_EtablissementList ();
			$aModeleList->SQL_SEARCH ( isset ( $_GET ['page'] ) ? $_GET ['page'] + 1 : 1, 50, $_GET ['Recherche'], isset ( $_GET ['tri'] ) ? $_GET ['tri'] : '0', isset ( $_GET ['ordre'] ) ? $_GET ['ordre'] : 'd' );
			// Element Max
			$NbEntre = $aModeleList->SQL_SEARCH_COUNT ( $_GET ['Recherche'] );
		} // Sans Recherche
		else {
			$NbEntre = 0;
			$aModeleList = new Simple_EtablissementList ();
			$aModeleList->SQL_SELECT_PAGE ( isset ( $_GET ['page'] ) ? $_GET ['page'] + 1 : 1, 50, isset ( $_GET ['tri'] ) ? $_GET ['tri'] : '0', isset ( $_GET ['ordre'] ) ? $_GET ['ordre'] : 'd' );
			// Element Max
			$NbEntre = $aModeleList->SQL_COUNT ();
		}

		$aViewList = new Simple_EtablissementListView ( $aModeleList, $NbEntre );
		$aViewList->renderHTML ();
	}

	unset ( $aModeleList );
	unset ( $aViewList );
	// Deconnexion BDD
	require ('../../include/DbDeconnexion.php');
} else {
	// Formulaire de connexion
	echo CommunFunction::goToURL ( '../../index.php' );
}
?>
</div>

	<div class="footerContainer">
		<a href="http://www.abakus.fr"> <img
			src="../../include/images/Logo_AbaKus.png" width="100" border="0" /></a><br>
		AbaKus &copy; 2009 - 2012
	</div>
</body>
</html>