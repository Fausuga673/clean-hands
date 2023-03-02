<?php
include '../model/conection.php';
include '../model/select.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>

    <link rel="stylesheet" href="css/style.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- ICONS -->
    <script src="https://kit.fontawesome.com/a7ae13901f.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <div class="container-fluid w-100" style="height:100vh">
      <div class="row h-100">
        <div class="col-md-4"></div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="card w-100 border-0 bg-transparent">
            <div class="card-header p-2 border-0 bg-dark text-institutional"><h4>Resultados</h4></div>
            <div class="card-body p-0 glass" style="border-radius: 0; box-shadow: none;">
                <table class="table bg-transparent table-striped table-borderless" style="border-radius: 0; box-shadow: none;">
                    <thead>
                      <tr>
                        <th scope="col">Área</th>
                        <th scope="col text-center" style="width: 16%">Promedio</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($avarage as $avg) {?>
                      <tr>
                        <td><?php echo $avg['area_name'] ?></td>
                        <td><?php echo $avg['avarage'] ?>%</td>
                      </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer bg-white p-2 border-top-0 d-flex align-items-center justify-content-between flex-row">
              <a href="list.php" class="btn btn-sm btn-dark text-institutional"><i class="fa-solid fa-arrow-left"></i> Volver</a>
              <a href="../controller/excel.php" class="btn btn-sm btn-dark text-institutional"><i class="fa-solid fa-file-excel"></i> Exportar a excel</a>
            </div>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
</body>
</html>