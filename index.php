<!DOCTYPE html>
<html lang="en">
   <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     <title>Formularios</title>
  </head>
   <body>
        <header>

            <h1 class= "text-center mt-5">REGISTRATE EN <br>
            NUESTRA WEB </h1>
                        
        </header>

        <main>
            <div class="container">
                 <div class="row justify-content-center">
                    <div class="col-4">

                        <form action="agregardatos.php" method= "POST" class = "mt-5" >
                           <div class="form-group">
                                <label for="NombreUsuario">Nombre usuario</label>
                                <input type="text" class="form-control" id="nombreusuario" name="nombreusuario">
                            </div>
                                    
                            <div class="form-group">
                                <label for="EmailUsuario">Correo electronico</label>
                                <input type="text" class="form-control" id="emailusuario" name="emailusuario">
                            </div>
                               
                            <div class="form-group">
                                <label for="ContraseñaUsuario">Contraseña</label>
                                <input type="password" class="form-control" id="pasUsuario" name="pasUsuario">
                                <br>
                                <button type="submit" class="btn btn-success btn-lg btn-block" name= "btnenviar">Agregar</button>
                            </div>  
                        </form>
                        <br>
                        <br>

                                
                       <h4>Consultar registro</h4>
                       <form action="consultardatos.php" method= "POST" class= >
                            <div class="form-group">
                                <label for="buscarusuario">Buscar usuario</label>
                                <input type="text" class="form-control" id="buscarusuario" name="buscarusuario">
                                <br>
                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="btnbuscar">Buscar</button>
                            </div>
                        </form>   
                        <br>
                        <br>

                        <h4>Eliminar registro</h4 class>
                        <form action="eliminardatos.php" method= "POST">
                            <div class="form-group">
                                <label for="eliminarusuario">Eliminar usuario</label>
                                <input type="text" class="form-control" id="eliminarusuario" name="eliminarusuario">
                                <br>
                                <button type="submit" class="btn btn-danger btn-lg btn-block" name="btnactualizar" >Actualizar</button>
                            </div>
                       </form>

                                

                    </div>

                 </div>

            </div>

        </main>














     <footer>

     </footer>
            












        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>