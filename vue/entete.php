<?php 
include 'vueUtilisateur/v_formulaire.php';
?>
<html>
   <head>
   <title>Covoiturage Saint Aspais</title>
      <meta charset="utf-8">
      <link rel="icon" href="https://institutionsaintaspais.fr/wp-content/uploads/2022/04/mini-sa-1.png" sizes="32x32" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      
      <link href="vue/css/styles.css" rel="stylesheet">
      
   </head>
   <?php
   if(isset($_SESSION['email'])){
   ?>
  <body>
   <div class= "container-fluid m-0">		
         <div class="row">
         <div class ="col-3" id="nav">
         <img class="logo2" src="vue/images/logo.png">
			   </div>
            <div class ="col-6" id="nav">
               <p class= "text-center"><a href="index.php" class="text-white">Lycée Saint Aspais</a></p>		   
			   </div>
            <div class="col-3 text-white" id="nav">
               <div class="dropdown">
               <?php
                  if(isset($_SESSION['email'])){
                     echo "".$_SESSION['nom'].""; //'Bonjour,';
                  }
               ?>
                  <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
                  <img src="vue/images/profil2.png">
                     <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                     <?php
                     if(isset($_SESSION['email'])){
                     ?>
                     <li role="presentation"><a class= "nav-link" href='index.php?ctl=utilisateur&action=lister'>Mon Profil</a></li>
                     <li role="presentation"><a class= "nav-link" href='index.php?ctl=vehicule&action=formajouter'>Ajouter un Véhicule</a></li>
                     <?php
                     }
                     ?>
                     <?php
                     if(!isset($_SESSION['email'])){
                     ?>
                     <li role="presentation"><a class= "nav-link" href='index.php?ctl=utilisateur&action=formConnect'>Se connecter</a></li>
                     <?php
                     }
                     ?>
                     <?php
                     if(isset($_SESSION['email'])){
                     ?>
                     <li role="presentation"><a class= "nav-link" href='index.php?ctl=utilisateur&action=deconnect'>Se déconnecter</a></li>
                     <?php
                     }
                     ?>
                  </ul>
               </div>
            </div>
         </div>
   <?php
      }
   ?>
   <div>



<!---------------------------------------------------- RECHERCHE DE TRAJET ------------------------------------------------------->


    <?php
            if(isset($_SESSION['email'])){
         ?>
         <div class="col-5 container " style="margin-top:5%;margin-bottom:10%;">
            <div class="container-fluid mt-3">

               <h1 class="mb-2 text-center">Rechercher un trajet</h1>

               <form>
                  <div class="form-row">
                     <div class="form-group col-sm-6">
                        <label for="myEmail" style="margin-top: 10%;">Ville de départ</label>
                        <input type="email" class="form-control" id="myEmail" placeholder="départ">
                     </div>

                     <div class="form-group col-sm-6">
                        <label for="myPassword" style="margin-top: 10%;">Ville d'arrivée</label>
                        <input type="password" class="form-control" id="myPassword" placeholder="arrivée">
                     </div>
                  </div>


                  <div class="form-group">
                     <label for="inputAddress">Date de départ</label>
                     <input type="date" class="form-control" id="myAddress" placeholder="1234 Main St">
                  </div>


                  <div class="form-row">

                     <div class="form-group col-sm-12">
                        <label for="myState">Passagers</label>
                        <select id="myState" class="form-control">
                           <option selected>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                           <option>6</option>
                           <option>7</option>
                           <option>8</option>
                        </select>
                     </div>

                  </div>


                  <div class="d-grid gap-2 col-3 mx-auto" style="margin-bottom: 10%;">
                     <form action="recherche.php">
                        <button type="submit" class="btn btn-primary ms-auto">Rechercher</button>
                     </form>
                  </div>

               </form>
            </div>
         </div>
         <?php
         }
         ?>


   </body>
</html>