<?php
/**
 * @author Florent DESPIERRES
 * @package portail-gcr
 * @subpackage securite
 * @version 1.0.4
 */
class SessionSecurite {
	// Attributs SITE
	private $mySiteID;
	private $mySiteName;
	
	// Attributs USER
	private $myUserID;
	private $myUserFullname;
	private $myUserConnected;
	private $myUserGroups;
	public function __construct() {
		$this->mySiteID = 0;
		$this->mySiteName = '';
		
		$this->myUserID = 0;
		$this->myUserFullname = 'Visiteur';
		$this->myUserConnected = false;
		$this->myUserGroups = array ();
	}
	public function initSession() {
		$_SESSION [$this->mySiteName] ['SITE'] ['ID'] = $this->mySiteID;
		$_SESSION [$this->mySiteName] ['SITE'] ['NAME'] = $this->mySiteName;
		$_SESSION [$this->mySiteName] ['USER'] ['ID'] = $this->myUserID;
		$_SESSION [$this->mySiteName] ['USER'] ['FULLNAME'] = $this->myUserFullname;
		$_SESSION [$this->mySiteName] ['USER'] ['CONNECTED'] = $this->myUserConnected;
		$_SESSION [$this->mySiteName] ['USER'] ['GROUPS'] = $this->myUserGroups;
		$_SESSION ['GCR'] ['AVANCED_SEARCH'] ['keywork1'] = '';
		$_SESSION ['GCR'] ['AVANCED_SEARCH'] ['critere'] = 'ou';
		$_SESSION ['GCR'] ['AVANCED_SEARCH'] ['keywork2'] = '';
		$_SESSION ['GCR'] ['AVANCED_SEARCH'] ['catType'] = '';
		$_SESSION ['GCR'] ['AVANCED_SEARCH'] ['catTheme'] = '';
		$_SESSION ['GCR'] ['AVANCED_SEARCH'] ['dateDebut'] = '';
		$_SESSION ['GCR'] ['AVANCED_SEARCH'] ['dateFin'] = '';
		$_SESSION ['GCR'] ['AVANCED_SEARCH'] ['periode'] = '0';
	}
	
	// ###
	public function getSiteID() {
		return $this->mySiteID;
	}
	public function getSiteName() {
		return $this->mySiteName;
	}
	public function getUserID() {
		return $this->myUserID;
	}
	public function getUserFullname() {
		return $this->myUserFullname;
	}
	public function getConnected() {
		return $this->myUserConnected;
	}
	public function getUserGroups() {
		return $this->myUserGroups;
	}
	public function setSiteID($newValue) {
		$this->mySiteID = $newValue;
	}
	public function setSiteName($newValue) {
		$this->mySiteName = $newValue;
	}
	public function setUserID($newValue) {
		$this->myUserID = $newValue;
	}
	public function setUserFullname($newValue) {
		$this->myUserFullname = $newValue;
	}
	public function setUserConnected($newValue) {
		$this->myUserConnected = $newValue;
	}
	public function setUserGroups($newValue) {
		$this->myUserGroups = $newValue;
	}
	
	// ###
	public function SQL_checkUser($aUserName, $aPassword) {
		// Vérification si l'utilisateur existe
		$sql = "SELECT i.IndividuID FROM annuaire_individu i WHERE UPPER(Login)=UPPER('%s') AND UPPER(Password)=UPPER('%s')";
		
		$query = sprintf ( $sql, mysqli_real_escape_string ($_SESSION['LINK'], $aUserName ), mysqli_real_escape_string ($_SESSION['LINK'], $aPassword ) );
		
		$result = mysqli_query ($_SESSION['LINK'], $query ) or die ( mysqli_error ($_SESSION['LINK']) );
		// L'utilisateur existe
		if (mysqli_num_rows  ( $result ) > 0) {
			$line = mysqli_fetch_array ( $result );
			mysqli_free_result ( $result );
			$this->setUserID ( $line [0] );
			return '0';
		} else {
			// utilisateur inconnu
			return '1';
		}
	}
	public function SQL_checkUserInfo($aUserName, $aPassword) {
		// Vérification si l'utilisateur existe
		$sql = "SELECT i.IndividuID, i.Nom, i.Prenom, i.EnSommeil FROM annuaire_individu i, annuaire_lca_groupeindividu g WHERE i.IndividuID=g.IndividuID AND i.AnnuaireID='%s' AND g.GroupeID='%s' AND UPPER(Login)=UPPER('%s') AND UPPER(Password)=UPPER('%s')";
		
		$query = sprintf ( $sql, mysqli_real_escape_string ($_SESSION['LINK'], $_SESSION ['SITE'] ['ID'] != '7' ? $_SESSION ['SITE'] ['ID'] : '2' ), mysqli_real_escape_string ($_SESSION['LINK'], $_SESSION ['SITE'] ['LCA_GROUP_ID'] ), mysqli_real_escape_string ($_SESSION['LINK'], $aUserName ), mysqli_real_escape_string ($_SESSION['LINK'], $aPassword ) );
		
		$result = mysqli_query ($_SESSION['LINK'], $query ) or die ( mysqli_error ($_SESSION['LINK']) );
		// L'utilisateur existe
		if (mysqli_num_rows  ( $result ) > 0) {
			$line = mysqli_fetch_array ( $result );
			mysqli_free_result ( $result );
			
			if ($line [3] == '1') {
				// Compte en sommeil
				$this->__construct ();
				$this->initSession ();
				return '2';
			} else {
				// Vérification si concession non en sommeil
				$sql2 = "SELECT count(*) FROM annuaire_role r, annuaire_etablissement e WHERE IndividuID = '%s' AND r.EtablissementID = e.EtablissementID AND e.EnSommeil = '0'";
				$query2 = sprintf ( $sql2, mysqli_real_escape_string ($_SESSION['LINK'], $line [0] ) );
				$result2 = mysqli_query ($_SESSION['LINK'], $query2 ) or die ( mysqli_error ($_SESSION['LINK']) );
				$line2 = mysqli_fetch_array ( $result2 );
				mysqli_free_result ( $result2 );
				
				// Vérification si l'utilisateur appartient au groupe "Utilisateurs sans Concession"
				$sql3 = "SELECT GroupeID FROM annuaire_lca_groupeindividu WHERE IndividuID='%s' AND GroupeID='14'";
				$query3 = sprintf ( $sql3, mysqli_real_escape_string ($_SESSION['LINK'], $line [0] ) );
				$result3 = mysqli_query ($_SESSION['LINK'], $query3 ) or die ( mysqli_error ($_SESSION['LINK']) );
				
				if ($line2 [0] > 0 || mysqli_num_rows  ( $result3 ) > 0) {
					mysqli_free_result ( $result3 );
					
					$this->setUserID ( $line [0] );
					$this->setUserFullname ( $line [2] . ' ' . $line [1] );
					$this->setUserConnected ( true );
					
					// Chargement des Groupes LCA USER
					$aTab = array ();
					$this->setUserGroups ( $aTab );
					
					$sql4 = "SELECT GroupeID FROM annuaire_lca_groupeindividu WHERE IndividuID='%s'";
					$query4 = sprintf ( $sql4, mysqli_real_escape_string ($_SESSION['LINK'], $line [0] ) );
					$result4 = mysqli_query ($_SESSION['LINK'], $query4 ) or die ( mysqli_error ($_SESSION['LINK']) );
					$aTab [] = '0';
					while ( $line4 = mysqli_fetch_array ( $result4 ) ) {
						$aTab [] = $line4 [0];
					}
					mysqli_free_result ( $result4 );
					
					$this->setUserGroups ( $aTab );
					
					$this->initSession ();
					return '0';
				} else {
					// Compte en sommeil
					$this->__construct ();
					$this->initSession ();
					return '2';
				}
			}
		} else {
			// utilisateur inconnu
			$this->__construct ();
			$this->initSession ();
			return '1';
		}
	}
}
?>