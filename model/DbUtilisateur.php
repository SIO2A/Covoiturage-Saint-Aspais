<?php
include 'connectPdo.php';

class DbUtilisateur{
	
    public static function getUser($email,$password)
	{
		$sql = "select email,password from utilisateurs WHERE email='$email' AND password='$password' ";		
		$objResultat = connectPdo::getObjPdo()->query($sql);	
		$result = $objResultat->fetch();
		return $result;
	}

	public static function getListeUtilisateur($email)
	{
		$sql = "select * from utilisateurs WHERE email='$email' ";		
		$objResultat = connectPdo::getObjPdo()->query($sql);
		$result = $objResultat->fetchAll(); 
		return $result;
	}


<<<<<<< Updated upstream
=======
	public static function validedit($marque, $matricule, $nb_personne, $email)
	{
		$sql = "UPDATE vehicule SET marque = '$marque', matricule = '$matricule', nb_personne = '$nb_personne'";			
		$objResultat = connectPdo::getObjPdo()->query($sql);
	}
>>>>>>> Stashed changes
}

?>