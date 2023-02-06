<?php
include 'connectPdo.php';

class DbVehicule{

    public static function ajoutVehicule($matricule, $marque, $nb_personne, $email)
    {
        $sql = "INSERT INTO vehicule (idvehicule, matricule, marque, nb_personne, iduser) VALUES (NULL, '$marque', '$matricule', '$nb_personne',
        (SELECT iduser
        FROM utilisateurs
        WHERE email='$email'));";
        connectPdo::getObjPdo()->exec($sql);
    }

    public static function getListeVehicule($email)
	{
		$sql = "select marque, modele from dbvehicule";		
		$objResultat = connectPdo::getObjPdo()->query($sql);
		$result = $objResultat->fetchAll(); 
		return $result;
	}


}

?>