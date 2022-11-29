<div class ="row">

    <div class="container-fluid mt-3">
	    <div class="d-flex justify-content-center p-1 mb-2">

		    <form action="index.php?ctl=annonce&action=validEdit" method="POST">
			    <div class="form-inline">
			        <label for="Annonce">Annonce:</label></br>
			        <input type="text" name = "idannonce" class="form-control" value=<?php echo $uneAnnonce['idannonce']; ?>>
                    <input type="text" name = "depart" class="form-control" value=<?php echo $uneAnnonce['depart']; ?>>
                    <input type="text" name = "arriver" class="form-control" value=<?php echo $uneAnnonce['arriver']; ?>> 
                    <input type="datetime-local" name = "jour" class="form-control" value=<?php echo $uneAnnonce['jour']; ?>>  
                    <input type="number" name = "nb_place" class="form-control" value=<?php echo $uneAnnonce['nb_place']; ?>>
                    <input type="text" name = "voiture" class="form-control" value=<?php echo $uneAnnonce['voiture']; ?>>
			        <button type="submit" class="btn btn-primary">Modifier</button>
			    </div>
		    </form>
		
	    </div>
    </div>

</div>