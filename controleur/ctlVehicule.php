<?php
include './model/DbVehicule.php';

$action =$_GET['action'];

switch($action){

            case 'formajouter' :
                include 'FormVehicule/index.html'; 
            break;

            case 'ajout':

            $email = $_SESSION['email'];
            $marque = $_POST['marque'];
            $matricule = $_POST['matricule'];
            $nb_personne = $_POST['nb_personne'];
        
                
            DbVehicule::ajoutVehicule($marque, $matricule, $nb_personne, $email);
            header('location: index.php?ctl=utilisateur&action=lister');

            break;
		}

?>