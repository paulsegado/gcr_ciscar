<?php
/**
 * @author Philippe GERMAIN
 * @package site-stva
 * @subpackage 
 * @version 1.0.4
 */
class stvaControler {
				
	public function run() {
		switch ($_GET ['action']) {
			case 'maj' :
				return $this->majAction ();
				break;
			default :
				break;
		}
	}
	
	/*
	 * ###########################################
	 * METHOD
	 * ###########################################
	 */
	private function majAction() {
		$msg = "";
		$listIndivID = explode(",",$_POST ['listIndivID'] );
		$listIndivID = array_unique ( $listIndivID );
		foreach ($listIndivID as $id)
		{
			$pos = strpos($id,'new-');
			if ($pos === false)
			{
				// on active l'acces STVA sur les individus coch�s
				if (isset ($_POST[$id]))
				{
					$login = 'login-'.$id;
					$aSimple_LCAGroupeMembre = new Simple_LCAGroupeMembre ();
					$tabIndividuId = $aSimple_LCAGroupeMembre->SQL_SELECT_IndividuID ( $_POST[$login] );
					foreach ( $tabIndividuId as $aIndividuID ) 
					{
							if ($_SERVER ['HTTP_HOST'] == 'gcrfrance.local' || $_SERVER ['HTTP_HOST'] == 'ciscar.local' )
							{
								// Base local
								$aSimple_LCAGroupeMembre->SQL_GROUPE_ADD_MEMBER ( 433, $aIndividuID );
							}
							else 
							{
								// Base de production
								$aSimple_LCAGroupeMembre->SQL_GROUPE_ADD_MEMBER ( 497, $aIndividuID );
							}
					}						
					if (count($tabIndividuId) > 0)
						$msg .= "<label>Acc&egrave;s e-cattransport pour \""	.$_POST['nom-'.$id] . ' '. $_POST['prenom-'.$id]. '"  </label>&nbsp;<label style="color:#18a689;">ACTIF</label><br>';				
				}
			}
			else 
			{
				// pour les nouveaux individus, on recherche les adresse mails existantes
				$mail = 'majEmail-'.$id;
				if (isset($_POST [$mail]) && $_POST [$mail] != '' )
				{
					$aSimple_LCAGroupeMembre = new Simple_LCAGroupeMembre ();
					$tabIndividuId = $aSimple_LCAGroupeMembre->SQL_SELECT_IndividuID_By_Email ( $_POST[$mail] );
					//Pour les individus trouv�s, on active l'acc�s � STVA'
					foreach ( $tabIndividuId as $aIndividuID )
					{
							if ($_SERVER ['HTTP_HOST'] == 'gcrfrance.local' || $_SERVER ['HTTP_HOST'] == 'ciscar.local' )
							{
								// Base local
								$aSimple_LCAGroupeMembre->SQL_GROUPE_ADD_MEMBER ( 433, $aIndividuID );
							}
							else 
							{
								// Base de production
								$aSimple_LCAGroupeMembre->SQL_GROUPE_ADD_MEMBER ( 497, $aIndividuID );
							}
					}						
					if (count($tabIndividuId) == 2)
						$msg .= "<label>Acc&egrave;s e-cattransport pour \""	.$_POST['majNom-'.$id] . ' '. $_POST['majPrenom-'.$id]. '"  </label>&nbsp;<label style="color:#18a689;">ACTIF</label><br>';				
					else 				
						$msg .= "<label>Acc&egrave;s e-cattransportpour \""	.$_POST['majNom-'.$id] . ' '. $_POST['majPrenom-'.$id].'"  </label>&nbsp;<label style="color:#cd1719;;">EN COURS</label><br>';				
				}
			}
			
		}
		
		$listEtabID = explode(",",$_POST ['listEtabID'] );
		$listEtabID = array_unique ( $listEtabID );
		foreach ($listEtabID as $id)
		{
			if ($id != '' && $_POST['majRs-'.$id] != '')
				$msg .= "<label>Cr&eacute;ation &eacute;tablissement \"".$_POST['majRs-'.$id]. '"</label>&nbsp;<label style="color:#cd1719;;">EN COURS</label><br>';				
		}
		
		//$aRenderAccessView = new RenderAccessView();
		//$aRenderAccessView->render($msg);
		
		$aMailcontroller = new MailControler();
		$_SESSION ['SITE'] ['MSG'] = $msg;
		if ($aMailcontroller->run())
		{ 
			echo $this->redirection ( '?login=' . $_POST ['login'].'&annuaire='.$_POST ['annuaire']. '&acces=true&mail=true&interne=true' );
		}
		else
			echo $this->redirection ( '?login=' . $_POST ['login'].'&annuaire='.$_POST ['annuaire']. '&acces=true&mail=true&interne=true' );
	}
	private function redirection($url) {
		$aff = '<script type="text/javascript">';
		$aff .= 'window.location.href="' . $url . '";';
		$aff .= '</script>';
		return $aff;
	}
	

	
}
?>