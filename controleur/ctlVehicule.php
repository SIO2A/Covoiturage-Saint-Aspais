<?php
include './model/DbVehicule.php';

$action =$_GET['action'];

switch($action){

            case 'formajouter' :
                $email = $_SESSION['email'];
                $listeVehicule = DbVehicule::getListeVehicule($email);
                include 'FormVehicule/ajtform.php'; 
            break;

            case 'ajout':

            $email = $_SESSION['email'];
            $marque = $_POST['marque'];
            $matricule = $_POST['tel1'];
            $nb_personne = $_POST['nb_personne'];
        
                
            DbVehicule::ajoutVehicule($marque, $matricule, $nb_personne, $email);
            echo "<script>window.location.replace('index.php?ctl=utilisateur&action=listerUtilisateur');</script>";

            break;
        

            case 'validedit':
                $email = $_SESSION['email'];
                $id = $_POST['iduser'];
                $marque = $_POST['marque'];
                $matricule = $_POST['matricule'];
                $nb_personne = $_POST['nb_personne'];
                DbUtilisateur::validedit($marque, $matricule, $nb_personne, $id, $email);
                $listeUtilisateur = DbUtilisateur::getListeUtilisateur($email);
                $listeVehicule = DbUtilisateur::getListeVehicule($email);
                include 'vue/vueUtilisateur/list_utilisateurs.php';

            break;
		}

?>      