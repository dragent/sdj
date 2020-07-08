<?php

include_once dirname(dirname(__DIR__)).DIRECTORY_SEPARATOR."core".DIRECTORY_SEPARATOR."Table".DIRECTORY_SEPARATOR."entityInterface.php";

class customerTable implements entity
{
    private $bdd;
    function __construct($bdd)
    {
        $this->bdd=$bdd;
    }

    public function create( $object)
    {
        $req= $this->bdd->prepare('Insert INTO customer (nameCust , nicknameCust , phoneCust , bookingCust , takeawayCust  , banCust ) VALUES (:nameCust,:nickNameCust,:phoneCust,:bookingCust,:takeAwayCust,:banCust)');
        $req->bindValue(':nameCust',$object->getName(),PDO::PARAM_STR);
        $req->bindValue(":nickNameCust", $object->getNickname(),PDO::PARAM_STR);
        $req->bindValue(":phoneCust",$object->getPhone(), PDO::PARAM_INT);
        $req->bindValue(":bookingCust",$object->isBooking(),PDO::PARAM_BOOL);
        $req->bindValue(":takeAwayCust",$object->isTakeaway(),PDO::PARAM_BOOL);
        $req->bindValue(":banCust",$object->isBan(),PDO::PARAM_BOOL);
        $req->execute();
    }

    public function deleteById( $id)
    {
        $req= $this->bdd->prepare('DELETE  FROM customer where idCust = ?');
        $req->execute(array($id));
        $result=  $req->fetchAll(PDO::FETCH_NUM  );
        return $result;
    }

    public function searchByName( $name,$nickname)
    {
        $req= $this->bdd->prepare('Select * FROM customer where nameCust like ? AND nicknameCust like ?');
        $req->execute(array("$name","$nickname"));
        $result=  $req->fetchAll(PDO::FETCH_NUM );
        return $result;
    }

    public function modifyById( $object)
    {
        $req= $this->bdd->prepare('UPDATE customer set phoneCust = ?, bookingcust = ?, takeawayCust = ? , bancust = ? where idCust = ?');
        $req->execute(array($object->getPhone(),($object->isBooking())?1:0,($object->isTakeaway())?1:0,($object->isBan())?1:0,$object->getId()));
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
        $req= $this->bdd->prepare("DELETE FROM customer");
        $result=  $req->fetchAll(PDO::FETCH_NUM);
        return $result;
    }

    public function searchById($id)
    {
        $req=$this->bdd->prepare('Select * FROM customer  where idCust = ?');
        $req->execute(array($id));
        $result=  $req->fetchAll(PDO::FETCH_NUM );
        return $result;
    }
}
