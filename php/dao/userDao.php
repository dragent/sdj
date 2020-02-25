<?php
    include_once 'entitieDao.php';
    class userDao implements entitieDao
    {
        function __construct()
        {

        }

        function getUserByPassAndLogin( $user, $password, $bdd)
        {
            $req= $bdd->prepare('Select * FROM User Where nameUser LIKE  ?  AND passUser LIKE  ?');
            $req->execute(array("$user","$password"));
            $result=  $req->fetchAll();
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
