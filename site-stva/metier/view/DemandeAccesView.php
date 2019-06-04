<?php
/**
 * @author Philippe GERMAIN
 * @package site-stva
 * @subpackage 
 * @version 1.0.4
 */
class DemandeAccesView {
	
	public function cmpIndiv($a,$b)
	{
		return strcmp($a->getNom(), $b->getNom());
	}
	public function cmpCli($a,$b)
	{
		return strcmp($a->getRaisonSociale(), $b->getRaisonSociale());
	}
	public function renderHTML(stvaSignataire $aSignataire) {
		header ("content-type: text/html; charset=UTF-8");
		
		$aff = '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">';
		$aff .= '<html>';
		$aff .= '<head>';
		//$aff .= '<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15">';
		$aff .= '<meta name="viewport" content="width=device-width,initial-scale=1">';
		$aff .= '<title>Acc&egrave;s STVA</title>';
		$aff .= '<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">';
		$aff .= '<link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">';
		$aff .= '<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">';
		
		$aff .= '<script type="text/javascript" src="js/jquery-3.0.0.js"></script>';

		$aff .= '<!-- chargement de fancybox -->';
		$aff .= '<script type="text/javascript" src="../../include/js/fancybox/jquery.fancybox.js"></script>';
		$aff .= '<link rel="stylesheet" type="text/css" href="../../include/js/fancybox/jquery.fancybox.css" media="screen" />';
				
		$aff .= '<link rel="stylesheet" href="include/css/bootstrap/bootstrap.css">';
		$aff .= '<script src="js/bootstrap/bootstrap.min.js"></script>';
		$aff .= '<link rel="stylesheet" href="include/css/form.css">';
		
		$aff .= '<style>';
		$aff .= '* {margin:0px; padding:0px;}';
		$aff .= 'body{background:#e1e1e1;font-family:arial;}';
		$aff .= '#wrapper{margin:0px auto;background:#FFFFFF ;text-align:center;border:0px solid #000000;padding-top:1px;margin-top:2px;margin-bottom:20px;box-shadow: 0px 1px 30px 3px rgba(0, 0, 0, 0.7); border-radius:2px;}';
		
		$aff .= '#wrapper #header{margin:15px auto;background:transparent ;text-align:center;border:0px solid #000000;}';
		$aff .= '#wrapper #menu{text-align:center;padding-top:0px;padding-bottom:0px;height:auto;border:0px solid #000000;}';
		$aff .= '#wrapper #fondmenu{display:inline-table;background-color:rgba(255,255,2255,0.7);text-align:center;border-radius:5px;}';
		$aff .= '#wrapper #menugauche{display:table-cell;float:left;padding-top:0px;padding-bottom:0px;padding-left:20px;border-width:0 0px 0 0 ;border-color:white;border-style:solid;text-align:left;font-size:16pt;font-family: \'Fjalla One\', verdana, helvetica;color:#908d8d;}';
		$aff .= '#wrapper #menucentre{display:table-cell;float:left;padding-top:210px;margin-top:0px;margin-bottom:20px;border-width:0 0 0 1px;border-color:white;border-style:solid;}';
		$aff .= '#wrapper #menudroite{display:table-cell;float:left;padding-top:0px;padding-bottom:0px;padding-left:20px;text-align:left;font-size:12pt;font-family: \'helvetica\';color:#000;}';
		$aff .= '#wrapper #footer{padding-top:0px;padding-bottom:0px;background:transparent;text-align:center;border:0px solid #000000;font-size:10pt;color:blue;font-weight:bold;}';				

		
		$aff .= '
	


@media screen and (max-width: 767px) {
.finpage {
    height: 10px;
    background-color:white;
    min-height:10px;
	}
}

@media screen and (min-width: 768px) {
.finpage {
    height: 110px;
    background-color:white;
    min-height:10px;
	}
}

@media screen and (max-width: 1024px) {
.wrappersize {
    width:100%;
	}
}

@media screen and (min-width: 1025px) and (max-width: 1460px) {
.wrappersize {
    width:70%;
	}
}

@media screen and (min-width: 1461px) {
.wrappersize {
    width:52%;
	}
}	

#button-Validate {
	background-color: #eb9316;
	border: 2px solid #ffffff;
	border-radius: 5px;
	font-family:Fjalla One,helvetica;
	font-size:18pt;
	color: #ffffff;
	cursor: pointer;
	height: 45px;
	right: 15px;
	transition: border-color 0.3s ease 0s;
	margin-top:10px;
	margin-bottom:5px;
	width: 100%;
}
				
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#menu {
  display: none;
}

.fancybox-is-open .fancybox-bg {
    opacity: 0.3;
    background: #000;
}
.fancybox-close-small {
	display:block; 
}
.fancybox-slide > div {
	padding:0px;
	margin:0px;
	width:40%;
}
				
				
	</style>';
		//if ($aSignataire->getAcces_Stva ())
		//{
			$astvaAcces = new stvaAccesSignataire();
			$astvaAcces->demandeAcces( $_GET ['login']);
			if (count($astvaAcces->getListeIndiv() > 0 ))
			{
					$listeIndiv = $astvaAcces->getListeIndiv();
					usort($listeIndiv, array($this, "cmpIndiv"));
			}
			if (count($astvaAcces->getListeCli() > 0 ))
			{
					$listeCli = $astvaAcces->getListeCli();
					usort($listeCli, array($this, "cmpCli"));
			}
			
		//}
		$aff .= '<!--[if IE 7]>';
		$aff .= '<style>';
		$aff .= '#wrapper #menu{margin-left:-10px;}';
		$aff .= '#wrapper #footer{margin-left:-10px;}';
		$aff .= '</style>';
		$aff .= '<![endif]-->';
		
		$aff .= '</head>';
		$aff .= '<body style="background:#e1e1e1">';

		$aff .= '<form method="POST" id="form-individus" class="form-individus" action="?action=maj&interne=true&login='.$_GET ['login'].'">';
		$aff .= '<input type="hidden" id="login" name="login" value="' . $_GET ['login']. '">';
		$aff .= '<input type="hidden" id="annuaire" name="annuaire" value="' . $_GET['annuaire']. '">';
		
		$aff .= '<div id="loader"></div>';
		
		
		$aff .= '<div class="row">';
		$aff .= '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">';
		$aff .= '<div class="wrappersize" id="wrapper">';
		if(isset($_GET['annuaire']) && $_GET['annuaire'] == 2)
			$aff .= '<div id="header"><img style="width:20%;height:auto;" src="include/images/logo-gcr-2018.jpg"/></div>';
		else 
			$aff .= '<div id="header"><img style="width:30%;height:auto;" src="include/images/logo-ciscar.png"/></div>';
		
		$aff .= '<div id="menu">';

		$aff .= '<div class="row">';
		$aff .= '<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>';
		$aff .= '<div id="fondmenu" class="col-lg-10 col-md-10 col-sm-10 col-xs-10">';
		$aff .= '<div id="menugauche">';
		$aff .= '<h1 style="color:#cd1719;">DEMANDE D\'ACCES STVA :&nbsp;';
		if($aSignataire->getNom () != '')
		{
			$aff .= '<label style="font-size:26pt;font-weight:normal;font-family: \'Fjalla One\', verdana, helvetica;color:#908d8d;">'.$aSignataire->getCivilite () . ' ' .  utf8_encode($aSignataire->getPrenom ()) . ' ' . $aSignataire->getNom ();
			$aff .= '</label>';
		}
		$aff .= '</h1></div>';
		$aff .= '<div class="row">';
		$aff .= '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="menugauche">';

		if($aSignataire->getIndividuID () != Null)
		{
			if ($aSignataire->getAcces_Stva ())
			{
				$checkValue = "checked disabled";
				$libelle = utf8_encode("Vous êtes déjà autorisé à vous connecter sur le site STVA.");
			}
			else 
			{
				$checkValue = "";
				$libelle = utf8_encode("Indiquez si vous souhaitez être autorisé à vous connecter sur le site STVA.");
			}
			$listIndivID = '';
			$listEtabID = '';
			
			$aff .= '<div class="row"><label style="font-family:helvetica,arial;font-size:10pt;color:#cd1719;text-shadow:none;">'.$libelle.'</label></div>';
			$aff .= '<div class="row">';
			$aff .= '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="float: left;">';
			$aff .= '<label style="font-family:helvetica,arial;font-size:10pt;font-weight:bold;color:#088f04;text-shadow:none;margin-bottom:0px;">';
			$aff .= '<input name="'.$aSignataire->getIndividuID().'"type="checkbox" style="margin: 2px 0 0;float: left;" value="" '.$checkValue.'>&nbsp;&nbsp;&nbsp;'.utf8_encode($aSignataire->getNom()).' '.utf8_encode($aSignataire->getPrenom()).'</label>';
			$aff .= '<input type="hidden" id="login-'.$aSignataire->getIndividuID().'" name="login-'.$aSignataire->getIndividuID().'" value="' . $_GET ['login']. '">';
			$aff .= '<input type="hidden" id="nom-'.$aSignataire->getIndividuID().'" name="nom-'.$aSignataire->getIndividuID().'" value="' . utf8_encode($aSignataire->getNom()). '">';
			$aff .= '<input type="hidden" id="prenom-'.$aSignataire->getIndividuID().'" name="prenom-'.$aSignataire->getIndividuID().'" value="' . utf8_encode($aSignataire->getPrenom()). '">';
			$aff .= '</div>';
			$aff .= '</div>';
		}
		$listIndivID = $listIndivID.$aSignataire->getIndividuID().',';
		
		
		//if ($aSignataire->getAcces_Stva () && count($listeIndiv > 0))
		if($aSignataire->getIndividuID () != Null)
		{
			if(count($listeIndiv) > 0)
				$aff .= '<div class="row" style="margin-top:10px;"><label style="font-family:helvetica,arial;font-size:10pt;color:#cd1719;text-shadow:none;">Parmi les personnes rattach&eacute;es &agrave; vos &eacute;tablissements, cochez celles auxquelles vous souhaitez donner acc&egrave;s &agrave; STVA.</label></div>';
			foreach ($listeIndiv as $aindividu)
			{
				
				if($aindividu->getStva())
				{
					$checkValue = "checked disabled";
					$color = '#088f04';
					$font = 'bold';
				}
				else 
				{
					$checkValue = "";
					$color = '#686868';
					$font = 'bold';
				}
				$uriEncode = urlencode(utf8_encode($aindividu->getPrenom()).' '.utf8_encode($aindividu->getNom()));
				if ($aindividu->getLogin() != $_GET ['login'])
				{
					$listIndivID = $listIndivID.$aindividu->getID().',';
					$aff .= '<div class="row">';
					$aff .= '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="float: left;">';
					$aff .= '<input name="'.$aindividu->getID().'"type="checkbox" style="margin: 3px 0 0;float: left;" value="" '.$checkValue.'>';
					$aff .= '<a data-fancybox data-type="ajax" data-src="./listeCliAjax.php?login='.$aindividu->getLogin().'&name='.$uriEncode.'" href="javascript:;" style="margin-left:6px;color:'.$color.';font-family:helvetica,arial;font-size:10pt;font-weight:'.$font.';">'.utf8_encode($aindividu->getNom()).' '.utf8_encode($aindividu->getPrenom()).'</a>';
						
					//$aff .= '<a href="?login=' .$aindividu->getLogin().'&annuaire='.$_GET['annuaire'].'&acces=true&interne=true" style="margin-left:6px;color:'.$color.';font-family:helvetica,arial;font-size:10pt;font-weight:'.$font.';" target="_blank">'.utf8_encode($aindividu->getNom()).' '.utf8_encode($aindividu->getPrenom()).'</a>';
					$aff .= '<input type="hidden" id="login-'.$aindividu->getID().'" name="login-'.$aindividu->getID().'" value="' . $aindividu->getLogin(). '">';
					$aff .= '<input type="hidden" id="nom-'.$aindividu->getID().'" name="nom-'.$aindividu->getID().'" value="' . utf8_encode($aindividu->getNom()). '">';
					$aff .= '<input type="hidden" id="prenom-'.$aindividu->getID().'" name="prenom-'.$aindividu->getID().'" value="' . utf8_encode($aindividu->getPrenom()). '">';
					$aff .= '</div>';
					$aff .= '</div>';
				}
			}
		}
		$aff .= '</div>';
		$aff .= '<input type="hidden" id="listIndivID" name="listIndivID" value="' . $listIndivID. '">';
		$aff .= '<input type="hidden" id="listEtabID" name="listEtabID" value="' . $listEtabID. '">';
		
		// $aff .='<div id="menucentre" class="col-lg-2 col-md-2 col-sm-0 col-xs-0">';
		// $aff .='</div>';
		$aff .= '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="menudroite">';
		
		// si connexion STVA autorisée
		//if ($aSignataire->getAcces_Stva () )
		if($aSignataire->getIndividuID () != Null)
		{
		 	if (count($listeCli) > 0)
		 	{
				$aff .= '<div class="row"  style="float:left;"><label style="font-family:helvetica,arial;font-size:10pt;color:#cd1719;text-shadow:none;">Etablissements pour lequels vous pouvez commander.</label></div>';		 							
			 	foreach ($listeCli as $aetablissement)
				{
					$aff .= '<div class="row">';
					$aff .= '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="float: left;">';
					$aff .= '<label style="font-family:helvetica,arial;font-size:10pt;color:black;text-shadow:none;font-weight:lighter;margin-bottom:0px;">'.utf8_encode($aetablissement->getRaisonSociale()).' - '.utf8_encode($aetablissement->getBureauDistributeur()).'</label>';
					$aff .= '</div>';
					$aff .= '</div>';
				}
		 	}
		}
		else
		{
			$aff .= '<div><label style="font-family:Fjalla One,helvetica;font-weight: lighter;font-size:15pt;">Vous n\'&ecirc;tes pas autoris&eacute;</br> &agrave; vous connecter.<br></label></div>';
			$aff .= '<div><h5>Nous sommes &agrave; votre disposition pour vous aider<br>ou r&eacute;pondre &agrave; vos questions.</h5></div>';
			$aff .= '<div><h5><b>T&eacute;l&eacute;phone</b> : 01 80 05 23 33</h5></div>';
			$aff .= '<div><h5><b>Mail: </b>';
			if( $_GET['annuaire'] == 2)
				$aff .= '<a href="mailto:transport@gcrfrance.com" style="color:black;">transport@gcrfrance.com</a><br></br></div>';
			else 
				$aff .= '<a href="mailto:transport@ciscar.fr" style="color:black;">transport@ciscar.fr</a><br></br></div>';
		}
		
		$aff .= '</div>';
		$aff .= '</div>';
		$aff .= '</div>';
		$aff .= '<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>';
		$aff .= '</div>';
		
		//if ($aSignataire->getAcces_Stva ())
		if($aSignataire->getIndividuID () != Null)		
		{
			
			$aff .= '<div class="row">';
			$aff .= '<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>';
			$aff .= '<div class="divgauche col-xs-10 col-sm-10 col-md-10 col-lg-10">';
			$aff .= '<div style="float:left;margin-right:10px;padding-top:17px;text-align:left;"><label style="font-family:helvetica,arial;font-size:10pt;color:#cd1719;text-shadow:none;">Vous souhaitez ajouter de nouvelles personnes ?</br>Merci de renseigner NOM, PRENOM, EMAIL, TELEPHONE et FONCTION.</label></div>';
			//$aff .= '<div style="float:right;margin-right:10px;padding-top:30px;"><a href="#bas" style="text-align:right"><img class="btnPlusIndiv" title="Ajouter un individu" src="include/images/user-add.png" border="0"/></a></div>';
			$aff .= '<div class="ajouterIndiv" id="bas" style="float:right;padding-top:20px;color:black;font-size:20pt;"><input class="btnPlusIndiv" type="button" value="Ajouter un individu" style="text-decoration:none;font-size:10pt;"></div>';
			$aff .= '</div>';
			$aff .= '<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>';
			$aff .= '</div>';
				
			$aff .= '<div class="row">';
			$aff .= '<div id="append-individu" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">';
			$aff .= '</div>';
			$aff .= '<div class="row " id="new-row" style="display:none;background-color:#e9e9e9;margin-left:5px;margin-right:5px;border-top:1px solid #fff;">';
			$aff .= '<div class="divTabGauche col-xs-12 col-sm-1 col-md-1 col-lg-1"><input placeholder="Civilit&eacute;" class="inputFormIndivCre" id="majCiv-new" name="majCiv-new" type="texte" style="width:95%;margin:5px;height:30px"></div>';
			$aff .= '<div class="divTabGauche col-xs-12 col-sm-2 col-md-2 col-lg-2"><input placeholder="Nom*" class="inputFormIndivCre" id="majNom-new" name="majNom-new" type="texte" style="width:95%;margin:5px;height:30px"></div>';
			$aff .= '<div class="divTabGauche col-xs-12 col-sm-2 col-md-2 col-lg-2"><input placeholder="Prenom" class="inputFormIndivCre" id="majPrenom-new" name="majPrenom-new" type="texte" style="width:95%;margin:5px;height:30px"></div>';
			$aff .= '<div class="divTabGauche col-xs-12 col-sm-2 col-md-2 col-lg-2"><input placeholder="Adresse mail*" class="inputFormIndivCre" id="majEmail-new" name="majEmail-new" type="texte" style="width:95%;margin:5px;height:30px"></div>';
			$aff .= '<div class="divTabGauche col-xs-12 col-sm-2 col-md-2 col-lg-2"><input placeholder="T&eacute;l&eacute;phone" class="inputFormIndivCre" id="majTel-new" name="majTel-new" type="texte" style="width:95%;margin:5px;height:30px"></div>';
			$aff .= '<div class="divTabGauche col-xs-12 col-sm-2 col-md-2 col-lg-2"><input placeholder="Fonction*" class="inputFormIndivCre" id="majFonc-new" name="majFonc-new" type="texte" style="width:95%;margin:5px;height:30px"></div>';
			$aff .= '<div class="divTabDroite col-xs-12 col-sm-1 col-md-1 col-lg-1" style="padding-right:10px;padding-top: 10px;float:right;"><a href="#bas"><img style="float:right;" id="btnSuppNewIndiv" title="Supprimer un individu" onclick="btnSuppNewIndivClick_Sans_Submit();" src="include/images/trash.png" border="0"/></a></div>';
			$aff .= '</div>';
			$aff .= '</div>';
				

			$aff .= '<div class="row">';
			$aff .= '<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>';
			$aff .= '<div class="divgauche col-xs-10 col-sm-10 col-md-10 col-lg-10">';
			$aff .= '<div style="float:left;margin-right:10px;padding-top:17px;text-align:left;"><label style="font-family:helvetica,arial;font-size:10pt;color:#cd1719;text-shadow:none;">Vous souhaitez ajouter de nouveaux &eacute;tablissements ?</br>Merci de renseigner RAISON SOCIALE, ADRESSE, RRF.</label></div>';
			//$aff .= '<div style="float:right;margin-right:10px;padding-top:30px;"><a href="#bas" style="text-align:right"><img class="btnPlusEtab" title="Ajouter un &eacutetablissement" src="include/images/user-add.png" border="0"/></a></div>';
			$aff .= '<div class="ajouterEtab" id="bas" style="float:right;padding-top:20px;color:black;font-size:20pt;"><input class="btnPlusEtab" type="button" value="Ajouter un &eacute;tablissement" style="text-decoration:none;font-size:10pt;"></div>';
			$aff .= '</div>';
			$aff .= '<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>';
			$aff .= '</div>';
			
			$aff .= '<div class="row">';
			$aff .= '<div id="append-etablissement" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">';
			$aff .= '</div>';
			$aff .= '<div class="row " id="new-row-etab" style="display:none;background-color:#e9e9e9;margin-left:5px;margin-right:5px;border-top:1px solid #fff;">';
			$aff .= '<div class="divTabGauche col-xs-12 col-sm-1 col-md-1 col-lg-3"><input placeholder="Raison sociale*" class="inputFormIndivCre" id="majRs-new" name="majRs-new" type="texte" style="width:95%;margin:5px;height:30px"></div>';
			$aff .= '<div class="divTabGauche col-xs-12 col-sm-2 col-md-2 col-lg-2"><input placeholder="Adresse 1*" class="inputFormIndivCre" id="majAdr1-new" name="majAdr1-new" type="texte" style="width:95%;margin:5px;height:30px"></div>';
			$aff .= '<div class="divTabGauche col-xs-12 col-sm-2 col-md-2 col-lg-2"><input placeholder="Adresse 2" class="inputFormIndivCre" id="majAdr2-new" name="majAdr2-new" type="texte" style="width:95%;margin:5px;height:30px"></div>';
			$aff .= '<div class="divTabGauche col-xs-12 col-sm-2 col-md-2 col-lg-1"><input placeholder="CP*" class="inputFormIndivCre" id="majCp-new" name="majCp-new" type="texte" style="width:95%;margin:5px;height:30px"></div>';
			$aff .= '<div class="divTabGauche col-xs-12 col-sm-2 col-md-2 col-lg-2"><input placeholder="Ville*" class="inputFormIndivCre" id="majVille-new" name="majVille-new" type="texte" style="width:95%;margin:5px;height:30px"></div>';
			$aff .= '<div class="divTabGauche col-xs-12 col-sm-2 col-md-2 col-lg-1"><input placeholder="code RRF" class="inputFormIndivCre" id="majRrf-new" name="majRrf-new" type="texte" style="width:95%;margin:5px;height:30px"></div>';
			$aff .= '<div class="divTabDroite col-xs-12 col-sm-1 col-md-1 col-lg-1" style="padding-right:10px;padding-top: 10px;float:right;"><a href="#bas"><img style="float:right;" id="btnSuppNewEtab" title="Supprimer un &eacute;tablissement" onclick="btnSuppNewEtabClick_Sans_Submit();" src="include/images/trash.png" border="0"/></a></div>';
			$aff .= '</div>';
			$aff .= '</div>';

			$aff .= '<div class="row">';
			$aff .= '<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>';
			$aff .= '<div class="divgauche col-xs-10 col-sm-10 col-md-10 col-lg-10">';
			$aff .= '<div style="float:left;margin-right:10px;padding-top:17px;text-align:left;"><label style="font-family:helvetica,arial;font-size:10pt;color:#cd1719;text-shadow:none;">Indiquez ci-dessous, les modifications / suppressions que vous souhaitez apporter</label></div>';
			$aff .= '<textarea class="form-control" rows="3" name="comment" id="comment"></textarea>';
			$aff .= '</div>';
			$aff .= '<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>';
			$aff .= '</div>';
			
			$aff .= '<div class="row">';
			$aff .= '<div class="col-lg-4 col-md-4 col-sm-1 col-xs-1"></div>';
			$aff .= '<div class="col-lg-4 col-md-4 col-sm-10 col-xs-10" style="margin-top:10px;">';
			$aff .= '<input class="btnConfirmerIndiv" name="majIndiv" id="majIndiv" type="submit" value="Valider la demande" style="text-decoration:none;font-size:15pt;">';
			$aff .= '</div>';
			$aff .= '<div class="col-lg-4 col-md-4 col-sm-1 col-xs-1"></div>';
		}


		
		$aff .= '</div>';
		
		$aff .= '<div class="row">';
		
		$aff .= '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="color:#004682;font-size:7pt;">
				<img style="width:20%;height:auto;" src="include/images/logo-stva.png"/>
				</div>';
		$aff .= '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="color:#004682;font-size:7pt;margin-bottom:5px;">
				<img alt="" src="include/images/if_008_Mail_183573.png" style="margin-left:0px;">&nbsp;';
		if( $_GET['annuaire'] == 2)				
				$aff .= '<a href="mailto:transport@gcrfrance.com" style="text-decoration:underline;color:grey;">transport@gcrfrance.com</a>';
		else 
				$aff .= '<a href="mailto:transport@ciscar.fr" style="text-decoration:underline;color:grey;">transport@ciscar.fr</a>';
		$aff .= '</div>';
		
		$aff .= '</div>';
		$aff .= '</div>';
		
		$aff .= '</div>';
		
		$aff .= '</div>';
		$aff .= '</div>';
		
		$aff .= '</form>';
	
		$aff .= '<!-- MAIL CONTACT SUCCESS -->
			<div style="display:none;float: left;">
			<div class="divTabGauche" style="text-align:center;color:#fff;width:30%;" id="mail_contact_success" name="mail_contact_success">';
		if (isset ( $_GET ['mail'] )) 
		{
			if ($_GET ['mail'] == 'true')
			{
				$aff .= '<div class="divTabGauche" style="text-align:center;color:#fff;background-color:#cd1719;padding-top: 10px;padding-bottom: 10px;"><label>DEMANDE DE MISE A JOUR ENREGISTREE.</div></label>';
				if (isset($_SESSION ['SITE'] ['MSG']) && $_SESSION ['SITE'] ['MSG'] != '' )
				{
					$aff .= '<div class="divTabGauche" style="text-align:left;color:#000;padding-top:10px;padding-left:10px;padding-right:10px;">';	
					$aff .= $_SESSION ['SITE'] ['MSG'];
					$aff .= '</div>';
				}
			}
			else
				$aff .= '<label>UN PROBLEME EST SURVENU LORS DE LA MISE A JOUR.</label>';
			unset($_SESSION ['SITE'] ['MSG']);
		}
		$aff .= '</div>
			</div>';
		
		
		$aff .= '
		<script type="text/javascript">
		document.getElementById("loader").style.display="none";
		document.getElementById("menu").style.display="block";
		</script>';
		
		// Ajouter une ligne à la liste des individus
		$aff .= '<script type="text/javascript">
		var newID = 0;
		var newCliID = 0;
		$(function() {
			$( ".btnPlusIndiv" ).on( "click", function() {
				newID += 1;
				var btnSuppNewIndivID = \'btnSuppNewIndiv-\'+newID;
				var btnSuppNewIndivClick = \'btnSuppNewIndivClick_Sans_Submit(\'+newID+\');\';
				var copie = $("#new-row").clone();
				var newRowID = \'new-row-\'+newID;
				copie.attr("id",newRowID);
				copie.css("display", "block");
				$("#append-individu").append(copie);
				$("#btnSuppNewIndiv").attr("onclick",btnSuppNewIndivClick);
				$("#btnSuppNewIndiv").attr("id",btnSuppNewIndivID);				
				
				var listIndiv = $("#listIndivID").val() ;
				listIndiv = listIndiv + \',new-\'+newID;
				$("#listIndivID").val(listIndiv);
				
				var majCivID = \'majCiv-new-\'+newID;
				$("#majCiv-new").attr("name",majCivID);
				$("#majCiv-new").attr("id",majCivID);
				
				var majNomID = \'majNom-new-\'+newID;
				$("#majNom-new").attr("required",true);
				$("#majNom-new").attr("name",majNomID);
				$("#majNom-new").attr("id",majNomID);
		
				var majPrenomID = \'majPrenom-new-\'+newID;
				$("#majPrenom-new").attr("name",majPrenomID);
				$("#majPrenom-new").attr("id",majPrenomID);
		
				var majTelID = \'majTel-new-\'+newID;
				$("#majTel-new").attr("name",majTelID);
				$("#majTel-new").attr("id",majTelID);
				
				var majEmailID = \'majEmail-new-\'+newID;
				$("#majEmail-new").attr("required",true);
				$("#majEmail-new").attr("name",majEmailID);
				$("#majEmail-new").attr("id",majEmailID);
				
				var majFoncID = \'majFonc-new-\'+newID;
				$("#majFonc-new").attr("required",true);
				$("#majFonc-new").attr("name",majFoncID);
				$("#majFonc-new").attr("id",majFoncID);
			});
		});

		$(function() {
			$( ".btnPlusEtab" ).on( "click", function() {
				newCliID += 1;
				var btnSuppNewEtabID = \'btnSuppNewEtab-\'+newCliID;
				var btnSuppNewEtabClick = \'btnSuppNewEtabClick_Sans_Submit(\'+newCliID+\');\';
				var copie = $("#new-row-etab").clone();
				var newRowID = \'new-row-etab-\'+newCliID;
				copie.attr("id",newRowID);
				copie.css("display", "block");
				$("#append-etablissement").append(copie);
				$("#btnSuppNewEtab").attr("onclick",btnSuppNewEtabClick);
				$("#btnSuppNewEtab").attr("id",btnSuppNewEtabID);				
				
				var listEtab = $("#listEtabID").val() ;
				listEtab = listEtab + \',new-\'+newCliID;
				$("#listEtabID").val(listEtab);
				
				var majRsID = \'majRs-new-\'+newCliID;
				$("#majRs-new").attr("required",true);
				$("#majRs-new").attr("name",majRsID);
				$("#majRs-new").attr("id",majRsID);
				
				var majAdr1ID = \'majAdr1-new-\'+newCliID;
				$("#majAdr1-new").attr("required",true);
				$("#majAdr1-new").attr("name",majAdr1ID);
				$("#majAdr1-new").attr("id",majAdr1ID);
		
				var majAdr2ID = \'majAdr2-new-\'+newCliID;
				$("#majAdr2-new").attr("name",majAdr2ID);
				$("#majAdr2-new").attr("id",majAdr2ID);
						
				var majCpID = \'majCp-new-\'+newCliID;
				$("#majCp-new").attr("required",true);
				$("#majCp-new").attr("name",majCpID);
				$("#majCp-new").attr("id",majCpID);
								
				var majVilleID = \'majVille-new-\'+newCliID;
				$("#majVille-new").attr("required",true);
				$("#majVille-new").attr("name",majVilleID);
				$("#majVille-new").attr("id",majVilleID);
								
				var majRrfID = \'majRrf-new-\'+newCliID;
				$("#majRrf-new").attr("name",majRrfID);
				$("#majRrf-new").attr("id",majRrfID);
			});
		});
				
				
		</script>';	
			
		// supprimer la ligne d'un nouvel individu
			// supprimer la ligne d'un nouvel individu
		$aff .= '<script language="JavaScript" >
		function btnSuppNewIndivClick_Sans_Submit(id)
		{
				var newRowID = \'#new-row-\'+id;
				$(\'\'+newRowID+\'\').css("display", "none");
				var majCivID = \'#majCiv-new-\'+id;
				$(\'\'+majCivID+\'\').val("");
				var majNomID = \'#majNom-new-\'+id;
				$(\'\'+majNomID+\'\').attr("required",false);
				$(\'\'+majNomID+\'\').val("");
				var majPrenomID = \'#majPrenom-new-\'+id;
				$(\'\'+majPrenomID+\'\').val("");
				var majTelID = \'#majTel-new-\'+id;
				$(\'\'+majTelID+\'\').val("");
				var majMailID = \'#majEmail-new-\'+id;
				$(\'\'+majMailID+\'\').attr("required",false);
				$(\'\'+majMailID+\'\').val("");
				var majFoncID = \'#majFonc-new-\'+id;
				$(\'\'+majFoncID+\'\').attr("required",false);
				$(\'\'+majFoncID+\'\').val("");
				
				
		}

		function btnSuppNewEtabClick_Sans_Submit(id)
		{
				var newRowID = \'#new-row-etab-\'+id;
				$(\'\'+newRowID+\'\').css("display", "none");
				var majRsID = \'#majRs-new-\'+id;
				$(\'\'+majRsID+\'\').attr("required",false);
				$(\'\'+majRsID+\'\').val("");
				var majAdr1ID = \'#majAdr1-new-\'+id;
				$(\'\'+majAdr1ID+\'\').attr("required",false);
				$(\'\'+majAdr1ID+\'\').val("");
				var majAdr2ID = \'#majAdr2-new-\'+id;
				$(\'\'+majAdr2ID+\'\').val("");
				var majCpID = \'#majCp-new-\'+id;
				$(\'\'+majCpID+\'\').attr("required",false);
				$(\'\'+majCpID+\'\').val("");
				var majVilleID = \'#majVille-new-\'+id;
				$(\'\'+majVilleID+\'\').attr("required",false);
				$(\'\'+majVilleID+\'\').val("");
				var majRrfID = \'#majRrf-new-\'+id;
				$(\'\'+majRrfID+\'\').val("");
				
				
		}	

		$(\'[data-fancybox]\').fancybox({

					modal : false
				})
						
		</script>';			

		// Faire apparaitre la div Mail_Contact SI RETOUR ENVOI DE MAIL
		if (isset ( $_GET ['mail'] )) {
			$aff .= '<script type="text/javascript">
		$(document).ready(function() {
			$("#mail_contact_success").fancybox({
			}).click();
		});
		</script>';
		}

		$aff .= '
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-27664956-1"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag("js", new Date());
		
		gtag("config", "UA-27664956-1");
		</script>';
		
		
		$aff .= '</body>';
		$aff .= '</html>';
		
		echo $aff;
	}
}
?>