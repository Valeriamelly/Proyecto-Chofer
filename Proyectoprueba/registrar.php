<?php

$con = mysqli_connect("localhost","root","","pagina");

if($con) {
    echo "todo correcto";
}else{
    echo "mal";
}

if(isset($_POST['registrarse'])){
    if(strlen($_POST['nombreUsuario']) > 1){
        $nombreUsuario = $_POST['nombreUsuario'];
        $consulta = "INSERT INTO datos(nombre) VALUES ('$nombreUsuario')";
        $resultado = mysqli_query($con, $consulta);
   }
}
?>