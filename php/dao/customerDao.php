<?php
    include_once 'entitieInterface.php';
    class customerDao implements entitieDao
    {
        private $bdd;
        function __construct($bdd)
        {
            $this->bdd=$bdd;
        }

        public function create( $object)
        {
           $req= $bdd->prepare('Insert INTO customer VALUES  custName LIKE  ?  AND passUser LIKE  ?');
            $req->execute(array("$user","$password"));
            $result=  $req->fetchAll();
        }

        public function deleteById( $id)
        {
            $req= $bdd->prepare('Select * FROM customer where idCust like ?');
            $req->execute(array("$idCust"));
            $result=  $req->fetchAll(PDO::FETCH_NUM  );
            return $result;
        }

        public function searchByName( $object)
        {
            $req= $bdd->prepare('Select * FROM customer where custName like ? AND custNickname like ?');
            $req->execute(array("$name","$nickname"));
            $result=  $req->fetchAll(PDO::FETCH_NUM  );
            return $result;
        }

        public function modifyById( $id, $object)
        {
            $req= $bdd->prepare('Select * FROM customer');
            $result=  $req->fetchAll(PDO::FETCH_NUM  );
            return $result;
        }

        public function getAll()
        {
            $req=$this->bdd->prepare('Select * FROM customer Order By nameCust, nicknameCust');
            $req->execute();
            $result=$req->fetchAll(PDO::FETCH_NUM);
            return $result;
        }

        public function getBan()
        {
            $req=$this->bdd->prepare('Select * FROM customer  where banCust is true  Order By nameCust, nicknameCust');
            $req->execute();
            $result=$req->fetchAll(PDO::FETCH_NUM);
            return $result;
        }

        public function getUnban()
        {
            $req=$this->bdd->prepare('Select * FROM customer where banCust is false  Order By nameCust, nicknameCust');
            $req->execute();
            $result=$req->fetchAll(PDO::FETCH_NUM);
            return $result;
        }

        public function deleteAll()
        {
            $req= $bdd->prepare("DELETE FROM customer");
            $result=  $req->fetchAll(PDO::FETCH_NUM);
            return $result;
        }
        public function searchById( $id)
        {

        }
    }
