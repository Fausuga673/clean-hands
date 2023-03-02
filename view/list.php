<?php
include '../model/conection.php';
include '../model/select.php';
include '../controller/area.php';
include '../controller/person.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear encuesta</title>

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
    <div class="container-fluid w-100" style="height:100%">
        <div class="row">

            <div class="col-md-3"></div>

            <div class="col-md-6">

                <div class="card mt-4 ">
                    <form id="FormSaveUser" method="post" action="list.php" class="card-body d-flex align-items-center justify-content-between flex-row" style="gap: 2vw">
                        
                        <div class="form-group m-0 w-100 bg-transparent">
                            <input name="area" type="text" class="form-control glass" placeholder="Nombre del área">
                        </div>

                        <button name="deleteAllArea" type="submit" class="btn btn-dark text-institutional"><i class="fa-solid fa-broom"></i></button>
                        <button name="createarea" type="submit" class="btn btn-dark text-institutional"><i class="fa-solid fa-plus"></i></button>
                        <a href="results.php" class="btn btn-dark text-institutional"><i class="fa-solid fa-square-poll-vertical"></i></a>
                    
                    </form>
                </div>
                <?php foreach ($areas as $area) { ?>
                    <div class="card mt-4 glass">

                        <form method="post" action="list.php" class="card-header pb-4 bg-transparent d-flex align-items-center justify-content-end flex-row" style="gap: 2vw">
                            
                            <input name="idarea" type="hidden" class="form-control glass" value="<?php echo $area['id']?>">
                            <div class="form-group m-0 w-100">
                                <input name="areaname" class="form-control glass" value="<?php echo $area['name']?>">
                            </div>
                            <button type="submit" name="deleteAllperson" class="btn btn-dark text-institutional"><i class="fa-solid fa-broom"></i></button>
                            <button type="submit" name="deletearea" class="btn btn-dark text-institutional"><i class="fa-solid fa-trash"></i></button>
                            <button type="submit" name="updatearea" class="btn btn-dark text-institutional"><i class="fa-solid fa-floppy-disk"></i></button>
                            <button type="submit" name="addperson" class="btn btn-dark text-institutional"><i class="fa-solid fa-user-plus"></i></button>

                        </form>

                        <div class="card-body pb-2" id="button<?php echo $area['id']?>">

                            <?php foreach ($persons as $person) { ?>
                                <?php if ($person['area'] == $area['id']) { ?>

                                    <form method="post" action="list.php" class="d-flex mb-4 align-items-center justify-content-end flex-row" style="gap: 2vw">
                                        <input name="personid" type="hidden" class="form-control glass" value="<?php echo $person['id']?>">
                                        <div class="form-group m-0 w-100">
                                            <input name="name" type="text" class="form-control glass" value="<?php echo $person['name']?>">
                                        </div>
                                        <button type="submit" name="deleteperson" class="btn btn-dark text-institutional"><i class="fa-solid fa-user-xmark"></i></button>
                                        <button type="submit" name="updateperson" class="btn btn-dark text-institutional"><i class="fa-solid fa-floppy-disk"></i></button>
                                        <a href="person.php?id_person=<?php echo $person['id']?>" class="btn btn-dark text-institutional"><i class="fa-solid fa-table"></i></a>
                                    </form>

                                <?php } ?>
                            <?php } ?>

                        </div>

                        <fieldset class="card-footer d-b bg-transparent p-0 text-dark text-center position-absolute" style="bottom:0; left:50%; transform:translate(-50%, 50%); padding: 0 5px;">
                            <legend class="dropdown-persons" id="button<?php echo $area['id']?>"><h2 class="mt-4"><i class="fa-solid fa-circle-chevron-down"></i></h2></legend>
                        </fieldset>

                    </div>
                <?php } ?>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <script src="js/list.js"></script>
</body>
</html>