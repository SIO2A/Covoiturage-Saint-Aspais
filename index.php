<?php

session_start();
include 'vue/entete.php';
include 'vue/menu.php';	

if(isset($_GET['ctl']))
{
	switch($_GET['ctl']){
			
			  case 'utilisateur' :
				include 'controleur/ctlUtilisateur.php';
<<<<<<< Updated upstream

				break;

			case 'vehicule' :
				include 'controleur/ctlVehicule.php';

				break;	
=======
				break;
			
			case 'annonce' :
				include 'controleur/ctlAnnonce.php';

				break;
			case 'reservation' :
				include 'controleur/ctlReservation.php';
>>>>>>> Stashed changes
		}

}


include 'vue/pied.php';


?>        				 
         
