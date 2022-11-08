<?php
include 'connectPdo.php';

class DbVehicule{

    public static function ajoutVehicule($matricule, $marque, $nb_personne, $email)
    {
        $sql = "INSERT INTO vehicule (idvehicule, matricule, marque, nb_personne, iduser) VALUES (NULL, '$matricule', '$marque', '$nb_personne', 
        (SELECT iduser
        FROM utilisateurs
        WHERE email='$email'));";        
        connectPdo::getObjPdo()->exec($sql);
    }

    public static function getListeVehicule($email)
	{
		$sql = "select marque, matricule from utilisateurs, vehicule WHERE vehicule.iduser = utilisateurs.iduser AND email='$email' ";		
		$objResultat = connectPdo::getObjPdo()->query($sql);
		$result = $objResultat->fetchAll(); 
		return $result;
	}
}

?>