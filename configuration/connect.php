<?php

    define('HOST','localhost');
    define('DATABASENAME','crud_mvc_poo');
    define('USER','rafael');
    define('PASSWORD','@Avell123');

    class Connect {

        protected $connection;

        function __construct()
        {
            $this->connectDataBase();
        }

        function connectDataBase()
        {
            try {
                $this->connection = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME, USER, PASSWORD);
            } catch (PDOException $e) {
                echo "Error".$e->getMessage();
                die();
            }
        }
    }
?>