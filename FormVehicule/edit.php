<div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
					  <p class="pmodal" style="text-center">Choisissez la colonne que vous voulez modifier ci-dessous.</p>
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-9 text-white">
					<form action="index.php?ctl=utilisateur&action=validedit" method ='POST'>
							<div>
							<input type="text" name = "idvehicule" class="form-control" value=<?php echo $editvehicule['idvehicule']; ?>>
							<input type="text" name = "marque" class="form-control" value=<?php echo $editvehicule['marque']; ?>>
								<p class="marque">Matricule : </p><input type="text" name = "matricule" class="form-control" value=<?php
								echo $editvehicule['matricule']; ?>>
								<p class="marque">Nombre personne : </p><input type="text" name = "nb_personne" class="form-control" value=<?php
								echo $editvehicule['nb_personne']; ?>>
								<button type="submit" class="btn btn-primary">Modifier</button>
        					</div>
                    	</div>
                  </div>