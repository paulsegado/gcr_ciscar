<?php

function cmpCli($a,$b)
{
	return strcmp($a->getRaisonSociale(), $b->getRaisonSociale());
}

include ('config/configuration.php');
include ('../config/configuration.php');

$BaseURL = './';
include ('include/mvc_inc.php');


include ('include/DbConnexion.php');


$aff = '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">';
$aff .= '<html>';
$aff .= '<head>';
$aff .= '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';
$aff .= '<meta name="viewport" content="width=device-width,initial-scale=1">';
$aff .= '<title>Acc&agrave;s STVA</title>';

$aff .= '<script type="text/javascript" src="js/jquery-3.0.0.js"></script>';

$aff .= '<link rel="stylesheet" href="include/css/bootstrap/bootstrap.css">';
$aff .= '<script src="js/bootstrap/bootstrap.min.js"></script>';
$aff .= '<link rel="stylesheet" href="include/css/form.css">';
$aff .= '<style>
.customVid {
	margin: 20px;
	max-width: 650px !important;
	padding: 10px;
}
</style>';
$aff .= '</head>';
$aff .= '<body style="background:#e1e1e1">';
$aff .= '<div class="customVid">';

$aff .= '<div class="row" style="width:100%;">';
$aff .= '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-weight:bold;float: left;color:#fff;background-color:#cd1719;padding-top: 15px;padding-bottom: 15px;padding-left:10px">';
$aff .= $_GET ['name'];
$aff .= '</div>';
$aff .= '</div>';


$astvaAcces = new stvaAccesSignataire();
$astvaAcces->listeAcces( $_GET ['login']);
if (count($astvaAcces->getListeCli() > 0 ))
{
		$listeCli = $astvaAcces->getListeCli();
		usort($listeCli, "cmpCli");
}
$color = "#ededed";
if (count($listeCli) > 0)
{
	foreach ($listeCli as $aetablissement)
	{
		if ($color == "#ededed")
			$color = "#fff";
		else 
			$color = "#ededed";
		$aff .= '<div class="row" style="width:100%;padding-left:10px;padding-top: 10px;padding-bottom: 10px;background-color:'.$color.';">';
		$aff .= '<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="float: left;">';
		$aff .= '<label style="font-family:helvetica,arial;font-size:10pt;color:#686868;text-shadow:none;font-weight:lighter;margin-bottom:0px;font-style: italic;">'.utf8_encode($aetablissement->getFonction()).' : </label>';
		$aff .= '</div>';
		$aff .= '<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" style="float: left;">';
		$aff .= '<label style="font-family:helvetica,arial;font-size:10pt;color:black;text-shadow:none;font-weight:lighter;margin-bottom:0px; white-space: nowrap;">'.utf8_encode($aetablissement->getRaisonSociale()).' - '.utf8_encode($aetablissement->getBureauDistributeur()).'</label>';
		$aff .= '</div>';
		$aff .= '</div>';
	}
}

$aff .= '</div>';
include ('include/DbDeconnexion.php');
$aff .= '</body>';
$aff .= '</html>';

echo $aff;

?>