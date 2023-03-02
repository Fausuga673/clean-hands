<?php
$objConection = new Conection();

if ($_GET) {
    $id_person = $_GET['id_person'];

    $steps = "SELECT * FROM steps WHERE id_person = $id_person";
    $steps = $objConection->consultar($steps);

    $person = "SELECT * FROM person WHERE id = $id_person";
    $person = $objConection->consultar($person);
}

if ($_POST) {

    if (isset($_POST['savelist'])) {
        $paso1 = strtolower($_POST['step1']);
        $paso2 = strtolower($_POST['step2']);
        $paso3 = strtolower($_POST['step3']);
        $paso4 = strtolower($_POST['step4']);
        $paso5 = strtolower($_POST['step5']);
        $paso6 = strtolower($_POST['step6']);
        $paso7 = strtolower($_POST['step7']);
        $paso8 = strtolower($_POST['step8']);
        $paso9 = strtolower($_POST['step9']);
        $paso10 = strtolower($_POST['step10']);
        $paso11 = strtolower($_POST['step11']);
        $result = $_POST['result'];
    
        $sql = "UPDATE `steps` 
        SET `Mojarse las manos` = '$paso1',
        `Aplicar jabón` = '$paso2', 
        `Frotar palmas entre sí` = '$paso3', 
        `Frotar palma contra el dorso` = '$paso4', 
        `Frotar palmas con dedos entrelazados` = '$paso5', 
        `Frotar dorso de los dedos` = '$paso6', 
        `Rodear pulgar con la mano contraria` = '$paso7', 
        `Frotar punta de los dedos` = '$paso8', 
        `Enjuagar manos` = '$paso9', 
        `Secar manos` = '$paso10', 
        `Cerrar grifo` = '$paso11' 
        WHERE `steps`.`id_person` = $id_person";
        $objConection->ejecutar($sql);

        $sql = "UPDATE `person` SET `result` = $result WHERE `person`.`id` = $id_person";
        $objConection->ejecutar($sql);
    }

    if (isset($_POST['clearlist'])) {
        $sql = "UPDATE `steps` 
        SET `Mojarse las manos` = '',
        `Aplicar jabón` = '', 
        `Frotar palmas entre sí` = '', 
        `Frotar palma contra el dorso` = '', 
        `Frotar palmas con dedos entrelazados` = '', 
        `Frotar dorso de los dedos` = '', 
        `Rodear pulgar con la mano contraria` = '', 
        `Frotar punta de los dedos` = '', 
        `Enjuagar manos` = '', 
        `Secar manos` = '', 
        `Cerrar grifo` = '' 
        WHERE `steps`.`id_person` = $id_person";
        $objConection->ejecutar($sql);

        $sql = "UPDATE `person` SET `result` = $result WHERE `person`.`id` = 0";
        $objConection->ejecutar($sql);
    }

    ?><script>location = 'list.php'</script><?php
}
?>