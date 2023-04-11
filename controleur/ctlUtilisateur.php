<?php
include './model/DbUtilisateur.php';

$action =$_GET['action'];

switch($action){
		
			case 'formConnect':
			 //appel à la base de donnée le modele
			 
			 //appel à la vue
			 include 'vue/vueUtilisateur/v_formulaire.php';
			 
			 break;		
             
             case 'validConnect':
             //appel à la base de donnée le modele
             if(isset($_POST['email'])&& isset($_POST['password']))
             {
                $email = $_POST['email'];
                $password = $_POST['password'];
                //$nom = $_POST['nom'];

                $user = DbUtilisateur::getUser($email,$password);
                
                if(is_array($user))
                {
                    $_SESSION['prenom'] = $user['prenom'];
                    $_SESSION['email']=$user['email'];
                    $_SESSION['iduser'] = $user['iduser'];
                    header('Location: index.php');
                }
                else
                {
                    echo "<script>window.location.replace('index.php?msg=Email ou mot de passe incorrect');</script>";
                }
            }
			 //appel à la vue
			 
			 break;		

             case 'deconnect':
                //appel à la base de donnée le modele
                session_unset();
                //unset($_SESSION['login']);
                session_destroy();
                header('Location: index.php');
                //appel à la vue
                
            break;

            case 'listerUtilisateur':
                //appel à la base de donnée le model
                $email = $_SESSION['email'];
                $listeUtilisateur = DbUtilisateur::getListeUtilisateur($email);
                $listeVehicule = DbUtilisateur::getListeVehicule($email);
                
                //appel à la vue
                include 'vue/vueUtilisateur/list_utilisateurs.php';
                break;

                case 'validRecherche':
                            
                    if(isset($_POST['d']) AND !empty($_POST['d']))
                    {
                        $recherche = htmlspecialchars($_POST['d']);
                        $Search = DbUtilisateur::getRechercherDepart($recherche);
                        include 'vue/vueRecherche/formRecherche.php';
                        break;
                        
                    }
                    
                    if (isset($_POST['a']) AND !empty($_POST['a']))
                    {
                        $rechercheArrive = htmlspecialchars($_POST['a']);
                        $Search = DbUtilisateur::getRechercherArrivee($rechercheArrive);
                        include 'vue/vueRecherche/formRecherche.php';
                        break;
                    }
    
                    if (isset($_POST['date']) AND !empty($_POST['date']))
                    {
                        echo $_POST['date'];
                        $rechercheDate = htmlspecialchars($_POST['date']);
                        $Search = DbUtilisateur::getRechercherDate($rechercheDate);
                        include 'vue/vueRecherche/formRecherche.php';
                        break;
                    }   
                    
                break;

                case 'formajouter' :
                    $email = $_SESSION['email'];
                    $listeVehicule = DbUtilisateur::getListedbVehicule($email);
                    include 'FormVehicule/ajtform.php'; 
                break;

                case 'formedit' :
                    $email = $_SESSION['email'];
                    $idvehicule = $_GET['idvehicule'];
                    $editvehicule = DbUtilisateur::getVehicule($idvehicule);
                    $listeVehicule = DbUtilisateur::getListedbVehicule($email);
                    include 'FormVehicule/edit.php'; 
                break;
    
                case 'ajout':
    
                $email = $_SESSION['email'];
                $marque = $_POST['marque'];
                $matricule = $_POST['tel1'];
                $nb_personne = $_POST['nb_personne'];
            
                    
                DbUtilisateur::ajoutVehicule($marque, $matricule, $nb_personne, $email);
                echo "<script>window.location.replace('index.php?ctl=utilisateur&action=listerUtilisateur');</script>";
    
                break;

                case 'validedit':
                    $email = $_SESSION['email'];
                    $idvehicule = $_POST['idvehicule'];
                    $marque = $_POST['marque'];
                    $matricule = $_POST['matricule'];
                    $nb_personne = $_POST['nb_personne'];
                    DbUtilisateur::validedit($marque, $matricule, $nb_personne, $idvehicule);
                    $listeVehicule = DbUtilisateur::getListeVehicule($email);
                    $listeUtilisateur = DbUtilisateur::getListeUtilisateur($email);
                    include 'vue/vueUtilisateur/list_utilisateurs.php';
                    
                break;
	}

?>