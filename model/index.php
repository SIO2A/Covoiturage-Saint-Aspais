<?php

session_start();
include 'vue/entete.php';
include 'vue/menu.php';	

if(isset($_GET['ctl']))
{
	switch($_GET['ctl']){
			
			  case 'utilisateur' :
				include 'controleur/ctlUtilisateur.php';

				break;

			case 'vehicule' :
				include 'controleur/ctlVehicule.php';

				break;
			
			case 'annonce' :
				include 'controleur/ctlAnnonce.php';

				break;
		}

}


include 'vue/pied.php';


?>        				 
         
