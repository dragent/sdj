<?php
/*********************************************
 ***       Création d'une classe sur php    ***
 *********************************************/
class Customer
{
    private $id;
    private $name;
    private $nickname;
    private $phone;
    private $booking;
    private $takeaway;
    private $ban;

    /**********************************************
     ***      Constructeur de l'objet client     ***
     ***      Lit un tableau de donnée structuré ***
     ***      et les enregistre dans l'objet     ***
     **********************************************/
    function __construct()
    {
    }

    static public function __constructBySelect($data)
    {
        $object=new static();
        $object->id=$data[0];
        $object->name= $data[1];
        $object->nickname=$data[2];
        $object->phone=$data[3];
        $object->booking=$data[4];
        $object->takeaway=$data[5];
        $object->ban=$data[6];
        return $object;
    }

    static public function __constructByAdd($name,$nickname,$phone,$booking,$takeaway,$ban)
    {
        $object=new static();
        ?><script type="text/javascript">console.log("<?php echo $name;?>")</script><?php
        $object->name= $name;
        $object->nickname=$nickname;
        $object->phone=$phone;
        $object->booking=$booking;
        $object->takeaway=$takeaway;
        $object->ban=$ban;
        return $object;
    }

    function getId()
    {
        return $this->id;
    }

    function getName()
    {
        return $this->name;
    }

    function getNickname()
    {
        return $this->nickname;
    }

    function getPhone()
    {
        return $this->phone;
    }
    private function setPhone($value)
    {
        $this->phone=$value;
    }
    function isBooking()
    {
        return $this->booking;
    }
    private function setBooking($value)
    {
        $this->booking=$value;
    }
    function isTakeaway()
    {
        if( $this->takeaway)
        {
            return true;
        }
        return false;
    }
    private function setTakeaway($value)
    {
        $this->takeaway=$value;
    }
    function isBan()
    {
        return $this->ban;
    }
    private function setBan($value)
    {
        $this->ban=$value;
    }

    function setModif($phone,$takeAway,$booking,$ban)
    {
        $this->setTakeaway($takeAway);
        $this->setBan($ban);
        $this->setBooking($booking);
        $this->setPhone($phone);
    }
}
