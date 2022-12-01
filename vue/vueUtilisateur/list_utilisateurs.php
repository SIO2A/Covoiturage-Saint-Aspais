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
                  <!--<p><div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      (239) 816-9029
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      (320) 380-4539
                    </div>
                  </div>-->
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
                <!--<hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info">Edit</a></p>-->
                    </div>
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
                        foreach($listeVehicule as $ligne){
                        echo "<tr>";
                        echo "<td>".$ligne['marque']."</td><br>";
                        echo "</tr>";
                        }
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
                        foreach($listeVehicule as $ligne){
                        echo "<tr>";
                        echo "<td>".$ligne['matricule']."</td><br>";
                        echo "</tr>";
                        }
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
                        foreach($listeVehicule as $ligne){
                        echo "<tr>";
                        echo "<td>".$ligne['nb_personne']."</td><br>";
                        echo "</tr>";
                        }
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
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
Éditer mon profil
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>