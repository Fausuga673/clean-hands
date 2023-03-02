<?php

$objConection = new Conection();

if (isset($_POST['login'])) {

    if (!empty($_POST['email']) && !empty($_POST['email'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];
        $login = $objConection->consultar("SELECT * FROM user WHERE email = '$email' and password = '$password'");

        if (count($login) > 0) {
            ?><script>location = 'view/list.php'</script><?php
        };
        echo "<script>accessDenied()</script>";

    } else {

        echo "<script>emptyFields()</script>";

    }

}

?>