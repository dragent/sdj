<?php
    if(empty($_POST ) || empty($_POST['user']) || empty($_POST['password']))
    {
        require "php/view/firstPage.php";
    }
    else {
      include_once '/php/dao/factory.php';
      include_once '/php/dao/userDao.php';

      $fact=new factory();
      $userFact= new userDao();
      $bdd= $fact->connectBdd();
      if(count($userFact->getUserByPassAndLogin($_POST['user'], $_POST['password'],$bdd))>0)
      {
          header('Location: /php/controller/principalController.php');
          exit();
      }
      else
      {
        require "php/view/firstPage.php";
      }
    }
