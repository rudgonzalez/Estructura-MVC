<?php

Class Conexion
{
    private $conect;

    public function __construct()
    {
        $connectionstring = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";".DB_CHARSET;

        try
        {
            $this->conect = new PDO($connectionstring, DB_USER, DB_PASSWORD);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e)
        {
            $this->conect = "Error de Conexión";
            echo  "ERROR: ".$e->getMessage();
        }
    }

    public function conect()
    {
        return $this->conect;
    }
}

?>