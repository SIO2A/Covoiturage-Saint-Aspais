<?php
include './model/DbReservation.php';

$action =$_GET['action'];

switch($action){

            case 'ajout':
                
            $email = $_SESSION['email'];
            DbReservation::ajoutReservation($email);
            header('location: index.php?ctl=annonce&action=lister');

            break;

            case 'lister':


                $id = $_SESSION['iduser'];
                //appel à la base de donnée le modele
                $listeReservation = DbReservation::getListeReservation($id);
                
                //appel à la vue
                include 'vue/vueReservation/list_reservation.php';
                
                break;
        
		}

            

?>
