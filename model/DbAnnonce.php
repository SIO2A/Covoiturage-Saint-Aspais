<?php
include 'connectPdo.php';

class DbAnnonce{

    public static function ajoutAnnonce($depart, $arriver, $jour, $nb_place, $voiture, $email)
    {
        $sql = "INSERT INTO annonce (idannonce, depart, arriver, jour, nb_place, voiture, iduser) VALUES (NULL, '$depart', '$arriver', '$jour', '$nb_place', '$voiture', (SELECT iduser
        FROM utilisateurs
        WHERE email='$email'));";
        connectPdo::getObjPdo()->exec($sql);
    }

    public static function getListeAnnonce()
	{
		$sql = "select * from annonce ";		
		$objResultat = connectPdo::getObjPdo()->query($sql);	
		$result = $objResultat->fetchAll();
		return $result;
	}

    public static function supprimerAnnonce($id)
    {
        $sql = "DELETE FROM annonce WHERE idannonce = $id";
        connectPdo::getObjPdo()->exec($sql);
    }

    public static function modifierAnnonce($id, $depart, $arriver, $jour, $nb_place, $voiture)
	{
		$sql = "update service set depart = '$depart', arriver = '$arriver', jour = '$jour', nb_place = '$nb_place', voiture = '$voiture'   where annonce.idannonce = $id";
		connectPdo::getObjPdo()->exec($sql);	
	}


}

?>