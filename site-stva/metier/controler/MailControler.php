<?php
/**
 * @author Philippe GERMAIN
 * @package site-maj-annuaire
 * @subpackage etablissement
 * @version 1.0.4
 */
class MailControler 
{

	function run() 
	{
		$aSimple_LCAGroupeMembre = new Simple_LCAGroupeMembre ();
		
		$msgMail = '';
		$passage_ligne = "\r\n";
		
		$mailAdmin = new EnvoiMail ();
			
		$mailAdmin->setFrom ( "transport@gcrfrance.com" );
		$mailAdmin->setTo ( "transport@gcrfrance.com;f.chazarenc@ciscar.fr" );
		//$mailAdmin->setTo ( "p.germain@gcrfrance.com" );
		$mailAdmin->setSubject ( "Acces STVA : " . $_GET['login'] );

		$listIndivID = explode(",",$_POST ['listIndivID'] );
		$listIndivID = array_unique ( $listIndivID );

		$msgMail = 'Une autorisation d\'accès à STVA a été demandée par ' .$_SESSION ['SITE'] ['DEMANDEUR'].'<br><br>'. $passage_ligne;
		$msgMail .= 'Pour le compte ' .$_GET['login']. '<br>'. $passage_ligne;
		$count = 0;
		$abackColor = '#ededed';
		foreach ($listIndivID as $id)
		{
			$pos = strpos($id,'new-');
			if ($pos === false)
			{				
				// on active l'acces STVA sur les individus cochés
				if (isset ($_POST[$id]))
				{
					$count += 1;
					if ($count == 1)
					{
						$msgMail .=  '<br>';
						$msgMail .=  '<br>';
						$msgMail .= "<table cellspacing=0 cellpadding=3 style='font-size: x-small;font-family:Arial;color:grey;'>" . $passage_ligne;
						$msgMail .= "<tr align=left style='background-color:#000000;color:white;'>" . $passage_ligne;
						$msgMail .= "<td style='font-weight:bold;'>Id</td>" . $passage_ligne;
						$msgMail .= "<td style='font-weight:bold;'>Nom</td>" . $passage_ligne;
						$msgMail .= "<td style='font-weight:bold;'>Prénom</td>" . $passage_ligne;
						$msgMail .= "<td style='font-weight:bold;'>Login</td>" . $passage_ligne;
						$msgMail .= "<td style='font-weight:bold;'>Statut</td>" . $passage_ligne;
						$msgMail .= "</tr>" . $passage_ligne;
					}
					if ($abackColor == '#ededed')
						$abackColor = 'white';
					else
						$abackColor = '#ededed';
					
					$msgMail .= "<tr align=left style='vertical-align:top;background-color:" . $abackColor . ";'>" . $passage_ligne;
					$msgMail .= "<td style='font-weight:bold;'>";
					$msgMail .= $id;
					$msgMail .= "</td>" . $passage_ligne;
					$msgMail .= "<td style='font-weight:normal;'>";
					$msgMail .= utf8_decode($_POST['nom-'.$id]);
					$msgMail .= "</td>" . $passage_ligne;
					$msgMail .= "<td style='font-weight:normal;'>";
					$msgMail .= utf8_decode($_POST['prenom-'.$id]);
					$msgMail .= "</td>" . $passage_ligne;
					$msgMail .= "<td style='font-weight:normal;'>";
					$msgMail .= $_POST['login-'.$id];
					$msgMail .= "</td>" . $passage_ligne;

					$tabIndividuId = $aSimple_LCAGroupeMembre->SQL_SELECT_IndividuID ( $_POST['login-'.$id] );
					if (count($tabIndividuId) > 0)
					{
						$msgMail .= "<td style='font-weight:bold;color:#088f04'>";
						$msgMail .= 'Actif';
						$msgMail .= "</td>" . $passage_ligne;						
					}
					else 
					{
						$msgMail .= "<td style='font-weight:bold;color:red'>";
						$msgMail .= 'NON Actif';
						$msgMail .= "</td>" . $passage_ligne;
					}	
					$msgMail .= "</tr>" . $passage_ligne;
				}
			}
		}
		if ($count > 0)
			$msgMail .= "</table>" . $passage_ligne;
		
		$count = 0;
		$abackColor = '#ededed';
		foreach ($listIndivID as $id)
		{
			$pos = strpos($id,'new-');
			if ($pos !== false)
			{
				$count += 1;
				// pour les nouveaux individus, on recherche les adresse mails existantes
				$mail = 'majEmail-'.$id;
				if (isset($_POST [$mail]) && $_POST [$mail] != '')
				{
					if ($count == 1)
					{
						$msgMail .=  '<br>';
						$msgMail .=  '<br>';
						$msgMail .= 'Une autorisation d\'accès à STVA a été demandée pour les personnes suivantes :'. $passage_ligne;
						$msgMail .= '<br>';
						$msgMail .= "<table cellspacing=0 cellpadding=3 style='font-size: x-small;font-family:Arial;color:grey;'>" . $passage_ligne;
						$msgMail .= "<tr align=left style='background-color:#000000;color:white;'>" . $passage_ligne;
						$msgMail .= "<td style='font-weight:bold;'>Civ</td>" . $passage_ligne;
						$msgMail .= "<td style='font-weight:bold;'>Nom</td>" . $passage_ligne;
						$msgMail .= "<td style='font-weight:bold;'>Prénom</td>" . $passage_ligne;
						$msgMail .= "<td style='font-weight:bold;'>Mail</td>" . $passage_ligne;
						$msgMail .= "<td style='font-weight:bold;'>Tel</td>" . $passage_ligne;
						$msgMail .= "<td style='font-weight:bold;'>Fonction</td>" . $passage_ligne;
						$msgMail .= "<td style='font-weight:bold;'>Statut</td>" . $passage_ligne;
						$msgMail .= "</tr>" . $passage_ligne;						
					}
					if ($abackColor == '#ededed')
						$abackColor = 'white';
					else
						$abackColor = '#ededed';
					$msgMail .= "<tr align=left style='vertical-align:top;background-color:" . $abackColor . ";'>" . $passage_ligne;
					$msgMail .= "<td style='font-weight:normal;'>";
					$msgMail .= $_POST['majCiv-'.$id];
					$msgMail .= "</td>" . $passage_ligne;
					$msgMail .= "<td style='font-weight:normal;'>";
					$msgMail .= utf8_decode($_POST['majNom-'.$id]);
					$msgMail .= "</td>" . $passage_ligne;
					$msgMail .= "<td style='font-weight:normal;'>";
					$msgMail .= utf8_decode($_POST['majPrenom-'.$id]);
					$msgMail .= "</td>" . $passage_ligne;
					$msgMail .= "<td style='font-weight:normal;'>";
					$msgMail .= $_POST['majEmail-'.$id];
					$msgMail .= "</td>" . $passage_ligne;
					$msgMail .= "<td style='font-weight:normal;'>";
					$msgMail .= $_POST['majTel-'.$id];
					$msgMail .= "</td>" . $passage_ligne;
					$msgMail .= "<td style='font-weight:normal;'>";
					$msgMail .= $_POST['majFonc-'.$id];
					$msgMail .= "</td>" . $passage_ligne;
						
					$tabIndividuId = $aSimple_LCAGroupeMembre->SQL_SELECT_IndividuID_By_Email ( $_POST[$mail] );
					//Pour les individus trouvés, on active l'accès à STVA'
					if (count($tabIndividuId) > 0)
					{
						$msgMail .= "<td style='font-weight:bold;color:#088f04'>";
						$msgMail .= 'Actif';
						$msgMail .= "</td>" . $passage_ligne;						
					}
					else
					{
						$msgMail .= "<td style='font-weight:bold;color:red'>";
						$msgMail .= 'NON Actif';
						$msgMail .= "</td>" . $passage_ligne;
					}
					$msgMail .= "</tr>" . $passage_ligne;
				}
			}				
		}
		if ($count > 0)
			$msgMail .= "</table>" . $passage_ligne;

		$listEtabID = explode(",",$_POST ['listEtabID'] );
		$listEtabID = array_unique ( $listEtabID );
		$count = 0;
		$abackColor = '#ededed';
		
		foreach ($listEtabID as $id)
		{
			if ($id != '' && $_POST['majRs-'.$id] != '')
			{
				$count += 1;
				if ($count == 1)
				{
					$msgMail .=  '<br>';
					$msgMail .=  '<br>';
					$msgMail .= 'Une demande de création a été demandée pour les établissements suivants :'. $passage_ligne;
					$msgMail .= '<br>';
					$msgMail .= "<table cellspacing=0 cellpadding=3 style='font-size: x-small;font-family:Arial;color:grey;'>" . $passage_ligne;
					$msgMail .= "<tr align=left style='background-color:#000000;color:white;'>" . $passage_ligne;
					$msgMail .= "<td style='font-weight:bold;'>Raison Sociale</td>" . $passage_ligne;
					$msgMail .= "<td style='font-weight:bold;'>Adresse 1</td>" . $passage_ligne;
					$msgMail .= "<td style='font-weight:bold;'>Adresse 2</td>" . $passage_ligne;
					$msgMail .= "<td style='font-weight:bold;'>Code Postal</td>" . $passage_ligne;
					$msgMail .= "<td style='font-weight:bold;'>Ville</td>" . $passage_ligne;
					$msgMail .= "<td style='font-weight:bold;'>RRF</td>" . $passage_ligne;
					$msgMail .= "</tr>" . $passage_ligne;
				}				
				if ($abackColor == '#ededed')
					$abackColor = 'white';
				else
					$abackColor = '#ededed';
				$msgMail .= "<tr align=left style='vertical-align:top;background-color:" . $abackColor . ";'>" . $passage_ligne;
				$msgMail .= "<td style='font-weight:normal;'>";
				$msgMail .= utf8_decode($_POST['majRs-'.$id]);
				$msgMail .= "</td>" . $passage_ligne;
				$msgMail .= "<td style='font-weight:normal;'>";
				$msgMail .= utf8_decode($_POST['majAdr1-'.$id]);
				$msgMail .= "</td>" . $passage_ligne;
				$msgMail .= "<td style='font-weight:normal;'>";
				$msgMail .=utf8_decode( $_POST['majAdr2-'.$id]);
				$msgMail .= "</td>" . $passage_ligne;
				$msgMail .= "<td style='font-weight:normal;'>";
				$msgMail .= $_POST['majCp-'.$id];
				$msgMail .= "</td>" . $passage_ligne;
				$msgMail .= "<td style='font-weight:normal;'>";
				$msgMail .= utf8_decode($_POST['majVille-'.$id]);
				$msgMail .= "</td>" . $passage_ligne;
				$msgMail .= "<td style='font-weight:normal;'>";
				$msgMail .= $_POST['majRrf-'.$id];
				$msgMail .= "</td>" . $passage_ligne;

				$msgMail .= "</tr>" . $passage_ligne;
			}
		}
		if ($count > 0)
			$msgMail .= "</table>" . $passage_ligne;

		$msgMail .=  '<br>';
		$msgMail .=  '<br>';
		$msgMail .=  'Commentaire : '. $passage_ligne;
		$msgMail .=  '<br>';
		$msgMail .=  $_POST['comment'];
		
		$mailAdmin->setMessage ( '<html><body style="font-size: small;font-family:Arial;">' . $msgMail . '</body></html>' );
		// $mailAdmin->setHeaderReplyTo ( "" );
		// $mailAdmin->setHeaderContentType ( 'text/html; charset="iso-8859-1"' );
		// $mailAdmin->setHeaderContentTransferEncoding ( '8bit' );
		if (! $mailAdmin->send ())
			return false;
		else 
			return true;

	}
}

?>