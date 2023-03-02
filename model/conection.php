<?php

class Conection {

    private $server="bryhfawkndpnk35kie5a-mysql.services.clever-cloud.com";
    private $user="uzprw6omlr4plydh";
    private $password="sTub7CcgmWxcAuyhHphL";
    private $conection;

    public function __construct() {
        try {
            $this->conection = new PDO("mysql:host=$this->server;dbname=cleanhands", $this->user, $this->password);
            $this->conection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            return "Falla de conexión".$e;
        }
    }

    public function ejecutar($sql) {
        $this->conection->exec($sql);
        return $this->conection->lastInsertId();
    }

    public function consultar ($sql) {
        $sentencia = $this->conection->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll();
    }

}

?>