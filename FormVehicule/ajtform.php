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
						<form action="index.php?ctl=vehicule&action=ajout" method ='POST'>
							<div class="form-group text-white">
								<label for="nomVéhicule">Ajouter un véhicule : </label>
								<select class="form-select" aria-label="Default select example">
									<option selected>Selectionner une marque</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>								
								<h1 class="form-control1">
								<h4 class="txtmat">Matricule :</h4>
								<input style='text-align:center;' class="mat" name="tel1" type="tel" pattern="[A-Z]{2}" placeholder="AB" size="2"/> -
   								<input style='text-align:center;' class="mat" name="tel2" type="tel" pattern="[0-9]{3}" placeholder="123" size="3"/> -
   								<input style='text-align:center;' class="mat" name="tel3" type="tel" pattern="[A-Z]{2}" placeholder="DE" size="2"/>
								<h1 class="form-control2" style="height: 22px;"></h1>
								<input type="number" name="nb_personne" class="form-control" placeholder="Nombre de personne :" style="margin-top: 5%;" value="1">
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