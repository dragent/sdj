<?php
session_start();
if(!isset($_SESSION["newsession"]))
{
    header('Location: ../../');
    exit();
}
require_once dirname(dirname(__DIR__)).DIRECTORY_SEPARATOR."core".DIRECTORY_SEPARATOR."Auth".DIRECTORY_SEPARATOR."dbAuth.php";
$bdd= dbAuth::connectBdd();
require_once dirname(__DIR__).DIRECTORY_SEPARATOR."Entity".DIRECTORY_SEPARATOR."customer.php";
require_once dirname(__DIR__).DIRECTORY_SEPARATOR."Table".DIRECTORY_SEPARATOR."customerTable.php";
$customerDataObject= new customerTable($bdd);
$customerData= $customerDataObject->searchById($_POST["idCust"]);
$customerObject= customer::__constructBySelect($customerData[0]);
$_POST["idCust"]=$customerData[0];
if((isset($_POST['Action']))&&($_POST['Action']=="Delete"))
{
    $_SESSION['idCust']=$customerObject->getId();
    header('Location: suppression');
}
if(isset($_POST["banCust"]))
{

    if(!isset($_POST["phoneCust"]))
    {
        $phone=$customerObject->getPhone();
    }
    else
    {
        $phone=$_POST["phoneCust"];
    }
    $customerObject->setModif($phone,filter_var($_POST["takeAwayCust"], FILTER_VALIDATE_BOOLEAN),filter_var($_POST["bookingCust"], FILTER_VALIDATE_BOOLEAN),filter_var($_POST["banCust"], FILTER_VALIDATE_BOOLEAN));
    $customerDataObject->modifyById($customerObject);
    unset($_POST["phoneCust"]);
    unset($_POST["takeAwayCust"]);
    unset($_POST["bookingCust"]);
    unset($_POST["banCust"]);
}

require dirname(__DIR__).DIRECTORY_SEPARATOR."view".DIRECTORY_SEPARATOR."templates".DIRECTORY_SEPARATOR."header.php";
require dirname(__DIR__).DIRECTORY_SEPARATOR."view".DIRECTORY_SEPARATOR."page".DIRECTORY_SEPARATOR."modifCustomer.php";
