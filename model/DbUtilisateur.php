<?php
include 'connectPdo.php';

class DbUtilisateur{
	
    public static function getUser($email,$password)
	{
		$sql = "select email,password,nom from utilisateurs WHERE email='$email' AND password='$password'";		
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
		$sql = "select marque, matricule, nb_personne from utilisateurs, vehicule WHERE vehicule.iduser = utilisateurs.iduser AND email='$email' ";		
		$objResultat = connectPdo::getObjPdo()->query($sql);
		$result = $objResultat->fetchAll(); 
		return $result;
	}

	public static function getRechercherDepart($recherche)
	{
		$sql = "SELECT depart, arriver, jour, nb_place FROM annonce WHERE depart LIKE '%$recherche%';";
		$objResultat = connectPdo::getObjPdo()->query($sql);	
		$result = $objResultat->fetchAll();
		return $result;
	}

	public static function getRechercherArrivee($rechercheArrive)
	{
		$sql = "SELECT depart, arriver, jour, nb_place FROM annonce WHERE arriver LIKE '%$rechercheArrive%';";
		$objResultat = connectPdo::getObjPdo()->query($sql);	
		$result = $objResultat->fetchAll();
		return $result;
	}

	public static function getRechercherDate($rechercheDate)
	{
		$sql = "SELECT depart, arriver, jour, nb_place FROM annonce WHERE jour >= $rechercheDate AND jour LIKE '%$rechercheDate%';";
		$objResultat = connectPdo::getObjPdo()->query($sql);	
		$result = $objResultat->fetchAll();
		return $result;
	}
	
}

?>