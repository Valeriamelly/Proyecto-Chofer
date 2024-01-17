<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="css/estilosRegistro.css">
	<title>Proyecto</title>
</head>
<body>
        <!-- Botones de login -->
    <div class="container rounded">
        <div class="row">
         <h1 class="fw-bold text-center py-5">¿Cómo desea registrarse?</h1>
        </div>
        <div class="row">
            <div class="col">
                <div class="chofer">
                    <a href="registroChofer.php">
                        <button type="button" class="btn btn-outline-warning w-75 ">
                            <div class="row align-items-center">
						        <div class="col-md-2 d-none d-md-block">
							        <img src="img/car-solid-24.png" alt="">
						        </div>
						        <div class="fw-bold col-12 col-md-10 text-center">
							         Chofer
						        </div>
					        </div>
                        </button> 
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="usuario">
                    <a href="registroUsuario.php">
                        <button type="button" class="btn btn-outline-warning w-75 ">
                            <div class="row align-items-center">
                                <div class="col-md-2 d-none d-md-block">
							        <img src="img/user-regular-24.png" width="32" alt="">
						        </div>
					            <div class="fw-bold col-12 col-md-10 text-center">
							        Usuario
						        </div>
                            </div>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>