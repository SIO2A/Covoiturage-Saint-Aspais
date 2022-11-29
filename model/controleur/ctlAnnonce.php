<?php
include './model/DbAnnonce.php';

$action =$_GET['action'];

switch($action){

            case 'formajouter' :
                include 'FormAnnonce/index.html'; 
            break;

            case 'ajout':

            $depart = $_POST['depart'];
            $arriver = $_POST['arriver'];
            $jour = $_POST['jour'];
            $nb_place = $_POST['nb_place'];
            $voiture = $_POST['voiture'];
        
                
            DbAnnonce::ajoutAnnonce($depart, $arriver, $jour, $nb_place, $voiture);
            header('location: index.php?ctl=annonce&action=lister');

            break;
        
            case 'lister':
                //appel à la base de donnée le modele
                $listeAnnonce = DbAnnonce::getListeAnnonce();
                
                //appel à la vue
                include 'vue/vueAnnonce/list_annonce.php';
                
                break;

            case 'supprimer':
                DbAnnonce::supprimerAnnonce($_GET['idannonce']);
                $listeAnnonce = DbAnnonce::getListeAnnonce();
                
                //appel à la vue
                include 'vue/vueAnnonce/list_annonce.php';

            case 'formEdit':
                $id = $_GET['idannonce'];
                $uneAnnonce = DbAnnonce::getAnnonce($id);

                //appel à la vue du formulaire de modification
                include 'vue/vueAnnonce/formEditAnnonce.php';
            break;

            case 'validEdit':
                $id = $_POST['idannonce'];
                $depart = $_POST['depart'];
                $arriver = $_POST['arriver'];
                $jour = $_POST['jour'];
                $nb_place = $_POST['nb_place'];
                $voiture = $_POST['voiture'];
                DbAnnonce::modifierAnnonce($id, $depart, $arriver, $jour, $nb_place, $voiture);

                //Appel à la vue de listage service
                $listeAnnonce = DbAnnonce::getListeAnnonce();
                
                //appel à la vue
                include 'vue/vueAnnonce/list_annonce.php';
            break;
		}

?>