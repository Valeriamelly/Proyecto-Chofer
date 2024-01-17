<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Rubik+Mono+One&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="css/estilosRegistroChofer.css">
	<title>Proyecto</title>
</head>
<body>
	
	<div  class="container rounded shadow">
		<div class="row align-items-stretch">
			<div class="col bg-white p-5 rounded">
				<div class="text-end">
				</div>
				<div class="text-center">
				 <h1 class="fw-bold">Registrate como Usuario!</h1>
			    </div>
                <br>
				<!-- LOGIN -->
				<form action="registrar.php" method="POST">
					<div class="mb-4">
						<label for="text" class="form-label">Nombre</label>
						<input type="text" class="form-control" placeholder="Ingrese sus nombres" name="nombreUsuario">
					</div>

                    <div class="mb-4">
						<label for="text" class="form-label">Apellidos</label>
						<input type="text" class="form-control" placeholder="Ingrese sus apelldios" name="apellidoUsuario">
					</div>

                    <div class="mb-4">
                        <label for="email" class="form.label">Ingrese su email</label>
                        <input type="email" class="form-control" name="emailUsuario">
					</div>

					<div class="mb-4">
						<label for="password" class="form-label">Contraseña</label>
						<input type="password" class="form-control" name="passwordUsuario">
					</div>

					<div class="mb-4 form-check">
						<input type="checkbox" name="connected" class="form-check-input">
						<label for="connected" class="form-check-label">Guardar inicio de sesión</label>
					</div>

					<div class="d-grid">
						<button class="boton fw-bold" type="button" name="registrarse" >Registrarse</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<?php
	include("registrar.php");
	?>
</body>
</html>