<?php
include '../model/conection.php';
include '../controller/list.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasos</title>

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
        <div class="col-md-3"></div>
        <div class="col-md-6 d-flex align-items-center justify-content-center">
          <div class="card w-100 border-0 bg-transparent">
            <div class="card-header p-2 border-0 bg-dark text-institutional"><h4><?php echo $person[0]['name'] ?></h4></div>
            <div class="card-body p-0 glass" style="border-radius: 0; box-shadow: none;">
              <table class="table table-sm bg-transparent table-striped table-borderless" style="border-radius: 0; box-shadow: none;">
                <thead>
                  <tr>
                    <th scope="col">Paso a seguir</th>
                    <th scope="col text-center" style="width: 15%">Cumple</th>
                  </tr>
                </thead>
                <tbody>
                  <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
                  <tr>
                      <td scope="row">Mojarse las manos</td>
                      <td><input name="step1" class="form-control option bg-transparent border-0" value="<?php echo $steps[0]['Mojarse las manos'] ?>"></td>
                    </tr>
                    <tr>
                      <td scope="row">Aplicar jabón</td>
                      <td><input name="step2" class="form-control option bg-transparent border-0" value="<?php echo $steps[0]['Aplicar jabón'] ?>"></td>
                    </tr>
                    <tr>
                      <td scope="row">Frotar palmas entre sí</td>
                      <td><input name="step3" class="form-control option bg-transparent border-0" value="<?php echo $steps[0]['Frotar palmas entre sí'] ?>"></td>
                    </tr>
                    <tr>
                      <td scope="row">Frotar palma contra el dorso de los dedos</td>
                      <td><input name="step4" class="form-control option bg-transparent border-0" value="<?php echo $steps[0]['Frotar palma contra el dorso'] ?>"></td>
                    </tr>
                    <tr>
                      <td scope="row">Frotar palmas con dedos entrelazados</td>
                      <td><input name="step5" class="form-control option bg-transparent border-0" value="<?php echo $steps[0]['Frotar palmas con dedos entrelazados'] ?>"></td>
                    </tr>
                    <tr>
                      <td scope="row">Frotar dorso de los dedos</td>
                      <td><input name="step6" class="form-control option bg-transparent border-0" value="<?php echo $steps[0]['Frotar dorso de los dedos'] ?>"></td>
                    </tr>
                    <tr>
                      <td scope="row">Rodear pulgar con la mano contraria</td>
                      <td><input name="step7" class="form-control option bg-transparent border-0" value="<?php echo $steps[0]['Rodear pulgar con la mano contraria'] ?>"></td>
                    </tr>
                    <tr>
                      <td scope="row">Frotar punta de los dedos</td>
                      <td><input name="step8" class="form-control option bg-transparent border-0" value="<?php echo $steps[0]['Frotar punta de los dedos'] ?>"></td>
                    </tr>
                    <tr>
                      <td scope="row">Enjuagar manos</td>
                      <td><input name="step9" class="form-control option bg-transparent border-0" value="<?php echo $steps[0]['Enjuagar manos'] ?>"></td>
                    </tr>
                    <tr>
                      <td scope="row">Secar manos</td>
                      <td><input name="step10" class="form-control option bg-transparent border-0" value="<?php echo $steps[0]['Enjuagar manos'] ?>"></td>
                    </tr>
                    <tr>
                      <td scope="row">Cerrar grifo</td>
                      <td><input name="step11" class="form-control option bg-transparent border-0" value="<?php echo $steps[0]['Cerrar grifo'] ?>"></td>
                    </tr>
                    <tr>
                      <td scope="row">Resultado</td>
                      <td class="d-flex align-items-center"><input type="number" id="result" name="result" class="w-50 p-0 form-control bg-transparent form-control-sm border-0">%</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="card-footer bg-white p-2 border-top-0 d-flex align-items-center justify-content-between flex-row">
                <a href="list.php" class="btn btn-sm btn-dark text-institutional"><i class="fa-solid fa-arrow-left"></i> Volver</a>
                <button type="submit" name="savelist" class="btn btn-sm btn-dark text-institutional"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
                <button type="submit" name="clearlist" class="btn btn-sm btn-dark text-institutional"><i class="fa-solid fa-broom"></i> Limpiar</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
    <script src="js/person.js"></script> 
</body>
</html>