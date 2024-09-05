<?php

class conexion {
    //put your code here
    private $conexion;
    public function __construct() {
        $hostname='localhost';
        $username='root';
        $password='';
        $database='matricula';
        $this->conexion= mysqli_connect($hostname, $username, $password, $database);
    }

    public function getConexion() {
        return $this->conexion;
    }
}
