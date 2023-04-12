<?php
include 'connectPdo.php';

class DbReservation{

    public static function ajoutReservation($email, $idannonce, $nb_place)
    {
        $sql = "INSERT INTO reservation (idreservation, idannonce, iduser) VALUES (NULL, '$idannonce', (SELECT iduser FROM utilisateurs WHERE email='$email'));
        UPDATE annonce set nb_place = $nb_place-1 WHERE idannonce ='$idannonce' ;";
        connectPdo::getObjPdo()->exec($sql);
    }

    public static function getListeReservation($email)
	{
		$sql = "select annonce.*, reservation.* from annonce, reservation, utilisateurs WHERE reservation.iduser = utilisateurs.iduser AND reservation.idannonce = annonce.idannonce AND utilisateurs.email = '$email';";		
		$objResultat = connectPdo::getObjPdo()->query($sql);
		$result = $objResultat->fetchAll();
		return $result;
	}

    public static function supprimerReservation($idreservation, $idannonce, $nb_place)
	{
		$sql = "DELETE FROM reservation WHERE idreservation = $idreservation;
        UPDATE annonce set nb_place = $nb_place+1 WHERE idannonce = $idannonce ;";
        connectPdo::getObjPdo()->exec($sql);
	}

}

?>