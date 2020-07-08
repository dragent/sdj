<?php
/**********************************
 *** Ouverture de la session php ***
 **********************************/
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


if(!isset($_POST["on"]))
{?>
    <script type="text/javascript">
        var actif="home";
    </script>
    <?php
    $customerDataObject= new customerTable($bdd);
    $customerData= $customerDataObject->getAll();
    for($i=0;$i<count($customerData);$i++)
    {

        $customerObject[$i]= customer::__constructBySelect($customerData[$i]);
    }
}
else {
    ?>
    <script type="text/javascript">
        var actif='<?= $_POST["on"]; ?>'
    </script>
    <?php
    $customerDataObject= new customerTable($bdd);
    switch($_POST["on"])
    {
        case "home" : $customerData=$customerDataObject->getAll();
            break;
        case "cust" : $customerData=$customerDataObject->getUnban();
            break;
        case "blacklist" : $customerData=$customerDataObject->getBan();
            break;
    }
    for($i=0;$i<count($customerData);$i++)
    {
        $customerObject[$i]=  customer::__constructBySelect($customerData[$i]);
    }

}
require dirname(__DIR__).DIRECTORY_SEPARATOR."view".DIRECTORY_SEPARATOR."templates".DIRECTORY_SEPARATOR."header.php";
require dirname(__DIR__).DIRECTORY_SEPARATOR."view".DIRECTORY_SEPARATOR."page".DIRECTORY_SEPARATOR."accueil.php";
