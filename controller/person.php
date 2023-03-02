<?php

$objConection = new Conection();

if ($_POST) {

    if (isset($_POST['addperson'])) {
        
        $id = $_POST['idarea'];

        $sql = "INSERT INTO `person` (`id`, `name`, `area`, 'result') VALUES (NULL, '', '$id', 0)";
        $objConection->ejecutar($sql);

        $idperson = "SELECT * FROM person ORDER BY id DESC LIMIT 1; ";
        $idperson = $objConection->consultar($idperson);
        $idperson = $idperson[0]['id'];

        $sql = "INSERT INTO `steps` 
        (`id`, 
        `id_person`, 
        `Mojarse las manos`, 
        `Aplicar jabón`, 
        `Frotar palmas entre sí`, 
        `Frotar palma contra el dorso`, 
        `Frotar palmas con dedos entrelazados`, 
        `Frotar dorso de los dedos`, `Rodear pulgar con la mano contraria`, 
        `Frotar punta de los dedos`, 
        `Enjuagar manos`, `Secar manos`, 
        `Cerrar grifo`) 
        VALUES (NULL, '$idperson', '', '', '', '', '', '', '', '', '', '', '')";
        $objConection->ejecutar($sql);

        ?><script>location = 'list.php'</script><?php

    }

    if (isset($_POST['updateperson'])) {
        
        $id = $_POST['personid'];
        $name = $_POST['name'];

        $sql = "UPDATE `person` SET `name` = '$name' WHERE `person`.`id` = $id";
        $objConection->ejecutar($sql);

        ?><script>location = 'list.php'</script><?php

    }

    if (isset($_POST['deleteperson'])) {
        
        $id = $_POST['personid'];

        $sql = "DELETE FROM `person` WHERE `person`.`id` = $id";
        $objConection->ejecutar($sql);

        ?><script>location = 'list.php'</script><?php

    }

    if (isset($_POST['deleteAllperson'])) {
        
        $id = $_POST['idarea'];
        
        $sql = "DELETE FROM `person` WHERE `person`.`area` = $id";
        $objConection->ejecutar($sql);

        ?><script>location = 'list.php'</script><?php

    }

}

?>