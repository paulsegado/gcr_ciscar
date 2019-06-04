<?php
/**
 * @author Philippe GERMAIN
 * @package portail-stva
 * @subpackage annuaire
 * @version 1.0.4
 */
class Etablissement {
	private $ID;
	private $RaisonSociale;
	private $BureauDistributeur;
	private $LoginSage;
	private $Fonction;
	
	public function __construct() {
		$this->ID = NULL;
		$this->RaisonSociale = '';
		$this->BureauDistributeur = '';
		$this->LoginSage = '';
		$this->Fonction = '';
	}
	
	// ###
	public function getID() {
		return $this->ID;
	}
	public function getRaisonSociale() {
		return $this->RaisonSociale;
	}
	public function getBureauDistributeur() {
		return $this->BureauDistributeur;
	}
	public function getLoginSage() {
		return $this->LoginSage;
	}
	public function getFonction() {
		return $this->Fonction;
	}
	
	// ###
	public function setID($newValue) {
		$this->ID = $newValue;
	}
	public function setRaisonSociale($newValue) {
		$this->RaisonSociale = $newValue;
	}
	public function setBureauDistributeur($newValue) {
		$this->BureauDistributeur = $newValue;
	}
	public function setLoginSage($newValue) {
		$this->LoginSage = $newValue;
	}
	public function setFonction($newValue) {
		$this->Fonction = $newValue;
	}
	
	// ###

}

?>