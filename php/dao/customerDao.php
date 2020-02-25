<?php
    include_once 'entitieDao.php';
    class customerDao implements entitieDao
    {
        function __construct()
        {

        }

        public function create( $object)
        {
            $req= $bdd->prepare('Select * FROM User Where nameUser LIKE  ?  AND passUser LIKE  ?');
            $req->execute(array("$user","$password"));
            $result=  $req->fetchAll();
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
