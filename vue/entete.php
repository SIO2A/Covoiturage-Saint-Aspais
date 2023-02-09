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
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
      
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
                     echo "".$_SESSION['prenom'].""; //'Bonjour,';
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
                     <li role="presentation"><a class= "nav-link" href='index.php?ctl=utilisateur&action=listerUtilisateur'>Mon Profil</a></li>
                     <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Annonces</a>
                        <div class="dropdown-menu">
                           <a class="dropdown-item" href="index.php?ctl=annonce&action=formajouter">Créer une annonce</a>
                           <a class="dropdown-item" href="index.php?ctl=annonce&action=lister">trajets disponibles</a>
                           <a class="dropdown-item" href="index.php?ctl=reservation&action=lister">Mes réservations</a>
                        </div>
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