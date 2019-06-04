<?php
/**
 * @author Florent DESPIERRES
 * @package portail-gcr
 * @subpackage annuaire
 * @version 1.0.4
 */
class Individu {
	private $ID;
	private $Nom;
	private $Prenom;
	private $Telephone;
	private $TelephonePortable;
	private $Email;
	private $Login;
	private $Stva;
	public function __construct() {
		// Info Generales
		$this->ID = NULL;
		$this->Nom = '';
		$this->Prenom = '';
		$this->Telephone = '';
		$this->TelephonePortable = '';
		$this->Email = '';		
		$this->Login = '';		
		$this->Stva = false;		
	}
	
	// ###
	public function getID() {
		return $this->ID;
	}
	public function getNom() {
		return $this->Nom;
	}
	public function getPrenom() {
		return $this->Prenom;
	}
	public function getTelephone() {
		return $this->Telephone;
	}
	public function getTelephonePortable() {
		return $this->TelephonePortable;
	}
	public function getEmail() {
		return $this->Email;
	}
	public function getLogin() {
		return $this->Login;
	}
	public function getStva() {
		return $this->Stva;
	}
	
	// ###
	public function setID($newValue) {
		$this->ID = $newValue;
	}
	public function setNom($newValue) {
		$this->Nom = $newValue;
	}
	public function setPrenom($newValue) {
		$this->Prenom = $newValue;
	}
	public function setTelephone($newValue) {
		$this->Telephone = $newValue;
	}
	public function setTelephonePortable($newValue) {
		$this->TelephonePortable = $newValue;
	}
	public function setEmail($newValue) {
		$this->Email = $newValue;
	}
	public function setLogin($newValue) {
		$this->Login = $newValue;
	}
	public function setStva($newValue) {
		$this->Stva = $newValue;
	}
	
	// ###

}
?>
