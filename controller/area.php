<?php

$objConection = new Conection();

if ($_POST) {

    if (isset($_POST['createarea'])) {
        
        $name = $_POST['area'];

        $sql = "INSERT INTO `area` (`id`, `name`) VALUES (NULL, '$name')";
        $objConection->ejecutar($sql);
        ?><script>location = 'list.php'</script><?php

    }

    if (isset($_POST['updatearea'])) {
        
        $name = $_POST['areaname'];
        $id = $_POST['idarea'];

        $sql = "UPDATE `area` SET `name` = '$name' WHERE `area`.`id` = $id";
        $objConection->ejecutar($sql);

        ?><script>location = 'list.php'</script><?php

    }

    if (isset($_POST['deletearea'])) {
        
        $id = $_POST['idarea'];

        $sql = "DELETE FROM `area` WHERE `area`.`id` = $id";
        $objConection->ejecutar($sql);

        ?><script>location = 'list.php'</script><?php

    }

    if (isset($_POST['deleteAllArea'])) {
        
        $sql = "DELETE FROM `area`";
        $objConection->ejecutar($sql);

        ?><script>location = 'list.php'</script><?php

    }

}

?>