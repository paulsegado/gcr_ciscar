<?php
/**
 * @author Philippe GERRMAIN
 * @package site-stva
 * @subpackage 
 * @version 1.0.4
 */
class stvaAccesSignataire {
	private $alisteCli= array();
	private $alisteIndiv= array();
	private $alisteRefCli = array();
	
	
	public function __construct() {
		
	}
	
	public function getListeCli() {
		return $this->alisteCli;
	}
	public function getListeIndiv() {
		return $this->alisteIndiv;
	}
		
	// ###
	public function demandeAcces($login)
	{
		global $link;
		global $CONFIG_MYSQL_HOSTNAME;
		global $CONFIG_MYSQL_USERNAME;
		global $CONFIG_MYSQL_PASSWORD;
		global $CONFIG_MYSQL_BASENAME;
		
		// Recherche des établissements de l'individu connecté
		$linkli1 = mysqli_connect ( $CONFIG_MYSQL_HOSTNAME, $CONFIG_MYSQL_USERNAME, $CONFIG_MYSQL_PASSWORD );
		mysqli_select_db ( $linkli1 , $CONFIG_MYSQL_BASENAME);
		$sql = "call export_ctc_stva_by_indiv('".$login."')";

		$result = mysqli_query ($linkli1, $sql) or die ( mysqli_error ($linkli1)  );

		if (mysqli_num_rows ( $result ) > 0)
		{
			$line = mysqli_fetch_array ( $result );
			$tabRefCli = explode('|', $line [8] );
			if (count($tabRefCli) == 0)
				$tabRefCli = $line [7];
		}
		mysqli_free_result($result);
		mysqli_close($linkli1);

		if (count($tabRefCli) >0 )
		{
			foreach ($tabRefCli as $refCli)
			{
	
				// pour chaque établissement, on récupère la lise des individus rattachés
				$linkli2 = mysqli_connect ( $CONFIG_MYSQL_HOSTNAME, $CONFIG_MYSQL_USERNAME, $CONFIG_MYSQL_PASSWORD );
				mysqli_select_db($linkli2,$CONFIG_MYSQL_BASENAME );
				$sql = "call export_ctc_stva_by_cli('".$refCli."')";
		
				$result = mysqli_query ( $linkli2, $sql) or die ( mysqli_error ($linkli2)  );
	
				//recherche si acces STVA pour l'individu
				$aSimple_LCAGroupeMembreList = new Simple_LCAGroupeMembreList ();
					
				//on stock les individus dans un tableau
				while ( $line = mysqli_fetch_array($result, MYSQLI_NUM))
				{
					$aSimple_LCAGroupeMembreList->SQL_SELECT_ALL_GROUPE ( $line [0] );
					
					$ACCES_STVA = false;
					foreach ( $aSimple_LCAGroupeMembreList->getList () as $aGroupeLCA ) {
						switch ($aGroupeLCA->getID ()) 
						{
							case '433' : // Base en local
								$ACCES_STVA = true;
								break;
							case '497' : // Base en production
								$ACCES_STVA = true;
								break;
						}
					}
					
					$aModele = new Individu ();
					$aModele->setID ( $line [0] );
					$aModele->setNom ( $line [2] );
					$aModele->setPrenom ( $line [3] );
					$aModele->setTelephone ( $line [4] );
					$aModele->setTelephonePortable ( $line [5] );
					$aModele->setEmail ( $line [6] );
					$aModele->setLogin($line [8] );
					$aModele->setStva($ACCES_STVA);
					if(!array_key_exists($aModele->getID(), $this->alisteIndiv))
					{
						$this->alisteIndiv [$aModele->getID()] = $aModele;
					}
				}
		
				mysqli_free_result($result);
				mysqli_close($linkli2);
			}
		}
	
/*		foreach ($this->alisteIndiv as $key => $aindividu)
		{
			//pour chaque individu on récupère la liste des établissements que l'on stocke dans une table commune
			$linkli3 = mysqli_connect ( $CONFIG_MYSQL_HOSTNAME, $CONFIG_MYSQL_USERNAME, $CONFIG_MYSQL_PASSWORD );
			mysqli_select_db($linkli3,$CONFIG_MYSQL_BASENAME );
			$sql = "call export_ctc_stva_by_indiv('".$aindividu->getLogin()."')";
	
			$result = mysqli_query ( $linkli3, $sql) or die ( mysqli_error ($linkli3)  );
	
			if (mysqli_num_rows ( $result ) > 0)
			{
				$line = mysqli_fetch_array ( $result );
				$tabRefCli = explode('|', $line [8] );
				if (count($tabRefCli) == 0)
					$tabRefCli = $line [7];
				foreach ($tabRefCli as $refCli)
				{
					if(!in_array($refCli, $this->alisteRefCli))
						$this->alisteRefCli [] = $refCli;
				}
			}
			mysqli_free_result($result);
			mysqli_close($linkli3);
		}
*/
		if (count($tabRefCli) >0 )
		{							
			foreach ($tabRefCli as $refCli)
			{
				if(!in_array($refCli, $this->alisteRefCli))
					$this->alisteRefCli [] = $refCli;
			}
		}
	
		//Pour chaque reférence établissement récupérée, on recherche les infos de l'établissement
		if (count($this->alisteRefCli) >0 )
		{							
			foreach ($this->alisteRefCli as $refCli)
			{
					
				$sql = " select * from export_cli_stva_Full where LoginSage = '".$refCli."'" ;
				$result = mysqli_query ($_SESSION['LINK'], $sql, $link) or die ( mysqli_error ($_SESSION['LINK']) );
		
				if (mysqli_num_rows  ( $result ) > 0)
				{
					$line = mysqli_fetch_array ( $result );
					$aModele = new Etablissement ();
					$aModele->setID ( $line [0] );
					$aModele->setRaisonSociale ( $line [2] );
					$aModele->setBureauDistributeur ( $line [5] );
					$aModele->setLoginSage ( $line [1] );
					$this->alisteCli [] = $aModele;
				}
				mysqli_free_result($result);
			}
		}
		
	}	
	
	public function listeAcces($login)
	{
		global $link;
		global $CONFIG_MYSQL_HOSTNAME;
		global $CONFIG_MYSQL_USERNAME;
		global $CONFIG_MYSQL_PASSWORD;
		global $CONFIG_MYSQL_BASENAME;
	
		// Recherche des établissements de l'individu connecté
		$linkli1 = mysqli_connect ( $CONFIG_MYSQL_HOSTNAME, $CONFIG_MYSQL_USERNAME, $CONFIG_MYSQL_PASSWORD );
		mysqli_select_db ( $linkli1 , $CONFIG_MYSQL_BASENAME);
		$sql = "call export_ctc_stva_by_indiv('".$login."')";
	
		$result = mysqli_query ($linkli1, $sql) or die ( mysqli_error ($linkli1)  );
	
		if (mysqli_num_rows ( $result ) > 0)
		{
			$line = mysqli_fetch_array ( $result );
			$indivID = $line [0] ;
			$tabRefCli = explode('|', $line [8] );
			if (count($tabRefCli) == 0)
				$tabRefCli = $line [7];
		}
		mysqli_free_result($result);
		mysqli_close($linkli1);
	

		if (count($tabRefCli) >0 )
		{
			foreach ($tabRefCli as $refCli)
			{
				if(!in_array($refCli, $this->alisteRefCli))
					$this->alisteRefCli [] = $refCli;
			}
		}
	
		//Pour chaque reférence établissement récupérée, on recherche les infos de l'établissement
		if (count($this->alisteRefCli) >0 )
		{
			foreach ($this->alisteRefCli as $refCli)
			{
					
				$sql = " select * from export_cli_stva_Full where LoginSage = '".$refCli."'" ;
				$result = mysqli_query ($_SESSION['LINK'], $sql, $link) or die ( mysqli_error ($_SESSION['LINK']) );

				if (mysqli_num_rows  ( $result ) > 0)
				{
					$line = mysqli_fetch_array ( $result );
					$aModele = new Etablissement ();
					$aModele->setID ( $line [0] );
					
					//recherche des roles de l'individu sur l'établissement
					$aModele->setFonction($this->SQL_SELECT_DA_FC($line [0], $indivID));
					//si on ne trouve pas de rôle dans CISCAR, on recherche le role dans GCR
					if($aModele->getFonction() == "")
						$aModele->setFonction($this->SQL_SELECT_DA_FC($this->SQL_ETABLISSEMENT_GCR($refCli), $this->SQL_INDIV_GCR($login)));
													
					
					$aModele->setRaisonSociale ( $line [2] );
					$aModele->setBureauDistributeur ( $line [5] );
					$aModele->setLoginSage ( $line [1] );
					$this->alisteCli [] = $aModele;
				}
				mysqli_free_result($result);
			}
		}
	
	}
	private function SQL_SELECT_DA_FC($EtablissementID, $IndividuID) {
		$sql = "SELECT fda.Libelle FROM annuaire_role r,annuaire_role_domainactivite rda,annuaire_lva_domainactivite da, annuaire_lva_domainactivite_fonction fda
		WHERE r.RoleID=rda.RoleID AND rda.DomainActiviteID=da.DomainActiviteID AND rda.FonctionDAID=fda.FonctionDAID AND r.IndividuID='%s' and r.EtablissementID='%s'
		LIMIT 1";
	
		$query = sprintf ( $sql, mysqli_real_escape_string ($_SESSION['LINK'], $IndividuID), mysqli_real_escape_string ($_SESSION['LINK'], $EtablissementID)  );
	
		$result = mysqli_query ($_SESSION['LINK'], $query ) or die ( mysqli_error ($_SESSION['LINK']) );
	
		if (mysqli_num_rows  ( $result ) == 1) {
			$line = mysqli_fetch_array ( $result );
			mysqli_free_result ( $result );
			return $line [0];
		} else {
			mysqli_free_result ( $result );
			return "";
		}
	}
	
	private function SQL_INDIV_GCR($Login) {
		$sql = "SELECT IndividuID from annuaire_individu where AnnuaireID = '2' and Login = '%s'";
	
		$query = sprintf ( $sql, mysqli_real_escape_string ($_SESSION['LINK'], $Login));
	
		$result = mysqli_query ($_SESSION['LINK'], $query ) or die ( mysqli_error ($_SESSION['LINK']) );
	
		if (mysqli_num_rows  ( $result ) == 1) {
			$line = mysqli_fetch_array ( $result );
			mysqli_free_result ( $result );
			return $line [0];
		} else {
			mysqli_free_result ( $result );
			return 0;
		}
	}

	private function SQL_ETABLISSEMENT_GCR($LoginSage) {
		$sql = "SELECT EtablissementID from annuaire_etablissement where AnnuaireID = '2' and LoginSage = '%s'";
	
		$query = sprintf ( $sql, mysqli_real_escape_string ($_SESSION['LINK'], $LoginSage));
	
		$result = mysqli_query ($_SESSION['LINK'], $query ) or die ( mysqli_error ($_SESSION['LINK']) );
	
		if (mysqli_num_rows  ( $result ) == 1) {
			$line = mysqli_fetch_array ( $result );
			mysqli_free_result ( $result );
			return $line [0];
		} else {
			mysqli_free_result ( $result );
			return 0;
		}
	}
	
}
?>
