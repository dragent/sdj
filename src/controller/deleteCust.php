<?php
    session_start();
    if(!isset($_SESSION["newsession"]))
    {
        header('Location: ../../');
        exit();
    }
    require_once dirname(__DIR__).DIRECTORY_SEPARATOR."Entity".DIRECTORY_SEPARATOR."customer.php";
    require_once dirname(__DIR__).DIRECTORY_SEPARATOR."Table".DIRECTORY_SEPARATOR."customerTable.php";
    require_once dirname(dirname(__DIR__)).DIRECTORY_SEPARATOR."core".DIRECTORY_SEPARATOR."Auth".DIRECTORY_SEPARATOR."dbAuth.php";
    $bdd= dbAuth::connectBdd();
    $customerDataObject= new customerTable($bdd);
    $customerDataObject->deleteById($_SESSION["idCust"]);
    header('Location: principalController.php');