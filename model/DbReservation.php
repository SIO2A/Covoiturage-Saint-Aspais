<?php
include 'connectPdo.php';

class DbReservation{

    public static function ajoutReservation($email)
    {
        $sql = "INSERT INTO reservation (idreservation, iduser) VALUES (NULL, (SELECT iduser
        FROM utilisateurs
        WHERE email='$email'));";
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