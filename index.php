<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="view/css/style.css">

</head>
<body>
    <div class="container-fluid" style="height:100vh">
        <div class="row h-100" >
          <div class="col-md-4"></div>
          <div class="col-md-4 d-flex justify-content-center align-items-center">
            <div class="card glass w-100">
              <div class="card-header border-0 bg-transparent d-flex justify-content-center">
                <img src="view/img/logo.png" alt="" class="img-fluid" width="150px">
              </div>
              <div class="card-body pt-1 pb-1 h-25">
                <div class="alert alert-danger m-0 p-2 d-none" id="alert" role="alert">
                </div>
              </div>
              <div class="card-footer border-0 bg-transparent">
                <form method="post" action="index.php">
                  <div class="form-group">
                    <input name="email" type="email" class="focus-off form-control glass" id="email" aria-describedby="emailHelp" placeholder="Correo">
                  </div>
                  <div class="form-group">
                    <input name="password" type="password" class="focus-off form-control glass" id="password" placeholder="Contraseña">
                  </div>
                  <button name="login" id="login" type="submit" class="btn btn-dark w-100 text-institutional">Ingresar</button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4"></div>
        </div>
    </div>    
    <script src="view/js/login.js"></script>
</body>
</html>

<?php
include 'model/conection.php';
include 'controller/login.php';
?>