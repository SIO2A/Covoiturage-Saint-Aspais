<?php
include 'connectPdo.php';

class DbUtilisateur{
	
    public static function getUser($email,$password)
	{
		$sql = "select email,password,prenom from utilisateurs WHERE email='$email' AND password='$password'";		
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

	public static function getListeVehicule($email)
	{
		$sql = $sql = "select marque, matricule, nb_personne from utilisateurs, vehicule WHERE vehicule.iduser = utilisateurs.iduser AND email='$email' ";		
		$objResultat = connectPdo::getObjPdo()->query($sql);
		$result = $objResultat->fetchAll(); 
		return $result;
	}

	public static function validedit($marque, $matricule, $nb_personne, $idvehicule, $iduser, $email)
	{
		$sql = "UPDATE vehicule SET marque = '$marque', matricule = '$matricule', nb_personne = '$nb_personne' WHERE idvehicule = '$idvehicule' AND iduser = '$iduser'";			
		$objResultat = connectPdo::getObjPdo()->query($sql);
	}
}

?>