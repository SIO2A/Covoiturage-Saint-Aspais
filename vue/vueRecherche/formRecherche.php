<style>
    body{
    background-color: #eee;
}
.main{
    display: flex;
    justify-content: center;
    height: 100vh;
    align-items: center;
    background-color: #f6f6f6;
}
.one{
    width: 270px;
    background-color: #000;
    justify-content: center;
    align-items: center;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.pic1{
    position: relative;
    right: 22px;
    top: 23px;
}
.pic2{
    position: relative;
    left: 25px;
    top: 17px;
}
.pic3{
    position: relative;
    right: 13px;
    bottom: 18px;
}
.pic4{
    position: relative;
    left: 14px;
    bottom: 21px;
}
.project{
    text-align: center;
    font-size: 22px;
    font-weight: 600;
    color: #fd4040;
}
.quote{
    text-align: center;
    font-size: 12px;
    font-weight: 400;
    color: #fff;

}



.two{
    width: 270px;
    background-color: #fff;
    justify-content: center;
    align-items: center;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);    
}
.star{
    font-size: 20px !important;
    color: #b1b4b7;
}
.dot{
    font-size: 20px !important;
    color: #b1b4b7;
}
.round{
    border-radius: 50%;
    background-color: #eee;
    width: 33px;
    height: 33px;
    margin-bottom: -10px;
    align-items: center;
    justify-content: center;
}
.name{
    font-size: 22px;
    color: #464e56;
    font-weight: 600;
    text-align: left;
}
.quote2{
     font-size: 12px;
     font-weight: 500;
     color: #868e94;
     text-align: left;
}
.img1{
    position: relative;
    left: 20px;
    z-index: 28;
    border: 0.5px solid #6ebde4;
    border-radius: 50%;
    background-color: #bcd8e6;
}
.img2{
    position: relative;
    left: 10px;
    z-index: 29;
    border: 0.5px solid #6ebde4;
    border-radius: 50%;
    background-color: #bcd8e6;
}
.img3{
    z-index: 30;  
    border: 0.5px solid #6ebde4;
    border-radius: 50%; 
    background-color: #bcd8e6;
}
.task{
     color: #727475;
}
.date{
     color: #727475;
}
.imgfix{
    align-content: center;
    justify-content: center;
    align-items: center;
    text-align: center;
    position: relative;
    top: 2px;
}
</style>




<div class="col-5 container " style="margin-top:5%;margin-bottom:10%;">
            <div class="container-fluid mt-3">

               <h1 class="mb-2 text-center">Rechercher un trajet</h1>

               <form action="index.php?ctl=utilisateur&action=validRecherche" method="post">
                  <div class="form-row">
                     <div class="form-group col-sm-6">
                        <label for="query" style="margin-top: 10%;">Ville de départ</label>
                        <input type="text" class="form-control" name='d' id="depart" placeholder="Départ de ...">
                     </div>

                     <div class="form-group col-sm-6">
                        <label for="myPassword" style="margin-top: 10%;">Ville d'arrivée</label>
                        <input type="text" class="form-control" name="a" id="arrivee" placeholder="Arrivée à ...">
                     </div>
                  </div>


                  <div class="form-group">
                     <label for="query">Date de départ</label>
                     <input type="datetime-local" class="form-control" name="date" id="date" placeholder="./../...">
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
                                                echo "nombre de place : ".$ligne['nb_place']."<br>";

                                                
                                                ?>
                                          </h3>
                                          <div class="d-flex justify-content-end">
                                             <img src="https://img.icons8.com/bubbles/50/000000/short-curly-hair-girl-musical-notes.png" width="20" class="img1" />
                                             <img src="https://img.icons8.com/bubbles/50/000000/girl-and-playing-card.png" width="20" class="img2" />
                                             <img src="https://img.icons8.com/bubbles/50/000000/short-hair-girl-question-mark.png" width="20" class="img3" />
                                          </div>
                                       </div>

                                       <a class="btn btn-primary" data-mdb-toggle="offcanvas" href='index.php?ctl=reservation&action=ajout&idannonce=<?=$ligne['idannonce']?>&nb_place=<?=$ligne['nb_place']?>' role="button"
                                       aria-controls="offcanvasExample">Accepter
                                       </a>
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