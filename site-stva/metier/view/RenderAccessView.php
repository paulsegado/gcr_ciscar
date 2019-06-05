<?php
/**
 * @author Philippe GERMAIN
 * @package site-stva
 * @subpackage 
 * @version 1.0.4
 */
class RenderAccessView {

	public function __construct() {
		
	}
	
	public function render($message) {
		header ("content-type: text/html; charset=ISO-8859-1");
		$aff = '';
		$aff .= '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">';
		$aff .= '<html>';
		$aff .= '<head>';
		$aff .= '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';
		$aff .= '<meta name="viewport" content="width=device-width,initial-scale=1">';
		$aff .= '<title>Acc&egrave;s e-cattransport</title>';
		
		$aff .= '<script type="text/javascript" src="js/jquery-3.0.0.js"></script>';

		$aff .= '<!-- chargement de fancybox -->';
		$aff .= '<script type="text/javascript" src="../../include/js/fancybox/jquery.fancybox.js"></script>';
		$aff .= '<link rel="stylesheet" type="text/css" href="../../include/js/fancybox/jquery.fancybox.css" media="screen" />';
		$aff .= '</head>';
		$aff .= '<body style="background:#e1e1e1">';
		$aff .= '<!-- MAIL CONTACT SUCCESS -->
			<div style="display:none;float: left;color:#fff;background-color:#cd1719;">
			<div class="divTabGauche" style="text-align:center;" id="mail_contact_success" name="mail_contact_success">';
				$aff .= '<label>DEMANDE DE MISE A JOUR ENREGISTREE.</br></label>';

		$aff .= '</div>
			</div>';

		// Faire apparaitre la div Mail_Contact SI RETOUR ENVOI DE MAIL
			$aff .= '<script type="text/javascript">
		$(document).ready(function() {
			$("#mail_contact_success").fancybox({
				overlayOpacity:0.1,
				overlayColor:\'#000000\',
			   width : 300,
			   height : 125,
			   fitToView : false,
			   autoSize : false
				}).click();
		});
		</script>';

		
		
		
		$aff .= '</body>';

		echo $aff;
	}
	
}	