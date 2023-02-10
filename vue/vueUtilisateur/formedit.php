<!-- Modal -->
<form action="index.php?ctl=utilisateur&action=validedit" method='POST'>
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Éditer mon véhicule</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="pmodal">Choisissez la colonne que vous voulez modifier ci-dessous.</p>
          <input type="text" name = "iduser" class="form-control" readonly value=<?php echo $ligne['idvehicule']; ?>>
          <p class="marque">Marque : </p><input type="text" name = "marque" class="form-control" placeholder="<?php echo $ligne['marque']; ?>">
          <p class="matricule">Matricule : </p><input type="text" name = "matricule" class="form-control" placeholder="<?php echo $ligne['matricule']; ?>">
          <p class="nb_personne">Nombre de Places :</p><input type="text" name ="nb_personne" placeholder="<?php echo $ligne['nb_personne']?>">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          <button type="submit" class="btn btn-primary">Confirmer</button>
        </div>
      </div>
    </div>
  </div>
</form>