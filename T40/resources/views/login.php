<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- own CSS  -->
	<link rel="stylesheet" href="assets/css/styles.css">
	<!-- Bootstrap  -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<title>Login</title>
</head>

<body>
	<div class="container">
		<section class="form-wrapper">
			<div class="limiter">
				<div class="card card-authentication1 mx-auto my-5">
					<div class="card-body">
						<div class="card-title text-uppercase text-center py-3 bb">Iniciar sesión</div>
						<form id="login" action="/comprueba" method="post">
							<div class="form-group">
								<div class="position-relative has-icon-right">
									<input class="form-control" id="inputFinal" type="text" name="name"
										placeholder="Nombre" required>
									<div class="form-control-position">
										<i class="icon-user"></i>
									</div>
								</div>
								<i class="fa fa-envelope" aria-hidden="true"></i>
								</span>
							</div>

							<div class="form-group mt-3" data-validate="Se necesita contraseña">
								<div class="position-relative has-icon-right">
									<input class="form-control" type="password" name="pass" placeholder="Password"
										required>
									<div class="form-control-position">
										<i class="icon-lock"></i>
									</div>
								</div>
								<i class="fa fa-lock" aria-hidden="true"></i>
								</span>
							</div>

							<div class="text-center mt-3">
								<button class="btn btn-light btn-block waves-effect waves-light" type="submit">
									Comprobar
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- JS  -->
	<script type="text/javascript" src="assets/js/main.js"></script>
	<!-- bootstrap JS  -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
		</script>
</body>

</html>