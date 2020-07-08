<?php


class dbAuth
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
    public static function connectBdd()
    {
        $server=  'dragentfqw596.mysql.db';
        $bdd= 'dragentfqw596';
        $login = 'dragentfqw596';
        $password='Tales31121993';

      
        $bdd = new PDO('mysql:dbname='.$bdd.';host='.$server,$login,$password);

        return $bdd;
    }

    /*************************************************************
     ***      fermeture de la connexion à la base de données    ***
     *************************************************************/
    function closeBdd()
    {
        $this->bdd->connection = new PDO();
    }
}						