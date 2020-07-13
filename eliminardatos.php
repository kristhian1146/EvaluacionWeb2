<?php

include('baseDatos.php');

if(isset($_POST["btnactualizar"])){

    $operacionEnBaseDatos = new BaseDatos();

    $nombre=$_POST["eliminarusuario"];

    $consulta = "DELETE FROM usuarios WHERE nombre='$nombre'";

    $resultado=$operacionEnBaseDatos->alterarBaseDatos($consulta);

        
    if($resultado){
      echo("<br>");
      echo("Datos eliminados");
      echo("<br>"); 
    }
    else{
      echo("Error al eliminar");
    }

    print_r($resultado);
    

}
else{
    echo("no");
}












?>