<?php

include('baseDatos.php');

if(isset($_POST["btnbuscar"])){

    $operacionEnBaseDatos = new BaseDatos();

    $nombre=$_POST["buscarusuario"];

    $consulta="SELECT nombre, correo, password FROM usuarios WHERE nombre='$nombre'";

    $resultado=$operacionEnBaseDatos->consultarEnBaseDatos($consulta);

    print_r($resultado);



}
else{
    echo("no ha precionado el boton");
}

?> 
