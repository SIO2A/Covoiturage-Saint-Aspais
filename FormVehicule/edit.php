<div class="col-md-6" id="clnModif">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
					  <h5 class="text-white" style="text-align: center;padding: 2%;">Choisissez la colonne que vous voulez modifier ci-dessous.</h5>
                    <div class="col-sm-1">
                    </div>
                    <div class="col-sm-9 text-white">
					<form action="index.php?ctl=utilisateur&action=validedit" method ='POST'>
							<div>
								<div>
									<p hidden class="inpt">Id :
									<input type="text" name = "idvehicule" class="form-control" disabled value=<?php echo $editvehicule['idvehicule']; ?>></p>
								</div>

								<div class="grp">
									<p class="inpt">Marque :</p>
									<input type="text" name = "marque" class="form-control" value=<?php echo $editvehicule['marque']; ?>>
								</div>

								<div class="grp">
									<p class="inpt">Matricule : </p><input type="text" name = "matricule" class="form-control" 
									value=<?php echo $editvehicule['matricule']; ?>>
								</div>

								<div class="grp">
									<p class="inpt">Nombre personne : </p><input type="text" name = "nb_personne" class="form-control" 
									value=<?php echo $editvehicule['nb_personne']; ?>>
								</div>
								
								<div class="btnmodif">
									<button type="submit" class="btn btn-primary" style="margin: 1%;">Modifier</button>
									<button type="submit" class="btn btn-primary" style="margin: 1%;">Retour</button>
								</div>
        					</div>
                    	</div>
                  </div>