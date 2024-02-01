<?php

    class Conexion extends PDO {
        private $hostBD = "localhost";
        private $nombreBD = "makemeapass";
        private $usuarioBD = "edib";
        private $passwordBD = "edib";

        public function __construct() {

            try {
                parent::__construct('mysql:host=' . $this->hostBD . ';dbname=' . $this->nombreBD . ';charset=utf8', 
            $this->usuarioBD, $this->passwordBD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

            } catch(PDOException $e) {
                echo 'Error: ' . $e->getMessage();
                exit;
            }
        }
    }
?>