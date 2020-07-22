<div id='container' class="page col-9">
<h1 id="title" class="page">Répertoire Client</h1>
<h2 id="titlePage"><?php
if(!isset($_POST["on"]))
{
    echo "Tout les clients";
}
else {
    switch($_POST["on"])
    {
        case "home" : echo "Tout les clients";
            break;
        case "cust" : echo "Client Acceptés";
            break;
        case "blacklist" : echo "Blacklist";
            break;
    }
}
?></h2>
<?php
require dirname(__DIR__).DIRECTORY_SEPARATOR."templates".DIRECTORY_SEPARATOR."dataContainer.php";
?>
</div>
</body>
</html>
