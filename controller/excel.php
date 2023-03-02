<?php
include '../model/conection.php';
include '../model/select.php';

header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename= productos.xls");

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
</body>
</html>