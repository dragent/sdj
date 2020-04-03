<?php
    /*********************************************
    ***       Création d'une classe sur php    ***
    *********************************************/
    class customerEntity
    {

        private $name;
        private $nickname;
        private $phone;
        private $booking;
        private $takeaway;
        private $ban;
        function __construct($data)
        {

          $this->name= $data[1];
          $this->nickname=$data[2];
          $this->phone=$data[3];
          $this->booking=$data[4];
          $this->takeaway=$data[5];
          $this->ban=$data[6];
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
        function isBooking()
        {
            return $this->takeaway;
        }
        function isTakeaway()
        {
            return $this->takeaway;
        }

        function isBan()
        {
            return $this->ban;
        }

    }
