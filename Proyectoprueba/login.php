<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Rubik+Mono+One&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="css/estilosLogin.css">
	<title>Proyecto</title>
	<!-- Degradado del fondo-->
	<style>
		.bg{
			background-image: url(img/BK.jpg);
			background-position: center center;	
			background-size: 110% 100%;
		}
	</style>
</head>
<body>
	
	<div  class="container rounded shadow">
		<div class="row align-items-stretch">
		   <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">
		   </div>
			<div class="col bg-white p-5 rounded">
				<div class="text-end">
					
				</div>
				<div class="texto">
				 <h1 class="fw-bold">Hi,<br> Driver!</h1>
			    </div>
				<!-- LOGIN -->
				<form method="post">
					<div class="mb-4">
						<label for="email" class="form-label">Correo electrónico</label>
						<input type="email" class="form-control" name="email">
					</div>

					<div class="mb-4">
						<label for="password" class="form-label">Contraseña</label>
						<input type="password" class="form-control" name="password">
					</div>

					<div class="mb-4 form-check">
						<input type="checkbox" name="connected" class="form-check-input">
						<label for="connected" class="form-check-label">Guardar inicio de sesión</label>
					</div>

					<div class="d-grid">
						<button class="boton fw-bold" type="button" >Iniciar Sesión</button>
					</div>

					<div class="my-3">
						<span>¿No tienes cuenta? <a href="registro.php" class="fw-bold">Registrate</a></span><br>
						<span class="fw-bold"><a href="#">¿Olvidaste tu contraseña?</a></span><br>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>