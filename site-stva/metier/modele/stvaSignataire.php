<?php
/**
 * @author Philippe GERRMAIN
 * @package site-stva
 * @subpackage 
 * @version 1.0.4
 */
class stvaSignataire {
	private $IndividuID;
	private $Civilite;
	private $Nom;
	private $Prenom;
	private $Login;
	private $RolePrinc;
	private $Rattachements;
	private $AnnuaireID;
	private $Acces_Stva;
	
	public function __construct() {
	// Info Generales
	$this->IndividuID = NULL;
	$this->Civilite = '';
	$this->Nom = '';
	$this->Prenom = '';
	$this->Login = '';
	$this->RolePrinc = '';
	$this->Rattachements = '';
	$this->Acces_Stva = false;
	}
	
	// ###
	public function getIndividuID() {
		return $this->IndividuID;
	}
	public function getidCivilite() {
		return $this->Civilite;
	}
	public function getNom() {
		return $this->Nom;
	}
	public function getPrenom() {
		return $this->Prenom;
	}
	public function getLogin() {
		return $this->Login;
	}
	public function getRolePrinc() {
		return $this->RolePrinc;
	}
	public function getRattachements() {
		return $this->Rattachements;
	}
	public function getAnnuaireID() {
		return $this->AnnuaireID;
	}
	public function getcivilite() {
		switch ($this->Civilite) {
			case 0 :
				return 'M.';
				break;
			case 1 :
				return 'M.';
				break;
			case 2 :
				return 'Mme';
				break;
			case 3 :
				return 'Mme';
				break;
			default :
				return ' ';
		}
	}
	public function getAcces_Stva() {
		return $this->Acces_Stva;
	}
	
	// ###
	public function setIndividuID($newValue) {
		$this->ID = $newValue;
	}
	public function setCivilite($newValue) {
		$this->Civilite = $newValue;
	}
	public function setNom($newValue) {
		$this->Nom = $newValue;
	}
	public function setPrenom($newValue) {
		$this->Prenom = $newValue;
	}
	public function setLogin($newValue) {
		$this->Login = $newValue;
	}
	public function setRolePrinc($newValue) {
		$this->RolePrinc = $newValue;
	}
	public function setRattachements($newValue) {
		$this->Rattachements = $newValue;
	}
	public function setAnnuaireID($newValue) {
		$this->AnnuaireID = $newValue;
	}
	
	// ###
	public function SQL_SELECT_ANNUAIRE_STVA($Login) {
		
		$sql = "call export_ctc_stva_by_indiv('".$Login."')"; 
		$result = mysqli_query($_SESSION['LINKPS'], $sql) or die ( mysqli_error ($_SESSION['LINKPS']) );
					
		if (mysqli_num_rows($result ) > 0) {
			$line = mysqli_fetch_array ( $result );

			$this->IndividuID = $line [0];
			$this->Civilite = $line [1];
			$this->Nom = $line [2];
			$this->Prenom = $line [3];
			$this->RolePrinc = $line [7];
			$this->Rattachements = $line [8];
			$this->Login = $Login;
			
			$lrattachements = explode("|", $this->Rattachements);
			//si le rôle principale n'est pas renseigné
			if ($this->RolePrinc == '')
				$this->RolePrinc = $lrattachements[0];
			//si le role principale n'exista pas la liste des rattachements
			$trouve = false;
			foreach($lrattachements as $rat) {
				if ($rat == $this->RolePrinc)
					$trouve = true;
			}
			if (!$trouve)
				$this->RolePrinc = $lrattachements[0];
				
		} else {
			$this->IndividuID = null;
		}
					
		mysqli_free_result ($result );
		
	}

	public function SQL_SELECT_ACCES_STVA($SignataireID,$AnnuaireID,$Groupe) {
		
		
		$query = sprintf ( "SELECT alg.GroupeID FROM annuaire_individu ai, annuaire_lca_groupeindividu alg
				 WHERE ai.Login = '%s' and ai.AnnuaireID = '%s' and ai.IndividuID = alg.IndividuID and alg.GroupeID in (%s)",
				mysqli_real_escape_string ($_SESSION['LINK'], $SignataireID ),
				mysqli_real_escape_string ($_SESSION['LINK'], $AnnuaireID ),
				mysqli_real_escape_string ($_SESSION['LINK'], $Groupe )
		);

		$result = mysqli_query($_SESSION['LINK'], $query) or die ( mysqli_error ($_SESSION['LINK']) );

		if (mysqli_num_rows ( $result ) > 0) {
			$line = mysqli_fetch_array ( $result );
			$this->Acces_Stva = true;
		} else {
			$this->Acces_Stva = false;
		}
	
		mysqli_free_result ( $result );
	}
	
	public function mefSignature() {
	
	// base64 encodes the header json
	$encoded_header = base64_encode('{"alg": "HS512","typ": "JWT"}');
	$iss = 'CISCAR';
	if(isset($_GET['annuaire']) && $_GET['annuaire'] == 2 )
	{
			$iss = 'GCR';
	}
	// base64 encodes the payload json
	$encoded_payload = base64_encode('{
			"iat": "'.time().'",
			"iss": "'.$iss.'",
			"aud": "https://boxstva-client.stva.com",
			"sub": "'.$this->getIndividuID().'",
			"family_name": "'.utf8_encode($this->getNom()).'",
			"given_name": "'.utf8_encode($this->getPrenom()).'",
			"ordering_party": "'.$this->getRolePrinc().'",
			"entities": "'.$this->getRattachements().'"
		}');
	
	// base64 strings are concatenated to one that looks like this
	$header_payload = $encoded_header . '.' . $encoded_payload;
	
	//Setting the secret key environnement de Pre-PROD
	//"aud": "http://box-gcr-pp.stva.com.s3-website-eu-west-1.amazonaws.com",
	//$secret_key = '+XgiH7AFTCCUSbuFyMiqYThoStVW7etx32VRhSAKvCrqZPK2rZ4r1gtXoBlZHEismbALi8KKdmdRd3MnoH/19nfwIOV0+tX8blaUy/cQLxCQmfL8BlWuDutdegs72js2zvGpbS1YxXgjWhd4RjsVPn0HSL7q3EBJBORwAELOpI4GZuqSCn1n/R/veZiq7giAv7Gxi+J1A+EOTXtOzZSiQa/tYvcm6xaPTNPzP9HdgxAeKMN4FV44dG+Q66wD14WYOBAo1IPHKvAdWSS53uwRVAb7HDDfflVLcib851LG7fLC6JXaUmdK0iTEU3qJV32wzlF5phax9t16GdJfmCqAxJDMHx0iIVtZYajZPHnPYzXoHHCSilHmPoPZZkmKjlC12L1m87QKVySqP9K3J9fORW+Tn3QIkIcvl+GA4vqomk7/eVP8NT9MwIOvV9pjMJl+cGIoIYYQZmqQ3+Pa7d1NjV0bx6I9WlJNAKYxC5zFvVzqlx5j/H5Wq91WLOrZZNGaE/kygrLmyCYWQiCNzNbwvEsAgCPUgGy0o9o2itVEL4zwzRWPrNDp4fivhMA87QzbzFkDvX9B6PBb1R/3EFy1uSAk22ovyK/fMmN6GRTNeDQdGRi/U64Ys9mA+UjzBi22gy8ZIgFfcnCfJIinMO5PCh2BJ2AQq3kKxe4AMEQmeno=';

	//Setting the secret key environnement de PRODUCTION
	//"aud": "https://boxstva-client.stva.com",
	$secret_key = 'Rn2ZvoU+dTOtpE/BOUEuMaf65G2l7lA1nDJV56hmLcl17Y6F2EPCSIrKRCCVWc/Zda7m5Bp/g9BYUIRVTvgmtlcghGRBtswGFwMjq0Ye4QVtmpa8qZBI0sTHGjnbwTvmqZmf1v2TAcJWsAIJsRcoX0IchGvhaEKUMnLAXAUQT4mBhSdUY7H/ZckUthciFveKtxvmKMfjOLJNqciD8fVapuzQBqSRzFhTifVceLG1EmouRnoE5vg3RERwEhpVqFmt0fo+VCOinAR0nHG5Nq0XWXUTmGGsbOcDljLxz+oLAN28cffMc+6OfxkRX3L5ILId3pHMvV+MJns9FCZSA6+u87s3K31fLARCvVP6aVXXRn+M6CGBLxjQtbGopeQCHBRaliNxGr5LJIAkLFusBeG7jqIpGToxqy+D87tiYrg1zG2iRFTkKtvMJRZxdEkCnwJx4jOmuVboKCdtAqCQNX9e4I6jKp+Gs8edSbbV+17TY422DqV+sOXIxMA6udZ1vWm9eDE25dVVoRfiQXC7U/BLEGkV3ocs5du15nD1+NEODqlrVW+2WceQ1yQcSF4hRsU7Wk1pJ+aMRvFkx6PV028nSLExxTTPkxw07BmmDU5W9E6KbLB1/NFtseSyzgxTacGlFEVxmS+Zq846NLcNTrwQuM15Bub4zAy1N8Qv2NeQs4I=';
	
	// Creating the signature, a hash with the s512 algorithm and the secret key. The signature is also base64 encoded.
	$signature = base64_encode(hash_hmac('sha512', $header_payload, $secret_key, true));
	//$signature = hash_hmac('sha512', $header_payload, $secret_key, true);
	
	// Creating the JWT token by concatenating the signature with the header and payload, that looks like this:
	$jwt_token = $header_payload . '.' . $signature;
	
	//listing the resulted  JWT
	//echo $jwt_token;
	//print $jwt_token;
	return $jwt_token;
	
	//$decoded_jwt = explode(".",$jwt_token);
	//$decoded_header = base64_decode($decoded_jwt[0]);
	//$decoded_payload = base64_decode($decoded_jwt[1]);
	//$decoded_signature = base64_decode($decoded_jwt[2]);
	//echo $decoded_signature;
	
	//die();


//		$data = 'my data';
		
//		//Crée une nouvelle clé privée et publique
//		$new_key_pair = openssl_pkey_new(array(
//				"private_key_bits" => 1024,
//				"private_key_type" => OPENSSL_KEYTYPE_RSA,
//		));
//		openssl_pkey_export($new_key_pair, $private_key_pem);
		
//		$details = openssl_pkey_get_details($new_key_pair);
//		$public_key_pem = $details['key'];
		
//		//Création de la signature
//		openssl_sign($data, $signature, $private_key_pem, OPENSSL_ALGO_SHA1);
		
//		//Sauvegarde pour utilisation ultérieur
//		file_put_contents('private_key.pem', $private_key_pem);
//		file_put_contents('public_key.pem', $public_key_pem);
//		file_put_contents('signature.dat', $signature);
//		print $private_key_pem;
//		//Vérification de la signature
//		$r = openssl_verify($data, $signature, $public_key_pem, "sha1WithRSAEncryption");
//		var_dump($r);
	}
	
	
	public function mefUrl($userid) {
//		$this->mefSignature();
//		die();
		$clefAutologin = 'ecommerce104';
		$actionMode = 'autoLogin';
		$stamp = date ( 'Y-m-d H:i:s' ); // yyyy-mm-dd hh:mm:ss GMT
		$stampWEB = date ( 'Y-m-d%20H:i:s' );
		$loginType = '4';
		$signature = MD5 ( $loginType . $userid . $stamp . $clefAutologin ); // MD5 32 CHARS
		$URL = 'http://www2.stva-box.com/#/login';
	
		$params = '?action=' . $actionMode;
		$params .= '&idIndiv=' . $userid;
		$params .= '&loginType=' . $loginType;
		$params .= '&stamp=' . $stampWEB;
		$params .= '&signature=' . $signature;
	
		$URL = 'http://box-gcr-pp.stva.com.s3-website-eu-west-1.amazonaws.com/#/login?token=';
		$signature = $this->mefSignature();
		return $signature;
	}
	
}
?>
