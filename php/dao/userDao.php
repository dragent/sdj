<?php
    include_once 'entitieDao.php';

    /**********************************************
    ***      Création d'une classe  interragissant avec la table Admin    ***
    **********************************************/
    class adminDao implements entitieDao
    {
        function __construct()
        {

        }

        function getUserByPassAndLogin( $user, $password, $bdd)
        {
            $req= $bdd->prepare('Select * FROM admin Where nameAdmin LIKE  ?  AND passAdmin LIKE  ?');
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
