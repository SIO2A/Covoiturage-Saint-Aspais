<?php
   //$db = new PDO('mysql:host=mysql-ainaralijaona.alwaysdata.net; dbname=ainaralijaona_covoiturage; charset=utf8', '252604_login', 'Savigny77');
   //$annonce = $db->query('SELECT * FROM annonce ORDER BY idannonce DESC');
   //if(isset($_GET['d']) AND !empty($_GET['d']) AND isset($_GET['a']) AND !empty($_GET['a']))
   //{
      //$recherche = htmlspecialchars($_GET['d'], $_GET['a']);
      //$annonce = $db->query('SELECT depart, arriver, jour, nb_place FROM annonce WHERE depart LIKE "%'.$recherche.'%" ORDER BY idannonce DESC');
   //}
?>
        <div class="col-5 container " style="margin-top:5%;margin-bottom:10%;">
            <div class="container-fluid mt-3">

               <h1 class="mb-2 text-center" style="color: white;">Rechercher un trajet</h1>

               <form action="index.php?ctl=utilisateur&action=validRecherche" method="post">
                  <div class="form-row">
                     <div class="form-group col-sm-6">
                        <label for="query" style="margin-top: 10%; color: white;">Ville de départ</label>
                        <input type="text" class="form-control" name='d' id="depart" placeholder="Départ de ...">
                     </div>

                     <div class="form-group col-sm-6">
                        <label for="myPassword" style="margin-top: 10%; color: white;">Ville d'arrivée</label>
                        <input type="text" class="form-control" name="a" id="arrivee" placeholder="Arrivée à ...">
                     </div>
                  </div>


                  <div class="form-group">
                     <label for="query" style="color: white;">Date de départ</label>
                     <input type="date" class="form-control" name="date" id="date" placeholder="../../...">
                  </div>


                  <div class="d-grid gap-2 col-3 mx-auto" style="margin-bottom: 10%;">
                     <form>
                        <button type="submit" class="btn btn-primary ms-auto" name="Rechercher" value="Rechercher">Rechercher</button>
                     </form>
                  </div>

               </form>



<!------------------------------------------------- RESULTAT DE LA RECHERCHE ----------------------------------------------------->
           


               <?php
                  if(isset($_POST['d']) OR isset($_POST['a']) OR isset($_POST['date']))
                 
                  {
                    
               ?>

                  <section class="afficher_annonce">
                     <?php
                        //if ($Search->rowCount() > 0)
                        //{
                        foreach ($Search As $ligne)
                        {
                     ?>
                        <h2 style="color: white;"><?php echo "".$ligne['depart'].'  '.$ligne['arriver'].'  '. $ligne['jour'].'  '.$ligne['nb_place']; ?></h2>
                     <?php
                        }
                        //}
                        //else
                        //{
                     ?>
                        <!--<h2>Aucun trajet n'a été trouvé</h2>-->
               <?php
                  }
               ?>
                  </section>
                  
                  
            </div>
         </div>

