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

    if(empty($_POST) || empty($_POST['user']) || empty($_POST['password']))
    {

        echo "<script> console.log( 'test7') </script>";
        require_once dirname(__DIR__).DIRECTORY_SEPARATOR."view".DIRECTORY_SEPARATOR."page".DIRECTORY_SEPARATOR."connection.php";
    }
    else
    {
        require_once "core".DIRECTORY_SEPARATOR."Auth".DIRECTORY_SEPARATOR."dbAuth.php";

        require_once "src".DIRECTORY_SEPARATOR."Table".DIRECTORY_SEPARATOR."user.php";
        /******************************************
         ***      Construction d'objet sur php   ***
         ******************************************/
        $bdd= dbAuth::connectBdd();
        $userFact= new user( $bdd);

        /*****************************************************************************************************
         *** Compte le nombre de résultat de la requete si > 0 alors la requete est réussi sinon on relance ***
         *****************************************************************************************************/
        $param=$userFact->getUserByPassAndLogin($_POST['user'], $_POST['password']);
        if(count($param)>0)
        {
            session_start();
            $_SESSION["newsession"]=$param[0][0];
            header("Location: affichage");
            exit();
        }
        else
        {
            require dirname(__DIR__).DIRECTORY_SEPARATOR."view".DIRECTORY_SEPARATOR."page".DIRECTORY_SEPARATOR."connection.php";
        }
    }	