<?php

class conection{
    /* Conectar a una base de datos de MySQL invocando al controlador */
    private $dsn = 'mysql:dbname=almacen;host=127.0.0.1';
    private $usuario = 'root';
    private $clave = '';


    protected function connect(){
        try {
            return new PDO($this->dsn, $this->usuario, $this->clave);
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
    }

    protected function closeConnection(&$conn){
        $conn=null;
    }



}



?>