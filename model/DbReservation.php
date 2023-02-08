<?php
include 'connectPdo.php';

class DbReservation{

    public static function ajoutReservation($id)
    {
        $sql = "INSERT INTO reservation (idreservation, iduser, idannonce) VALUES (NULL, (SELECT iduser
        FROM utilisateurs
        WHERE iduser='$id'), (SELECT idannonce from annonce WHERE iduser = '$id');";
        connectPdo::getObjPdo()->exec($sql);
    }

    public static function getListeReservation($id)
	{
		$sql = "select annonce.* from annonce, reservation WHERE reservation.iduser = '$id';";		
		$objResultat = connectPdo::getObjPdo()->query($sql);	
		$result = $objResultat->fetchAll();
		return $result;
	}

}

?>