<?php
    class factory
    {
        private $bdd;

        function __construct()
        {

        }

        function connectBdd()
        {
            $this->bdd = new PDO('mysql:host=127.0.0.1;dbname=sdj', 'root','');
            return $this->bdd;
        }

        function closeBdd()
        {
            $this->bdd->connection = new PDO();
        }
    }
