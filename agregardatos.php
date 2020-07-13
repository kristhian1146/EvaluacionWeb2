<?php

include('baseDatos.php');

if(isset($_POST["btnenviar"])){

    $nombre=$_POST["nombreusuario"];
    $correo=$_POST["emailusuario"];
    $contrasena=$_POST["pasUsuario"];
    

    $operacionEnBaseDatos = new BaseDatos();
   
    $consulta= "INSERT INTO usuarios(nombre, correo, password) VALUES ('$nombre','$correo','$contrasena')";
 
    $resultado=$operacionEnBaseDatos->alterarBaseDatos($consulta);

    if($resultado){
        echo("<br>");
        echo("Se han agregago con exito los datos a la base de datos");
        echo("<br>");
    }else{
        echo("error en la transaccion");
    }

  


}else{
    echo("no ha precionado el boton");
}






?> 






