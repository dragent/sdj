<?php

    session_start();
    if(isset($_SESSION))
    {
        $_SESSION = array();
        session_destroy();
    }
    /**********************************************
    ***      Vérification des variables posts   ***
    **********************************************/
    if(empty($_POST ) || empty($_POST['user']) || empty($_POST['password']))
    {
        require "php/view/connexion.php";
    }
    else {
      include_once '/php/dao/factory.php';
      include_once '/php/dao/userDao.php';
      /******************************************
      ***      Construction d'objet sur php   ***
      ******************************************/
      $fact=new factory();
      $bdd= $fact->connectBdd();
      $userFact= new adminDao( $bdd);

      /*****************************************************************************************************
      *** Compte le nombre de résultat de la requete si > 0 alors la requete est réussi sinon on relance ***
      *****************************************************************************************************/
      $param=$userFact->getUserByPassAndLogin($_POST['user'], $_POST['password']);
      if(count($param)>0)
      {
          session_start();
          $_SESSION["newsession"]=$param[0][0];
          header('Location: /php/controller/principalController.php');
          exit();
      }
      else
      {
        require "php/view/connexion.php";
      }
    }
