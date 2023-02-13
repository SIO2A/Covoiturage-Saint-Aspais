<style>
body {
  background-image: url('https://zupimages.net/up/22/47/0ksr.jpg');
}
</style>
<div class="container">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="vue/images/profile3.jpg" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php foreach($listeUtilisateur as $ligne){ echo "<tr>"; echo "<p style='color: white;'><td>".$ligne['prenom']."</td></p>"; echo "</tr>"; } ?></h4>
                      <!--<p><p class="text-secondary mb-1">Full Stack Developer</p>
                      <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                      <button class="btn btn-primary">Follow</button>
                      <button class="btn btn-outline-primary">Message</button></p>-->
                      <form action="index.php?ctl=utilisateur&action=formajouter" method ="post">
                        <button class="btn btn-primary" type="submit" id="ajtv">Ajouter un véhicule</button>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
          </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0" id="NP">Nom / Prénom : </h6>
                    </div>
                    <div class="col-sm-9 text-white">
                      <?php
                      foreach($listeUtilisateur as $ligne){
                      echo "<tr>";
                      echo "<td>".$ligne['nom']," ".$ligne['prenom']."</td><br>";
                      echo "</tr>";
                      }
                      ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0" id="mail">Email : </h6>
                    </div>
                    <div class="col-sm-9 text-white">
                      <?php
                      foreach($listeUtilisateur as $ligne){
                      echo "<tr>";
                      echo "<td>".$ligne['email']."</td><br>";
                      echo "</tr>";
                      }
                      ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3 text-white">
                      <h6 class="mb-0">Adresse :</h6>
                    </div>
                    <div class="col-sm-9 text-white">
                      <?php
                      foreach($listeUtilisateur as $ligne){
                      echo "<tr>";
                      echo "<td>".$ligne['adresse'].", ".$ligne['ville']."</td><br>";
                      echo "</tr>";
                      }
                      ?>
                    </div>
                  </div>
                    </div>
                  </div>
                  
                  <?php
                  foreach($listeVehicule as $ligne){ ?>

                  <div class="container">
                  <div class="main-body">
                          <div class="col-md-13">
                            <div class="card mb-3">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-sm-3">
                                    <h6 class="mb-0" id="NP">Véhicule n°<?php echo $ligne['idvehicule'] ;
                                    echo 
                                      "<a href=index.php?ctl=utilisateur&action=formedit&idvehicule=".$ligne['idvehicule'].">
                                      <img src='./vue/images/editer.png' style='width:13%; margin-left:1%; margin-bottom:5%;'></a><br>";
                                    ?> 
                                    </h6>
                                </div>
                                <div class="col-mb-8">
                                <div class="card mb-3" id="2">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-sm-3">
                                        <p class=" text-white mb-0" id="NP">Marque :</p>
                                      </div>
                                      <div class="text-white col-sm-9">
                                      <?php  
                                      echo "<tr>";
                                      echo "<td>".$ligne['marque']."</td><br>";
                                      echo "</tr>";
                                      ?>
                                      </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                      <div class="col-sm-3">
                                        <p class=" text-white mb-0" id="NP2">Matricule :</p>
                                      </div>
                                      <div class=" text-white col-sm-9">
                                      <?php
                                      echo "<tr>";
                                      echo "<td>".$ligne['matricule']."</td><br>";
                                      ?>
                                      </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                      <div class="col-sm-3">
                                        <p class=" text-white mb-0" id="NP3">Place :</p>
                                      </div>
                                      <div class="text-white col-sm-9">
                                      <?php
                                      echo "<tr>";
                                      echo "<td>".$ligne['nb_personne']."</td><br>";
                                      echo "</tr>";
                                      ?>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>

              <?php
              }
              ?>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
