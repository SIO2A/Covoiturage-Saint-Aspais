         <div class="col-5 container " style="margin-top:5%;margin-bottom:10%;">
            <div class="container-fluid mt-3">

               <h1 class="mb-2 text-center">Rechercher un trajet</h1>

               <form action="index.php?ctl=utilisateur&action=validRecherche" method="post">
                  <div class="form-row">
                     <div class="form-group col-sm-6">
                        <label for="query" style="margin-top: 10%;">Ville de départ</label>
                        <input type="search" class="form-control" name='d' id="depart" placeholder="Départ de ...">
                     </div>

                     <div class="form-group col-sm-6">
                        <label for="myPassword" style="margin-top: 10%;">Ville d'arrivée</label>
                        <input type="search" class="form-control" name="a" id="arrivee" placeholder="Arrivée à ...">
                     </div>
                  </div>


                  <div class="form-group">
                     <label for="query">Date de départ</label>
                     <input type="search" class="form-control" name="date" id="date" placeholder="./../...">
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
                        <!--<h2><//?php echo "".$ligne['depart'].'  '.$ligne['arriver'].'  '. $ligne['jour'].'  '.$ligne['nb_place']; ?></h2>-->
                        <div class="col-md-4">

                           <div class="">
                              <div class="two">
                                 <div class="d-flex justify-content-end px-3 pt-1"><i class="mdi mdi-star-outline pr-1 star"></i><i class="mdi mdi-dots-horizontal dot"></i></div>
                                 
                                    <div class="px-3"><div class="round"><img src="https://img.icons8.com/bubbles/100/000000/girl-with-glasses-art-palette.png" width="23" /></div></div>
                                       <div class="px-3 pt-3">
                                          <h3 class="name">
                                             <?php
                                             echo "lieu de depart : ".$ligne['depart']."<br>";
                                             echo "lieu d'arrivé : ".$ligne['arriver']."<br>";
                                             echo "jour : ".$ligne['jour']."<br>";

                                             ?>
                                          </h3>
                                          <div class="d-flex justify-content-end">
                                          <img src="https://img.icons8.com/bubbles/50/000000/short-curly-hair-girl-musical-notes.png" width="20" class="img1" />
                                          <img src="https://img.icons8.com/bubbles/50/000000/girl-and-playing-card.png" width="20" class="img2" />
                                          <img src="https://img.icons8.com/bubbles/50/000000/short-hair-girl-question-mark.png" width="20" class="img3" />
                                       </div>
                                    </div>

                                 </div>
                              </div>
                           </div>
                        
                        </div>
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
