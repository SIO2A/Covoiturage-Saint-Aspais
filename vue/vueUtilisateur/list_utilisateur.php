<div class ="row">
<html>
    <body>
        <div class="container">
            <div class="card-group text-center mb-5">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">
                    <img src=""></h3>
                    </div>
                    <div class="card-footer"><img src="v" width = '10px' height = '10px'></div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">
                    
                        <?php
				foreach($listeUtilisateur as $ligne){
					 echo "<tr>";
							 echo "nom : <td>".$ligne['username']."</td><br>";
							 echo "email : <td>".$ligne['email']."</td><br>";
						   echo "</tr>";
				    }
				    ?>
                    </p>
                    </div>
                    <div class="card-footer">Marque : <br> Matricule : <br> </div>
                </div>
            </div>
</html>
</div>

