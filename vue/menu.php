<!---------------------------------------------------- RECHERCHE DE TRAJET ------------------------------------------------------->

<body>
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