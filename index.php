<?php
if($_POST){
    header('Location:inicio.php'); 
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Iniciar secion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body bgcolor="4931F9">

<div class="container">
    <div class="row">

    <div class="col-md-4">
        
    </div>

        <div class="col-md-4">
            <br><br><br><br><br><br>
            <div class="card">
                <div class="card-header" align="Center">
                    Iniciar secion 
                </div>
            <div class="card-body">
<form name="Formulario" netlify method="POST">
                <div class="form-group">
                  <label for="">Usuario:</label>
                  <input type="text" class="form-control" name="Usuario" placeholder="Escribe tu ususario">
                </div>

                <div class="form-group">
                  <label for="">Contraseña:</label>
                  <input type="password" class="form-control" id="Contraseña" name="Contraseña" placeholder="Escrive tu contraseña">
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
</form>    
            </div>
            
                </div>
            </div>
        </div>
        
    </div>
</div>

  </body>
</html>