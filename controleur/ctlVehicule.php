<?php
include './model/DbVehicule.php';

$action =$_GET['action'];

switch($action){

            case 'formajouter' :
                include 'FormVehicule/ajtform.php'; 
            break;

            case 'ajout':

            $email = $_SESSION['email'];
            $marque = $_POST['marque'];
            $matricule = $_POST['tel1']."-".$_POST['tel2']."-".$_POST['tel3'];
            $nb_personne = $_POST['nb_personne'];
        
                
            DbVehicule::ajoutVehicule($marque, $matricule, $nb_personne, $email);
            echo "<script>window.location.replace('index.php?ctl=utilisateur&action=listerUtilisateur');</script>";

            break;
		}

?>