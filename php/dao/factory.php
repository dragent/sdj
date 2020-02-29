<?php
    /*********************************************
    ***       Création d'une classe sur php    ***
    *********************************************/
    class factory
    {
        private $bdd;

        /**************************************************
        ***       Création d'un constructeur sur php    ***
        **************************************************/
        function __construct()
        {

        }


        /**********************************************
        ***      Connection à la base de données    ***
        **********************************************/
        function connectBdd()
        {
            $this->bdd = new PDO('mysql:host=127.0.0.1;dbname=sdj', 'root','');
            return $this->bdd;
        }

        /*************************************************************
        ***      fermeture de la connexion à la base de données    ***
        *************************************************************/
        function closeBdd()
        {
            $this->bdd->connection = new PDO();
        }
    }
