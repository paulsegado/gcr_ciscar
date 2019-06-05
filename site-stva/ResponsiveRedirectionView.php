<?php
/**
 * @author Philippe GERMAIN
 * @package site-elections
 * @subpackage 
 * @version 1.0.4
 */
class ResponsiveRedirectionView {
	public function renderHTML(stvaSignataire $aSignataire) {
		header ("content-type: text/html; charset=ISO-8859-1");
		$aff = '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">';
		$aff .= '<html>';
		$aff .= '<head>';
		$aff .= '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';
		$aff .= '<meta name="viewport" content="width=device-width,initial-scale=1">';
		$aff .= '<title>Acc&egrave;s e-cattransport</title>';
		$aff .= '<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">';
		$aff .= '<link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">';
		$aff .= '<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">';
		
		$aff .= '<script type="text/javascript" src="include/js/jquery-1.12.4.min.js"></script>';
		
		$aff .= '<link rel="stylesheet" href="include/css/bootstrap/bootstrap.css">';
		$aff .= '<script src="include/js/bootstrap/bootstrap.min.js"></script>';
		
		$aff .= '<style>';
		$aff .= '* {margin:0px; padding:0px;}';
		$aff .= 'body{background:#e1e1e1;font-family:arial;}';
		$aff .= '#wrapper{margin:0px auto;background:#FFFFFF ;text-align:center;border:0px solid #000000;padding-top:1px;margin-top:2px;box-shadow: 0px 1px 30px 3px rgba(0, 0, 0, 0.7); border-radius:2px;}';
		
		$aff .= '#wrapper #header{margin:15px auto;background:transparent ;text-align:center;border:0px solid #000000;}';
		$aff .= '#wrapper #menu{background:transparent url(\'include/images/bg-home.jpg\') no-repeat center center;text-align:center;padding-top:40px;padding-bottom:80px;height:auto;border:0px solid #000000;}';
		$aff .= '#wrapper #fondmenu{display:inline-table;background-color:rgba(255,255,2255,0.7);text-align:center;border-radius:5px;}';
		$aff .= '#wrapper #menugauche{display:table-cell;float:left;padding-top:35px;padding-bottom:0px;padding-left:20px;border-width:0 0px 0 0 ;border-color:white;border-style:solid;text-align:left;font-size:17pt;font-family: \'Fjalla One\', verdana, helvetica;color:#fff;text-shadow: 2px 2px 2px black;}';
		$aff .= '#wrapper #menucentre{display:table-cell;float:left;padding-top:210px;margin-top:0px;margin-bottom:20px;border-width:0 0 0 1px;border-color:white;border-style:solid;}';
		$aff .= '#wrapper #menudroite{display:table-cell;float:left;padding-top:30px;padding-bottom:0px;padding-left:0px;text-align:center;font-size:12pt;font-family: \'helvetica\';color:#000;}';
		$aff .= '#wrapper #footer{padding-top:0px;padding-bottom:0px;background:transparent;text-align:center;border:0px solid #000000;font-size:10pt;color:blue;font-weight:bold;}';				
		
		$aff .= '
	
	/***************************** facebook **********************************/
	#facebook{
		margin-top:30px;
		margin-bottom:30px;
		display:inline-table;
	}
	.facebook_block1{
		background-color:#cd1719;
		border:1px solid #fff;
		float:left;
		height:25px;
		margin-left:5px;
		width:15px;
	    opacity:0.1;
		-webkit-transform:scale(0.7);
		-webkit-animation-name: facebook;
	 	-webkit-animation-duration: 1s;
	 	-webkit-animation-iteration-count: infinite;
	 	-webkit-animation-direction: normal;
		-ms-transform:scale(0.7);
		-ms-animation-name: facebook;
	 	-ms-animation-duration: 1s;
	 	-ms-animation-iteration-count: infinite;
	 	-ms-animation-direction: normal;
		transform:scale(0.7);
		animation-name: facebook;
	 	animation-duration: 1s;
	 	animation-iteration-count: infinite;
	 	animation-direction: normal;
	
		}
	
	#block_1{
	 	-webkit-animation-delay: .3s;
	 	-ms-animation-delay: .3s;
		animation-delay: .3s;
	}
	#block_2{
	 	-webkit-animation-delay: .4s;
	 	-ms-animation-delay: .4s;
		animation-delay: .4s;
	}
	#block_3{
	 	-webkit-animation-delay: .5s;
	 	-ms-animation-delay: .5s;
		animation-delay: .5s;
	}
	#block_4{
	 	-webkit-animation-delay: .6s;
	 	-ms-animation-delay: .6s;
		animation-delay: .6s;
	}
	#block_5{
	 	-webkit-animation-delay: .7s;
	 	-ms-animation-delay: .7s;
		animation-delay: .7s;
	}
	#block_6{
	 	-webkit-animation-delay: .8s;
	 	-ms-animation-delay: .8s;
		animation-delay: .8s;
	}
	#block_7{
	 	-webkit-animation-delay: .9s;
	 	-ms-animation-delay: .9s;
		animation-delay: .9s;
	}
	#block_8{
	 	-webkit-animation-delay: .10s;
	 	-ms-animation-delay: .10s;
		animation-delay: .10s;
	}
	@-webkit-keyframes facebook{
		0%{
			-webkit-transform: scale(1.2);
			opacity:1;}
		100%{
			-webkit-transform: scale(0.7);
			opacity:0.1;}
	}
	@-ms-keyframes facebook{
		0%{
			-ms-transform: scale(1.2);
			opacity:1;}
		100%{
			-ms-transform: scale(0.7);
			opacity:0.1;}
	}
	@keyframes facebook{
		0%{
			transform: scale(1.2);
			opacity:1;}
		100%{
			transform: scale(0.7);
			opacity:0.1;}
	}
			


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
						
	
	</style>';
		
		$aff .= '<!--[if IE 7]>';
		$aff .= '<style>';
		$aff .= '#wrapper #menu{margin-left:-10px;}';
		$aff .= '#wrapper #footer{margin-left:-10px;}';
		$aff .= '</style>';
		$aff .= '<![endif]-->';
		
		$aff .= '</head>';
		$aff .= '<body style="background:#e1e1e1">';
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
		
		$aff .= '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="menugauche">';
		$aff .= '<h1 style="color:#206195;">Connexion E-CATTRANSPORT</h1>';
		$aff .= 'Bonjour<br>' . $aSignataire->getCivilite () . ' ' . utf8_encode($aSignataire->getPrenom ()) . ' ' . $aSignataire->getNom ();
		$aff .= '</div>';
		// $aff .='<div id="menucentre" class="col-lg-2 col-md-2 col-sm-0 col-xs-0">';
		// $aff .='</div>';
		$aff .= '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="menudroite">';
		
		// si connexion STVA autoris�e
		if ($aSignataire->getAcces_Stva ())
		 {
		 	// URL PRE-PROD
		 	//$URL = 'http://box-gcr-pp.stva.com.s3-website-eu-west-1.amazonaws.com/#/login?token=';
		 	// URL PRODUCTION
		 	$URL = 'https://boxstva-client.stva.com/#/login?token=';
		 	//$login64 = base64_encode ( $_GET ['login'] );
			//$loginMd5 = md5 ( 'electionsgcr' . $_GET ['login'] );
			ob_start (); // avant toute chose
			//$header = 'Refresh: 5; '.urlencode($URL.$aSignataire->mefUrl($aSignataire->getIndividuID()));
			//print $URL.$aSignataire->mefUrl($aSignataire->getIndividuID());
			$header = 'Refresh: 5; '.$URL.$aSignataire->mefUrl($aSignataire->getIndividuID());
			header ( $header );
			ob_flush ();
			// $aff .= '<form action="http://192.168.10.71:9090/vote/2017/'.$login64.'/'.$loginMd5. '" method="get" name="frmelections" id="frmelections">';
			// $aff .= '</form>';
			
			$aff .= '<div><label style="font-family:Fjalla One,helvetica;font-weight: lighter;font-size:15pt;">Vous allez &ecirc;tre redirig&eacute; vers le site<brE-CATTRANSPORT</label></div>';
			
			$aff .= '<div id=\'facebook\' name=\'facebook\'>
			<div id=\'block_1\' name=\'block_1\' class=\'facebook_block1\'></div>
			<div id=\'block_2\' name=\'block_2\' class=\'facebook_block1\'></div>
			<div id=\'block_3\' name=\'block_3\' class=\'facebook_block1\'></div>
			<div id=\'block_4\' name=\'block_4\' class=\'facebook_block1\'></div>
			
			<div id=\'block_5\' name=\'block_5\' class=\'facebook_block1\'></div>
			<div id=\'block_6\' name=\'block_6\' class=\'facebook_block1\'></div>
			<div id=\'block_7\' name=\'block_7\' class=\'facebook_block1\'></div>
			<div id=\'block_8\' name=\'block_8\' class=\'facebook_block1\'></div>
			</div>';
			
			$aff .= '<div><label style="font-family:Fjalla One,helvetica;font-weight: lighter;">Veuillez patienter...</label><br><br></div>';
		} 
		else 
		{
			$aff .= '<div><label style="font-family:Fjalla One,helvetica;font-weight: lighter;font-size:15pt;">Vous n\'&ecirc;tes pas autoris&eacute;</br> &agrave; vous connecter.<br></label></div>';
			$aff .= '<div><h5>Nous sommes &agrave; votre disposition pour vous aider<br>ou r&eacute;pondre &agrave; vos questions.</h5></div>';
			$aff .= '<div><h5><b>T&eacute;l&eacute;phone</b> : 01 80 05 23 33</h5></div>';
			$aff .= '<div><h5><b>Mail: </b>';
			if($aSignataire->getAnnuaireID() == 2)
				$aff .= '<a href="mailto:transport@gcrfrance.com" style="color:black;">transport@gcrfrance.com</a><br></br></div>';
			else 
				$aff .= '<a href="mailto:transport@ciscar.fr" style="color:black;">transport@ciscar.fr</a><br></br></div>';
			$aff .= '<div><h5><a href="http://'.$_SERVER ['HTTP_HOST'].'/stva/?acces=true&login=' .$aSignataire->getLogin() .'&annuaire=2" target="_blank" style="font-size:10pt;font-weight:bold;color:#cd1719;text-decoration:underline;">Faire un demande d\'acc&egrave;s en ligne.<a></h5></div>';
		}
		
		$aff .= '</div>';
		$aff .= '</div>';
		$aff .= '<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>';
		$aff .= '</div>';
		
		$aff .= '</div>';
		
		$aff .= '<div class="row">';
		
		$aff .= '<div class="finpage col-lg-12 col-md-12 col-sm-12 col-xs-12" style="color:#004682;font-size:7pt;margin-top:-40px;">
				<img style="width:20%;height:auto;" src="include/images/logo-ecat.png"/>
				</div>';

		$aff .= '</div>';
		$aff .= '</div>';
		
		$aff .= '</div>';
		
		$aff .= '</div>';
		$aff .= '</div>';
		
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