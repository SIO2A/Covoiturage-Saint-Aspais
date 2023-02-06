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
                
                $email = $_SESSION['email'];
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
	}

?>