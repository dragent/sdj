<?php
    session_start();
    if(!isset($_SESSION["newsession"]))
    {
        header('Location: ../../');
        exit();
    }
    include_once '../dao/factory.php';
    /******************************************
    ***      Construction d'objet sur php   ***
    ******************************************/
    $fact=new factory();
    $bdd= $fact->connectBdd();
    include_once '../entity/customerEntity.php';
    include_once '../dao/customerDao.php';

    if(!isset($_POST["on"]))
    {?>
        <script type="text/javascript">
            var actif="home";
        </script>
        <?php
        $customerDataObject= new customerDao($bdd);
        $customerData= $customerDataObject->getAll();
        for($i=0;$i<count($customerData);$i++)
        {
            $customerObject[$i]= new customerEntity($customerData[$i]);
        }
    }
    else {
        ?>
        <script type="text/javascript">
            var actif='<?php echo $_POST["on"]; ?>'
        </script>
        <?php
            $customerDataObject= new customerDao($bdd);
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
                $customerObject[$i]= new customerEntity($customerData[$i]);
            }
        if(strcmp($_POST["on"],"home")==0)
        {

        }

      }
    require "../view/accueil.php";
