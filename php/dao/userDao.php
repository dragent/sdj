<?php
    include_once 'entitieInterface.php';

    /**********************************************
    ***      Création d'une classe  interragissant avec la table Admin    ***
    **********************************************/
    class adminDao implements entitieDao
    {
        private $bdd;
        function __construct( $bdd)
        {
            $this->bdd=$bdd;
        }

        function getUserByPassAndLogin( $user, $password)
        {
            $req= $this->bdd->prepare('Select * FROM admin Where nameAdmin LIKE  ?  AND passAdmin LIKE  ?');
            $req->execute(array("$user","$password"));
            $result=  $req->fetchAll(PDO::FETCH_NUM  );
            return $result;
        }
        public function create( $object)
        {

        }
        public function deleteById( $id)
        {

        }
        public function searchById( $id)
        {

        }
        public function modifyById( $id, $object)
        {

        }
        public function getAll()
        {

        }
        public function deleteAll()
        {

        }
    }
