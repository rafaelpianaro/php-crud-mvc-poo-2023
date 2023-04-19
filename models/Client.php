<?php

    require_once('./configuration/connect.php');

    class ClientModel extends Connect {
        private $table;

        function __construct()
        {
            parent::__construct();
            $this->table = 'clients';
        }

        function getAll()
        {
            $sqlSelect = $this->connection->query("select * from $this->table");
            $resultQuery = $sqlSelect->fetchAll();
            return $resultQuery;
        }
    }

?>