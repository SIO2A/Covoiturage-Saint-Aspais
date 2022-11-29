<?php
include 'connectPdo.php';

class DbAnnonce{

    public static function ajoutAnnonce($depart, $arriver, $jour, $nb_place, $voiture)
    {
        $sql = "INSERT INTO annonce (idannonce, depart, arriver, jour, nb_place, voiture) VALUES (NULL, '$depart', '$arriver', '$jour', '$nb_place', '$voiture');";
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

    public static function getAnnonce($id)
	{
		$sql = "select * from annonce where idannonce = $id";
		$objResultat = connectPdo::getObjPdo()->query($sql);	
		$result = $objResultat->fetch();
		return $result;
	}

}

?>