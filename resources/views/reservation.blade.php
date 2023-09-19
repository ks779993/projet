<!doctype html>
<html lang="en">
  <head>
  	<title>Page Reservation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset('css/style2.css')}}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section" style="font-weight: bolder;"> Formulaire de réservation</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last" style="background-color: blue;">
							<div class="text w-100">
								<h4 style="color: white;">TransReservation vous rémercie pour votre confiance</h4>
								<p>Restez chez vous et réserver en un clic</p>
								<a href="register" class="btn btn-white btn-outline-white">infos</a>
							</div>
			            </div>
						<div class="login-wrap p-4 p-lg-5">
			      	        <div class="d-flex">
			      		        <div class="w-100">
			      			        <h5 class="mb-4" style="font-weight: bold; color:black">Faite votre réservation</h5>
			      		        </div>
			      	        </div>
			
							<form method="POST" action="{{ route('test') }}" class="signin-form">
							@csrf
			      		<div class="form-group mb-3">
			      			<label class="label" for="number">Combien de place voulez-réserver?</label>
							<input type="number" name="nombre_place" class="form-control" placeholder="Nombre de place" required>
							<input type="hidden" value="{{ $car->id }}" name="car_id">
			      		</div>
						
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary submit px-3">Réserver</button>
		            </div>
		          </form>
		        </div>
		      </div>
			</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

