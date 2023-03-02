<?php 
    $objConection = new Conection();

    $areas = "SELECT * FROM area ORDER BY id DESC";
    $areas = $objConection->consultar($areas);

    $persons = "SELECT * FROM person";
    $persons = $objConection->consultar($persons);
    
    $avarage = "SELECT a.name AS area_name, ROUND(AVG(p.result)) as avarage FROM area a INNER JOIN person p ON a.id = p.area GROUP BY area";
    $avarage = $objConection->consultar($avarage);

?>