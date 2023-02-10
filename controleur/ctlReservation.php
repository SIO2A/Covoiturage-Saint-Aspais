<?php
include './model/DbReservation.php';

$action =$_GET['action'];

switch($action){

            case 'ajout':
                
            $email = $_SESSION['email'];
            $idannonce = $_GET['idannonce'];
            $nb_place = $_GET['nb_place'];
            DbReservation::ajoutReservation($email, $idannonce, $nb_place);
            header('location: index.php?ctl=annonce&action=lister');

            break;

            case 'lister':


                $email = $_SESSION['email'];
                //appel à la base de donnée le modele
                $listeReservation = DbReservation::getListeReservation($email);
                
                //appel à la vue
                include 'vue/vueReservation/list_reservation.php';
                
                break;
        
		}

            

?>
