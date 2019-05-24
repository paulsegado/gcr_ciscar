<?php
/**
 * @author Florent DESPIERRES
 * @package site-administration
 * @subpackage lca
 * @version 1.0.4
 */
class MembreListe {
	private $membreListe;

	
	function __construct()
	{
		$this->membreListe = array ();
	}
	function membreListe() {
		self::__construct();
	}

	// #################
	function addMembre($aMembre) {
		$this->membreListe [] = $aMembre;
	}
	function removeMembre($i) {
		unset ( $this->membreListe [$i] );
	}
	function getMembreListe() {
		return $this->membreListe;
	}
	function setMembreListe($newValue) {
		$this->membreListe = $newValue;
	}
	function getNbMembre() {
		return count ( $this->membreListe );
	}

	// ###################
	function select_all_membre($i) {
		$result = mysqli_query ($_SESSION['LINK'], "SELECT IndividuID FROM annuaire_lca_groupeindividu WHERE GroupeID=$i" ) or die ( mysqli_error ($_SESSION['LINK']) );

		while ( $line = mysqli_fetch_array  ( $result ) ) {
			$aIndividu = new Individu ();
			$aIndividu->select_individu ( $line [0] );

			$this->membreListe [] = $aIndividu;
		}

		mysqli_free_result  ( $result );
	}
	function select_all_non_membre($i) {
		$result = mysqli_query ($_SESSION['LINK'], "SELECT IndividuID FROM annuaire_individu WHERE IndividuID NOT IN (SELECT IndividuID FROM annuaire_lca_groupeindividu WHERE GroupeID=$i)" ) or die ( mysqli_error ($_SESSION['LINK']) );

		while ( $line = mysqli_fetch_array  ( $result ) ) {
			$aIndividu = new Individu ();
			$aIndividu->select_individu ( $line [0] );

			$this->membreListe [] = $aIndividu;
		}

		mysqli_free_result  ( $result );
	}

	/**
	 * Fonction qui regarde si un individu appartient � un groupe
	 *
	 * @return bool�an
	 */
	function is_member($idGroupe, $idIndividu) {
		$query = sprintf ( "SELECT * FROM annuaire_lca_groupeindividu WHERE `GroupeID`='%s'  AND `IndividuID`='%s'", mysqli_real_escape_string ($_SESSION['LINK'], $idGroupe ), mysqli_real_escape_string ($_SESSION['LINK'], $idIndividu ) );

		$result = mysqli_query ($_SESSION['LINK'], $query ) or die ( mysqli_error ($_SESSION['LINK']) );

		return (mysqli_num_rows ( $result ) == 1);
	}
}

?>