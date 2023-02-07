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

	public static function validedit($matricule, $nb_personne, $marque, $id)
	{
		$sql = "UPDATE vehicule SET matricule = '$matricule', nb_personne = '$nb_personne', marque = '$marque' WHERE vehicule.idvehicule = '$id';";	
		echo $sql;
		$objResultat = connectPdo::getObjPdo()->exec($sql);
	}
<<<<<<< Updated upstream
=======

	public static function getRechercherDepart($recherche)
	{
		$sql = "SELECT depart, arriver, jour, nb_place FROM annonce WHERE depart LIKE '%$recherche%'";
		$objResultat = connectPdo::getObjPdo()->query($sql);	
		$result = $objResultat->fetchAll();
		return $result;
	}

	public static function getRechercherArrivee($rechercheArrive)
	{
		$sql = "SELECT depart, arriver, jour, nb_place FROM annonce WHERE arriver LIKE '%$rechercheArrive%'";
		$objResultat = connectPdo::getObjPdo()->query($sql);	
		$result = $objResultat->fetchAll();
		return $result;
	}

	public static function getRechercherDate($rechercheDate)
	{
		$sql = "SELECT * FROM annonce WHERE jour >= '$rechercheDate';";
		$objResultat = connectPdo::getObjPdo()->query($sql);	
		$result = $objResultat->fetchAll();
		return $result;
	}


	public static function ajoutVehicule($matricule, $marque, $nb_personne, $email)
    {
        $sql = "INSERT INTO vehicule (matricule, marque, nb_personne, iduser) VALUES ('$marque', '$matricule', '$nb_personne',
        (SELECT iduser
        FROM utilisateurs
        WHERE email='$email'));";
		echo $sql;
        connectPdo::getObjPdo()->exec($sql);
    }

    public static function getListedbVehicule($email)
	{
		$sql = "select marque, modele from dbvehicule";		
		$objResultat = connectPdo::getObjPdo()->query($sql);
		$result = $objResultat->fetchAll(); 
		return $result;
	}
>>>>>>> Stashed changes
}

?>