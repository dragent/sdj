<?php
session_start();
if(!isset($_SESSION["newsession"]))
{
    header('Location: ../../');
    exit();
}
?>
    <script type="text/javascript">
        var actif='addCust';
    </script>
<?php
$alert="";
if(isset($_POST['nameCust']))
{
    require_once dirname(__DIR__).DIRECTORY_SEPARATOR."Entity".DIRECTORY_SEPARATOR."customer.php";
    require_once dirname(__DIR__).DIRECTORY_SEPARATOR."Table".DIRECTORY_SEPARATOR."customerTable.php";
    require_once dirname(dirname(__DIR__)).DIRECTORY_SEPARATOR."core".DIRECTORY_SEPARATOR."Auth".DIRECTORY_SEPARATOR."dbAuth.php";
    $bdd= dbAuth::connectBdd();
    $customerDataObject= new customerTable($bdd);
    $bookingCust= ( isset($_POST['bookingCust'])) ? true : false;
    $takeAwayCust= ( isset($_POST['takeAwayCust'])) ? true : false;
    $banCust= ( isset( $_POST['banCust'])) ? true : false;
    $custAddObject= customer::__constructByAdd(  $_POST['nameCust'],  $_POST['nickNameCust'],  $_POST['telCust'],$bookingCust,$takeAwayCust,$banCust);
    $customerDataObject->create($custAddObject);
    unset($_POST['nameCust']);
    unset($_POST['nickNameCust']);
    unset($_POST['telCust']);
    unset($_POST['bookingCust']);
    unset($_POST['takeAwayCust']);
    unset($_POST['banCust']);
    $alert='<div class="alert alert-success">Vous avez été enregistré</div>';
}
require dirname(__DIR__).DIRECTORY_SEPARATOR."view".DIRECTORY_SEPARATOR."templates".DIRECTORY_SEPARATOR."header.php";
require dirname(__DIR__).DIRECTORY_SEPARATOR."view".DIRECTORY_SEPARATOR."page".DIRECTORY_SEPARATOR."addPage.php";
