<?php

    /**********************************************
    ***      Vérification des variables posts   ***
    **********************************************/
    if(empty($_POST ) || empty($_POST['user']) || empty($_POST['password']))
    {
        require "php/view/firstPage.php";
    }
    else {
      include_once '/php/dao/factory.php';
      include_once '/php/dao/userDao.php';
      /******************************************
      ***      Construction d'objet sur php   ***
      ******************************************/
      $fact=new factory();
      $userFact= new adminDao();
      $bdd= $fact->connectBdd();

      /*****************************************************************************************************
      *** Compte le nombre de résultat de la requete si > 0 alors la requete est réussi sinon on relance ***
      *****************************************************************************************************/
      $param=$userFact->getUserByPassAndLogin($_POST['user'], $_POST['password'],$bdd);
      if(count($param)>0)
      {

          session_start();
          $_SESSION["newsession"]=$param[0][0];
          $_SESSION["actif"]="home";
          echo isset($_SESSION);
          header('Location: /php/controller/principalController.php');
          exit();
      }
      else
      {
        require "php/view/firstPage.php";
      }
    }
