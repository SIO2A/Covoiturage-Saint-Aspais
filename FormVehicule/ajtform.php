<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="FormVehicule/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="booking-bg"></div>
						<form action="index.php?ctl=utilisateur&action=ajout" method ='POST'>
							<div class="form-group text-white">
								<label for="nomVéhicule">Ajouter un véhicule : </label>
								<input type="text" list="form-select" class="form-control" placeholder="Selectionnez votre véhicule" name="marque">
								<datalist id="form-select" autocomplete="on" required name="marque">
									<?php 
									foreach($listeVehicule as $ligne)
									{
										echo "<option value=".$ligne['marque']."-".$ligne['modele'].">".$ligne['modele']."</option>";
									}
									?>
								</datalist>								
								<h4 class="txtmat text-white">Matricule :</h4>
								<input style="text-align:center;background-color: #1a1a1d;color: white;" class="mat" name="tel1" type="tel" pattern="[A-Z]{2}-[0-9]{3}-[A-Z]{2}" placeholder="AB-123-CD" size="9" required ="required">
								<h1 class="form-control2" style="height: 22px;"></h1>
								<input type="number" name="nb_personne" class="form-control" placeholder="Nombre de personne :" style="margin-top: 5%;" value="1" min="1" max="5" required>
								<button type="submit" class="btn btn-primary">Confirmer</button>
							 </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>

</body>

</html>